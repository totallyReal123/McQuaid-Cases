<!DOCTYPE html>
<html lang="en">
    <head>
        <title> McQuaid Jesuit COVID Cases </title>
        <meta charset="utf-8">
        <link rel="icon" href="/media/logo.png">
        <!-- Bootstrap Stuff - Ugh-->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <!-- Custom CSS Override -->
        <link rel="stylesheet" href="/css/custom.css">
    </head>

    <body>
      <?php include 'php/fetchdata.php'; ?>

      <div class="jumbotron text-center">
        <h1> How many cases does McQuaid have? </h1>
        <p> (Something you won't get emailed about)</p>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="font-weight-bold">
              <h1 class="case-number"> <?php echo GetPositiveTotal($RETRIEVED_JSON); ?> </h1>
              <h1 class="case-caption"> Total Cases </h1>
            </div>
            <p> Last updated <?php echo GetLastUpdated($RETRIEVED_JSON); ?></p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <h1 class="smaller-importants"> <?php echo GetStudentsAttendingSchool($RETRIEVED_JSON); ?> </h1>
            <h1 class="smaller-captions"> Students Attending School </h1>
          </div>
          <div class="col-lg-6 text-center">
            <h1 class="smaller-importants"> <?php echo GetStudentsAtHome($RETRIEVED_JSON); ?> </h1>
            <h1 class="smaller-captions"> Students At Home </h1>
          </div>
        </div>
      </div>
      <div class="mt-5">
      </div>
    </body>
</html>
