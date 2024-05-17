<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT-UNetwork</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
body {
    background-color: ghostwhite;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
}

.container {
    min-height: 80vh;
}


.small-img-group {
    display: flex;
    justify-content: space-between;
}

.small-img-group {
    cursor: pointer;
}

.product select {
    display: block;
    padding: 5px 10px;
}

.product input {
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 16px;
    margin-right: 10px;
}

.product input:focus {
    outline: none;
}

.buy-btn {
    padding: 10px 40px 10px 40px;
    border: 2px solid rgba(0, 0, 0, 0.253);
    background-color: rgb(36, 234, 30);
    color: ghostwhite;

}

.buy-btn:hover {
    color: aqua;
}

.product-section {
    background-color: ghostwhite;

}
</style>

<body>
    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/header.php';?>



    <section>
        <div class="container product ">
            <div class="row mt-5 ">
                <?php
        $id = $_GET['product_id'];
        $sql = "SELECT * FROM `products` WHERE product_id=$id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            // echo $row['product_name'];
            $name = $row['product_name'];
            $price = $row['product_price'];
            $desc = $row['product_details'];
            $image= $row['product_image'];
        

                echo '<div class="col-md-4">
                    <img class="img-fluid w-100 mb-2" src="img/'.$image.'">
                    <div class="small-img-group">
                        <div class="small-img-col ">
                            <img src="img/'.$image.'" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col ms-2">
                            <img src="img/'.$image.'" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col ms-2">
                            <img src="img/'.$image.'" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col ms-2">
                            <img src="img/'.$image.'" width="100%" class="small-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 ms-5">
                    <h6>Home / T- Shirt</h6>
                    <h3 class="py-4">'.$name.'</h3>
                    <h2>$'.$price.'.00</h2>
                    <select class="my-3">
                       <option >Select Size</option>
                       <option >XL</option>
                       <option >XXL</option>
                       <option >Small</option>
                       <option >Large</option>
                    </select>
                    <input type="number" value="1"> 
                         <a href="payment.php?product_id='. $id .'" class="buy-btn w-100">ORDER NOW</a>

                    <h4 class="mt-5 mb-4">Product details</h4>
                    <span>'.$desc.'</span>
                </div>';
            }?>
            </div>
        </div>
    </section>




    <?php
    include 'partials/footer.php';?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>


</html>