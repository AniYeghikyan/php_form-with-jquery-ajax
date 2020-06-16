<?php



// session_start();
 
Accessing session data
echo 'Hi, ' . $_SESSION($_POST['email'])) . ' ' . $_SESSION["lastname"];


 $email = $_POST['email'];
 $lastname = $_POST['lastname'];
 echo "email:".$email;
 echo "lastname:".$lastname;

echo "Gender: ". $_POST["gender"]."<br>";
echo "Language: ". $_POST["language"];
$toEmail ="<br>" . "Email:" . $_POST["userEmail"];
$mailHeaders ="<br>" . "Name: " . $_POST["userName"] ."<br>" ."Last Name: ". $_POST["lastname"] ."<br>". "Phon: ". $_POST["phon"] ."<br>" . "Address: ". $_POST["address"];
if(mail($toEmail, $_POST["submit"], $mailHeaders)) {
print ( $mailHeaders . $toEmail);
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}

// echo "Gender: ". $_GET["gender"]."<br>";
// echo "Language: ". $_GET["language"];
// $toEmail ="<br>" . "Email:" . $_GET["userEmail"];
// $mailHeaders ="<br>" . "Name: " . $_GET["userName"] ."<br>" ."Last Name: ". $_GET["lastname"] ."<br>". "Phon: ". $_GET["phon"] ."<br>" . "Address: ". $_GET["address"];
// if(mail($toEmail, $_GET["submit"], $mailHeaders)) {
// print ( $mailHeaders . $toEmail);
// } else {
// print "<p class='Error'>Problem in Sending Mail.</p>";
// }



// if(!isset($_COOKIE[$cookie_address])) {
//     echo "Cookie named '" . $cookie_address . "' is not set!";
// } else {
//     echo "Cookie '" . $cookie_address . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_address];
// }













?>