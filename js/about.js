$(document).ready(function(){
      $('.parallax').parallax();
    });

 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });

  $('#modalJS').openModal();
  $('#modalJS').closeModal();
  $('#modalJava').openModal();
  $('#modalJava').closeModal();
  $('#modalCsharp').openModal();
  $('#modalCsharp').closeModal();
  $('#modalBash').openModal();
  $('#modalBash').closeModal();
