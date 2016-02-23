
$(document).ready(function() {
   rudeware.getView("views/nav.php","rudenav");
   rudeware.getView("views/main.php","view");

});

function getLogin(){
	rudeware.getView("views/login.php","view");
}
var rudeware={};
rudeware.getView = function(view,section) {
	$.post(
		view,
		{},
		function(data) {

			$("."+section).html(data);

			if(view == "views/main.php"){
				$('.carousel').carousel({
						interval:4000
				});
				$(".typed h3").typed({
			        strings: ["Inspirar tu marca","Animar tu mente","Elevar tus ventas"],
			        typeSpeed: 40,
					backDelay: 1500, 
					loop:true
			    }); 
			}
		}
	).fail(function(xhr) {
		alert("No se pudo establecer conexión con el servidor");
	})
}





/*Animación del dropdown del nav bar

$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });

*/
