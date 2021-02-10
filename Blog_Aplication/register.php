<?php

require 'server\server_reg.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body><center>
    <form action="#" method="post" id="form">
    <table>
        <tr>
            <td>Prefix</td>
            <td>
                <select name="prifix" id="" data-error="#select">
                    <option value="">--Select any prifix--</option>
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>
                    <option value="Miss">Miss</option>
                </select>
                <br><span id="select"><?php  echo $prifixe; ?></span>
            </td>
        </tr>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname" id="fname" data-error="#name">
            <br><span id="name"><?php  echo $fnamee; ?></span></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" data-error="#lname">
            <br><span id="lname"><?php  echo $lnamee; ?></span></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email"data-error="#emailchk">
                <div class="email_check"></div>
            <br><span id="emailchk"><?php  echo $emaile; ?></span></td>
        </tr>
        <tr>
            <td>Mobile No.</td>
            <td><input type="text" name="phone" id="phone"data-error="#phonec">
            <br><span id="phonec"><?php  echo $phonee; ?></span></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password"data-error="#password">
            <br><span id="password"><?php  echo $passworde; ?></span></td>
        </tr>
        <tr>
            <td>Confirm Passeord</td>
            <td><input type="password" name="cpassword" id="rpass" data-error="#cpass">
            <br><span id="cpass"><?php  echo $cpassworde; ?></span></td>
        </tr>
        <tr>
            <td>Information</td>
            <td><textarea name="info" id="info" data-error="#info1"></textarea>
            <br><span id="info1"><?php  echo $infoe; ?></span></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="checkbox" name="accept" data-error="#accept"> Here bY I accept Terms and Condition..<br>
                <span id="accept"><?php  echo $agree; ?></span>
            </td>
        </tr>
        <tr>
            <td colspan='2'><input type="submit" value="submit" name="reg"></td>
        </tr>
    </table>
    </form>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/validation.js"></script>
    <script type="text/javascript">
        
    $(document).on('focusout','#email',function(){
        var title=$(this).val();
        $.ajax({
            url:"./server/search_data_email.php",
            data:{row_id:title,action:"submit"},
            type:'POST',
            success: function(response){
                if(response == 'fail')
                {
                    alert("Sorry! Email already exist.");
                    $('#email').val("");
                }                
            },error:function(error){
                console.log(error);
                }
            })
    })
    </script>
</body>
</html>