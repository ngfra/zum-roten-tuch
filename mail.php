<?php

// Empfänger E-Mail
$to = 'ngocfrankl@gmail.com';

// Subject
$subject = 'Neue Nachricht für Zum roten Tuch!';

// ++++++++++++++++++++++++++++++++++++++++++++++++++
if(isset($_POST)) {

    // Set from
    if(!$from = $_POST['email']) {
        exit("Kein Absender-Mail gesetzt!");
    }

    // Output
    $o = '';

    foreach($_POST as $k => $v) {
        if(!empty($v)) {
            $o .= "<tr><td>$k</td><td>$v</td></tr>";
        }
    }

}

// Message
$message = "
<html>
<head>
  <title>Registrierung Opbacher-Lehrling</title>
</head>
<body>
  <h1>Registrierung Opbacher-Lehrling</h1>
  <p>Es gibt eine neue Nachricht! 🤗</p>
  <table>
  <tr>
  <th>KEY</th>
  <th>VALUE</th>
  </tr>
  $o
  </table>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'To: '.$to;
$headers[] = 'From: Birthday Reminder <birthday@example.com>';

if(mail($to, $subject, $message, implode("\r\n", $headers)))
{
    echo $message;
}

?>