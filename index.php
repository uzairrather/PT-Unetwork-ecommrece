<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT-Unetwork</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
 body{
    background-color: ghostwhite;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';  
}
</style>


<body class="bg-light">
    <?php include 'partials/dbconnect.php' ;?>
    <?php include 'partials/header.php' ;?>

    <!-- /////CAROUSEL START HERE/// -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carasoul-1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carasoul-2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carasoul-3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- //categories tstarts here -->
    <div class="container my-4 ">
        <h2 class="text-center my-4"> PT-UNetwork- Browse Categories</h2>
        <div class="row my-4">
            <!-- use while loop to iterate through categories -->
            <?php
            $sql = "SELECT * FROM `pt-categories`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                // echo $row['category_id'];
                // echo $row['category_name'];
                //substr string means how many words of description you need to show
                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];

                echo'<div class="col-md-3 my-2">
                <div class="card" style="width: 18rem">
                    <img src="https://source.unsplash.com/random/400x400/?'. $cat .', shopping" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                        <p class="card-text">'. substr($desc,0,150) .'...</p> 
                        
                    </div>
                </div>
            </div>';

    }
    ?>

        </div>
    </div>

    <div class="container my-4 ">
        <h2 class="text-center my-4">  ALL Categories</h2>
        <div class="row my-4">
          <?php
         
        $sql2 = "SELECT * FROM `products`";
        $result2 = mysqli_query($conn, $sql2);
        while($row = mysqli_fetch_assoc($result2)){
                // echo $row['product_id'];
            $product_id = $row['product_id'];
            $name = $row['product_name'];
            $price = $row['product_price'];
            $image = $row['product_image'];

            echo '<div class="col-md-3 my-2">
            <div class="card " style="width: 18rem;">
                <img src="img/'.$image.'" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">'.$name.'</h5>
                    <span class="price fw-bold ">$'.$price.'.00</span>
                    <div class="button">
                        <a href="products.php?product_id=' . $product_id. '" class="btn btn-primary mt-4">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>';
     }
     
?>
                        
        </div>
    </div>




    <?php include 'partials/footer.php' ;?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>