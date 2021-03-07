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

	$( "#img1" ).click(function() {
		$("#blur-image").attr("src","assets/Mask Group 30@2x.png");
		$('#member-name').text("aaaaaaaaa");
		$('#member-designation').text("aaaaaaaaa");
		$('#member-description').text("aaaaaaaaa");
		$("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
	  });
	  $( "#img2" ).click(function() {
		$("#blur-image").attr("src","assets/Mask Group 27@2x.png");
		$('#member-name').text("Delaine Silva");
		$('#member-designation').text("STUDIO ENGINEER");
		$('#member-description').text(" Delaine is a fantastic musician hailing from the city of Kandy. He holds a unique identity as one of the most creative guitarists on the island with over 10 years in the industry. His solos are only secondary to his ear & accuracy in musicality and articulation. He is a team player with a skill to see your potential.");
		$("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
	  });
	  $( "#img3" ).click(function() {
		$("#blur-image").attr("src","assets/Mask Group 28@2x.png");
		$('#member-name').text("ccccc");
		$('#member-designation').text("cccccc");
		$('#member-description').text("cccccccc");
		$("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
	  });
	  $( "#img4" ).click(function() {
		$("#blur-image").attr("src","assets/Mask Group 29@2x.png");
		$('#member-name').text("ddddd");
		$('#member-designation').text("ddddddd");
		$('#member-description').text("ddddddddddd");
		$("#facebook").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#linkedin").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#mail").attr("href","https://www.facebook.com/?ref=tn_tnmn");
		$("#insta").attr("href","https://www.facebook.com/?ref=tn_tnmn");
	  });



	//   media Player ---------------------- 


  });


  