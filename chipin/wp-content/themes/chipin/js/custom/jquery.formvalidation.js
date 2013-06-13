//jQuery Custom Plugin Template

//create a private scope
(function($){

	//create jQuery function
	$.fn.formvalidation = function(){
		
		//return the wrapped set and loop through the set and apply functionality to each member of the set
		return this.each(function(){
			
			//plugin code goes here
			//use $(this) to reference each element in the jQuery set
			//set variables references for all the various form elements;
	
	var $signupForm = $(this),
	$name = $signupForm.find("#name"),
	$email = $signupForm.find("#email"),
	$password = $signupForm.find("#password"),
	$spam = $signupForm.find("#spam"),
	$formFields = $signupForm.find("input:text, textarea"),
	$status = $signupForm.find("#status"),
	$resetBtn = $signupForm.find("input:reset");
	
	//initialise
	$status.hide();
	
	/*submit handler for contact form*/
	$signupForm.submit(function(e) {	
			
		//prevent default form submit action
		e.preventDefault();
		
		//clear all error borders from form fields
		$formFields.removeClass("error-focus");
		
		//check required fields are not empty and that the email address is valid
		if($name.val()==""){
			
				setStatusMessage("Please Enter Your Name");
				$name.setFocus();
			
		}else if($email.val()==""){
			
				setStatusMessage("Please Enter Your Email");
				$email.setFocus();

		}else if(!isValidEmail($email.val())){
			
				setStatusMessage("Please Enter a Correct Email Address");
				$email.setFocus();		

		}else if($password.val()==""){
			
				setStatusMessage("Please Enter your Password");
				$password.setFocus();

		}else{
			
				//if all fields are valid then send data to the server for processing and didplay "please wait" message
				setStatusMessage("Registration being processed, please wait");
			
				//serialize all the form field values as a string
				var formData = $(this).serialize();
				
				//alert(formData);
			
			//send serialized data string to the send mail php via POST method
			
			$.post(siteInfo.ajaxURL, formData, function(sent){
				
				if(sent=="error"){ 
				 
						setStatusMessage("Opps, something went wrong - Please Try again");
					 
				  } else if(sent=="success0"){
						
						setStatusMessage("Thanks"+$name.val()+", you are now a member");

						window.location.replace("localhost:8888/chipin/wp-content/themes/chipin/user.php");
						
						//clear form fields
						$formFields.val("");
						
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