<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIDEA</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <!-- icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- another icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <style> <?php include 'css/style.css'; ?> </style>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    
    <!-- navbar -->
    <?php include 'includes/nav.php'; ?>

    <?php 
        $login = $_SESSION['login'];
        // before login
        if(!$login) {
            ?>
            <div class="hometext">
                <h2 class="slide-left">Tired of Waiting for <br> an Overpriced Taxi?<br></h2>
                <a  href="loginform.php" class="btn"><span>Get a Ride!</span></a>
            </div>
            
            <div class="bg-image">
            </div>
            <?
        }

        else{
            //after login
            ?>
            <div class="upperhome">
                <h2 class="after-login-h2">Welcome to <span>RIDEA</span></h2>
                <p><span>Frequently Asked Questions</span></p>
            </div>
        
            <div class="bgimg">
            </div>

            <ul class="accordion">
                <li>
                    <input type="radio" name="accordion" id="first">
                    <label for="first">About RIDEA</label>
                    <div class="content">
                        <p>heweuqhweuqhweuqheiuqheiqheiuqwheiquheiu.eqweqweqweqweqweqew</p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordion" id="second">
                    <label for="second">How can RIDEA provide services in affordable prices?</label>
                    <div class="content">
                        <p>heweuqhweuqhweuqheiuqheiqheiuqwheiquheiu.eqweqweqweqweqweqew</p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordion" id="third">
                    <label for="third">How can I use the RIDEA service?</label>
                    <div class="content">
                        <p>heweuqhweuqhweuqheiuqheiqheiuqwheiquheiu.eqweqweqweqweqweqew</p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordion" id="fourth">
                    <label for="fourth">What is the difference from other taxi services?</label>
                    <div class="content">
                        <p>heweuqhweuqhweuqheiuqheiqheiuqwheiquheiu.eqweqweqweqweqweqew</p>
                    </div>
                </li>
            </ul>

            <a  href="#" class="btn-after-login"><span>GET A RIDEA</span></a>
            <?
        }
    ?>


</body>
</html> 