<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Gallery</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>

</head>
<body id="page4">
<div class="body1">
  <div class="main">
    <!-- header -->
    <?php include('includes/dbconnect.php');?>
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
            <div class="pad_left1">
             
            </div>
            
             <form class="shto_lajmin_buton" action="shtoNjeLajm.php"> 
                <div class="home_main_content_gallery">

                  <?php if(isset($_SESSION['user_id'])):?>
                  <input type="submit" value="Shto nje foto">
                  <?php endif;?>
                  
                
                
                  <?php $query = $conn->query('SELECT * from artikulli');?>
                    <?php foreach ($query as $fotot): ?>
                      <div class="photobg_gallery">
                        <div class="galleryphoto">
                          
                          <div class="titulli_photo">
                              <h2 class="photo_from_path">Titulli : <?php echo $fotot['titulli'];?> </h2>         
                          </div>
                          <div class="pershkrimi_photo">
                          <br/><p>Pershkrimi : <?php echo $fotot['pershkrimi'];?></p>          
                          </div>
                          <img src="<?php echo $fotot['photo'];?>" alt="photo_path " style="width:304px;height:228px;"/>
                        </div>
                      </div>
                    <?php endforeach; ?>
          

                </div>
             
             </form>
            </div>

        </div>
      </div>
    </section>
    <!-- content -->
    <!-- footer -->
    <?php include('includes/footer.php');?>
      
    <!-- / footer -->
  </div>
</div>

</body>
</html>