<!DOCTYPE html>

<html >
<head>
  <title>Fingertalk - Forgot Password</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/signin.css">
  <link rel="shortcut icon" href="assets/images/OlD Technologies.png" type="image/x-icon">
  </head>
<body>
<div class="form">
      
  
		<div id="forgotpass">   
          <center><h1>Forgot Something..?</h1></center>
          
          <form action="forgotdb.php" method="POST">		  
			<div class="field-wrap">
                <input type="text" name="id" required autocomplete="off" placeholder="id"/>
          </div>
		  
			<div class="field-wrap">
                <input type="text" name="Ph_no" required autocomplete="off" placeholder="ph no"/>
          </div>
		   
          <div class="field-wrap">
           <input type="password" name= "password" required autocomplete="off" placeholder="Reset Password"/>
          </div>
		  
		  <div class="field-wrap">
           <input type="password" name= "password2" required autocomplete="off" placeholder="Retype the Password"/>
          </div>
            <button type="submit" class="button button-block"/>Change Password</button>
			</div>     
          </form>
			       
</div> 
</body>
</html>


