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

$Customer Name = $_POST['Customer Name'];

$Request = $_POST['Request'];


 

// attempt insert query execution

mysqli_query($conn, "INSERT INTO logo ($Customer Name, Request) VALUES ('$Customer Name', '$Request')");

if(mysqli_affected_rows($conn)>0){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

 

// close connection

mysqli_close($conn);

?>
