function ajaxFunction(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	var u_firstName_id,
	 u_address_id,
	 u_city_id,
	 u_cnp_id,
	 u_mobile_id,
	 u_lastname_id,
	 u_location_id,
	 u_postalCode_id,
	 u_birthDate_id,
	 u_phone_id,
	 u_username_id,
	 u_email_id,
	 u_password_id,
	 u_confirmPassword_id,
	 param;
	 
	 
	 u_firstName_id = document.getElementById('u_firstName_id').value;
	 u_address_id = document.getElementById('u_address_id').value;
	 u_city_id = document.getElementById('u_city_id').value;
	 u_cnp_id = document.getElementById('u_cnp_id').value;
	 u_mobile_id = document.getElementById('u_mobile_id').value;
	 u_lastname_id = document.getElementById('u_lastname_id').value;
	 u_location_id = document.getElementById('u_location_id').value;
	 u_postalCode_id = document.getElementById('u_postalCode_id').value;
	 u_birthDate_id = document.getElementById('u_birthDate_id').value;
	 u_phone_id = document.getElementById('u_phone_id').value;
	 u_username_id = document.getElementById('u_username_id').value;
	 u_email_id = document.getElementById('u_email_id').value;
	 u_password_id = document.getElementById('u_password_id').value;
	 u_confirmPassword_id = document.getElementById('u_confirmPassword_id').value;
     
	 param=	'u_firstName_id='+u_firstName_id+'&'+
	 'u_address_id='+u_address_id+'&'+
	 'u_city_id='+u_city_id+'&'+
	 'u_cnp_id='+u_cnp_id+'&'+
	 'u_mobile_id='+u_mobile_id+'&'+
	 'u_lastname_id='+u_lastname_id+'&'+
	 'u_location_id='+u_location_id+'&'+
	 'u_postalCode_id='+u_postalCode_id+'&'+
	 'u_birthDate_id='+u_birthDate_id+'&'+
	 'u_phone_id='+u_phone_id+'&'+
	 'u_username_id='+u_username_id+'&'+
	 'u_email_id='+u_email_id+'&'+
	 'u_password_id='+u_password_id+'&'+
	 'u_confirmPassword_id='+u_confirmPassword_id+'&'+
	 'button='+'1';

	 
      	 	 
		try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}

	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){

		if(ajaxRequest.readyState == 4){
			
			if(ajaxRequest.status == 200){
               //document.getElementById('u_error').innerHTML  = ajaxRequest.responseText;
              
               if(ajaxRequest.responseText=='')
               	{
               		document.getElementById('left').style.visibility="hidden";
                    document.getElementById('right').style.visibility="show";
                     window.location.href="";
                     $("#main_article").load('settingsuser.php');
           			}
           }
           else if(ajaxRequest.status == 400) {
              alert(ajaxRequest.responseText)
           }
           else {
               alert(ajaxRequest.status+ajaxRequest.responseText);
               window.location.replace("http://stackoverflow.com");
           }
		}
	}
	
	
	ajaxRequest.open("POST", "servertime.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}