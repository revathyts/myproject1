<!DOCTYPE html>
<html>
<head>
<title> form </title>
<style>
h1{
    color:red;
    text-decoration: underline;
    text-align: center;
  }
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
  padding:5px;
  margin:10px;
  color:white;
  
}




</style>
</head>
<body>
  
<h1> Registeration Form</h1>
<form method="post" action="<?php echo base_url()?>main/reg_access">
<table>
<tr>
  <td>First Name</td>
  <td><input type="text" name="fname"placeholder="First Name"></td></tr>
  <tr>
  <td>Last Name</td>
  <td><input type="text" name="lname"placeholder="Last Name"></td></tr>
<tr>
  <td>Username</td>
  <td><input type="text" name="uname"placeholder="Username"></td></tr>
 <tr>
  <td>Password</td>
  <td><input type="password" name="password"placeholder="password"></td></tr>
<tr>
  <td>Mobile</td>
  <td><input type="text" name="mobile"placeholder="Mobile number">
</td></tr>
<tr>
  <td>Email</td>
  <td><input type="email" name="email"placeholder="email">
</td></tr>

<tr><td><input type="submit" class="btn" value="REGISTER">
</td></tr>
</table>
</form>

</body>
</html>
