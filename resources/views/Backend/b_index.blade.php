<!-- Menghubungkan dengan view template master -->
@extends('backend/b_master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
{{-- @section('judul_halaman', 'Halaman Home') --}}

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
{{-- <div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">This is a quick overview of some features</li>
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
    <div class="row presentation">

        <div class="col-lg-8 col-md-6 titles">
          <span class="icon color10-bg"><i class="fa fa-table"></i></span>
          <h1>Data Tables</h1>
          <h4>Highly flexible tool, based upon the foundations of progressive enhancement<br> and will add advanced interaction controls to any HTML table.</h4>
        </div>
    
        <div class="col-lg-4 col-md-6">
          <ul class="list-unstyled list">
            <li><i class="fa fa-check"></i>Easy to Use</li><li>
            </li><li><i class="fa fa-check"></i>Group Options</li><li>
            </li><li><i class="fa fa-check"></i><a href="http://www.datatables.net/" target="_blank">DataTables</a></li><li>
          </li></ul>
        </div>
    
      </div>
    <!-- END CONTAINER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</div> --}}

<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
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
        <div class="row presentation">

            <div class="col-lg-8 col-md-6 titles">
              <span class="icon color10-bg"><i class="fa fa-table"></i></span>
              <h1>PT. Panca Solusi Teknologi</h1>
              <h4>Highly flexible tool, based upon the foundations of progressive enhancement<br> and will add advanced interaction controls to any HTML table.</h4>
            </div>
        
            <div class="col-lg-4 col-md-6">
              <ul class="list-unstyled list">
                <li><i class="fa fa-check"></i>Easy to Use</li><li>
                </li><li><i class="fa fa-check"></i>Group Options</li><li>
                </li><li><i class="fa fa-check"></i><a href="http://www.datatables.net/" target="_blank">DataTables</a></li><li>
              </li></ul>
            </div>
        
          </div>
        <!-- End Row -->
    </div>
    <!-- END CONTAINER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    
@endsection
