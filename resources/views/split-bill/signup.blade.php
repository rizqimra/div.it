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
            border-radius: 0px 20px 20px 0px;
            background-color: #D0DCC4;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .signup-cont {
            flex-basis: 50%;
            background-color: #F0F2EE;
            border-radius: 20px 0px 0px 20px;
            padding: 50px;
        }

        .info {
            text-align: center;
            color: #616C55;
            font-size: 24px;
            text-shadow: -3px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .signup {
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

        .login-text {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        .login-text a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .login-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="signup-cont">
            <p class="signup">
                WELCOME TO DIV.IT
Are you new here?</p>
            <form id="signup-form" action="{{ route('actionregister') }}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required />
                <br />

                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" required />
                <br />

                <label for="pw">Password</label>
                <input type="password" id="pw" name="password" required />
                <br />

                <label for="cpw">Confirm Password</label>
                <input type="password" id="cpw" name="password_confirmation" required />
                <br />

                <button type="submit">
                    Sign Up
                </button>
            </form>
            <p class="login-text">Have an account? <a href="{{ url('/login') }}">Login here</a></p>
        </div>
        <div class="info-cont">
            <p class="info"> DIV.IT is a revolutionary platform designed to simplify the process of splitting bills and
                expenses among groups of people. Div.it streamlines the entire process.</p>
        </div>
    </div>
</body>

</html>
