<?php
    
    require 'dbh.inc.php';
    session_start();
    

        //set up data to be user later.
        //user info:
        $ptID = $_SESSION['PTid'];                                              // PT ID tkane from logged in session.
        $name = $_POST['name'];                                                 // Name from person sending email.
        $email = $_POST['email'];                                               // Who the email is from.
        $phoneNumb = $_POST['phone'];                                           // Applicants phone number.
        
        //qualification info:
        $qualCompany = $_POST['qualCompany'];                                   // Company with which a PT completed their course.
        $qualification = $_POST['qualifications'];                             // The qualifications the PT holds.
        
        //insurance info:
        $insuranceCompany = $_POST['insuranceCompany'];                         // Insurance company a PT is with.
        $insuranceStartDate = $_POST['startDate'];                              // Start date of insurance.
        $insuranceEndDate = $_POST['endDate'];                                  // End date of insurance.
        $coverage = $_POST['coverLevel'];                                       // Level of coverage of the insurance.
        
        //pricing info:
        $pricingHour = $_POST['pricingHour'];                                   // Amount PT chargers per hour session.
        $pricing5 = $_POST['pricing5'];                                         // Amount PT chargers for 5 sessions.
        $pricing10 = $_POST['pricing10'];                                       // Amount PT chargers for 10 sessions.
        $pricing20 = $_POST['pricing20'];                                       // Amount PT chargers for 20 sessions.
        $pricingContent = $_POST['pricingContest'];                             // Amount PT chargers for contest prep.
        
        //training info:
        $primaryStyle = $_POST['primaryStyle'];                                 // The PT's prefered training style.
        $secondaryStyle = $_POST['secondaryStyle'];                             // The PT's secondary training style.
        $tertiaryStyle = $_POST['tertiaryStyle'];                               // The PT's tertiary training style.
        
        //format the email is sent as:
        $emailTo = "J.Vos1@uni.brighton.ac.uk";                                 // Which email address to send it to.
        $headers = "From: ". $emailFrom;                                        // In the header of the email, adds who the email is from.
        //structure of email content:                                           // \n adds a new line, + clients ID.
        $txt = "You have received an email from " .$name.                       // received email from + name inputed by user.
                ".\n Personal Trainer info:".
                ".\n trainer id = " .$ptID.                                  
                ".\n PT name = " .$name.
                ".\n email address = " .$email.
                ".\n phone number = " .$phoneNumb.
                
                ".\n\n Certification information:".
                ".\n qualification company = " .$qualCompany.
                ".\n qualifications = " .$qualification.
                
                ".\n\n Insurance information:".
                ".\n insurance company = " .$insuranceCompany.
                ".\n insurance start date = " .$insuranceStartDate.
                ".\n insurance end date = " .$insuranceEndDate.
                ".\n level of coverage = " .$coverage.
                
                ".\n\n Pricing information:".
                ".\n pricing per hour = " .$pricingHour.
                ".\n pricing for 5 sessions = " .$pricing5.
                ".\n pricing for 10 sessions = " .$pricing10.
                ".\n pricing for 20 sessions = " .$pricing20.
                ".\n pricing for contest prep = " .$pricingContest.
                
                ".\n\n Training information:".
                ".\n primary training style = " .$primaryStyle.
                ".\n secondary training style = " .$secondaryStyle.
                ".\n tertiary training style = " .$tertiaryStyle;
        
        mail($emailTo, $headers, $txt);
        header("Location: ../index.php?mailsent=success");
    