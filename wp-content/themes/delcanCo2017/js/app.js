$( document ).ready(function() {
    console.log( "Hello World!" );

	$("body").click(function(){
		console.log("clicking body")
		$("body").toggleClass("invertBackgroundToWhite");
		$("footer").toggleClass("invertBackgroundToWhite");
		$(".site-nav ul li a").toggleClass("invertNav");
		$(".projectThumbnails a").toggleClass("invertProjectCursor");
		$(".projectTitleHoverContainer h2").toggleClass("invertProjectTitleHoverContainer");
		$(".site-nav ul li.current-menu-item a").toggleClass("invertCurrentMenuTab");
		$(".prevNextPosts a").toggleClass("invertLink");
		$("#contactInfo #social a").toggleClass("invertLink");
		$(".prevNextPosts img").toggleClass("invertArrows");
		$(".prevNextPosts a").toggleClass("invertHandCursor");
		$("#contactPage a").toggleClass("invertHandCursor");
		$("#subscribeInput input").toggleClass("invertHandCursor");
		$("#subscribeInput input").toggleClass("invertInput");
		$("img.menu-image.menu-image-title-hide").toggleClass("invertLogo");

	});
$("<br>").insertAfter($(".menu-item:first-child"));

});

	// $("body").click(function(){
	// 	console.log("clicking body")
	// });


	// $('.grid').masonry({
	//   itemSelector: '.grid-item',
	//   columnWidth: '.grid-sizer'
	//   // columnWidth: 240
	// });

// $('.grid').isotope({
//   itemSelector: '.grid-item',
//   percentPosition: true,
//   masonry: {
//     columnWidth: '.grid-sizer'
//   }
// });

	// $('.grid').isotope({
	//   // options
	//   itemSelector: '.grid-item',
	//   layoutMode: 'fitRows'
	// });

// $("button").mouseenter(function (){
//   var srcI = $(".show").attr("src");
//   srcI = srcI.replace("thumb","large");
//   $(".show").attr("src",srcI);
// });