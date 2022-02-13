<?php

$uerror= "";
$myname= "";
if(isset($_REQUEST['submit'])) {
if($_REQUEST['myname'] == null){
$uerror ="invalid username...";
}else{
$myname = $_REQUEST['myname'];
}
}
?>
<html>
<body>
	<form>
		<fieldset>
			<legend>Blood Group</legend>
			<table>
				
				<tr>
					
					<td colspan="4">
						<select>
							<option value="">B+</option>
							<option value="">B-</option>
							<option value="">O+</option>
							<option value="">AB+</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4"><hr></td>
				<tr>
					<td colspan="4"><input type="submit" name="submit" value="submit"></td>
				</tr>
				</table>
			</fieldset>
		</form>
	</body>
	</html>




