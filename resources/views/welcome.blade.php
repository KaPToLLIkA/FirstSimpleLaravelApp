<!DOCTYPE html>
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
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                width: 800px;
                height: 600px;
                text-align: center;
            }

            .title {
                font-size: 80px;
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


            table {
                margin-top: 60px;
                margin-bottom: 120px;
            }

            tr {
                text-align: left;
                color: black;
                font-size: 20px;
                width: 800px;
            }

            .head_tr {
                text-align: center;
                color: black;
                font-size: 40px;
                width: 800px;
            }

            td {
                border-top: 1px solid #636b6f;
                width: 400px;
                padding-bottom: 10px;
            }

            .head_td {
                width: 400px;
                border-top: 0;
            }

            input[type=text], select, textarea {
                width: 772px;
                padding: 12px;
                border: 1px solid #636b6f;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 20px;
                float: left;
            }

            input[type=submit] {
                width: 100%;
                background-color: #636b6f;
                color: white;
                padding: 20px;
                margin-top: 60px;
                margin-bottom: 120px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #adadad;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @section('content')
                    <div class="title m-b-md">
                        Laravel task
                    </div>

                    <div class="links">
                        <a href="http://laravel.task/send">Send message</a>
                        <a href="http://laravel.task/show">Show all messages</a>
                    </div>
                @show
            </div>
        </div>
    </body>
</html>
