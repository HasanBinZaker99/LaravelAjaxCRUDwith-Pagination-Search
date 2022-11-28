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