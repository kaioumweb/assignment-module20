<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .product-image{
            height:40px;
        }
    </style>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-7"><h2>Products List</h2></div>
            <div class="col-md-5 text-end"><a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a></div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Product Search  -->
            <div class="bg-light py-3 px-2 mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <form method="GET" action="{{ route('products.index') }}">
                            <div class="input-group">
                                <input type="text" name="search" value="{{ $searchTerm }}" class="form-control" placeholder="Search by Product ID or Description">
                                <button class="btn btn-secondary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('products.index', ['sort' => 'name', 'order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}" class="btn btn-secondary">Sort by Name</a>
                        <a href="{{ route('products.index', ['sort' => 'price', 'order' => $sortOrder == 'asc' ? 'desc' : 'asc']) }}" class="btn btn-secondary">Sort by Price</a>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Default</a>
                    </div>
                </div>
            </div> 

            <table class="table table-striped table-hover table-bordered mb-4">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th> 
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{ asset('storage/'. $product->image) }}" alt="" class="product-image"></td>
                        <td>{{ $product->description }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td class="text-end">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display:inline;" onSubmit="if(!confirm('Are you sure to [{{ $product->name }}] Product Delete?')){return false;}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

           <div class="d-flex justify-content-end">
                {{ $products->links() }}
           </div>

    </div>
</body>
</html>
