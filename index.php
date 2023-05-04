<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FNP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FNP</title> 
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: whitesmoke;
}

.navbar a {
  float: left;
  font-size: 13px;
  color: black bold;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 12px;  
  border: none;
  outline: none;
  color: black bold;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.carousel-control-prev-icon,.carousel-control-next-icon
{
    background-color: rgb(51, 241, 13);
    border:1px solid black;
    border-radius: 50%;
}
.carousel-item{
    background-position:center center;
    height: 70vh;
    background-size: cover;
    background-repeat: no-repeat;
}
</style>


</head>
<body class="bg-light">
    <div class="container-fluid">   
        <nav class="navbar navbar-expand-sm navbar-light bg-warning">
            <div class="container-fluid" >
                <a class="navbar-brand "; style="color:white; font-size:40px; " href="">fnp</a>
                <a class="navbar-brand "; style="color:white; font-size:10px; " href="">FERNS </br>N </br>PENNTALS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"           data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span></br>
                    </br>
                </button>
                <form>
                    <div class="row">
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Search">
                        </div>
                        <div class="col-sm-2">
                            <button style="display:block; width:35px;height:38px; margin-left:-30px;background-color:black;color:white"><i class="fa fa-search" ></i></button>
                        </div>
                    </div>
                </form>
                <form class="ml-auto">
                    <div class="row">
                        <div class="col-sm-6">
                            <span style="display:block; width:35px;height:38px; ">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Cart
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Hi Guest
                        </div>
                    </div>
                </form>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg ml-auto">
            <div class="clear"></div>
            <div class="navbar">
                <a href="" style="color:black">WOMEN'S DAY</a>
                <div class="dropdown">
                    <button class="dropbtn">BIRTHDAY
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a  href="">Candal</a>
                        <a  href="">Cakes</a>
                        <a  href="">Gift</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">ANNIVERSARY
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a  href="">Candal</a>
                        <a  href="">Cakes</a>
                        <a  href="">Gift</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">CAKES
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="">Chokelets Cakes</a>
                        <a href="">Redwil Cakes</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">FLOWER'S
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="">Rose </a>
                        <a href="">MarryGold</a>
                        <a href="">Sunflower</a>
                        <div class="dropdown-driver"></div>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">PERSONALISED
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a  href=""></a>
                        <a  href=""></a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">PLANT'S
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a  href="">Flower</a>
                        <a  href="">Orange</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">COMBOS & HAMPER
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a  href=""></a>
                        <a href=""></a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">MORE GIFTS
                        <i class="fa fa-caret-down"></i>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">OCCASIONS
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a  href=""></a>
                        <a href=""></a>
                    </div>
                </div>
               
            </div>   
        </nav> 
        <!-- **************************Background Slider Start************************************************* -->
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
        <ol class="carousel-indicators">
            <li style="color:red;" data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="0"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- first Slide -->
            <div class="carousel-item active" style="background-image:url(image/banner1.jpg) ;"> 
               <div class="carousel-caption" style="margin-left:500px;">
                <h1 style="color:red; font-size: 40px; font-weight: bolder; font-family:Cursive;">Scrumptions Cake </h1>
                   <h3 class="title"><span></span></h3>
                   <h4 style="color:black;font-weight: bolder;font-family: Arial, Helvetica, sans-serif; ">  Baked Delights for Special Moments</h4>
                   <input type="button" Name="Order Now" value="Order Now" style="color:white; background-color:red; font-size: xx-large; font-weight: bolder;border: none;
  outline: none; border-radius:10px">
               </div>
            </div>
            <!-- Second Slider -->
            <div class="carousel-item " style="background-image:url(image/banner2.JPG) ;">
            <div class="carousel-caption position-right" style="margin-left:500px;">
                <h1 style="color:red; font-size: 40px; font-weight: bolder; font-family:Cursive;">Vanilla Ice Cream </h1>
                   <h3 class="title"><span></span></h3>
                   <h4 style="color:black;font-weight: bolder;font-family: Arial, Helvetica, sans-serif; ">  Baked Delights for Special Moments</h4>
                   <input type="button" Name="Order Now" value="Order Now" style="color:white; background-color:red; font-size: xx-large; font-weight: bolder;border: none;
  outline: none; border-radius:10px">
               </div>
             </div>
             <!-- third Slider -->
             <div class="carousel-item " style="background-image:url(image/banner3.JPG) ;">
             <div class="carousel-caption position-right"  style="margin-left:500px;">
                <h1 style="color:red; font-size: 35px; font-weight: bolder; font-family:Cursive;">Flower Bouquets Online </h1>
                   <h3 class="title"><span></span></h3>
                   <h4 style="color:black;font-weight: bolder;font-family: Arial, Helvetica, sans-serif; ">  Baked Delights for Special Moments</h4>
                   <input type="button" Name="Order Now" value="Order Now" style="color:white; background-color:red; font-size: xx-large; font-weight: bolder;border: none;
  outline: none; border-radius:10px">
               </div>
            </div>
            <!-- Fourth Slider -->
            <div class="carousel-item " style="background-image:url(image/banner5.JPG) ;">
            <div class="carousel-caption position-right"  style="margin-left:500px;">
                <h1 style="color:red; font-size: 35px; font-weight: bolder; font-family:Cursive;">Peanut butter Chocolate </h1>
                   <h3 class="title"><span></span></h3>
                   <h4 style="color:black;font-weight: bolder;font-family: Arial, Helvetica, sans-serif; ">  Baked Delights for Special Moments</h4>
                   <input type="button" Name="Order Now" value="Order Now" style="color:white; background-color:red; font-size: xx-large; font-weight: bolder;border: none;
  outline: none; border-radius:10px">
               </div>
            </div>
        </div>
        <!-- Prev and Next Button -->
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>

    </div>
    <br><br>
<!-- ****************************Bakground Slider End************************************************************* -->
Trending Now
    <div class="row">
        <div class="col-sm-2">
            <div class="card" style="width: 200px; height:300px;">
                <img class="card-img-top" width="150px" src="image/banner5.jpg" alt="Card image cap" >
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- <img src="image/banner5.jpg" width="200px" height="150px" style="background-size:cover;"> -->
        </div>
        <div class="col-sm-2">
        <div class="card" style="width: 200px; height:300px;">
                <img class="card-img-top" height="150px" src="image/banner1.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card" style="width: 200px; height:300px;">
                <img class="card-img-top" height="150px" src="image/banner2.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card" style="width: 200px; height:300px;">
                <img class="card-img-top" height="150px" src="image/banner4.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card" style="width: 200px; height:300px;">
                <img class="card-img-top" height="150px" src="image/banner4.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card" style="width: 200px; height:300px;">
                <img class="card-img-top" height="150px" src="image/banner2.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
<br><br>
Trending Now
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 300px; height:330px;">
                <div class="card-img-top"  style="background-image:url(image/banner5.JPG);background-size:cover;height:230px;">
                    <div class="card-text-top" style="margin-top:10px;position:fixed-top ;background-color:red;color:white;border-radius:50%; width:50px;height:50px;text-align:center;line-height:50px;margin-left:10px">Hot</div>
                </div>
                <div class="card-body">
                    <p class="card-text">Demo Product1</p>
                    <p class="card-text text-danger">₹299.00</p>
                </div>
            </div>
            <!-- <img src="image/banner5.jpg" width="200px" height="150px" style="background-size:cover;"> -->
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 300px; height:330px;">
                <div class="card-img-top"  style="background-image:url(image/banner1.JPG);background-size:cover;height:230px;">
                    <div class="card-text-top" style="margin-top:10px;position:fixed-top ;background-color:red;color:white;border-radius:50%; width:50px;height:50px;text-align:center;line-height:50px;margin-left:10px">Hot</div>
                </div>
                <div class="card-body">
                    <p class="card-text">Demo Product2</p>
                    <p class="card-text text-danger">₹299.00</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 300px; height:330px;">
                <div class="card-img-top"  style="background-image:url(image/banner2.JPG);background-size:cover;        height:230px;">
                    <div class="card-text-top" style="margin-top:10px;position:fixed-top ;background-color:red;color:white;border-radius:50%; width:50px;height:50px;text-align:center;line-height:50px;margin-left:10px">Hot</div>
                </div>
                <div class="card-body">
                    <p class="card-text">Demo Product3</p>
                    <p class="card-text text-danger">₹299.00</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 300px; height:330px;">
                <div class="card-img-top"  style="background-image:url(image/banner3.JPG);background-size:cover;height:230px;">
                    <div class="card-text-top" style="margin-top:10px;position:fixed-top ;background-color:red;color:white;border-radius:50%; width:50px;height:50px;text-align:center;line-height:50px;margin-left:10px">Hot</div>
                </div>
                <div class="card-body">
                    <p class="card-text">Demo Product4</p>
                    <p class="card-text text-danger">₹299.00</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    
</body>
</html>