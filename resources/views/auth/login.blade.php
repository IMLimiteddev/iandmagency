<x-guest-layout>
    <x-slot name="body">

        {{-- <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}



    <!-- Info Section -->
    <div class="login-section">
        <div class="image-layer" style="background-image: url(/onboarding/images/background/12.jpg);"></div>
        <div class="outer-box">
          <!-- Login Form -->
          <div class="login-form default-form">
            <div class="form-inner">
              <h3>Login</h3>
              <!--Login Form-->
              <form method="post" action="#">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input id="password-field" type="password" name="password" value="" placeholder="Password">
                </div>

                <div class="form-group">
                  <div class="field-outer">
                    <div class="input-group checkboxes square">
                      <input type="checkbox" name="remember-me" value="" id="remember">
                      <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                    </div>
                    <a href="#" class="pwd">Forgot password?</a>
                  </div>
                </div>

                <div class="form-group">
                  <button class="theme-btn btn-style-two" type="submit" name="log-in">Log In</button>
                </div>
              </form>

              <div class="bottom-box">
                <div class="text">Don't have an account? <a href="register.html">Signup</a></div>
                <div class="divider"><span>or</span></div>
                <div class="btn-box row">
                  <div class="col-lg-6 col-md-12">
                    <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End Login Form -->
        </div>
      </div>
      <!-- End Info Section -->
    </x-slot>
</x-guest-layout>
