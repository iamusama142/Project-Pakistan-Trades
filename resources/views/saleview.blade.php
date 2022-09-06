@extends('master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <form class="form-inline" action="/salepurchasedata" method="post" class="mx-auto">
                                    @csrf
                                    <span style="margin-top:8px;margin-left:100px">
                                        <h5><label class="text-dark" for="AccountName">Select
                                                Name:</label>
                                        </h5>
                                        <div class="form-group">
                                            <select class="form-control" id="exampleSelect" name="AccountName">
                                                <option value="">--Select--</option>
                                                @foreach ($group_show_name as $list)
                                                    <option value="{{ $list->id }}">{{ $list->accountname }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </span>
                                    <span style="margin-left:30px;">
                                        <h5 class="text-dark">From:</h5>
                                        <input style="border-radius: 4px; border:1px solid rgb(77, 77, 77); padding:2px"
                                            class="form-group" type="date" name="fromDate" id="">
                                    </span>
                                    <span style="margin-left: 30px;">
                                        <h5 class="text-dark">To:</h5>
                                        <input style="border-radius: 4px; border:1px solid rgb(77, 77, 77); padding:2px"
                                            class="form-group" type="date" name="toDate" id="">
                                    </span>

                                    <span style="margin-left: 30px; margin-top:25px;">
                                        <button type="submit" name="search" class="btn btn-primary">Click for
                                            Output</button>
                                        <button type="submit" name="exportPDF" class="btn btn-danger">Download PDF</button>

                                    </span>


                                </form>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;"
                                        id="datatable">
                                        <thead>
                                            <tr>


                                                <th>InvoiceNo</th>
                                                <th>Date</th>
                                                <th>Gate No</th>
                                                <th>Vehicle No</th>
                                                <th>Purchasername</th>
                                                <th>Seller Name</th>

                                                <th>Product</th>
                                                <th>Bouri Total</th>
                                                <th>Thela Total</th>
                                                <th>First Weight</th>
                                                <th>Bar Difference</th>
                                                <th>First Weight Difference</th>
                                                <th>Rate Difference</th>
                                                <th>Bar Rupee</th>
                                                <th>Vrent Difference</th>
                                                <th>Total Amount Difference</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ViewsPage as $ViewsPages)
                                                <tr>
                                                    <td>{{ $ViewsPages->invoiceno }}</td>
                                                    <td>{{ $ViewsPages->date_create }}</td>
                                                    <td>{{ $ViewsPages->s_gateno }}</td>
                                                    <td>{{ $ViewsPages->s_vehicleno }}</td>
                                                    <td>
                                                        <?php
                                                        $pid = $ViewsPages->purchasername;

                                                        $posts = DB::table('addaccounts')
                                                            ->where('id', $pid)
                                                            ->get();

                                                        ?>

                                                        {{ $posts[0]->accountname }}

                                                    </td>
                                                    <td>
                                                        <?php
                                                        $sellerid = $ViewsPages->sellername;

                                                        $posts= DB::table('addaccounts')
                                                            ->where('id', $sellerid)
                                                            ->get();

                                                        ?>
                                                        {{ $posts[0]->accountname }}
                                                        </td>

                                                    <td>{{ $ViewsPages->s_product }}</td>
                                                    <td>{{ $ViewsPages->s_bouritotal }}</td>
                                                    <td>{{ $ViewsPages->s_thelatotal }}</td>
                                                    <td>{{ $ViewsPages->s_firstwt }}</td>
                                                    <td>{{ $ViewsPages->barrsdifference }}</td>
                                                    <td>{{ $ViewsPages->wtdifference }}</td>
                                                    <td>{{ $ViewsPages->ratedifference }}</td>
                                                    <td>{{ $ViewsPages->s_barrs }}</td>
                                                    <td>{{ $ViewsPages->vrentdifference }}</td>
                                                    <td>{{ $ViewsPages->totalamountdifference }}</td>

                                                    <td><a href="/editsalepurchase/{{ $ViewsPages->id }}"><Button
                                                                class="btn btn-danger">Edit</Button></a></td>
                                                </tr>
                                            @endforeach

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
