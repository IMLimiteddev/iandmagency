<!DOCTYPE html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <title>I&M Limited</title>
    <meta content="Connecting top remote talent with forward-thinking companies worldwide, we specialize in simplifying the recruitment process for remote positions. Our platform brings you highly skilled professionals
        tailored to meet your business needs, whether you're looking for developers, designers, customer support experts,
        or other specialized remote roles. With a commitment to quality, efficiency, and global reach,
        we make it easy for companies to find their perfect remote match—anywhere in the world." name="description" />

    <meta property="og:title" content="Connect with Top Nigerian Remote Talent" />
    <meta property="og:description"
        content="Helping global companies discover skilled Nigerian professionals ready to excel remotely. Find top talent in tech, customer support, design, and more." />
    <meta property="og:image" content="https://iandmlimited.com/logos/IandM-no-white-bg-logo-.png" />
    <meta property="og:url" content="https://iandmlimited.com" />
    <meta property="og:type" content="website" />

    <meta content="Connect with Top Nigerian Remote Talent" property="twitter:title" />
    <meta content="Connecting top remote talent with forward-thinking companies worldwide, we specialize in simplifying the recruitment process for remote positions. Our platform brings you highly skilled professionals
        tailored to meet your business needs, whether you're looking for developers, designers, customer support experts,
        or other specialized remote roles. With a commitment to quality, efficiency, and global reach,
        we make it easy for companies to find their perfect remote match—anywhere in the world."
        property="twitter:description" />

    <meta content="https://iandmlimited.com/logos/IandM-no-white-bg-logo-.png" property="twitter:image" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="/dash/dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="/dash/dist/css/vendors/simplebar.css">
    <link rel="stylesheet" href="/dash/dist/css/themes/dagger.css">
    <link rel="stylesheet" href="/dash/dist/css/app.css"> <!-- END: CSS Assets-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.1.0/build/css/intlTelInput.css">


    <style>
        /* The container for the toggle */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 25px;
        }

        /* The hidden checkbox */
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 25px;
        }

        /* The circle inside the slider */
        .slider::before {
            position: absolute;
            content: "";
            height: 19px;
            width: 19px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        /* When the toggle is checked */
        input:checked+.slider {
            background-color: #4CAF50;
        }

        /* Move the circle to the right when checked */
        input:checked+.slider::before {
            transform: translateX(24px);
        }
    </style>
</head>
<!-- END: Head -->

<body>

    @php
        $users= \App\Models\User::all();
        $requests = \App\Models\Request::all();
    @endphp

    @include('sweetalert::alert')

    <div>
        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher"
            class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge=""
                class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                    data-tw-dismiss="modal" href="javascript:;">
                    <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-3 w-3 sm:h-8 sm:w-8"></i>
                </a>
                <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                    <div class="flex flex-col">
                        <div class="px-8 pb-8 pt-6">
                            <div class="text-base font-medium">Templates</div>
                            <div class="mt-0.5 text-slate-500">Choose your templates</div>
                            <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                                <div>
                                    <a href="echo-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/echo.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        echo
                                    </div>
                                </div>
                                <div>
                                    <a href="hurricane-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/hurricane.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        hurricane
                                    </div>
                                </div>
                                <div>
                                    <a href="ravage-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/ravage.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        ravage
                                    </div>
                                </div>
                                <div>
                                    <a href="hook-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/hook.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        hook
                                    </div>
                                </div>
                                <div>
                                    <a href="razor-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/razor.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        razor
                                    </div>
                                </div>
                                <div>
                                    <a href="havoc-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/havoc.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        havoc
                                    </div>
                                </div>
                                <div>
                                    <a href="dagger-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/dagger.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        dagger
                                    </div>
                                </div>
                                <div>
                                    <a href="shuriken-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/shuriken.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        shuriken
                                    </div>
                                </div>
                                <div>
                                    <a href="raze-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/raze.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        raze
                                    </div>
                                </div>
                                <div>
                                    <a href="exort-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/exort.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        exort
                                    </div>
                                </div>
                                <div>
                                    <a href="viper-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="/dash/dist/images/themes/viper.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        viper
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pb-8 pt-6">
                            <div class="text-base font-medium">Color Schemes</div>
                            <div class="mt-0.5 text-slate-500">
                                Choose your color schemes
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-x-4 gap-y-3.5 sm:grid-cols-4">
                                <div>
                                    <a data-theme-color="default"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 default"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 default"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                {{-- <div>
                                    <a data-theme-color="theme-1"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-1"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-1"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-2"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-2"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-2"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-3"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-3"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-4"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-4"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-4"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-5"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-5"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-5"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-6"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-6"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-6"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-7"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-7"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-7"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-8"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-8"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-8"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-9"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-9"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-9"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-10"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-10"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-10"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-11"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-11"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-11"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-12"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-12"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-12"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-13"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-13"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-13"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-14"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-14"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-14"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-15"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-15"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-15"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-16"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-16"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-16"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-17"
                                        class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-full">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-17"></div>
                                                <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-17"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-0 right-0 z-50 mb-5 mr-5 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-theme-1 text-white shadow-lg"
            data-tw-toggle="modal" data-tw-target="#theme-switcher">
            <i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-5 h-5 animate-spin"></i>
        </div>
    </div>
    <div
        class="dagger before:content-[''] before:bg-gradient-to-b before:from-slate-100 before:to-slate-50 before:fixed before:inset-0">
        <div
            class="[&.loading-page--before-hide]:h-screen [&.loading-page--before-hide]:relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
            <div class="fixed top-0 left-0 z-50 h-screen side-menu group side-menu--collapsed">
                <div class="box fixed inset-x-0 top-0 z-10 flex h-[65px] rounded-none border-x-0 border-t-0">
                    <div
                        class="side-menu__content bg-white flex-none flex items-center z-10 px-5 h-full xl:w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000001f] before:content-[''] before:hidden before:xl:block before:absolute before:right-0 before:border-r before:border-dashed before:border-slate-300/70 before:h-4/6 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:border-solid before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:h-full">
                        <a class="hidden items-center transition-[margin] xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-2"
                            href="#">
                            <div
                                class="flex h-[34px] w-[34px] items-center justify-center rounded-lg bg-gradient-to-r from-theme-1 to-theme-2 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                                <div class="relative h-[16px] w-[16px] -rotate-90 [&_div]:bg-white">
                                    {{-- <div
                                        class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                    </div> --}}
                                    {{-- <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"> --}}
                                        <img src="/onboarding/IandM-white-logo.png" height="20px" width="20px" alt="">
                                        {{--
                                    </div> --}}
                                    {{-- <div
                                        class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                    </div> --}}

                                </div>
                            </div>
                            <div
                                class="ml-3.5 font-medium transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                I&M
                            </div>
                        </a>
                        <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-slate-600/40 transition-[opacity,transform] hover:bg-slate-600/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
                            href="#">
                            <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                        </a>
                        <div class="flex items-center gap-1 xl:hidden">
                            <a class="open-mobile-menu rounded-full p-2 hover:bg-slate-100" href="#">
                                <i data-tw-merge="" data-lucide="align-justify"
                                    class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                            <a class="rounded-full p-2 hover:bg-slate-100" data-tw-toggle="modal"
                                data-tw-target="#quick-search" href="javascript:;">
                                <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                            </a>
                        </div>
                    </div>
                    <x-dash-header-component />
                </div>


                <x-sidebar-header-component :users="$users" :requests="$requests" />
            </div>


            {{$content}}
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="/dash/dist/js/vendors/dom.js"></script>
    <script src="/dash/dist/js/vendors/tailwind-merge.js"></script>
    <script src="/dash/dist/js/vendors/tab.js"></script>
    <script src="/dash/dist/js/vendors/lucide.js"></script>
    <script src="/dash/dist/js/vendors/popper.js"></script>
    <script src="/dash/dist/js/vendors/dropdown.js"></script>
    <script src="/dash/dist/js/vendors/tippy.js"></script>
    <script src="/dash/dist/js/vendors/simplebar.js"></script>
    <script src="/dash/dist/js/vendors/transition.js"></script>
    <script src="/dash/dist/js/vendors/modal.js"></script>
    <script src="/dash/dist/js/components/base/theme-color.js"></script>
    <script src="/dash/dist/js/components/base/lucide.js"></script>
    <script src="/dash/dist/js/components/base/tippy.js"></script>
    <script src="/dash/dist/js/themes/dagger.js"></script>
    <script src="/dash/dist/js/components/quick-search.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->


    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
    </script>

    <script>
        function handleFileUpload(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview');
            const placeholderIcon = document.getElementById('placeholder-icon');

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholderIcon.classList.add('hidden');
                };

                reader.readAsDataURL(file);
            }
        }

        document.getElementById("add-experience").addEventListener("click", function () {
            const container = document.getElementById("experience-container");
            const experienceDiv = container.querySelector(".experience");
            const clonedDiv = experienceDiv.cloneNode(true);


            const inputs = clonedDiv.querySelectorAll("input");
            inputs.forEach(input => input.value = "");

            container.appendChild(clonedDiv);
        });

        document.getElementById("experience-container").addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("remove-experience")) {
                const parentDiv = e.target.closest(".experience");
                if (parentDiv) {
                    parentDiv.remove();
                }
            }
        });



    </script>

    <script>
        document.getElementById("add-education").addEventListener("click", function () {
            const container = document.getElementById("education-container");
            const educationDiv = container.querySelector(".education");
            const clonedDiv = educationDiv.cloneNode(true);


            const inputs = clonedDiv.querySelectorAll("input");
            inputs.forEach(input => input.value = "");

            container.appendChild(clonedDiv);
        });

        document.getElementById("education-container").addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("remove-education")) {
                const parentDiv = e.target.closest(".education");
                if (parentDiv) {
                    parentDiv.remove();
                }
            }
        });
    </script>


    <script>
        document.getElementById("add-media").addEventListener("click", function () {
            const container = document.getElementById("media-container");
            const mediaCount = container.querySelectorAll(".media").length;

            if (mediaCount < 4) {
            const mediaDiv = container.querySelector(".media");
            const clonedDiv = mediaDiv.cloneNode(true);

            const inputs = clonedDiv.querySelectorAll("input");
            inputs.forEach(input => input.value = "");

            container.appendChild(clonedDiv);
            } else {
                alert("You cannot add more than 4 media items.");
            }

        });

        document.getElementById("media-container").addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("remove-media")) {
                const parentDiv = e.target.closest(".media");
                if (parentDiv) {
                    parentDiv.remove();
                }
            }
        });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&libraries=places" async defer></script>


<script>
    function copyToClipboard() {
        // Get the element containing the link
        const linkElement = document.getElementById('meeting-link');
        // Get the text content of the link
        const linkText = linkElement.innerText;

        // Copy the text to the clipboard
        navigator.clipboard.writeText(linkText).then(() => {
            // Show a success message (optional)
            alert('Meeting link copied to clipboard!');
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    }
</script>


@yield('script')

@yield('cancelScript')

@yield('autocomplete')

    {{-- <script>
        async function fetchCountries() {
            try {
                const response = await fetch('https://restcountries.com/v3.1/all');
                const countries = await response.json();
                const countriesList = document.getElementById('countries-list');

                countries.forEach(country => {
                    const option = document.createElement('option');
                    option.textContent = country.name.common;
                    option.value = country.name.common;
                    countriesList.appendChild(option);
                });
            } catch (error) {
                console.error('Error fetching countries:', error);
            }
        }

        fetchCountries();


    </script> --}}

    <script>
        // async function fetchCountries() {
        //     try {
        //         const response = await fetch('https://api.printful.com/countries');
        //         if (!response.ok) {
        //             throw new Error(`HTTP error! Status: ${response.status}`);
        //         }
        //         const data = await response.json();

        //         // Extracting countries and populating the dropdown
        //         const countriesList = document.getElementById('countries-list');
        //         data.result.forEach(country => {
        //             const option = document.createElement('option');
        //             option.textContent = country.name;
        //             option.value = country.code; // Use the country code as value
        //             countriesList.appendChild(option);
        //         });
        //     } catch (err) {
        //         console.error('Error fetching countries:', err);
        //     }
        // }

        // fetchCountries();

//         const proxy = 'https://cors-anywhere.herokuapp.com/';
// const apiUrl = 'https://api.printful.com/countries';

// fetch(proxy + apiUrl)
//     .then(response => response)
//     .then(data => console.log(data))
//     .catch(err => console.error(err));
//     </script>
</body>

</html>
