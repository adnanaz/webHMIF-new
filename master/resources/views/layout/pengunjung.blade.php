<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/node_modules/swiper/css/swiper.css">
    <link rel="stylesheet" href="/node_modules/swiper/css/swiper.min.css">

    <link rel="stylesheet" href="/assets/css/hover-min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
</head>

    @yield('content')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

<script>
    //berita acara swiper
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            350: {
                slidesPerView: 1,
                spaceBetween: 10,
            },

            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 1,
            },

            1400: {
                slidesPerView: 3,
                spaceBetween: 1,
            },

            1600: {
                slidesPerView: 4,
                spaceBetween: 1,
            }
        }
    });

    var swiper = new Swiper('.swiper2', {
        slidesPerView: 1,
        spaceBetween: 20,
        freeMode: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    //text limiter 
    $('.textLimit').each(function () {
        var $pTag = $(this).find('p');
        if ($pTag.text().length > 100) {
            var shortText = $pTag.text();
            shortText = shortText.substring(0, 200);
            $pTag.addClass('fullArticle').hide();
            shortText += '<a href="#" class="read-more-link">baca lebih banyak -></a>';
            $pTag.append('<a href="#" class="read-less-link"> &lt- baca lebih sedikit</a>');
            $(this).append('<p class="preview">' + shortText + '</p>');
        }
    });

    $(document).on('click', '.read-more-link', function () {
        $(this).parent().hide().prev().show();
    });

    $(document).on('click', '.read-less-link', function () {
        $(this).parent().hide().next().show();
    });

    $(document).ready(function () {
        if (window.location.hash) {
            var hash = window.location.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 10000);
        };
    });

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
            document.getElementById("header-wrap").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-9%";
            document.getElementById("header-wrap").style.top = "-9%";

        }
        prevScrollpos = currentScrollPos;
    }

</script>

</html>