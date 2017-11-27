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
    			var mbiemriV = document.getElementById('last_id').value;
    			var mbiemriPatt = new RegExp(/^[a-z|A-Z|ë|ç|Ë|Ç\\s]*$/);
    			var mbiemriResult = mbiemriPatt.test(mbiemriV);
    			if(mbiemriV === "" || mbiemriResult === false){
    				document.getElementById('lastNameError').innerHTML = "* Last name is required";
    				isNotValide += 1;
    			}else{
    				document.getElementById('lastNameError').innerHTML = "";
    			}

                //Nickname
                var nicknameV = document.getElementById('nicname_id').value;
                if(nicknameV === ""){
                    document.getElementById('nicNameError').innerHTML = "* Nickname is required";
                    isNotValide += 1;
                }else{
                    document.getElementById('nicNameError').innerHTML = "";
                }

    			//Gjinia
    			var gjiniaM = document.getElementById("radioGjiniaM").checked
    			var gjiniaF = document.getElementById("radioGjiniaF").checked
    			if(gjiniaM === true || gjiniaF === true){
    				document.getElementById('gjiniaError').innerHTML = "";
    			}else{
    				document.getElementById('gjiniaError').innerHTML = "* Gender is required";
    				isNotValide += 1;
    			}

    			//Shteti
    			var shtetiV = document.getElementById('shtetetOption').selectedIndex;
    			if(shtetiV === 0){
    				document.getElementById('shtetiError').innerHTML = "* State is required";
    				isNotValide += 1;
    			}else{
    				document.getElementById('shtetiError').innerHTML = "";
    			}

    			//Mesazhi
    				var mesazhiV = document.getElementById('message_field').value; 
    			if(mesazhiV === ""){
    				document.getElementById('messageError').innerHTML = "* Message is empty"
    				 isNotValide += 1;
    			}
				else if(mesazhiV.length < 10){
					document.getElementById('messageError').innerHTML = "*Mesazhi duhet te kete me shume se 10 shkronja";
					 isNotValide += 1;
				}else{
    				document.getElementById('messageError').innerHTML = "";
    			}

                //Statusi
                var studentiV = document.getElementById('studentbox').checked
                var empV = document.getElementById('empbox').checked
                if(studentiV === true || empV === true){
                    document.getElementById('statusError').innerHTML = "";
                }else{
                    document.getElementById('statusError').innerHTML = "* Status is required";
                    isNotValide += 1;
                }



    			if(isNotValide != 0){
    				return false;
    			}else{
    				alert("Message sent successfully");
    				return true;    				
    				}
}


