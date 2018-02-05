$(window).scroll(function (event) {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
    var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
 
    //si cette valeur > à 200 on ajouter la class
    if (y >= 10) {
      $('.Nav').addClass('navbar-inverse');
    } else {
      // sinon, on l'enlève
      $('.Nav').removeClass('navbar-inverse');
    }
  });
    

/**
  * Basic Map
  */
//$(document).ready(function(){
// var map = new GMaps({
//    el: '#map-canvas',
//    lat: 3.897499,
//    lng: 11.550035,
//    zoom: 12,
//    zoomControl : true,
//    zoomControlOpt: {
//        style : 'SMALL',
//        position: 'TOP_LEFT'
//    },
//    panControl : false,
//  });
//});
