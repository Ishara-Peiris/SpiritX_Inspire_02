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

        .register-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px; /* Increased max width for two columns */
            text-align: center;
        }

        .register-card h2 {
            margin-bottom: 25px;
            font-size: 1.8rem;
            font-weight: 500;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            padding: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
            font-weight: 500;
            color: #fff;
        }

        .form-group input {
            padding: 12px 15px;
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

        .two-column {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .two-column .form-group {
            flex: 1;
        }
    </style>

    <div class="bg-container">
        <div class="register-card">
            <h2 class="text-center text-white mb-4">Register</h2>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name and Email (Two input fields in one row) -->
                <div class="two-column">
                    <div class="form-group">
                        <x-input-label for="name" :value="__('Name')" class="text-white" />
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                    </div>

                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" class="text-white" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                    </div>
                </div>

                <!-- Phone and Address (Two input fields in one row) -->
                <div class="two-column">
                    <div class="form-group">
                        <x-input-label for="phone" :value="__('Phone')" class="text-white" />
                        <x-text-input id="phone" class="form-control" type="number" name="phone" :value="old('phone')" required autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="text-danger mt-2" />
                    </div>

                    <div class="form-group">
                        <x-input-label for="address" :value="__('Address')" class="text-white" />
                        <x-text-input id="address" class="form-control" type="text" name="address" :value="old('address')" required autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="text-danger mt-2" />
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a class="text-white" href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                    <x-primary-button class="btn btn-primary">{{ __('Register') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
