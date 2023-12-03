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
            align-items: center;
        }

        .topnav {
            overflow: hidden;
            background-color: #D0DCC4;
            padding: 10px 120px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .topnav img.logo {
            margin: 10px;
            height: 30px;
            float: left;
        }

        .topnav .right-menu {
            float: right;
        }

        .topnav .right-menu img {
            width: 30px;
            margin: 10px;
            cursor: pointer;
        }

        .container {
            border-radius: 20px;
            background: #F0F2EE;
            width: 40%;
            flex-shrink: 0;
            margin: 40px auto;
            padding: 20px;
        }

        h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            margin: 0px 20px 20px 20px;
            align-items: center;
        }

        label {
            font-size: 20px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            margin: 10px 0px 10px auto;
            padding: 10px;
            width: 100%;
            border-radius: 20px;
            background-color: white;
            border: none;
        }

        table {
            margin-top: 10px;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 5px;
            border-radius: 5px;
            padding-left: 40px;
            padding-right: 40px;
        }

        td:first-child {
            width: 25%;
        }

        td:nth-child(2) {
            width: 75%;
        }

        button {
            font-size: 16px;
            font-family: Poppins, sans-serif;
            padding: 8px;
            border-radius: 20px;
            border: 1px solid rgba(0, 0, 0, 0.10);
            width: 100%;
            background: #A0B68A;
            color: white;
            border: none;
            cursor: pointer;
            margin: 6px;
            text-align: center;
        }

        .button-container {
            justify-content: center;
            margin: 40px auto;
            width: 50%;
            align-items: center;
        }

        .delete {
            font-size: 16px;
            font-family: Poppins, sans-serif;
            padding: 8px;
            border-radius: 20px;
            border: 1px solid rgba(0, 0, 0, 0.10);
            width: 100%;
            background: #ab2c2c;
            color: white;
            border: none;
            cursor: pointer;
            margin: 6px;
            text-align: center;
        }

        button:hover {
            background-color: #D6E2C9;
            color: #37733e;
            box-shadow: 1px 1px #37733e, 2px 2px #37733e, 3px 3px #37733e;
            transform: translateX(-3px);
        }
    </style>
</head>

<body>
    <div class="topnav">
        <img src="{{ URL::asset('img/logo.png') }}" alt="Logo" class="logo">
        <div class="right-menu">
            <a href="{{ url('/create') }}"><img src="{{ URL::asset('img/hitung_bill.png') }}" alt="Create Bill"></a>
            <a href="{{ url('/history') }}"><img src="{{ URL::asset('img/bill_history.png') }}" alt="Bill History"></a>
            <a href="{{ url('/profile') }}"><img src="{{ URL::asset('img/profile.png') }}" alt="Profile"></a>
        </div>
    </div>
    <div class="container">
        <h1>
            Edit Profile
        </h1>
        <form>
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label>
                    <td>
                        <input type="text" id="username" required />
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">E-Mail</label>
                    <td>
                        <input type="text" id="email" required />
                    </td>
                    </td>
                </tr>
            </table>
        </form>
        <div class="button-container">
            <form action="{{ url('/admin-dashboard') }}" method="get">
                <button class="delete">
                    Delete Bill History
                </button>
                <button type="submit">
                    Update
                </button>
            </form>
        </div>

    </div>
</body>

</html>