//Login page


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<style>
	body

table{
	margin-top:80px;
	border:1px solid black;
	border-collapse: collapse;
	background-color:rgba(0,0,0,0.4);
	width:400px;
	height:auto;
	margin-left:400px;
	
	}	
	td{
	text-align:center;
	padding: 15px;
	margin:10px;
	color:white;
	
}
.btn{
	border:1px solid black;
	border-radius:5px;
	margin-left:150px;
	text-align:center;
	font-size:20px;
}
</style>
<body>
	<form method="post" action="<?php echo base_url()?>main/new_login">
				<table>
				 <tr><td>Username</td>
					<td><input type="text" name="uname"></td></tr>
					<tr><td>Password</td>
					<td><input type="text" name="password"></td></tr>
					<tr><td><input class="btn" type="submit" value="Login" name="submit"></td></tr>
				
				
					
</table>
</form>
</body>
</html>
