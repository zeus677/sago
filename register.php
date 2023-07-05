<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sagnol");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['name'];
$password = $_POST['password'];
$email =$_POST['email'];
$name =$_POST['username'];
$prenom =$_POST['prenom'];

 
// Attempt insert query execution
$sql = "INSERT INTO utilisateur (nom, prenom, pseudo, email, mot_de_passe) VALUES
            ('$name' , '$prenom' , '$username', '$email', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("location: login.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
