<?php /*
This page is used to display the static frontpage.
*/
  
// Fetch theme header template
get_header(); ?>
    <div id="primary">
  
    <div class="custom-homepage-container"> 
    <section class="hero-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/banner.jpg';?>" class="d-block w-100" alt="Car 1">
                    <div class="carousel-caption ">
                                                <h2>Welcome to CarRental</h2>
                                                <p>Your reliable car rental service</p>
                                                <a href="http://localhost/car_rental/booking/" class="btn btn-primary">Book Now</a>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </section>
                                                
                                                <!-- About Section -->
                                                <section id="about" class="about-section">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h2>About CarRental</h2>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices lacus vel metus porta, ut
                                                                    iaculis nibh consequat. Suspendisse potenti. Mauris efficitur tristique tortor, id placerat
                                                                    lorem. Sed auctor nisl id urna pulvinar, ut facilisis elit vulputate.</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img src="<?php echo get_template_directory_uri().'/assets/images/car_img1.png';?>" alt="About CarRental" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                
                                                <!-- Services Section -->
                                                <section id="services" class="services-section">
                                                    <div class="container">
                                                        <h2>Our Services</h2>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img height="290px" src="<?php echo get_template_directory_uri().'/assets/images/car_img2.png';?>" class="card-img-top" alt="Service 1">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Car Rental</h5>
                                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img height="316px" src="<?php echo get_template_directory_uri().'/assets/images/car_img3.png';?>" class="card-img-top" alt="Service 2">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Airport Transfer</h5>
                                                                        <p class="card-text">Sed commodo nunc a placerat aliquam.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <div>
                                                                        <img height="290px" src="<?php echo get_template_directory_uri().'/assets/images/car_img1.png';?>" class="card-img-top" alt="Service 3">
                                                                    
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Chauffeur Service</h5>
                                                                        <p class="card-text">Aenean scelerisque urna id sapien maximus fermentum.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </section>
                                                
                                                <!-- Contact Section -->
    </div> 
  
    </div><!-- #primary -->
<?php get_footer(); ?>