<?php

$uerror= "";
$myname= "";
if(isset($_REQUEST['submit'])) {
if($_REQUEST['text'] == null){
$uerror ="invalid username...";
}else{
$email = $_REQUEST['text'];
}
}
?>
<html>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Date Of Birth</legend>
			<table>
				<tr>
					<td align="center">dd</td>
					<td align="center">mm</td>
					<td align="center">yyy</td>
				</tr>
				<tr>
					<td align="center"> <input type="text" name="dd" value="?=$myname ?"> /</td>
					<td align="center"> <input type="text" name="mm" value="?=$myname ?"> /</td>
					<td align="center"> <input type="text" name="yyy" value="?=$myname ?"> /</td>
				</tr>
				<td><?$uerror ?></td>
				<tr>
					<td colspan="3"><hr></td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
			</fieldset>
		</form>
	</body>
	</html>




