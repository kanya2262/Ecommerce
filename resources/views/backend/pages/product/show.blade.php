<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .container{
            display: flex;
            justify-content:center;
            /* align-items:center; */
        }
        .header{
            display: flex;
            justify-content:center;
            margin-left: -150px;
        }
    </style>
    
    
    <h1 class="header">Product</h1>
    
    <div class="container">
        
        <ul>
        <li>productname: {{ $product->productname }}</li>
        <li>categoryname: {{ $product->categoryname }}</li>
        <li>brandname: {{ $product->brandname }}</li>
        <li>price: {{ $product->price}}</li>
        <li>details: {{ $product->details }}</li>
        <li>image: {{ $product->image}}</li>
        
        </ul>
    </div>
</body>
</html>

