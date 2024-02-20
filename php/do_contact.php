<?php
    if( isset($_POST["fn"]) && isset($_POST["ln"]) && isset($_POST["e"]) && isset($_POST["s"]) && isset($_POST["m"]))
    {
        $fn = $_POST['fn']; //Aswad // HINT: use preg_replace() to filter the data
        $ln = $_POST['ln']; // Ali
        $n= $fn." ".$ln; // e.g. Aswad Ali
        $e = $_POST['e'];
        $s = $_POST['s'];
        $m = nl2br($_POST['m']);
        $to = "aswadali310@gmail.com";	
        $from = $e;
        $subject = $s;
        $message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
        $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";

        if(mail($to, $subject, $message, $headers) )
        {
            echo "<div style='color: green;'>Success</div>" ;
        } 
        else 
        {
            echo "<div style='color: red;'>The server failed to send the message. Please try again later.</div>" ;
        }
    }
?>