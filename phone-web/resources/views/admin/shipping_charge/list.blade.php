@extends('admin.layouts.app')
@section('style')
@endsection

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Shipping Charge List</h1>
                </div>
                <div class="col-sm-6" style="text-align: right;">
                    <a href="{{url('admin/shipping_charge/add')}}" class="btn btn-primary">Add New Shipping Charge</a>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts._message')

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Shipping Charge List</h3>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getRecord as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{($value->status == 0) ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->created_at))}}</td>
                                        <td>
                                            <a href="{{url('admin/shipping_charge/edit/'.$value->id)}}" class="btn btn-primary">Edit </a>
                                            <a onclick="return confirm('Are you want to delete?');" href="{{url('admin/shipping_charge/delete/'.$value->id)}}" class="btn btn-danger">Delete </a>
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div style="padding: 10px; float: right">
                                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</div>
@endsection

@section('script')
<!-- <script src="{{url('assets/dist/js/pages/dashboard3.js')}}"></script> -->
@endsection