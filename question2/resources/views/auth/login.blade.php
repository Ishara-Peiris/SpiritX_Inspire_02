<x-guest-layout>
    <style>
        .bg-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('img/back.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-card h2 {
            margin-bottom: 25px;
            font-size: 1.8rem;
            font-weight: 500;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            padding: 10px;
        }

        .form-group {
            margin-bottom: 20px; /* Adjusts space between label-input pairs */
        }

        .form-group label {
            display: block;
            margin-bottom: 8px; /* Adds space between label and input field */
            font-size: 1rem;
            font-weight: 500;
            color: #fff;
        }

        .form-group input {
            padding: 12px 15px; /* Adjust input padding */
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
            text-align: center;
            width: 100%;
        }

        .form-group input:focus {
            background: rgba(255, 255, 255, 0.3);
            outline: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .btn-primary {
            background-color: #ff7f00;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: 500;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e66e00;
            transform: scale(1.05);
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 127, 0, 0.5);
        }
    </style>

    <div class="bg-container">
        <div class="login-card">
            <h2 class="text-center text-white mb-4">Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" class="text-white" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                    </div>
                </div>
                
                <div class="form-group">
                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" class="text-white" />
                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label text-white">{{ __('Remember me') }}</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a class="text-white" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                    @endif

                    <x-primary-button class="btn-primary">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
