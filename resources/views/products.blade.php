<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <h2 class="my-5 text-center"> Laravel Pagination</h2>
                <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</a>
                <input type="text" name="search" id="search" class="mb-3 form-control" placeholder="Search Here....">
                <div class="table-data">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key=>$product)
                            <tr>
                                <th>{{ $key+1}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td><a href="" class="btn btn-success update_product_form" data-bs-toggle="modal" data-bs-target="#UpdateProductModal"  
                                data-id="{{ $product->id }}"
                                data-name = "{{$product->name}}"
                                data-price= "{{$product->price}}"
                                >
                                <i class="las la-edit"></i></a>
                                    <a href="" class="btn btn-danger delete_product" data-id="{{ $product->id }}"><i class="las la-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>

@include('add_product_modal')
@include('update_product_modal')
@include('product_js')

{!! Toastr::message() !!}
</body>

</html>