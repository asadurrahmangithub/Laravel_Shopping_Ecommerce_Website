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
                            <td>Category Name</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i=1 ?>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->status==1 ? 'Published':'Unpublished'}}</td>
                            <td>
                                @if($category->status==1)

                                    <a href="{{route('status-category',['id'=>$category->id])}}" class="btn btn-success btn-xs" title="UnPublished">
                                        <span class="glyphicon glyphicon-arrow-up"><i class="bi bi-arrow-down-circle-fill"></i></span>
                                    </a>
                                @else
                                    <a href="{{route('status-category',['id'=>$category->id])}}" class="btn btn-warning btn-xs" title="Published">
                                        <span><i class="bi bi-arrow-up-circle-fill"></i></span>
                                    </a>
                                @endif
                                <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-primary btn-xs" title="Edit">
                                    <span class="glyphicon glyphicon-edit"><i class="bi bi-pencil-square"></i></span>
                                </a>
                                <a href="{{route('delete-category',['id'=>$category->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to Delete this!!')" title="delete">
                                    <span class="glyphicon glyphicon-trash"><i class="bi bi-trash"></i></span>
                                </a>
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
                                <h5 class="modal-title text-white">Add Category Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-black">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="border p-4 rounded">

                                                    <form action="{{route('new-category')}}" method="post">
                                                        @csrf
                                                        <div class="row mb-3">
                                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label text-white">Category Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="category_name" id="inputEnterYourName" placeholder="Enter Your Category">
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
