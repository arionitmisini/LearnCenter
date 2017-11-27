<?php

  include('includes/dbconnect.php');
  var_dump($_GET['user_id']);
  if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
  }
  
  $query="Select * from USERAT where user_id=:user_id";
  $statement=$conn->prepare($query);
  $statement->execute(['user_id'=>$user_id]);
  
  $user=$statement->fetch();
  
  if(isset($_POST['submit'])){
    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $email=$_POST['email'];
    $datelindja=$_POST['datelindja'];
    $password=$_POST['password'];
    $gjinia=$_POST['gjinia'];
    $vendi=$_POST['vendi'];
    
    $query='UPDATE userat SET emri=:emri,mbiemri=:mbiemri,email=:email,datelindja=:datelindja,password=:password,gjinia=:gjinia,vendi=:vendi where user_id=:user_id';
    
    $statement=$conn->prepare($query);
    $statement->bindParam('user_id', $user_id);
    $statement->bindParam('emri', $emri);
    $statement->bindParam('mbiemri', $mbiemri);
    $statement->bindParam('email', $email);
    $statement->bindParam('datelindja', $datelindja);
    $statement->bindParam('password', $password);
    $statement->bindParam('gjinia', $gjinia);
    $statement->bindParam('vendi', $vendi);
    
    
    $statement->execute();
    header('location:indexx.php');
  }?>


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
<script type="text/javascript" src="js/cufon-replace.js"></script><link rel="stylesheet" type="text/css" href="css/contactform.css">
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>

</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
   <header>
  
   </header>
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
                            <input class="input" id="emri_id" type="text" value="<?php echo $user['emri']; ?>" name="emri"><br/>
                             <label id="nameError"></label>
                        </div>

                        <div class="form-group"><br/>
                            <label for="mbiemri">Mbiemri :</label><br/>
                            <input class="input"  type="text" id="mbiemri_id" value="<?php echo $user['name']; ?>" name="mbiemri"><br/>
                            <label id="lastNameError"></label>
                        </div>
                   
                       <div class="radioButton"><br/>
                                  <label for="gender">Gender:</label><br/>
                                  <option value="<?php $user['gjinia'] ?>">
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
                           <input class="input" id="datelindja_id" type="date" name="datelindja" value="<?php echo $user['datelindja']; ?>" data-validation="required length" data-validation-length="min"><br/>
                           <label id="dateBirthError"></label>
                        </div>

                        <div class="form-group"><br/>
                            <label for="email">Email:</label><br/>
                            <input class="input" id="email_id" type="email" name="email" value="<?php echo $user['email']; ?>" data-validation="required length" data-validation-length="min2"><br/>
                             <label id="emailError"></label>
                        </div>

                        <div class="form-group"><br/>
                            <label for="password">Password :</label><br/>
                            <input class="input" id="password_id" type="password" value="<?php echo $user['password']; ?>" name="password"><br/>
                             <label id="passwordError"></label><br/>
                        </div>
                       <div id="submit_id"><br/>
                          <input type="submit" name="submit" value="REGISTER">
                        </div>
                    </form>
            				
				  <!-- CONTACTO FORM -->
            </div>
          </article>

        </div>
      </div>
    </section>
    <!-- content -->
    <!-- footer -->
    <?php include('includes/footer.php');?>
    
    <!-- / footer -->
  </div>
</div>
  <script src="js/validoFormenRegister.js"></script>
    

</body>
</html>