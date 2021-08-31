	 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fartoographic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security

$CustomerName = $_POST['CustomerName'];

$Request = $_POST['Request'];


 

// attempt insert query execution

mysqli_query($conn, "INSERT INTO logo (CustomerName, Request) VALUES ('$CustomerName', '$Request')");

if(mysqli_affected_rows($conn)>0){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

 

// close connection

mysqli_close($conn);

?>
