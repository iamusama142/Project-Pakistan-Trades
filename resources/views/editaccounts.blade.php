@extends('master')
@section('content')
    <section role="main" class="content-body card-margin">
        <header class="page-header">
            <h2>Add Account</h2>

            <div class="right-wrapper text-right mr-4">
                <ol class="breadcrumbs">
                    <li>
                        <a href="dash">
                            <i class="bx bx-home-alt"></i>
                        </a>
                    </li>
                    <li><a href="accountlist"><span>Account List</span></a></li>
                </ol>
            </div>
        </header>

        <div class="row">

            <div class="col-lg-12">
                <?php
                if (isset($_GET['success']) == 'success') {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Add Successfully</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                } elseif (isset($_GET['error']) == '1') {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                } elseif (isset($_GET['already']) == '1') {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Already</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';
                }

                ?>
                <form action="{{ route('account.update', $group_data->id) }}" method="post" style="margin-left: 245px">
                    @csrf
                    <section class="card">
                        <header class="card-header">
                            <div class="card-actions">
                                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                            </div>

                            <h2 class="card-title">Update Account</h2>


                        </header>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Account Group</label>
                                        <select id="acc-dropdown" name="acc_group" class="form-control"
                                         required>


                                         @foreach ($group_data_edit as $list)
                                         <option>{{ $list->groupname }}</option>
                                     @endforeach
                                        </select>

                                        {{-- <input type="text" name="acc_group"  value="{{$group_data->accountgroup}}"class="form-control" id="formGroupExampleInput"
                                            placeholder="Account Code"> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Account Code</label>
                                        <input type="text" name="acc_code" value="{{ $group_data->accountcode }}"
                                            class="form-control" id="formGroupExampleInput" placeholder="Account Code">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Account Name</label>
                                        <input type="text" name="acc_name" value="{{ $group_data->accountname }}"
                                            class="form-control" id="formGroupExampleInput" placeholder="Account Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Phone</label>
                                        <input type="text" name="acc_phone1" class="form-control"
                                            value="{{ $group_data->phone }}" id="formGroupExampleInput"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Phone</label>
                                        <input type="text" name="acc_phone2" class="form-control"
                                            value="{{ $group_data->phonetwo }}" id="formGroupExampleInput"
                                            placeholder="Phone">
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput"> Address</label>
                                        <input type="text" name="acc_address" class="form-control"
                                            value="{{ $group_data->address }}" id="formGroupExampleInput"
                                            placeholder="Address">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Add Account</label>
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
    </div>
@endsection
