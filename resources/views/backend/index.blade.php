@extends('layouts.backend.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<h2 class="font-weight-bold text-center" style="color:#ff5e00;font-size:28px;text-transform:uppercase"><a href="">Amcham Uzbekistan</a></h2>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <h4 class="p-5 text-uppercase font-weight-bold" style="color:#ff5e00;background-color:#113372"><i class="fa fa-home"></i>1</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h4 class="p-5 text-uppercase font-weight-bold" style="color:#ff5e00;background-color:#113372"><i class="fa fa-plus fa-lg"></i>1</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h4 class="p-5 text-uppercase font-weight-bold" style="color:#ff5e00;background-color:#113372"><i class="fa fa-eye"></i>3</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h4 class="p-5 text-uppercase font-weight-bold" style="color:#ff5e00;background-color:#113372"><i class="fa fa-edit"></i>4</h4>
            </div>
        </div>
    </div>
</div>
@endsection
