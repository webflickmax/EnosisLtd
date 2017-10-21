<?php 
$action =$_GET['action'];
  if($action==1){
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['phone']; // not required
    $comments = $_POST['comments']; // required
    $contact_email = "d.shayantonee@gmail.com";
 
     
        //create mail message
	$header = "From: info@enosisltd.com\r\n";
	$header .= "Version: 1.0.1\r\n";
        $header .= "Content-type: text/html\r\n";
	$mailheaders = "Name :  $first_name $last_name<br />Email :  $email_from <br />Phone :  $telephone<br /> <br /> $comments";
	$mailheaders .= "<br /><br />Thank you<br />";
	
       //Email the request		
        $subject = "New Contact Sms From www.enosisltd.com";

       //Send Email to Admin contact
        mail($contact_email,$subject,$mailheaders,$header);
        header("Location:contact.html?action=1");

    }elseif($action==2){
    $first_name = $_POST['fullname']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    $contact_email = "d.shayantonee@gmail.com";
 
     
        //create mail message
	$header = "From: info@enosisltd.com\r\n";
	$header .= "Version: 1.0.1\r\n";
        $header .= "Content-type: text/html\r\n";
	$mailheaders = "Name :  $first_name<br />Email :  $email_from <br /> <br /> $comments";
	$mailheaders .= "<br /><br />Thank you<br />";
	
       //Email the request		
        $subject = "New Contact Sms From www.enosisltd.com";

       //Send Email to Admin contact
        mail($contact_email,$subject,$mailheaders,$header);
        header("Location:index.html?action=1");
}
?>