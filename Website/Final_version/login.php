<?php
    //code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.
    //requires header.php file, if changes need to be made to header can be done in one place. 
    require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
        <header>
            <h1>Login:</h1>
        </header>
            
            <div class="log-sign-button">
                <label class="radio-label" for="GeneralUser">Client User</label>
                    <input class="radio-input" type="radio" name="check" value="GeneralUser" id="clientCheck" onclick="javascript:clientPTCheck();">
                <label class="radio-label" for="PersonalTrainer">Personal Trainer</label>
                    <input class="radio-input" type="radio" name="check" value="PersonalTrainer" id="PersonalTrainerCheck" onclick="javascript:clientPTCheck();">
            </div>
                    
            <div id="clientLogIn" style="display:none">
                <header>
                    <h2 id="signupHeader">Client login:</h2>
                </header>        
                <form class="form-signup" action="includes/login.inc.client.php" method="post">
                    <input type="text" name="mailuid" placeholder="E-mail / Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit" id="signup-button">Login</button>
                </form>
            </div>
            
            <div id="PersonalTrainerLogIn" style="display:none">
                <header>
                    <h2 id="signupHeader">Personal Trainer login:</h2>
                </header>
                <form class="form-signup" action="includes/login.inc.PT.php" method="post">
                    <input type="text" name="mailuid" placeholder="E-mail / Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit" id="signup-button">Login</button>
                </form>
            </div>
          
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
