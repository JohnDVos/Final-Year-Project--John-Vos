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
                                        <div class="info">
                                            <label id="label">Your personal info:</label>
                                        </div>
                                        <div class="name">
                                            <label>Your full name:</label>
                                        </div>
                                        <div class="name-form">
                                            <input type="text" id="contact" name="name" placeholder="full name" value="'.$_POST["full-name"].'">
                                        </div>
                                        <div class="email">
                                            <label>Your email address:</label>
                                        </div>
                                        <div class="email-form">
                                            <input type="text" id="contact" name="email" placeholder="email@address.com" value="'.$_POST["email"].'">
                                        </div>
                                        <div class="qualifications">
                                             <label id="label">Input all your qualifications here:</label><br>
                                        </div>
                                        <div class="qual-company">
                                            <label>Qualification company:</label>
                                        </div>
                                        <div class="qual-company-form">
                                            <input id="contact" name="company" placeholder="NASM" value="'.$_POST["company"].'"></input>
                                        </div>
                                        <div class="qual-name">
                                            <label>Qualification name:</label>
                                        </div>
                                        <div class="qual-form">
                                            <input id="contact" name="company" id="contact" placeholder="Level 3 Personal Training" value="'.$_POST["company"].'"></input>
                                        </div>
                                        <div class="insurance">
                                            <label id="label">Input your insurance information here:</label><br>
                                        </div>
                                        <div class="insurance-company">
                                            <label>Insurance company:</label>
                                        </div>
                                        <div class="insurance-company-form">
                                            <input id="contact" name="insuranceCompany" placeholder="Insure 4 sport" value="'.$_POST["insuranceCompany"].'"></input>
                                        </div>
                                        <div class="start-date">
                                            <label>Insurance Start Date:</label>
                                        </div>
                                        <div class="start-date-form">
                                            <input id="contact" name="insuranceStartDate" placeholder="YYYY-MM-DD" value="'.$_POST["insuranceStartDate"].'"></input>
                                        </div>
                                        <div class="end-date">
                                            <label>Insurance end date:</label>
                                        </div>
                                        <div class="end-date-form">
                                            <input id="contact" name="insuranceEndDate" placeholder="YYYY-MM-DD" value="'.$_POST["insuranceEndDate"].'"></input>
                                        </div>
                                        <div class="level-coverage">
                                            <label>Level of coverage:</label>
                                        </div>
                                        <div class="level-coverage-form">
                                             <input id="contact" name="coverage" placeholder="A" value="'.$_POST["coverage"].'"></input>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" id="button">submit info:</button>
                            </fieldset>
                        </form>
                        ';
                }
            ?>

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
                        <h4>Qualifications:</h4>
                    </header>
                    <ul>
                        <li>Level 3 Personal Training.</li>
                        <li>Level 2 Ketlle Bell Training.</li>
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
                        <li>Content package: £££</li>
                    </ul>
                    
                    <header>
                        <h4>Contact Information:</h4>
                    </header>
                    <p>email addres:</p>
                    <p>phone number:</p>
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
