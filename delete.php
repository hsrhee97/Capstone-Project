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
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    // Check connection
    if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	// initializing variables
	$Star_rating = "";
  $Comments = "";
	$Rating_P_ID = 0;
  $PassengerID = 0;
	$update = false;

$Rating_P_ID=$_GET['Rating_P_ID'];
$qcheck = "DELETE FROM RATING_PASSENGER WHERE Rating_P_ID=$Rating_P_ID"; 
// echo $qcheck;
$result = mysqli_query($link, $qcheck); 
if(false===$result){
  printf("error: %s\n", mysqli_error($link));
}
else {
  echo ("<script>alert('Review deleted successfully!')</script>");
  echo("<script>location.replace('ride-history.php');</script>");
  }

?>

