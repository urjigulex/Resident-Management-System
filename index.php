 

<html xmlns="http://www.w3.org/1999/xhtml">
    <head 
        <title></title> 


        
    </head>
    <body>    

        
            <div class="">
                <?php
                include("home.php");
			$lng="";
                ?>

                <?php
                if (!isset($_SESSION['username'])) {
                   
                    if ($lng != "amar") {
                        $en = "English";
                        $am = "amaregna";
                    } 
                    $english = "<a href='?p=index1.php&lng=eng'><b>" . $en . "</b></a> &nbsp; ";
                 
                   
                }else
		
                include("home.php");
			
                ?>
               
            </div>
            
    </body>
</html>
