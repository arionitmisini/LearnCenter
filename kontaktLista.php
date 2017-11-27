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
    <?php require('includes/header.php');?>
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
              <h2>Rezultati</h2>
                <!-- CONTACTO FORM -->

            	<div class="container">
                    <div class="mesazhet">
                    <?php if(!isset($_SESSION['foreign_key_useri'])):
                    header("Location:index.php")
                    ?>

                    <?php else:?>
                      <?php $query = $conn->query("SELECT * from contact_forma where user_id_foreign = '".$_SESSION['foreign_key_useri'] ."'");?>
                      <?php foreach ($query as $cc): ?>
                        <p>----------------------------------------------------</p>
                        <p>Rezultati i kontaktev me ID : <?php echo $cc['contact_id'];?></p>
                        <p>Emri: <?php echo $cc['emri'];?></p>
                        <p>Mbiemri: <?php echo $cc['mbiemri'];?></p>
                        <p>Email: <?php echo $cc['email'];?></p>
                        <p>Gjinia: <?php echo $cc['gjinia'];?></p>
                        <p>Shteti: <?php echo $cc['vendi'];?></p>
                        <p>Mesazhi: <?php echo $cc['mesazhi'];?></p>
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
            </div>

            </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <?php require('includes/footer.php');?>
    <!-- / footer -->
  </div>
</div>
<script src="js/validoFormen.js"></script>
</body>
</html>