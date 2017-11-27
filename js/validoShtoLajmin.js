function validoFormen() {

				var isNotValide = 0;

                //Password
                var valueDate = document.getElementById('titulli_id').value;
                    if ( valueDate== null || valueDate== '')
                    {   document.getElementById('titulliError').innerHTML = "* Titulli is required";
                          isNotValide += 1;
                    }else{
                    document.getElementById('titulliError').innerHTML = "";
                 }
                //Email
                var valueDate = document.getElementById('pershkrimi_id').value;
                    if (valueDate== '')
                    {   document.getElementById('pershkrimiError').innerHTML = "* Pershkrimi is required";
                          isNotValide += 1;
                    }else{
                    document.getElementById('pershkrimiError').innerHTML = "";
                 }
               

               if( document.getElementById("filechooser_id").files.length == 0 ){
                    document.getElementById('filechooserError').innerHTML = "* Photo is required";
                       isNotValide += 1;
                    }   
                else{
                    document.getElementById('filechooserError').innerHTML = "";
                 }            
    

    			if(isNotValide != 0){
    				return false;
    			}else{
   
    				 return true;    				
    				}
}


