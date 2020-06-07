<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    if (isset($_POST['login-submit'])) {                //check if user got to page by clicking log in button.

      /*
      * includes connection script to database.
      * mysqli connection is not closed as it is done automatically.
      * done to safe PHP & MySQL resources & improve overall performance.
      */
      require 'dbh.inc.php';

      //data passed from signup form to be used later.
      $mailuid = $_POST['mailuid'];
      $password = $_POST['pwd'];

      /*
      * error handling that could be made by user;
      * if run into any of these erros stops script & takes user back to log in screen with error.
      */
      if (empty($mailuid) || empty($password)) {                                                        //check for empty inputs.
        header("Location: ../index.php?error=emptyfields&mailuid=".$mailuid);
        exit();
      } else {                                                                                          //else (i.e. no errors from user);
            /*
            * get password from user in database that has same username as one typed in.
            * de-hash & check if matches.
            */
            $sql = "SELECT * FROM personalTrainer WHERE username=? OR email=?;";                                                      //connect to database using prepared statements, sends SQl to database first, then fills in placeholders.
            $stmt = mysqli_stmt_init($conn);                                                            //initialise new statmenet using connection from dbh.inc.php.

            if (!mysqli_stmt_prepare($stmt, $sql)) {                                                    //prepares SQL statement & check for any errors.
                header("Location: ../index.php?error=sqlerror");
                exit();
            } else {                                                                                    //if no error;
                mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);                                //bind type of param expected to pass into statement & binds data from user.
				mysqli_stmt_execute($stmt);                                                             //execute prepared statement & send to database.
				$result = mysqli_stmt_get_result($stmt);                                                //get result from statement.

                if ($row = mysqli_fetch_assoc($result)) {                                               //store results into variable.
                    $pwdCheck = password_verify($password, $row['password']);                           //match password from database with password from user, result returned as boolean.
                    if ($pwdCheck == false) {                                                           //if they don't match, error message.
                      header("Location: ../index.php?error=wrongpwd");                                  //sends user back to log in page.
                      exit();
                    } else if ($pwdCheck == true) {
                        /* creates session variables based on user info from database.
                        * if variables exist, website will know user is logged in.
                        * store database data in session variables that are variable types that can be used on all pages in session.
                        * therefore, session must be started here to create these variables.
                        */
                        session_start();
                        $_SESSION['PTid'] = $row['personalTrainerID'];                                    //session variable.
                        $_SESSION['uid'] = $row['username'];                                            //session variable.
                        $_SESSION['email'] = $row['email'];                                             //session variable.
                        
                        header("Location: ../index.php?login=success");                                 //user logged in so return to log in page.
                        exit();
                    }
              } else {
                    header("Location: ../index.php?login=wronguidpwd");
                    exit();
                } 
            }
          } 
        mysqli_stmt_close($stmt);                                                                       //close the prepared statement and the database connection. 
        mysqli_close($conn);
        } else {                                                                                        //if user tries to access page in an inproper way, sent back to sign up page.
            header("Location: ../signup.php");
            exit();
        }
