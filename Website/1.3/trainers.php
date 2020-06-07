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
              <header>
                  <h1>Personal Trainers:</h1>
              </header>
              <p>All personal trainer content will go here</p>
              <p>!UNDER DEVELOPEMENT!</p>
              
              <div class="profile">
                    <header>
                        <h4>PT NAME:</h4>
                    </header>
                    <p><img src="images/pt-icon.jpg" alt="PT-icon" class="profile-photo">Description:</p>
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
