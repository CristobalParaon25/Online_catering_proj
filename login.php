<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snpmpc login</title>
  <!-- Link to Bootstrap CSS file -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <style>
            /* ===== Google Font Import - Poformsins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        .container{
            position: relative;
            max-width: 380px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            overflow: hidden;
            margin: 0 20px;
        }

        .container .forms{
            display: flex;
            align-items: center;
            height: 350px;
            width: 200%;
            transition: height 0.2s ease;
        }


        .container .form{
            width: 50%;
            padding: 30px;
            background-color: #fff;
            transition: margin-left 0.18s ease;
        }

        .container.active .login{
            margin-left: -50%;
            opacity: 0;
            transition: margin-left 0.18s ease, opacity 0.15s ease;
        }

        .container .signup{
            opacity: 0;
            transition: opacity 0.09s ease;
        }
        .container.active .signup{
            opacity: 1;
            transition: opacity 0.2s ease;
        }

        .container.active .forms{
            height: 600px;
        }
        .container .form{
            position: relative;
            font-size: 27px;
            font-weight: 600;
        }

        .form .input-field{
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 30px;
        }

        .input-field input{
            position: absolute;
            height: 100%;
            width: 100%;
            padding: 0 35px;
            border: none;
            outline: none;
            font-size: 15px;
            border-bottom: 2px solid #ccc;
            border-top: 2px solid transparent;
            transition: all 0.2s ease;
        }

        .input-field input:is(:focus, :valid){
            border-bottom-color: #4070f4;
        }

        .input-field i{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 23px;
            transition: all 0.2s ease;
        }

        .input-field input:is(:focus, :valid) ~ i{
            color: #4070f4;
        }

        .input-field i.icon{
            left: 0;
        }
        .input-field i.showHidePw{
            right: 0;
            cursor: pointer;
            padding: 10px;
        }

        .form .text{
            color: #333;
            font-size: 14px;
        }

        .form a.text{
            color: #4070f4;
            text-decoration: none;
        }
        .form a:hover{
            text-decoration: underline;
        }
        .button:hover{
            box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.9) 0px 0px 0px 1px;
        }
        .button{
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }
       
       


  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
</head>

<body>
<div class="container">
        <div class="forms">
            <div class="form login">
            <img src="images/logo1.png" alt="" style="width:100%; height:60px; max-width:100px; margin-left:30%;">
                <form action="#">
                    <div style="font-size: 10px;" id = "msg"></div>
                    <div class="input-field">
                        <input type="text" placeholder="Username" id="username" name="username" >
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Password" id="password" >
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input id="btnLogin" type="button" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Link to Bootstrap JavaScript file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

 
  <script type="text/javascript">
    $("#btnLogin").click(function(){
        var uname = $("#username").val();
        var pword = $("#password").val();
        if (uname == ""){
            swal({
                title: "Error",
                text: "Empty Username!",
                icon: "error",
                button: "OK",
            });
            return false;
        }

        if (pword == ""){
            swal({
                title: "Error",
                text: "Empty Password!",
                icon: "error",
                button: "OK",
            });
            return false;
        }

        $.ajax({
            url:"processLogin.php",
            method: "post",
            data:{"username":uname, "password": pword},
            success: function(res){
            if (res == "1"){
                    window.location = "admin.php";
            }else{
            swal({
                title: "Error",
                text: "Incorrect username or password!",
                icon: "error",
                button: "OK",
            });
        }
        }
        });
    });

</script>

    
