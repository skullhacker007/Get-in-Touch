
<!DOCTYPE html>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
   
    
<link rel="stylesheet" type="text/css" href="contact-us.css">
    

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
</style>
	
</head>

<body class="loader-active">
    
    <div class="column">
      <form action="send_email.php" method="post">
        

 <input type="text" id="name" name="name" placeholder="NAME" autocomplete="off" required>

        
         <input type="text" id="email" name="email" placeholder="Email-ID" autocomplete="off" required>
          <input type="text" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" required>
        
        <textarea id="subject" name="subject" placeholder="Write something.." autocomplete="off" required style="height:170px"></textarea>
        <input type="submit" id="submit" name="submit" value="Send Message">
      </form>
    </div>



   

  
</body>

</html>
