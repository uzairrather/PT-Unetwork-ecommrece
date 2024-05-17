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


</style>

<body>
    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/header.php';?>



    <section>
        <div class="container  ">
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
            
               echo '<div class="product col-md-6 ">
                    <div class="div mt-5">
                        <h4>pay online ecom store</h4>
                        <h2 class="mb-5">$'.$price.'.00</h2>
                        <div class="d-flex my-3">
                            <div class="flex-shrink-0">
                                <img src="img/'.$image.'" width="50px" alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3 ">

                                <h5 class="fw-bold my-0"><a class="text-dark" href="">'. $name .'</a></h5>
                                '. $desc .'
                            </div>
                            <div class="fw-bold my-0">$'.$price.'.00</div>

                        </div>
                    </div>
                </div>'.
            


                '<div class="payment col-md-6 my-0 ">
                    <form class="">
                        <div class="container mt-4 w-80 ms-4">
                            <h1 class=" text-center mb-4">Payment For Product</h1>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Name of card</label>
                                <input type="text" class="form-control" placeholder="mr. jon" autocomplete="off"
                                    id="card_name" name="card_name" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Credit Card Number</label>
                                <input type="number" class="form-control" placeholder="1111 2222 3333 4444"
                                    autocomplete="off" id="address" name="address" required="required">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Exp. Month</label>
                                <input type="text" class="form-control" placeholder="june" autocomplete="off" id="city"
                                    name="city" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Exp. Year </label>
                                <input type="number" class="form-control" placeholder="2025" autocomplete="off"
                                    id="phone" name="phone" required="required">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">CVV</label>
                                <input type="number" class="form-control" placeholder="123" autocomplete="off"
                                    id="pin_code" name="pin_code" required="required">
                            </div>
                            <div class="button">
                                <a href="address.php?product_id='. $id .'" class="btn btn-primary mt-4 w-100">PAY
                                    NOW</a>
                            </div>
                        </div>
                        

                </div>

                </form>

            </div>';}
            ?>
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