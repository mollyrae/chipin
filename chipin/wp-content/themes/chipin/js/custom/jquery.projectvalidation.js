//jQuery Custom Plugin Template

//create a private scope
(function($){

	//create jQuery function
	$.fn.projectvalidation = function(){
		
		//return the wrapped set and loop through the set and apply functionality to each member of the set
		return this.each(function(){
			
			//plugin code goes here
			//use $(this) to reference each element in the jQuery set
			//set variables references for all the various form elements;
	
	var $projectForm	= $(this),
	$title				= $projectForm.find("#title"),
	$timeline			= $projectForm.find("#timeline"),
	$description		= $projectForm.find("#description"),
	$budget				= $projectForm.find("#budget"),
	$category			= $projectForm.find("#category"),
	$region				= $projectForm.find("#region"),
	$image				= $projectForm.find("#image"),
	$spam				= $projectForm.find("#spam"),
	$formFields			= $projectForm.find("input:text, textarea"),
	$status				= $projectForm.find("#status"),
	$resetBtn			= $projectForm.find("input:reset");
	
	//initialise
	$status.hide();
	
	/*submit handler for contact form*/
	$projectForm.submit(function(e) {	
			
		//prevent default form submit action
		e.preventDefault();
		
		//clear all error borders from form fields
		$formFields.removeClass("error-focus");
		
		//check required fields are not empty and that the email address is valid
		if($title.val()==""){
			
				setStatusMessage("Please Enter the Project Title");
				$title.setFocus();
			
		}else if($timeline.val()==""){
			
				setStatusMessage("Please Enter Your Timeline");
				$timeline.setFocus();

		}else if($budget.val()==""){
			
				setStatusMessage("Please Enter your Budget #note this can be $0");
				$budget.setFocus();	

		}else if($category.val()==""){
			
				setStatusMessage("Please Enter your Category");
				$category.setFocus();	
			
		}else if($region.val()==""){
			
				setStatusMessage("Please Enter your Region");
				$region.setFocus();
			
		}else if($description.val()==""){
			
				setStatusMessage("Please Enter the Project Description");
				$description.setFocus();
			
		}else if(!$spam.val()==""){
			
				setStatusMessage("Spam Attack!!");

		}else{
			
				//if all fields are valid then send data to the server for processing and didplay "please wait" message
				setStatusMessage("Project being posted, please wait");
			
				//serialize all the form field values as a string
				var formData = $(this).serialize();
				
				//alert(formData);
			
			//send serialized data string to the send mail php via POST method
			
			$.post(siteInfo.ajaxURL, formData, function(sent){
				
				if(sent=="success"){
						
						setStatusMessage("Thanks the Project:"+$title.val()+", has been posted");
						
						//clear form fields
						$formFields.val("");
					 
				  } else if(sent=="error"){ 
				 
						setStatusMessage("Opps, something went wrong - Project not posted");
						
				  }//end if else
			 
			},"html");
			
		}//end else

   });//end submit
	
	//click handler for reset button
	$resetBtn.click(function(){
			$status.slideUp("fast");
			$formFields.removeClass("error-focus");														
	});
	
	//helper functions
	function setStatusMessage(message){
		$status.html(message).slideDown("fast");
	}
	
	$.fn.setFocus = function(){
		return this.focus().addClass("error-focus");
	}
	
	function isValidEmail(email) {
		var emailRx = /^[\w\.-]+@[\w\.-]+\.\w+$/;
		return  emailRx.test(email);
	}
			
		}); //end each()
		

	};//end $.fn.customplugin

		  
})(jQuery);