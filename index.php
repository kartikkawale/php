<?php

$conn = mysqli_connect("localhost", "root", "", "collegedb");
if(isset($_post["register_button"]));


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navigation tab starts from here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    <a href="#registermodal" data-toggle="modal" style="color:red">register </a> &nbsp;&nbsp;
    <a href="#loginmodal" data-toggle="modal">login</a>
  </span>
</nav>
      </div>
    </nav>
   
    <!-- navigation tab ends here -->
    <!-- hero section strts here  -->
    <div class="jumbotron">
        <h1 class="display-4">Welcome to SOFT Mobiles</h1>
        <p class="lead">This  is shopping website which  will simply helps you to sort out  selecting various Mobile Phones and mobile Accessories </p>
        <hr class="my-4">
        <p>We have a very large collection of smartphons,laptops,smart Watches and much more,
          click above to watch  it..
        </p>
        <p class="lead">
          <a class="btn btn-dark btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
     <!-- hero section ends here  -->
     <!-- abt us section strts frm here  -->
     <div class="container" id="about">
      <h1>About us</h1>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <img src="images/903d546f-52ba-465d-8c9e-94883d15db05.svg" alt="">

        </div>
        <div class="col-md-6">
          <p class="pace">
            Unrivaled Selection: Explore a vast array of smartphones from all major brands, catering to every budget and preference.
Expert Advice: Our knowledgeable staff is here to guide you through your purchase, offering personalized recommendations to match your needs.
Competitive Prices: Enjoy unbeatable deals and special offers on the hottest smartphones, ensuring you get the best value for your money.

          </p>
          <h3>Objectives</h3>
          <hr>
          <ul style="none">
              <li>Increase Sales Revenue: Boost overall sales figures </li>
               <li>Expand Customer Base: Attract new customers and expand the shop's reach</li>
               <li>Introduce New Products: Regularly introduce new and innovative mobile devices</li>
               <li>Stay Ahead of Market Trends: Stay informed about the latest mobile technology trends</li>
          </ul>

        </div>

      </div>
     </div>
     <!-- gallery starts here  -->
    <div class="container" id="gallery">
      <div>
        <h1>
          <span> Gallery Section </span>
        </h1>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <div>
            <figure>
            <img width="300px" src="images/images.jpg" alt="" class="img-fluid">
            <figcaption> mobile Phones </figcaption>
          </figure>
          </div>

        </div>
        <div class="col-md-3">
          <div>
            <figure>
            <img width="200px" src="images/images (2).jpg" alt="" class="img-fluid">
            <figcaption id="box"> Laptops </figcaption>
          </figure>
          </div>
          <hr>

        </div>
        <div class="col-md-3">
          <div>
            <figure>
            <img width="250" src="images/output.png" alt="" class="img-fluid">
            <figcaption id="box"> Sound Devices </figcaption>
          </figure>
          </div>
          
<hr>
        </div>
        <div class="col-md-3">
          <div>
            <figure>
            <img width="200" src="images/download (4).jpg" alt="" class="img-fluid">
            <figcaption id="box"> Power Banks </figcaption>
          </figure>
          </div>
          <hr>

        </div>
        <br>
        <div class="col-md-3">
          <div>
            <figure>
            <img width="200" src="images/download (5).jpg" alt="" class="img-fluid">
            <figcaption id="box"> Accessories </figcaption>
          </figure>
          </div>
          <hr>

        </div>
        <div class="col-md-3">
          <div>
            <figure>
            <img src="images/download (1).jpg" alt="" class="img-fluid">
            <figcaption id="box"> sound Boxes </figcaption>
          </figure>
          </div>
          <hr>

        </div>
        <div class="col-md-3">
          <div>
            <figure>
            <img src="images/download (2).jpg" alt="" class="img-fluid">
            <figcaption id="box"> Smarth Watches </figcaption>
          </figure>
          </div>
          <hr>

        </div>
        <div class="col-md-3">
          <div>
            <figure>
            <img src="images/download.jpg" alt="" class="img-fluid">
            <figcaption id="box"> Headphones </figcaption>
          </figure>
          </div>
          <hr>

        </div>


      </div>

    </div>  
    <!-- end of gallery -->
    <!-- start of contact us  -->
    <div class="container" id="contact">
      <h1> Contact <span> Section </span> </h1>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div style="overflow:hidden;resize:none;max-width:100%;width:500px;height:350px;"><div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Sipna+College+Of+Engineering+And+Technology,+Badnera+Road,+Gopal+Nagar,+Amravati,+Maharashtra,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="my-codefor-googlemap" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="get-map-data">premium bootstrap themes</a><style>#embed-ded-map-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>
        </div>
        <div class="col-md-6">
          <h4 align="center"> Query Form </h4>
          <div class="row">
            <div class="col-md-6" method="post">
              
              <input type="text" name="fullname" placeholder="Fullname" class="form-control">
              
              <input type="email" name="email" placeholder="Email ID" class="form-control">
            </div>
            <div class="col-md-6">
              
              <input type="date" name="dob" placeholder="Date of Birth" class="form-control">
              
              <input type="password" name="password" placeholder="Password" class="form-control">
              
            </div>
              
              <textarea name="queries" class="form-control" rows="6"> your queries </textarea>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <div class="bg-theme" style="margin-top: 100px" id="footer">
      <div class="container">
        <div class="row mt-3">
          <div class="col-md-4">
            <h4> GET IN TOUCH </h4>
       <i class="bi bi-geo-alt-fill"></i> ambedkar chowk, Railway Station road,
          amgaon, gondia, 441902
           <br>
      
       <i class="bi bi-telephone-fill"></i> +91 - 9371249795 <br>
      
       <i class="bi bi-envelope-arrow-down-fill"></i> softmobile@gmail.com
          </div>
      
          <div class="col-md-3">
            <h4> IMPORTANT LINKS </h4>
            <ul>
              <li> Contact </li>
              <li> Customers </li>
              <li> Members </li>
             
            </ul>
      
          </div>
      
          <div class="col-md-4">
            <h4> IMPORTANT LINKS </h4>
            <ul>
              <li> Products </li>
              <li> Review </li>
              <li> Happy customers </li>
             
            </ul>
      
          </div>
      
         
          </div>
        	
     
</div>
      
      </div>	
      </div>	

      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>	
      </div>	
      <div class="modal" id="registermodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> <h3>Registration form</h3> <button class="close" data-dismiss="modal" > &times; </button>  </div>
      <div class="modal-body">
        <form method="post">
          <input type="name" name="fullname" placeholder="Fullname" class="form-control">
          <br>
          <input type="email" name="email" placeholder="email" class="form-control">
          <br>
          <input type="tel" name="contact" placeholder="contact" class="form-control">
          <br>
          <input type="date" name="dob" placeholder="date of birth" class="form-control">
          <br>
          <button type="submit" name="register_button" class="btn-dark-success" style="color: brown;">register</button>
          <p>already have an account? <a href="#">sign in</a></p>
    <hr>
              </div>
    
            </div>
    
          </div>
        </form>


      </div>

    </div>

  </div>
  
</div>
      
      </div>	
      </div>	
      <div class="modal" id="loginmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> <h3>login form</h3> <button class="close" data-dismiss="modal" > &times; </button>  </div>
      <div class="modal-body">
        <form action="form" method="post">
          <input type="email"  placeholder="email" class="form-control">
          <br>
          <input type="name" placeholder="password" class="form-control">
          <br>
          <button style="margin-top: 2px;" name="query-submit-btn" class="btn-outline-success" style="color: brown;">Login</button>
          <p>alreay have an account? <a href="#">sign in</a></p>
    <hr>
        
    <hr>
              </div>
    
            </div>
    
          </div>
        </form>


      </div>

    </div>

  </div>
  
</div>

      
      </div>	
      </div>	

       
    
    






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>