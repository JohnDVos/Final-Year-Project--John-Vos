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
                <h1>Personal Trainers:</h1>
                <h2>How to get a Personal Trainer Profile:</h2>
            </header>
            
            <p>Due to the nature of personal training and it not being a protected title, anyone and everyone could technically call themself a PT. As a result, if you wish to have a profile and client base on this website you will have to meet the following criteria:</p>
            <ul>
                <li>All relevant qualifications:</li>
                <ul>
                    <li>Level of the qualification.</li>
                    <li>Title of the qualification.</li>
                    <li>Company with which it was completed.</li>
                </ul>
                <li>Current valid insurance:</li>
                <ul>
                    <li>Insurance company.</li>
                    <li>Insurance start date.</li>
                    <li>Insurance end date.</li>
                    <li>Level of coverage.</li>
                </ul>
            </ul>
            <p>If you meet the above mentioned criteria and are interested in applying to become a PT, please create an account, sign in and fill in the form below. Please allow up to 10 working days for a reply.</p>
            
            <header>
                <h2>Contact form:</h2>
            </header>
            <?php
                if(!isset($_SESSION['id'])) {
                    echo '<p>To submit the form needed to register as a PT please create an account and sign in.</p>';
                } else if (isset($_SESSION['id'])) {
                    echo '
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
        
        <div class="wrapper-main">
            <header>
                <h2>Personal Trainer Profiles</h2>
            </header>
            <div class="grid-profile">
                <div class="PT-name">
                    <h3>PT NAME:</h3>
                </div>
                <div class="PT-photo">
                    <img src="images/pt-icon.jpg" alt="PT-icon" class="profile-photo">
                </div>
                <div class="PT-info">
                    <header>
                        <h4>Information:</h4>
                    </header>
                    <p>PT Full Name</p>
                    <p>email addres: PTemail@email.com</p>
                    <p>phone number: 00 44 1234 567890</p>
                    
                    <header>
                        <h4>Qualifications:</h4>
                    </header>
                    <ul>
                        <li>NASM Level 3 Personal Training.</li>
                        <li>NSAM Level 2 Ketlle Bell Training.</li>
                    </ul>
                    
                    <header>
                        <h4>Training Style:</h4>
                    </header>
                    <ul>
                        <li>Bodybuilding.</li>
                        <li>Contest prep.</li>
                        <li>Weight loss.</li>
                    </ul>
                    
                    <header>
                        <h4>Pricing:</h4>
                    </header>
                    <ul>
                        <li>1 hour session : £££</li>
                        <li>Pack of 5 sessions: £££</li>
                        <li>Pack of 10 sessions: £££</li>
                        <li>Pack of 20 sessions: £££</li>
                        <li>Contest package: £££</li>
                    </ul>
                </div>
            </div>
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
