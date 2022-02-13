<?php

$uerror= "";
$myname= "";
if(isset($_REQUEST['submit'])) {
if($_REQUEST['checkbox'] == null){
$uerror ="invalid username...";
}else{
$myname = $_REQUEST['checkbox'];
}
}
?>
<html>
<body>
	<form>
		<fieldset>
			<legend>DEGREE</legend>
			<table>
				
				<tr>
					<td align="center"> <input type="checkbox" name="SSC" value="<?=$rr ?>"> SSC</td>

					<td align="center"> <input type="checkbox" name="HSC" value="<?=$rr ?>"> HSC</td>
					<td align="center"> <input type="checkbox" name="BSC" value="<?=$rr ?>"> BSC</td>
					<td align="center"> <input type="checkbox" name="MSC" value="<?=$rr ?>"> MSC</td>
					
				</tr>
				<tr><td><?$uerror ?></td></tr>
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				<tr>
					<td colspan="4"><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
			</fieldset>
		</form>
	</body>
	</html>




