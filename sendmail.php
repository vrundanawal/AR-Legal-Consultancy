<?php
$namen=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$message=$_POST['message'];


// multiple recipients
$to  = 'info@arlegalconsultancy.co.uk' . ', '; // note the comma
$to .= $email;

// subject
$subject = 'Contact Us';

// message
$message = '
<html>
<head>
  <title>Contact Us</title>
</head>
<body>
  <p>Contact Details</p>
  <table>
    <tr>
     <td>Name:</td><td>'.$name.'</td>
    </tr>
	  <tr>
     <td>Number:</td><td>'.$number.'</td>
    </tr>
	  <tr>
     <td>Email:</td><td>'.$email.'</td>
    </tr>
	 <tr>
     <td>Messager:</td><td>'.$message.'</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Abid <info@arlegalconsultancy.co.uk>, <info@arlegalconsultancy.co.uk>' . "\r\n";
$headers .= 'From: Ctz Bag <info@arlegalconsultancy.co.uk>' . "\r\n";
$headers .= 'Cc: info@arlegalconsultancy.co.uk' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);
if(mail)
{
?>
<script>
alert('Thanks for your entry.We will contact you soon');
window.location = "http://arlegalconsultancy.co.uk/";
</script>
<?php
}
?>