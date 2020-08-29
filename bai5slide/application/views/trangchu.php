<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Artica</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/1.css">
</head>

<body>
    <!-- header -->
    <div class="container-fluid header bg-dark text-white">
        <div class="row p-2  facebook">
            <div class="col-md-3">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-pinterest"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
            </div>
            <div class="col-md-5">
                <p>Call for reservation: 123456789</p>
            </div>
            <div class="col-md-3">
                <p>open Hours: 9:00am - 10:00 pm</p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div> <!-- hết header -->
    <!--  navbar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container">
                <a class="navbar-brand logo col-1" href="index.html">
                    <img src="images/logo.png" alt="">
                </a>
                <button class="navbar-toggler hidden-sm-up float-right text-info" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.html">News</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button class="btn-warning nutslide">reservation</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div><!-- hết navbar -->
    <div class="slide"> <!-- slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
         </ol>
         <div class="carousel-inner">
<!-- bắt đầu chèn dữ liệu php -->
            <?php $stt =0; ?>
            <?php foreach ($mangdl as $key=>$value): ?> 
            <?php $stt ++; ?>
             <div class="carousel-item  <?php if($stt==1) {echo"active";} ?>">
                    <img src="<?=$value['slide_image'] ?>" class="d-block w-100 layer1" alt="...">
                    <div class="layer2">
                        <img src="images/icon1.png">
                        <h1><?= $value['title']?></h1>
                        <p><?= $value['description']?></p>
                        <button class="btn-warning nutslide"><a href="<?=$value['button_nut']?>"><?=$value['button_text']?></a></button>
                    </div>
                </div>
            <?php endforeach ?>
           
            
            </div>
            <!-- Left and right controls -->
           <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
    </div> <!-- hết slide -->
    <!-- story -->
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis eum explicabo voluptate voluptatibus tenetur nostrum velit, doloribus suscipit nihil illum deserunt minus vero expedita dolorum officiis harum aperiam, voluptates debitis.</p>
    <div class="story">
        <div class="card-deck text-center">
          <div class="card bg-light onestory">
            <img src="<?php echo base_url(); ?>images/3dichvu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Our Restaruant Story</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora aliquam veritatis nam in minus autem sapiente consequatur, eos itaque, sequi. Nemo tempore soluta dolorem molestiae blanditiis optio, enim mollitia voluptatibus.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><a href="">Read more</a></small>
            </div>
          </div>
          <div class="card bg-light onestory">
            <img src="<?php echo base_url(); ?>images/3dichvu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Our Restaruant Story</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora aliquam veritatis nam in minus autem sapiente consequatur, eos itaque, sequi. Nemo tempore soluta dolorem molestiae blanditiis optio, enim mollitia voluptatibus.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><a href="">Read more</a></small>
            </div>
          </div>
          <div class="card bg-light onestory">
            <img src="<?php echo base_url(); ?>images/3dichvu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Our Restaruant Story</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora aliquam veritatis nam in minus autem sapiente consequatur, eos itaque, sequi. Nemo tempore soluta dolorem molestiae blanditiis optio, enim mollitia voluptatibus.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><a href="">Read more</a></small>
            </div>
          </div>
        </div>
    </div> <!-- hết story -->
    <div class="banner text-center text-white">
        <div class="chu ">
            <h2>Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magni possimus consectetur sed, maiores facilis!</p>
        </div>
        <div class="thucdon">
            <a href="">All</a>
            <a href="">Breakfast</a>
            <a href="">Lunch</a>
            <a href="">Dinner</a>
        </div>
    </div> <!-- het banner -->
   <!--  menu -->
   <div class="container my-5  motmon">
       <div class="row">
        <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="images/4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
       </div>

       <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="<?php echo base_url(); ?>images/4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
       </div>
       <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="<?php echo base_url(); ?>images/4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
       </div>
       <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="<?php echo base_url(); ?>images/4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
       </div>
       <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="<?php echo base_url(); ?>images/5.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
       </div>
       <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="<?php echo base_url(); ?>images/6.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
       </div>
       <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="<?php echo base_url(); ?>images/5.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
       </div>
       <div class="col-md-4 menu m-0">
            <div class="row">
                <div class="col-md-4 col-sm-6 p-2">
                     <img src="<?php echo base_url(); ?>images/6.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 col-sm-6 p-2">
                    <div class="tren">
                        <b class="tenmon">Gosh Egg-White Omelet</b>
                        <span class="float-right">$35.50</span>
                    </div>
                     <p>Mussel with tomato sauce, wine</p>
                </div>
            </div>    
        </div>
    </div>
       
   </div> <!-- hết menu -->
   <div class="container-fluid">

   <div class="special   motmon">
    <div class="container my-4">
        <h1 class="text-white">
        Our special Dishes
    </h1>
    </div>
    
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
           <div class="carousel-item active">
            <div class="1hangsanpham">
                <div class="container">
                    <div class="row">
                        <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/1.jpg" class="d-block w-100" alt="...">
                            <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>           
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/1.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>         
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/1.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>         
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/1.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>           
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/1.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>       
                          </div>
                    </div>
                </div> 
            </div>
             
           </div> <!-- hết 1 slide -->
           <div class="carousel-item">
             <div class="1hangsanpham">
                <div class="container">
                    <div class="row">
                        <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/3.jpg" class="d-block w-100" alt="...">
                            < <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>       
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/3.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>           
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/3.jpg" class="d-block w-100" alt="...">
                            <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>          
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/3.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>          
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/3.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>          
                          </div>
                    </div>
                </div> 
            </div>
           </div>
           <div class="carousel-item">
             <div class="1hangsanpham">
                <div class="container">
                    <div class="row">
                        <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/2.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>          
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/2.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>          
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/2.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>        
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/2.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>          
                          </div>
                          <div class="col sanpham">
                            <img src="<?php echo base_url(); ?>images/2.jpg" class="d-block w-100" alt="...">
                             <div class="text-white">
                                 <span>Lorem ipsum.</span>
                                <span class="float-right">$100</span>
                            </div>
                            <small class="text-white">Lorem ipsum dolor sit.</small>          
                          </div>
                    </div>
                </div> 
            </div>
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
   </div> <!-- hết special -->
   <div class="container my-5 py-3">
       <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-8">
               <h2>Stevan Smith</h2>
               <h3>The Master of Cooking</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quidem laudantium, laboriosam! Accusamus consectetur tempore atque voluptatum temporibus eum totam molestiae cumque hic ipsum numquam, error, consequatur aliquam, cum laborum.</p>
               <a href=""><i class="fab fa-facebook-square fa4"></i></a>
               <a href=""><i class="fab fa-vimeo-square"></i></a>
           </div>
       </div>
   </div>
   <div class="container-fluid">
       <div class="relaxing">
           <div class="chu text-white text-center">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum magni possimus consectetur sed, maiores facilis!</p>
            </div>
       </div>
    </div> <!-- hết relaxing -->
  <!--   reservation -->
  <div class="reservation text-center my-5 p-4">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h3>Make A Reservation</h3>
                  <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente deserunt eligendi est ipsam vero voluptatem!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptate, reiciendis excepturi expedita. Iusto praesentium, omnis deserunt dolorum soluta maiores.</p>
                  <h3>0123456</h3>
                  <hr>

            </div><!--  hết reservation -->
            </div>
        </div>
  </div>
  <div class="booktable text-center my-5">
    <h2>Book Your Table Online</h2>
    <form>
    <div class="container">
        <div class="row">      
                 <input type="text" class="col -form-control m-3" placeholder="Name" required />
                 <input type="email" class="col form-control m-3" placeholder="email" required pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Please enter an email address')"/>
                <input type="tel" class="col form-control m-3" placeholder="Phone" required />
         </div>
         <div class="row">      
                 <input type="date" class="col -form-control m-3" placeholder="Date" required />
                 <input type="time" class="col form-control m-3" placeholder="time" required/>
                <input type="number" class="col form-control m-3" placeholder="No. of person" required />
         </div>
         <button class="btn-warning nutslide">BOOK TABLE NOW</button>
    </div>
    </form>
  </div>
 <!--  book table -->
 <div class="container-fluid">
       <div class="relaxing text-center">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 offset-2 my-5 text-white">
                                 <p><i class="fas fa-quote-right m-4"></i></p>
                                <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus natus placeat adipisci debitis ullam amet deleniti, facilis aut corporis, modi, optio. Impedit voluptatem, nobis provident est deleniti, quod ullam saepe."</h3>
                                 <h2>Lorem ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 offset-2 my-5 text-white">
                                 <p><i class="fas fa-quote-right m-4"></i></p>
                                <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus natus placeat adipisci debitis ullam amet deleniti, facilis aut corporis, modi, optio. Impedit voluptatem, nobis provident est deleniti, quod ullam saepe."</h3>
                                 <h2>Lorem ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 offset-2 my-5 text-white">
                                 <p><i class="fas fa-quote-right m-4"></i></p>
                                <h3>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus natus placeat adipisci debitis ullam amet deleniti, facilis aut corporis, modi, optio. Impedit voluptatem, nobis provident est deleniti, quod ullam saepe."</h3>
                                 <h2>Lorem ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
           <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
       </div>
    </div> <!-- hết relaxing -->
    <div class="story text-center py-4">
<h1>Lorem ipsum.</h1>
<h2>Lorem ipsum dolor sit.</h2>

        <div class="card-deck text-center my-4">
          <div class="card bg-light">
            <img src="<?php echo base_url(); ?>images/f1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="">The Best Tips For Tasty Food</a></h5>
              <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
              <p class="card-text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat</p>
            </div>
            <div class="card-footer">
              <small class="text-muted float-left"><a href="">Read more</a></small>
              <span class="float-right">10 like</span>
            </div>
          </div>
          <div class="card bg-light">
            <img src="<?php echo base_url(); ?>images/f1-02.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="">The Best Tips For Tasty Food</a></h5>
              <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
              <p class="card-text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat</p>
            </div>
            <div class="card-footer">
              <small class="text-muted float-left"><a href="">Read more</a></small>
              <span class="float-right">10 like</span>
            </div>
          </div>
          <div class="card bg-light">
            <img src="<?php echo base_url(); ?>images/f1-03.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="">The Best Tips For Tasty Food</a></h5>
              <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
              <p class="card-text">Curabitur quas nets lacusets nulat iaculis loremis etis nisle varius vitae seditum fugiatum ligul aliquam qui sequi nets lacusets nulat</p>
            </div>
            <div class="card-footer">
              <small class="text-muted float-left"><a href="">Read more</a></small>
              <span class="float-right">10 like</span>
            </div>
        </div>
    </div> <!-- hết story -->
   <!--  contact    --> 
   <div class="contact text-left py-3">
   <div class="container">
       <div class="row">
           <div class="col-md-3">
               <img src="<?php echo base_url(); ?>images/logofoot.png">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati deserunt, reiciendis saepe necessitatibus maiores assumenda illo iusto</p>
               <span class="m-3"><i class="fas fa-paper-plane"></i></span>
               <span>Address : 44 New Design Street,
                    Melbourne 005</span> <br>
                <span class="m-3"><i class="fas fa-phone"></i></span>
               <span>123456</span> <br>
                <span class="m-3"><i class="fas fa-envelope"></i></span>
               <span>a@gmail.com</span>
           </div>
           <div class="col-md-3">
               <h3>Lorem ipsum.</h3>
               <ul>
                   <li>Lorem ipsum</li>
                   <li>Lorem ipsum </li>
                   <li>Lorem ipsum</li>
                   <li>Lorem ipsum </li>
                   <li>Lorem ipsum</li>
                   <li>Lorem ipsum</li>
               </ul>
           </div>
           <div class="col-md-3">
               <h3>Lorem ipsum.</h3>
               <ul>
                   <li>Lorem ipsum</li>
                   <li>Lorem ipsum </li>
                   <li>Lorem ipsum</li>
                   <li>Lorem ipsum </li>
                   <li>Lorem ipsum</li>
                   <li>Lorem ipsum</li>
               </ul>
           </div>
           <div class="col-md-3">
            <h3>Lorem ipsum dolor.</h3>
               <div class="tren">
                   <div class="tenmon ngay">Mon-Fri</div>
                   <span class="float-right gio">9:00 am - 23:00 pm</span>
               </div>
               <div class="tren">
                   <div class="tenmon ngay">Mon-Fri</div>
                   <span class="float-right gio">9:00 am - 23:00 pm</span>
               </div>
               <div class="tren">
                   <div class="tenmon ngay">Mon-Fri</div>
                   <span class="float-right gio">9:00 am - 23:00 pm</span>
               </div>
               <div class="tren">
                   <div class="tenmon ngay">Mon-Fri</div>
                   <span class="float-right gio">9:00 am - 23:00 pm</span>
               </div>
           </div>
       </div>
   </div>
</div> <!-- hết contact -->
<footer class="text-center py-5">
    <small>Copyrights © 2015 All Rights Reserved.</small>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>