<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="stylesheet" href="css/index.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <meta name="theme-color" content="#fafafa">
</head>

<body>

<div>
<div id="header" class="container-fluid">
  <div id="header-div">
  <img src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/img1.png" id="header_logo">
    <div id="header-content">
      <div id="book-now" class="font-regular"><a href="#">BOOK NOW</a> OR CALL <a href="#">1-800-123-1231</a></div>
      <div id="header-buttons-div">
        <button class="header-buttons">HOW IT WORKS</button>
        <button class="header-buttons">BOOK TRAVEL</button>
        <button class="header-buttons" data-toggle="modal" data-target="#contactUsForm">CONTACT US</button>
      </div>
    </div>
  </div>
</div>

  <div id = "main-div">
  <div id="title" >
    <div id="headingAndBtn">
      <div id="heading">HOW IT WORKS</div>
      <button class="btn" id="contactUs" data-toggle="modal" data-target="#contactUsForm">CONTACT US</button>
      </div>
    </div>

  <div id="content-div">

    <div class="font-regular" id="content-div-heading"><b>Easy, Fast, Direct!</b></div>
    <br>
    <div class="font-light para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dicta nulla perspiciatis porro.
      Adipisci debitis deserunt distinctio eligendi esse illo, ipsam numquam officia quasi, reiciendis rem unde
      voluptatum? Necessitatibus, nulla.
      <br><br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Alias animi aspernatur aut iusto mollitia pariatur porro quibusdam,
      ratione saepe! Architecto deleniti dolore et laudantium nesciunt numquam,
      repellendus voluptatibus. Cupiditate, incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur dignissimos doloremque ea eos ex explicabo facilis
    </div>

    <div class="row" id="content-images">
      <div class="col-4 content-image-div">
        <div class="numbers" id="number1"><img src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/one.png" ></div>
        <img class="content-image" src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/laptop4_280x160.png">
        <br><br>
        <h4 class="font-semibold image-description-heading">Lorem Ipsum dolor</h4>
        <br>
        <div class="image-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum eius eum expedita labore magni
          maiores natus nesciunt, odio officia
        </div>
      </div>
      <div class="col-4 content-image-div">
        <div class="numbers" id="number2"><img src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/two.png" ></div>
        <img class="content-image" src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/laptop5_280x160.png">
        <br><br>
        <h4 class="font-semibold image-description-heading">Lorem Ipsum dolor colre dolor diod seron</h4>

        <div class="image-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum eius eum expedita labore magni
          maiores natus nesciunt, odio officia
        </div>
      </div>
      <div class="col-4 content-image-div">
        <div class="numbers" id="number3 "><img src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/three.png" ></div>
        <img class="content-image" src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/laptop7_280x160.png">
        <br><br>
        <h4 class="font-semibold image-description-heading">Lorem Ipsum dolor</h4>
        <br>
        <div class="image-description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum eius eum expedita labore magni
        maiores natus nesciunt, odio officia
        </div>
      </div>
    </div>

  </div>

  <div id="partners">
    <button id="bookYourTrip" class="font-semibold">BOOK YOUR TRIP TODAY</button>
    <div id="partners-text" class="font-regular">
      Travel Partners with...
    </div>

    <hr color="#F7F7F7" id="partners-hr">
      <div id="partners-image">
          <div class="row" id="image-row1">
              <?php
              $dir    = './img/FE_ Assignment 2 - GFT/image resources/Partners';
              $files1 = scandir($dir);
              $files2 = scandir($dir, 1);
              foreach( $files1 as $row)
              {
                  if($row!='.' && $row!='..'  ) {
                      $img_location = "img/FE_ Assignment 2 - GFT/image resources/Partners/$row";
                      echo "<div class='partners_images'><img src='$img_location'></div>";
                  }
              }
              ?>
          </div>
      </div>
    </div>
  </div>
</div>

<div id="footer-1" class="container-fluid">
  <div id="footer-1-links-parent">
    <div class="footer-1-links font-regular">How It Works</div>
    <div class="footer-1-links font-regular">Book Travel</div>
    <div class="footer-1-links font-regular" data-toggle="modal" data-target="#contactUsForm">Contact Us</div>
  </div>
  <hr color="white" id="footer-hr">
  <div id="logo">
    <img src="img/FE_%20Assignment%202%20-%20GFT/image%20resources/img1.png" id="footer_logo">
  </div>
</div>


<div id="footer-2">
  <div id="footer-content-parent">
    <div class="footer-content font-regular" id="footer-content-child1">Privacy Policy / Terms & Conditions</div>
    <div class="footer-content font-regular" id="footer-content-child2">Copyright @ 2015 JTG, Inc. All rights reserveds</div>
  </div>
</div>
</div>


<div id="contactUsForm" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Contact Us Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
      <form action="Pages/contact_us_form_submit.php" method="post">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for="email">Email</label><br>
      <input type="email" id="email" name="email" placeholder="Enter your Email...">
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write Your Message Here..." style="height:70px"></textarea>
      <input type="submit" value="Submit">
      <button id="close" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </form>
      </div>

    </div>
  </div>
</div>
</body>

</html>
