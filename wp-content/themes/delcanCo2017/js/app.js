$( document ).ready(function() {
    console.log( "Hello World!" );

	// $("body").click(function(){
	// 	$("body").toggleClass("inverse");
	// });
	// $("body").click(function(){
	// 	$("a").toggleClass("invertNav");
	// });
	// $("body").click(function(){
	// 	console.log($(".arrows"));
	// 	$(".arrows").toggleClass("invertArrows")

	// })

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


//if window <767, add <br> after first .menu-item
//if window is resized & <767, add <br>
$(function (){
	console.log("my function");
		if ($(window).width() < 767) {
		     console.log('Less than 767');
		     $("<br>").insertAfter($(".menu-item:first-child"));
	  }
	  else{
	  	console.log(">767");
	  }
});

$(window).resize(function(){
	if ($(window).width()<767){
		console.log("on resize, window<767");
		$("<br>").insertAfter($(".menu-item:first-child"));
	}
	else{
		console.log("on rezise, window>767");
	}
});


});


// $("button").mouseenter(function (){
//   var srcI = $(".show").attr("src");
//   srcI = srcI.replace("thumb","large");
//   $(".show").attr("src",srcI);
// });