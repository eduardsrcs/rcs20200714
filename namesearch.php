<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search by name</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
  <form class="w-25" action="getdata.php" method="GET">
      <div class="form-group">
        <label for="name">Email address</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="uname">

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>