<?php
  include('includes/dbconnect.php');
  $message='';
   if(isset($_POST['submit'])){
        if(!empty($_POST['emri'])):
        	 session_start();
          $sql="Insert into contact_forma (emri,mbiemri,email,gjinia,vendi,mesazhi,user_id_foreign) 
      		values (:emri,:mbiemri,:email,:gjinia,:vendi,:mesazhi,'{$_SESSION['foreign_key_useri']}')";
      		 session_write_close();
          $stmt=$conn->prepare($sql);
          $stmt->bindParam(':emri',$_POST['emri']);
          $stmt->bindParam(':mbiemri',$_POST['mbiemri']);
          $stmt->bindParam(':email',$_POST['email']);
          $radioVal = $_POST["MyRadio"];
			
            if($radioVal == "mashkull")
            {
                $stmt->bindParam(':gjinia',$radioVal);
            }
            else if ($radioVal == "femer")
            {
               $stmt->bindParam(':gjinia',$radioVal);
            }
          $text = $_POST["make_text"];
          $stmt->bindParam(':vendi',$text);
          $stmt->bindParam(':mesazhi',$_POST['mesazhi']);
         
          if($stmt->execute()){
            echo "<script>
                    alert('Se shpejti do te kontaktoheni!');
                   </script>";
            }
          else{
            $message='Useri nuk regjistrua me sukses';
          }
          
      endif;
    }
      
?>
 
  <?php if(!empty($message)):?>
  <p><?=$message?></p>
  <?php endif; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/contactform.css">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">


<script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>

</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <?php include('includes/header.php');?>
    <!-- / header -->
  </div>
</div>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Contact Form</h2>
                <!-- CONTACTO FORM -->
            	<div class="container">
                    <form action="#" method="post" onsubmit="return validoFormen()">
                        <div class="form-group">
                            <label for="emri_id">Emri :</label><br/>
                            <input class="input" id="emri_id" type="text" name="emri"></br>
                              <label id="emriError"></label>
                        </div>

                        <div class="form-group">
                            <label for="mbiemri_id">Mbiemri:</label><br/>
                            <input class="input" type="text" id="mbiemri_id" name="mbiemri"></br>
                             <label id="mbiemriError"></label>
                        </div>

                        <div class="form-group">
                            <label for="email_id">Email:</label><br/>
                            <input class="input" id="email_id" type="email" name="email"></br>
                            <label id="emailError"></label>
                        </div>

                     <div class="radioButton"><br/>
                           <label for="gender">Gjinia:</label><br/>
			                <input type="radio" id=RadioMashkull name="MyRadio" value="mashkull">Mashkull
			                <input type="radio" id=RadioFemer name="MyRadio" value="femer">Femer<br/></br>
			                <label id="gjiniaError"></label>
			         </div>
             
                        <div class="Kombesia"><br/>
			                <label>Shteti :</label><br/>
			                        <select name='make' id="KombesiaOption" onchange="setTextField(this)">
								              <option value = '' selected> - </option>
								              <option value = 'Albania'> Albania </option>
								              <option value = 'Kosova'> Kosova </option>
								              <option value = 'Maçedonia'> Maçedonia </option>
								              <option value = 'Amerika'> Amerika </option>
								              <option value = 'Anglia'> Anglia </option>
								              </select>
								              <input id="make_text" type = "hidden" name = "make_text" value = "" />
								              <script type="text/javascript">
								                  function setTextField(ddl) {
								                      document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
								                  }
								              </script><br/>
								<label id="kombesiaError"></label>
					     </div>
                         
                          <div class="mesazhi">
                            <label for="message_field">Mesazhi:</label></br>
                            <label id="mesazhiError"></label>
                            <br/>
                            <textarea id="message_field" name="mesazhi"></textarea>
                          </div>
                          <!--Sumbit-->
                          <div id="submit_id">
                          <input type="submit" name="submit" value="DERGO">
                        
                        </form>
                          	 <form action="kontaktLista.php" method="post"">
                        	<div id="submit_id">
                          <input type="submit" name="submit" value="SHFAQ REZULTATET E KONTAKTIT">
                        </div>
                        </form>
                        </div>
                    <script src="js/validoFormenContact.js"></script>
                </div>

            </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <?php include('includes/footer.php');?>
    <!-- / footer -->
  </div>
</div>

</body>
</html>