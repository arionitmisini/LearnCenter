function validoFormen() {

				var isNotValide = 0;

				//Emri
				var emriV = document.getElementById('emri_id').value;
				var emriPatt = new RegExp(/^[a-z|A-Z|ë|ç|Ë|Ç\\s]*$/);
				var emriResult = emriPatt.test(emriV);
    			if ( emriV === "" || emriResult === false) {
        			document.getElementById('nameError').innerHTML = "* Name is required";
        			isNotValide += 1;
    			}else{
    				document.getElementById('nameError').innerHTML = "";
    			}

    			//Mbiemri
    			var mbiemriV = document.getElementById('mbiemri_id').value;
    			var mbiemriPatt = new RegExp(/^[a-z|A-Z|ë|ç|Ë|Ç\\s]*$/);
    			var mbiemriResult = mbiemriPatt.test(mbiemriV);
    			if(mbiemriV === "" || mbiemriResult === false){
    				document.getElementById('lastNameError').innerHTML = "* Last name is required";
    				isNotValide += 1;
    			}else{
    				document.getElementById('lastNameError').innerHTML = "";
    			}

    			//Gjinia
    			var gjiniaM = document.getElementById("RadioMashkull").checked
    			var gjiniaF = document.getElementById("RadioFemer").checked
    			if(gjiniaM === true || gjiniaF === true){
    				document.getElementById('gjiniaError').innerHTML = "";
    			}else{
    				document.getElementById('gjiniaError').innerHTML = "* Gender is required";
    				isNotValide += 1;
    			}

    			//Shteti
    			var shtetiV = document.getElementById('KombesiaOption').selectedIndex;
    			if(shtetiV === 0){
    				document.getElementById('kombesiaError').innerHTML = "* State is required";
    				isNotValide += 1;
    			}else{
    				document.getElementById('kombesiaError').innerHTML = "";
    			}

    			//Datelindja
    			var valueDate = document.getElementById('datelindja_id').value;
                    if ( valueDate== null || valueDate== '')
                    {   document.getElementById('dateBirthError').innerHTML = "* Date is required";
                          isNotValide += 1;
                    }else{
                    document.getElementById('dateBirthError').innerHTML = "";
                 }
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


