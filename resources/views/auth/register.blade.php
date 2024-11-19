<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}


    <x-slot name="body">
        <!-- Info Section -->
        <div class="login-section">
            <div class="image-layer" style="background-image: url(/onboarding/images/background/Black-men.jpg);"></div>
            <div class="outer-box">
                <!-- Login Form -->
                <div class="login-form default-form">


                    <div class="form-inner">
                        <h3>Create Account</h3>

                        @if ($errors->any())
                        <div class="p-4 mb-4 bg-red-100 rounded-lg text-red-700">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Form Selector Buttons -->
                        <div class="form-group">
                            <div class="btn-box row">
                                <div class="col-lg-6 col-md-12">
                                    <button id="candidateBtn" class="theme-btn btn-style-three active"><i class="la la-user"></i> Candidate</button>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <button id="employerBtn" class="theme-btn btn-style-three"><i class="la la-briefcase"></i> Employer</button>
                                </div>
                            </div>
                        </div>

                        <!-- Candidate Form -->
                        <div id="candidateForm" class="form-section">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <input type="hidden" name="who" value="candidate">

                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password-field" type="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-field" type="password" name="password_confirmation" value="" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="Register">Register</button>
                                </div>
                            </form>
                        </div>

                        <!-- Employer Form -->
                        <div id="employerForm" class="form-section" style="display: none;">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Company Email</label>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <input type="hidden" name="who" value="employer">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password-field" type="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="password-field" type="password" name="password_confirmation" value="" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="Register">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Login Form -->
            </div>
        </div>
        <!-- End Info Section -->

    </x-slot>

</x-guest-layout>
