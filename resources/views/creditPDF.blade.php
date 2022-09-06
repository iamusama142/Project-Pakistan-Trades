{{-- @import url(https://fonts.googleapis.com/earlyaccess/notonaskharabic.css); --}}
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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
    <div class="container">
        <div class="split left">
            <div class="centered">
                <div class="container col-sm-6">
                    <h1 class="c h" style="font-size: 25px"> Pakistan Traders, Galla Mandi RYK </h1>
                    <h1 class="f"></h1>
                    <br>
                    @foreach ($grouplist as $lists)
                    @endforeach

                    <p class="f" style="font-size: 15px; margin-top:-15px;">Account Name:
                        <span style="color: red; font-size:20px;">{{ $lists->accountname }}</span>
                    </p>
                    <p class="f" style="font-size: 15px; margin-top:-15px;">Date:
                        <span
                        style="color: red; font-size:20px;"> <?php echo date('d-m-Y'); ?></span>
                    </p>


                    {{-- <p class="f" style="font-size: 15px; margin-top:-15px;">Date:
                        <span style="color: red; font-size:20px;">{{ date('d-m-Y', strtotime($lists->date)) }}</span>
                    </p> --}}
                    <p class="f">(Crdit Voucher)</p>
                    <table style="width:100%" cellspacing="2" cellpadding="5">
                        <tr>



                            <td class="         " colspan="3"">Account Name:</td>
                            <td class="     " colspan="3">Ammount</td>
                            <td class="" colspan="3"">Description</td>



                            </tr>

   @foreach ($grouplist as $lists)
                                {
                        <tr>
                            {{-- <td class="" colspan="3">{{ $lists->date }}</td> --}}
                            <td class="" colspan="3">{{ $lists->accountname }}</td>
                            <td class="" colspan="3">{{ $lists->c_ammount }}</td>
                            <td class="" colspan="3">{{ $lists->c_description }}</td>
                        </tr>
                        @endforeach





                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</div>
