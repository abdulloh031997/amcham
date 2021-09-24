@extends('layouts.backend.app')
@section('content')
    <div class="row my-3">
        <div class="col-sm-12 mt-5">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('menus.index')}}">Menu</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ul>
        </div>
    </div>
    <form action="{{route('menus.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid mt-5">
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
            <div class="row mt-3">
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
            <div class="form-group W-25 float-right">
                <div class="pt-5">
                    <button class="btn btn-success form-control  font-weight-bold" type="submit">SAVE</button>
                </div>
            </div>
        </div>
    </form>

@push('javascript')
@endpush
@endsection
