<?php
if(isset($_GET['page']))
{
$page1=$_GET['page'];
}
else
{
$page1=Null;
}

?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <title>Virtuoso - Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
    </head>
    <body>
        <div id="body_bg">
            <div id="container_header" class="container">
                <div id="header" class="row">
                    <div class="col-md-12 margin-top-15">
                        <!-- Header Social Icons -->
                        <ul class="social-icons circle pull-right">
                            <li class="social-rss">
                                <a href="#" target="_blank" title="RSS"></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#" target="_blank" title="Twitter"></a>
                            </li>
                            <li class="social-facebook">
                                <a href="#" target="_blank" title="Facebook"></a>
                            </li>
                            <li class="social-googleplus">
                                <a href="#" target="_blank" title="GooglePlus"></a>
                            </li>
                        </ul>
                        <!-- End Header Social Icons -->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">

                       
                        <!-- Top Menu -->
                        <div class="row">
                         <div class="hornav-block">
					 <!-- Logo -->
                        <div class="logo">
                            
                                            
                            <img src="images/die.png"alt="Logo">

                        </div>
                        <!-- End Logo -->
                                <div id="hornav" class="pull-right">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="index.php?page=home">HOME</a>
                                        </li>
                                        <li>
                                            <span>HELP</span>
                                            <ul>
                                                <li class="parent">
                                                    
                                                    
                                                        <li>
                                                            <a href="index.php?page=contact">CONTACT US</a>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?page=feedback">GIVE FEEDBACK</a>
                                                        </li>
                                                    
                                                </li>
                                                
                                                
                                                
                                                    
                                                
                                            </ul>
                                        </li>
						<li>
                                            <span>Search Partner</span>
                                            <ul>
                                                <li class="parent">
                                                    
                                                    
                                                        <li>
                                                            <a href="index.php?page=groom">Groom</a>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?page=bride"> Bride</a>
                                                        </li>
                                                    
                                                </li>
                                                
                                                
                                                
                                                    
                                                
                                            </ul>
                                        </li>
									 
										 <li >
													
											<a href = "index.php?page=lovecolour">LOVEQUOTES</a>
											 
											  
											
                                         </li>              
										 <li> 
										           <a href = "index.php?page=registrationform">REGISTRATION </a>
                                        </li>
                                           
        
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Top Menu -->
                    </div>
                    <div class="container no-padding">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row">
                            <!-- Carousel Slideshow -->
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <!-- Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!-- End Carousel Indicators -->
                                <!-- Carousel Images -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="assets/img/slideshow/slidee1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/slidee2.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/slidee31.jpg">
                                    </div>
									
                                    
                                </div>
                                <!-- End Carousel Images -->
                                <!-- Carousel Controls -->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                <!-- End Carousel Controls -->
                            </div>
                            <!-- End Carousel Slideshow -->
                            <!-- Tabs -->
                            <div class="tabs-dark" style="padding:0;">
                                <!-- Tab Navigation -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#home" data-toggle="tab">Home</a>
                                    </li>
                                    
                                </ul>
                                <!-- End Tab Navigation -->
                                <!-- Tab Panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">

                                        <img style="float: left; margin-right: 25px; margin-bottom: 10px;" src="assets/img/frontpage/fillx1.jpg" alt="fillx1image">
                                        <h3><b>Wedding</b></h3>
                                        <p> There are three keys to an enduring relationship. Love maybe important,but communication,respect and trust are essential.
                                             A wedding is a ceremony,where two people are united in marriage. Wedding traditions and costums vary greatly between
                                             cultures,ethnic groups,religions,countries,and social classes.In general, marriage can be described as a commitment between a woman and a man,
                                             which is strongly connected with love, support, tolerance and harmony. Actually, creating a family means a new stage of social advancement.
                                              Marriage founds new relationships between males and females, what is thought to be the highest and the most important institution of our
                                               society.
                                        </p>
																			


                                    </div>
                                    
                                    
                                </div>
                                <!-- End Tab Panes -->
                            </div>
                            <!-- End Tabs -->
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <!-- Main Article -->
                            <div class="col-md-12 margin-top-30">


                                
                                    
                                <h2 class="item-title">
                                    <b>Perfect Knot...</b>
                                </h2>
                                <p>
                                    <img class="animate fadeInRight" style="float: right;" src="assets/img/frontpage//kalashh.jpg" alt="responsive screens">
                                    When it comes to marriage, the first thing we all think about is a long-lasting relationship. 
                                    That’s really true....<br>A marriage is one of the most important decision in everybody`s life.
                                </p>
                                 
                                <p>It is all about finding your person and enjoy all the imperfections and differences, making your life awesome.
                                  <br> As a good marriage is something that should be created by two loving people.
                                     It is not something that just happens from time to time.
                                </p>
                                <p>
                                    LOVE does not mean you will always agree, see eye to eye or never have an arguement.It means despite the bad days 
                                    you still can't see yourself without that person.
                                </p>
                                <p>
                                    A HAPPY MARRIAGE is not based on the number of days,months or years you have been together.
                                   <br> A HAPPY MARRIAGE is about how much you love each other everyday...
                                </p>
                                <?php
include("includes/$page1.php");

?>
                                    

                            </div>
                            <div class="clearfix"></div>
                            <!-- End Main Article -->
                        </div>
                    </div>
                    <div class="container no-padding gridgallery">
                        <!-- Portfolio Header Text -->
                        <div class="row">
                            <div class="col-md-12 padding-vert-30">
                               <h2 class="subtitle text-center"><b>Mangala Parinayah</b></h2>
                                <h3 class="subtitle text-center">Two souls but a single thought  and two hearts that beat as one...</h3>
                            </div>
                        </div>
                        <!-- End Portfolio Header Text -->
                        <!-- Portfolio Images -->
                        <div class="portfolio-group">
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img1.jpg" alt="img1">
                                            <figcaption>
                                                <h3> LOVE </h3>
                                                <span>Love cannot be forced.It comes out of heaven,unsaked and unsought</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img2.jpg" alt="img2">
                                            <figcaption>
                                                <h3> BOND</h3>
                                                <span>A bond held together by a glue called LOVE...</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img3.jpg" alt="img3">
                                            <figcaption>
                                                <h3> FAMILY</h3>
                                                <span>Family ... A group<br> Experience of love and support</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img4.jpg" alt="img4">
                                            <figcaption>
                                                <h3> FAITH </h3>
                                                <span> Those who are faithful know only the trivial side of love... </span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img5.jpg" alt="img5">
                                            <figcaption>
                                                <h3> RESPECT</h3>
                                                <span>One of the greatest expression of love</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img6.jpg" alt="img6">
                                            <figcaption>
                                                <h3> APPRECIATION </h3>
                                                <span> a person who feels apprecited will always do more than what is expected </span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img7.jpg" alt="img7">
                                            <figcaption>
                                                <h3> TRUST</h3>
                                                <span> To be trusted is a greater compliment then being loved  </span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                                <div class="image-hover">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/img/portfolio/img8.jpg" alt="img8">
                                            <figcaption>
                                                <h3> BELIEVE </h3>
                                                <span>love means to believe unconditionally... </span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- //Portfolio Item// -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Portfolio Images -->
                        <!-- Portfolio Footer Text -->
                        <div class="row">
                            <div class="col-12-md">
                                <p class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;">Marriage does not guarantee , you will be
                                together forever , it's only paper . it takes love , respect , trust , understamding , friendship and faith in your relationship to make it last. </p>
                            </div>
                        </div>
                        <!-- End Portfolio Footer Text -->
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                    <div id="base" class="container padding-vert-30">
                        <div class="row">
                            <!-- Disclaimer -->
                            <div class="col-md-6">
                                <h3 class="margin-bottom-10">About the website..</h3>
                             <p>Marriage is not a simple and straight forward process.You can't be careless while choosing your life companion.<br>So Surf on our website and find a perfect soulmate for yourself!!!</p>
                            <ol><b>We have listed few reasons why you must choose our site to find your soulmate!!</b>
                                    <li> Simple registration</li>
                                    <li> Easily approchable</li>
                                    <li> No compromise</li>
                                    <li> Attractive features</li>
                                    <li> Open and free platform</li>
                                    </ol></div>
                    
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Disclaimer -->
                            <!-- Contact Details -->
                            <div class="col-md-3">
                                <h3 class="margin-bottom-10">Contact Details</h3>
                                <p>Indore – Ujjain Road Gram Baroli,
                                    <br />Indore,
                                    <br />Madhya Pradesh 453111
                                    
                                </p>
                                <p>Email:
                                    <a href="mailto:info@website.com">info@website.com</a>
                                    <br />Website:
                                    <a href="http://www.website.com">www.website.com</a>
                                </p>
                            </div>
                            <!-- End Contact Details -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div id="footermenu" class="container">
                        <div class="row">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a class="fa-shopping-cart" href="#" target="_blank">Sample Link</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- End Footer Menu -->
                </div>
            </div>
            <div class="container padding-vert-30">
                <div class="row">
                    <div id="copyright">
                        <p>(c) 2014 Your Copyright Info</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->