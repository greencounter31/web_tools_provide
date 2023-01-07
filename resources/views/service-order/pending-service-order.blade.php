@extends('master')

@section('title')
    Pending Service Order
@endsection

@section('content')
    <div class="content content-fixed">
        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
            <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
                        </ol>
                    </nav>
                    <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
                </div>
                <div class="d-none d-md-block">
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail"
                                                                                  class="wd-10 mg-r-5"></i> Email
                    </button>
                    <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer"
                                                                                         class="wd-10 mg-r-5"></i> Print
                    </button>
                    <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file"
                                                                                           class="wd-10 mg-r-5"></i>
                        Generate Report
                    </button>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 mt-3">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="text-center">Add Pending Service Order</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('add.pending.service.order')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="mb-2">
                                        <label class="form-label">Title</label>
                                        <input required class="form-control" type="text" placeholder="Title"
                                               name="title">
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label">Price</label>
                                        <input required class="form-control" type="number" placeholder="Price"
                                               name="price">
                                    </div>

                                    <div class="mt-2">
                                        <input class="form-control btn btn-primary" type="submit" value="Submit"
                                               name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="text-center">Pending Service Order Info</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered table-hover text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>View</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>New</th>
                                        <th>Actions</th>
                                    </tr>


                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td>{{$service->title}}</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-success">#View Details</a>
                                            </td>
                                            <td>{{$service->price}}</td>

                                            @if($service->status == 1)
                                                <td>Processed</td>
                                            @else
                                                <td>Pending</td>
                                            @endif
                                            <td></td>
                                            <td>
                                                <table style="margin-left: auto;margin-right: auto;">
                                                    <tr>
                                                        <td><a href="" class="btn btn-success btn-sm">Bookmark</a></td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <a href="" class="btn btn-warning btn-sm">View Discussion</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{ $services->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
