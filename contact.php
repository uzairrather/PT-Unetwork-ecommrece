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
    .container{
        min-height: 87vh;
    }
</style>

<body>
<?php 
    include 'partials/dbconnect.php';?>
    <?php include 'partials/header.php' ;?>


    <div class="container my-4">
    <h2 class="text-center">Contact Us</h2>
    <form>
      <div class="mb-3">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlSelect1">Example your Query</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>About payment</option>
          <option>orders</option>
          <option>scam</option>
          <option>Others</option>
        </select>
      </div>
      <div class="mb-3 row">
        <div class="col-sm-2">Are you a member?</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
             Yes
            </label>
          </div>
        </div>
      </div>    
      <div class="mb-3">
        <label for="exampleFormControlTextarea1">Elaborate Your Concern</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="btn btn-primary">Submit</button>
    </form>
  </div>

    <?php include 'partials/footer.php' ;?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>