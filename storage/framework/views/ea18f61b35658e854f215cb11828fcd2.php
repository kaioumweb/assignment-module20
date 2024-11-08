<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Info</title>
    <link href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')); ?>" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-7"><h2>Product Info - <?php echo e($product->name); ?></h2></div>
            <div class="col-md-5 text-end"><a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Products List</a></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <img src="<?php echo e(asset('storage/'. $product->image)); ?>" alt="" class="img-thumbnail">
            </div>
            <div class="col-md-8">  
                <table class="table table-bordered mt-1">
                    <tr>
                        <td>Product Name</td>
                        <td><?php echo e($product->name); ?></td>
                    </tr>                    
                    <tr>
                        <td>Product ID</td>
                        <td><?php echo e($product->product_id); ?></td>
                    </tr>                      
                    <tr>
                        <td>Price</td>
                        <td><?php echo e($product->price); ?></td>
                    </tr>                                      
                    <tr>
                        <td>Product stock</td>
                        <td><?php echo e($product->stock); ?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><?php echo e($product->description); ?></td>
                    </tr>     
                </table>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\exam20\resources\views/show.blade.php ENDPATH**/ ?>