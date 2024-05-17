<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT-UNetwork</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
#maincontainer {
    min-height: 89vh;
}
</style>

<body>
    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/header.php';?>


    <!-- Search results starts here -->
    <div class="container my-3" id="maincontainer">
        <h1 class="py-2 text-center ">Search results for <em> "<?php echo $_GET['search']?>" </em></h1>
        <div class="container my-4 ">
            <div class="row my-4">
                <?php
        $noResults = true;
        $query = $_GET["search"];
        $sql = "SELECT * FROM `products` where match (product_name, product_details) against ('$query')";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['product_name'];
            $price = $row['product_price'];
            $image = $row['product_image'];
            $pro_id = $row['product_id'];
            
            
            $url = "products.php?product_id=". $pro_id  ;
            $noResults = false;
            echo '
                    <div class="col-md-3 my-2">
                        <div class="card " style="width: 18rem;">
                            <img src="img/'.$image.'" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">'.$name.'</h5>
                                <span class="price fw-bold ">$'.$price.'.00</span>
                                <div class="button">
                                    <a href="' . $url . '" class="btn btn-primary mt-4">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            
            
        }
        if($noResults){
            echo '<div class="container my-4 p-2 bg-info">
            <div class="contain p-5">
                <h1 class="display-4 ">No Results Found </h1>
                <p class="lead">Suggestions: <ul>
                    <li>Make sure that all the words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more genral keywords.</li>
                    </ul>
                </p>
            </div>
        </div>' ;
    }

    ?>

            </div>
        </div>
    </div>



    <?php
    include 'partials/footer.php';?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>


</html>