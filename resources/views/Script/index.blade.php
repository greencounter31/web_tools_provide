@extends('master')

@section('title')
    Lucifer Project | Script
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
                <div class="row-md-12 mt-5">

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card shadow border-0 rounded-lg mt-3">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-2">Add Scripts/Programs</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('saveScript')}}" method="post">
                                        @csrf

                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="script_name" type="text"
                                                   placeholder="Script Name" required/>
                                            <label>Name</label>
                                            @error('script_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="program_lang" type="text"
                                                   placeholder="Program Language" required/>
                                            <label>Program Language</label>
                                            @error('program_lang')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="hits_link" type="text"
                                                   placeholder="Download Link" required/>
                                            <label>Download Link</label>
                                            @error('hits_link')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="description" type="text"
                                                   placeholder="Fresh hits, Auto payment Bills..." required/>
                                            <label>Description</label>
                                            @error('description')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="proof" type="text"
                                                   placeholder="url" required/>
                                            <label>Proof</label>
                                            @error('proof')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="selling_type" type="text"
                                                   placeholder="Selling Type" required/>
                                            <label>Selling Type</label>
                                            @error('selling_type')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="instruction" type="text"
                                                   placeholder="Instructions (Optional)" required/>
                                            <label>Instructions (Optional)</label>
                                            @error('instruction')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" name="price" type="text"
                                                   placeholder="Price" required/>
                                            <label>Price</label>
                                            @error('price')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-sm">ADD</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-5">
                    <table class="table table-bordered" style="text-align: center">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Hits/Download Link</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Lang</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Added</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $key=1; @endphp
                        @foreach ($scripts as $item)
                            <tr>
                                <td>{{ $key++ }}</td>
                                <td>{{ $item->hits_link }}</td>
                                <td>{{ $item->script_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->program_lang }}</td>
                                <td>{{ $item->price }}</td>

                                @if($item->status == 1)
                                    <td>Enable</td>
                                @else
                                    <td>Disable</td>
                                @endif

                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <table style="margin-left: auto;margin-right: auto;">
                                        <tr>
                                            <td>
                                                <a href="{{route('editScript',['id'=>$item->id])}}"
                                                   class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <form action="{{route('deleteScript')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="script_id" value="{{$item->id}}">
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure delete this?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

