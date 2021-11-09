<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <div id="logo">
        <img src="images/logo.png" alt="Логотип">
    </div>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Full-width input fields */
        .form{
            text-align: center;
        }
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
       
        .inscription {
          font-family: HelveticaThin;
          font-size: 30px;
          color: rgb(40, 82, 40);
          text-align: center;
          padding-top: 65px
        }
        input[type="text-form"] {
          width: 300px;
          font-size: 17px;
          border-color: #ccff00;
          border: 1px solid #ccc;
          border-color: #ccff00;
          margin-left: 40px;
          height: 30px;
        }
        span[type=span_error] {
            margin-left: 40px;
        }
        /* Set a style for all buttons */
        
        button[type=btn] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        button[type=btn]:hover {
            opacity: 0.8;
        }

        #button_reg {
         background-color: rgb(197, 214, 81);
         color: white;
         border: 1px solid #ccc;
         border-color: #ccff00;
         margin-top: 40px;
         width: 165px;
         height: 55px;
         font-size: 30px;
        }
        #login {
         width: 106px;
         background-color: #c5d651;
         margin-left: 880px;
        }
        #log_1 {
         width: 100%;
         background-color: #c5d651; 
        }

        /* Extra styles for the cancel button */
        
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        /* Center the image and position the close button */
        
        .imgcontainer {
            text-align: center;
            margin: 14px 0 12px 0;
            position: relative;
        }
        
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        
        span.psw {
            float: right;
            padding-top: 16px;
        }
        
        .modal {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }
        /* Modal Content/Box */
        
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 70%;
        }
        /* The Close Button (x) */
        
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: thin;
        }
        
        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }
        /* Add Zoom Animation */
        
        .animate {
            -webkit-animation: animatezoom 0.7s;
            animation: animatezoom 0.7s
        }
        
        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }
        
        @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }
        /* Change styles for span and cancel button on extra small screens */
        
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
</head>

<body>
    
    <div id="navWrap">
        <a href="index.php">Main page</Main></a>
        <a href="about.html">About us</a>
        <a href="staff.html">Office staff</a>
        <a href="Location.html">Location</a>
    </div>

 
    <div class = "inscription" >
        We will be glad to chat with You
    </div>
    <!-- Registration form -->
    <div id="error"></div>
     <form id="form" class="form text-form" enctype="multipart/form-data"  action="check.php" method="POST">
            <div style="margin-top:50px" >
                <input type="text-form"  class="field" name="name" id="name" placeholder="Name">
                <span type="span_error" id = "error_name"></span>
                <br><br>
                <input type="text-form"   class="field" name="last_name" id="last_name" placeholder="Last Name" >
                <span type="span_error" id = "error_last_name"></span>
                <br><br>
                <input type="text-form"   class="field" name="email" id="email" placeholder="Email" >
                <span type="span_error" id = "error_email"></span>
                <br><br>
                <input type="text-form"   class="field" name="phone" id="phone" placeholder="Phone nubmer" >
                <span type="span_error" id = "error_phone"></span>
                <br><br>
                <input type="text-form"   class="field" name="pass" id="pass" placeholder="Password" >
                <span type="span_error" id = "error_pass"></span>
                <br>
                <textarea id="message" class="text_form" placeholder="Message" required></textarea>
            <br>
            <div class="control-file">
                <label for="fileFF">Прикрепить файл:</label>
                <input id="fileFF" name="fileFF" type="file">
            </div>
              <button class='registrate' type="submit" name="button" id="button_reg" >Registrate</button>
            </div>
     </form>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script  src="script.js"></script>
    <button type="btn" id="login" onclick="document.getElementById('log_window').style.display = 'block'" >Login</button>
    
 <!-- Login form -->
    <div id="log_window" class="modal">
        <form class="modal-content animate" action="auth.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('log_window').style.display='none'" class="close">×</span>
                <img src="../images/avatar.png" alt="Avatar" class="avatar" style="width: 250px; height: 250px;">
            </div>

            <div style="padding: 16px;">
                <label for="mail"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <button id="log_1" type="btn" type="submit">Login</button>
                
            </div>
        </form>
    </div>
</div>
</body>

</html>