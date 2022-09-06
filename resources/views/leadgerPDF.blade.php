<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        * {
            font-family: , 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .split {
            width: 49%;
            position: fixed;

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
            width: 45px;
            padding: 5px;
        }

        .c {
            text-align: center;
        }

    </style>



</head>

<body>

    <center>
        <h1 style="font-size: 30px">Pakistan Traders Galla Mandi (RYK)</h1>
        <p style="font-size: 17px;">Purchaser Name:
            @foreach ($PDFReport as $pdfleadger)
            @endforeach
            <span style="color: red; font-size:20px;">{{ $pdfleadger->accountname }}</span>


        </p>


            <p style="font-size: 15px; margin-top:-15px;">Reporting From &nbsp;&nbsp;
                <span
                    style="color: red; font-size:20px;">{{ date('d-m-Y', strtotime($from)) }}</span>&nbsp;&nbsp;to&nbsp;&nbsp;<span
                    style="color: red; font-size:20px;"> <?php echo date('d-m-Y'); ?></span>
            </p>





    </center>



    <table style="width:100%">

        <td class="c" colspan="6">Opening Balance:
            <?php if (isset($openbalance)) {
                echo $openbalance;
            }
            ?>
        </td>



        <thead>
            <tr>


                <td class="c" colspan="1">Voucher Type</td>
                <td class="c" colspan="1">Date</td>
                <td class="c" colspan="1">Description</td>
                <td class="c" colspan="1">Debit</td>
                <td class="c" colspan="1">Credit</td>
                <th class="c" colspan="1">Balance</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($PDFReport as $pdfleadger)
                <tr>

                    <td class="c" colspan="1">
                        {{ $pdfleadger->voucher_type }}
                    </td>
                    <td class="c" colspan="1">{{ $pdfleadger->date }}</td>
                    <td class="c" colspan="1">{{ $pdfleadger->decription }}</td>
                    <td class="c" colspan="1">{{ $pdfleadger->Debit }}</td>
                    <td class="c" colspan="1">{{ $pdfleadger->Credit }}</td>
                    <td class="c" colspan="1">
                        {{ $openbalance = $openbalance + $pdfleadger->Credit - $pdfleadger->Debit }}</td>

                </tr>
            @endforeach

            <td class="c" colspan="6">Closing Balance: <?php if (isset($openbalance)) {
    echo $openbalance;
}
?></td>

        </tbody>
    </table>

</body>

</html>
