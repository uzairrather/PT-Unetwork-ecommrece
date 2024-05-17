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

                
                echo '<div class="payment col-md-12 my-0 ">
                    <form class="">
                        <div class="container mt-4 w-80 ms-4">
                            <h1 class=" text-center">insert product details</h1>
                            <div class="mb-3">
                                <label for="product-name" class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" autocomplete="off"
                                    id="first_name" name="first_name" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" autocomplete="off"
                                    id="last_name" name="last_name" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="Address" autocomplete="off"
                                    id="address" name="address" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Country</label>
                                <select name="country" id="country" class="form-select" required="required">
                                    <option value="">Select a Country
                                    <option>
                                    <option value="">Pakistan
                                    <option>
                                    <option value="">India
                                    <option>
                                    <option value="">USA
                                    <option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">City</label>
                                <input type="text" class="form-control" placeholder="City" autocomplete="off" id="city"
                                    name="city" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone </label>
                                <input type="number" class="form-control" placeholder="+91" autocomplete="off"
                                    id="phone" name="phone" required="required">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Pin Code</label>
                                <input type="number" class="form-control" placeholder="" autocomplete="off"
                                    id="pin_code" name="pin_code" required="required">
                            </div>
                            
                            
                            <div class="button">
                                <a href="order.php?product_id='. $id .'" class="btn btn-primary mt-4 mb-4 ">SUBMIT</a>
                            </div>
                        </div>
                        
                    </form>

                </div>' ;}?>
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