$(document).ready(function() {
    var header = $("#header");
    var sticky = header.offset().top;

    $(window).scroll(function() {
        if (window.pageYOffset > sticky) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");
        }
    });
});


const myobserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('aparecer-animar');
        } else {
            entry.target.classList.remove('aparecer-animar');
        }
    });
});

const contatos = $('.animar');

contatos.each(function() {
    myobserver.observe(this);
});
