<html>
    <head>
        <title>Picshare</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #fff;
                font-weight: 100;
                font-family: 'Lato';
                background-color: #3498db;
            }

            .container {
                text-align: center;
                
            }

            .navbar {
                width: inherit;
                height: 48px;
                background-color: #fff;
                color: #000;
            }

            .content {
                margin-left: 20%;
                margin-right: 20%;
                margin-top: 40px;
            }

            .content img {
                max-width: 100%;
                height: auto;
                margin: auto;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .title small {
                font-size: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
            <p class="float:right;"><strong>{{ $name }}</strong> <a href="{{ "./" . $hash . "/download" }}">Download</a></p>
            </div>
            <div class="content">
                <img src="data:{{ $mime }};base64,{{ base64_encode($image) }}" />
            </div>
        </div>
    </body>
</html>