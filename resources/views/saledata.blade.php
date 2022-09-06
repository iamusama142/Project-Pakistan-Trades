@extends('master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <form class="form-inline" action="/saledata" method="post" class="mx-auto">
                                    @csrf
                                    <span style="margin-top:8px;margin-left:100px">
                                        <h5><label class="text-dark" for="AccountName">Select
                                                Name:</label>
                                        </h5>
                                        <div class="form-group">
                                            <select class="form-control" id="exampleSelect" name="AccountName" required>
                                                <option value="">--Select--</option>
                                                @foreach ($account as $list)
                                                    <option value="{{ $list->id }}">{{ $list->accountname }}
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
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;"
                                        id="datatable">
                                        <thead>
                                            <tr>


                                                <th>InvoiceNo</th>
                                                <th>Date</th>
                                                <th>Gate No</th>
                                                <th>Vehicle No</th>
                                                <th>Purchasername</th>
                                                <th>Sellername</th>
                                                <th>Bouri Total</th>
                                                <th>Thela Total</th>
                                                <th>First Weight</th>
                                                <th>Bar Difference</th>
                                                <th>First Weight Difference</th>
                                                <th>Rate Difference</th>
                                                <th>Bar Rupee</th>
                                                {{-- <th>Vrent Difference</th> --}}
                                                <th>Total Amount Difference</th>








                                                {{-- <th>s_thelatwototal</th>

                                                <th>s_netwt</th>

                                                <th>s_totalamount</th>

                                                <th>s_netamount</th>
                                                <th>purchasenetamount</th>
                                                <th>salenetamount</th>
                                                <th style="background-color: green" class="text-white">profit</th>
                                                <th style="background-color: red" class="text-white">loss</th>

                                                <th>Firstbouridifference</th>
                                                <th>Firstbouriratedifference</th>
                                                <th>Firstbouritotaldifference</th>
                                                <th>Seconfbouridifference</th>
                                                <th>Seconfbouriratedifference</th>
                                                <th>Seconfbouritotaldifference</th>
                                                <th>Firsttheladifference</th>
                                                <th>Firstthelaratedifference</th>
                                                <th>secondthelaratedifference</th>
                                                <th>Secondthelatotaldifference</th>
                                                <th>wtdifference</th>
                                                <th>ewtdifference</th>
                                                <th>netewtdifference</th> --}}
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
                                                        $post = DB::table('addaccounts')
                                                            ->where('id', $sellerid)
                                                            ->get();
                                                        ?>
                                                        {{ $post[0]->accountname }}
                                                    </td>
                                                    <td>{{ $ViewsPages->s_bouritotal }}</td>
                                                    <td>{{ $ViewsPages->s_thelatotal }}</td>
                                                    <td>{{ $ViewsPages->s_firstwt }}</td>
                                                    <td>{{ $ViewsPages->barrsdifference }}</td>
                                                    <td>{{ $ViewsPages->wtdifference }}</td>
                                                    <td>{{ $ViewsPages->ratedifference }}</td>
                                                    <td>{{ $ViewsPages->s_barrs }}</td>
                                                    {{-- <td>{{ $ViewsPages->vrentdifference }}</td> --}}
                                                    <td>{{ $ViewsPages->totalamountdifference }}</td>




                                                    {{-- <td>{{ $ViewsPages->s_bouritwototal }}</td>


                                                    <td>{{ $ViewsPages->s_thelatwototal }}</td>

                                                    <td>{{ $ViewsPages->s_netwt }}</td>

                                                    <td>{{ $ViewsPages->s_totalamount }}</td>

                                                    <td>{{ $ViewsPages->s_netamount }}</td>
                                                    <td>{{ $ViewsPages->purchasenetamount }}</td>
                                                    <td>{{ $ViewsPages->salenetamount }}</td>
                                                    <td style="background-color: green" class="text-white">
                                                        {{ $ViewsPages->profit }}</td>
                                                    <td style="background-color: red" class="text-white">
                                                        {{ $ViewsPages->loss }}</td>

                                                    <td>{{ $ViewsPages->firstwtdifference }}</td>
                                                    <td>{{ $ViewsPages->firstbouridifference }}</td>
                                                    <td>{{ $ViewsPages->firstbouriratedifference }}</td>
                                                    <td>{{ $ViewsPages->firstbouritotaldifference }}</td>
                                                    <td>{{ $ViewsPages->seconfbouridifference }}</td>
                                                    <td>{{ $ViewsPages->seconfbouriratedifference }}</td>
                                                    <td>{{ $ViewsPages->seconfbouritotaldifference }}</td>
                                                    <td>{{ $ViewsPages->firsttheladifference }}</td>
                                                    <td>{{ $ViewsPages->firstthelaratedifference }}</td>
                                                    <td>{{ $ViewsPages->secondthelaratedifference }}</td>
                                                    <td>{{ $ViewsPages->secondthelatotaldifference }}</td>
                                                    <td>{{ $ViewsPages->ewtdifference }}</td>
                                                    <td>{{ $ViewsPages->netewtdifference }}</td> --}}
                                                    <td><a href="/editsale/{{ $ViewsPages->id }}"><Button
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
