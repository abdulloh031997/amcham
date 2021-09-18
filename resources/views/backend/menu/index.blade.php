@extends('layouts.backend.app')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Menu</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title text-uppercase font-weight-bold pt-2">Menu</h3>
                <div class="card-tools">
                    <a name="" id="" class="btn btn-primary font-weight-bold text-uppercase" href="#" role="button"><i class="fa fa-plus"></i> Add</a>
                </div>
              </div>
              <div class="card-header">
               <div style="display:flex; justify-content:space-between">
                <div class="d-flex">
                        <div class="form-group">
                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                            <option>10</option>
                            <option>20</option>
                            <option>50</option>
                            <option>100</option>
                            <option>All</option>
                        </select>
                        </div>
                        &nbsp;&nbsp;
                        <div class="form-group">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="fa fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-default"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-default"><i class="fa fa-trash-restore"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <div class="btn btn-primary">
                            <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
               <div class="table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="checkboxPrimary2">
                                        <label for="checkboxPrimary2">
                                        </label>
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="checkboxPrimary12">
                                        <label for="checkboxPrimary12">
                                        </label>
                                    </div>
                                </th>
                                <th>Home</th>
                                <th><a href="http://amcham.uz/site/index">site/index</a></th>
                                <th>1</th>
                                <th>
                                    <a href="" class="btn btn-success btn-sm">Active</a>
                                </th>
                                <th>Header</th>
                                <th>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-restore"></i></a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="checkboxPrimary112">
                                        <label for="checkboxPrimary112">
                                        </label>
                                    </div>
                                </th>
                                <th>About</th>
                                <th><a href="http://amcham.uz/site/index">site/index</a></th>
                                <th>1</th>
                                <th>
                                    <a href="" class="btn btn-danger btn-sm">InActive</a>
                                </th>
                                <th>Header</th>
                                <th>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-restore"></i></a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="checkboxPrimary1112">
                                        <label for="checkboxPrimary1112">
                                        </label>
                                    </div>
                                </th>
                                <th>Service</th>
                                <th><a href="http://amcham.uz/site/index">site/index</a></th>
                                <th>1</th>
                                <th>
                                    <a href="" class="btn btn-success btn-sm">Active</a>
                                </th>
                                <th>Header</th>
                                <th>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-restore"></i></a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="checkboxPrimary21">
                                        <label for="checkboxPrimary21">
                                        </label>
                                    </div>
                                </th>
                                <th>Team</th>
                                <th><a href="http://amcham.uz/site/index">site/index</a></th>
                                <th>1</th>
                                <th>
                                    <a href="" class="btn btn-success btn-sm">Active</a>
                                </th>
                                <th>Header</th>
                                <th>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-restore"></i></a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="checkboxPrimary23">
                                        <label for="checkboxPrimary23">
                                        </label>
                                    </div>
                                </th>
                                <th>News</th>
                                <th><a href="http://amcham.uz/site/index">site/index</a></th>
                                <th>1</th>
                                <th>
                                    <a href="" class="btn btn-success btn-sm">Active</a>
                                </th>
                                <th>Header</th>
                                <th>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-restore"></i></a>
                                </th>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <td colspan="7"><h3 class="text-center font-weight-bold">No records in here :(</h3></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
              </div>
            </div>
        </div>

    </div>

@endsection
@push('stylesheet')
@push('javascript')
@endpush
