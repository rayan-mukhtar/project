    <!doctype html>
    <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
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

        {{-- <div class="col-lg-8 col-12 mx-auto">
             
                        </div> --}}

        <nav class="navbar navbar-expand-lg">
    <div class="container ">
    
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto" style="flex-direction: row-reverse;">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2"> الصفحة الرئيسية</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

                
            <section>
                <div class="d-flex flex-wrap mt-5" dir="rtl">
                    <!-- القسم الخاص بمعلومات المشروع -->
                    <div class="flex-div-project project-info">
                       
                        
                        <h4 class="project-headlines">ملفات المشروع:</h4>
            
                        {{-- تحقق إذا كان هناك ملف PDF --}}
                        @if(!empty($project->pdf_file))
                            <a href="{{ route('download.project.file', ['fileName' => $project->pdf_file,'id' => $project->id]) }}" class="btn btn-primary">
                                تحميل PDF
                            </a>
                            <a href="{{ route('view.project.file', ['fileName' => $project->pdf_file]) }}" class="btn btn-primary">
                                عرض PDF
                            </a>
                        @endif
            
                        {{-- تحقق إذا كان هناك ملف Source Code --}}
                        @if(!empty($project->source_code_file))
                            <a href="{{ route('download.project.file', ['fileName' => $project->source_code_file]) }}" class="btn btn-link">
                                تحميل ZIP
                            </a>
                        @endif
            
                        {{-- تحقق إذا كان هناك ملف PPT --}}
                        @if(!empty($project->ppt_file))
                            <a href="{{ route('download.project.file', ['fileName' => $project->ppt_file]) }}" class="btn btn-link">
                                تحميل PPT
                            </a>
                        @endif
            
            
                        <div class="project-details">
                            <h4 class="project-headlines">طلبة المشروع:</h4>
                            @foreach($project->students as $student)
                                <h6 class="project-content">{{$student->name}}</h6>
                                <h6 class="project-content">{{$student->student_id}}</h6>
                            @endforeach
                        </div>

                        <div class="project-details">
                            <h4 class="project-headlines">مشرف المشروع:</h4>
                            @foreach($project->supervisors as $supervisor)
                                <h6 class="project-content">{{$supervisor->qualification . "/"  . $supervisor->name}}</h6>
                            @endforeach
                        </div>
                        
                        <div class="project-details">
                            <h4 class="project-headlines">السنة:</h4>
                            <h6 class="project-content">{{$project->year}}</h6>
                        </div>
            
                        <div class="project-details">
                            <h4 class="project-headlines">الفصل:</h4>
                            <h6 class="project-content">{{$project->term}}</h6>
                        </div>

                

                        <div class="project-details">
                            <h4 class="project-headlines">قسم المشروع:</h4>
                           
                                <h6 class="project-content">{{$project->department->title}}
                         
                        </div>

                        <div class="project-details">
                            <h4 class="project-headlines">تصنيف المشروع:</h4>
                            @foreach($project->categories as $category)
                                <h6 class="project-content">{{$category->title}}</h6>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- القسم الخاص بالمستخلص -->
                    <div class="flex-div abstract-section">
                        <a class="navbar-brand mb-5" href="#section_1" style="color: #81beff; text-align: center; display: flex; flex-direction: column; align-items: center;">
                            <img src="/images/Asset 9@4x.png" alt="Logo">
                            <p style="text-align: center; color:rgb(0, 0, 0)">كلية تقنية الحاسوب - طرابلس</p>
                        </a>
                        <div class="mb-5">
                            <h4 class="h4-project" style="display: flex; justify-content: center; align-items: center; width: 100%; color:rgb(56, 122, 179)">
                                {{$project->title}}
                                {{-- <img style="height: 150px; width: 150px; margin-left: 10px;" src="/images/stem.png" alt="Project Image"> --}}
                            </h4>
                            
                        <p class="abstract text-justify">{{$project->abstract }} </p>
                        </div>
                        <div class="mb-5">
                        <h6 class="h4-project">التقنيات المستخدمة</h6>
                        <p class="abstract text-justify">{{$project->technologies}}</p>
                       
                        </div>
                        <h6>HTML <i class="fab fa-html5"></i> </h6>
                <h6>CSS <i class="fab fa-css3-alt"></i> </h6>
                <h6>JavaScript <i class="fab fa-js"></i> </h6>
                    </div>
                    </div>

                   
                </div>
            </section>
            
         </main>

                        
                <footer class="site-footer section-padding"  dir="ltr">
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

        {{-- <script>
            function download(fileName) {
                // Your custom logic here
                console.log('Function executed with parameter:', fileName);
        
                // Redirect to the route with the parameter
                window.location.href = '{{ route('your.route.name', ['id' => '__param__']) }}';
            }
            </script> --}}

        <!-- JAVASCRIPT FILES -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/jquery.sticky.js"></script>
        <script src="/js/click-scroll.js"></script>
        <script src="/js/custom.js"></script>

    </body>
</html>
