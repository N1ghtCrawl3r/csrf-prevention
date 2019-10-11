<?php
               
        if(isset($_POST['submit']))
            {
               
                    $myfile = fopen("Tokens.txt", "r") or die("Unable to open file!");
                    list($tok,$sid) = explode(",",chop(fgets($myfile)),2); // chop() is a must because fgets() returns new line character
                   
                    fclose($myfile);
                   
                    if($tok == $_POST['token']){
                        if($_COOKIE['SesT'] == $sid ) {
                        echo '<script>alert("Successfully Added")</script>' ; 
                        }
                    }
                    else{
                        echo '<script>alert("Warning:CSRF Token does not match")</script>';
                    
                    }
                    
            }
                    
?>