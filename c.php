
>
<html>
<head>
<title> Online Kebele Managment System Clark Homepage</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<style type="text/css">
div#container
{
   width: 600px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
}
body
{
   background-color: #FFFFFF;
   background-image:url(images/bg-body.jpg);
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   text-align: center;
}
</style>

</head>
<div id="tooplate_wrapper">
	<div id="tooplate_header">

 <div id="site_title">

                    <div >
                        <img src="images/lo.PNG"align="left"height="100" width="1100"/>
                    </div>

</div>
    
	<div id="tooplate_menu" class="menu1">
	<table border="0" bgcolor="" width="160" align="left">

        <ul>
		   
			
               	    <li class="active"><a href="userindex.php">Home</a></li>

         
		   <li><a href="#.php">Services </a>
			 <ul>
			   							   
                     <li><a href="message.php">Certificate request</a></li>
				
                    <li><a href="message11.php">withdrawal request</a></li>	
<li><a href="c.php">send Feedback</a>
		     </ul>
		  </li>
				   <li><a href="#.php">View </a>
			 <ul>
			   							   
                  <li><a href="ser.php">my information</a></li>
<li><a href="serid.php">Id Certificate</a></li>
<li><a href="serbi.php">Birth Certificate</a></li>
<li><a href="sema.php">Marriage Certificate</a></li>
<li><a href="serdi.php">Divorce Certificate</a></li>
<li><a href="serde.php">Death Certificate</a></li>
					 <li class="active"><a href="commesa.php">view_replay</a></li> 	                                 
				     </ul>
			</li>


	       <li><a href="chat_system/index.php">chat</a></li>
		
			<li><a href="chpas.php">Change password</a>
			</li>
			  <li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
 <li class="active"><a href="logout.php">logout</a></li>
		 <li><a href=""><img src="images/user.jpg" width="50" height="50" ><i><font color="black"></font></i></a></li>
			
			</li>


</ul>  	
    </div> <!-- end of tooplate_menu -->
</div>
     <div id="tooplate_main" class="shadow">
				
	 <fieldset
					<legend  align="center"><div class="legend"><b>write your comment</b></div></legend>
					<br>
					<div>
						 <form id="send" action="c.php" method="post" onsubmit="return validate()">

 <b>Name: <input type="text"  name="name"id="span9001"size="30" required pattern="[A-Z a-z]{3,}"><br><br>
	Email: <input type="text"  name="email"id="email" size="30" color="silver" required><br><br>
	Kebele: <input type="text"  name="Kebele"id="Kebele" size="30" color="silver" required><br><br>
	Your comment:	<br>
			<textarea  name="comment"  rows="5"cols="37" id="comment" required> </textarea>
			
			<br>
           <br>
		   
 <input type="submit" name="submit"style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;"  value="send">&nbsp;&nbsp;&nbsp; 
		 
         <input type="submit" name="cancel" style="background-color: #3399FF;border-radius: 40px;width: 120px;height: 35px;" value="cancel">
		  <br>
		  
              </form>
					</div>
				</fieldset>		
   <?php
					 $conn=mysql_connect("localhost","root","");
	
      mysql_select_db("onlinekebele",$conn);
     
        if (isset($_POST['submit'])){
			
             $name=$_POST['name'];
             $email=$_POST['email'];			
			 $Kebele=$_POST['Kebele'];
             $comment=$_POST['comment'];
			$pattern="/[\w\.]{6,}\@[a-zA_Z]{3,}\.[a-zA-Z\.]{2,}[^\.]$/";
		
		
		
		if($name== ""){
			?>
	<script>
		alert(" Please enter your name!!!!!");
	</script>
	<?php	
		}
		elseif(is_numeric($name)){
			?>
			<script>
			alert("Name can not be numeric!")
			</script>	
					<?php
		}

		elseif($email == ""){
			?>
			<script>
			alert("Please enter your email!")
			</script>	
					<?php
		}
		elseif(!preg_match($pattern,$email)){
			echo "<center><p style='color:red;'> Please use valid email address !</p></center>";
		}
		
		else{
             mysql_query("insert into comment(name,email,Kebele,comment)
               values('$name','$email','$Kebele','$comment')")or die(mysql_error());
           
			   ?>
			<script>
			alert("your Comment has been  successfully sent!")
				</script>	
					<?php
    
   }
  }
		
 ?>

<div class="post_box post_box_last">
                    <div class="post_box_right">
                    </div>
                    <div class="cleaner"></div>
</div>



<div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
<a href="http://www.google.com" target="_blank"><img src="images/google-map.png" title="Google" width="30" height="25"></a>
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube" width="30"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook" width="40"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a><b><font face="Elephant" color="white"size="3">Copyright &copy; Bate  Kebele Resident Management System  2017/2025  </font></b>	
		</div>
	</div>
	</div> 
            </tr>
          </table></td>
    </tr>
  </table>

</body></center>

</html>
