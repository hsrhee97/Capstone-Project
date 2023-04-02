<?php
    session_start();
    $login = $_SESSION['login'];
    if (!isset($login)) {
    header('Location: home.php');
    exit;
    }
?>
<?php 
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'db.luddy.indiana.edu');
    define('DB_USERNAME', 'i494f22_team06');
    define('DB_PASSWORD', 'my+sql=i494f22_team06');
    define('DB_NAME', 'i494f22_team06');
 
    /* Attempt to connect to MySQL database */
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $type = $_SESSION['type'];
    $email = $_SESSION['login'];

    $sql = "SELECT * FROM DRIVER WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $DriverID = $row["DriverID"];
            $fname = $row["fname"];
            $lname = $row["lname"];
            $password = $row["password"];
            $address = $row["address"];
            $phone = $row["phone"];
            $biography = $row["biography"];
            $license_number = $row["license_number"];
            $color = $row["color"];
            $model_name = $row["model_name"];
            }
      } 
      else {
            echo "No records has been found";
      }
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Edit Driver Profile</title>
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
        <!-- icons -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- another icons -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <style> <?php include 'css/register2.css'; ?> </style>
    </head>

    <body>
        <?php include 'includes/nav.php'; ?>
        <div class="wrapper">
            <div class="title">
                Edit My Profile
            </div>

            <form method="post" action="driver_edit.php" >
                <div class="inputbox">
                    <span>First name</span>
                    <input class="reg_box" type='text' name = "fname" value="<?php echo $fname;?>">
                </div>

                <div class="inputbox">
                    <span>Last name</span>
                    <input class="reg_box" type='text' name = "lname" value="<?php echo $lname;?>">
                </div>

                <div class="inputbox">
                    <span>Password </span>
                <input class="reg_box" type='password' name = "password" value="<?php echo $password;?>">
                </div>

                <div class="inputbox">
                    <span>Address </span>
                <input class="reg_box" type='text' name = "address" size="40" value="<?php echo $address;?>">
                </div>

                <div class="inputbox">
                    <span>Phone</span>
                <input class="reg_box" type='tel' name = "phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" size="40" value="<?php echo $phone;?>">
                </div>

                <div class="inputbox">
                    <span>Biography</span>
                <input class="reg_box" type='text' name = "biography" size="40" value="<?php echo $biography;?>">
                </div>

                <div class="inputbox">
                    <span>License number</span>
                <input class="reg_box" type='text' name = "license_number" size="40" value="<?php echo $license_number;?>">
                </div>

                <div class="inputbox">
                    <span>Vehicle Color</span>
                <input class="reg_box" type='text' name = "color" size="40" value="<?php echo $color;?>">
                </div>

                <div class="inputbox">
                    <span>Model Name</span>
                <input class="reg_box" type='text' name = "model_name" size="40" value="<?php echo $model_name;?>">
                </div>

                <div class="inputbox">
                    <input type="submit" name="submit" value="submit" class="btn">
                </div>
            </form>
        </div>
    </body>
</html>


<?php 
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'db.luddy.indiana.edu');
    define('DB_USERNAME', 'i494f22_team06');
    define('DB_PASSWORD', 'my+sql=i494f22_team06');
    define('DB_NAME', 'i494f22_team06');
 
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    // Check connection
    if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $biography = $_POST['biography'];
        $license_number = $_POST['license_number'];
        $color = $_POST['color'];
        $model_name = $_POST['model_name'];

        $query = "UPDATE DRIVER SET fname = '$fname', lname = '$lname', address = '$address', phone = '$phone', password = PASSWORD('$password'), biography = '$biography', license_number = '$license_number', color = '$color', model_name = '$model_name' WHERE DriverID = '$DriverID' " ;

        $result = mysqli_query($link, $query); 
        if(false===$result){
            printf("error: %s\n", mysqli_error($link));
        }
        else {
            echo ("<script>alert('Your profile has been successfully updated')</script>");
            echo("<script>location.replace('profile.php');</script>");
            exit;
        }
    }
?>