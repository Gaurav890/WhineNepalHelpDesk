<?php

// variable setting

$name = $_POST['Name'];
$companyname = $_POST['CompanyName'];
$employername = $_POST['EmployerName'];
$econtact = $_POST['EContactNo'];
$address = $_POST['Address'];
$contact = $_POST['ContactNo'];
$message = $_POST['comments'];
$paidinfo = $_POST['paidinfo'];

$msg="\nनाम: $name\nसम्पर्क नं: $contact \nउधोगको नाम: $companyname\nठेगाना:$address\nरोजगार दाताको नाम :$employername \nरोजगार दाताको सम्पर्क नं:$econtact \nतलब भत्ता पाउनु भयो ?: $paidinfo\nसमस्या: $message";

//check input fields

if (empty($name)|| empty($companyname) ||empty($address)|| empty($contact)|| empty($message) || empty($employername)|| empty($econtact)||empty($paidinfo)){
    echo "Please fill all the fields";

}
else{

    mail("anandthami76@gmail.com", "WHIN Nepal Inquiry" ,$msg);
    echo "<script type='text/javascript'> alert('Your Message Sent Succesfully');window.history.go(-1);</script>";
}
?>