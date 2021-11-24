<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responses</title>
</head>
<body>

<h1>
    Your responses
</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  $email_ = $_REQUEST['email'];
  $phone_ = $_REQUEST['phone'];
  $age_ = $_REQUEST['age'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    //echo " $name " . "<br>" . "$email_ " . "<br>" . "$phone_" . "<br>" ."$age_ " . "<br>";


  }
  
}
?>
<h3> Welcome <?php echo $name; ?> </h3>
<br>
<table>
    <tr>
<td><?php echo "Your name is : $name" ?></td>
</tr>

<tr>
    <td><?php echo "Your email is : $email_" ?></td>
</tr>
<tr>
    <td><?php echo "Your phone number is : $phone_" ?></td>
</tr>
<tr>
    <td><?php echo "Your age is : $age_" ?></td>
</tr>
</table>
</body>
</html>