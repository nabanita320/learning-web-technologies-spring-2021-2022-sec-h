<?php

$uerror= "";
$myname= "";
if(isset($_REQUEST['submit'])) {
if($_REQUEST['email'] == null){
$uerror ="invalid username...";
}else{
$email = $_REQUEST['email'];
}
}
?>
<html>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>EMAIL</legend>
			<table>
				<tr><td><input type="email" name="email" value="<?=$email ?>"></td></tr></br>
				<td><?$uerror ?></td>
				<tr><td><hr></td></tr>
				<tr> <td><input type="submit" name="submit" value="submit"><td></td>
				</table>
			</fieldset>
		</form>
	</body>
	</html>




