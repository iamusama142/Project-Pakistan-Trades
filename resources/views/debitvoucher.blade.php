@extends('master')
@section('content')
    <center>
        <form action="/adddebit " method="POST" style="margin-top: 100px; margin-left:250px;width:50%;" id="myfb">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h5><label class="text-dark" for="AccountName">Debit
                                    Form</label>
                            </h5>
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="formGroupExampleInput">Voucher
                                            Number</label>
                                        <?php $posts = App\Models\debitvoucher::latest()->first('debitvoucherno');
                                        $count = App\Models\debitvoucher::all()->count();
                                        ?>
                                        <?php
                                           if($count==0)
                                                {
                                                        ?>
                                        <input type="text" name="debitno" class="form-control" id="formGroupExampleInput"
                                            placeholder="Debit Number" value="1" readonly>
                                        <?php
                                    }
                                           else if($count==2)
                                                {
                                                        ?>
                                        <input type="text" name="debitno" class="form-control" id="formGroupExampleInput"
                                            placeholder="Debit Number" value="3" readonly>
                                        <?php
                                    }
else {
    ?>
                                        <input type="text" name="debitno" class="form-control" id="formGroupExampleInput"
                                            placeholder="Debit Number" value="{{ $posts->debitvoucherno + 1 }}" readonly>
                                        <?php
                                    }
                                        ?>
                                    </div>
                                </div>
                                <select class="form-control" id="exampleSelect" name="AccountName">
                                    <option value="">Select Name</option>
                                    @foreach ($group_show_edit as $list)
                                        <option value="{{ $list->id }}">{{ $list->accountname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Amount</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Amount"
                                name="ammount">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Description" name="description">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" id="myElement">Submit</button>
        </form>
    </center>
@endsection
