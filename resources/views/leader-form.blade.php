@extends('master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <form class="form-inline" action="/leadger" method="post" class="mx-auto">
                                    @csrf

                                    <span style="margin-top:8px;margin-left:100px">
                                        <h5><label class="text-dark" for="AccountName">Select
                                                Name:</label>
                                        </h5>
                                        <div class="form-group">
                                            <select class="form-control" name="AccountName">
                                                <option>--Select--</option>
                                                @foreach ($accountsdetails1 as $de)
                                                    <option value="{{ $de->accountcode }}">{{ $de->accountname }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </span>
                                    <span style="margin-left:30px;">
                                        <h5 class="text-dark">From:</h5>
                                        <input style="border-radius: 4px; border:1px solid rgb(77, 77, 77); padding:2px"
                                            class="form-group" type="date" name="fromDate" id="" required=>
                                    </span>
                                    <span style="margin-left: 30px;">
                                        <h5 class="text-dark">To:</h5>
                                        <input style="border-radius: 4px; border:1px solid rgb(77, 77, 77); padding:2px"
                                            class="form-group" type="date" name="toDate" id="" required=>
                                    </span>

                                    <span style="margin-left: 30px; margin-top:25px;">
                                        <button type="submit" name="search" class="btn btn-primary">Click for
                                            Output</button>
                                        <button type="submit" name="exportPDF" class="btn btn-danger">Download PDF</button>

                                    </span>

                                    <span style="margin-left: 30px; margin-top:25px">
                                        {{-- <a href="/download-pdf"><button type="button" class="btn btn-warning">Download
                                            PDF</button></a> --}}


                                        {{-- <a href="{{ route('downloadpdf',['download'=>'pdf']) }}">Download PDF</a> --}}
                                    </span>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center> Voucher Type </center>
                                                </th>
                                                <th>
                                                    <center> Voucher No</center>
                                                </th>
                                                <th>
                                                    <center> Account Name </center>
                                                </th>
                                                <th>
                                                    <center> Description</center>
                                                </th>
                                                <th>
                                                    <center> Date </center>
                                                </th>
                                                <th>
                                                    <center> Debit </center>
                                                </th>
                                                <th>
                                                    <center> Credit </center>
                                                </th>
                                                <th>
                                                    <?php

                                                    if (isset($openbalance)) {
                                                        echo '<center> Balance </center>';
                                                    }
                                                    ?>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p>
                                                <tr style="color: black">
                                                    Opening Balance:
                                                    <?php if (isset($openbalance)) {
                                                        echo $openbalance;
                                                    }
                                                    ?>
                                                </tr>
                                            </p>


                                            @foreach ($leadger as $list)
                                                <tr>
                                                    <td>
                                                        <center>{{ $list->voucher_type }}</center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->inv_id }}</center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->accountname }}</center>
                                                    </td>
                                                    <td><b>
                                                            <center>{{ $list->decription }} </center>
                                                        </b></td>
                                                    <td>
                                                        <center>{{ date('d-m-Y', strtotime($list->date)) }}</center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->Debit }}</center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->Credit }}</center>
                                                    </td>
                                                    <td>
                                                        <?php if (isset($openbalance)) {
                                                            $balancedetail = $openbalance + $list->Credit - $list->Debit;

                                                            echo $balancedetail;
                                                        }
                                                        ?>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            <p>
                                                <tr style="color: black">
                                                    Closing Balance:
                                                    <?php if (isset($openbalance)) {
                                                        echo $balancedetail;
                                                    }
                                                    ?>
                                                </tr>
                                            </p>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
        @endsection
