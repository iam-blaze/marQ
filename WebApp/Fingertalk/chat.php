<?php

$id = $_POST['id'];
$password = $_POST['password'];

if ($id == '' && $password == '') {
    echo"Your username or password is empty";
    die();
}

session_start();
$_SESSION['id'] = $id;

$con=mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db($con,"Fingertalk");

$result = mysqli_query($con,"select * from user_table where id='$id' and password = '$password'") or die("unable to login please try again".mysql_error());
$row = mysqli_fetch_array($result);

if($row ['id']==$id  && $row['password']==$password)
{
	mysqli_query($con,"UPDATE `user_table` SET `status` = 1 WHERE `user_table`.`id` = '$id'");
}else{
	die("try again");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/OlD Technologies.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <title>Fingertalk - lets chat and more</title>

    <link rel="stylesheet" href="./css/chat.css" type="text/css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/chat.js"></script>
    <script type="text/javascript">

        var name = "<?php echo $id;?>";

    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");

    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");

    	// kick off chat
        var chat =  new Chat();
    	$(function() {

    		 chat.getState();

    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {

                 var key = event.which;

                 //all keys including return.
                 if (key >= 33) {

                     var maxLength = $(this).attr("maxlength");
                     var length = this.value.length;

                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {
                         event.preventDefault();
                     }
                  }
    		});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {

    			  if (e.keyCode == 13) {

                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");
                    var length = text.length;

                    // send
                    if (length <= maxLength + 1) {

    			        chat.send(text, name);
    			        $(this).val("");

                    } else {

    					$(this).val(text.substring(0, maxLength));
    				}
    			  }
      });
	});
    </script>

</head>

<body onload="setInterval('chat.update()', 3000)">

    <div id="page-wrap">

        <h2>Hello <?php echo $id;?></h2>
        <span id="logout">
          <button type="submit" onclick="location = 'logout.php';" name="button">Logout</button>
        </span>

        <p id="name-area"></p>


        <div id="chat-wrap">
          <div id="chat-area"><?php echo file_get_contents("chat.txt");?></div>
          <div id="status-area">
            <p><?php

            $result1 = mysqli_query($con,"select id from user_table where status =1") or die("unable to login please try again".mysql_error());
            echo '<span class="online">Users online</span>';
            echo "-----------------------------";
            while($row1 = mysqli_fetch_array($result1)) {
                echo $row1['id']."<br>";
            }
            ?></p>
          </div>
        </div>

        <form id="send-message-area">
            <p style="padding-bottom:20px;font-size:20px;">Your message: </p>
            <textarea id="sendie" maxlength = '1000' placeholder="press enter to send"></textarea>
        </form>

    </div>

</body>

</html>
