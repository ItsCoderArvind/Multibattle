@extends('layouts.admin')


@section('page_name', 'Reset Password')
@section('content')


<!DOCTYPE html> 
<html> 
<style> 
    /*set border to the form*/ 
      
    form { 
        border: 3px solid #f1f1f1; 
    } 
    /*assign full width inputs*/ 
      
    input[type=text], 
    input[type=password] { 
        width: 100%; 
        padding: 12px 20px; 
        margin: 8px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        box-sizing: border-box; 
    } 
    /*set a style for the buttons*/ 
      
    button { 
        background-color: #4CAF50; 
        color: white; 
        padding: 14px 20px; 
        margin: 8px 0; 
        border: none; 
        cursor: pointer; 
        width: 100%; 
    } 
    /* set a hover effect for the button*/ 
      
    button:hover { 
        opacity: 0.8; 
    } 
    /*set extra style for the cancel button*/ 
      
    .cancelbtn { 
        width: auto; 
        padding: 10px 18px; 
        background-color: #f44336; 
    } 
   
    /*set padding to the container*/ 
      
    .container { 
        padding: 16px; 
        margin: auto;
        width: 60%;
        border: 5px solid #ccc;
        padding: 10px;
    } 
    /*set the forgot password text*/ 
      
    span.psw { 
        float: right; 
        padding-top: 16px; 
    } 
    /*set styles for span and cancel button on small screens*/ 
      
    @media screen and (max-width: 300px) { 
        span.psw { 
            display: block; 
            float: none; 
        } 
        .cancelbtn { 
            width: 100%; 
        } 
    } 
</style> 
  
<body> 
  
<form action="action_page.php">
  <div class="container">
    <hr>

    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Old Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw"><b>New Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>

    <button type="submit" Value="Submit">Change Password</button>
  </div>
</form> 
   
</body>  
</html> 


@endsection