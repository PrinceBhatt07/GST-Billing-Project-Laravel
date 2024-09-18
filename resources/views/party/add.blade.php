@extends('layout.app')
@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold text-uppercase"> Add Party </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- Start Form  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-uppercase">Party Details</h4>
                    <hr>
                    <form class="needs-validation" novalidate="" action="{{ route('party.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Type</label>
                                    <select name="" class="form-control border-bottom "
                                        id="validationCustom01" placeholder="Please select Type"
                                        required="">
                                        <option value="">Client</option>
                                        <option value="">Vendor</option>
                                        <option value="">Employee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Full Name</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom01" placeholder="Enter client's full name"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please provide a Full name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Phone/Mobile Number</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter phone/mobile number"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please provide a Number.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="validationCustom03">Address</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter Address" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid Address.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h4 class="header-title text-uppercase">Bank Details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom04">Account Holder Name</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom04" placeholder="Enter Accoumt Holder name"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom05">Account Number</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom05" placeholder="Enter Account Number"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid Code.
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Bank Name</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter Bank Name"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please provide a GSTIN No.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">IFSC Code</label>
                                    <input type="text" class="form-control border-bottom "
                                        id="validationCustom02" placeholder="Enter IFSC Code"
                                        required="">
                                    <div class="invalid-feedback">
                                        Please provide a Email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02">Branch</label>
                                <input type="text" class="form-control border-bottom "
                                    id="validationCustom02" placeholder="Enter Branch" required="">
                                <div class="invalid-feedback">
                                    Please provide a Branch Name.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection