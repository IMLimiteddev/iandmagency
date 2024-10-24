<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>I&M Limited</title>

    <link href="/onboarding/css/bootstrap.css" rel="stylesheet">
    <link href="/onboarding/css/style.css" rel="stylesheet">
    <link href="/onboarding/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="/onboarding/IandM-no-white-bg-logo-.png" type="image/x-icon">
    <link rel="icon" href="/onboarding/IandM-no-white-bg-logo-.png" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body data-anm=".anm">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
        </div>

        <x-headerlayout />

        <x-bodylayout />

        <x-footerlayout />


    </div><!-- End Page Wrapper -->


    <script src="/onboarding/js/jquery.js"></script>
    <script src="/onboarding/js/popper.min.js"></script>
    <script src="/onboarding/js/chosen.min.js"></script>
    <script src="/onboarding/js/bootstrap.min.js"></script>
    <script src="/onboarding/js/jquery.fancybox.js"></script>
    <script src="/onboarding/js/jquery.modal.min.js"></script>
    <script src="/onboarding/js/mmenu.polyfills.js"></script>
    <script src="/onboarding/js/mmenu.js"></script>
    <script src="/onboarding/js/appear.js"></script>
    <script src="/onboarding/js/anm.min.js"></script>
    <script src="/onboarding/js/ScrollMagic.min.js"></script>
    <script src="/onboarding/js/rellax.min.js"></script>
    <script src="/onboarding/js/owl.js"></script>
    <script src="/onboarding/js/wow.js"></script>
    <script src="/onboarding/js/script.js"></script>

    <script defer>
        document.addEventListener("DOMContentLoaded", function() {
    var i = 0;
    var txt = "Find Your Perfect Employee Match";
    var speed = 100;

    function typeWriter1() {
        if (i < txt.length) {
            document.getElementById("typingText").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter1, speed);
        }else {

                setTimeout(function() {
                    i = 0;
                    document.getElementById("typingText").innerHTML = '';
                    typeWriter1();
                }, 2000);
            }

    }

        typeWriter1();

    });
    </script>

</body>


</html>
