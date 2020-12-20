<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        .login-logo{
            width: 300px;
            height: auto;
            margin: auto;
            position: absolute;
    top: 10%;
    left: 50%;
    transform: translateX(-50%);
        }
    </style>
</head>
<body style=" background: linear-gradient(to left, #0973E3 0%,#4B94E1cc 100%)">
    <img class="login-logo" src="visitor/img/logo_big.jpeg">
    <div class="container">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label> Password </label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form> 
                <div>  <dt class="text-danger class="rounded-lg col-md-8"><?php if(isset($_GET['erruser'])) echo "invalid email / password"; ?></dt> </div>
            </div>

            <div class="col-md-6 login-right" >
                <h2>Register</h2>
                <form action="registration.php" method="post" name="reg" id="reg">
                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label> Password </label>
                        <input type="password" minlength="9" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label> Phone </label>
                        <input type="text" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type = "number" minlength="9" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                                        
                    <button type="button" class="btn btn-primary" onclick="rsubmit(document.reg.email)"> Register </button>
                </form> <div> <p> <?php if(isset($_GET['pass'])) echo "seccessfully registered";
                                        else if (isset($_GET['fail'])) echo "Registration id already exist in database";
                                        else if (isset($_GET['failed'])) echo "email already exist in database"; ?> </p> </div>
            </div>

        </div>
        </div>
    </div>
    <script>
        function ValidateEmail(mail)
{
var mailformat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
if(mail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
document.reg.email.focus();
return false;
}
}

function rsubmit(mail){
    if (ValidateEmail(mail)){
    document.getElementById('reg').submit();
    }else{

    }

}
        </script>
</body>
</html>