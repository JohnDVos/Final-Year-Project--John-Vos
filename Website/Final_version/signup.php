<?php
    //code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.
    //requires header.php file, if changes need to be made to header can be done in one place. 
    require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
            <header>
                <h1>Signup</h1>
            </header>
          
          <?php
          //create error messages relevant to error for when user signs up.
          if (isset($_GET["error"])) {                                              //if any field is left empty.  
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {                          //if email or uid (userID) and email are invalid.
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {                              //if the uid (userID) is invalid.
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {                             //if email is invalid.
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {                           //if passwords do not match.
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {                               //if username is already taken.
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          } else if (isset($_GET["signup"])) {                                        //if all of the above is correct, success message, user signed up.
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>

             <div class="log-sign-button">
                <label class="radio-label" for="GeneralUser">Client User</label>
                    <input class="radio-input" type="radio" name="check" value="GeneralUser" id="clientCheck" onclick="javascript:clientPTCheck();">
                <label class="radio-label" for="PersonalTrainer">Personal Trainer</label>
                    <input class="radio-input" type="radio" name="check" value="PersonalTrainer" id="PersonalTrainerCheck" onclick="javascript:clientPTCheck();">
            </div>
            
            <div id="clientLogIn" style="display:none">
                <header>
                    <h2 id="signupHeader">Client signup:</h2>
                </header>
                <form class="form-signup" action="includes/signup.inc.client.php" method="post">
                <?php
                    /*
                    *checks if the user already tried submitting data.
                    *checks username.
                    *checks email.
                    */
                    if (!empty($_GET["uid"])) {
                      echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
                    }
                    else {
                      echo '<input type="text" name="uid" placeholder="Username">';
                    }
    
                    // check e-mail.
                    if (!empty($_GET["mail"])) {
                      echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
                    }
                    else {
                      echo '<input type="text" name="mail" placeholder="E-mail">';
                    }
                ?>
                  
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                    <button type="submit" name="signup-submit" id="signup-button">Signup</button>
                </form>
            </div>
            
            <div id="PersonalTrainerLogIn" style="display:none">
                <header>
                    <h2 id="signupHeader">Personal Trainer signup:</h2>
                </header>
                <form class="form-signup" action="includes/signup.inc.PT.php" method="post">
                <?php
                    /*
                    *checks if the user already tried submitting data.
                    *checks username.
                    *checks email.
                    */
                    if (!empty($_GET["uid"])) {
                      echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
                    }
                    else {
                      echo '<input type="text" name="uid" placeholder="Username">';
                    }
    
                    // check e-mail.
                    if (!empty($_GET["mail"])) {
                      echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
                    }
                    else {
                      echo '<input type="text" name="mail" placeholder="E-mail">';
                    }
                ?>
                  
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                    <button type="submit" name="signup-submit" id="signup-button">Signup</button>
                </form>
            </div>

          
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
