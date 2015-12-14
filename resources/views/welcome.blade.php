<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {

                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-size:    cover;                      
                background-repeat:   no-repeat;
                background-position: center center;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                color : white;
            }

            .title {
                font-size: 96px;
                color : white;
            }
            #bg {
                background-image: url('freelancer-desk.jpg');
                background-position: center top;
                background-size: 1080px auto;
                padding: 70px 50px 120px 50px;
            }

            #search {
                padding: 20px;
                background: rgb(34,34,34); /* for IE */
                background: rgba(34,34,34,0.75);
            }

            #search h2, #search h5, #search h5 a { text-align: center; color: #fefefe; font-weight: normal; }
            #search h2 { margin-bottom: 50px }
            #search h5 { margin-top: 70px }

            a:link {
                color: green;
            }

            /* visited link */
            a:visited {
                color: blue;
            }

            /* mouse over link */
            a:hover {
                color: hotpink;
            }

            /* selected link */
            a:active {
                color: red;
            }
            a {font-size: 51px}

        </style>
    </head>
    <body background="http://localhost:8888/jodmai/resources/assets/images/nnn.jpg">
    
        <div class="container">
            <div id="bg">
            <div id="search">
            <div class="content">
                <div class="title">Jodmai</div>
                <div class="body">you need to log in first</div>
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                <li><a href="{{ url('/auth/register') }}">Register</a></li>
                <br>
                <div class="body">jodmail.com power by 89degreeStudio</div>
            </div>
            </div>
            </div>
        </div>
    </body>
</html>
