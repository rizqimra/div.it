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

        input[type="number"] {
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

            background: #A0B68A;
            color: #3f4351;
            border: none;
            cursor: pointer;
            margin: 6px;
            text-align: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin: 40px;
        }

        .button-container button {
            width: 50%;
        }

        button:hover {
            background-color: #D6E2C9;
            color: #37733e;
            box-shadow: 1px 1px #37733e, 2px 2px #37733e, 3px 3px #37733e;
            transform: translateX(-3px);
        }

        .contmemb {
            width: 100%;
            display: flex;
        }

        .membcont {
            width: 20%;
            padding: 5px;
            margin: 10px;
            border-radius: 20px;
            border: none;
            background-color: #37733e;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <img src="img/logo.png" alt="Logo" class="logo">
        <div class="right-menu">
            <a href="hitung_bill.html"><img src="img/hitung_bill.png" alt="Create Bill"></a>
            <a href="bill_history.html"><img src="img/bill_history.png" alt="Bill History"></a>
            <a href="profile.html"><img src="img/profile.png" alt="Profile"></a>
        </div>
    </div>
    <div class="container">
        <h1>BILL</h1>
        <form>
            <table>
                <tr>
                    <td>
                        <label for="totalcost">Total Cost</label>
                    <td>
                        <input type="number" id="totalcost" required />
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="totalmemb">Total Members</label>
                    <td>
                        <input type="number" id="totalmemb" required />
                    </td>
                    </td>
                </tr>
            </table>
        </form>

        <div class="button-container">
            <button type="button" onclick="splitEqually()">Split Equally</button>
            <button type="button" onclick="splitUnequally()">Split Unequally</button>
        </div>
        <div id="equallySection" style="display:none;">
            <table>
                <tr>
                    <td>Members</td>
                    <td>
                        <div class="contmemb">
                            <button class="membcont" onclick="redirectToEditMember()">
                                Haniefa
                            </button>
                            <button class="membcont" onclick="redirectToEditMember()">
                                Putri
                            </button>
                            <button class="membcont" onclick="redirectToEditMember()">
                                Rizqi
                            </button>
                            <button onclick="redirectToAddMember()">
                                + Add Member
                            </button>
                        </div>

                    </td>
                </tr>
            </table>
            <div class="button-container">
                <button onclick="calculate()">
                    Calculate
                </button>
            </div>

        </div>

        <div id="unequallySection" style="display:none;">
            <form>
                <table>
                    <tr>
                        <td>
                            <label for="tax">Tax</label>
                        <td>
                            <input type="number" id="tax" required />
                        </td>
                        </td>
                        <td>
                            %
                        </td>
                    </tr>
                    <tr>
                        <td>Members</td>
                        <td>
                            <div class="contmemb">
                                <button class="membcont" onclick="redirectToEditMember()">
                                    Haniefa
                                </button>
                                <button class="membcont" onclick="redirectToEditMember()">
                                    Putri
                                </button>
                                <button class="membcont" onclick="redirectToEditMember()">
                                    Rizqi
                                </button>
                                <button onclick="redirectToAddMember()">
                                    + Add Member
                                </button>
                            </div>
    
                        </td>
                    </tr>
                </table>                
            </form>

            <div class="button-container">
                <button onclick="calculate()">
                    Calculate
                </button>
            </div>
    </div>
</body>
<script>
    function splitEqually() {
        document.getElementById('equallySection').style.display = 'block';
        document.getElementById('unequallySection').style.display = 'none';
    }

    function splitUnequally() {
        document.getElementById('equallySection').style.display = 'none';
        document.getElementById('unequallySection').style.display = 'block';
    }
    function redirectToEditMember() {
        window.location.href = "editmember.html";
    }
    function redirectToAddMember() {
        window.location.href = "addmember.html";
    }
    function calculate() {
        window.location.href = "calculate.html";
    }
</script>

</html>