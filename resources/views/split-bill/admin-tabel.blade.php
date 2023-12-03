    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <style>
            h1 {
                text-align: center;
            }

            .button {
                border: none;
                color: white;
                padding: 5px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 15px;
                margin: 4px 2px;
                border-radius: 12px;
                transition: background-color 0.3s ease;
            }

            .red {
                background-color: #A47373;
            }

            .green {
                background-color: #83996D;
            }

            .button:hover {
                background-color: #555;
            }

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

            table {
                width: 80%;
                border-collapse: collapse;
                margin: 20px auto;
                border-radius: 5px;
                overflow: hidden;
                background-color: #fff;
                box-shadow: 0 20px 20px rgba(0, 0, 0, 0.1);
            }

            th,
            td {
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: #C3D3BB;
            }

            .opt {
                text-align: center;
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
        <h1>CHANGE USER DATA</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th></th>
            </tr>
            <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td class="opt">
                <button class="button red">Delete</button>
                <button class="button green" onclick="redirectToEditUser()">Edit</button>
            </td>
        </tr>
        </table>
    </body>
    <script>
        function redirectToEditUser() {
            window.location.href = "{{ url('admin-edit-user') }}";
        }
    </script>

    </html>