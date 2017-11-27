function validoFormen() {

				var isNotValide = 0;

                //Password
                var valueDate = document.getElementById('password_id').value;
                    if ( valueDate== null || valueDate== '')
                    {   document.getElementById('passwordError').innerHTML = "* Password is required";
                          isNotValide += 1;
                    }else{
                    document.getElementById('passwordError').innerHTML = "";
                 }
                //Email
                var valueDate = document.getElementById('email_id').value;
                    if (valueDate== '')
                    {   document.getElementById('emailError').innerHTML = "* Email is required";
                          isNotValide += 1;
                    }else{
                    document.getElementById('emailError').innerHTML = "";
                 }
                

    

    			if(isNotValide != 0){
    				return false;
    			}else{

                    
                     
    				 return true;    				
    				}
}


