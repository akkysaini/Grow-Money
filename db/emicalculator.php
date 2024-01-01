<?php 
    $message = '';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
    $message .= "Dear Admin,<br><br>Sombody has filled the contact form!<br><p>Name: ".$_POST['fname']."</p><p>Income: ".$_POST['income']."</p><p>Other Income: ".$_POST['otherIncome']."</p><p>Type of Loan: ".$_POST['floatingSelect']."</p><p>Any Running Loan or EMI: ".$_POST['inlineRadioOptions']."</p><p>Cibil: ".$_POST['cibil']."</p><p>Message: ".$_POST['message']."</p><br>";
    $message .= '<br>Thanks & Regards<br>Grow Money Capital';
    $subject = 'EMI CALCULATOR Enquiry';
    $to='info@growmoneycapital.com';
    
?>