@extends('master')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <section role="main" class="content-body ">
                <div class="row">
                    <div class="col-lg-12">

                            <form action="/fullsubmit" method="post" >
                                @csrf
                                <section class="card">
                                    <header class="card-header">
                                        <div class="card-actions">
                                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                        </div>
                                        <h2 class="card-title text-dark">Add Accounts</h2>
                                    </header>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Account
                                                        Group</label>
                                                    <select id="acc-dropdown" name="acc_group" class="form-control"
                                                        required>
                                                        <option value="">Select</option>
                                                        @foreach ($group_data as $list)
                                                            <option>{{ $list->groupname }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Account
                                                        Code</label>
                                                    <input type="text" name="acc_code" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Account Code">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Account
                                                        Name</label>
                                                    <input type="text" name="acc_name" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Account Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Phone</label>
                                                    <input type="text" name="acc_phone1" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Phone</label>
                                                    <input type="text" name="acc_phone2" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">
                                                        Address</label>
                                                    <input type="text" name="acc_address" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Submit</label>
                                                    <input type="submit" name="" class="form-control" value="Add Account"
                                                        style="background-color:#a10f0f;color:white;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                    </div>
                </div>


            </section>
    </section>

    </div>

@endsection
