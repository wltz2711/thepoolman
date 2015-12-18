<?php
    if (isset($_POST['send'])) {
    $to = 'sales.thepoolman@gmail.com';
    $subject = 'Queries for the poolman';
    $message ='Name: ' . $POST_['name'] . "\r\n\r\n";
    $message .= 'Comments: ' . $_POST['comment'];
    




}
?>

<h1>Thank You</h1>
<p>Your message has been sent.</p>
<h1>Oops!</h1>
<p>Sorry, there was a problem sending your message.</p>