<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12 sm:col-span-10 sm:col-start-2">
                        <div class="flex flex-col gap-y-2 lg:flex-row lg:items-center">
                            <div
                                class="flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group active after:hidden before:hidden after:lg:block before:lg:block first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20 last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20 last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20 first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20">
                                <div class="flex items-center">
                                    <div
                                        class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                                        <div class="flex h-10 w-10 items-center justify-center">
                                            1
                                        </div>
                                    </div>
                                    <div
                                        class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                                        Display Information
                                    </div>
                                </div>
                            </div>
                            {{-- <div
                                class="flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group after:hidden before:hidden after:lg:block before:lg:block first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20 last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20 last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20 first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20">
                                <div class="flex items-center">
                                    <div
                                        class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                                        <div class="flex h-10 w-10 items-center justify-center">
                                            2
                                        </div>
                                    </div>
                                    <div
                                        class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                                        Account Setup
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group after:hidden before:hidden after:lg:block before:lg:block first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20 last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20 last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20 first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20">
                                <div class="flex items-center">
                                    <div
                                        class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                                        <div class="flex h-10 w-10 items-center justify-center">
                                            3
                                        </div>
                                    </div>
                                    <div
                                        class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                                        Additional Details
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <form action="{{route('candidate.profile.update')}}" enctype="multipart/form-data" method="POST">

                            @csrf
                            <div class="mt-7">
                                <div class="box box--stacked flex flex-col">
                                    <div class="p-7">
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Profile Photo</div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Upload a clear and recent profile photo.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex items-center">
                                                    <div
                                                        class="relative flex h-24 w-24 items-center justify-center rounded-full border border-primary/10 bg-primary/5">
                                                        <i data-tw-merge="" data-lucide="user"
                                                            class="-mt-1.5 h-[65%] w-[65%] fill-slate-300/70 stroke-slate-400/50 stroke-[0.5]"></i>

                                                        <!-- Hidden File Input -->
                                                        <input type="file" id="upload" name="image" accept="image/*" class="hidden"
                                                            onchange="handleFileUpload(event)" />

                                                        <!-- Pencil Icon Trigger -->
                                                        <a
                                                            class="box absolute bottom-0 right-0 flex h-7 w-7 items-center justify-center rounded-full cursor-pointer">
                                                            <label for="upload" class="cursor-pointer">
                                                                <i data-tw-merge="" data-lucide="pencil"
                                                                    class="h-3.5 w-3.5 stroke-[1.3] text-slate-500"></i>
                                                            </label>
                                                        </a>
                                                    </div>
                                                    {{-- <button data-tw-merge=""
                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-xs py-1.5 px-2 border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-8 mr-2 h-8 pl-3.5 pr-4"><i
                                                            data-tw-merge="" data-lucide="trash2"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Remove</button> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Full Name</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Enter your full legal name as it appears on your official
                                                        identification.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input data-tw-merge="" name="first_name" type="text" placeholder="Julia"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <input data-tw-merge="" name="last_name" type="text" placeholder="Roberts"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Date of Birth</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        This information is required to verify your age and
                                                        provide age-appropriate services.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input data-tw-merge="" type="date"  name="dob"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Gender</div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Select your gender from the options.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <div
                                                        class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <div data-tw-merge="" class="flex items-center"><input  name="male"
                                                                data-tw-merge="" type="radio"
                                                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50"
                                                                id="checkbox-switch-1" value="1">
                                                            <label data-tw-merge="" for="checkbox-switch-1"
                                                                class="cursor-pointer ml-2">Male</label>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <div data-tw-merge="" class="flex items-center"><input name="female"
                                                                data-tw-merge="" type="radio"
                                                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50"
                                                                id="checkbox-switch-2" value="1">
                                                            <label data-tw-merge="" for="checkbox-switch-2"
                                                                class="cursor-pointer ml-2">Female</label>
                                                        </div>
                                                    </div>
                                                    {{-- <div
                                                        class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <div data-tw-merge="" class="flex items-center"><input
                                                                data-tw-merge="" type="radio"
                                                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50"
                                                                id="checkbox-switch-3" value="">
                                                            <label data-tw-merge="" for="checkbox-switch-3"
                                                                class="cursor-pointer ml-2">Prefer Not to Say</label>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Email</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Please provide a valid email address that you have access
                                                        to.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input data-tw-merge="" type="text" name="email" value="{{Auth::user()->email}}"
                                                    placeholder="julia.roberts@left4code.com"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Phone Number</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Please provide a valid phone number where we can reach you
                                                        if needed.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input data-tw-merge="" type="text" name="phone" placeholder="+1 (234) 567-8901"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <select data-tw-merge=""
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 md:w-36 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <option value="office">Office</option>
                                                        <option value="home">Home</option>
                                                    </select>
                                                </div>
                                                {{-- <a class="-mb-1 mt-3.5 flex items-center font-medium text-primary"
                                                    href="#">
                                                    <i data-tw-merge="" data-lucide="plus"
                                                        class="mr-1 h-4 w-4 stroke-[1.3]"></i>
                                                    Add phone
                                                </a> --}}
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Bio data</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Please provide a detailed info about yourself and craft.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">

                                                    <textarea data-tw-merge="" id="editor"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                                        name="bio" id="" cols="30" rows="10"></textarea>

                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Department</div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Choose your department or division from the list of
                                                        available options.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <select data-tw-merge="" name="department"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                                    <option value="Engineering">
                                                        Engineering
                                                    </option>
                                                    <option value="Product Management">
                                                        Product Management
                                                    </option>
                                                    <option value="Human Resources">
                                                        Human Resources
                                                    </option>
                                                    <option value="Sales Department">
                                                        Sales Department
                                                    </option>
                                                    <option value="Data Analytics">
                                                        Data Analytics
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                        <button data-tw-merge="" type="submit"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                                data-tw-merge="" data-lucide="pocket"
                                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>
