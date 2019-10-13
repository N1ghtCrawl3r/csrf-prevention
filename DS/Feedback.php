 <!DOCTYPE html>
 <?php

  if(!isset($_COOKIE['PHPSESSID']) ){
    header("Refresh:0; url=login.php");
    exit; 
}
?>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="feedback.css">
     <title>Feecdback</title>
 </head>

 <a href='logout.php'>click here to log out</a>

 <body>
     <div class="main">

         <form action="validate_token.php" class="send-feed" method="POST">
            <h2>Feedback </h2>
             <textarea name="submission" rows="15" cols="50" required></textarea>
             <input type="hidden" name="token" value="" id="tokenIn_hidden_field">
             <input type="submit" class="submit" value="Submit" name="submit" >

         </form>
     </div>

     <script>
         function getCookie(cname) {
             var name = cname + "=";
             var decodedCookie = decodeURIComponent(document.cookie);
             var ca = decodedCookie.split(';');
             for (var i = 0; i < ca.length; i++) {
                 var c = ca[i];
                 while (c.charAt(0) == ' ') {
                     c = c.substring(1);
                 }
                 if (c.indexOf(name) == 0) {
                     return c.substring(name.length, c.length);
                 }
             }
             return "";
         }
         var cookie_value = getCookie("csrf_token");

         document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value);
     </script>

 </body>

 </html>
