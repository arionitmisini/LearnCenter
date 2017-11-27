<?php 
		include('includes/dbconnect.php');
	session_start();
	
	if(isset($_SESSION['user_id'])){
		 header("Location:index.php");

	}
	
	if(!empty($_POST['email'])&&!empty($_POST['password'])):
	
		$records=$conn->prepare('Select user_id,email,password,emri from userat where email=:email');
		$records->bindParam('email',$_POST['email']);
		$records->execute();
		$results=$records->fetch(PDO::FETCH_ASSOC);
		
		$message='';
		
		if(count($results)>0 && password_verify($_POST['password'],$results['password'])){
				
				$_SESSION['user_id']=$results['user_id'];
				$_SESSION['emri']=$results['emri'];
        $_SESSION['foreign_key_useri']=$results['user_id'];

				 
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					    window.alert('Kyçje e suksesshme!')
					    window.location.href='index.php';
					    </SCRIPT>");
		}
		else{
			echo "<script>
                    alert('Gabim username ose fjalekalimi! Provo përsëri');
                   </script>";
		}
		endif;
		
	?>
		<?php if(!empty($message)):?>
	<p><?=$message?></p>
	<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Learn Center | Contacts</title>
<meta charset="utf-8">



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
   <div class="header_login">
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
              <h2>LOG IN</h2>
       <div class="container">
                    <form action="#" method="post" onsubmit="return validoFormen()">
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
                          <input type="submit" name="submit" value="LOG IN">
                        </div>

                    </form>
                   <form action="registerForm.php" method="post">
                   		<div id="submit_id">
                          <input type="submit" name="submit" value="REGISTER">
                        </div>	
                   </form>
            </div>
        </div>
      </div>
    </section>
  </div>
</div>
  <script src="js/validoFormetLogIN.js"></script>
</body>
</html>