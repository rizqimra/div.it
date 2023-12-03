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
            width: 80%;
            background-color: #F0F2EE;
            padding: 10px;
            margin: 40px auto;
            border-radius: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            margin: 10px;
            margin-bottom: 30px;
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
            width: 75%;
        }

        td:nth-child(2) {
            width: 25%;
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
        <h1>tanggal</h1>
        <form>
            <table>
                <tr>
                    <td>
                        Haniefa
                    <td>
                        Rp 3.000,00
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        Putri
                    <td>
                        Rp 4.000,00
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        Rizqi
                    <td>
                        Rp 4.000,00
                    </td>
                    </td>
                </tr>
            </table>
        </form>
</body>
<script>

</script>

</html>