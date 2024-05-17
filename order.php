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
                        $name = $row['product_name'];
                        $price = $row['product_price'];
                        $desc = $row['product_details'];
                        $image= $row['product_image'];

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name </th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qantity</th>
                            <th scope="col">status</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td><img src="img/'.$image.'" width="50px" alt="..."></td>
                            <td>$'.$price.'.0</td>
                            <td>1</td>
                            <td>paid</td>
                            <td>delete</td>
                        </tr>
                        
                    </tbody>
                </table>';}?>
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