function mostrarFormulario() {
    var overlay = document.getElementById('overlay');
    var popup = document.getElementById('popup');

    overlay.classList.add('visible');
    popup.classList.add('visible');
  }

  function ocultarFormulario() {
    var overlay = document.getElementById('overlay');
    var popup = document.getElementById('popup');

    overlay.classList.remove('visible');
    popup.classList.remove('visible');
  }