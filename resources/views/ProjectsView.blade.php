<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        {{-- <!-- <title>{{$classification}}'s project</title> --> --}}

        <!-- CSS FILES -->        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <link href="/css/bootstrap-icons.css" rel="stylesheet">

        <link href="/css/templatemo-topic-listing.css" rel="stylesheet">
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body class="topics-listing-page" id="top">

   <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               
                    <a class="navbar-brand" href="#section_1" style="color: #81beff"><img src="/images/Asset 9@4x.png">
                    </a>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('departments.index')}}" class="nav-link click-scroll" href="#section_2" style="color: #7ebcff" >الصفحة الرئيسية</a>
                        </li>
                    </ul>
                    
                    <div class="search-container d-flex align-items-center">
                        <form class="d-flex align-items-center">
                            <input class="form-control rounded-pill" type="search" placeholder="بحث" aria-label="بحث" style="width: 300px;">
                            <button class="btn btn-primary rounded-pill" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    
                        <form method="GET" action="{{ route('advancedSearch', ['departmentId' => $department->id, 'categoryId' => $category->id]) }}">

                            <div class="d-flex gap-3 align-items-center">
                        
                                <div class="form-group">
                                    <select name="year" id="year" class="form-select">
                                        <option value="">كل السنوات</option>
                                        @foreach($years as $year)
                                            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                                {{ $year }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <select name="term" id="term" class="form-select">
                                        <option value="">كلا الفصلين</option>
                                        <option value="ربيعي" {{ request('term') == 'ربيعي' ? 'selected' : '' }}>
                                            ربيع
                                        </option>
                                        <option value="خريفي" {{ request('term') == 'خريفي' ? 'selected' : '' }}>
                                            خريف
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="sort" value="most_downloaded">
                                    الأكثر تنزيلًا
                                </button>
                                <!-- زر التصفية العادي -->
                                <button type="submit" class="btn btn-primary">
                                    تصفية
                                </button>
                            </div>
                        </form> 
                     </div> 
                </div>
            </div>
        </nav>
         </header>
        {{-- <header class="site-header d-flex flex-column justify-content-center align-items-center"> --}}
            <div class="container text-center">
                <h3 style="color: rgb(0, 0, 0); position: relative;">
                    <h4>مشاريع قسم {{$department->title}}</h4>
                    <h4><i class="bi bi-archive"></i> {{ $category->title }}</h4>
                  
                </h3>
            </div>
        {{-- </header> --}}
        

       
        
        <section>
            <div class="container">
                @if($projects->isEmpty())
                    <!-- عرض الرسالة إذا كان التصنيف لا يحتوي على مشاريع -->
                    <div class="alert alert-info text-center" role="alert">
                        لا توجد مشاريع بعد في هذا التصنيف.
                    </div>
                @else
                    <table class="table table-light table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>عنوان المشروع</th>
                                <th>الملخص</th>
                                <th>السنة</th>
                                <th>الفصل</th>
                                <th>التنزيلات</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>
                                    <img src="/images/project.png" class="project-img" alt="صورة المشروع" style="width: 100px; height: auto;">
                                </td>
                                <td>{{ $project->title }}</td>
                                <td>{{ Str::limit($project->abstract, 100) }}</td>
                                <td>{{ $project->year }}</td>
                                <td>{{ $project->term }}</td>
                                <td>{{ $project->downloads_count }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('view.project', $project->id) }}">عرض</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </section>
        
        
            

        </main>
        <footer class="site-footer section-padding">
                            <div class="container">
                                <div class="row">


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
        <script src="/js/custom.js"></script>
        <script src="/js/click-scoll.js"></script>

        <script src="{{ asset('js/click-scoll.js') }}"></script>

    </body>
</html>