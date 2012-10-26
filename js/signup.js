		   
   $("#inputEmail").keyup(function () {
		        var email = $("#inputEmail").val(); //Value entered in the text box
		        var status = $("#divStatus"); //DIV object to display the status message
		        var user = $.trim(name);
		        if (email.length > 3) {
		            status.html("Checking...."); //While our Thread works, we will show some message to indicate the progress
		            //jQuery AJAX POST

		            $.post("/Project/php/emailCheck.php", {email: email}, 
		            	function(data){
		            		if(data.exists){
		            			status.html("<font color=red>'<b>" + email + "</b>' is not available!</font>");
		            		}
		            		else{
		            			
		            			status.html("<font color=green>'<b>" + email + "</b>' is available!</font>");
		            		}
		            	}, 'JSON');

		        } else {

		            status.html("Need more characters...");
		        }
		    });

