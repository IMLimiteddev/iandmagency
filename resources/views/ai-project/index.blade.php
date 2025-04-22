<x-ai-project.layout-component>

    <x-slot name="content">

        <main class="main">
            <section data-w-id="2aeafc65-933b-92a8-5f59-145ba1dbf2c4" class="section hero">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="hero-content-block">
                        <h1 data-w-id="05ebf71f-3feb-936f-86fe-1a0186ccd847" style="opacity:0" class="hero-heading">Datei zum Konvertieren hochladen</h1>
                        {{-- <p data-w-id="d981cc41-6be7-25bc-6a78-20947d5b9d9c" style="opacity:0" class="hero-text">
                            Experience Unparalleled Speed and Accuracy in File Conversion.</p> --}}
                        <div data-w-id="d0d5dbb4-1084-0781-2ee1-aad2c13c988c" style="opacity:0" class="search-block">
                            <form enctype="multipart/form-data" action="{{route('ai.upload.file')}}" method="POST" class="hero-search w-form"><input class="search-input w-input"
                                    maxlength="256" name="file" placeholder="Effortless file conversion" type="file"
                                    id="search" required="" />

                                    @csrf
                                <div class="button-wrap is-search">
                                    <div data-hover="false" data-delay="0" class="search-dropdown w-dropdown">
                                        <div class="search-toggle w-dropdown-toggle">
                                            <div class="icon w-icon-dropdown-toggle"></div>
                                            <div class="dropdown-text">File</div>
                                        </div>
                                        <nav class="search-list w-dropdown-list"><a href="#"
                                                class="search-text-link w-dropdown-link">Pdf</a><a href="#"
                                                class="search-text-link w-dropdown-link">Csv</a><a href="#"
                                                class="search-text-link w-dropdown-link">Excel</a></nav>
                                    </div>
                                    <div data-w-id="258d8105-7d37-1f2a-8fec-c28d67552947" class="button-outline"><input
                                            type="submit" class="button is-icon w-button" value="Convert" />
                                        <div style="display:none" class="button-hover-effect"></div>
                                    </div>
                                    {{-- <div class="discover-circle-icon"><img loading="lazy"
                                        src="/ai-project/images/efficiency-icon.svg" alt="Upload Icon"
                                        class="discover-icon" /> --}}
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="hero-content-bottom">
                            <div data-w-id="f8499955-2e94-0907-f9d2-20f70b7f6465" style="opacity:0"
                                class="hero-inner-text">
                                <div class="innter-text">Need inspiration? Try these:</div>
                                <div class="sub-title">The future with flying cars and robotic life</div>
                            </div>
                            <div data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ea" style="opacity:0"
                                class="reviews-holder">
                                <div class="reviewer-image-group"><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ed" alt="Avatar"
                                        src="/ai-project/images/reviewer-1.avif" loading="lazy"
                                        class="reviewer-avatar" /><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ee" alt="Avatar"
                                        src="/ai-project/images/reviewer-2.avif" loading="lazy"
                                        class="reviewer-avatar" /><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358ef" alt="Avatar"
                                        src="/ai-project/images/reviewer-3.avif" loading="lazy"
                                        class="reviewer-avatar" /><img style="opacity:0"
                                        data-w-id="3a7b5682-5676-d4ee-e7dd-5409e4f358f0" alt="Avatar"
                                        src="/ai-project/images/reviewer-4.avif" loading="lazy"
                                        class="reviewer-avatar" /></div>
                                <div class="vertical-line"></div>
                                <div class="review-content"><img loading="lazy" src="/ai-project/images/review-star.svg"
                                        alt="Star Icon" />
                                    <div class="hero-review-text">Rated 5.0/5.0 by users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="hero-thumbnail-block"><img src="/ai-project/images/hero-left-two.avif" loading="lazy"
                        alt="Hero Image" class="hero-image bottom-left" /><img
                        src="/ai-project/images/hero-left-one.avif" loading="lazy" alt="Hero Image"
                        class="hero-image top-left" /><img src="/ai-project/images/hero-right-one.avif" loading="lazy"
                        alt="Hero Image" class="hero-image right-top" /><img
                        src="/ai-project/images/hero-right-two.avif" loading="lazy" alt="Hero Image"
                        class="hero-image right-bottom" /></div> --}}
            </section>




        </main>
    </x-slot>

</x-ai-project.layout-component>
