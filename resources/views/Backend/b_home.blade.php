<!-- Menghubungkan dengan view template master -->
@extends('backend/b_master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
{{-- @section('judul_halaman', 'Halaman Home') --}}

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<!-- //////////////////////////////////////////////////////////////////////////// -->
<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">Data Tables</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Tables</li>
        </ol>

        <!-- Start Page Header Right Div -->
        <div class="right">
            <div class="btn-group" role="group" aria-label="...">
                <a href="index.html" class="btn btn-light">Dashboard</a>
                <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
            </div>
        </div>
        <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTAINER -->
    <div class="container-padding">


        <!-- Start Row -->
        <div class="row">

            <!-- Start Panel -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        DAtaTables
                    </div>
                    <div class="panel-body table-responsive">

                        <div id="example0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="dataTables_length" id="example0_length"><label>Show <select
                                        name="example0_length" aria-controls="example0" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example0_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example0"></label></div>
                            <table id="example0" class="table display dataTable no-footer" role="grid"
                                aria-describedby="example0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 142px;">
                                            Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 235px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 107px;">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 51px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 121px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84px;">Salary</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="example0_info" role="status" aria-live="polite">Showing 1
                                to 10 of 31 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example0_paginate"><a
                                    class="paginate_button previous disabled" aria-controls="example0" data-dt-idx="0"
                                    tabindex="0" id="example0_previous">Previous</a><span><a
                                        class="paginate_button current" aria-controls="example0" data-dt-idx="1"
                                        tabindex="0">1</a><a class="paginate_button " aria-controls="example0"
                                        data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                        aria-controls="example0" data-dt-idx="3" tabindex="0">3</a><a
                                        class="paginate_button " aria-controls="example0" data-dt-idx="4"
                                        tabindex="0">4</a></span><a class="paginate_button next"
                                    aria-controls="example0" data-dt-idx="5" tabindex="0" id="example0_next">Next</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <!-- End Panel -->
        </div>
        <!-- End Row -->
    </div>
    <!-- END CONTAINER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    @endsection
