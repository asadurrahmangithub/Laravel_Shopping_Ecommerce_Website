@extends('admin.master')
@section('content')
    <main class="page-content">
        <hr/>
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">

                            <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Category Name:</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">please Select A category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Sub Category Name:</label>
                                    <div class="col-sm-9">
                                        <select name="sub_category_id" id="" class="form-control">
                                            <option value="">please Select A Sub Category</option>
                                            @foreach($SubCategories as $SubCategory)
                                                <option value="{{ $SubCategory->id }}">{{ $SubCategory->sub_category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Brand Name:</label>
                                    <div class="col-sm-9">
                                        <select name="brand_id" id="" class="form-control">
                                            <option value="">please Select A Brand Name</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Product Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_name" class="form-control" id="CategoryName" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Product Code:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_code" class="form-control" id="CategoryName" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Product price:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_price" class="form-control"  id="price" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">discount Amount:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="discount_amount" class="form-control" onkeyup="discountPrice();"  value="" id="amount" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">discount price:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="discount_price" class="form-control"  value="" id="disPrice" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">description:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_description" class="form-control" id="CategoryName" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Made By:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_made" class="form-control" id="CategoryName" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Stock amount:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="stock_amount" class="form-control" id="CategoryName" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Cost:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_cost" class="form-control" id="CategoryName" placeholder="Category Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label style="margin-top: 8px;" for="publicationStatus" class="col-sm-3 control-label">Product Area :</label>
                                    <div class="col-sm-9" style="margin-top: 9px;">
                                        <input type="checkbox" name="product_area" value="1"> Featured  	&nbsp; 	&nbsp; 	&nbsp;
                                        <input type="checkbox" name="product_area" value="2"> New Arrivals            &nbsp; 	&nbsp; 	&nbsp;
                                        <input type="checkbox" name="product_area" value="3"> On Sale<br>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Image 1:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="CategoryName" class="col-sm-3 col-form-label">Image 2:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image1" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Save Info</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function discountPrice() {
            var price =document.getElementById('price').value;
            var amount =document.getElementById('amount').value;
            document.getElementById('disPrice').value =price-amount;
        }
    </script>
@endsection
