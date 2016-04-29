<?php
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Friends Login/Registration</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 </head>
   <body>
     <div id="maintitle">
       <h2 id="title">Welcome!</h2>
     </div>

 			<div id="newuser">
 					<h4>Register:</h4>

 				<form id="registrationform" action="/Friends/process_register" method="POST">
 	      <label for="name">Name:</label> <input type="text" name="name" value="" required><br>
 				<label for="alias">Alias:</label> <input type="text" name="alias" value="" required><br>
 				<label for="email">Email:</label> <input type="email" name="email" value="" required><br>
        <label for="password">Password:</label> <input type="password" name="password" value="" required><br>
       	<label for="confirm_password">Confirm Password:</label> <input type="password" name="confirm_password" value="" required><br>
       	<label for="date_of_birth">Date of Birth:</label> <input type="date" name="date_of_birth"><br>
 				<input type="submit" value="Register">
 	     </form>
      </div>

      <div id="userform">
  			<h4>Login:</h4>
      
  	     <form id="loginform" action="/Friends/process_login" method="POST">
  	       <label for="email">Email:</label>
  	      <input type="email" name="email" value="" required><br>
          <label for="password">Password:</label>
          <input type="password" name="password" value="" required><br>
  				<input type="submit" value="Login"><br>
  				</form>
        </div>

   </body>
 </html>
