<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lab.css"> 
    <title>Laboratory</title>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <a href="../index.php"><img src="../images/logo.png" alt="logo" class="logo"></a>
            <ul>
                <li><a href="lab_home.php">Home</a></li>
                <li><a href="lab_appointments.php">Lab Appointments</a></li>
                <li><a href="lab_viewprofile.php">View Profile</a></li>
            </ul>
            <div class="signouttext"><a href="#">Sign Out</a></div>
        </div>
        <div class="main_content"> 
            <div class="info">
            <img src="../images/user.png" alt="user" class="imgframe">
            <h2 style="margin-left: 60px; margin-top:15px;">Change Password</h2>
            <span>
            <form>
            <table class="formtable">
                <tr>
                    <td>Old Password :</td>
                    <td><input type="password" class="form-control" name="oldpwd" required="" autofocus="true"/></td>
                </tr>
                <tr>
                    <td>New Password :</td>
                    <td><input type="password" class="form-control" name="newpwd" required="" autofocus="true"/></td>
                </tr>
                <tr>
                    <td>Confirm Password :</td>
                    <td><input type="password" class="form-control" name="confirmpwd" required="" autofocus="true"/></td>
                </tr>
            </table>
            <button class="btn-blue" type="submit">Save Password</button>
            </form>
            </span>
            </div>
        </div>
    </div>
</body>
</html>