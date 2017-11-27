<?php  include('includes/dbconnect.php');
          if (isset($_POST['submit'])) {
            $target = "images/".basename($_FILES['filechooser']['name']);
            $name =  basename($_FILES['filechooser']['name']);
            
            $image = "images/".$name;
            $title = $_POST['titulli'];
            $description = $_POST['pershkrimi'];
            $sql = 'INSERT INTO artikulli (titulli,pershkrimi,photo) VALUES (:titulli,:pershkrimi,:pathi)';
            $query = $conn->prepare($sql);
            $query->execute(['titulli' => $title,'pershkrimi' => $description,'pathi' => $image]);
        
            if(move_uploaded_file($_FILES['filechooser']['tmp_name'], $target)){
              $msg = "Image uploaded Successfully";
            }else{
              $msg = "PROBLEMMMMM!!!";
            }
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
<link rel="stylesheet" href="css/shtoLajminValidation.css" type="text/css" media="all">
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
              <div class="container">
                   <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return validoFormen()">
                        <div class="form-group">
                            <label for="titulli">Titulli :</label><br/>
                            <input class="input" id="titulli_id" type="text" name="titulli"><br/>
                             <label id="titulliError"></label>
                        </div>

                        <div class="form-group"><br/>
                            <label for="pershkrimi">Pershkrimi :</label><br/>
                            <input class="input"  type="text" id="pershkrimi_id" name="pershkrimi"><br/>
                            <label id="pershkrimiError"></label>
                        </div>

                         <div class="form-group"><br/>
                            <label for="filechooser">Foto :</label><br/>
                            <input class="filechooser"  type="file" id="filechooser_id" name="filechooser"><br/>
                            <label id="filechooserError"></label>
                        </div>
                      
                       <div id="submit_id"><br/>
                          <input type="submit" name="submit" value="REGISTER" action="gallery.php">
                      </div>
                    </form>
                </div>
          <script src="js/validoShtoLajmin.js"></script>
            </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <?php require('includes/footer.php');?>
    <!-- / footer -->
  </div>
</div>

</body>
</html>