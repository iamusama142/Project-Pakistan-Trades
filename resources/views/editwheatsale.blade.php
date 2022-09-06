@extends('master')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">


            <center>
                <section role="main" class="content-body card-margin">
                    <header class="page-header">
                        <h1 class="text-dark">Wheat Sale and Purchase</h1>

                        {{-- <div class="right-wrapper text-right mr-4">
							<ol class="breadcrumbs">
								<li>
									<a href="dash">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>
							<h6><li><a href=""><span> Wheat Sale and Purchase</span></a></li></h6>
							</ol>
						</div> --}}
                    </header>

                    <div class="row">

                        <div class="col-lg-12">


                            <section class="card ">
                                <form action="/updatesalepurchase/{{ $wheat_data->id }}" method="post" id="butsave">
                                    @csrf
                                    <header class="card-header">
                                        <div class="card-actions">
                                            <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                                        </div>
                                    </header>

                                    <div class="card-body ">
                                        <div class="row form-group">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <center><label class="col-form-label" for="formGroupExampleInput">
                                                            <h3 class="text-dark">Edit Form</h3>
                                                        </label>
                                                    </center>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Invoice
                                                        Number</label>
                                                    <input type="number" name="inv" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Invoice Number" readonly
                                                        value="{{ $wheat_data->invoiceno }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Date</label>
                                                    <input type="date" name="salepurchaseDate" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Date"
                                                        value="{{ $wheat_data->date_create }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Purchaser
                                                        Name</label>
                                                    <select id="purchaserName" data-plugin-selectTwo
                                                        class="form-control populate cus1" name="purchaserName"
                                                        required=value="{{ $wheat_data->purchasername }}">
                                                        @foreach ($group_show_edit as $list)
                                                            <option value="{{ $list->id }}">
                                                                {{ $list->accountname }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput"
                                                        class="text-dark">Seller Name</label>
                                                    <select data-plugin-selectTwo class="form-control populate cus12"
                                                        id="saleName" name="saleName" required
                                                        value="{{ $wheat_data->sellername }}">

                                                        @foreach ($group_show_edit as $list)
                                                            <option value="{{ $list->id }}">
                                                                {{ $list->accountname }}</option>
                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>
                                            <hr width="100%">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Gate
                                                        No.</label>
                                                    <input type="text" name="gateNoPurchase" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Gate No."
                                                        value="{{ $wheat_data->p_gateno }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Vehicle
                                                        No.</label>
                                                    <input type="text" name="vehicleNoPurchase" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Vehicle No."
                                                        value="{{ $wheat_data->p_vehicleno }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label"
                                                        for="formGroupExampleInput">Product</label>
                                                    <input type="text" name="productPurcahse" class="form-control"
                                                        id="formGroupExampleInput" placeholder="Prodcut" value="Wheat"
                                                        readonly value="{{ $wheat_data->p_product }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">1st Wt</label>
                                                    <input type="number" min="0" name="weightPurchase"
                                                        class="form-control" id="wt1" placeholder="Prodcut"
                                                        value="{{ $wheat_data->p_firstwt }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Bouri</label>
                                                    <input type="number" min="0" name="bouriPurchase" class="form-control"
                                                        id="bourisale" placeholder="Bouri"
                                                        value="{{ $wheat_data->p_bouri }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Bouri
                                                        Rate</label>
                                                    <input type="number" min="0" name="bouriPurchaseRate"
                                                        class="form-control" id="bourisalerate" placeholder="Bouri"
                                                        value="{{ $wheat_data->p_bourirate }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Bouri
                                                        Total</label>
                                                    <input type="number" name="bouriTotalRatePurcahse"
                                                        class="form-control" id="bourisaleratetotal" placeholder="Bouri"
                                                        readonly value="{{ $wheat_data->p_bouritotal }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Bouri
                                                        2</label>
                                                    <input type="number" name="bouri2Purchase" class="form-control"
                                                        id="bourisale2" placeholder="Bouri"
                                                        value="{{ $wheat_data->p_bouritwo }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Bouri 2
                                                        Rate</label>
                                                    <input type="number" name="bouri2PurchaseRate" class="form-control"
                                                        id="bourisalerate2" placeholder="Bouri"
                                                        value="{{ $wheat_data->p_bouriratetwo }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Bouri 2
                                                        Total</label>
                                                    <input type="number" name="bouri2TotalRatePurcahse"
                                                        class="form-control" id="bourisaleratetotal2" placeholder="Bouri"
                                                        readonly value="{{ $wheat_data->p_bouritwototal }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Thela</label>
                                                    <input type="number" name="thelaPurchase" class="form-control"
                                                        id="thelasale" placeholder="Thela"
                                                        value="{{ $wheat_data->p_thela }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Thela
                                                        Rate</label>
                                                    <input type="number" name="thelaRatePurchase" class="form-control"
                                                        id="thelasalerate" placeholder="Thela Rate"
                                                        value="{{ $wheat_data->p_thelarate }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Thela
                                                        Total</label>
                                                    <input type="number" name="thelaTotalRatePurchase"
                                                        class="form-control" id="thelasaleratetotal"
                                                        placeholder="Thela Rate" readonly
                                                        value="{{ $wheat_data->p_thelatotal }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Thela
                                                        2</label>
                                                    <input type="number" name="thela2Purchase" class="form-control"
                                                        id="thelasale2" placeholder="Thela"
                                                        value="{{ $wheat_data->p_thelatwo }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="formGroupExampleInput">Thela 2
                                                        Rate</label>
                                                    <input type="number" name="thela2RatePurchase" class="form-control"
                                                        id="thelasalerate2" placeholder="Thela Rate"
                                                        value="{{ $wheat_data->p_thelatworate }}"">
                                                    </div>
                                                </div>
                                                <div class=" col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Thela 2
                                                            Total</label>
                                                        <input type="number" name="thela2TotalRatePurchase"
                                                            class="form-control" id="thelasaleratetotal2"
                                                            placeholder="Thela Rate" readonly value="0">
                                                    </div>
                                                </div>



                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">B.
                                                            Wt</label>
                                                        <input type="number" name="bwtPurchase" class="form-control"
                                                            id="bwtsaler" placeholder="Prodcut"
                                                            value="{{ $wheat_data->p_bwt }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">E.
                                                            Wt</label>
                                                        <input type="number" name="ewtPurchase" class="form-control"
                                                            id="ewt" placeholder="E. Wt"
                                                            value="{{ $wheat_data->p_ewt }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Net.
                                                            Wt</label>
                                                        <input type="number" name="netPurchase" class="form-control"
                                                            id="netwt1" readonly placeholder="Net. Wt"
                                                            value="{{ $wheat_data->p_netwt }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label"
                                                            for="formGroupExampleInput">Rate</label>
                                                        <input type="number" name="ratePurchase" class="form-control"
                                                            id="rate" placeholder="Rate"
                                                            value="{{ $wheat_data->p_rate }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Total
                                                            Amount</label>
                                                        <input type="number" name="totalAmountPurchase"
                                                            class="form-control" id="totalamount" readonly
                                                            placeholder="Total Amount"
                                                            value="{{ $wheat_data->p_totalamount }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bar.
                                                            Rs</label>
                                                        <input type="number" name="barRatePurchase" class="form-control"
                                                            id="barrate" readonly placeholder="Bar Rs"
                                                            value="{{ $wheat_data->p_barrs }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">V.
                                                            Rent</label>
                                                        <input type="number" name="rentPurchase" class="form-control"
                                                            id="vrent" placeholder="V. Rent"
                                                            value="{{ $wheat_data->p_vrent }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Net
                                                            Amount</label>
                                                        <input type="number" name="amountPurchase" class="form-control"
                                                            id="netamount" readonly placeholder="Net Amount"
                                                            value="{{ $wheat_data->p_netamount }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">


                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Gate
                                                            No.</label>
                                                        <input type="text" name="gateNoSale" class="form-control"
                                                            id="formGroupExampleInput" placeholder="Gate No."
                                                            value="{{ $wheat_data->s_gateno }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Vehicle
                                                            No.</label>
                                                        <input type="text" name="vehicleNoSale" class="form-control"
                                                            id="formGroupExampleInput" placeholder="Vehicle No."
                                                            value="{{ $wheat_data->s_vehicleno }}">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st
                                                            Wt</label>
                                                        <input type="number" name="weightSale" class="form-control"
                                                            id="1wtpur" placeholder="1st Wt"
                                                            value="{{ $wheat_data->s_firstwt }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label"
                                                            for="formGroupExampleInput">Bouri</label>
                                                        <input type="number" name="bouriSale" class="form-control"
                                                            id="bouripur" placeholder="Bouri"
                                                            value="{{ $wheat_data->s_bouri }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bouri
                                                            Rate</label>
                                                        <input type="number" name="bouriSaleRate" class="form-control"
                                                            id="bouriratepur" placeholder="Bouri"
                                                            value="{{ $wheat_data->s_bourirate }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bouri
                                                            Total</label>
                                                        <input type="number" name="bouriTotalRateSale"
                                                            class="form-control" id="bouritotalpur" placeholder="Bouri"
                                                            required readonly value="{{ $wheat_data->s_bouritotal }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bouri
                                                            2</label>
                                                        <input type="number" name="bouri2Sale" class="form-control"
                                                            id="bouri2" placeholder="Bouri"
                                                            value="{{ $wheat_data->s_bouritwo }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bouri 2
                                                            Rate</label>
                                                        <input type="number" name="bouri2SaleRate" class="form-control"
                                                            id="bouri2ratepur" placeholder="Bouri"
                                                            value="{{ $wheat_data->s_bouriratetwo }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bouri 2
                                                            Total</label>
                                                        <input type="number" name="bouri2TotalRateSale"
                                                            class="form-control" id="bouri2pur" placeholder="Bouri Total"
                                                            readonly value="{{ $wheat_data->s_bouritwototal }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label"
                                                            for="formGroupExampleInput">Thela</label>
                                                        <input type="number" name="thelaSale" class="form-control"
                                                            id="thela1" placeholder="Thela"
                                                            value="{{ $wheat_data->s_thela }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Thela
                                                            Rate</label>
                                                        <input type="number" name="thelaRateSale" class="form-control"
                                                            id="thelarate1" placeholder="Thela Rate"
                                                            value="{{ $wheat_data->s_thelarate }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Thela
                                                            Total</label>
                                                        <input type="number" name="thelaTotalRateSale"
                                                            class="form-control" id="thelatotal1"
                                                            placeholder="Thela Rate" readonly
                                                            value="{{ $wheat_data->s_thelatotal }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Thela
                                                            2</label>
                                                        <input type="number" name="thela2Sale" class="form-control"
                                                            id="thela2pur" placeholder="Thela"
                                                            value="{{ $wheat_data->s_thelatwo }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Thela 2
                                                            Rate</label>
                                                        <input type="number" name="thela2RateSale" class="form-control"
                                                            id="Thela2rate" placeholder="Thela Rate"
                                                            value="{{ $wheat_data->s_thelatworate }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Thela 2
                                                            Total</label>
                                                        <input type="number" name="thela2TotalRateSale"
                                                            class="form-control" id="thelatotal2pur"
                                                            placeholder="Thela Rate" readonly
                                                            value="{{ $wheat_data->s_thelatwototal }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">B.
                                                            Wt</label>
                                                        <input type="number" name="bwtSale" class="form-control"
                                                            id="bwtpur" placeholder="B. Wt"
                                                            value="{{ $wheat_data->s_bwt }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">E.
                                                            Wt</label>
                                                        <input type="number" name="ewtSale" class="form-control"
                                                            id="ewtpur" placeholder="E. Wt"
                                                            value="{{ $wheat_data->s_ewt }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Net.
                                                            Wt</label>
                                                        <input type="number" name="netSale" class="form-control"
                                                            id="netwtpur" placeholder="Net. Wt" readonly
                                                            value="{{ $wheat_data->s_netwt }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label"
                                                            for="formGroupExampleInput">Rate</label>
                                                        <input type="number" name="rateSale" class="form-control"
                                                            id="ratepur" placeholder="Rate" required
                                                            value="{{ $wheat_data->s_rate }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Total
                                                            Amount</label>
                                                        <input type="number" name="totalAmountSale" class="form-control"
                                                            id="totalamountpur" placeholder="Total Amount" readonly
                                                            value="{{ $wheat_data->s_totalamount }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bar.
                                                            Rs</label>
                                                        <input type="number" name="barRateSale" class="form-control"
                                                            id="barratepur" placeholder="Bar Rs" required readonly
                                                            value="{{ $wheat_data->s_barrs }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">V.
                                                            Rent</label>
                                                        <input type="number" name="rentSale" class="form-control"
                                                            id="vrentput" placeholder="V. Rent" required
                                                            value="{{ $wheat_data->s_vrent }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Net
                                                            Amount</label>
                                                        <input type="number" name="amountSale" class="form-control"
                                                            id="netamountpur" placeholder="Net Amount" readonly
                                                            value="{{ $wheat_data->s_netamount }}">
                                                    </div>
                                                </div>
                                                <hr width="100%">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput"
                                                            style="font-size: 10px !important;"><b>Purchase Net
                                                                Amount</b></label>
                                                        <input type="number" name="purchaseNetAmount"
                                                            class="form-control" id="purnetamount"
                                                            placeholder="Purchase Net Amount" readonly
                                                            value="{{ $wheat_data->purchasenetamount }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput"
                                                            style="font-size: 10px !important;"><b>Sale Net
                                                                Amount</b></label>
                                                        <input type="number" name="SaleNetAmount" class="form-control"
                                                            id="salenetamount" placeholder="Sale Net Amount" readonly
                                                            value="{{ $wheat_data->salenetamount }}">
                                                    </div>
                                                </div>


                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput"
                                                            style="font-size: 10px !important;"><b>Profit</b></label>
                                                        <input type="number" name="profit" class="form-control"
                                                            id="profit"
                                                            style="background-color:green !important; color:#fff !important; "
                                                            readonly value="{{ $wheat_data->profit }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput"
                                                            style="font-size: 10px !important;"><b>Loss</b></label>
                                                        <input type="number" name="loss" class="form-control" id="loss"
                                                            style="background-color:red !important; color:#fff !important; "
                                                            readonly value="{{ $wheat_data->loss }}">
                                                    </div>
                                                </div>

                                                <hr width="100%">


                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st Wt
                                                            Difference</label>
                                                        <input type="number" name="wtDifference" class="form-control"
                                                            id="wtdifference" placeholder="Bouri Difference" readonly
                                                            value="{{ $wheat_data->firstwtdifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st Bouri
                                                            Difference</label>
                                                        <input type="number" name="bour1Difference" class="form-control"
                                                            id="bour1Difference" placeholder="1st Bouri Difference" readonly
                                                            value="{{ $wheat_data->firstbouridifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st Bouri
                                                            Rate Difference</label>
                                                        <input type="number" name="bour1RateDifference"
                                                            class="form-control" id="bour1RateDifference"
                                                            placeholder="1st Bouri Rate Difference" readonly
                                                            value="{{ $wheat_data->firstbouriratedifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st Bouri
                                                            Total Difference</label>
                                                        <input type="number" name="bour1TotalDifference"
                                                            class="form-control" id="bour1TotalDifference"
                                                            placeholder="1st Bouri Total Difference" readonly
                                                            value="{{ $wheat_data->firstbouritotaldifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">2nd Bouri
                                                            Difference</label>
                                                        <input type="number" name="bour2Difference" class="form-control"
                                                            id="bour2Difference" placeholder="2nd Bouri Difference" readonly
                                                            value="{{ $wheat_data->seconfbouridifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">2nd Bouri
                                                            Rate Difference</label>
                                                        <input type="number" name="bour2RateDifference"
                                                            class="form-control" id="bour2RateDifference"
                                                            placeholder="2nd Bouri Rate Difference" readonly
                                                            value="{{ $wheat_data->seconfbouriratedifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">2nd Bouri
                                                            Total Difference</label>
                                                        <input type="number" name="bour2TotalDifference"
                                                            class="form-control" id="bour2TotalDifference"
                                                            placeholder="2nd Bouri Total Difference" readonly
                                                            value="{{ $wheat_data->seconfbouritotaldifference }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st Thela
                                                            Difference</label>
                                                        <input type="number" name="thela1Difference" class="form-control"
                                                            id="thela1Difference" placeholder="1st Thela Difference"
                                                            readonly value="{{ $wheat_data->firsttheladifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st Thela
                                                            Rate Difference</label>
                                                        <input type="number" name="thela1RateDifference"
                                                            class="form-control" id="thela1RateDifference"
                                                            placeholder="1st Thela Rate Difference" readonly
                                                            value="{{ $wheat_data->firstthelaratedifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">1st Thela
                                                            Total Difference</label>
                                                        <input type="number" name="thela1TotalDifference"
                                                            class="form-control" id="thela1TotalDifference"
                                                            placeholder="1st Thela Total Difference" readonly
                                                            value="{{ $wheat_data->firstthelatotaldifference }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">2nd Thela
                                                            Difference</label>
                                                        <input type="number" name="thela2Difference" class="form-control"
                                                            id="thela2Difference" placeholder="2nd Thela Difference"
                                                            readonly value="{{ $wheat_data->secondtheladifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">2nd Thela
                                                            Rate Difference</label>
                                                        <input type="number" name="thela2RateDifference"
                                                            class="form-control" id="thela2RateDifference"
                                                            placeholder="2nd Thela Rate Difference" readonly
                                                            value="{{ $wheat_data->secondthelaratedifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">2nd Thela
                                                            Total Difference</label>
                                                        <input type="number" name="thela2TotalDifference"
                                                            class="form-control" id="thela2TotalDifference"
                                                            placeholder="2nd Thela Total Difference" readonly
                                                            value="{{ $wheat_data->secondthelatotaldifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">B. Wt
                                                            Difference</label>
                                                        <input type="number" name="bwtDifference" class="form-control"
                                                            id="bwtdifference" placeholder="B. Wt Difference" readonly
                                                            value="{{ $wheat_data->wtdifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">E. Wt
                                                            Difference</label>
                                                        <input type="number" name="ewtDifference" class="form-control"
                                                            id="ewtdifference" placeholder="E. Wt Difference" readonly
                                                            value="{{ $wheat_data->ewtdifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Net. Wt
                                                            Difference</label>
                                                        <input type="number" name="netwtDifference" class="form-control"
                                                            id="netwtdifference" placeholder="Net. Wt Difference" readonly
                                                            value="{{ $wheat_data->netewtdifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Rate
                                                            Difference</label>
                                                        <input type="number" name="rateDifference" class="form-control"
                                                            id="ratedifference" placeholder="Rate Difference" readonly
                                                            value="{{ $wheat_data->ratedifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Total
                                                            Amount
                                                            Difference</label>
                                                        <input type="number" name="totalAmountDifference"
                                                            class="form-control" id="totalamountdifference"
                                                            placeholder="Total Amount Difference" readonly
                                                            value="{{ $wheat_data->totalamountdifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">Bar. Rs
                                                            Difference</label>
                                                        <input type="number" name="barRateDifference"
                                                            class="form-control" id="barratedifference"
                                                            placeholder="Bar. Rs Difference" readonly
                                                            value="{{ $wheat_data->barrsdifference }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="formGroupExampleInput">V. Rent
                                                            Difference</label>
                                                        <input type="number" name="rentDifference" class="form-control"
                                                            id="rentdifference" placeholder="V. Rent Difference" readonly
                                                            value="{{ $wheat_data->vrentdifference }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="col-form-label"
                                                            for="formGroupExampleInput">Sale</label>
                                                        <input type="submit" name="" class="form-control"
                                                            value="Add Sale & Purchase"
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

    </section>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            $("#bourisale,#bourisalerate").on('change keyup keydown keypress', function() {

                var bouri = $("#bourisale").val();


                var bourirate = $("#bourisalerate").val();
                var bourii1 = bouri * bourirate;
                $("#bourisaleratetotal").val(bouri * bourirate);
                var bouriRate2 = $("#bourisaleratetotal2").val();
                var thela1 = $("#thelasaleratetotal").val();
                var thela2 = $("#thelasaleratetotal2").val();
                var total = parseInt(bourii1) + parseInt(bouriRate2) + parseInt(thela1) + parseInt(thela2);
                $("#barrate").val(total);

            });
            $("#bourisale2,#bourisalerate2").on('change keyup keydown keypress', function() {

                var bouri2 = $("#bourisale2").val();

                var bourirate2 = $("#bourisalerate2").val();
                var bourii2 = bouri2 * bourirate2;
                $("#bourisaleratetotal2").val(bouri2 * bourirate2);
                var bouriRate1 = $("#bourisaleratetotal").val();
                var thela1 = $("#thelasaleratetotal").val();
                var thela2 = $("#thelasaleratetotal2").val();
                var total = parseInt(bourii2) + parseInt(bouriRate1) + parseInt(thela1) + parseInt(thela2);
                $("#barrate").val(total);

            });

            $("#thelasale,#thelasalerate").on('change keyup keydown keypress', function() {

                var thela = $("#thelasale").val();

                var thelasalerate = $("#thelasalerate").val();
                var thela1 = thela * thelasalerate;
                $("#thelasaleratetotal").val(thela1);
                //$("#barrate").val(thela1);
                var bouriRate1 = $("#bourisaleratetotal").val();
                var bouriRate2 = $("#bourisaleratetotal2").val();
                var thela2 = $("#thelasaleratetotal2").val();
                var total = parseInt(thela1) + parseInt(bouriRate1) + parseInt(bouriRate2) + parseInt(
                    thela2);
                $("#barrate").val(total);

            });
            $("#thelasale2,#thelasalerate2").on('change keyup keydown keypress', function() {

                var thela = $("#thelasale2").val();

                var thelasalerate2 = $("#thelasalerate2").val();
                var thela2 = thela * thelasalerate2;
                $("#thelasaleratetotal2").val(thela2);
                var bouriRate1 = $("#bourisaleratetotal").val();
                var bouriRate2 = $("#bourisaleratetotal2").val();
                var thela1 = $("#thelasaleratetotal").val();
                var total = parseInt(thela1) + parseInt(bouriRate1) + parseInt(bouriRate2) + parseInt(
                    thela2);
                $("#barrate").val(total);

            });
            $("#bwtsaler,#wt1,#ewt").on('change keyup keydown keypress', function() {

                var wt1 = $("#wt1").val();
                var ewt = $("#ewt").val();
                var bwtsaler = $("#bwtsaler").val();
                $("#netwt1").val(wt1 - ewt - bwtsaler);
            });

            // Rate Add Start

            $("#wt1").on('change keyup keydown keypress', function() {

                var wt1 = $("#wt1").val();

                $("#netamount").val(wt1);
            });

            $("#wt1,#netwt1").on('change keyup keydown keypress', function() {

                var wt1 = $("#wt1").val();
                var maan = netwt1 / 40;
                var rate = $("#netwt1").val();
                $("#netamount").val(rate * maan);
            });



            // $("#netwt1").on('change keyup keydown keypress blur',function(){


            // 	var maan=netwt1/40;
            // 	var rate=$("#netwt1").val();
            // 	$("#totalamount").val(rate*maan);

            // });



            // Rate Add End

            $("#rate,#vrent,#barrate").on('change keyup keydown keypress blur', function() {

                var netwt1 = $("#netwt1").val();
                var maan = netwt1 / 40;
                var rate = $("#rate").val();
                $("#totalamount").val(rate * maan);
                var netwt1 = $("#totalamount").val();
                var bardana = $("#barrate").val();
                var vrate = $("#vrent").val();
                var data = netwt1 - (-bardana);
                $("#netamount").val(data - vrate);
                $("#purnetamount").val(data - vrate);
            });

        });
    </script>


    <script type="text/javascript">
        $("#bourisale, #bourisalerate, #bouripur, #bouriratepur").on('change keyup keydown keypress', function() {

            var bourisale = parseInt($("#bourisale").val());
            var bourisalerate = parseInt($("#bourisalerate").val());
            var bouripur = parseInt($("#bouripur").val());
            var bouriratepur = parseInt($("#bouriratepur").val());
            var firstTotal = bourisale * bourisalerate;
            var secondTotal = bouripur * bouriratepur;
            $('#bour1TotalDifference').val(secondTotal - firstTotal);

        });



        $("#bourisale, #bourisalerate, #bouripur, #bouriratepur, #bourisale2, #bourisalerate2, #bouri2, #bouri2ratepur, #thelasale, #thelasalerate, #thela1, #thelarate1, #thelasale2, #thelasalerate2, #thela2pur, #Thela2rate")
            .on('change keyup keydown keypress', function() {

                var bourisale = parseInt($("#bourisale").val());
                var bourisalerate = parseInt($("#bourisalerate").val());
                var bouripur = parseInt($("#bouripur").val());
                var bouriratepur = parseInt($("#bouriratepur").val());

                var bourisale2 = parseInt($("#bourisale2").val());
                var bourisalerate2 = parseInt($("#bourisalerate2").val());
                var bouri2 = parseInt($("#bouri2").val());
                var bouri2ratepur = parseInt($("#bouri2ratepur").val());


                var thelasale = parseInt($("#thelasale").val());
                var thelasalerate = parseInt($("#thelasalerate").val());
                var thela1 = parseInt($("#thela1").val());
                var thelarate1 = parseInt($("#thelarate1").val());

                var thelasale2 = parseInt($("#thelasale2").val());
                var thelasalerate2 = parseInt($("#thelasalerate2").val());
                var thela2pur = parseInt($("#thela2pur").val());
                var Thela2rate = parseInt($("#Thela2rate").val());

                var Bouri1Rate = bourisale * bourisalerate;
                var Bouri2Rate = bourisale2 * bourisalerate2;

                var Thela1Rate = thelasale * thelasalerate;
                var Thela2Rate = thelasale2 * thelasalerate2;


                var Bouri3Rate = bouripur * bouriratepur;
                var Bouri4Rate = bouri2 * bouri2ratepur;

                var Thela3Rate = thela1 * thelarate1;
                var Thela4Rate = thela2pur * Thela2rate;

                var SumFirst = Bouri1Rate - (-Bouri2Rate) - (-Thela1Rate) - (-Thela2Rate);
                var SumSec = Bouri3Rate - (-Bouri4Rate) - (-Thela3Rate) - (-Thela4Rate);
                $('#barratedifference').val(SumSec - SumFirst);

            });

        //

        $("#bourisale2, #bourisalerate2, #bouri2, #bouri2ratepur").on('change keyup keydown keypress', function() {

            var bourisale2 = parseInt($("#bourisale2").val());
            var bourisalerate2 = parseInt($("#bourisalerate2").val());
            var bouri2 = parseInt($("#bouri2").val());
            var bouri2ratepur = parseInt($("#bouri2ratepur").val());
            var firstTotal = bourisale2 * bourisalerate2;
            var secondTotal = bouri2 * bouri2ratepur;
            $('#bour2TotalDifference').val(secondTotal - firstTotal);

        });
        // Thela 1 Difference
        $("#thelasale, #thelasalerate, #thela1, #thelarate1").on('change keyup keydown keypress', function() {

            var thelasale = parseInt($("#thelasale").val());
            var thelasalerate = parseInt($("#thelasalerate").val());
            var thela1 = parseInt($("#thela1").val());
            var thelarate1 = parseInt($("#thelarate1").val());
            var firstTotal = thelasale * thelasalerate;
            var secondTotal = thela1 * thelarate1;
            $('#thela1TotalDifference').val(secondTotal - firstTotal);

        });
        // Thela 2 Difference
        $("#thelasale2, #thelasalerate2, #thela2pur, #Thela2rate").on('change keyup keydown keypress', function() {

            var thelasale2 = parseInt($("#thelasale2").val());
            var thelasalerate2 = parseInt($("#thelasalerate2").val());
            var thela2pur = parseInt($("#thela2pur").val());
            var Thela2rate = parseInt($("#Thela2rate").val());
            var firstTotal = thelasale2 * thelasalerate2;
            var secondTotal = thela2pur * Thela2rate;
            $('#thela2TotalDifference').val(secondTotal - firstTotal);

        });
        // net wt difference
        $("#wt1, #bwtsaler, #ewt, #1wtpur, #bwtpur, #ewtpur").on('change keyup keydown keypress', function() {

            var wt1 = parseInt($("#wt1").val());
            var bwtsaler = parseInt($("#bwtsaler").val());
            var ewt = parseInt($("#ewt").val());

            var fwt = parseInt($('#1wtpur').val());

            var bwtpur = parseInt($("#bwtpur").val());
            var ewtpur = parseInt($("#ewtpur").val());
            var firstTotal = wt1 - bwtsaler - ewt;
            var secondTotal = fwt - bwtpur - ewtpur;
            $('#netwtdifference').val(secondTotal - firstTotal);

        });
        //rate difference
        $("#wt1, #bwtsaler, #ewt, #1wtpur, #bwtpur, #ewtpur,#thelasaratele2, #ratepur").on('change keyup keydown keypress',
            function() {


                var wt1 = parseInt($("#wt1").val());
                var bwtsaler = parseInt($("#bwtsaler").val());
                var ewt = parseInt($("#ewt").val());

                var fwt = parseInt($('#1wtpur').val());

                var bwtpur = parseInt($("#bwtpur").val());
                var ewtpur = parseInt($("#ewtpur").val());
                var firstTotalNet = wt1 - bwtsaler - ewt;
                var secondTotalNet = fwt - bwtpur - ewtpur;


                var ratepur = parseInt($("#ratepur").val());

                var rate = parseInt($("#rate").val());

                var firstTotal = (firstTotalNet / 40) * rate;
                var secondTotal = (secondTotalNet / 40) * ratepur;
                $('#totalamountdifference').val(secondTotal - firstTotal);

            });
        //


        $(document).ready(function() {

            //thelasalerate
            $("#bourisale, #bouripur").on('change keyup keydown keypress', function() {

                var bourisale = $("#bourisale").val();
                var bouripur = $("#bouripur").val();
                $('#bour1Difference').val(bouripur - bourisale);
            });

            //
            $("#bouriratepur, #bourisalerate").on('change keyup keydown keypress', function() {
                var bouriratepur = $("#bouriratepur").val();
                var bouriratesale = $("#bourisalerate").val();

                var bour1RateDifference = $('#bour1RateDifference').val(bouriratepur - bouriratesale);
            });

            $("#wt1, #1wtpur").on('change keyup keydown keypress', function() {
                var wt1 = $("#wt1").val();
                var wtpur = $("#1wtpur").val();

                var bour1RateDifference = $('#wtdifference').val(wtpur - wt1);
            });

            // 		 	 $("#wt1, #1wtpur").on('change keyup keydown keypress',function(){
            // 	var wt1=$("#wt1").val();
            // 	var wtpur=$("#1wtpur").val();

            // 	var bour1RateDifference=$('#wtdifference').val(wt1-wtpur);
            // });

            $("#bourisale2, #bouri2").on('change keyup keydown keypress', function() {

                var bourisale2 = $("#bourisale2").val();
                var bouri2 = $("#bouri2").val();
                $('#bour2Difference').val(bourisale2 - bouri2);
            });

            $("#bourisalerate2, #bouri2ratepur").on('change keyup keydown keypress', function() {

                var bourisalerate2 = $("#bourisalerate2").val();
                var bouri2ratepur = $("#bouri2ratepur").val();
                $('#bour2RateDifference').val(bouri2ratepur - bourisalerate2);
            });
            //thelasale
            $("#thelasale, #thela1").on('change keyup keydown keypress', function() {

                var thelasale = $("#thelasale").val();
                var thela1 = $("#thela1").val();
                $('#thela1Difference').val(thela1 - thelasale);
            });
            //thelasalerate
            $("#thelasalerate, #thelarate1").on('change keyup keydown keypress', function() {

                var thelasalerate = $("#thelasalerate").val();
                var thelarate1 = $("#thelarate1").val();
                $('#thela1RateDifference').val(thelarate1 - thelasalerate);
            });
            //thela2pur thelasale2
            $("#thelasale2, #thela2pur").on('change keyup keydown keypress', function() {

                var thelasale2 = $("#thelasale2").val();
                var thela2pur = $("#thela2pur").val();
                $('#thela2Difference').val(thela2pur - thelasale2);
            });

            // vrentput
            $("#vrentput, #vrent").on('change keyup keydown keypress', function() {

                var vrentput = $("#vrentput").val();
                var vrent = $("#vrent").val();
                $('#rentdifference').val(vrentput - vrent);
            });
            //bwtpur bwtsaler
            $("#bwtsaler, #bwtpur").on('change keyup keydown keypress', function() {

                var bwtsaler = $("#bwtsaler").val();
                var bwtpur = $("#bwtpur").val();
                $('#bwtdifference').val(bwtpur - bwtsaler);
            });
            //ratepur rate
            $("#wt1,#rate, #ratepur").on('change keyup keydown keypress', function() {
                var firstwieght = $("#wt1").val();
                var rate = $("#rate").val();
                var ratepur = $("#ratepur").val();
                $('#ratedifference').val(ratepur - rate);
            });
            //ewt  ewtpur
            $("#ewt, #ewtpur").on('change keyup keydown keypress', function() {

                var ewt = $("#ewt").val();
                var ewtpur = $("#ewtpur").val();
                $('#ewtdifference').val(ewtpur - ewt);
            });
            //thelasalerate2 thela2pur
            $("#thelasalerate2, #Thela2rate").on('change keyup keydown keypress', function() {

                var thelasalerate2 = $("#thelasalerate2").val();
                var Thela2rate = $("#Thela2rate").val();
                $('#thela2RateDifference').val(Thela2rate - thelasalerate2);
            });


            $("#bourisaleratetotal, #bouritotalpur").on('change', function() {

                var bourisaleratetotal = $("#bourisaleratetotal").val();

                var bouritotalpur = $("#bouritotalpur").val();

                var bour1TotalDifference = $('#bour1TotalDifference').val(bouritotalpur -
                    bourisaleratetotal);
            });

            $("#bouripur,#bouriratepur").on('change keyup keydown keypress', function() {


                var bouripur = $('#bouripur').val();
                var bouriratepur = $("#bouriratepur").val();
                var bourii1 = bouripur * bouriratepur;
                $("#bouritotalpur").val(bouripur * bouriratepur);
                var bouri2pur = $("#bouri2pur").val();
                var thela1 = $("#thelatotal1").val();
                var thela2 = $("#thelatotal2pur").val();
                var total = parseInt(bourii1) + parseInt(bouri2pur) + parseInt(thela1) + parseInt(thela2);
                $("#barratepur").val(total);

            });
            $("#bouri2,#bouri2ratepur").on('change keyup keydown keypress', function() {

                var bouri2 = $("#bouri2").val();

                var bourirate2 = $("#bouri2ratepur").val();
                var bourii2 = bouri2 * bourirate2;
                $("#bouri2pur").val(bouri2 * bourirate2);
                var bouriRate1 = $("#bouritotalpur").val();
                var thela1 = $("#thelatotal1").val();
                var thela2 = $("#thelatotal2pur").val();
                var total = parseInt(bourii2) + parseInt(bouriRate1) + parseInt(thela1) + parseInt(thela2);
                $("#barratepur").val(total);

            });

            $("#thela1,#thelarate1").on('change keyup keydown keypress', function() {

                var thela = $("#thela1").val();

                var thelasalerate = $("#thelarate1").val();
                var thela1 = thela * thelasalerate;
                $("#thelatotal1").val(thela1);
                //$("#barrate").val(thela1);
                var bouriRate1 = $("#bouritotalpur").val();
                var bouriRate2 = $("#bouri2pur").val();
                var thela2 = $("#thelatotal2pur").val();
                var total = parseInt(thela1) + parseInt(bouriRate1) + parseInt(bouriRate2) + parseInt(
                    thela2);
                $("#barratepur").val(total);

            });
            $("#thela2pur,#Thela2rate").on('change keyup keydown keypress', function() {

                var thela = $("#thela2pur").val();

                var thelasalerate2 = $("#Thela2rate").val();
                var thela2 = thela * thelasalerate2;
                $("#thelatotal2pur").val(thela2);
                var bouriRate1 = $("#bouritotalpur").val();
                var bouriRate2 = $("#bouri2pur").val();
                var thela1 = $("#thelatotal1").val();
                var total = parseInt(thela1) + parseInt(bouriRate1) + parseInt(bouriRate2) + parseInt(
                    thela2);
                $("#barratepur").val(total);

            });
            $("#bwtpur,#1wtpur,#ewtpur").on('change keyup keydown keypress', function() {

                var wtpur = $("#1wtpur").val();
                var ewt = $("#ewtpur").val();
                var bwtpur = $("#bwtpur").val();
                $("#netwtpur").val(wtpur - ewt - bwtpur);
            });

            $("#ratepur").on('change keyup keydown keypress', function() {

                var netwtpur = $("#netwtpur").val();
                var maan = netwtpur / 40;
                var rate = $("#ratepur").val();
                $("#totalamountpur").val(rate * maan);
            });
            $("#vrentput").on('change keyup keydown keypress', function() {

                var netwt1 = $("#totalamountpur").val();
                var bardana = $("#barratepur").val();
                var vrate = $("#vrentput").val();
                var data = netwt1 - (-bardana);
                $("#netamountpur").val(data - vrate);
                $("#salenetamount").val(data - vrate);
            });

            $("#vrentput,#vrent").on('change keyup keydown keypress', function() {

                var netamount = $("#netamount").val();
                var netamountpur = $("#netamountpur").val();
                if (netamountpur - netamount > 0) {
                    $("#profit").val(netamountpur - netamount);
                    $("#loss").val(0);
                } else {
                    $("#profit").val(0);
                    $("#loss").val(netamountpur - netamount);
                }


            });
        });
    </script>

    <script type="text/javascript">
        $(document).on('click', 'select[name="pur_name"]', function() {
            console.log();
            alert();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#butsave').on('submit', function() {


                var inv = $('input[name=inv]').val();
                var salepurchaseDate = $('input[name=salepurchaseDate]').val();
                var saleName = $('#saleName').val();
                var purchaserName = $('#purchaserName').val();

                var gateNoPurchase = $('input[name=gateNoPurchase]').val();
                var vehicleNoPurchase = $('input[name=vehicleNoPurchase]').val();
                var productPurcahse = $('input[name=productPurcahse]').val();
                var weightPurchase = $('input[name=weightPurchase]').val();

                var bouriPurchase = $('input[name=bouriPurchase]').val();
                var bouriPurchaseRate = $('input[name=bouriPurchaseRate]').val();
                var bouriTotalRatePurcahse = $('input[name=bouriTotalRatePurcahse]').val();

                var bouri2Purchase = $('input[name=bouri2Purchase]').val();
                var bouri2PurchaseRate = $('input[name=bouri2PurchaseRate]').val();
                var bouri2TotalRatePurcahse = $('input[name=bouri2TotalRatePurcahse]').val();

                var thelaPurchase = $('input[name=thelaPurchase]').val();
                var thelaRatePurchase = $('input[name=thelaRatePurchase]').val();
                var thelaTotalRatePurchase = $('input[name=thelaTotalRatePurchase]').val();

                var thela2Purchase = $('input[name=thela2Purchase]').val();
                var thela2RatePurchase = $('input[name=thela2RatePurchase]').val();
                var thela2TotalRatePurchase = $('input[name=thela2TotalRatePurchase]').val();

                var bwtPurchase = $('input[name=bwtPurchase]').val();
                var ewtPurchase = $('input[name=ewtPurchase]').val();
                var netPurchase = $('input[name=netPurchase]').val();

                var ratePurchase = $('input[name=ratePurchase]').val();
                var totalAmountPurchase = $('input[name=totalAmountPurchase]').val();
                var barRatePurchase = $('input[name=barRatePurchase]').val();

                var rentPurchase = $('input[name=rentPurchase]').val();
                var amountPurchase = $('input[name=amountPurchase]').val();

                //Sale
                var gateNoSale = $('input[name=gateNoSale]').val();
                var vehicleNoSale = $('input[name=vehicleNoSale]').val();
                var productSale = $('input[name=productPurcahse]').val();
                var weightSale = $('input[name=weightSale]').val();

                var bouriSale = $('input[name=bouriSale]').val();
                var bouriSaleRate = $('input[name=bouriSaleRate]').val();
                var bouriTotalRateSale = $('input[name=bouriTotalRateSale]').val();

                var bouri2Sale = $('input[name=bouri2Sale]').val();
                var bouri2SaleRate = $('input[name=bouri2SaleRate]').val();
                var bouri2TotalRateSale = $('input[name=bouri2TotalRateSale]').val();

                var thelaSale = $('input[name=thelaSale]').val();
                var thelaRateSale = $('input[name=thelaRateSale]').val();
                var thelaTotalRateSale = $('input[name=thelaTotalRateSale]').val();

                var thela2Sale = $('input[name=thela2Sale]').val();
                var thela2RateSale = $('input[name=thela2RateSale]').val();
                var thela2TotalRateSale = $('input[name=thela2TotalRateSale]').val();

                var bwtSale = $('input[name=bwtSale]').val();
                var ewtSale = $('input[name=ewtPurchase]').val();
                var netSale = $('input[name=netSale]').val();

                var rateSale = $('input[name=rateSale]').val();
                var totalAmountSale = $('input[name=totalAmountSale]').val();
                var barRateSale = $('input[name=barRateSale]').val();

                var rentSale = $('input[name=rentSale]').val();
                var amountSale = $('input[name=amountSale]').val();




                var wtDifference = $('input[name=wtDifference]').val();

                var bour1Difference = $('input[name=bour1Difference]').val();

                var bour1RateDifference = $('input[name=bour1RateDifference]').val();

                var bour1TotalDifference = $('input[name=bour1TotalDifference]').val();

                var bour2Difference = $('input[name=bour2Difference]').val();

                var bour2RateDifference = $('input[name=bour2RateDifference]').val();

                var bour2TotalDifference = $('input[name=bour2TotalDifference]').val();


                var thela1Difference = $('input[name=thela1Difference]').val();

                var thela1RateDifference = $('input[name=thela1RateDifference]').val();
                var thela1TotalDifference = $('input[name=thela1TotalDifference]').val();



                var thela2Difference = $('input[name=thela2Difference]').val();
                var thela2RateDifference = $('input[name=thela2RateDifference]').val();
                var thela2TotalDifference = $('input[name=thela2TotalDifference]').val();
                var bwtDifference = $('input[name=bwtDifference]').val();
                var ewtDifference = $('input[name=ewtDifference]').val();
                var netwtDifference = $('input[name=netwtDifference]').val();
                var rateDifference = $('input[name=rateDifference]').val();
                var totalAmountDifference = $('input[name=totalAmountDifference]').val();
                var barRateDifference = $('input[name=barRateDifference]').val();
                var rentDifference = $('input[name=rentDifference]').val();
                var profit = $('input[name=profit]').val();
                var loss = $('input[name=loss]').val();
                $.ajax({

                    type: "POST",
                    data: {
                        type: 1,
                        inv: inv,
                        purchaserName: purchaserName,
                        salepurchaseDate: salepurchaseDate,
                        saleName: saleName,
                        gateNoPurchase: gateNoPurchase,
                        vehicleNoPurchase: vehicleNoPurchase,
                        productPurcahse: productPurcahse,
                        weightPurchase: weightPurchase,
                        bouriPurchase: bouriPurchase,
                        bouriPurchaseRate: bouriPurchaseRate,
                        bouriTotalRatePurcahse: bouriTotalRatePurcahse,
                        bouri2Purchase: bouri2Purchase,
                        bouri2PurchaseRate: bouri2PurchaseRate,
                        bouri2TotalRatePurcahse: bouri2TotalRatePurcahse,
                        thelaPurchase: thelaPurchase,
                        thelaRatePurchase: thelaRatePurchase,
                        thelaTotalRatePurchase: thelaTotalRatePurchase,
                        thela2Purchase: thela2Purchase,
                        thela2RatePurchase: thela2RatePurchase,
                        thela2TotalRatePurchase: thela2TotalRatePurchase,
                        bwtPurchase: bwtPurchase,
                        ewtPurchase: ewtPurchase,
                        netPurchase: netPurchase,
                        rentPurchase: rentPurchase,
                        amountPurchase: amountPurchase,
                        barRatePurchase: barRatePurchase,
                        gateNoSale: gateNoSale,
                        vehicleNoSale: vehicleNoSale,
                        productSale: productSale,
                        weightSale: weightSale,
                        bouriSale: bouriSale,
                        bouriSaleRate: bouriSaleRate,
                        bouriTotalRateSale: bouriTotalRateSale,
                        bouri2Sale: bouri2Sale,
                        bouri2SaleRate: bouri2SaleRate,
                        bouri2TotalRateSale: bouri2TotalRateSale,
                        thelaSale: thelaSale,
                        thelaSaleRate: thelaSaleRate,
                        thelaTotalRateSale: thelaTotalRateSale,
                        thela2Sale: thela2Sale,
                        thela2SaleRate: thela2SaleRate,
                        thela2TotalRateSale: thela2TotalRateSale,
                        bwtSale: bwtSale,
                        ewtSale: ewtSale,
                        netSale: netSale,
                        rentSale: rentSale,
                        totalAmountSale: totalAmountSale,
                        amountSale: amountSale,
                        barRateSale: barRateSale,
                        profit: profit,
                        loss: loss
                    },
                    cache: false,
                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            // $("#butsave").removeAttr("disabled");
                            // $('#fupForm').find('input:text').val('');
                            // $("#success").show();
                            // $('#success').html('Data added successfully !');
                            alert('Add Successfully');
                        } else if (dataResult.statusCode == 201) {
                            alert("Error occured !");
                        }

                    }
                });
            });
        });
    </script>
@endsection
