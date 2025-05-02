//jquery-click-scroll

var sectionArray = [1, 2, 3, 4, 5];

$.each(sectionArray, function(index, value) {

  $(document).scroll(function() {
      // Check if the section exists before accessing offset().top
      var section = $('#' + 'section_' + value);
      if (section.length) {
          var offsetSection = section.offset().top - 75;
          var docScroll = $(document).scrollTop();
          var docScroll1 = docScroll + 1;

          if (docScroll1 >= offsetSection) {
              $('.navbar-nav .nav-item .nav-link').removeClass('active');
              $('.navbar-nav .nav-item .nav-link:link').addClass('inactive');
              $('.navbar-nav .nav-item .nav-link').eq(index).addClass('active');
              $('.navbar-nav .nav-item .nav-link').eq(index).removeClass('inactive');
          }
      }
  });

  $('.click-scroll').eq(index).click(function(e) {
      e.preventDefault();
      
      
// go back 2 steps backword

document.addEventListener('DOMContentLoaded', function() {
  // تحديد العنصر الذي يحتوي على الرابط
  const goBackLink = document.getElementById('goBackLink');
  
  if (goBackLink) {
      // إضافة حدث النقر على الرابط
      goBackLink.addEventListener('click', function(event) {
          // منع تنفيذ الرابط التقليدي
       //   event.preventDefault();

          // العودة إلى الصفحتين السابقتين
          history.go(-2);
      });
  }
});





      // Check if the section exists before accessing offset().top
      var section = $('#' + 'section_' + value);
      if (section.length) {
          var offsetClick = section.offset().top - 75;
          $('html, body').animate({
              'scrollTop': offsetClick
          }, 300);
      }
  });
});

$(document).ready(function(){
    $('.navbar-nav .nav-item .nav-link:link').addClass('inactive');    
    $('.navbar-nav .nav-item .nav-link').eq(0).addClass('active');
    $('.navbar-nav .nav-item .nav-link:link').eq(0).removeClass('inactive');
});


        // // adding row to the Project view tab
        // let columnCount = 1; // لبدء العد من 1
        // document.getElementById('addRow').addEventListener('click', function() {
        //     const row = document.createElement('div');
        //     row.className = 'row';
            
        //     for (let i = 0; i < 3; i++) {
        //         const col = document.createElement('div');
        //         col.className = 'col-md-4';
        //         col.textContent = `عمود ${columnCount}`;
        //         row.appendChild(col);
        //         columnCount++;
        //     }
            
        //     document.getElementById('grid').appendChild(row);
        // });


        // // Toggle year list visibility
        // yearButton.onclick = function(event) {
        //     event.preventDefault(); // Prevent the button from submitting the form
        //     yearList.style.display = yearList.style.display === "none" ? "block" : "none";
        // };

        // // Hide the year list when clicking outside of it
        // document.addEventListener("click", function(event) {
        //     if (!yearButton.contains(event.target) && !yearList.contains(event.target)) {
        //         yearList.style.display = "none";
        //     }
        // });



// Animated Text
document.addEventListener("DOMContentLoaded", function() {
  function animateOnScroll(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show'); // إضافة صنف "show" عند دخول العنصر في العرض
      } else {
        entry.target.classList.remove('show'); // إزالة "show" عند الخروج من العرض (اختياري)
      }
    });
  }

  // إنشاء مراقب العناصر (Observer)
  const observer = new IntersectionObserver(animateOnScroll, {
    threshold: 0.5 // العنصر يجب أن يكون مرئيًا بنسبة 50% على الأقل
  });

  // استهداف كل العناصر التي تحتوي على الفئة "animated-text"
  const animatedTexts = document.querySelectorAll('.animated-text');

  // مراقبة كل عنصر "animated-text"
  animatedTexts.forEach(animatedText => {
    observer.observe(animatedText); // بدء المراقبة لكل عنصر
  });
});

//read more / less
function toggleReadMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline"; // Show the dots
    btnText.textContent = "Read More"; // Change button text to "Read More"
    moreText.style.display = "none"; // Hide the extended text
  } else {
    dots.style.display = "none"; // Hide the dots
    btnText.textContent = "Read Less"; // Change button text to "Read Less"
    moreText.style.display = "inline"; // Show the extended text
  }
}

//filttering by year

    // document.getElementById("toggleCalendar").onclick = function() {
    //     var calendar = document.getElementById("calendar");
    //     if (calendar.style.display === "none") {
    //         calendar.style.display = "block"; // عرض التقويم
    //         this.innerHTML = "إخفاء التقويم"; // تغيير نص الزر
    //     } else {
    //         calendar.style.display = "none"; // إخفاء التقويم
    //         this.innerHTML = "عرض التقويم"; // إعادة نص الزر
    //     }
    // };





//filttering by year

    // document.addEventListener("DOMContentLoaded", function() {
    //     const yearButton = document.getElementById("calendar");
    //     const yearList = document.getElementById("calendar");

    //     // Get the current year
    //     const currentYear = new Date().getFullYear();

    //     // Generate a list of years
    //     for (let year = 2000; year <= currentYear; year++) {
    //         const yearItem = document.createElement("div");
    //         yearItem.textContent = year;
    //         yearItem.onclick = function() {
    //             alert("Selected Year: " + year); // You can handle the selection as needed
    //             yearList.style.display = "none"; // Hide the list after selection
    //         };
    //         yearList.appendChild(yearItem);
    //     }

