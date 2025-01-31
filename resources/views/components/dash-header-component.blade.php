<div
    class="absolute inset-x-0 h-full transition-[padding] duration-100 xl:pl-[275px] group-[.side-menu--collapsed]:xl:pl-[91px]">
    <div class="flex h-full w-full items-center px-5">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
            <ol class="flex items-center text-theme-1 dark:text-slate-300">
                <li class="">
                    <a href="#">App</a>
                </li>

                <li
                    class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                    <a href="#">@yield('title')</a>
                </li>
                {{-- <li
                    class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
                    <a href="#">Update Profile</a>
                </li> --}}
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        {{-- <div class="relative hidden flex-1 justify-center xl:flex" data-tw-toggle="modal"
            data-tw-target="#quick-search">
            <div
                class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] border bg-slate-50 px-3.5 py-2 text-slate-400 transition-colors hover:bg-slate-100">
                <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                <div class="ml-2.5 mr-auto">Quick search...</div>
                <div>⌘K</div>
            </div>
        </div>
        <div id="quick-search" aria-hidden="true" tabindex="-1"
            class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
            <div
                class="relative mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex w-12 items-center justify-center">
                        <i data-tw-merge="" data-lucide="search" class="stroke-[1] w-5 h-5 -mr-1.5 text-slate-500"></i>
                    </div>
                    <input data-tw-merge="" type="text" placeholder="Quick search..."
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full border-slate-200 placeholder:text-slate-400/90 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-lg border-0 py-3.5 pl-12 pr-14 text-base shadow-lg focus:ring-0">
                    <div class="absolute inset-y-0 right-0 flex w-14 items-center">
                        <div class="mr-auto rounded-[0.4rem] border bg-slate-100 px-2 py-1 text-xs text-slate-500/80">
                            ESC
                        </div>
                    </div>
                </div>
                <div
                    class="global-search global-search--show-result group relative z-10 mt-1 max-h-[468px] overflow-y-auto rounded-lg bg-white pb-1 shadow-lg sm:max-h-[615px]">
                    <div
                        class="flex flex-col items-center justify-center pb-28 pt-20 group-[.global-search--show-result]:hidden">
                        <i data-tw-merge="" data-lucide="search-x"
                            class="h-20 w-20 fill-theme-1/5 stroke-[0.5] text-theme-1/20"></i>
                        <div class="mt-5 text-xl font-medium">
                            No result found
                        </div>
                        <div class="mt-3 w-2/3 text-center leading-relaxed text-slate-500">
                            No results found for
                            <span class="global-search__keyword font-medium italic"></span>
                            . Please try a different search term or check your
                            spelling.
                        </div>
                    </div>
                    <div class="hidden group-[.global-search--show-result]:block">
                        <div class="px-5 py-4">
                            <div class="flex items-center">
                                <div class="text-xs uppercase text-slate-500">
                                    Start your search here...
                                </div>
                            </div>
                            <div class="mt-3.5 flex flex-wrap gap-2">
                                <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                    href="#">
                                    <i data-tw-merge="" data-lucide="users2" class="h-4 w-4 stroke-[1.3]"></i>
                                    Users
                                </a>
                                <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                    href="#">
                                    <i data-tw-merge="" data-lucide="building2" class="h-4 w-4 stroke-[1.3]"></i>
                                    Departments
                                </a>
                                <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                    href="#">
                                    <i data-tw-merge="" data-lucide="kanban-square" class="h-4 w-4 stroke-[1.3]"></i>
                                    Products
                                </a>
                                <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                    href="#">
                                    <i data-tw-merge="" data-lucide="mail-check" class="h-4 w-4 stroke-[1.3]"></i>
                                    Mails
                                </a>
                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><a
                                        data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;"
                                        class="cursor-pointer flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50">More
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="-ml-0.5 h-4 w-4 stroke-[1.3]"></i>
                                    </a>
                                    <div data-transition="" data-selector=".show"
                                        data-enter="transition-all ease-linear duration-150"
                                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                        data-leave="transition-all ease-linear duration-150"
                                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                        class="dropdown-menu absolute z-[9999] hidden">
                                        <div data-tw-merge=""
                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="map"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Locations</a>
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="file-check"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Projects</a>
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="printer"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Devices</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-dashed px-5 py-4">
                            <div class="flex items-center">
                                <div class="text-xs uppercase text-slate-500">
                                    Users
                                </div>
                                <a class="ml-auto text-xs text-slate-500" href="#">
                                    See All
                                </a>
                            </div>
                            <div class="mt-3.5 flex flex-col gap-1">
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user5-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="truncate font-medium">
                                        Brad Pitt
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Seattle, USA
                                    </div>
                                </a>
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user1-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="truncate font-medium">
                                        Tom Hanks
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        New York, USA
                                    </div>
                                </a>
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user7-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="truncate font-medium">
                                        Johnny Depp
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Denver, USA
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="border-t border-dashed px-5 py-4">
                            <div class="flex items-center">
                                <div class="text-xs uppercase text-slate-500">
                                    Departments
                                </div>
                                <a class="ml-auto text-xs text-slate-500" href="#">
                                    See All
                                </a>
                            </div>
                            <div class="mt-3.5 flex flex-col gap-1">
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                        <i data-tw-merge="" data-lucide="hotel"
                                            class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                    </div>
                                    <div class="truncate font-medium">
                                        Sales
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Solomon Islands
                                    </div>
                                </a>
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                        <i data-tw-merge="" data-lucide="store"
                                            class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                    </div>
                                    <div class="truncate font-medium">
                                        Human Resources
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Åland Islands
                                    </div>
                                </a>
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                        <i data-tw-merge="" data-lucide="store"
                                            class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                    </div>
                                    <div class="truncate font-medium">
                                        Customer Support
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Zimbabwe
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="border-t border-dashed px-5 py-4">
                            <div class="flex items-center">
                                <div class="text-xs uppercase text-slate-500">
                                    Products
                                </div>
                                <a class="ml-auto text-xs text-slate-500" href="#">
                                    See All
                                </a>
                            </div>
                            <div class="mt-3.5 flex flex-col gap-1">
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/products/product7-400x400.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="truncate font-medium">
                                        8-Cup Coffee Maker
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Sports & Outdoors
                                    </div>
                                </a>
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/products/product8-400x400.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="truncate font-medium">
                                        Wireless Noise-Cancelling Headphones
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Jewelry
                                    </div>
                                </a>
                                <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                    href="#">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/products/product8-400x400.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="truncate font-medium">
                                        High-Performance Laptop
                                    </div>
                                    <div class="hidden text-slate-500 sm:block">
                                        Furniture
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- END: Search -->

        {{-- User Label --}}
        <div class="relative hidden flex-1 justify-center xl:flex">

            @if (Auth::user() && Auth::user()->isAdmin())
            <div
                class="flex w-[200px] cursor-pointer items-center rounded-[0.5rem] border bg-slate-50 px-3.5 py-2 text-slate-400 transition-colors hover:bg-slate-100">
                ADMIN DASHBOARD
            </div>
            @endif
            @if (Auth::user() && Auth::user()->isCandidate())
            <div
                class="flex w-[200px] cursor-pointer items-center rounded-[0.5rem] border bg-slate-50 px-3.5 py-2 text-slate-400 transition-colors hover:bg-slate-100">
                USER DASHBOARD
            </div>
            @endif
            @if (Auth::user() && Auth::user()->isEmployer())
            <div
                class="flex w-[200px] cursor-pointer items-center rounded-[0.5rem] border bg-slate-50 px-3.5 py-2 text-slate-400 transition-colors hover:bg-slate-100">
                EMPLOYER DASHBOARD
            </div>
            @endif

        </div>
        {{-- User lable end --}}


        <!-- BEGIN: Notification & User Menu -->
        <div class="flex flex-1 items-center">
            <div class="ml-auto flex items-center gap-1">
                <a class="rounded-full p-2 hover:bg-slate-100" data-tw-toggle="modal" data-tw-target="#activities-panel"
                    href="javascript:;">
                    <i data-tw-merge="" data-lucide="layout-grid" class="stroke-[1] h-[18px] w-[18px]"></i>
                </a>
                <a class="request-full-screen rounded-full p-2 hover:bg-slate-100" href="javascript:;">
                    <i data-tw-merge="" data-lucide="expand" class="stroke-[1] h-[18px] w-[18px]"></i>
                </a>
            </div>
            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-5">

                @if (Auth::user() && Auth::user()->isEmployer())

                <button
                    data-tw-toggle="dropdown" aria-expanded="false"
                    class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-slate-200/70"><img
                        src="{{$user?->company?->company_logo}}" alt="codeBrown">
                </button>
                @endif
                @if (Auth::user() && Auth::user()->isAdmin())

                <button
                    data-tw-toggle="dropdown" aria-expanded="false"
                    class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-slate-200/70"><img
                        src="/dash/dist/images/users/avatar.jpeg" alt="codeBrown">
                </button>
                @endif
                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-1 w-56">


                        @if (Auth::user() && Auth::user()->isAdmin())

                        <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                        </div>

                        <a href="#"
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                data-tw-merge="" data-lucide="settings" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Settings</a>
                        <a href="#"
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                data-tw-merge="" data-lucide="inbox" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Email Settings</a>
                        <a href="#"
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                data-tw-merge="" data-lucide="lock" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Reset Password</a>

                        @endif
                        <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                        </div>

                        @if (Auth::user() && Auth::user()->isEmployer())
                        <a href="{{route('company.profile.display')}}"
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                data-tw-merge="" data-lucide="users" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Company Profile Info</a>
                        @endif
                        @if (Auth::user() && Auth::user()->isCandidate())
                        <a href="{{route('candidate.profile.display')}}"
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                data-tw-merge="" data-lucide="users" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Candidate Profile Info</a>
                        @endif

                        <form action="{{route('logout')}}" method="POST">@csrf
                            <button type="submit"
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                    data-tw-merge="" data-lucide="power" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Logout</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="activities-panel"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge=""
                    class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                    <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                        data-tw-dismiss="modal" href="javascript:;">
                        <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                    </a>
                    <div data-tw-merge=""
                        class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                        <h2 class="mr-auto text-base font-medium">Latest Registrations</h2>
                    </div>
                    <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                        <div class="flex flex-col gap-3.5 px-5 py-3">
                            <div
                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                @foreach ($users as $user)
                                <div
                                    class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                    <div
                                        class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                        <a class="font-medium text-primary" href="#">
                                            New Registration
                                        </a>
                                        <div
                                            class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                            {{$user->name}}, Just registered. Welcome our new onboarding.
                                            <span
                                                class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 warning">
                                                <span
                                                    class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                <span class="-mt-px">Profile Completed.</span>
                                            </span>
                                        </div>

                                        <div class="mt-1.5 text-xs text-slate-500">
                                            {{$user->created_at->diffForHumans()}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div>
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="notifications-panel"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge=""
                    class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                    <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                        data-tw-dismiss="modal" href="javascript:;">
                        <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                    </a>
                    <div data-tw-merge=""
                        class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                        <h2 class="mr-auto text-base font-medium">Notifications</h2>
                        <button data-tw-merge=""
                            class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 hidden sm:flex"><i
                                data-tw-merge="" data-lucide="shield-check" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Mark all as
                            read</button>
                    </div>
                    <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                        <div class="flex flex-col gap-0.5 p-3">
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Logged out</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Signed out from the dashboard
                                    </div>
                                    <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                        <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project8-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project8-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project1-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Wed Jul 2020
                                    </div>
                                </div>
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Updated profile picture</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Changed profile photo
                                    </div>
                                    <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                        <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project1-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project1-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project1-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Mon Jan 2021
                                    </div>
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Posted a status update</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Shared thoughts on the project
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Mon Jan 2021
                                    </div>
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Uploaded a spreadsheet</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Added financial data for Q3
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Sat Nov 2021
                                    </div>
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Logged in successfully</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Accessed the dashboard
                                    </div>
                                    <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                        <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project6-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project8-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project6-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Tue Feb 2021
                                    </div>
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Uploaded video files</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Shared video tutorials
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Tue Jun 2020
                                    </div>
                                </div>
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Uploaded documents</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Uploaded important project documents
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Sun Jul 2021
                                    </div>
                                </div>
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Uploaded images</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Added project screenshots
                                    </div>
                                    <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                        <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project6-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project2-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project10-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Fri Aug 2022
                                    </div>
                                </div>
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Added a new contact</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Added a new contact, Sarah
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Sun Jul 2021
                                    </div>
                                </div>
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Received a friend request</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Friend request from John
                                    </div>
                                    <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                        <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project3-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project1-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project3-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Wed Apr 2020
                                    </div>
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Uploaded audio recordings</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Recorded podcast episodes
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Wed Aug 2020
                                    </div>
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Uploaded code files</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Added new code modules
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Fri Mar 2021
                                    </div>
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Uploaded presentations</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Added slides for the team meeting
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Sun Jan 2022
                                    </div>
                                </div>
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Task completed: Review Project Proposal</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Reviewed and provided feedback
                                    </div>
                                    <div class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                        <div class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project10-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project1-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div
                                                class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                <img src="/dash/dist/images/projects/project6-400x400.jpg"
                                                    alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Sat Sep 2020
                                    </div>
                                </div>
                                <div
                                    class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                </div>
                            </a>
                            <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                <div>
                                    <div
                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="/dash/dist/images/users/user3-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="sm:ml-5">
                                    <div class="font-medium">Received 5 new emails</div>
                                    <div class="mt-0.5 text-slate-500">
                                        Inbox updates
                                    </div>
                                    <div class="mt-1.5 text-xs text-slate-500">
                                        Sun Nov 2021
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="switch-account"
            class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge=""
                class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                <div
                    class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400 h-14 justify-center">
                    <h2 class="text-base font-medium">Switch Account</h2>
                </div>
                <div data-tw-merge="" class="p-5 px-2.5 pb-4 pt-3.5">
                    <div class="flex flex-col gap-1.5">
                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                            <div
                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                <img src="/dash/dist/images/users/user8-50x50.jpg"
                                    alt="Tailwise - Admin Dashboard Template">
                            </div>
                            <div class="ml-3.5">
                                <div class="font-medium">Cate Blanchett</div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    cate.blanchett@left4code.com
                                </div>
                            </div>
                            <div class="relative ml-auto h-7 w-7">
                                <input data-tw-merge="" checked="" type="checkbox"
                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                    id="switch-account-0" value="switch-account">
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                </div>
                            </div>
                        </div>
                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                            <div
                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                <img src="/dash/dist/images/users/user1-50x50.jpg"
                                    alt="Tailwise - Admin Dashboard Template">
                            </div>
                            <div class="ml-3.5">
                                <div class="font-medium">Tom Hanks</div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    tom.hanks@left4code.com
                                </div>
                            </div>
                            <div class="relative ml-auto h-7 w-7">
                                <input data-tw-merge="" type="checkbox"
                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                    id="switch-account-1" value="switch-account">
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                </div>
                            </div>
                        </div>
                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                            <div
                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                <img src="/dash/dist/images/users/user10-50x50.jpg"
                                    alt="Tailwise - Admin Dashboard Template">
                            </div>
                            <div class="ml-3.5">
                                <div class="font-medium">Julia Roberts</div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    julia.roberts@left4code.com
                                </div>
                            </div>
                            <div class="relative ml-auto h-7 w-7">
                                <input data-tw-merge="" type="checkbox"
                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                    id="switch-account-2" value="switch-account">
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                </div>
                            </div>
                        </div>
                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                            <div
                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                <img src="/dash/dist/images/users/user4-50x50.jpg"
                                    alt="Tailwise - Admin Dashboard Template">
                            </div>
                            <div class="ml-3.5">
                                <div class="font-medium">Angelina Jolie</div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    angelina.jolie@left4code.com
                                </div>
                            </div>
                            <div class="relative ml-auto h-7 w-7">
                                <input data-tw-merge="" type="checkbox"
                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                    id="switch-account-3" value="switch-account">
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                </div>
                            </div>
                        </div>
                        <div class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                            <div
                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                <img src="/dash/dist/images/users/user3-50x50.jpg"
                                    alt="Tailwise - Admin Dashboard Template">
                            </div>
                            <div class="ml-3.5">
                                <div class="font-medium">Leonardo DiCaprio</div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    leonardo.dicaprio@left4code.com
                                </div>
                            </div>
                            <div class="relative ml-auto h-7 w-7">
                                <input data-tw-merge="" type="checkbox"
                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                    id="switch-account-4" value="switch-account">
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                    <i data-tw-merge="" data-lucide="check" class="h-3 w-3 stroke-[1.5]"></i>
                                </div>
                                <div
                                    class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400 flex h-14 items-center justify-center text-center">
                    <a class="-mt-1 block text-primary" href="#">
                        Login into an Existing Account
                    </a>
                </div>
            </div>
        </div> --}}
        <!-- END: Notification & User Menu -->
    </div>
</div>
