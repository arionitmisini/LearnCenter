function validoFormen() {

                var isNotValide = 0;

                //Emri
                var emriV = document.getElementById('emri_id').value;
                var emriPatt = new RegExp(/^[a-z|A-Z|ë|ç|Ë|Ç\\s]*$/);
                var emriResult = emriPatt.test(emriV);
                if ( emriV === "" || emriResult === false) {
                    document.getElementById('emriError').innerHTML = "* Emri is required";
                    isNotValide += 1;
                }else{
                    document.getElementById('emriError').innerHTML = "";
                }

                //Mbiemri
                var mbiemriV = document.getElementById('mbiemri_id').value;
                var mbiemriPatt = new RegExp(/^[a-z|A-Z|ë|ç|Ë|Ç\\s]*$/);
                var mbiemriResult = mbiemriPatt.test(mbiemriV);
                if(mbiemriV === "" || mbiemriResult === false){
                    document.getElementById('mbiemriError').innerHTML = "* Mbiemri name is required";
                    isNotValide += 1;
                }else{
                    document.getElementById('mbiemriError').innerHTML = "";
                }

                //Gjinia
                var gjiniaM = document.getElementById("RadioMashkull").checked
                var gjiniaF = document.getElementById("RadioFemer").checked
                if(gjiniaM === true || gjiniaF === true){
                    document.getElementById('gjiniaError').innerHTML = "";
                }else{
                    document.getElementById('gjiniaError').innerHTML = "* Gjinia is required";
                    isNotValide += 1;
                }

                //Shteti
                var shtetiV = document.getElementById('KombesiaOption').selectedIndex;
                if(shtetiV === 0){
                    document.getElementById('kombesiaError').innerHTML = "* Shteti is required";
                    isNotValide += 1;
                }else{
                    document.getElementById('kombesiaError').innerHTML = "";
                }

                
                //mesazhiError
                var valueDate = document.getElementById('message_field').value;
                    if ( valueDate== null || valueDate== '')
                    {   document.getElementById('mesazhiError').innerHTML = "* Mesazhi is required";
                          isNotValide += 1;
                    }else{
                    document.getElementById('mesazhiError').innerHTML = "";
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


