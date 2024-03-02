<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/styles3.css" rel="stylesheet" />
    <title>Feedback Page</title>
</head>
   <!--  NAVIGATION BAR -->
   <header class="page-header">
   <div class="mainNav">
    <!--WEBSITE PAGES-->
    <ul>
       <li><a href="home.php">Home  </a></li>
            <li><a href="gallery.php">Gallery  </a></li>
            <li><a href="offers.php">Offers  </a></li>
            <li><a href="about.php">About</a></li>
        </ul>
      <div class="button-container"> 
      <label style="color:white;">Hi, <?php echo $row['first_name']; ?></label>
      <!--LOGOUT BUTTON-->
      <a href="login.php">Log out</a>
      </div>

</div>
   </header>
<body>
<div class="feedback-box">
<h1>Feedback Form</h1>
<form action="/submit_feedback" method="post">
    <label for="bookingid">Booking ID:</label>
    <input type="text" id="bookingid-txt-fd" name="bookingid" placeholder="Enter Booking ID" required>

    <label for="firstname">First Name:</label>
    <input type="text" id="firstname-txt-fd" name="firstname" placeholder="Enter First Name" required>

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname-txt-fd" name="lastname" placeholder="Enter Last Name" required>

    <label for="feedback">Feedback Message:</label>
    <textarea id="feedback" name="feedback-txt-fd" placeholder="Enter Feedback" required></textarea>

    <input type="submit" value="Submit" id="input-feed-btt">
</form>
</div>
</body>
</html>