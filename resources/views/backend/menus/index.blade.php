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
                <h4 class="card-title float-left mt-2">All Menu</h4> <a href="{{route('menus.create')}}" class="btn btn-primary float-right veiwbutton" ><i class="fa fa-plus"></i> Add</a> </div>
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
                                    <select name="position" id="name" class="form-control floating ">
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
                                                <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('delete', $one->id) }}" title="Delete Project">
                                                    <i class="fas fa-trash text-danger  fa-lg"></i>
                                                </a>
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
    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('stylesheet')
@push('javascript')
<script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script>
@endpush
