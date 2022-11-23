@extends('admin.master')
@section('content')
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleDarkModal">Add Category</button>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <td>So No</td>
                            <td>Offer Title</td>
                            <td>Product Name</td>
                            <td>Sub Description</td>
                            <td>Price</td>
                            <td>Image</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i=1 ?>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$slider->offer_title}}</td>
                                <td>{{$slider->product_name}}</td>
                                <td>{{$slider->product_description}}</td>
                                <td>{{$slider->product_price}}</td>
                                <td>{{$slider->image}}</td>
                                <td>{{$slider->publication_status}}</td>
                                <td>
{{--                                    @if($slider->publication_status==1)--}}

{{--                                        <a href="{{route('status-slider',['id'=>$slider->id])}}" class="btn btn-success btn-xs" title="UnPublished">--}}
{{--                                            <span class="glyphicon glyphicon-arrow-up"><i class="bi bi-arrow-down-circle-fill"></i></span>--}}
{{--                                        </a>--}}
{{--                                    @else--}}
{{--                                        <a href="{{route('status-slider',['id'=>$slider->id])}}" class="btn btn-warning btn-xs" title="Published">--}}
{{--                                            <span><i class="bi bi-arrow-up-circle-fill"></i></span>--}}
{{--                                        </a>--}}
{{--                                    @endif--}}

{{--                                    <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-primary btn-xs" title="Edit">--}}
{{--                                        <span class="glyphicon glyphicon-edit"><i class="bi bi-pencil-square"></i></span>--}}
{{--                                    </a>--}}
{{--                                    <a href="{{route('delete-category',['id'=>$category->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to Delete this!!')" title="delete">--}}
{{--                                        <span class="glyphicon glyphicon-trash"><i class="bi bi-trash"></i></span>--}}
{{--                                    </a>--}}
                                </td>
                            </tr>
                            <?php $i++ ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleDarkModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-white">Add Slider Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-black">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="border p-4 rounded">

                                                    <form action="{{route('new-slider')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row mb-3">
                                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label text-white">Offer Title:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="offer_title" id="inputEnterYourName" placeholder="Enter Your Offer Title">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label text-white">Product Name:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="product_name" id="inputEnterYourName" placeholder="Enter Your Product Name">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="CategoryName" class="col-sm-3 col-form-label text-white">Sub description:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="product_description" class="form-control" id="CategoryName" placeholder="Product Description">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="CategoryName" class="col-sm-3 col-form-label text-white">Product price:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="product_price" class="form-control"  id="price" placeholder="Product Price">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="CategoryName" class="col-sm-3 col-form-label text-white">Image:</label>
                                                            <div class="col-sm-9">
                                                                <input type="file" name="image" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-9">
                                                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
