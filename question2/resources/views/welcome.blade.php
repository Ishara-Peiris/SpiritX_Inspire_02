<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cricket</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            /* Custom Styles */
            .btn-orange {
                background-color: #ff7f00;
                color: white;
                border: none;
                padding: 12px 24px;
                font-size: 18px;
                font-weight: 500;
                border-radius: 8px;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }

            .btn-orange:hover {
                background-color: #e66e00;
                transform: scale(1.05);
            }

            .btn-orange:focus {
                box-shadow: 0 0 0 0.25rem rgba(255, 127, 0, 0.5);
            }

            h1 {
                font-family: 'instrument-sans', sans-serif;
                font-size: 3rem;
                font-weight: 600;
                color: #333;
            }

            p.lead {
                font-family: 'instrument-sans', sans-serif;
                font-size: 1.5rem;
                font-weight: 400;
                color: #555;
            }

            .container {
                padding: 50px 0;
            }
        </style>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        
        <!-- Landing Section -->
        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <!-- Left Image Section -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('img/home.jpg') }}" alt="Cricket Image" class="img-fluid rounded-3">
            </div>
            <!-- Right Button Section -->
            <div class="col-lg-6 text-lg-end">
                <h1 class="display-4 mb-3">Cricket Arena</h1>
                <p class="lead mb-4">The Ultimate Inter-University Fantasy Cricket Game!</p>
                <div class="d-flex justify-content-lg-end gap-3">
                    @auth
                        <a
                            href="{{ url('/redirect') }}"
                            class="btn-orange"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn-orange"
                        >
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="btn-orange"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
