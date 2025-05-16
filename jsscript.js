

	if(is_numeric($fname)){
			?>
	<script>
		alert("name can not be numeric!!");
	</script>
	<?php
		}
		elseif(is_numeric($mname)){
			?>
	<script>
		alert("Middle can not be numeric!");
	</script>
	<?php
		}
	
	elseif(is_numeric($lname)){
			?>
	<script>
		alert("lname can not be numeric!");
	</script>
	<?php
		}
	elseif($id_no==" "){
			?>
	<script>
		alert("id number canot be Null!);
	</script>
	<?php
		}
		elseif($id_no=="id_no"){
			?>
	<script>
		alert("id_no  can not be duplicate!");
	</script>
	<?php
		}
	elseif(!is_numeric($age)){
			?>
	<script>
		alert("Age must be numeric!");
	</script>
	<?php
		}
		elseif($age<=0){
			?>
	<script>
		alert("Age can not be negetive number!");
	</script>
	
	<?php
										}
	else{