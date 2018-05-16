var responsive = {
  init: function() {
    // Récupèration de la fenêtre modale
    var modal = $('#resultScreenshotModal')[0];

    // Ferme la fenêtre	modale si on clique en dehors de l'image
    modal.onclick = function(evt) {
      if (evt.target.className === 'modal-content') {
        return;
      }

      modal.scrollTop = 0;
      modal.style.display = "none";
    }

    // Récupération de la croix
    var span = $('.close')[0];

    // Ferme la fenêtre	modale lorsque l'on clique sur la croix
    span.onclick = function() {
      modal.scrollTop = 0;
      modal.style.display = "none";
    }

    // Ajoute un event sur les images pour les afficher dans la fenêtre modale
    $('.result-screenshot').on('click', function() {
      var modalImg = $('.modal-content')[0];
      var captionText = $('#caption')[0];

      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    });
  }
}

document.addEventListener('DOMContentLoaded', responsive.init);
