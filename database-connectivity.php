<?php
$conn=mysqli_connect("localhost","root","","web");
?>

<html>
<head>
	<title> Login Form</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
    $password=$_POST['password'];
    
    $query="insert into reg(Firstname, Email, Password)values('$firstname','$email','$password')";
    $run=mysqli_query($conn,$query);
    
    if($run){
        echo " You Have Successfully Logged in";
    }
    else{
        echo"error:".mysqli_error($conn);
    }
        
}
?>




<center><h1>Registration form</h1></center>
<div class="form">
<form method="POST" action="">

<center>
<table>
<tr>
<th></th>
<th>Registration form</th>
</tr>

<tr>
<td>First Name</td>
<td><input type="text" name="firstname" placeholder="firstname" required=""</td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" placeholder="emailid" required=""</td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" placeholder="password" required=""</td>
</tr>

<tr>
<td><input type="submit" value="submit" name="submit"</td>
</tr>


</body>
</html>