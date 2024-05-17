
<?php 
session_start();
echo '<nav class="navbar bg-info ">
        <div class="container-fluid">
        <span><img src="img/logo.png" width="60px"> <a class="navbar-brand" href="#"></a></span> 
            <div class="column">';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                echo '<span><img src="img/user.png" width="30px"><a class="me-5 mx-2 fw-bold" href="#">ACCOUNT</a>  </span>
                
                <span> <img src="img/shopping-cart.png" width ="30px"><a class="me-5 mx-2 fw-bold " href="order.php?product_id=">ORDERS</a></span>';}

            echo '</div>

        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-4">  
    <div class="container-fluid ">
        <a class="navbar-brand" href="/PT-forum">PT-Unetwork</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/PT-forum">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                       TOP Categories 
                    </a>
                    <ul class="dropdown-menu">';

                    $sql = "SELECT category_name, category_id FROM `pt-categories` LIMIT 4";    //// *;- means sab //every thing in data base
                    $result = mysqli_query($conn, $sql);
                     while($row = mysqli_fetch_assoc($result)){
                      echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['category_id']. '">'. $row['category_name'] .'</a>';  
                     }
                      
            echo ' </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="row mx-2 ">';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                echo '<form class="d-flex" role="search" method="get" action="search.php">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary " type="submit">Search</button>
                   <p class="text-light my-0 mt-2  mx-2"> welcome'. $_SESSION['useremail'] .' </p>
                  <a href="partials/logout.php" class="btn btn-outline-success ms-2">Logout</a>
                  </form>';
            }
            else{
                echo '<form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary " type="submit">Search</button>
                  
                  <botton class="btn btn-outline-success ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</botton>
                <botton class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</botton>
                </form>';
            }
            
       echo '</div>

        </div>
    </div>
</nav>';
include 'partials/loginModal.php';
include 'partials/signupModal.php';
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success! </strong> You CAN NOW LOGIN .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } 
?>