
$(document).ready(function() {
	
   rudeware.getView("../views/nav.php","rudenav");


});
var rudeware={};
rudeware.getView = function(view,section) {
	$.post(
		view,
		{},
		function(data) {
			$("."+section).html(data);			
		}
	).fail(function(xhr) {
		alert("No se pudo establecer conexión con el servidor");
	})
}