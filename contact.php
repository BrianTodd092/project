 <!DOCTYPE html>
  <head>
  <title>cargo_form</title>
  <meta http-equiv="Content-type"
        content="text/html; charset=utf-8"/>
 </head>
 <body>
  <?php
  //7 line of code to retrieve the form data sent   "post"
    $name=$_POST['name'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $message=$_POST['message'];

/*creation of the $msg variable and
 supplementally adding  detail to it.*/
    $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
    $msg.="Sender Name: $name\r\n ";
    $msg.="Moblie No: $mobileno\r\n ";
    $msg.="Sender E-mail: $email\r\n ";
    $msg.="Message: $message\r\n ";


    $to="Enter E.mail address here";   // email  sent
    $subject="Web Site Form";   // subject
    $mailheaders="From: $email\r\n";  // email   display  the sender


    $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
    if ($formsent)
     {
      echo "<p style='background-color:green;color:white;width:200px;height:40px;text-align:center;font-size:18px;'> Form Recieved</p>";
     }
     else
     {
      echo "<p style='background-color:red;color:white;width:200px;height:40px;text-align:center;font-size:18px;'> The form has not been sent </p>";
     }
     ?>


    <p>Detail of Form!<br />
       <?php
       echo  $msg;
       ?>

       </p>
   <p><a href="btn_contactform.html">Main Page</p>

 </body>
</html>
