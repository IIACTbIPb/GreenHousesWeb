<?php 
	require "header.php";

	 $error = "";
     $bool = false;
       if(isset($_POST["send"])){
           if(($_POST["name"]=="")||($_POST["email"]=="")||($_POST["password"]=="")){
             $bool = true;
           }

           if(!$bool){
            add_users($_POST["name"],$_POST["email"],"user",$_POST["password"]);

               echo'<script> window.location="index.php"; </script> ';
           }else
             if($bool){
           $error = "не все поля введены";
         }
       }
?>
<section>
	<div class="resiter">
		<div class="container">
			<hr>
			<div class="title_single">
				<h1>Регистрация</h1> 
			</div>
			<hr>
			<div class="register_main">
			<form action="" method="post">
				<p>Name</p>
				<input type="text" name="name">
				<p>Email</p>
				<input type="email" name="email">
				<p>Password</p>
				<input type="password" name="password"><br>
				<?=$error?>
				<button name="send" type="submit">Register</button>
			</form>
			</div>
		</div>
	</div>
</section>