<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $userame=filter_var( $_POST['username'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone=filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $message=filter_var($_POST['message'],FILTER_SANITIZE_STRING);
    $success='<div class="alert alert-success" role="alert">Done! Your Message is Submitted</div>';
    mail('adhamali20012015@gmail.com','Ana La2et Otaka',$message,'From: adhamali20012015@gmail.com');
    $userame="";
    $email="";
    $phone="";
    $message="";
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body
        {
            background-color:#f1f1f1;
        }
        .error{
            font-size:19px;
        }
        h1 {
            font-family: 'Raleway', sans-serif;
            letter-spacing: -2px;
            color: #3a3a3a;
            font-weight: 900;
            margin-bottom: 24px;
            margin-top: 20px;
        }

        form {
            margin: 10px auto;
            max-width: 500px;
        }

        .form-control {
            margin-bottom: 9px;
        }

        textarea {
            height: 200px !important;
        }

        form .inside {
            color: #999;
            position: relative;
            float: left;
            top: 7px;
            height: 0px;
            left: 11px;
        }

        form input {
            padding-left: 33px !important;
        }
        .alert-danger
        {
            padding :5px 10px;
            margin :9px auto;
            display:none;
        }
    </style>
    <title>Contact Form</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Contact Me</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php
        if(isset($success))
        {
            echo $success;
        }
         ?>
        <div class="form-group">
        <i class="bi bi-person-fill inside"></i>
            <input class="form-control username" type="text" name="username" placeholder="Type Your Username" value="<?php 
                if(isset($userame))
                {
                    echo $userame;
                }
            ?>" />
            <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill error"></i>
            Username Must contain at least 4 Characters
            </div>
        </div>
        <div class="form-group">
        <i class="bi bi-envelope-fill inside"></i>
            <input class="form-control email" type="text" name="email" placeholder="Please Type Your Email" value="<?php 
                if(isset($email))
                {
                    echo $email;
                }
            ?>" />
            <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill error"></i>
            Email Can't be Empty 
            </div>
        </div>
        <div class="form-group">
        <i class="bi bi-telephone-fill inside"></i>
            <input class="form-control" type="text" name="phone" placeholder="Your Phone" value="<?php 
                if(isset($phone))
                {
                    echo $phone;
                }
            ?>" />
        </div>
        <div class="form-group">
        <textarea class="form-control" placeholder="Your Message" name="message" ><?php 
                if(isset($message))
                {
                    echo $message;
                }
            ?></textarea>
        </div>
           
            <button type="submit" class="btn btn-success"><i class="bi bi-cursor-fill"></i> Submit</button>
        </form>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myJS.js"></script>
</body>
</html>