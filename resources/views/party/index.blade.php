@extends('layout.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-box">
            <h2 class="page-title font-weight-bold text-uppercase">Manage Clients</h2>
        </div>
    </div>

</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <a href="{{ route('party.add')}}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                <i class="mdi mdi-plus-circle"></i> Add Client
            </a>
            <h4 class="header-title mb-4 text-uppercase">Manage Clients</h4>
            <div class="row">
                <div class="col-sm-12 col-md-10">
                    <div class="dataTables_length" id="alternative-page-datatable_length"><label>Show
                            <select name="alternative-page-datatable_length"
                                aria-controls="alternative-page-datatable"
                                class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <div id="alternative-page-datatable_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm"
                                placeholder="" aria-controls="alternative-page-datatable"></label>
                    </div>
                </div>
            </div>
            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered"
                id="tickets-table">
                <thead>
                    <tr>
                        <th>
                            S.No.
                        </th>
                        <th>Name</th>
                        <th>Phone/Email</th>
                        <th>Address</th>
                        <th>TIN No.</th>
                        <th>Created On</th>
                        <th class="hidden-sm">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><b>#1256</b></td>
                        <td>
                            John Doe
                        </td>

                        <td>
                            <ul class="list-unstyled">
                                <li><b>Phone :</b><span> 9865324085</span></li>
                                <li><b>Email :</b> <span> absd@gmail.com</span></li>
                            </ul>
                        </td>

                        <td>
                            Vyash colony
                        </td>

                        <td>
                            64582
                        </td>

                        <td>
                            12/02/2012
                        </td>

                        <td>
                            <div class="btn-group dropdown">
                                <a href="javascript: void(0);"
                                    class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm"
                                    data-toggle="dropdown" aria-expanded="false"><i
                                        class="mdi mdi-dots-horizontal"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div><!-- end col -->
    </div>

</div>
<!-- end row -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
@endsection