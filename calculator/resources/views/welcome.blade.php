<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Calculator
                </div>
                <div class="links">
                    <?php

                        $l1 = "To use this calculator, enter next to the url, the operation you want to perform.";
                        echo '<p>' .$l1. '</p>';
                        $l2 = "Example: http://127.0.0.1:8000/addition";
                        echo '<p>' .$l2. '</p>';
                        $l3 = "If you want to make an addition and next to it the two numbers you want to calculate.";
                        echo '<p>' .$l3. '</p>';
                        $l4 = "Example: http://127.0.0.1:8000/addition/1/1";
                        echo '<p>' .$l4. '</p>';
                        $l5 = "You can subtract, multiply and divide in the same way.";
                        echo '<p>' .$l5. '</p>';

                        $l6 = "To add, enter addition.";
                        echo '<p>' .$l6. '</p>';
                        $l7 = "To subtract, enter subtraction.";
                        echo '<p>' .$l7. '</p>';
                        $l8 = "To multiply, enter multiplication.";
                        echo '<p>' .$l8. '</p>';
                        $l9 = "To divide, enter division.";
                        echo '<p>' .$l9. '</p>';
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
