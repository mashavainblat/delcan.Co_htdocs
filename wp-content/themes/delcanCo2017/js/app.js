$( document ).ready(function() {
    console.log( "Hello World!" );

	$("body").click(function(){
		console.log("clicking body")
		$("body").toggleClass("invertBackgroundToWhite");
		$("footer").toggleClass("invertBackgroundToWhite");
		$(".site-nav ul li a").toggleClass("invertNav");
		console.log($(".site-nav ul li a"))
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

$("<br>").insertAfter($(".menu-item:first-child"));

});


// $("button").mouseenter(function (){
//   var srcI = $(".show").attr("src");
//   srcI = srcI.replace("thumb","large");
//   $(".show").attr("src",srcI);
// });