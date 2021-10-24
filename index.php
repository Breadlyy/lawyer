<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <div id="logo">
        <img src="../images/logo.png" alt="Логотип">
    </div>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Full-width input fields */
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        /* Set a style for all buttons */
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        button:hover {
            opacity: 0.8;
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
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }
        /* Modal Content/Box */
        
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
        }
        /* The Close Button (x) */
        
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
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

 
    <div style="font-family: HelveticaThin; font-size: 30px;color:rgb(40, 82, 40); text-align: center; padding-top: 65px">
        We will be glad to chat with You
    </div>
    <!-- Registration form -->
     <form action="../check.php" method="post" style="text-align: center;">
            <div style="margin-top:50px">
                <input style="width: 300px; font-size: 17px; border-color: #ccff00; height:30px;" type="text" name="name" id="name" placeholder="Name" required>
                <br><br>
                <input style="width: 300px; font-size: 17px; border-color: #ccff00; height:30px;" type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                <br><br>
                <input style="width: 300px; font-size: 17px; border-color: #ccff00; height:30px;" type="text" name="email" id="email" placeholder="Email" required>
                <br><br>
                <input style="width: 300px; font-size: 17px; border-color: #ccff00; height:30px;" type="text" name="phone" id="phone" placeholder="Phone nubmer" required>
                <br><br>
                <input style="width: 300px; font-size: 17px; border-color: #ccff00; height:30px;" type="password" name="pass" id="pass" placeholder="Password" required>
                <br>
                <button class="btn btn-success" name="button" id="button-reg" type="submit" style="  background-color: rgb(197, 214, 81);margin-top: 40px; margin-left: 700px; width: 165px; height: 55px; font-size: 30px;">Registrate</button>
            </div>
     </form>
    <button id="login" onclick="document.getElementById('id01').style.display='block'" style="width: 106px; background-color: #c5d651; margin-left: 880px;">Login</button>
 <!-- Login form -->
    <div id="id01" class="modal">
        <form class="modal-content animate" action="../auth.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <img src="../images/avatar.png" alt="Avatar" class="avatar" style="width: 250px; height: 250px;">
            </div>

            <div style="padding: 16px;">
                <label for="mail"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <button type="submit">Login</button>
            </div>
            <div style=" padding: 16px;">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    


    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </div>
    <div>

    </div>
</body>

</html>