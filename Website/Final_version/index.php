<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    /*
    *to ensure 1 header for multiple pages, creates header HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "header.php" 
?>

<!-- HTML -->
<main>
    <div class="wrapper-main">
        <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
        <header>
            <h1>Welcome to the home page:</h1>
        </header>
        
        <?php
            if (!isset($_SESSION['uid'])) {
                echo '
                        <p class="login-status"><b>You are currently logged out; create an account and log in to access your account.</b></p>
                        
                        <header>
                            <h2>About this website:</h2>
                        </header>
                        <p>This website was designed for Personal Trainers (PT\'s) and people looking to get fit. On this website you can find <a href="nutrition.php">information on nutrition</a>, <a href="training.php">information on training</a> and <a href="trainers.php">personal trainers</a>.</p>
                        <p>Upon creating an account and logging in, you will be able to access your personal profile on the home page where you will be able to acess, upload and edit any information about you.</p>
                        <p>*Do note uploading any of this information is up to you and can only be accessed by yourself or a personal trainer if you have one. If at any point you are unsure about the use of your data or how it is handled please consult the <a href="GDPR.php">GDPR section:</a>*</p>
        
                        <header>
                            <h3>Clients:</h3>
                        </header>
                        <p>As a client you will be able to:</p>
                            <ol type="1">
                                <li>upload your weight, any notes and feedback and your goal to keep track of your weekly / monthly / yearly progress.</li>
                                <li>upload your personal information, such as, mobile number and country of current residance.</li>
                                <li>access this information to keep track of progress.</li>
                                <li>book sessions with a personal trainer.</li>
                            </ol>
                        
                        <header>
                            <h3>Personal Trainers:</h3>
                        </header>
                        <p>As a personal trainer you will be able to:</p>
                            <ol type="1">
                                <li>upload training and nutritional programs.</li>
                                <li>have a personal profile on the personal trainers section to advertise yourself.</li>
                                <li>manage clients and bookings (book or receive bookings)</li>
                            </ol>
                    ';
            } else {
                echo '<p class="login-status"><b>You have succesfully logged in.</b></p>';
            }
        ?>
        
        <!-- can chose what content to show depending on if logged in or not. -->
        <?php
            if (isset($_SESSION['cid'])) {
                echo '
                    <header>
                        <h2>Your personal page</h2>
                    </header>
                    <p>Here you will be able to update your weekly progress information and update your personal information (if you so desire), this information can only be accessed by you and a personal trainer (if you have one). <br> For a further breakdown please refer to the
                    <a href="GDPR.php">GDPR section.</a></p>
                    
                    <header>
                        <h3>Your personal information</h3>
                    </header>
                     <table>
                        <tr>
                            <td>Personal Trainer ID</td>
                            <td>'.$_SESSION['PTid'].'</td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td>'.$_SESSION['uid'].'</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>'.$_SESSION['email'].'</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>'.$_SESSION['gender'].'</td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td>'.$_SESSION['phone'].'</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>'.$_SESSION['country'].'</td>
                        </tr>
                        <tr>
                            <td>Health problems</td>
                            <td>'.$_SESSION['health'].'</td>
                        </tr>
                        <tr>
                            <td>Height</td>
                            <td>'.$_SESSION['height'].'</td>
                        </tr>
                        <tr>
                            <td>Date of birth</td>
                            <td>'.$_SESSION['dateOfBirth'].'</td>
                        </tr>
                    </table>
                </div>
                
                <div class="wrapper-main">
                    <header>
                        <h2>Updating your information:</h2>
                        <h3>Your weekly progress info:</h3>
                    </header>
                    <!-- form for clients to insert their data. -->
                    <form action="includes/clientProgressInfo.php" method="post">
                        <fieldset>
                            <legend>Input your current weight & any notes here:</legend>
                            <div class="grid-weekly">
                                <div class="weight">
                                    <label>Your current weight (in kg):</label>
                                </div>
                                <div class="weight-form">
                                    <input type="text" id="contact" name="weight"  placeholder="e.g. 80.5" value="'.$_POST["weight"].'">
                                </div>
                                <div class="notes">
                                    <label>Notes / Feedback:</label>
                                </div>
                                <div class="notes-form">
                                    <input type="text" id="contact" name="notes" placeholder="program feedback notes" value="'.$_POST["notes"].'">
                                </div>
                                <div class="goal">
                                    <label>Your goal:</label>
                                </div>
                                <div class="goal-form">
                                    <input type="text" id="contact" name="goal" placeholder="e.g. weight loss" value="'.$_POST["goal"].'">
                                </div>
                            </div>
                            <button type="submit" name="submit" id="button">submit info</button>
                        </fieldset>                   
                    </form>
                ';
                
                if(isset($_GET['records'])) {
                    $records = $_GET['records'];
                    if($records == 'Updated') {
                        echo '<p id="message">Your records have been updated</p>';
                    } else if($records == 'Error') {
                        echo '<p id="message">Your records were not updated</p>';
                    }
                }

                echo '  
                    <header>
                        <h3>Your personal info:</h3>
                    </header>
                    
                    <form action="includes/clientUpdateInfo.php" method="post">
                        <fieldset>
                            <legend>Input your data here:</legend>
                            <div class="grid-client">
                                <div class="gender">
                                    <label>Your gender:</label>
                                </div>
                                <div class="gender-form">
                                    <input type="text" id="contact" name="gender" placeholder="e.g. m for male, f for female, u for unidentified" value="'.$_POST["gender"].'">
                                </div>
                                <div class="phone-numb">
                                    <label>Your phone number:</label>
                                </div>
                                <div class="phone-numb-form">
                                    <input type="text" id="contact" name="phoneNumb" placeholder="e.g. 00 33 1234 567890" value="'.$_POST["clientPhoneNumb"].'">
                                </div>
                                <div class="country">
                                    <label>Your country of residence:</label>
                                </div>
                                <div class="country-form">
                                    <input type="text" id="contact" name="country" placeholder="e.g. United States" value="'.$_POST["country"].'">
                                </div>
                                <div class="health">
                                    <label>Any health problems you may have:</label>
                                </div>
                                <div class="health-form">
                                    <input type="text" id="contact" name="healthProblem" placeholder="e.g. recently had knee surgery" value="'.$_POST["healthProblem"].'">
                                </div>
                                <div class="height">
                                    <label>Your height (in cm):</label>
                                </div>
                                <div class="height-form">
                                    <input type="text" id="contact" name="height" placeholder="e.g. 200" value="'.$_POST["height"].'">
                                </div>
                                <div class="DoB">
                                    <label>Your date of birth:</label>
                                </div>
                                <div class="DoB-form">
                                    <input type="text" id="contact" name="dateOfBirth" placeholder="YYYY-MM-DD" value="'.$_POST["dateOfBirth"].'">
                                </div>
                            </div>
                            <button type="submit" name="submit" id="button">submit info</button>
                        </fieldset>
                    </form>
                    
                </div>
                <div class="wrapper-main">
                    <header>
                        <h2>Personal Trainer section:</h2>
                    </header>
                    <p>If you have a personal trainer their information and any programs they give you will be visible here:</p>
                    
                    <header>
                        <h3>Adding a personal trainer:</h3>
                    </header>
                    <p>If you want to add a personal trainer please fill in this form</p>
                    
                    <form action="includes/clientToPT.php" method=post>
                        <fieldset>
                            <legend>Adding a PT</legend>
                                <label>PT username</label>
                                <input type="text" name="PTusername" placeholder="PT username" value="'.$_POST["PTusername"].'">
                                <button type="submit" name="submit" id="button">Add PT</button>
                        </fieldset>
                    </form>
                ';
                
                if(isset($_GET['status'])) {
                    $status = $_GET['status'];
                    if($status == 'updated') {
                        echo '<p id="message">Your records have been updated</p>';
                    } else if($status == 'error') {
                        echo '<p id="message">Your records were not updated</p>';
                    }
                }
            }
        ?>
        
        
        <?php
            if (isset($_SESSION['PTid'])) {
                echo '
                    <header>
                        <h2>Your personal page</h2>
                    </header>
                    <p>If your information does not display below that is because your account has not yet been verified, you will either need to fill in the form below or wait for a reply from an admin if you have already filled in the form. <br> For a further breakdown please refer to the
                    <a href="GDPR.php">GDPR section.</a></p>
                    
                        <table class="infoTable">
                        <tr>
                            <td rowspan="3" class="row">Personal Information:</td>
                            <td>Username:</td>
                            <td>'.$_SESSION['uid'].'</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>'.$_SESSION['email'].'</td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td>'.$_SESSION['phoneNumber'].'</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="row">Qualification Information:</td>
                            <td>Qualification title</td>
                            <td>'.$_SESSION['qualificationTitle'].'</td>
                        </tr>
                        <tr>
                            <td>Qualification level</td>
                            <td>'.$_SESSION['qualificationLevel'].'</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="row">Insurance:</td>
                            <td>Insurance company</td>
                            <td>'.$_SESSION['insuranceCompany'].'</td>
                        </tr>
                        <tr>
                            <td>Insurance start date</td>
                            <td>'.$_SESSION['insuranceStartDate'].'</td>
                        </tr>
                        <tr>
                            <td>Insurance end date</td>
                            <td>'.$_SESSION['insuranceEndDate'].'</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="row">Pricing:</td>
                            <td>Pricing per hour</td>
                            <td>'.$_SESSION['pricingHour'].'</td>
                        </tr>
                        <tr>
                            <td>Pricing for 5 sessions</td>
                            <td>'.$_SESSION['pricingPack5'].'</td>
                        </tr>
                        <tr>
                            <td>Pricing for 10 sessions</td>
                            <td>'.$_SESSION['pricingPack10'].'</td>
                        </tr>
                        <tr>
                            <td>Pricing for 20 sessions</td>
                            <td>'.$_SESSION['pricingPack20'].'</td>
                        </tr>
                        <tr>
                            <td>Pricing for contest prep</td>
                            <td>'.$_SESSION['pricingContest'] .'</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="row">Training styles:</td>
                            <td>Primary training style</td>
                            <td>'.$_SESSION['trainingStylePrimary'].'</td>
                        </tr>
                        <tr>
                            <td>Secondary training style</td>
                            <td>'.$_SESSION['trainingStyleSecondary'].'</td>
                        </tr>
                        <tr>
                            <td>Tertiary training style</td>
                            <td>'.$_SESSION['trainingStyleTertiary'].'</td>
                        </tr>
                    </table>
                </div>
                
                <div class="wrapper-main">
                    <header>
                        <h2>Clients</h2>
                    </header>
                    <p>Any clients you have will be displayed below:</p>
                    '.$row['clientID'].'
                    '.$row['username'].'
                </div>
                
                <div class="wrapper-main">
                    <header>
                        <h2>Booking a session:</h2>
                    </header>
                    <p>To book a session with a client simply fill in the form below:</p>
                    
                    <form action="includes/personalTrainerBooking.php" method="post">
                        <fieldset>
                            <legend>Input your current weight & any notes here:</legend>
                            <p>
                                <label>Input clientID here:<label>
                                <input type="text" id="clientID" name="clientID"  placeholder="1" value="'.$_POST["clientID"].'">
                            </p> 
                            <p>
                                <label>Input start date here:<label>
                                <input type="text" id="startDate" name="startDate"  placeholder="2020-01-01" value="'.$_POST["startDate"].'">
                            </p>
                            <p>
                                <label>Input end date here:<label>
                                <input type="text" id="endDate" name="endDate"  placeholder="2020-01-01" value="'.$_POST["endDate"].'">
                            </p>
                            <p>
                                <label>Input start time here:<label>
                                <input type="text" id="startTime" name="startTime"  placeholder="10:15:00" value="'.$_POST["startTime"].'">
                            </p>
                            <p>
                                <label>Input end time here:<label>
                                <input type="text" id="endTime" name="endTime"  placeholder="11:15:00" value="'.$_POST["endTime"].'">
                            </p> 
                                
                            <button type="submit" name="submit" id="button">submit info</button>
                        </fieldset>                   
                    </form>
                </div> ';
                
                if(isset($_GET['status'])) {
                    $status = $_GET['status'];
                    if($status == 'bookingSuccess') {
                        echo '<p id="message">booking succesfully made</p>';
                    } else if($status == 'bookingError') {
                        echo '<p id="message">booking was not made</p>';
                    }
                }
                
                echo '
                <div class="wrapper-main">
                    <header>
                        <h2>Contact form:</h2>
                    </header>
                    <p>As mentioned in the personal training page, if you desire to register for a personal trainer profile you will need to fill in the form below. Upon completion an admin will contact you within 10 working days.</p>
                
                    <form action="includes/contactForm.php" method="post">
                        <fieldset>
                            <legend>Contact form:</legend>
                            <div class="grid-contact">
                                <div class="personal-info">
                                    <label id="label">Your personal info:</label>
                                </div>
                                    <div class="name">
                                        <label>Full name:</label>
                                    </div>
                                    <div class="name-form">
                                        <input type="text" id="contact" name="name" placeholder="full name" value="'.$_POST["name"].'">
                                    </div>
                                    <div class="email">
                                        <label>Email address:</label>
                                    </div>
                                    <div class="email-form">
                                         <input type="text" id="contact" name="email" placeholder="email@address.com" value="'.$_POST["email"].'">
                                    </div>
                                    <div class="phone">
                                        <label>Phone number:</label>
                                    </div>
                                    <div class="phone-form">
                                        <input type="text" id="contact" name="phone" placeholder="00 44 1234 567891" value="'.$_POST["phone"].'">
                                    </div>
                                <div class="qualifications">
                                    <label id="label">Input all your qualifications here:</label>
                                </div>
                                    <div class="qual-company">
                                        <label>Qualification Company</label>
                                    </div>
                                    <div class="qual-company-form">
                                        <input type="text" id="contact" name="qualCompany" placeholder="NASM" value="'.$_POST["qualCompany"].'">
                                    </div>
                                    <div class="qual-title">
                                         <label>Qualification name:</label>
                                    </div>
                                    <div class="qual-title-form">
                                        <input type="text" id="contact" name="company" placeholder="Level 3 Personal Training" value="'.$_POST["qualifications"].'">
                                    </div>
                                <div class="insurance">
                                    <label id="label">Insurance Information:</label>
                                </div>
                                    <div class="company">
                                        <label>Insurance company:</label>
                                    </div>
                                    <div class="company-form">
                                        <input type="text" id="contact" name="insurance" placeholder="Insure4Sports" value="'.$_POST["insuranceCompany"].'">
                                    </div>
                                    <div class="start-date">
                                        <label>Start date:</label>
                                    </div>
                                    <div class="start-date-form">
                                        <input type="text" id="contact" name="startDate" placeholder="2020-01-01" value="'.$_POST["startDate"].'">
                                    </div>
                                    <div class="end-date">
                                        <label>End date</label>
                                    </div>
                                    <div class="end-date-form">
                                        <input type="text" id="contact" name="endDate" placeholder="2021-01-01" value="'.$_POST["endDate"].'">
                                    </div>
                                    <div class="level">
                                         <label>Level of cover</label>
                                    </div>
                                    <div class="level-form">
                                        <input type="text" id="contact" name="coverLevel" placeholder="A" value="'.$_POST["coverLevel"].'">
                                    </div>
                                <div class="pricing">
                                    <label id="label">Pricing Information:</label>
                                </div>
                                    <div class="pricing-hour">
                                        <label>Price per hour</label>
                                    </div>
                                    <div class="pricing-hour-form">
                                        <input type="text" id="contact" name="pricing1" placeholder="£££" value="'.$_POST["pricingHour"].'"></input>
                                    </div>
                                    <div class="pricing-5">
                                        <label>Price for 5 sessions</label>
                                    </div>
                                    <div class="pricing-5-form">
                                        <input type="text" id="contact" name="pricing5" placeholder="£££" value="'.$_POST["pricing5"].'">
                                    </div>
                                    <div class="pricing-10">
                                        <label>Price for 10 sessions</label>
                                    </div>
                                    <div class="pricing-10-form">
                                        <input type="text" id="contact" name="pricing10" placeholder="£££" value="'.$_POST["pricing10"].'">
                                    </div>
                                    <div class="pricing-20">
                                        <label>Price for 20 sessions</label>
                                    </div>
                                    <div class="pricing-20-form">
                                        <input type="text" id="contact" name="pricing20" placeholder="£££" value="'.$_POST["pricing20"].'">
                                    </div>
                                    <div class="pricing-contest">
                                        <label>Price for contest prep</label>
                                    </div>
                                    <div class="pricing-contest-form">
                                        <input type="text" id="contact" name="contest" placeholder="£££" value="'.$_POST["pricingContest"].'">
                                    </div>
                                <div class="training">
                                    <label id="label">Training Style:</label>
                                </div>
                                    <div class="training-primary">
                                        <label>Primary training style</label>
                                    </div>
                                    <div class="training-primary-form">
                                        <input type="text" id="contact" name="primaryStyle" placeholder="Bodydbuilding" value="'.$_POST["primaryStyle"].'">
                                    </div>
                                    <div class="training-secondary">
                                        <label>Secondary training style</label>
                                    </div>
                                    <div class="training-secondary-form">
                                        <input type="text" id="contact" name="secondaryStyle" placeholder="Weight loss" value="'.$_POST["secondaryStyle"].'">
                                    </div>
                                    <div class="training-tertiary">
                                        <label>Tertiary training style</label>
                                    </div>
                                    <div class="training-tertiary-form">
                                        <input type="text" id="contact" name="tertiaryStyle" placeholder="Strength" value="'.$_POST["tertiaryStyle"].'">
                                    </div>
                            </div>
                            <button type="submit" name="submit" id="button">submit info:</button>
                        </fieldset>
                    </form>
                ';
                    if(isset($_GET['mailsent'])) {
                            $mailsent = $_GET['mailsent'];
                            if($mailsent == 'success') {
                                echo '<p id="message">Email sent</p>';
                            }
                    }
                }
            ?>
    </div>
</main>


<!-- PHP -->
<?php
    /*
    *to ensure 1 footer for multiple pages, creates footer HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "footer.php";
?>