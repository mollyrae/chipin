/*//////////////Browse Projects Filter///////////*/

$('#dd').click(function(){
	$(this).toggleClass('active');
});

$('ul.category li a').click(function(e){
	var category = $(e.target).text();
	$('#category').html(category);
});

$('#dd-2').click(function(){
	$(this).toggleClass('active');
});

$('ul.location li a').click(function(e){
	var location = $(e.target).text();
	$('#location').html(location);
});


/*//////////////login toggle///////////*/

var $toggle = $('.toggle');
var $logIn = $('.login-hide');
var toggleDuration = 400;

$toggle.click(function(){
	//alert("click");
	$logIn.slideToggle(toggleDuration);

});


/*//////////////mobile nav toggle///////////*/

$('.nav-control').click(function(){
		//alert("nav control clicked");
		$('.main ul').slideToggle("slow");

	});


/*//////////////Location Filter///////////*/

$('a.location').click(function(e){

	e.preventDefault();

	var clickRef = $(this).data('location');

	console.log(clickRef);

	$('.featured').children().hide();

	$('.project[data-location-name='+clickRef+']').show();

	var projectCount = $('.featured').children('div:visible').length;

	console.log(projectCount);

	if(projectCount == 0) {

		$('.featured').append("<h1>Sorry there are no projects in "+clickRef+" at the moment check back later.</h1>");

	};

});

/*//////////////Delete Projects///////////*/

$('.delete').click(function(e){

	e.preventDefault();

	var deleteProjectId = $(this).data('projid');
	        
	$.post(siteInfo.ajaxURL, {'action': 'deleteProject', 'projid' : deleteProjectId}, function(data){
		console.log(data);
	});

});