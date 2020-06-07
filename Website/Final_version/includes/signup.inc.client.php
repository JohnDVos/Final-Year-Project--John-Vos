<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    if (isset($_POST['signup-submit'])) {               //check if user got to page by signing up properly.
        require 'dbh.inc.php';                            //include connection script.
        
        ///set up data to be user later.
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['pwd-repeat'];
        
        //error handling to catch errors made by user.
        if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {                               //check for any empty inputs.
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
            exit();
          } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {            //check for an invalid username & invalid e-mail.
            header("Location: ../signup.php?error=invaliduidmail");
            exit();
          } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {                                                          //check for an invalid username. In this case ONLY letters and numbers.
            header("Location: ../signup.php?error=invaliduid&mail=".$email);
            exit();
          } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {                                                          //check for an invalid e-mail.
            header("Location: ../signup.php?error=invalidmail&uid=".$username);
            exit();
          } else if ($password !== $passwordRepeat) {                                                                       //check if the repeated password is NOT the same.
            header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
            exit();
          } else {                                                                                                          //no user errors if code got here.
            $sql = "SELECT username FROM client WHERE username=?;";                                                         //statement to search database table to check for identical users.
            $stmt = mysqli_stmt_init($conn);                                                                                //prepared statement.

            if (!mysqli_stmt_prepare($stmt, $sql)) {                                                                        //perpare SQL statement & check for errors with it.
              header("Location: ../signup.php?error=sqlerrorSELECT");                                                             //if errors, send user back to signup page.
              exit();
            } else {                                                                                                        //bind parameters to pass into statement & bind data from user.
            // checks if there is a user using this username already, if there isn't then continue.
              mysqli_stmt_bind_param($stmt, "s", $username);                                                                //"s" = string, "i" = int, "b" = blob, "d" = double.
              mysqli_stmt_execute($stmt);                                                                                   //execute prepared statement & send it to database.
              mysqli_stmt_store_result($stmt);                                                                              //store result from statement.
              $resultCount = mysqli_stmt_num_rows($stmt);                                                                   //get number of results received from statement, tells us whether username already exists.
              mysqli_stmt_close($stmt);                                                                                     //close prepared statement.

                  if ($resultCount > 0) {                                                                                   //if username exists.
                      header("Location: ../signup.php?error=usertaken&mail=".$email);
                        exit();
                  } else {                                                                                                  //prepare sql statement, inserts users info into database, prepared statement for security purposes.
                      $sql = "INSERT INTO client (username, email, password) VALUES (?, ?, ?);";                            //prepared statmenet sends SQL to databse first, then fills in palceholders by sending user data.
                      $stmt = mysqli_stmt_init($conn);                                                                      //initialise new statement using connection from dbh.inc.php.
                        
                      if (!mysqli_stmt_prepare($stmt, $sql)) {                                                              //prepares SQL statement & check for errors.
                          header("Location: ../signup.php?error=sqlerrorINSERT");                                           //if error, then sends user back to log in page.
                          exit();
                      } else {
                          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);                                          //hashes password
                          
                          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);                              //bind type param expected to pass into statement, bind data from user.
                          mysqli_stmt_execute($stmt);                                                                       //execute prepared statement, send it to database.
                          header("Location: ../signup.php?signup=success");                                                 //send user back to sign up page with success message.
                          exit();

                        }
                  }
            }
          }
          mysqli_stmt_close($stmt);                                                                                         //close prepare statement.
          mysqli_close($conn);                                                                                              //close database connection.
        }
    else {                                                                                                                  //if the user tries to access in an improper way, send back to sign up page.
        header("Location: ../signup.php");
        exit();
    }
