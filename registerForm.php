<?php
 session_start();
 
 if(isset($_SESSION['user_id'])){
   header("Location:index.php");
   
 }
  include('includes/dbconnect.php');
  $message='';
   if(isset($_POST['submit'])){
        if(!empty($_POST['email'])&&!empty($_POST['password'])):
        
          $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

          $sql="Insert into userat (emri,mbiemri,datelindja,gjinia,vendi,email,password) values (:emri,:mbiemri,:datelindja,:gjinia,:vendi,:email,:password)";
          $stmt=$conn->prepare($sql);
          $stmt->bindParam(':emri',$_POST['emri']);
          $stmt->bindParam(':mbiemri',$_POST['mbiemri']);
          $stmt->bindParam(':datelindja',$_POST['datelindja']);
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
          $stmt->bindParam(':email',$_POST['email']);
          $stmt->bindParam(':password',$password);
          
          if($stmt->execute()):
            echo "<script>
                    alert('Useri u regjistrua me sukses!');
                   </script>";
                   header("Location:index.php");

          else:
            echo "<script>
                    alert('Useri nuk regjistrua me sukses kjo Email ekziston!');
                   </script>";
           
          endif;
          
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
<link rel="stylesheet" type="text/css" href="css/contactform.css">
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>

</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
  <div class="header_login">
   </div>
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
              <h2>Registration Form</h2>
            				<div class="container">
                    <form action="#" method="post" onsubmit="return validoFormen()">
                        <div class="form-group">
                            <label for="emri">Emri :</label><br/>
                            <input class="input" id="emri_id" type="text" name="emri"><br/>
                             <label id="nameError"></label>
                        </div>

                        <div class="form-group"><br/>
                            <label for="mbiemri">Mbiemri :</label><br/>
                            <input class="input"  type="text" id="mbiemri_id" name="mbiemri"><br/>
                            <label id="lastNameError"></label>
                        </div>
                   
                       <div class="radioButton"><br/>
                          <label for="gender">Gender:</label><br/>
                          <input type="radio" id=RadioMashkull name="MyRadio" value="mashkull">Mashkull
                          <input type="radio" id=RadioFemer name="MyRadio" value="femer">Femer<br/>
                          <label id="gjiniaError"></label>
                      </div>
                       
                        <div class="Kombesia"><br/>
                        <label>Shteti :</label><br/>
                        <select name='make' id="KombesiaOption" onchange="setTextField(this)">
                                <option value = '' selected> None </option>
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

                         <div class="form-group"><br/>
                           <label for="datelindja">Datelindja :</label><br/>
                           <input class="input" id="datelindja_id" type="date" name="datelindja" data-validation="required length" data-validation-length="min"><br/>
                           <label id="dateBirthError"></label>
                        </div>

                        <div class="form-group"><br/>
                            <label for="email">Email:</label><br/>
                            <input class="input" id="email_id" type="email" name="email" data-validation="required length" data-validation-length="min2"><br/>
                             <label id="emailError"></label>
                        </div>

                        <div class="form-group"><br/>
                            <label for="password">Password :</label><br/>
                            <input class="input" id="password_id" type="password" name="password"><br/>
                             <label id="passwordError"></label><br/>
                        </div>
                       <div id="submit_id"><br/>
                          <input type="submit" name="submit" value="REGISTER">
                        </div>
                    </form>
            </div>
        </div>
      </div>
    </section>
  </div>
</div>
  <script src="js/validoFormenRegister.js"></script>
</body>
</html>