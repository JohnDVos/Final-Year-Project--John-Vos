<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    /*
    *to ensure 1 header for multiple pages, creates header HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "header.php" 
?>


<!--back to top button script -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
    <script>
        //when the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        //when the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;                            // For Safari
            document.documentElement.scrollTop = 0;                 // For Chrome, Firefox, IE and Opera
        }
    </script>  

<!------HTML------>
    <main>
        
      <div class="wrapper-main">
          
          <section class="section-default">
              <!--can chose what content to show depending on if logged in or not.-->
              <?php
                if (!isset($_SESSION['id'])) {
                    echo '<p class="login-status">You are currently logged out!</p>';
                } else if (isset($_SESSION['id'])) {
                    echo '<p class="login-status">You have succesfully logged in!</p>';
                }
                ?>
                
              <header>
                  <h1>Welcome to the home page:</h1>
              </header>
              <header>
                  <h2>About this website:</h2>
              </header>
              <p>This website was designed for Personal Trainers (PT's) and the general populous who are looking for the following:</p>
              <h3>General Users:</h3>
              <ol>
                  <li><a href="nutrition.php">Information about nutrition:</a></li>
                  <li><a href="training.php">Training Programs:</a></li>
                  <li><a href="trainers.php">Personal Trainers</a></li>
              </ol>
              <h3>Personal Trainers:</h3>
              <ol>
                  <li><a href="nutrition.php">Nutrition Resources</a></li>
                  <li><a href="training.php">Training Resources</a></li>
              </ol>
          </section>
      </div>
        
        
    </main>


<!------PHP------>
<?php
    /*
    *to ensure 1 footer for multiple pages, creates footer HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "footer.php";
?>
