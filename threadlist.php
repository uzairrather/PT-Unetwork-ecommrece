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
.container {
    min-height: 87vh;
   
    
}
</style>


<body class="bg-light">
    <?php include 'partials/dbconnect.php' ;?>
    <?php include 'partials/header.php' ;?>
    

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `pt-categories` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }

   ?>
    
<!-- 
    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        // echo $method;
        if($method=='POST'){
            //insert into the thread db
            $th_title = $_POST['title'];
            $th_desc = $_POST['desc'];

            $sno= $_POST['sno'];
            $sql = "INSERT INTO `pt-threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`,
             `timestamp`) VALUES ( '$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
             $result = mysqli_query($conn, $sql);
             $showAlert = true;
             if($showAlert){
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success! </strong> Your thread has been added! please wait for team to respond .
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             }

        }
   ?> -->

    <div class="container my-4 p-2 bg-info">
        <div class="sub p-5">
            <h1 class="display-4 ">Welcome to <?php echo $catname ;?> Forums</h1>
            <p class="lead"> <?php echo $catdesc ;?> </p>
            <hr class="my-4">
            <p>This is a perr to peer forum for sharing knowledge with each other.
                Any harassment or hateful conduct, including discrimination, hate speech, bullying, or targeted attacks
                Impersonating other users (less of an overt problem on pseudonymous platforms)
                Spam and scams
                Sexual content or nudity
                Any violent conduct: extreme violence, graphic violence, threats, gore, obscenities
                Harming others or acting maliciously
            </p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
        
    <!-- <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
       echo '<div class="container">
            <h1>Start a Discussion</h1>
            <form action="' . $_SERVER["REQUEST_URI"] .'" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">problem Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">keep your title as short and crisp as possible</div>
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Ellaborate Your Concern</label>
            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>';
    }

    else{
    echo '<div class="container">
        <h1 class="py-2"> Start a Discussion</h1>
        <p class="lead">You are not logged in. please login tp be able to start a discussion</p>
    </div>';
    }
    ?> -->
    <!-- <div class="container" id="height">
        <h1>Browse Questions</h1>
        <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `pt-threads` WHERE thread_cat_id=$id";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_time = $row['timestamp'];

        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT user_email FROM `pt-users` WHERE sno='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2) ;
        
        
    echo '<div class="d-flex my-3">
            <div class="flex-shrink-0">
             <img src="img/userdefault.png" width="50px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3 ">'.
            
            '<h5 class="fw-bold my-0"><a class="text-dark" href ="thread.php?threadid=' . $id. '">'.$title.' </a></h5>
             ' . $desc . '
             </div>'.'<div class="fw-bold my-0">Asked by: '.$row2['user_email'].' at '.$thread_time.'  </div> '.
    '</div>';
    }

    //   echo var_dump($noResult);
      if($noResult){
                echo '<div class="container my-4 p-2 bg-info">
                <div class="contain p-5">
                    <h1 class="display-4 ">No Threads Found </h1>
                    <p class="lead">Be the first person to ask a question </p>
                </div>
            </div>' ;
      }?>
    </div> -->
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