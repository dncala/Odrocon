document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.od-navbar');
    const scrollTop = document.getElementById('scrollTop');

    function onScroll() {
        if (window.scrollY > 20) {
            navbar && navbar.classList.add('scrolled');
        } else {
            navbar && navbar.classList.remove('scrolled');
        }

        if (window.scrollY > 400) {
            scrollTop && scrollTop.classList.add('show');
        } else {
            scrollTop && scrollTop.classList.remove('show');
        }
    }

    window.addEventListener('scroll', onScroll);
    onScroll();

    if (scrollTop) {
        scrollTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    document.querySelectorAll('.navbar-nav .nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            const collapse = document.getElementById('mainNavbar');
            if (collapse && collapse.classList.contains('show')) {
                bootstrap.Collapse.getOrCreateInstance(collapse).hide();
            }
        });
    });
});
