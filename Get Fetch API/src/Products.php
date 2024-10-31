<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Table Binding with Javascript and CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Product Details</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount Percentage</th>
                <th>Rating</th>
                <th>Stock</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Thumbnail</th>
            </tr>
        </thead>
        <tbody id="tableRows"></tbody>
    </table>
    <script>
        fetch("https://dummyjson.com/products")
        //.then(res => console.log(result))
        .then(response => response.json())
        .then(res => {
            const data = res.products;
            let rows = '';
            data.forEach(product => {
                rows += `<tr><td>${product.id}</td><td>${product.title}</td><td>${product.description}</td><td>${product.price}</td><td>${product.discountPercentage}</td><td>${product.rating}</td><td>${product.stock}</td><td>${product.brand}</td><td>${product.category}</td><td><img src="${product.thumbnail}" style="width: 100px; height: 100px;" ></td></tr>`;
            })
            console.log(rows)
            document.getElementById('tableRows').innerHTML = rows;
        })
        .catch(error => console.log(error));
    </script>
</body>
</html>