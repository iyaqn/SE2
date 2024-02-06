<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <!--TAB TITLE-->
   <title>PAYMENT</title>
    
    <!--TAB ICON-->
    <link rel="icon" type="image/jpg" href="assets/img/favicon.png"/>
    
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!--CSS / JS-->
    <script src="https://kit.fontawesome.com/ff8e777e2d.js" crossorigin="anonymous"></script> <!--ICON RESOURCES-->
    <link href="styles2.css" rel="stylesheet" />
    
  
  </head>
  <body class="body-payment">
    

   <div class="mainNav">

    <!--WEBSITE PAGES-->
    <ul>
       <li><a href="home.php">Home  </a></li>
            <li><a href="gallery.html">Gallery  </a></li>
            <li><a href="offers.html">Offers  </a></li>
            <li><a href="about.html">About</a></li>
        </ul>

    
      <div class="button-container">

      

      <!--LOGOUT BUTTON-->
      <a href="login.php">Log out</a>
      </div>

</div>
   </header>

   <section class="payment">
    <div class="payment-content">
    <div id="overlay">
    <div id="payment-card">
        <p>Name:</p>
        <p>Reservation Date:</p>
        <p>Package:</p>
        <hr>
        Total Due:
        <hr>
        <hr>
    

    <form action=" " method="post">
    <div>
        <input type="card-name" id="card-name" name="card-name" placeholder="Card Name" />
    </div>

    <div>
        <input type="card-number" id="card-number" name="card-number" placeholder="Card Number" />
    </div>

    <div>
        
        <input type="card-ed" id="card-ed" name="card-ed" placeholder="MM/YY" />
    </div>

    <div>
        <input type="card-cvv" id="card-cvv" name="CVV" placeholder="CVV" />
    </div>

    <button type="submit" id="payment-btn"> <a href="summary.php">Proceed </a></button>
</form>
</div>
</div>
    

    </div>
    
   </section>


 <!--BOOKING MODAL--> <!--should always be at the last page-->
 <div class="bg-modal">
                        <div class="modal-contents">

                        <div class="close">+</div>
            

                        CALENDAR
                        

</br>
                        <a href="booking1.php" class="button">BOOK</a>

                        </div>
                        </div>
    
      <!--JS RESOURCE-->
      <script src="main.js"></script>


    
</body>
</html>