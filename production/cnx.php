<?php


$username=$_POST['username'];
$passeword=$_POST['passworde'];
if ($username =="sofiane" && $passeword =="soso"){header("Location: index.html");}
else {
?>

<script language="JavaScript">
	alert("mot d epasse ou l identifiant est faux .. recommencer");
	window.location.replace("login.html");
</script>
	<?php
}
?>