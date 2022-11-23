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
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleDarkModal">Update Category</button>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr/>
        <div class="row">
            <div class="col">
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleDarkModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-white">Update Category Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-black">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="border p-4 rounded">

                                                    <form action="{{route('update-category')}}" method="post">
                                                        @csrf
                                                        <div class="row mb-3">
                                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label text-white">Category Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="hidden" name="id" value="{{ $category->id }}">
                                                                <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}" id="" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-9">
                                                                <button type="submit" class="btn btn-primary px-5">Update</button>
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

