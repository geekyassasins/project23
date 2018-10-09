<?php
    $email="info@kitodiet.com";
    $sender="Kito Diet";

    if(isset($_POST['email']))
    {		
    require "email/examples/smtp.php";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////// SEND EMAIL TO US ///////////////////////////////////////////////////////////////////////////////////////

	    $emailid=$_POST['email'];
	    $subjectus='Enquri From Website ';
	    $usname=$_POST['name'];

	    $msgus="Company Name: ".$_POST['cname']."<br>Name: ".$_POST['name']."<br>Email: ".$_POST['email']."<br>Mobile: ".$_POST['mob']."<br>Subject: ".$_POST['sub']."<br>Enquiry: ".$_POST['message']."<br><br><br><hr>";
	    //$email='sales@accuintelmarketresearch.com';//$_POST[''];
        $emailus="prasaderande.wai@gmail.com";
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///END SEND EMAIL TO US ///////////////////////////////////////////////////////////////////////////////////////

	
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// SEND EMAIL TO CLIENT //////////////////////////////////////////////////////////////////////////////////////
	    $emailidclient=$_POST['email'];
	    $subjectclient='Acknowledgement of your mail';

	    $clientname=$_POST['name'];

        $msgclient= "Dear ".$_POST['name'].",<br><br>

        Thank you for writing to us. <br/>
        This email is to confirm that your message has been received by us. <br>

        We will get back to you shortly.<br>
        <br>
        Best regards,<br><br>

        Your Faithfull<br>

        Kito Diet
        <br>
        <br><br><br><br><hr><hr>";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///END SEND EMAIL TO CLIENT ///////////////////////////////////////////////////////////////////////////////////

    echo "OK";
    $state=1;
   sendmail($emailus,'IWCA',ucfirst($subjectus),$msgus, $emailidclient,$clientname,ucfirst($subjectclient),$msgclient,$state,$email,$sender);
 }s	
?>
