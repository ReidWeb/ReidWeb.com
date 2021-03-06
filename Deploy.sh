#!/bin/sh
#-
#
#The MIT License (MIT)
#
#Copyright (c) 2015 Peter Reid

#Permission is hereby granted, free of charge, to any person obtaining a copy
#of this software and associated documentation files (the "Software"), to deal
#in the Software without restriction, including without limitation the rights
#to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
#copies of the Software, and to permit persons to whom the Software is
#furnished to do so, subject to the following conditions:

#The above copyright notice and this permission notice shall be included in
#all copies or substantial portions of the Software.
#
#THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
#IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
#FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
#AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
#LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
#OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
#THE SOFTWARE.

# SCRIPT CONFIGURATION
# Origin repository (original)
ORIGINREPO="git@mygitlab.org:Peter/ReidWeb.com.git"
# Repository to mirror to
MIRRORREPO="git@github.com:ReidWeb/ReidWeb.com.git"
# Live Site URL
LIVEURL="https://reidweb.com"
# Live Site Directory
LIVEDIR="/home/srv/reidweb.com"
# Dev Site URL
DEVURL="http://dev.reidweb.com"
# Dev Site Directory
DEVDIR="/home/srv/dev.reidweb.com"

# BEGIN SCRIPT  - Do not edit below here
# Determine Directory in which located
DIR="pwd"
# Determine the branch that was checked out by CI Job
BRANCH="$(git log -n 1 --pretty=%d HEAD | awk '{print $2;}' | tr -d ')' | cut -c 8- | sed 's/.$//')"
printf "Branch: $BRANCH \n"

# Mirror Repository Function
doMirror() {
  printf "Cloning master repository\n"
  # Clone a bare version of the master repository
  git clone --bare $ORIGINREPO tmp
  cd tmp
  printf "Pushing to mirror repository\n"
  # Push to the mirror repository
  git push --mirror $MIRRORREPO
  # Remove tmp dir
  cd ..
  rm -rf tmp
}

# Deployment section
doDeploy() {
  printf "Deploying Repository\n"
  printf "Emptying Dev Site Directory\n"
  rm -rf $DEVDIR/*
  # Deploy to dev Site
  printf "Deploying to Dev site\n"
  cp -R * $DEVDIR
  # If the branch is the master branch deploy to Live Site
  if [[ $BRANCH == "master" ]]; then
    # Install NPM dependencies
    printf "Installing NPM dependencies\n"
    npm install
    # Run Grunt tasks on site
    printf "Running Grunt tasks\n"
    grunt
    grunt imagemin
    printf "Copying fonts to build dir\n"
    mkdir build/font/
    cp -R font/* build/font/
    printf "Deploying css assets to CDN\n"
    # Delete large file that does not need to be deployed to CDN
    rm build/css/materialize.css
    # Deploy to CDN
    ~/gsutil/gsutil -h "Cache-Control:public,max-age=604800" cp build/css/* gs://cdn.reidweb.com
    printf "Deploying to Live site\n"
    rm -rf $LIVEDIR/*
    cp -R build/* $LIVEDIR
  fi
}


# COMMAND INTEPRETER
# DO NOT EDIT THIS SECTION

case $1 in
        mirror)
                doMirror
        ;;
        deploy)
                doDeploy
        ;;
        *)
                printf "Running Script\n"
                doMirror
                doDeploy
                printf "Done\n"
                exit 0
        ;;
esac