<?php
$to = "emiliapiccione99@gmail.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST ['age']
$comments= $_POST ['comments']
$art= $_POST ['art']
$question= $_POST ['question']
$country= $_POST ['country']
$colors = $_POST['colors'];
$colors = $_POST['colors'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Contact info from the website</h1>
<p>Username: $name </p> 
<p>Email: $email </p> 
<p>Age: $age </p> 
<p>Comments: $comments </p> 
<p>Art specialty: $art </p> 
<p>Type of camera?: $question </p> 
<p>Where are you from?: $country </p> 
<p>Color palette: $colors </p> 
</body>
</html>";
 echo 'Thanks!';
mail($to, $subject, $message, $headers);
?>

