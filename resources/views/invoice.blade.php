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
            @foreach ($PDFReport as $PDFReports)
            @endforeach
            <?php
        //   $posts= DB::table('pak_traders')->select('purchasername')
        //         ->where('id', 1)
        //         ->get();

            // $posts = App\Models\pakTrader::latest()->first('purchasername');

            ?>

            <span style="color: red; font-size:20px;">{{ $PDFReports->accountname }}</span>


        </p>

        <p style="font-size: 15px; margin-top:-15px;">Reporting From&nbsp;&nbsp;
            <span
                style="color: red; font-size:20px;">{{ date('d-m-Y', strtotime($PDFReports->date_create)) }}</span>&nbsp;&nbsp;to&nbsp;&nbsp;<span
                style="color: red; font-size:20px;"> <?php echo date('d-m-Y'); ?></span>
        </p>
    </center>


    <table style="width:100%">
        <tr>
            <td class="c" colspan="1">Invoice No:</td>
            <td class="c" colspan="1">Date:</td>
            <td class="c" colspan="1">Purchaser Name:</td>
            <td class="c" colspan="1">Net Wt</td>
            <td class="c" colspan="1">Bouri Rate</td>
            <td class="c" colspan="1">Thela Rate</td>
            <td class="c" colspan="1">B.Wt</td>
            <td class="c" colspan="1">E.Wt</td>
            <td class="c" colspan="1">Rate</td>
            <td class="c" colspan="1">Vehicle Rent</td>
            <td class="c" colspan="1">Net Amount</td>
        </tr>

        @for ($pdfextra = 0; $pdfextra < 70; $pdfextra++)

            @foreach ($PDFReport as $PDFReports)
                <tr>
                    <td class="c" colspan="1">PCEC- {{ $PDFReports->invoiceno }}</td>

                    <td class="c" colspan="1">{{ $PDFReports->date_create }}</td>
                    <td class="c">
                        <?php
                        $pid = $PDFReports->purchasername;
                        $posts = DB::table('addaccounts')
                            ->where('id', $pid)
                            ->get();
                        ?>
                        {{ $posts[0]->accountname }}
                    </td>
                    <td class="c" colspan="1">{{ $PDFReports->p_firstwt }}</td>
                    <td class="c" colspan="1">{{ $PDFReports->p_bourirate }}</td>
                    <td class="c" colspan="1">{{ $PDFReports->p_thelarate }}</td>
                    <td class="c" colspan="1">{{ $PDFReports->p_bwt }}</td>
                    <td class="c" colspan="1">{{ $PDFReports->p_ewt }}</td>
                    <td class="c" colspan="1">{{ $PDFReports->p_rate }}</td>
                    <td class="c" colspan="1">{{ $PDFReports->p_vrent }}</td>
                    <td class="c" colspan="1">{{ $PDFReports->p_netamount }}</td>
                </tr>
            @endforeach
        @endfor

        <?php
        $netwt = 0;
        $bourirate = 0;
        $thelarate = 0;
        $bwt = 0;
        $ewt = 0;
        $rate = 0;
        $vrent = 0;
        $namount = 0;

        foreach ($PDFReport as $PDFReports) {
            $netwt += $PDFReports->p_firstwt;
            $bourirate += $PDFReports->p_bourirate;
            $thelarate += $PDFReports->p_thelarate;
            $bwt += $PDFReports->p_bwt;
            $ewt += $PDFReports->p_ewt;
            $rate += $PDFReports->p_rate;
            $vrent += $PDFReports->p_vrent;
            $namount += $PDFReports->p_netamount;
        }
        ?>
        <tr>
            <td class="c" colspan="1"></td>
            <td class="c" colspan="1"></td>
            <td class="c" colspan="1">Total</td>
            <td class="c" colspan="1">{{ $netwt }}</td>
            <td class="c" colspan="1">{{ $bourirate }}</td>
            <td class="c" colspan="1">{{ $thelarate }}</td>
            <td class="c" colspan="1">{{ $bwt }}</td>
            <td class="c" colspan="1">{{ $ewt }}</td>
            <td class="c" colspan="1">{{ $rate }}</td>
            <td class="c" colspan="1">{{ $vrent }}</td>
            <td class="c" colspan="1">{{ $namount }}</td>
        </tr>

    </table>
</body>

</html>
