<?php
    $email="info@kitodiet.com";
    $sender="Kito Diet";


    if(isset($_POST['email']) || isset($_POST['Remail']) || isset($_POST['mob']))
    {		
    require "email/examples/smtp.php";

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////// SEND EMAIL TO US ///////////////////////////////////////////////////////////////////////////////////////
            if($_POST['id']!=0)
            {
	            $emailid=$_POST['email'];
	            //$subjectus='Request Call For Free Diet Plan';
	            if($_POST['title']==" ")
	            {
        	            $subjectus='Request Call For Free Diet Plan';
        	    }
        	    else
        	    {
        	            $subjectus="Request for ".$_POST['title']." blog";        	    
        	    }        

	            $usname=$_POST['name'];

	            $msgus="Name: ".$_POST['name']."<br>Mobile: ".$_POST['mob']."<br>Email: ".$_POST['email']." <br>Message: ".$_POST['msg']."<br><br><br><hr>";
            }
            else
            {
	            $emailid=$_POST['email'];
	            if($_POST['title']=="")
	            {
        	            $subjectus='Request for personlize diet plan ';
        	    }
        	    else
        	    {
        	            $subjectus="Request for ".$_POST['title'];        	    
        	    }        
	            $usname=$_POST['Rname'];

	            $msgus="Name: ".$_POST['Rname']."<br>Email: ".$_POST['Remail']."<br>Mobile: ".$_POST['Rmobile']."<br><br><br><hr>";    
            
            }	    
        $emailus="prasaderande.wai@gmail.com";
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///END SEND EMAIL TO US ///////////////////////////////////////////////////////////////////////////////////////

	
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /// SEND EMAIL TO CLIENT //////////////////////////////////////////////////////////////////////////////////////

	    $emailidclient="";
	    $subjectclient="";
	    $clientname="";
            $msgclient="";
            $state=0;

    if($_POST['id']==0)
    {
	    $emailidclient=$_POST['Remail'];
	    $subjectclient='Acknowledgement of your mail';
	    $clientname=$_POST['Rname'];
            $msgclient= "Dear ".$_POST['Rname'].",<br><br>

        Thank you for writing to us. <br/>
        This email is to confirm that your message has been received by us. <br>

        We will get back to you shortly.<br>
        <br>
        Best regards,<br><br>

        Your Faithfull<br>

        Kito Diet
        <br>
        <br><br><br><br><hr><hr>";
        $state=1;

    }    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///END SEND EMAIL TO CLIENT ///////////////////////////////////////////////////////////////////////////////////

    echo "OK";
   sendmail($emailus,'IWCA',ucfirst($subjectus),$msgus, $emailidclient,$clientname,ucfirst($subjectclient),$msgclient,$state,$email,$sender);
 }s	
?>
