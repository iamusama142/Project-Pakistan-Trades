{{-- @import url(https://fonts.googleapis.com/earlyaccess/notonaskharabic.css); --}}
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            font-family: , 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .urdu {
            font-family: 'Noto Nastaliq Urdu';
        }

        .left {
            left: 0;
            background-color: white;
        }

        .right {
            right: 0;
            background-color: white;
        }

        /* style for incoive */
        * {
            font-weight: 600;
            font-size: 16px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            width: 35px;
        }

        .c {
            text-align: center;
        }

        #p_name {
            color: red;
            font-weight: 800;
        }

        .r {
            text-align: right;
        }

        .container+.container {
            margin-top: 500px;
        }

        h2 {
            padding-top: 10px;
        }

        .f {
            text-align: center;
            font-size: 30px;
            margin-top: -10px;
        }

    </style>
</head>

<body>
    <?php
    // $namefilter = 0;

    // foreach ($wheatsalepurchase as $lists) {
    //     $namefilter = $lists->purchasername;

    // }
    ?>

    <div class="container">
        <div class="split left">
            <div class="centered">
                <div class="container col-sm-6">
                    <h1 class="c h" style="font-size: 25px"> Pakistan Traders, Galla Mandi RYK </h1>
                    <h1 class="f"></h1>
                    <br>
                    <h1 class="c" id="p_name" style="margin-top: -20px">Name:




                    </h1>
                    <br>
                    <tr>

                    </tr>
                    <br>

                    <table style="width:100%" cellspacing="2" cellpadding="5">
                        <tr>
                            <td class="" colspan="3"">Id</td>

                            <td class=" " colspan="3"">Invoice No:</td>
                                <td class="   " colspan="3"">Date:</td>
                                <td class="   " colspan="3"">Purchaser Name:</td>
                                <td class="   " colspan="3">Net Wt</td>
                            <td class="" colspan="3"">Bouri Rate</td>
                                <td class="   " colspan="3"">Thela Rate</td>
                                <td class="   " colspan="3"">B.Wt</td>
                                <td class="   " colspan="3"">E.Wt</td>
                                <td class="   " colspan="3"">Rate</td>
                                <td class="   " colspan="3">Vehicle Rent</td>
                            <td class="" colspan="3"">Net Amount</td>
                            </tr>




                              @foreach ($wheatsalepurchase as $lists)
                        <tr>
                            <td class="" colspan="3">PCEC- {{ $id }}</td>
                            <td class="" colspan="3">PCEC- {{ $lists->invoiceno }}</td>
                            <td class="" colspan="3">{{ $lists->date }}</td>
                            <td class="" colspan="3">{{ $lists->accountname }}</td>
                            <td class="" colspan="3">{{ $lists->p_firstwt }}</td>
                            <td class="" colspan="3">{{ $lists->p_bourirate }}</td>
                            <td class="" colspan="3">{{ $lists->p_thelarate }}</td>
                            <td class="" colspan="3">{{ $lists->p_bwt }}</td>
                            <td class="" colspan="3">{{ $lists->p_ewt }}</td>
                            <td class="" colspan="3">{{ $lists->p_rate }}</td>
                            <td class="" colspan="3">{{ $lists->p_vrent }}</td>
                            <td class="" colspan="3">{{ $lists->p_netamount }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</div>
