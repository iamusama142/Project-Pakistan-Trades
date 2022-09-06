@extends('master')
@section('content')
    <center>
        <section class="card" style="margin-left: 200px; margin-top:100px;">
            <form action="/edit/{{$data->id}}" method="post" id="addproductform">
                @csrf
                <div class="card-body">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">
                                    <h3 class="text-dark">Add Account Group</h3>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="formGroupExampleInput">Account Group Name</label>
                                    <input type="text" name="accountgroup" value="{{ $data->groupname }}"
                                        class="form-control" id="formGroupExampleInput" placeholder="Account Group Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="submit" name="" class="form-control" value="Add Sale & Purchase"
                                        style="background-color:#a10f0f;color:white;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </section>
    </center>
@endsection
