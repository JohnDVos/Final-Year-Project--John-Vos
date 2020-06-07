<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    /*
    *to ensure 1 header for multiple pages, creates header HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "header.php" 
?>

<!------HTML------>
    <main>
        
      <div class="wrapper-main">

              <header>
                  <h1>GDPR: Your Data</h1>
              </header>
              
              <!------------------------------------------------------------
              --------------------------------------------------------------
              ------------------------------------------------------------->
              
              <h2>Transparency and Communication (article 12 and 15):</h2>
              <a name="dataCollection"></a>
              <h3>How your data is processed and collected:</h3>
              <h4>Your data is collected in 2 stages:</h4>
              <p>Stage 1:           upon signing up, you provide a username, email address and password; these are stored on a secure database and your password is further encrypted using hashing.</p>
              <p>Stage 2 client:    when you access your account as a client, you can add data <a href="#clientList">(list provided bellow)</a> which will be stored on said secure database, which can only be accessed by yourself and a PT where <a href="#clientData">applicable*.</a></p>
              <p>Stage 2 PT:        when you access your account as a PT, you can add data <a href="#PTList">(list provided bellow)</a> which will be stored on a secure database, which can only be accessed by yourself and a client where applicable.</p>
              <p>Your data will at no time or under any circumstance be passed on to a 3rd party or external resources. Only yourself and where applicable trainer will have access.</p>
              <p>Your data will be stored for as long as you hold an account, upon deletion of account all data held will be removed. To delete your account simply go on your profile and select delete account.</p>
              
              <a name="PTList"></a>
              <h3>PT data:</h3>
              <ul>
                  <li>email address</li>
                  <li>password</li>
                  <li>phone number</li>
                  <li>pricing list*</li>
                  <li>profile photo*</li>
              </ul>
              <p>*Where applicable.</p>
              
              <a name="clientList"></a>
                  <h3>Client data:</h3>
              <ul>
                  <li>email address</li>
                  <li>password</li>
                  <li>weight</li>
                  <li>height</li>
                  <li>age</li>
                  <li>sex / gender</li>
              </ul>
              <p><a name="clientData"></a>*Client data being accessed by a PT: if you sign up for coaching with a PT they will need / will be able to access your data, such as; weight, height, age, sex, goals. Only the PT assigned to you will be able to access this information.</p>
              
              <h3>Erasure of data:</h3>
              <p>At any time you have the right to request to rectify or erase your data and withdraw consent. For data erasure please see: <a href="#dataErasure">Erasure of personal data:</a></p>
              <p>This includes the right to correct inaccurate or incomplete personal data.</p>
              
              <!------------------------------------------------------------
              --------------------------------------------------------------
              ------------------------------------------------------------->
              

              <h2>Collection of Personal Data (article 13):</h2>
              <p>*article 14 doesn't apply</p>
              
              <h3>Contact Details:</h3>
              <p>In the event a user wishes to contact the controller, they can do so by contacting <a href="j.vos1@uni.brighton.ac.uk? Subject=General%20Enquiries" target="_top">general enquiries.</a></p>
              
              <h3>Period of time data is stored:</h3>
              <p>Your data will be stored as long as you hold an account on the website, upon deletion of the account all data held under that account will be deleted. No back ups of your data are made.</p>
              
              <h2>Rectification or Erasure (article 16 and 17):</h2>
              <p>If at any point a user wishes to rectify or erase any data, they can do so by doing the following:</p>
              <p>To rectify data you can do so directly on your account page by updating any of the data.</p>
              <p>To erase data go to the <a href="#dataErasure">data erasure section:</a></p>
              
              
              <h3>Withdrawing Consent:</h3>
              <p>If at any point a user wishes to withdraw consent and have all data erased you can do so by deleting your account as no data is backed up and deleting an account will erase all data..</p>
              
              <h3>Lodging a Complaint:</h3>
              <p>If at any point a user wishes to lodge a complaint they can do so by contacting <a href="j.vos1@uni.brighton.ac.uk? Subject=Complaint" target="_top">complaints.</a></p>
              
              <h3>Personal Data Contract:</h3>
              <p>whether the provision of personal data is a statutory or contractual requirement, or a requirement necessary to enter into a contract, as well as whether the data subject is obliged to provide the personal data and of the possible consequences of failure to provide such data.</p>
              
              
              <!------------------------------------------------------------
              --------------------------------------------------------------
              ------------------------------------------------------------->
              
              <h2>Right to restrict processing (article 18):</h2>
              <p>As a user you have the right to request that your data is temporarily removed from the website if any information is innacurate, is being used illegally or is no longer needed for purpsoses listed. If any changes in regard to the way data is handled, processed and or collected you will be notified via email. You also hold the right to object to the processing of your data.</p>
              
              <!------------------------------------------------------------
              --------------------------------------------------------------
              ------------------------------------------------------------->
              
              <h2>Data Portability (article 20):</h2>
              <p>If you require for your data to be transfered to a third party you can request to do so and if feasible it will be emailed to you. To do so please contact <a href="j.vos1@uni.brighton.ac.uk? Subject=Transfer%of%data" target="_top">data portability:</a></p>
              
              <!------------------------------------------------------------
              --------------------------------------------------------------
              ------------------------------------------------------------->
              
              <h2>Right to object (article 21):</h2>
              <p>As a user you have the right to object to the processing of data, however, by creating an account you agree to a username, email address and password being stored.</p>
              
              <!------------------------------------------------------------
              --------------------------------------------------------------
              -------------------------------------------------------------> 

            <h2>General Inquiries:</h2>
            <h3>Data Requests:</h3>
              <p>General Data Enquiries <a href="j.vos1@uni.brighton.ac.uk? Subject=General%20Enquiries" target="_top">General Enquiries:</a></p>
              <a name="dataErasure"></a>
              <h3>Erasure of personal data:</h3>
              <p>For inquiries regarding  the erasure of data please contact <a href="j.vos1@uni.brighton.ac.uk? Subject=Errasure%20of%20data" target="_top">Data enquiries email:</a></p>
              
              <a href="https://gdpr.eu/data-privacy/">Your GDPR rights:</a>
              
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