@extends('layouts.backend.app')

@section('content')
@php
$i = 1;
@endphp
<div class="row">
    <div class="col-sm-12 mt-5">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ul>
    </div>
</div>
{!! Toastr::message() !!}
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <div class="mt-5">
                <h4 class="card-title float-left mt-2">All Menu</h4> <a data-toggle="modal" data-target="#add_user" class="btn btn-primary float-right veiwbutton" ><i class="fa fa-plus"></i> Add</a> </div>
        </div>
    </div>
</div>
    <div class="row formtype">
        <div class="col-md-12">
                    <form action="{{ route('menus/list') }}" method="POST" style="width:100%">
                        @csrf
                        <div class="row filter-row">
                            <div class="col-md-3">
                                <div class="form-group form-focus">
                                    <label>Name</label>
                                    <input type="text" class="form-control floating" id="name" name="name">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group form-focus">
                                    <label>Status</label>
                                    <select name="status" id="name" class="form-control floating ">
                                        <option value="">Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-focus">
                                    <label>Position</label>
                                    <select name="status" id="name" class="form-control floating ">
                                        <option value="">Select</option>
                                        <option value="1">Navbar</option>
                                        <option value="0">Footer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Search</label>
                                <button type="sumit" class="btn btn-success btn-block"> Search </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
               <div class="card card-table">
                   <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table table-hover table-center mb-0 dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Link</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th>Position</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    @forelse ($result as $one )
                                        <tr>
                                            <th>
                                                {{$i++}}
                                            </th>
                                            <th>{{$one->name}}</th>
                                            <th><a href="#">{{$one->url}}</a></th>
                                            <th>{{$one->order_by}}</th>
                                            <th>
                                                @if($one->status == 1)
                                                <span class="badge badge-success">Active</span>
                                                @elseif($one->status == 0)
                                                <span class="badge badge-danger">InActive</span>
                                                @endif
                                            </th>
                                            <th>
                                                @if($one->position == 1)
                                                <span class="badge badge-info">Navbar</span>
                                                @elseif($one->position == 0)
                                                <span class="badge badge-warning">Footer</span>
                                                @endif
                                            </th>
                                            <th class="text-right">
                                                <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> View</a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-restore"></i> Delete</a>
                                            </th>
                                        </tr>
                                        @empty
                                            <tr class="text-center">
                                                <td colspan="7"><h3 class="text-center font-weight-bold">No records in here :(</h3></td>
                                            </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                   </div>
                </div>
              </div>
            </div>
        </div>

    </div>
<!-- Add User Modal -->
<div id="add_user" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('menus/create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group w-100 ">
                                <label for="form1">Name</label>
                                <input type="text" id="form1" class="form-control @error('name') is-invalid @enderror " name="name" value="{{old('name')}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group w-100 ">
                                    <label for="form1">Url</label>
                                    <input type="text" id="form1" class="form-control @error('url') is-invalid @enderror " name="url" value="{{old('url')}}">
                                    @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="form1">Position</label>
                                <select name="position" class="form-control @error('position') is-invalid @enderror select2 select2" id="">
                                    <option selected disabled>---Position select---</option>
                                    <option value="1">Navbar</option>
                                    <option value="0">Footer</option>
                                </select>
                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="form1">Parent</label>
                                <select name="parent" id="" class="form-control @error('parent') is-invalid @enderror">
                                    <option selected disabled>-- Selected --</option>
                                    @foreach($result as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="form1">Status</label>
                                <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                                    <option selected disabled>-- @lang('pages.select_one') --</option>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="form1">Order_by</label>
                                <input type="number" id="form1" class="form-control @error('order_by') is-invalid @enderror " name="order_by" value="{{old('order_by', $order!=null?$order->order_by+1:0)}}">
                                @error('order_by')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <div class="pt-5">
                                <button class="btn btn-success form-control" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('stylesheet')
@push('javascript')

@endpush