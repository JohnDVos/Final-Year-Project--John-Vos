<?php
    
    require 'dbh.inc.php';
    session_start();
    

        //set up data to be user later.
        $clientID = $_SESSION['id'];
        $name = $_POST['name'];                                                 // Name from person sending email.
        $emailFrom = $_POST['email'];                                           // Who the email is from.
        $company = $_POST['company'];                                           //Company with which a PT completed their course.
        $qualifications = $_POST['qualifications'];                             // The qualifications the PT holds.
        $insuranceCompany = $_POST['insuranceCompany'];                         // Insurance company a PT is with.
        $insuranceStartDate = $_POST['insuranceStartDate'];                     // Start date of insurance.
        $insuranceEndDate = $_POST['insuranceEndDate'];                         // End date of insurance.
        $coverage = $_POST['coverage'];                                         // Level of coverage of the insurance.
        
        //format the email is sent as:
        $emailTo = "J.Vos1@uni.brighton.ac.uk";                                 // Which email address to send it to.
        $headers = "From: ". $emailFrom;                                        // In the header of the email, adds who the email is from.
        //structure of email content:
        $txt = "You have received an email from " .$name.                       // received email from + name inputed by user.
                ".\n client id = " .$clientID.                                  // \n adds a new line, + clients ID.
                ".\n company with which certification was complete = " .$company.
                ".\n qualifications = " .$qualifications.
                ".\n insurance company = " .$insuranceCompany.
                ".\n insurance start date = " .$insuranceStartDate.
                ".\n insurance end date = " .$insuranceEndDate.
                ".\n level of coverage = " .$coverage;
        
        mail($emailTo, $qualifications, $txt, $headers);
        header("Location: ../trainers.php?mailsent");
    