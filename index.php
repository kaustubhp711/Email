<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form submit to send email</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
if(!empty($_POST["send"])){
  $userName = $_POST["userName"];
  $userPhone = $_POST["userPhone"];
  $userEmail = $_POST["userEmail"];
  $userMessage = $_POST["userMEssage"];
  $toEmail = $_POST["kaustubhp711@gmail.com"];

  $mailHeaders = "Name:" . $userName .
  "\r\n Email: ". $userEmail . 
  "\r\n Phone: ". $userPhone . 
  "\r\n Message: ". $userMessage . "\r\n";

  if(mail($toEmail, $userName, $mailHeaders)){
   
    $message =  "Your Information Is Recieved Successfully!";

  }
   

}

?>
<div class="form-container-test">
       <form method="post" name="emailContact">
        <div class="input-row-test" >
              <label> Name <em>*</em></label>
              <input type="text"  name="userName" required>
        </div>
        
        <div class="input-row-test" >
          <label> Phone <em>*</em></label>
          <input type="text"  name="userPhone" required>
        </div>

        <div class="input-row-test" >
          <label> Email <em>*</em></label>
          <input type="text"  name="userEmail" required>
        </div>

        <div class="input-row-test" >
          <label> Message <em>*</em></label>
           <textarea name="userMessage" required ></textarea>
        </div>

        <div class="input-row-test" >
          <input type="submit"  name="send" value="Submit">
          <?php
          if(!empty($message)) {?>
          <div class="success">
               <strong><?php echo $message; ?></strong>
          </div>
          <?php } ?>
        </div>

       </form>
  </div>

</body>
</html>