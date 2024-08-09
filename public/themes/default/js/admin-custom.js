
$(document).ready( function () {
    $('#paymentHistoryTable').DataTable();
    $('#videoRecTable').DataTable();
    $('#onlinExamTable').DataTable();
    $('#onlinTestResultTable').DataTable();
    $('#rankTable').DataTable();
    $('#attendanceTable').DataTable();
    $('#notePaperTable').DataTable();
    $('#orderHistoryTable').DataTable();
    $('#termTestTable').DataTable();
    $('#requestSubjectTable').DataTable();
    $('#revisionTable').DataTable();
});

$('.fees-Carousel').owlCarousel({
    margin: 30,
    loop: true,
    dots: false,
    nav: true,
    center: true,
    autoplay: true,

    responsive: {
        0: {
            items: 1,

        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});




$('.reviwe-teacher').owlCarousel({
    margin: 30,
    loop: true,
    dots: false,
    nav: true,
    center: true,
    autoplay: true,

    responsive: {
        0: {
            items: 1,

        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});



const ctx = document.getElementById('timeMgtChart');

new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['NO RECORD', 'SELF STUDIES', 'SCHOOL', 'TUTION CLASSES', 'EXTRA ACTIVITIES', 'SPORTS / EXCERCISE','SLEEPING'],
    datasets: [{
      label: '%',
      data: [12, 8, 30, 25, 10, 5,10],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});











$(document).ready(function() {

    
$('#sendOtpBtn').on('click', function() {
    $('#verifyOTP').removeClass('d-none');
  });

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: false,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate : 200,

  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: false,
    nav: false,
    smartSpeed: 200,
    items : 4,
    margin:15,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {

    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);

    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }

    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }

  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
  });
// scripts.js
document.addEventListener('DOMContentLoaded', function () {
    const minusButton = document.getElementById('minus');
    const plusButton = document.getElementById('plus');
    const quantityInput = document.getElementById('quantity');

    minusButton.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 0) {
            quantityInput.value = currentValue - 1;
        }
    });

    plusButton.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
});


document.getElementById('gradeDropdown').addEventListener('change', function () {
  var subjectSec = document.getElementById('subjectSec');
  if (this.value) {
      subjectSec.classList.remove('d-none');
  } else {
      subjectSec.classList.add('d-none');
  }
});













