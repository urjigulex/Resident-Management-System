
<?php 
$session_email="";
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_email'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>


<html>

<head>
<script>
function update(){
				var des=confirm("are you sure you want to update this account?");
			
	if(des==true){
					alert("update sucessfull");
				}
				else
				return false;}
</script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>
<script type="text/javascript">
    var timenow = new Date();
    timenow.format("UTC:h:MM:ss TT Z");
    document.getElementById("date").value = new Date().toUTCString();
</script>
<script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("pick_date").value);
                var pickdt = new Date(document.getElementById("drop_date").value);
                return parseInt((pickdt - dropdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

    </script>
<script>
  jQuery(document).ready(function($) {var dateToday = new Date();
var dates = $("#dateStart, #dateEnd").datepicker({
    defaultDate: "+1w",
	dateFormat: 'yy-mm-dd',
    changeMonth: true,
    numberOfMonths: 1,
    maxDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "dateStart" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker.settings.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
   	 }
	});
});
  </script>
  

</head>
<body id="body"><center>
<div id="register" style="border: solid 3px #fdfbfb;width: 750px;height: auto;border-corner-shape:#02d01c;border-radius:80px;margin-left:70px:#fff4fe ">
	<?php
$conn=mysqli_connect("localhost","root","");
	
      mysqli_select_db($con,"onlinekebele");
if(isset($_GET['id_no']))
{
$hn=$_GET['id_no'];
if(isset($_POST['submit']))
{
$id=$_POST['id_no'] ;


$dt = date('d-M-Y');	
$a=date('Y-m-d');
$rdate=$_POST['rdate'] ;	
$duration=$rdate-$a;
$current=date_create(date('Y-m-d'));
$date2=date_create($rdate);

$diff=date_diff($date2,$current);
$a=$diff->format("%R%a");
if (isset($_POST['renew']))
		{
$dategiven=$_post["dategiven"];
if($dategiven <=350){
	echo '<Script>alert("Your Duration are not correct ")</script>';
}
}
else
	{
					$insert=mysqli_query($con,"update id_card set renewed_date = '$dt' where id_no='$id'");
		if($insert)
		{
			echo '<Script>alert("ID Crad is Renewed successfully")</script>';
			
			
			}
		else
		{
		
			echo mysqli_error($con);
}


}
}
$query1=mysqli_query($con,"select * from id_card where id_no='$_GET[id_no]'");

?>
<?php
while ($row= mysqli_fetch_array ($query1) ){
		?>
<div id="register" style="
	border: solid 3px #3a33c6;width: 600px;height: auto;margin-top: -1px;border-corner-shape:#02d01c;border-radius:80px;margin-left:70px;background-color:#fff4fe ">
<form action="" method="POST" name="addmult">
<table cellpadding="8" style="margin-left: 150px">
<tr><td colspan="2" ><p><font size="6" color="#045349"> Renew ID Card</font> </p></td></tr>
<tr><td><b>ID Number:</b></td><td>
<input name="id_no" type="text" value=<?php echo $row['id_no']; ?> style=" margin-bottom: 10px;width: 180px;height: 30px; 	border:1px Solid #071f56;"/></td></tr>

<tr><td>
<b>Given Date:</b></td ><td><input type="text" name="rdate" size="25" id="drop_date" class="textbox"   
required  readonly id="dateStart" value="<?php echo $row ['dategiven']; ?>" style=" margin-bottom: 10px;width: 180px;height: 30px;border:1px Solid #071f56;"></td>
   </tr><td>

 <tr><td>
<b>Renewed Date:</b></td ><td><input type="text" name="date" size="25" id="drop_date" class="textbox"   
required  readonly id="dateStart" value="<?php echo date('Y-m-d');?>" style=" margin-bottom: 10px;width: 180px;height: 30px;border:1px Solid #071f56;"></td>
   </tr><td>

  
<tr><td><input type="submit" name="submit" value="Renew" style="background-color: #20645b;color: #fffbfb;width:100px;height: 40px;font-size: 20px"></td>
<td><input type="submit" name="reset" value="Rset"style="background-color: #20645b;color: #fffbfb;height: 40px;width:100px;font-size: 20px"></tr>


    </div>
</table>
</form>
<?php
}}
?>
</div>
							<center>
<a href="renew.php"><img src="images/back.jpg" width="90"></a></center>

</html>
