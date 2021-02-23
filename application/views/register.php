</!DOCTYPE html>
<html>
<head>
    <title>registration</title>
    <style>
        fieldset{
            padding: 10px;
            margin-left:450px;
            text-align:center;
            margin-top:50px;
        }
        input{
            padding:10px;
            margin-top: 5px;
            text-align:center;
        }
    </style>
</head>
<body>
    
    <form method="post" action="<?php echo base_url()?>main/reg">

    <fieldset style="width:100px">
        <legend> Register</legend>
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="text" name="uname" placeholder="User Name">
        <input type="password" name="password" placeholder="password">
        <input type="text" name="mobile" placeholder="Mobile number">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="submit">
    </fieldset>
</body>
</html>