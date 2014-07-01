//problem:User when clicking on image goes to a dead end

//solution:Create an overlay with the large image

var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");
//Add image to overlay
$overlay.append($image);
//Add caption to overlay
$overlay.append($caption);

//Add overlay
$("body").append($overlay);


//capture the click event
$("#movieGallery a").click(function(event){
	event.preventDefault();
	var imageLocation = $(this).attr("href");

	//update overlay with the image
	$image.attr("src", imageLocation);
    //get child's alt attribute and set caption
    var captionText = $(this).children("img").attr("alt");
	$caption.text(captionText);

     // Show the overlay
	$overlay.show();


});


//Hide the overlay;
$($overlay).click(function() {
	$overlay.hide();

})