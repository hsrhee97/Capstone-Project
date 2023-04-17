<?php
    session_start();
    $login = $_SESSION['login'];
    if (!isset($login)) {
        header('Location: home.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features Explained</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <!-- icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- another icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style> <?php include 'css/features.css'; ?> </style>
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'includes/nav.php'; ?>

    <section class="explained">
            <h1> How our features work!</h1>

        <div class="features">
            <h2>Pricing Algorithm</h2>
            <p> Our pricing is based on a simple formula that we have created which has a set constant base amount of $6
                and includes a variable which is multiplied by $1.5 to come up with the price of our rides. The variable is 
                the distant of the trip which is calculated through the map once the passenger enters their start and end 
                destination. We have used the map and created an algorithm to automate the entire process of price calculation
                so that our users do not have to worry about calculating price or distance between their start and end location.
            </p>
        </div>
        <div class="features">
            <h2>Matching Algorithm</h2>
            <p>One of our more complex feature is the matching algorithm that we have created to connect users with each other
                for a journey. The matching algorithm has 3 main criterias that are used to connect passengers. We use the start
                location, end location, and date to connect our passengers with each other. Once you have scheduled a ride you will
                be shown other passengers that you can select from. Ridea tells you how many of your criterias match. If it is a 
                perfect match our algorithm will say that you there is at least one other passenger who fits all three criterias as 
                you. If not it will show you the people that have 2 of the 3 criterias that meet and so on.
            </p>
        </div>
        <div class="features">
            <h2>Safety Features</h2>
            <p>Ridea offers the basic safety features that users require when it comes to traveling in a ridesharing service.
                We offer a lost and found feature so that users can submit a form mentioning anything that they may have found 
                or may have lost/forgotten in the car. The other feature we offer is any other problems that a passenger may 
                have faced while completing their trip. This is to be used when they believe that this is something that should 
                be brought to our attention and is more important than leaving a review. 
            </p>
        </div>
    </section>
</body>
