$( document ).ready(function() {
    console.log( "Hello World!" );

	$("body").click(function(e){
		targetClass = $(e.target).attr('class');
		// console.log("clicking " + $(e.target).attr('class'));
		// console.log(targetClass.indexOf('wp-post-image'))
		// e.preventDefault();
		if((targetClass.indexOf('wp-post-image') && targetClass.indexOf('menu-image')) ==-1){
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
		}	
	});
$("<br>").insertAfter($(".menu-item:first-child"));


// if user clicks on a PROJECT LINK or NEW PAGE do nothing
// if user clicks on body && NOT a project link or new page, invert()
// if user clicks on input field invert()

// invert: background, body copy, nav links, logo color, cursors

//


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