<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$checkin=$_POST['check-in'];
	$checkout=$_POST['check-out'];
	$hostname=$_POST['hostname'];
	$address=$_POST['address'];

    $to='danuraj18042017@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."check-in: ".$checkin."\n"."check-out: ".$checkout."\n"."Hostname: ".$hostname."\n"."Address: ".$address."\n".;
    $headers="Form: ".$email;

    if(mail($to, $subject, $message, $hearders)){
    	echo "<h1>Sent Successfully!";
    }
    else{
    	echo "Something went wrong.";
    }

}
?>