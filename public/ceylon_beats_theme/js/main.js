$(document).ready(function () {
	$(window).scroll(function () {
	  var sc = $(window).scrollTop();
	  if (sc > 100) {
		$(".navbar-top").addClass("sticky");
		$(".sticky-logo").removeClass("d-none");
		$(".default-logo").addClass("d-none");
	  } else {
		$(".navbar-top").removeClass("sticky");
		$(".sticky-logo").addClass("d-none");
		$(".default-logo").removeClass("d-none");
	  }
	});

	// $(window).scroll(function () {
	//   if ($(this).scrollTop() > 50) {
	// 	$('#back-to-top').fadeIn();
	//   } else {
	// 	$('#back-to-top').fadeOut();
	//   }
	// });

	// $('#back-to-top').click(function () {
	//   $('body,html').animate({
	// 	scrollTop: 0
	//   }, 400);
	//   return false;
	// });





	//   media Player ----------------------

    window.onclick = function () {
        document.getElementById("menu-container").classList.remove("active");
    };

});

function myFunction2(event) {
    event.stopPropagation();
    document.getElementById("menu-container").classList.toggle("active");
}
