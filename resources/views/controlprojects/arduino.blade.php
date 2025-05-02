<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Arduino Projects</title>
C:\Users\halae\Desktop\Final Archiving System\resources\views\controlprojects\arduino.blade.php
        <!-- CSS FILES -->        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body class="topics-listing-page" id="top">

    <nav class="navbar navbar-expand-lg" dir="rtl">
    <div class="container">
        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto" style="flex-direction: row-reverse;">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{route('PVN')}}"> الصفحة الرئيسية</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


           <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
            <div class=" d-flex flex-column justify-content-center align-items-center">
    <div class="search-container">
        <form class="d-flex align-items-center">
            <input class="form-control me-3 rounded-pill" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success rounded-pill" type="submit">Search</button>

            <button id="yearButton" class="btn btn-primary me-3" style="font-size: 16px; padding: 10px 20px;">
                <i class="fas fa-calendar-alt"></i>
                Filter
            </button>
            <div id="calendar" style="display: block;"></div> <!-- التقويم مخفي افتراضيًا -->
        </form>
    </div>
</div>

                </div>
            </header>

            <!-- نديرها دايناميك -->

            <section>
            <div>
            <h2 class="h2-nav">مشاريع تخرج </h2>
            </div>
            
           <div class= "flex-div">
                    <ul>
                        <li>
                        <div class="d-flex">
                        <div>
                                    <img src="images/WebApp.png" class="project-img" alt="">                     
                                </div>

                                <div clsss = " flex-column">
                                    <h2 class = "marg">Project Title</h2>
                                    <h4 class = "marg">students </h4>
                                    <p  class = "marg" id="myParagraph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    <span id="dots">...</span>
                                    <span id="more" style="display: none;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </p>
                                    <button class="marg" onclick="toggleReadMore()" id="myBtn">Read More</button>
                                                            </div>
                           </div>
                           </li>     
                           
                           <li>
                        <div class="d-flex">
                        <div>
                                    <img src="images/WebApp.png" class="project-img" alt="">                     
                                </div>

                                <div clsss = " flex-column">
                                    <h2 class = "marg">Project Title</h2>
                                    <h4 class = "marg">students </h4>
                                    <p  class = "marg" id="myParagraph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    <span id="dots">...</span>
                                    <span id="more" style="display: none;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </p>
                                    <button class="marg" onclick="toggleReadMore()" id="myBtn">Read More</button>
                                                            </div>
                           </div>
                           </li>        

                           <li>
                        <div class="d-flex">
                        <div>
                                    <img src="images/WebApp.png" class="project-img" alt="">                     
                                </div>

                                <div clsss = " flex-column">
                                    <h2 class = "marg">Project Title</h2>
                                    <h4 class = "marg">students </h4>
                                    <p  class = "marg" id="myParagraph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    <span id="dots">...</span>
                                    <span id="more" style="display: none;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </p>
                                    <button class="marg" onclick="toggleReadMore()" id="myBtn">Read More</button>
                                                            </div>
                           </div>
                           </li>        


                           <li>
                        <div class="d-flex">
                        <div>
                                    <img src="images/WebApp.png" class="project-img" alt="">                     
                                </div>

                                <div clsss = " flex-column">
                                    <h2 class = "marg">Project Title</h2>
                                    <h4 class = "marg">students </h4>
                                    <p  class = "marg" id="myParagraph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    <span id="dots">...</span>
                                    <span id="more" style="display: none;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </p>
                                    <button class="marg" onclick="toggleReadMore()" id="myBtn">Read More</button>
                                                            </div>
                           </div>
                           </li>        


                           <li>
                        <div class="d-flex">
                        <div>
                                    <img src="images/WebApp.png" class="project-img" alt="">                     
                                </div>

                                <div clsss = " flex-column marg">
                                    <h2 class = "marg">Project Title</h2>
                                    <h4 class = "marg">students </h4>
                                    <p  class = "marg" id="myParagraph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    <span id="dots">...</span>
                                    <span id="more" style="display: none;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                    </p>
                                    <button class="marg" onclick="toggleReadMore()" id="myBtn">Read More</button>
                                                            </div>
                           </div>
                           </li>        
                              </div>
                    </ul>

                </div>
            </section>

        </main>
        <footer class="site-footer section-padding">
                            <div class="container">
                                <div class="row">

                    <!-- <div class="col-lg-3 col-12 mb-4 pb-2">
                       
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                    
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        
                    </div> -->

                    <div class=" footer-links col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                        <h4 class="animated-text">يُمكِنُك مُتابعتنا على</h4>

                        <div class="footer-links">
                        <div>
                            <a href="https://www.facebook.com/Ltmitc" target="_blank">صفحة إتحاد طلبة الكلية
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>

                        <div>
                            <h1></h1>
                        </div>

                        <div>
                            <a href="https://www.facebook.com/cctt.edu.ly" target="_blank">صفحتنا الرسمية
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>


                              
                                
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">جميع الحقوق محفوظة © 2024.
                    </div>

                </div>
            </div>
        </footer>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/click-scoll.js"></script>

        

    </body>
</html>