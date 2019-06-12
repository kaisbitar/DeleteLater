<!doctype html>

@if (Route::has('login'))
    @auth
        <script>window.location = "home";</script>
    @endauth
@endif

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>

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
                display: block;
                justify-content: center;
            }

            .position-ref {
                position: relative;
                height: 121px;
                margin-top: 10%;
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
            .menu {
                max-width: 403px;
    margin-left: auto;
    margin-right: auto;
    font-size: 51px;
    /* display: flex; */
    margin-top: 51px;
}
            .m-b-md {
                margin-bottom: 30px;
            }
            div#trgr-intro {
                font-size: 32px;
                display: grid;
                grid-template-rows: 77% 75%;
                justify-content: center;
            }
            div#trgr-intro img {
                width: 23px;
                margin-left: auto;
                margin-right: auto;
            }
            .linksCont a {
                margin-left: auto;
    margin-right: auto;
    text-decoration: none;
}
.login {
    /* height: 121px; */
    /* margin-top: 41px; */
    margin-right: auto;
    margin-left: auto;
    display: flex;
    /* width: 611px; */
}
.linksCont {
    display: block;
    width: 199px;
    margin-left: auto;
    margin-right: auto;}
.links {
    background: #d8bfd852;
    margin-bottom: 11px;
    }
    .links:hover {
    background: #ffaace52;
    cursor: pointer;
}
            @media  screen and (max-width: 400px){
                .login{
                    display: block;
                }
            }
        </style>
    </head>
    <body>
       

            <div class="content">
                <div class="title m-b-md">
                    <div class="flex-center position-ref full-height">
                        <div id="trgr-intro">Sample Application For 
                            <img src="https://trgr.ca/app/themes/triggercom/dist/images/logo.jpg">
                        </div>
                        @if (Route::has('login'))
                            <div class="menu">
                                <div class="login">
                                    @auth
                                        <script>window.location = "home";</script>
                                    @else
                                    <div class="linksCont">
                                        <div class=" links">
                                            <a href="{{ route('login') }}">Login</a>
                                        </div>    
                                    </div>
                                    @if (Route::has('register'))
                                    <div class="linksCont">
                                        <div class=" links">
                                            <a href="{{ route('register') }}">Register</a>
                                        </div>
                                    </div>
                                    @endif
                                    @endauth
                                </div>
                            </div>
                        @endif                
                    </div>
                </div>    
            </div>
    </body>
</html>