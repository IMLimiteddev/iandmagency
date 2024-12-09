<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>I&M Limited</title>
    <meta
        content="Connecting top remote talent with forward-thinking companies worldwide, we specialize in simplifying the recruitment process for remote positions. Our platform brings you highly skilled professionals
        tailored to meet your business needs, whether you're looking for developers, designers, customer support experts,
        or other specialized remote roles. With a commitment to quality, efficiency, and global reach,
        we make it easy for companies to find their perfect remote match—anywhere in the world."
        name="description" />

        <meta property="og:title" content="Connect with Top Nigerian Remote Talent" />
        <meta property="og:description" content="Helping global companies discover skilled Nigerian professionals ready to excel remotely. Find top talent in tech, customer support, design, and more." />
        <meta property="og:image" content="https://iandmlimited.com/logos/IandM-no-white-bg-logo-.png" />
        <meta property="og:url" content="https://iandmlimited.com" />
        <meta property="og:type" content="website" />
        <meta name="google-site-verification" content="t-LZsEXUGJN1fsfkAALqn5VatLkolFDlMIPP4i6HedU" />

    <meta content="Connect with Top Nigerian Remote Talent" property="twitter:title" />
    <meta content="Connecting top remote talent with forward-thinking companies worldwide, we specialize in simplifying the recruitment process for remote positions. Our platform brings you highly skilled professionals
        tailored to meet your business needs, whether you're looking for developers, designers, customer support experts,
        or other specialized remote roles. With a commitment to quality, efficiency, and global reach,
        we make it easy for companies to find their perfect remote match—anywhere in the world." property="twitter:description" />

    <meta content="https://iandmlimited.com/logos/IandM-no-white-bg-logo-.png" property="twitter:image" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

    <link href="/onboarding/css/bootstrap.css" rel="stylesheet">
    <link href="/onboarding/css/style.css" rel="stylesheet">
    <link href="/onboarding/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="/onboarding/IandM-no-white-bg-logo-.png" type="image/x-icon">
    <link rel="icon" href="/onboarding/IandM-no-white-bg-logo-.png" type="image/x-icon">

    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> --}}

    <style>
        .theme-btn.active {
            background-color: #f6ad3e;
            color: white;
        }

        .form-section {
            transition: all 0.3s ease-in-out;
        }

        /* Container to center the circle */
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40vh;
        }

        /* Circle with animated border */
        .animated-circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: #000000;
            /* Inner background color */
            position: relative;
            padding: 50px
        }

        /* Border animation */
        .animated-circle::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 50%;
            border: 5px solid transparent;
            background-image: conic-gradient(from 0deg, rgba(246, 173, 62, 0.2), rgba(246, 173, 62, 1), rgba(246, 173, 62, 0.2));
            background-size: 200% 200%;
            animation: rotate-border 4s linear infinite;
            z-index: -1;
        }

        /* Keyframes for smooth rotation */
        @keyframes rotate-border {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .woww {
            display: flex;
            align-items: center;
            background: #f6ad3e;
            padding: 20px;
            border-radius: 10px;
            overflow: hidden;
            /* Ensures smooth scroll within container */
        }

        .t {
            display: inline-block;
            white-space: nowrap;
            /* Keeps text on a single line */
            animation: scroll-text 60s linear infinite;
        }

        /* Keyframes for the scrolling animation */
        @keyframes scroll-text {
            0% {
                transform: translateX(100%);
                /* Start from outside the right edge */
            }


            100% {
                transform: translateX(-100%);
                /* Move outside the left edge */
            }
        }


        /* Full-page container for static background */
        .background-container {
            height: 50vh;

            /* Replace with your image URL */
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            /* Makes the background image static */
            display: flex;
            align-items: center;
            justify-content: left;
            color: #fff;
            text-align: left;
            border-radius: 10px;
        }

        /* Styling for the centered text */
        .centered-text {
            font-size: 1em;
            font-weight: bold;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background for contrast */
            border-radius: 10px;
        }

        /* Content below the static background */
        .content {
            padding: 50px;
            font-size: 1.2em;
        }
    </style>
</head>

<body data-anm=".anm">

    @include('sweetalert::alert')


    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
        </div>

        @if (Route::currentRouteName()!= 'register')
        @if (Route::currentRouteName()!= 'login')

        <x-headerlayout />

        @endif
        @endif

        {{$body}}

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
    <script defer src="/onboarding/js/basics.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const candidateBtn = document.getElementById('candidateBtn');
            const employerBtn = document.getElementById('employerBtn');
            const candidateForm = document.getElementById('candidateForm');
            const employerForm = document.getElementById('employerForm');

            candidateBtn.addEventListener('click', function () {
                candidateForm.style.display = 'block';
                employerForm.style.display = 'none';
                candidateBtn.classList.add('active');
                employerBtn.classList.remove('active');
            });

            employerBtn.addEventListener('click', function () {
                employerForm.style.display = 'block';
                candidateForm.style.display = 'none';
                employerBtn.classList.add('active');
                candidateBtn.classList.remove('active');
            });
        });
    </script>


</body>


</html>
