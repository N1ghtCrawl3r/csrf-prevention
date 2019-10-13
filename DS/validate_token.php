 <?php
               
        if(isset($_POST['submit']))
            {
                if ($_POST['token'] == $_COOKIE['csrf_token'])
                { 
                    echo "<script>alert('Feedback Successfully recorded')</script>" ;
                } 
                else
                {
                   echo "<script>alert('WARNING :: csrf ERROR')</script>";
                }
                    
            }
                    
?>