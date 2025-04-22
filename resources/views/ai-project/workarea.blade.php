<x-ai-project.layout-component>

    <x-slot name="content">


        {{-- <div class="breadcrumb">
            <div class="w-layout-blockcontainer container w-container">
                <div class="breadcrumb-content">
                    <div data-w-id="a689ed34-c533-8427-1144-dbf4c73d5020" class="breadcrumb-nav"><a href="/"
                            class="link">Home</a>
                        <div class="breadcrumb-nav-divider">/</div>
                        <div class="breadcrumb-nav-text">Work-Area</div>
                    </div>
                    <h1 data-w-id="a689ed34-c533-8427-1144-dbf4c73d5027" class="page-title">Let’s Build You files Together
                    </h1>
                </div>
            </div>
        </div> --}}
        <div class="main">
            <section class="section benefits">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="benefits-block">
                        <div class="heading-block is-benefits">
                            <h2 data-w-id="2750b49e-f3a5-41af-730f-5a77f295728e" style="opacity:1"
                                class="heading-title">Datei zum Konvertieren hochladen</h2>
                            {{-- <p data-w-id="f042040d-e630-37fb-d44b-001c6e4f062d" style="opacity:1" class="section-text">
                               </p> --}}
                        </div>

                        @php

                        // dd($ai);
                        @endphp

                        <div class="w-layout-grid benefit-grid">
                            <div data-w-id="c8856594-cce7-d6ad-05bb-d9856dd5958b" style="opacity:1"
                                class="benefit-card">
                                <div class="benefit-icon">
                                    <a href="/storage/converted/{{$ai->pdf}}" target="_blank" rel="noopener noreferrer">
                                        <img src="/converted/{{$ai->pdf}}" loading="lazy"
                                        alt="Innovative" />
                                    </a>


                                    </div>
                                <h3 class="benefit-title">Datei hochladen</h3>
                                <p>Klicken Sie auf die Datei, um diese zu Prüfen.</p>
                            </div>
                            <div data-w-id="c8856594-cce7-d6ad-05bb-d9856dd5958b" style="opacity:0"
                                class="benefit-card">
                                <div class="benefit-icon"><img src="/ai-project/images/choose-us-icon-1.svg" loading="lazy"
                                        alt="Innovative" /></div>
                                <h3 class="benefit-title">Innovative</h3>
                                <p>Make a tangible impact with your work. At AI Gen, you’re not just another employee.
                                </p>
                            </div>
                            <div data-w-id="2cd8e49f-9ee0-348e-e690-4eca1fa7ad4c" style="opacity:1"
                                class="benefit-card">
                                <div class="benefit-icon"><img src="/ai-project/images/efficiency-icon.svg" loading="lazy"
                                        alt="Career Growth" /></div>
                                <h3 class="benefit-title">Konvertierte Datei</h3>
                                <p>Klicken Sie auf die Datei, um diese zu Prüfen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </x-slot>

</x-ai-project.layout-component>
