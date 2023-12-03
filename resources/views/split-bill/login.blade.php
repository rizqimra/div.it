<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body {
            margin: 0;
            font-family: Poppins;
            background-color: #B1C49E;
        }

        .container {
            margin: 100px auto;
            width: 80%;
            display: flex;
            border-radius: 20px;
            box-shadow: -3px 5px 4px rgba(0, 0, 0, 0.4);
        }

        .info-cont {
            flex-basis: 50%;
            border-radius: 20px 0px 0px 20px;
            background-color: #D0DCC4;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-cont {
            flex-basis: 50%;
            background-color: #F0F2EE;
            border-radius: 0px 20px 20px 0px;
            padding: 70px 50px;
        }

        .info {
            text-align: center;
            color: #616C55;
            font-size: 24px;
            text-shadow: -3px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .login {
            text-align: left;
            font-size: 24px;
        }

        form {
            font-size: 24px;
        }

        input[type="text"],
        input[type="password"] {
            margin: 10px 0px 20px;
            padding: 10px;
            width: calc(100% - 20px);
            border: none;
            background-color: #F0F2EE;
            box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.4);
        }

        button[type="submit"] {
            margin: 20px 0px 20px;
            padding: 10px;
            width: 100%;
            border: none;
            background-color: #A0B68A;
            border-radius: 20px;
            font-size: 20px;
            color: #fff;
            cursor: pointer;
        }

        .signup-text {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        .signup-text a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="info-cont">
            <p class="info"> DIV.IT is a revolutionary platform designed to simplify the process of splitting bills and
                expenses among groups of people. Div.it streamlines the entire process.</p>
        </div>
        <div class="login-cont">
            <p class="login">
                WELCOME BACK TO DIV.IT</p>
            <form id="login-form" action="{{ route('actionlogin') }}" method="POST">
                @csrf
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" required />
                <br />

                <label for="pw">Password</label>
                <input type="password" id="pw" name="password" required />
                <br />

                <button type="submit">
                    Login
                </button>
            </form>
            <p class="signup-text">Don't have an account? <a href="{{ url('/register') }}">Sign up here</a></p>
        </div>
    </div>
</body>

</html>
