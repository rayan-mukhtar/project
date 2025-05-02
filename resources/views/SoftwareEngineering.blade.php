<!doctype html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <script src="/js/click-scroll.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>تصنيفات مشاريع هندسة البرمجيات</title>

        <!-- CSS FILES -->        
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

        

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <link href="/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/css/templatemo-topic-listing.css" rel="stylesheet">      

    </head>
    
    <body id="top">

        <main>

        <div class="col-lg-8 col-12 mx-auto">
             
         </div>
         <nav class="navbar navbar-expand-lg" dir="ltr">
          <div class="container ">
          
          <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-lg-auto" style="flex-direction: row-reverse;">
                      <li class="nav-item">
                          <a class="navbar-brand" href="#section_1" style="color: #81beff"><img src="/images/Asset 9@4x.png">
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link click-scroll" href="{{route('departments.index')}}"> الصفحة الرئيسية</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
                


            <div>
            <h1 class=" text-center-classifications mb-4  animated-text">تصنيفات مشاريع قسم {{$department->title}} </h1> 
            </div>

            <section class="explore-section section-padding" id="section_2">
              <div class="container">
                  <div class="row justify-content-center">
                      @foreach($categories as $category)
                          <div class="col-lg-4 col-md-6 col-12 mb-4">
                              <div class="custom-block bg-white shadow-lg text-center">
                                  <a href="{{ route('categories.show', ['category' => $category->id, 'department' => $department->id]) }}">
                                      <div class="d-flex flex-column align-items-center">
                                          <div>
                                              <h5 class="mb-2">{{ $category->title }}</h5>
                                              <p class="mb-0">{{ $category->description }}</p>
                                          </div>
                                          <img src="/images/ai.png" class="custom-block-icons img-fluid" alt="">
                                      </div>

                                  </a>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
      {{-- <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="myTabContent" rtl>
              <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                <div class="row">
                  <!-- First div -->
                  <div class="col-lg-3 col-md-6 col-12 mb-4" href="{{route('ai')}}">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="{{route('ai')}}">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2" > مشاريع مُزوّدة بالذكاء الاصطناعي</h5>
                            <p class="mb-0">  هو فرع من علوم الحاسوب يهدف إلى تطوير أنظمة وبرمجيات قادرة على محاكاة القدرات العقلية البشرية، مثل التعلم، التحليل، واتخاذ القرارات. يُستخدم في مجالات متعددة مثل تحليل البيانات، السيارات الذاتية القيادة، والمساعدات الافتراضية، مما يساعد على تحسين الكفاءة واتخاذ القرارات الذكية.</p>
                          </div>
                        </div>
                        <img src="/images/ai.png" class="custom-block-icons img-fluid" alt="">
                      </a>
                    </div>
                  </div> --}}


                  <!-- Second div -->
                  {{-- <div class="col-lg-3 col-md-6 col-12 mb-4" href="{{route('db')}}">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="{{route('db')}}">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2"> منظومات</h5>
                            <p class="mb-0">المنظومات هي أنظمة متكاملة تجمع بين الأجهزة والبرمجيات لتنفيذ مهام محددة بشكل آلي ومنظم. تُستخدم في مختلف المجالات، لتسهيل العمليات وزيادة الكفاءة، من خلال جمع البيانات وتحليلها وإدارة الموارد بفعالية.</p>
                          </div>
                        </div>
                        <img src="/images/DB.png" class="custom-block-icons img-fluid" alt="">
                      </a>
                    </div>
                  </div> --}}



                  <!-- Third div -->
                  {{-- <div class="col-lg-3 col-md-6 col-12 mb-4" href="{{route('mobileApp')}}">
                    <div class="custom-block bg-white shadow-lg">
                      <a href="{{route('mobileApp')}}">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2">تطبيقات الموبايل</h5>
                            <p class="mb-0">  هي برامج تعمل عبر الإنترنت من خلال المتصفحات، تتيح للمستخدمين التفاعل مع البيانات والخدمات دون الحاجة إلى تثبيتها على أجهزتهم. تعتمد على خوادم لإدارة البيانات وتتميز بسهولة الوصول من أي جهاز متصل بالإنترنت.</p>
                          </div>
                        </div>
                        <img src="/images/app-development.png" class="custom-block-icons img-fluid" alt="">
                      </a>
                    </div>
                  </div> --}}

                  <!-- Fourth div -->
                  {{-- <div class="col-lg-3 col-md-6 col-12 mb-4"  href="{{route('web')}}">
                    <div class="custom-block bg-white shadow-lg">
                      <a   href="{{route('web')}}">
                        <div class="d-flex">
                          <div>
                            <h5 class="mb-2" >تطبيقات الويب</h5>
                            <p class="mb-0">هي برامج تعمل عبر الإنترنت من خلال المتصفحات، مثل البريد الإلكتروني والمتاجر الإلكترونية، وتتميز بسهولة الوصول والتحديث المستمر دون الحاجة للتثبيت.</p>
                          </div>
                        </div>
                        <img src="/images/WebApp.png" class="custom-block-icons img-fluid" alt="">
                      </a>
                    </div>
                  </div> --}}

              
                {{-- </div>
              </div> --}}

              {{-- <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                <div class="row"></div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    {{-- </div> --}}
  {{-- </div> --}}
</section>           
        </main>

                        
                <footer class="site-footer section-padding" dir="ltr">
                            <div class="container">
                                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                       
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                    
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        
                    </div>

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
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/jquery.sticky.js"></script>
        <script src="/js/click-scroll.js"></script>
        <script src="/js/custom.js"></script>

    </body>
</html>
