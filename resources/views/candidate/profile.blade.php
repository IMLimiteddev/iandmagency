<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <div class="box box--stacked flex flex-col p-1.5">
                            <div
                                class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                                <div
                                    class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]">
                                </div>
                                <div class="absolute inset-x-0 top-0 mx-auto mt-24 h-32 w-32">
                                    <div
                                        class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                                        <img src="{{$user?->info?->image}}" alt="codeBrown">
                                    </div>
                                    @if ($user?->info?->is_active == 1)

                                    <div
                                        class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                                    </div>

                                    @else

                                    <div
                                        class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-danger">
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
                                <div class="flex items-center justify-center text-xl font-medium">
                                    {{$user?->info?->first_name}} {{$user?->info?->last_name}}
                                    <i data-tw-merge="" data-lucide="badge-check"
                                        class="stroke-[1] w-5 h-5 ml-2 fill-blue-500/30 text-blue-500"></i>
                                </div>
                                <div
                                    class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
                                    <div class="flex items-center text-slate-500">
                                        <i data-tw-merge="" data-lucide="briefcase"
                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                        {{$user?->info?->department}}
                                    </div>
                                    <div class="flex items-center text-slate-500">
                                        <i data-tw-merge="" data-lucide="mountain-snow"
                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                        <a href="#">{{$user?->info?->country ? $user?->info?->country : "Not added
                                            yet"}}</a>
                                    </div>
                                    <div class="flex items-center text-slate-500">
                                        <i data-tw-merge="" data-lucide="signal"
                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                        {{$user?->info?->phone}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                                <ul data-tw-merge="" role="tablist"
                                    class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">
                                    <li id="example-1-tab" data-tw-merge="" role="presentation"
                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                        <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Profile</button>
                                    </li>
                                </ul>

                            </div>

                            <div class="tab-content">
                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1"
                                    role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7">


                                        <div class="col-span-12 xl:col-span-8">
                                            <div class="flex flex-col gap-y-7">
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div
                                                        class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-large">
                                                        Work Experience
                                                    </div>
                                                    @foreach ($works as $work)

                                                    <div class="-my-3">
                                                        <div
                                                            class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        {{$work?->company_name ? $work->company_name :
                                                                        "Not Added Yet."}}
                                                                    </a>

                                                                    <div class="container mt-4 mb-4">

                                                                        <span class="text-success">
                                                                            <h3>Job Description:</h3>
                                                                        </span>

                                                                        <br>

                                                                        <span
                                                                            class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                                            <span class="-mt-px truncate">
                                                                                {{ $work?->job_description ?
                                                                                $work->job_description : "Not Added
                                                                                Yet."}}
                                                                            </span>
                                                                        </span>
                                                                    </div>

                                                                    <div
                                                                        class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">

                                                                        {{-- <div class="container">

                                                                            <span></span>
                                                                        </div> --}}

                                                                        Role:
                                                                        <span
                                                                            class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                            {{-- <span
                                                                                class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                            --}}
                                                                            <span class="-mt-px">
                                                                                {{$work?->role ? $work->role : "Not
                                                                                Added Yet."}}
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex">


                                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                                            Start date:
                                                                            {{$work?->work_start_yr ?
                                                                            $work->work_start_yr : "Not Added Yet."}}
                                                                        </div>


                                                                        <div
                                                                            class="mt-1.5 text-xs text-slate-500 ml-2 mr-2">
                                                                            -To-
                                                                        </div>


                                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                                            End date:
                                                                            {{$work?->work_end_yr ? $work->work_end_yr :
                                                                            "Not Added Yet."}}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="m-5">
                                                        <hr>
                                                    </div>

                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-span-12 xl:col-span-8">
                                            <div class="flex flex-col gap-y-7">
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div
                                                        class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                        Educational Experience
                                                    </div>

                                                    @foreach ($eds as $ed)
                                                    <div class="-my-3">
                                                        <div
                                                            class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        {{$ed?->school ? $ed?->school: "Not Added
                                                                        Yet."}}
                                                                    </a>
                                                                    <div
                                                                        class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">

                                                                        {{$ed?->educational_description ?
                                                                        $ed?->educational_description: "Not Added
                                                                        Yet."}}
                                                                        <span
                                                                            class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                            <span
                                                                                class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                            <span class="-mt-px">
                                                                                Educational Description
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="mt-1.5 text-xs text-slate-500">
                                                                        {{$ed?->education_start_yr}} to
                                                                        {{$ed?->education_end_yr}}
                                                                    </div>

                                                                    <div
                                                                        class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">

                                                                        {{$ed?->degree ? $ed?->degree: "Not Added
                                                                        Yet."}}
                                                                        <span
                                                                            class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                            <span
                                                                                class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                            <span class="-mt-px">
                                                                                Degree obtained
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        Uploaded Proof file
                                                                    </a>

                                                                    <div style="display: flex">
                                                                        Click File to view

                                                                        <a target="blank"
                                                                            href="{{$ed?->degree_upload}}">

                                                                            <i data-tw-merge="" data-lucide="image"
                                                                                class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>

                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="m-5">
                                                        <hr>
                                                    </div>
                                                    @endforeach
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-span-12 xl:col-span-8">
                                            <div class="flex flex-col gap-y-7">
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div
                                                        class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                        Projects/Media Files
                                                    </div>
                                                    <div class="-my-3">
                                                        <div
                                                            class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        Uploaded presentations
                                                                    </a>

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        Project Files
                                                                    </a>

                                                                    <div
                                                                        class="my-3.5 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-1/2">
                                                                        <div
                                                                            class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-12">
                                                                            @foreach ($medias?->where('title', "!=",
                                                                            null) as $media)


                                                                            <a href="{{$media->media_upload}}">
                                                                                <label for="">{{$media->title}}</label>

                                                                                <div
                                                                                    class="image-fit h-24 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                                    <img data-action="zoom"
                                                                                        src="{{$media->media_upload}}"
                                                                                        alt="pdf">
                                                                                </div>
                                                                            </a>
                                                                            @endforeach

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        Uploaded intro video
                                                                    </a>

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        Intro video
                                                                    </a>

                                                                    <div
                                                                        class="my-3.5 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-1/2">
                                                                        <div
                                                                            class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-12">
                                                                            @foreach ($medias?->where('title',
                                                                            null) as $media)


                                                                            <a href="{{$media->intro_video}}"
                                                                                target="blank">
                                                                                {{-- <label
                                                                                    for="">{{$media->title}}</label>
                                                                                --}}

                                                                                <div
                                                                                    class="image-fit h-200 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                                    <video
                                                                                        src="{{$media->intro_video}}"></video>
                                                                                </div>
                                                                            </a>
                                                                            @endforeach

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                            <div
                                                                class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                                <div
                                                                    class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                    <a class="font-medium text-primary" href="#">
                                                                        Uploaded CV
                                                                    </a>

                                                                    {{-- <div>
                                                                        <div>



                                                                            <a href="{{$media->cv_upload}}"
                                                                                target="blank">
                                                                                Click to view this CV
                                                                            </a>

                                                                        </div>
                                                                    </div> --}}


                                                                    <div class="grid grid-cols-12 gap-3 sm:gap-3.5">

                                                                        @foreach ($medias?->where('cv_upload',"!=",
                                                                        null) as $media)
                                                                        <a href="{{$media->cv_upload}}" target="_blank"
                                                                            rel="noopener noreferrer">
                                                                            <div
                                                                                class="col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                                                                                <div
                                                                                    class="relative cursor-pointer rounded-[0.6rem] border border-slate-200/80 px-3 pb-5 pt-8 shadow-sm transition hover:bg-slate-50 sm:px-5">

                                                                                    <div class="mx-auto w-2/4">
                                                                                        <div
                                                                                            class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-empty-directory">
                                                                                        </div>
                                                                                    </div>
                                                                                    <a class="mt-4 block truncate text-center font-medium capitalize"
                                                                                        href="#">
                                                                                        Cv file
                                                                                    </a>
                                                                                    <div
                                                                                        class="mt-1 text-center text-xs text-slate-500">
                                                                                        Click to view file
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </a>
                                                                        @endforeach


                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="relative col-span-12 row-start-1 xl:col-span-4 xl:col-start-9">
                                            <div class="sticky top-[6.2rem] flex flex-col gap-y-7">
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div>Profile Completion progress (83%)</div>
                                                    <div class="mt-3.5 flex h-2">
                                                        <div
                                                            class="h-full w-[25%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                                                        </div>
                                                        <div
                                                            class="h-full w-[100%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r">
                                                        </div>
                                                    </div>
                                                    <a href="#" data-tw-merge=""
                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary mt-5 w-full border-primary/20 bg-white text-primary hover:bg-primary/20"><i
                                                            data-tw-merge="" data-lucide="inbox"
                                                            class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                        Profile Settings</a>
                                                </div>
                                                <div class="box box--stacked flex flex-col p-5">
                                                    <div
                                                        class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                        Profile
                                                    </div>
                                                    <div class="flex flex-col gap-8">
                                                        <div>
                                                            <div class="text-xs uppercase text-slate-500">
                                                                Personal Data
                                                            </div>
                                                            <div class="mt-3.5">
                                                                <div class="flex items-center">
                                                                    <i data-tw-merge="" data-lucide="clipboard"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Department: {{$user?->info?->department}}
                                                                </div>
                                                                <div class="mt-3 flex items-center">
                                                                    <i data-tw-merge="" data-lucide="landmark"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Location: {{$user?->info?->location ?
                                                                    $user?->info->location : "Not Added Yet."}}
                                                                </div>
                                                                <div class="mt-3 flex items-center">
                                                                    <i data-tw-merge="" data-lucide="clock"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Is active:
                                                                    @if ($user?->info->is_active == 1)

                                                                    <div
                                                                        class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                                        <span class="-mt-px">

                                                                            Active

                                                                        </span>
                                                                    </div>
                                                                    @else
                                                                    <div
                                                                        class="ml-1 flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs font-medium text-danger">
                                                                        <span class="-mt-px">

                                                                            Inactive

                                                                        </span>
                                                                    </div>
                                                                    @endif

                                                                </div>
                                                                <div class="mt-3 flex items-center text-capitalize">
                                                                    <i data-tw-merge="" data-lucide="user"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Gender: {{$user?->info?->gender }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="text-xs uppercase text-slate-500">
                                                                Contacts
                                                            </div>
                                                            <div class="mt-3.5">
                                                                <div class="flex items-center">
                                                                    <i data-tw-merge="" data-lucide="clipboard"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Email:
                                                                    <a class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                        href="#">
                                                                        {{$user?->email}}
                                                                    </a>
                                                                </div>
                                                                <div class="mt-3 flex items-center">
                                                                    <i data-tw-merge="" data-lucide="calendar"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Phone Number:
                                                                    <a class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                        href="#">
                                                                        {{$user?->info?->phone}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="text-xs uppercase text-slate-500">
                                                                Statistics
                                                            </div>
                                                            <div class="mt-3.5">
                                                                <div class="mt-3 flex items-center">
                                                                    <i data-tw-merge="" data-lucide="clock"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Events:
                                                                    <div
                                                                        class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                                        <span class="-mt-px">5 events</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3 flex items-center">
                                                                    <i data-tw-merge="" data-lucide="map"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Request:
                                                                    <a class="ml-1 underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                        href="#">
                                                                        10
                                                                    </a>
                                                                </div>
                                                                <div class="mt-3 flex items-center">
                                                                    <i data-tw-merge="" data-lucide="pointer"
                                                                        class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                                    Engagements:
                                                                    <a class="ml-1 underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                                        href="#">
                                                                        2
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Events --}}

                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2"
                                    role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Company Retreat
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Team retreat in a scenic location
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Left4code</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        All Day
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atMeryl Streep"
                                                                    src="/dash/dist/images/users/user2-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atCate Blanchett"
                                                                    src="/dash/dist/images/users/user8-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atAngelina Jolie"
                                                                    src="/dash/dist/images/users/user4-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atLeonardo DiCaprio"
                                                                    src="/dash/dist/images/users/user3-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (76+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/company-retreat
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Community Cleanup
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Volunteer event to clean up the neighborhood
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Local Community Association</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        09:00 AM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atAngelina Jolie"
                                                                    src="/dash/dist/images/users/user4-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atJohnny Depp"
                                                                    src="/dash/dist/images/users/user7-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atCate Blanchett"
                                                                    src="/dash/dist/images/users/user8-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atJennifer Lawrence"
                                                                    src="/dash/dist/images/users/user6-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (83+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/community-cleanup
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Marketing Workshop
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Workshop on modern marketing strategies
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Marketing Pro</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        11:15 AM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atJohnny Depp"
                                                                    src="/dash/dist/images/users/user7-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atMeryl Streep"
                                                                    src="/dash/dist/images/users/user2-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atTom Hanks"
                                                                    src="/dash/dist/images/users/user1-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atBrad Pitt"
                                                                    src="/dash/dist/images/users/user5-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (35+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/marketing-workshop
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Team Building Workshop
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Team-building activities and games
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Team Builders Inc.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        10:00 AM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atCate Blanchett"
                                                                    src="/dash/dist/images/users/user8-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atTom Hanks"
                                                                    src="/dash/dist/images/users/user1-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atJennifer Lawrence"
                                                                    src="/dash/dist/images/users/user6-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atJulia Roberts"
                                                                    src="/dash/dist/images/users/user10-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (54+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/team-building
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Networking Mixer
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Networking event for professionals
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Networking Pro</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        07:30 PM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atDenzel Washington"
                                                                    src="/dash/dist/images/users/user9-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atJulia Roberts"
                                                                    src="/dash/dist/images/users/user10-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atMeryl Streep"
                                                                    src="/dash/dist/images/users/user2-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atBrad Pitt"
                                                                    src="/dash/dist/images/users/user5-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (98+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/networking-mixer
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Tech Conference
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Annual tech conference for developers
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Tech Events Inc.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        09:00 AM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atLeonardo DiCaprio"
                                                                    src="/dash/dist/images/users/user3-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atBrad Pitt"
                                                                    src="/dash/dist/images/users/user5-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atTom Hanks"
                                                                    src="/dash/dist/images/users/user1-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atDenzel Washington"
                                                                    src="/dash/dist/images/users/user9-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (73+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/tech-conference
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Holiday Party
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Annual holiday celebration and party
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Left4code</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        08:00 PM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atLeonardo DiCaprio"
                                                                    src="/dash/dist/images/users/user3-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atAngelina Jolie"
                                                                    src="/dash/dist/images/users/user4-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atJennifer Lawrence"
                                                                    src="/dash/dist/images/users/user6-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atCate Blanchett"
                                                                    src="/dash/dist/images/users/user8-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (31+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/holiday-party
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Customer Workshop
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Hands-on workshop for our customers
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">Left4code</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        10:30 AM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atLeonardo DiCaprio"
                                                                    src="/dash/dist/images/users/user3-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atJennifer Lawrence"
                                                                    src="/dash/dist/images/users/user6-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atCate Blanchett"
                                                                    src="/dash/dist/images/users/user8-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atAngelina Jolie"
                                                                    src="/dash/dist/images/users/user4-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (68+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/customer-workshop
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                            <a class="text-[0.94rem] font-medium text-primary" href="#">
                                                Webinar: AI in Healthcare
                                            </a>
                                            <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                Online webinar on AI applications in healthcare
                                            </div>
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Organizer:</div>
                                                    <div class="ml-auto">
                                                        <div
                                                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                            <span class="-mt-px">AI Experts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Available Seats:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                            <i data-tw-merge="" data-lucide="armchair"
                                                                class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Time:</div>
                                                    <div class="ml-auto text-slate-500">
                                                        03:00 PM
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Attendees:</div>
                                                    <div class="ml-auto">
                                                        <div class="flex items-center justify-center">
                                                            <div class="image-fit zoom-in h-6 w-6">
                                                                <img data-placement="top" title="Uploaded atBrad Pitt"
                                                                    src="/dash/dist/images/users/user5-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atJulia Roberts"
                                                                    src="/dash/dist/images/users/user10-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atDenzel Washington"
                                                                    src="/dash/dist/images/users/user9-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                                <img data-placement="top"
                                                                    title="Uploaded atCate Blanchett"
                                                                    src="/dash/dist/images/users/user8-50x50.jpg"
                                                                    alt="codeBrown"
                                                                    class="tooltip cursor-pointer rounded-full border-2 border-white">
                                                            </div>
                                                            <div class="ml-1 text-slate-500">
                                                                (48+)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="text-slate-500">Registration Link:</div>
                                                    <div class="ml-auto">
                                                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                            href="#">
                                                            https://left4code.com/ai-webinar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Request --}}

                                <div data-transition="" data-selector=".active"
                                    data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                    data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                    data-enter-to="visible opacity-100"
                                    data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                    data-leave-from="visible opacity-100"
                                    data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-4"
                                    role="tabpanel" aria-labelledby="example-4-tab" class="tab-pane">
                                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user4-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Angelina Jolie
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        San Francisco, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        July 10, 2012
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Account Management
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Account Executive
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    73+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user1-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Tom Hanks
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        New York, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        January 15, 2010
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Sales Department
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Sales Manager
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    82+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user7-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Johnny Depp
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Denver, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        October 7, 2013
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Product Management
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Product Manager
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    54+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user5-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Brad Pitt
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Seattle, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        September 3, 2016
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Data Analytics
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Data Analyst
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    77+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user6-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Jennifer Lawrence
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Miami, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        February 18, 2019
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            CRM Team
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            CRM Administrator
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    66+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user10-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Julia Roberts
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Austin, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        August 9, 2014
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Engineering
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Software Engineer
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    22+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user3-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Leonardo DiCaprio
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Chicago, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        May 5, 2018
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Support Team
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Support Specialist
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    91+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user8-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Cate Blanchett
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Houston, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        June 12, 2017
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Project Management
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Project Manager
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    44+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                                                        data-tw-merge="" data-lucide="check"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connected</button>
                                            </div>
                                        </div>
                                        <div
                                            class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                class="dropdown absolute right-0 top-0 mr-5 mt-5"><button
                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                                                        data-lucide="more-vertical"
                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                </button>
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
                                                                data-tw-merge="" data-lucide="copy"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Copy
                                                            Link</a>
                                                        <a
                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                data-tw-merge="" data-lucide="trash"
                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                            Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                                <div
                                                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                    <img src="/dash/dist/images/users/user2-50x50.jpg" alt="codeBrown">
                                                </div>
                                                <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                                    Meryl Streep
                                                </div>
                                                <div class="mt-2 flex items-center justify-center gap-3">
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="hotel"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        Los Angeles, USA
                                                    </div>
                                                    <div class="flex items-center text-slate-500">
                                                        <i data-tw-merge="" data-lucide="calendar"
                                                            class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                                        March 22, 2015
                                                    </div>
                                                </div>
                                                <div
                                                    class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Marketing Department
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                                                        <span class="-mt-px truncate">
                                                            Marketing Coordinator
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                                <div class="text-slate-500">
                                                    29+ Connections
                                                </div>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                                                        data-tw-merge="" data-lucide="user-plus"
                                                        class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Connect</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>
