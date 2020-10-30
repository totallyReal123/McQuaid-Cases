<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cases </title>
        <meta charset="utf-8">
        <link rel="icon" href="/media/logo.png">
        <!-- Bootstrap Stuff - Ugh-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Custom CSS Override -->
        <link rel="stylesheet" href="/css/custom.css">
    </head>

    <body>
      <?php include 'php/fetchdata.php'; ?>

      <div class="jumbotron text-center">
        <h1> How many cases does McQuaid have? </h1>
        <p> (Something you won't get emailed about)</p>
      </div>

      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="font-weight-bold" style="color: #fbb022;">
            <h1 style="font-size:20rem;"> <?php echo GetPositiveTotal($RETRIEVED_JSON); ?> </h1>
            <h1> Total Cases </h1>
          </div>
          <p> Last updated <?php echo GetLastUpdated($RETRIEVED_JSON); ?></p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">

        </div>
      </div>
    </body>
</html>
