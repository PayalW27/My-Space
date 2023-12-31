<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact_style.css">

    <script> 
      function page3()
      {
        window.open("page3.html");
      }
    </script>
</head>
<body>
    <div id="container">
        <div id="heading">
            <p id="h1">CONTACT FORM</p>
          </div>

          <div id="h2">
            GET IN <BR>
            TOUCH!

            <p id="para2"> 
               Please fill this form to know more<br> 
               about me
            </p>
          </div>
            
          <div id="contact_form">
            <form action="connection.php" method="post">
              <p class="label"> Full name </p>
              <input type="text" id="name" class="info" placeholder="Enter Name" name="full_name"> <br> <br>

              <p class="label"> Email </p>
              <input type="text" id="email" class="info" placeholder="Enter Email" name="email"> <br> <br>

              <p class="label"> Message </p>
              <input type="text" id="message" class="info" placeholder="Message" name="message">
              
              <div id="button">
                <button id="button_2" name="SUBMIT"> SUBMIT </button>
              </div>
            </form>
          </div>

          <button id="back_button" onclick="page3()"> BACK</button>

        </div>

        <div id="thank_you" style="display: none;">
  <p>Thanks for filling up the form!</p>
  <button type="submit">Close</button>
</div>



</body>
</html>
