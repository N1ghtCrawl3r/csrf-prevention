 <!DOCTYPE html>

 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="feedback.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
     <title>Feedback</title>
     <script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("tokenIn_hidden_field").setAttribute('value', this.responseText) ;  //the response text will be the token.         
		}
	
	
	};
	
	xhttp.open("GET", "token_gen.php", true); //send request to server
	xhttp.send();
	
	});
</script>
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

  

 </body>

 </html>
 