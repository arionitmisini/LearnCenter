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
        <ul id="icons">
          <li><a href="#"><img src="images/icons1.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/icons2.jpg" alt=""></a></li>
           <?php
          session_start();
          if(isset($_SESSION['user_id'])){
            
            echo "<li class='c22'><a href='qkyqu.php'>Log Out  :</a></li>";
           
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
    </header>