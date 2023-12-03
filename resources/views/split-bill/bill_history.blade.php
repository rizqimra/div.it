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
            width: 80%;
            flex-shrink: 0;
            margin: 40px;
            padding: 20px;
        }

        p {
            text-align: center;
        }

        .tanggal {
            font-weight: bold;
            text-decoration: underline;
            text-align: center;
        }

        table {
            margin-top: 10px;
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 5px;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
        }

        td:first-child {
            width: 50%;
        }

        td:nth-child(2) {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <a href="{{ url('/create') }}"><img src="{{ URL::asset('img/logo.png') }}" alt="Logo" class="logo"></a>
        <div class="right-menu">
            <a href="{{ url('/create') }}"><img src="{{ URL::asset('img/hitung_bill.png') }}" alt="Create Bill"></a>
            <a href="{{ url('/history') }}"><img src="{{ URL::asset('img/bill_history.png') }}" alt="Bill History"></a>
            <a href="{{ url('/profile') }}"><img src="{{ URL::asset('img/profile.png') }}" alt="Profile"></a>
        </div>
    </div>
    <table>
        <tr>
            <td>
                <div class="container">
                    <p class="tanggal">
                        01/10/2023
                    </p>
                    <table>
                        <tr>
                            <td>
                                Total Members
                            </td>
                            <td>
                                3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total Costs
                            </td>
                            <td>
                                Rp 11.000,00
                            </td>
                        </tr>
                    </table>
                    <p>
                        <a href="{{ url('/bill') }}">See details</a>
                    </p>
                </div>
            </td>
            <td>
                <div class="container">
                    <p class="tanggal">
                        01/10/2023
                    </p>
                    <table>
                        <tr>
                            <td>
                                Total Members
                            </td>
                            <td>
                                3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total Costs
                            </td>
                            <td>
                                Rp 11.000,00
                            </td>
                        </tr>
                    </table>
                    <p>
                        <a href="{{ url('/bill') }}">See details</a>
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container">
                    <p class="tanggal">
                        01/10/2023
                    </p>
                    <table>
                        <tr>
                            <td>
                                Total Members
                            </td>
                            <td>
                                3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total Costs
                            </td>
                            <td>
                                Rp 11.000,00
                            </td>
                        </tr>
                    </table>
                    <p>
                        <a href="{{ url('/bill') }}">See details</a>
                    </p>
                </div>
            </td>
            <td>
                <div class="container">
                    <p class="tanggal">
                        01/10/2023
                    </p>
                    <table>
                        <tr>
                            <td>
                                Total Members
                            </td>
                            <td>
                                3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total Costs
                            </td>
                            <td>
                                Rp 11.000,00
                            </td>
                        </tr>
                    </table>
                    <p>
                        <a href="{{ url('/bill') }}">See details</a>
                    </p>
                </div>
            </td>
        </tr>
    </table>

</body>

</html>