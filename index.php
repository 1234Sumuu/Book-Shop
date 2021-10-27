<!DOCTYPE html>
<html lang="en">
<head>
    <title>BOOK SHOP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "css/style.css">
    
</head>
<body>
<h3>Welcome to The Book Store</h3>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="image/logo.png" width="50" height="40" class="d-inline-block align-top" alt="">
        E-Book Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Settings</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn btn-primary">
        <a class="btn btn-primary" href="#" role="button">Login/Signup</a>
        </button>

        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/cas-1.png" class ="d-block w-100" alt = "Offline">
      <div class ="carosouel-caption d-done d-md-block">
        <h5>Offline Book</h5>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="image/ca-2.jpg" class ="d-block w-100" alt = "Fun">
      <div class ="carosouel-caption d-done d-md-block">
        <h5>Book for Fun</h5>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="image/c3-book.png" class ="d-block w-100" alt = "Online">
      <div class ="carosouel-caption d-done d-md-block">
        <h5>Online Book</h5>
      </div>  
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  </div>

  <a id = "about">
   <!-- <section class ="my-5">
        <div class = "py-5">
            <h1 class = "text-center">About Us</h1>
        </div>
        <div class = "row">
            <div class = "col-lg-6 col-lg-6 col-12">
                <img src="image/about.png" alt="" class = "img-fluid aboutimage">
            </div>
            <div class = "col-lg-6 col-lg-6 col-12">
                <h1 class = "display-4">This is online BOOK STORE</h1>
                <p class ="py-5" class ="btn btn-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus incidunt exercitationem eius sint fugiat assumenda quo, atque officiis mollitia enim reprehenderit odio labore voluptas quia harum beatae aspernatur doloribus earum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolore ut est quo accusantium quis quibusdam cumque? Aliquam nemo iure perferendis facere quas saepe, architecto ipsam error voluptatum repellendus qui!

                </p>
                <a href="about.php"> See More</a>
            </div>
            </div>
        </div> 
  </section>  -->

  <section class ="my-5">
        <div class = "py-5">
            <h1 class = "text-center">About Us</h1>
        </div>
        <div>
        <div class = "row">
            <div class = "col-lg-6 col-lg-6 col-12">
                <img src="image/about.png" alt="" class = "img-fluid aboutimage">
            </div>
            <div class = "col-lg-6 col-lg-6 col-12">
                <h4 class = "display-5">This is online BOOK STORE</h4>
                <p class ="py-5" class ="btn btn-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus incidunt exercitationem eius sint fugiat assumenda quo, atque officiis mollitia enim reprehenderit odio labore voluptas quia harum beatae aspernatur doloribus earum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolore ut est quo accusantium quis quibusdam cumque? Aliquam nemo iure perferendis facere quas saepe, architecto ipsam error voluptatum repellendus qui!

                </p>
                <a href="index.php"> See More</a>
            </div>
            </div>
        </div>
    </section>
    </a>

  
    <a id = "services"></a>
    <section class ="my-5">
        <div class = "my-5">
        <h2 class ="text-center">Our services</h2>
        </div class = "container-fluid">
            <div class = "row">
                <div class =" col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top" src="image/service-1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Shareing Books</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero recusandae soluta eos beatae ad temporibus molestiae quo alias minima provident vel, saepe delectus aperiam natus minus pariatur. Tempore, dolor similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum odit doloremque alias ullam eos repellat deleniti, cum earum a hic sunt voluptate labore deserunt expedita reiciendis ab culpa? Odit, laborum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo beatae incidunt vero quis quaerat quisquam quae! Earum odio, dolorum cum nesciunt error voluptatibus? Nostrum nulla ipsa vero quis sunt.
                    </p>
                    <a href="#" class="btn btn-primary">Take Service</a>
                </div>
                </div>
                </div>

                <div class =" col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top" src="image/service-2.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Online reading Books</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero recusandae soluta eos beatae ad temporibus molestiae quo alias minima provident vel, saepe delectus aperiam natus minus pariatur. Tempore, dolor similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum odit doloremque alias ullam eos repellat deleniti, cum earum a hic sunt voluptate labore deserunt expedita reiciendis ab culpa? Odit, laborum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo beatae incidunt vero quis quaerat quisquam quae! Earum odio, dolorum cum nesciunt error voluptatibus? Nostrum nulla ipsa vero quis sunt.
                    </p>
                    <a href="#" class="btn btn-primary">Read Book</a>
                </div>
                </div>
                </div>

                <div class =" col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top" src="image/service-3.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Sell Books</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero recusandae soluta eos beatae ad temporibus molestiae quo alias minima provident vel, saepe delectus aperiam natus minus pariatur. Tempore, dolor similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum odit doloremque alias ullam eos repellat deleniti, cum earum a hic sunt voluptate labore deserunt expedita reiciendis ab culpa? Odit, laborum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo beatae incidunt vero quis quaerat quisquam quae! Earum odio, dolorum cum nesciunt error voluptatibus? Nostrum nulla ipsa vero quis sunt.
                    </p>
                    <a href="#" class="btn btn-primary">Take Service</a>
                </div>
                </div>
                </div>
            </div>    
    </section>

    <section class ="my-4">
        <div class = "py-4">
        <h2 class ="text-center">Visit Library-1</h2>
        </div>

        <div class ="container-fluid">
          <div class = "row">
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-1.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-2.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-3.png" alt="" class= "image-fluid pb-4">
            </div>
      
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-7.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-3.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-9.png" alt="" class= "image-fluid pb-4">
            </div>
        </div>
    </div>
    </section>

    <section class ="my-4">
        <div class = "py-4">
        <h2 class ="text-center">Visit Library-Story Books</h2>
        </div>

        <div class ="container-fluid">
          <div class = "row">
          <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/story book-1.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/story book-2.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/story-3.png" alt="" class= "image-fluid pb-4">
            </div>
          </div>
          </div>
        </div>
    </section>

    <section class ="my-4">
        <div class = "py-4">
        <h2 class ="text-center">Visit Library-Children Books</h2>
        </div>

        <div class ="container-fluid">
          <div class = "row">
          <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/rhy-1.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/rhy-2.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/rhy-3.png" alt="" class= "image-fluid pb-4">
            </div>
          </div>
          </div>
        </div>
    </section>

    <a id = "Details">
    <section class ="my-4">
        <div class = "py-4">
        <h2 class ="text-center">Enter your details:</h2>
        </div>
        <div class ="w-50 m-auto">
          <form action="about.php" method ="post">
              <div class ="form-group" >
                  <label >User Name</label>
                  <input type="text" name = "name" class ="form-control">
              </div>
              <div class ="form-group" >
                  <label >Email</label>
                  <input type="email" name = "email" class ="form-control">
              </div>
              <div class ="form-group" >
                  <label >Contact Number</label>
                  <input type="text" name = "contact" class ="form-control">
              </div>
              <!-- <div class ="form-group" >
                  <label >Comment</label>
                  <textarea class="form-control" name= "comments" id="" cols="30" rows="10"></textarea>
              </div> -->
              <button type ="submit" class ="btn btn-success"> <a href="about.php" class =" bg-dark"> <b>Submit</b></a>
              </button>
          </form>
        </div>
    </section>
    </a>

    <a id = "contact">
    <section class ="my-4">
        <div class = "py-4">
        <h2 class ="text-center">Contact Us</h2>
        </div>
        <div class ="container-fluid">
          <h3 class ="text-center">Shop</h3>
          <p class = "text-center"><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, explicabo iure! Debitis obcaecati natus delectus eius voluptatibus error laboriosam amet. Minus aliquid, voluptatem natus omnis totam et illum cumque mollitia.</b> </p>
        </div>
    </section>
    </a>

    <footer >
      <p class ="p-2 text-center"> @Bookshop.com</p>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>