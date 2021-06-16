<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    
    <form action="user" method="post">
        @csrf
        Name :
        <input type="text" name="name"><br><br>
        Username :
        <input type="text" name="uname"><br><br>
        Date of Birth :
        <input type="date" name="DOB"><br><br>
        Email :
        <input type="email" name="email"><br><br>
        Telephone No. :
        <input type="tel" name="tel"><br><br>
        NIC No. :
        <input type="text" name="nic"><br><br>
        Gender(Male/Female) :
        <input type="text" name="gender"><br><br>
       
        Password :
        <input type="password" name="pass"><br><br>
        Reenter Password :
        <input type="password" name="repass"><br><br>
        <button name="Submit">Submit</button>
    </form>
    
</body>
</html>