@extends('master')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <section role="main" class="content-body ">
                <div class="row">
                    <div class="col-lg-12">

                        <form action="/groupinsert" method="post" id="addproductform">
                            @csrf
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">
                                                <h3 class="text-dark">Add  Groups</h3>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="formGroupExampleInput">Group Name</label>
                                                <input type="text" name="accountgroup" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Enter Group Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="submit" name="" class="form-control" value="Submit"
                                                    style="background-color:#a10f0f;color:white;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


            </section>
    </section>

    </div>

@endsection
