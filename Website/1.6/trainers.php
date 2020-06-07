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
            
            <p>Due to the nature of personal training and it not being a protected title, anyone and everyone could technically call themself a PT. As a result, if you wish to have a profile and client base on this website you will need to register under a PT account and log in. Once you have logged in on your home page you will see a form where you can input all your information. Once you have filled the form in the information will be sent to an admin who will contact you within 10 working days for photographic proof of the records.  Upon receiving this second email the admin will contact you to inform you if your application has been succesful.</p>

        <div class="wrapper-main">
            <header>
                <h2>Personal Trainer Profiles</h2>
            </header>
            <div class="grid-profile">
                <div class="PT-name">
                    <h3>PT NAME:</h3>
                </div>
                <div class="PT-photo">
                    <img src="images/pt-icon.jpg" alt="PT-1" class="PT1-profile-photo">
                </div>
                <div class="PT-info">
                    <header>
                        <h4>Information:</h4>
                    </header>
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
            
            <header>
                <h2>Personal Trainer Profiles</h2>
            </header>
            <div class="grid-profile">
                <div class="PT-name">
                    <h3>John Vos:</h3>
                </div>
                <div class="PT-photo">
                    <img src="images/JohnPT.png" alt="John-img" class="John-profile-photo">
                </div>
                <div class="PT-info">
                    <header>
                        <h4>Information:</h4>
                    </header>
                    <p>PT Full Name</p>
                    <p>email addres: J.Vos1@uni.brighton.ac.uk</p>
                    <p>phone number: 00 44 1234 567890</p>
                    
                    <header>
                        <h4>Qualifications:</h4>
                    </header>
                    <ul>
                        <li>AIQ Level 3 Sports Massage Therapy.</li>
                        <li>AIQ Level 3 Diploma in Fitness Instructing and Personal Training.</li>
                        <li>AIQ Level 2 Diploma in Fitness Instructing.</li>
                        <li>AIQLevel 2 Kettlebell training.</li>
                        <li>AIQ Level 2 circuit training.</li>
                        <li>AIQ Level 2 Working with Communities to Promote and Support Active Healthy Lifestyles.</li>
                        <li>AIQLevel 2 Emergency First Aid at work</li>
                        <li>AIQ Level 3 Sales and Business Skills</li>
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
