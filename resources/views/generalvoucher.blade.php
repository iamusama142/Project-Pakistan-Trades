@extends('master')
@section('content')
    <style>
        .btnsmall {
            width: 75px;
            padding: 5px;
        }

    </style>


    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>General Form</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/generalform">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <center>
                                                    <td>
                                                        <label for="date">Date:</label>
                                                        <input type="date" name="date" id="date" class="form-control c1">
                                                    </td>
                                                </center>

                                            </div>

                                            <table class="table table-bordered" id="tbl_posts" style="margin-top: 30px;
                                        ">

                                                <thead>
                                                    <tr>
                                                        <th>Account Name</th>
                                                        <th>Credit</th>
                                                        <th>Debit </th>
                                                        <th>Description </th>
                                                        <th><input id="addrow" class="btn btn-primary btnsmall text-right"
                                                                value="Add Row"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbl_posts_body">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label" for="formGroupExampleInput">Voucher
                                                                Number</label>
                                                            <?php $posts = App\Models\generalvoucher::latest()->first('jvno');
                                                            $count = App\Models\generalvoucher::all()->count();
                                                            ?>
                                                            <?php
                                                                   if($count==0)
                                                                        {
                                                                                ?>
                                                            <input type="text" name="jvno" class="form-control"
                                                                id="formGroupExampleInput" placeholder="Voucher Number" value="1"
                                                                readonly>

                                                            <?php
                                                            }
                        else {
                            ?>
                                                            <input type="text" name="jvno" class="form-control"
                                                                id="formGroupExampleInput" placeholder="Voucher Number"
                                                                value="{{ $posts->jvno + 1 }}" readonly>
                                                            <?php
                                                            }
                                                                ?>
                                                        </div>
                                                    </div>
                                                    <tr id="rows-0">
                                                        <td> <select id="businessDropdown" name="business[]"
                                                                class="form-control">
                                                                <option value="0">Select Account Name</option>
                                                                @foreach ($group_show_edit as $list)
                                                                    <option value="{{ $list->id }}">
                                                                        {{ $list->accountname }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>


                                                        <td>
                                                            <input type="number" placeholder="Enter CV Ammount"
                                                                name="cvammount[]" id="cvamount" class="form-control c1"
                                                                value="0">

                                                        </td>

                                                        <td><input type="number" name="dvammount[]"
                                                                placeholder="Enter DV Ammount" id="" class="form-control c2"
                                                                value="0">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="Enter Description"
                                                                name="description[]" id="description"
                                                                class="form-control c1">

                                                        </td>
                                                        <td><input class="btn btn-danger btnsmall removerow" value="remove"
                                                                data-id="0">


                                                        </td>
                                                    </tr>


                                                </tbody>
                                                <div class="container">
                                                    <td>
                                                        <input class="form-control" name="creditammount" type="number"
                                                            id="sumcv" placeholder="Total CV Ammount">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" name="debitammount" type="number"
                                                            id="sumdv" placeholder="Total DV Ammount">
                                                    </td>
                                                </div>

                                            </table>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4">
                                                        {{-- <a href="generalPDF">Submit</a> --}}
                                                        <button type="submit" id="submit" name="submitform" value="Submit"
                                                            class="btn btn-danger">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $(document).ready(function() {
                var rec = ' ';
                var Rows = 0;
                let count = 0;

                $('#addrow').click(function() {
                    rows_fu();
                    $('#cvamount, #dvamount').on('change keyup keydown keypress', function() {

                        var sum1 = $.map($('#cvamount'), function(x) {
                            return +x.value;
                        }).reduce(function(a, b) {
                            return a + b;
                        });

                        var sum2 = $.map($('#dvamount'), function(x) {
                            return +x.value;
                        }).reduce(function(a, b) {
                            return a + b;

                        });

                        $("#cvamount").html(sum1);
                        $("#dvamout").html(sum2);


                        $("#submit").toggle(sum1 === sum2);


                    });

                    $("#cvamount,#dvamount").on('change keyup keydown keypress', function() {
                        var cvamou = $("#cvamount").val();
                        $("#sumcv").val(cvamou);

                        var dvamou = $("#dvamount").val();
                        $("#sumdv").val(dvamou);
                        // var sumtotal = $('#sumnum').val(cvamou);
                    });

                });

                var arrayFromPHP = <?php echo json_encode($group_show_edit); ?>;



                function rows_fu() {
                    count++;
                    var row = '<tr id="rows-' + count + '">' +
                        '                                                    <td>  <select  id="business" name="business[]" class="form-control" required>' +
                        '                                                        <option value="0">Select Purchaser Name</option>';

                    function businessfu(list, index) {
                        console.log(list.accountname);
                        row = row + '<option value="' + list.id + '">' + list.accountname + '</option>';

                    }


                    arrayFromPHP.forEach(businessfu);


                    row = row +
                        '                                                    <td><input type="text" name="cvammount[]" id="cvamount" value="0" placeholder="Enter CV Ammount" class="form-control c1" required> </td>' +

                        '                                                    <td><input type="number" name="dvammount[]" value="0" id="dvamount" placeholder="Enter DV Ammount" class="form-control c2"  required></td>' +
                        '                                                    <td><input type="text" name="description[]" id="description" placeholder="Enter Description" class="form-control c2"  required></td>' +

                        '                                                    <td><input id="" class="btn btn-danger btnsmall removerow" value="remove" data-id="' +
                        count + '"></td>' +
                        '' +
                        '                                                </tr>';

                    $("#tbl_posts").append(row);

                };
                $(".removerow").click(function() {
                    var id = $(this).attr('data-id');
                    $('#rows-' + id).remove();

                });

                $(document).delegate('.removerow', 'click', function(e) {
                    var id = $(this).attr('data-id');
                    $('#rows-' + id).remove();
                });






            });
        </script>
    @endsection
