<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background: linear-gradient(to bottom, #66B3FF, #FFFFFF);
            
            margin: 0;
            
            height: 100vh;
           
        }

        .container {
            text-align: center;

        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-left: 30%;
            margin-right: 30%;
            height: 65vh;
        }

        h1 {
            font-size: 36px;
           
        }

        
        input[type="email"],
        input[type="text"],
        textarea {
            width: 100%;
           
            padding: 10px;
           
            margin-bottom: 15px;
           
            box-sizing: border-box;
            border: 1px solid #ccc;
            
            border-radius: 5px;
            
            box-shadow: inset 0px 0px 5px 0px rgba(0, 0, 0, 0.3);

        }

        .container form button {

            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <div class="top-row">
            <div class="logo">
                <a class="home-link" href="index.php"><img src="images/home_icon.svg" alt="home icon" class="icon" href="#" /></a>
                <img src="images/logo.png" alt="logo" class="logo-icon" />
                <h1>VaalElectronics</h1>
            </div>
            <div class="right">

                <button class="account" id="accountButton">
                    <img src="images/person-circle.svg" alt="person-circle" class="icon-acc" />Account
                </button>
            </div>
        </div>

    </header>
    <div class="container">
    <form name="contactForm" action="sendEmail.php" method="post" id="contactForm">
        <h1>Contact Us</h1>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
        <textarea id="message" name="message" rows="8" cols="50" placeholder="Message" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
        <span id = "msg"></span>
    </div>

    <?php include_once("footer.html") ?>

    <script>
        document.getElementById("accountButton").addEventListener("click", function() {
            window.location.href = "signin.html";
        });
    </script>

    

</body>

</html>