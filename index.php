<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>


</head><div class="container">
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <nav>
          <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="admissions.php">Admissions</a></li>
            <li class="end"><a href="contacts.php">Contacts</a></li>
          </ul>
        </nav>
        <ul id="icon">
          <li><a href="#"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/icon3.jpg" alt=""></a></li>
          
          <?php
          session_start();
          if(isset($_SESSION['user_id'])){
            
            echo "<li class='c22'><a href='qkyqu.php'>Log Out :</a></li>";
           
            echo "<p class='user_info'>".$_SESSION['emri']."</p>";        

            }
            else{
              echo "<li class='c22'><a href='login.php'>Log in</a></li>
              <li class='c22'><a href='registerForm.php'>Register</a></li>";
              }?>
          
          
        </ul>
      </div>
      <div class="wrapper">
        <h1><a href="index.php" id="logo">Learn Center</a></h1>
      </div>
      <div id="slogan"> We Will Open The World<span>of knowledge for you!</span> </div>
      <ul class="banners">
        <li><a href="#"><img src="images/banner1.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/banner2.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/banner3.jpg" alt=""></a></li>
      </ul>
    </header></div>
    <!-- / header -->
  </div>
</div>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="wrapper">
        <div class="pad1 pad_top1">
          <article class="cols marg_right1">
            <figure><a href="#"><img src="images/page1_img1.jpg" alt=""></a></figure>
            <span class="font1">Our Mission Statement</span> </article>
          <article class="cols marg_right1">
            <figure><a href="#"><img src="images/page1_img2.jpg" alt=""></a></figure>
            <span class="font1">Performance Report</span> </article>
          <article class="cols">
            <figure><a href="#"><img src="images/page1_img3.jpg" alt=""></a></figure>
            <span class="font1">Prospective Parents</span> </article>
        </div>
      </div>
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Welcome to Our Center</h2>
              <p class="font2">Learn Center is one of free website templates created by <span>TemplateMonster.com team</span></p>
              <p><strong>Learn Center Template</strong> is optimized for 1024X768 screen resolution. It’s also XHTML &amp; CSS valid. This website template has several pages: <a href="courses.php">Courses</a>, <a href="about.php">About</a>, <a href="gallery.php">Gallery</a>, <a href="admissions.php">Admissions</a>, <a href="contacts.php">Contacts</a> (note that contact us form – doesn’t work).</p>
            </div>
            <a href="#" class="button"><span><span>Read More</span></span></a>
            <div class="pad_left1">
              <h2>Individual Approach to Education!</h2>
            </div>
            <div class="wrapper">
              <figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>
              <p class="pad_bot1 pad_top2"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore.</strong></p>
              <p> Learn Center Template goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of Templates.com. The basic package (without PSD source is available for anyone without registration).</p>
            </div>
            <div class="pad_top2"> <a href="#" class="button"><span><span>Read More</span></span></a> </div>
          </article>
          <article class="col2 pad_left2">
            <div class="pad_left1">
              <h2>New Programs</h2>
            </div>
            <ul class="list1">
              <li><a href="#">International Studies</a></li>
              <li><a href="#">Models ; Language Reaching</a></li>
              <li><a href="#">Public School Facts</a></li>
              <li><a href="#">State Testing Data</a></li>
              <li><a href="#">Education Jobs</a></li>
            </ul>
            <div class="pad_left1">
              <h2>Latest News</h2>
            </div>
            <div class="wrapper"> <span class="date">27</span>
              <p class="pad_top2"><a href="#">April, 2011</a><br>
                Sed utirspiciatis unde omnis iste natus error sit...</p>
            </div>
            <div class="wrapper"> <span class="date">25</span>
              <p class="pad_top2"><a href="#">April, 2011</a><br>
                Voluptatem accusan dolore mque laudantium...</p>
            </div>
            <div class="pad_top2"> <a href="#" class="button"><span><span>Read More</span></span></a> </div>
          </article>
        </div>
      </div>
    </section>
    <!-- content -->
    <!-- footer -->
  <?php include("includes/footer.php");?>
    <!-- / footer -->
  </div>
</div>

</body>
</html>