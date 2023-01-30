<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container p-5">
    <div class="row col-md-6 col-md-offset-3 m-auto">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Teacher Registration Form</h1>
        </div>
        <div class="teache-insert.php"></div>
        <div class="panel-body">
          <form action="teacher-insert.php" method="post">
            <div class="form-group pb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="form-group pb-3">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" />
            </div>
            <div class="form-group pb-3">
              <label for="nrc-number">NRC Number</label>
              <input type="text" class="form-control" id="nrc-number" name="nrc-number" />
            </div>
            <div class="form-group pb-3">
              <label for="ph-number-01">Phone Number 1</label>
              <input type="text" class="form-control" id="ph-number-01" name="ph-number-01" />
            </div>
            <div class="form-group pb-3">
              <label for="ph-number-02">Phone Number 2</label>
              <input type="text" class="form-control" id="ph-number-02" name="ph-number-02" />
            </div>
            <div class="form-group pb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" />
            </div>
            <div class="form-group pb-3">
              <label for="gender">Gender</label>
              <input type="radio" name="gender" value="male" />Male
              <input type="radio" name="gender" value="female" />Female
              <input type="radio" name="gender" value="other" />Other
            </div>
            <div class="form-group pb-3" data-provide="datepicker">
              <label for="join-date">Join Date</label>
              <input type="date" class="form-control" id="join-date" name="join-date" />
            </div>
            <div class="form-group pb-3">
              <input type="radio" name="status" value="T" />Active
              <input type="radio" name="status" value="F" />Resigned
            </div>
            <input name=submit type="submit" class="btn btn-primary" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>