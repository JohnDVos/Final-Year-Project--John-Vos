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
              <header>
                  <h1>Personal Trainers:</h1>
              </header>
              
              
              <p>PT name:</p>
              <p>PT photo</p>
              <p>PT pricing</p>
              <p>PT email address</p>
              <p>PT phone number</p>
              
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
