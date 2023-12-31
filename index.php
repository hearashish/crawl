<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div id="container" class="">
        <div class="d-flex justify-content-center align-items-center container ">
    <div class="row ">
        <h1>Web Crawler</h1>

        <form method="post" action="crawl.php">
            <input type="submit" name="crawl_button" value="Start Crawling" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">
            <input type="submit" name="display_button" value="Display Previous Crawl" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">
        </form>
    </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>