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

	$logIn.slideToggle(toggleDuration);
	$('.lwa-form').show();
	$('.lwa-register').hide();

});


/*//////////////mobile nav toggle///////////*/

$('.nav-control').click(function(){
	$('.main ul').slideToggle("slow");

});


/*//////////////category Filter///////////*/

$('a.category').click(function(e){
	var projectCount = $('.featured').children('div:visible').length;

	if(projectCount >= 0) {
		e.preventDefault();
		var clickCat = $(this).data('category');
		console.log(clickCat);
		$('.featured').children().hide();
		$('.project[data-category-name='+clickCat+']').show();
		var projectCat = $('.featured').children('div:visible').length;
		console.log(projectCat);
		if(projectCat == 0) {
			$('.featured').append("<h1>Sorry there are no projects in "+clickCat+" at the moment check back later.</h1>");
		};
	};
});

/*//////////////Location Filter///////////*/

$('a.location').click(function(e){
	var projectCat = $('.featured').children('div:visible').length;

	if(projectCat >= 0) {
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
	};
});

/*//////////////Delete Projects///////////*/

$('.delete').click(function(e){

	e.preventDefault();

	var deleteProjectId = $(this).data('projid');

	if (confirm("Are you sure you want to delete this project?")==true){
	        
		$.post(siteInfo.ajaxURL, {'action': 'deleteProject', 'projid' : deleteProjectId}, function(data){
		});

		$(this).parent().parent().eq($(this).index()).hide('slow');

	};

});

/*//////////////Update Profile///////////*/

$('.update-pass').click(function(e){

	e.preventDefault();

	var currentPassword = $('.new-password').data('currentpass');

	if($('.new-email').val() === ""){
	
		var newEmail	= $('.new-email').attr('placeholder');

	} else {

		var newEmail	= $('.new-email').val();

	};

	if($('.new-password').val() === ""){
	
		var newPass		= $('.new-password').data('currentpass');

	} else {

		var newPass		= $('.new-password').val();	

	};


	var userID 		= $(this).data('userid');

	console.log(newPass);
	console.log(newEmail);
	console.log(userID);

	        
	$.post(siteInfo.ajaxURL, {'action' : 'updateProfile', 'currentPassword' : currentPassword, 'newPass' : newPass, 'newEmail' : newEmail, 'userID' : userID}, function(data){
		console.log(data);
		$('.success').html('Thanks, your details have been updated.');
	});

});