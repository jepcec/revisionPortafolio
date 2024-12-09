<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portafolio docente</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                margin: 0;
                font-family: 'Figtree', sans-serif;
                background-color: #1a202c; /* Dark background */
                color: #edf2f7; /* Light text */
                display: flex;
                flex-direction: column;
                height: 100vh;
            }
            .navbar {
                background: #2d3748; /* Navbar background */
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            .logo {
                display: flex;
                align-items: center;
            }
            .logo img {
                height: 40px; /* Adjust the size of the logo */
                margin-right: 10px;
            }
            .nav-links {
                display: flex;
                align-items: center;
            }
            .nav-link {
                margin-left: 15px;
                padding: 8px 16px;
                text-decoration: none;
                color: #edf2f7; /* Light text */
                background: #4a5568; /* Button background */
                border-radius: 4px;
                transition: background 0.3s, color 0.3s;
            }
            .nav-link:hover {
                background: #718096; /* Hover background */
                color: #1a202c; /* Dark text */
            }
            .center-content {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .center-box {
                width: 400px;
                background: #2d3748; /* Slightly lighter background */
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
                text-align: center;
            }
            .header {
                margin-bottom: 20px;
                font-size: 18px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <div class="navbar">
            <!-- Logo -->
            <div class="logo">
                <img src="https://th.bing.com/th/id/R.0ca4de3bb4de6b2842baf0e972144cb3?rik=M7OVR9cnJwf0Lw&riu=http%3a%2f%2fccomputo.unsaac.edu.pe%2fadmision%2fimages%2fUNSAAC_Logo.png&ehk=MUAD49cabWJV8lV2Loc9SSzrXC9FgSRms7tMonRYv3c%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" alt="Logo" />
                <span>Portafolio Docente</span>
            </div>

            <!-- Links -->
            <div class="nav-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

        <!-- Main Content -->
        <div class="center-content">
            <div class="center-box">
                <div class="header">
                    Bienvenido a Portafolio Docente
                </div>
                <p>
                    Esta es una plataforma diseñada para la gestión y revisión del portafolio docente.
                </p>
            </div>
        </div>
    </body>
</html>
