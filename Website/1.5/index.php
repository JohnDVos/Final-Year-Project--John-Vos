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
            if (!isset($_SESSION['id'])) {
                echo '<p class="login-status"><b>You are currently logged out; create an account and log in to access your account.</b></p>';
            } else if (isset($_SESSION['id'])) {
                echo '
                    <p class="login-status"><b>You have succesfully logged in.</b></p>';
            }
        ?>
        
        <header>
            <h2>About this website:</h2>
        </header>
        <p>This website was designed for Personal Trainers (PT's) and people looking to get fit. On this website you can find <a href="nutrition.php">information on nutrition</a>, <a href="training.php">information on training</a> and <a href="trainers.php">personal trainers</a>.</p>
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
        
        
        <!-- can chose what content to show depending on if logged in or not. -->
        <?php
            if (isset($_SESSION['id'])) {
                echo '
                    <header>
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
                            <button type="submit" name="submit" id="button">submit info:</button>
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
                            <button type="submit" name="submit" id="button">submit info:</button>
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