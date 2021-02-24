<! DOCTYPE html>
<html>
<head>
<title>  registeration </title>
<style>
h1{
    color:red;
    text-decoration: underline;
    text-align: center;
  }
input{
padding:10px;
margin:10px;
}
fieldset
{
margin-left: 500px;
text-align: center;
background-color: rgba(0,0,0,0.8);
}
 </style>
</head>
<body>
  <h1> Registeration Form</h1>
 <!---form starts---->
 <fieldset style="width:20%;"  >
  <form name="myform" action="<?php echo base_url()?>main/reg_access" method="POST" >
       
        <input type="text" name="fname"  placeholder="firstname" pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></br>
     
      <input type="text" name="lname"  placeholder="lastname" pattern=".{3,}"   required title="3 characters minimum"  maxlength="25"></br>
           
            <input type="text" name="uname"  placeholder="username" required pattern=".{3,}"   required title="3 characters minimum" maxlength="10"></br>

<input type="password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"> </br>
       
        <input type="text" name="mobile"  placeholder="mobile no" required minlength="10"maxlength="10"></br>
     
      <input type="email" name="email"  placeholder="email" required> </br>
   
    <input type="submit" name="submit" >
            </form>
            </fieldset>
 <!----form ends----->
 

</body>
</html>
