var navbar = document.querySelector('.navbar');
var navlink = document.querySelectorAll('.nav-link');
var navbar_brand = document.querySelector('.navbar-brand');

$(document).ready(function() {
    $(this).scrollTop(0);
    navlink.forEach(function(item) {
        if (current_page == item.innerHTML.toLowerCase()) {
            item.classList.add('active');
        }
    });
    navDefault();
});

function navDefault() {
    navlink.forEach(function(item) {
        if (item.classList.contains('active')) {
            item.classList.add('text-danger');
        } else {
            item.classList.add('text-light');
        }
    });
    navbar_brand.classList.add('text-light');
}


window.addEventListener('scroll', function() {
    if (window.pageYOffset > 30) {
        navbar.classList.add('bg-light');
        navbar.classList.add('shadow');

        navlink.forEach(function(item) {
            item.classList.remove('text-light');
        });
        navbar_brand.classList.remove('text-light');
    } else {
        navbar.classList.remove('shadow');
        navbar.classList.remove('bg-light');
        navDefault();
    }
});



function disabledCalendarDates() {
    var dateBtn = document.querySelectorAll('.date-btn');
    dateBtn.forEach(btn => {
        if (!btn.classList.contains('disabled')) {
            btn.classList.add('disabled');
        }
    });
}