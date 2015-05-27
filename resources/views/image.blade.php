<html>
    <head>
        <title>Picshare</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100,400" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">


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
                padding-top: 4px;
            }

            .top {
                width: inherit;
                height: 48px;
                background-color: #fff;
                color: #000;
            }

            .top .fa {
                font-size: 40px;
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

            .name {
                font-size: 20px;
                padding-top: 6px;
                font-weight: 400;
                display: block;
                max-width: 400px;
            }
        </style>
    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="name pull-left">{{ $name }}</div> <a class="pull-right" href="{{ "./" . $hash . "/download" }}"><i class="fa fa-arrow-circle-down"></i></a>
            </div>
            <div class="content">
                <img src="data:{{ $mime }};base64,{{ base64_encode($image) }}" />
            </div>
        </div>
    </body>
</html>