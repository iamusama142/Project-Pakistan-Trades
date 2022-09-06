
@extends('master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-dark">Manage Groups</h1>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;"
                                        id="datatable">
                                        <thead>
                                            <tr>
                                                <th class="text-dark"> <center>Id </center></th>
                                                <th class="text-dark"> <center>Group Name </center></th>
                                                <th class="text-dark"> <center> Edit </center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td><center>{{ $item->id }} </center> </td>
                                                <td><center>{{ $item->groupname }} </center> </td>
                                                <td><center><a href="update/{{ $item->id }}" class="btn btn-danger">Edit</a> </center> </td>
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
