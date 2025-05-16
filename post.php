<?php 
include('db.php');

															$post_date=$_POST['date'];
									$title= $_POST['title'];
									$news= $_POST['news'];
		mysql_query("insert into post (date,title,news) 
						values('$post_date','$title','$news')")or die(mysql_error());
						

									
?>
<script>
						window.alert(' Your Post successfully sent !');
				window.location.href='posts.php';
				</script>