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
            <li class="breadcrumb-item"><a href="{{route('menus.index')}}">Menu</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<div class="card card-light">
    <div class="card-header">
        <h4 class="text-center font-weight-bold text-uppercase">Menu</h4>
    </div>
    <div class="mt-3">
        <form action="{{route('menus.store')}}" method="post" enctype="multipart/form-data">
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
                            @foreach($menus as $menu)
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
@push('javascript')

@endpush
@endsection
