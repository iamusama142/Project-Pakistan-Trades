@extends('master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-dark">Manage Accounts</h1>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;"
                                        id="datatable">
                                        <thead>
                                            <tr>
                                                <th class="text-dark">
                                                    <center> Account Group </center>
                                                </th>
                                                <th class="text-dark">
                                                    <center> Account Code </center>
                                                </th>
                                                <th class="text-dark">
                                                    <center> Account Name </center>
                                                </th>
                                                <th class="text-dark">
                                                    <center> Account Phone </center>
                                                </th>
                                                <th class="text-dark">
                                                    <center> Account Phone2 </center>
                                                </th>
                                                <th class="text-dark">
                                                    <center> Account Address </center>
                                                </th>
                                                <th class="text-dark">
                                                    <center> Edit </center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($accountlist as $list)
                                                <tr>
                                                    <td>
                                                        <center>{{ $list->accountgroup }} </center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->accountcode }} </center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->accountname }} </center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->phone }} </center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->phonetwo }} </center>
                                                    </td>
                                                    <td>
                                                        <center>{{ $list->address }} </center>
                                                    </td>
                                                    <td>
                                                        <center><a href="{{ route('account.edit', $list->id) }}"><Button
                                                                    class="btn btn-danger">Edit</Button></a> </center>
                                                    </td>
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
