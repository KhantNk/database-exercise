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
          <h1>Student Registration Form</h1>
        </div>
        <div class="panel-body">
          <form action="stu-insert.php" method="post">
            <div class="form-group pb-3">
              <label for="stu-name">Name</label>
              <input type="text" class="form-control" id="stu-name" name="stu-name" />
            </div>
            <div class="form-group pb-3">
              <label for="stu-email">Email</label>
              <input type="text" class="form-control" id="stu-email" name="stu-email" />
            </div>
            <div class="form-group pb-3">
              <label for="stu-ph-number">Phone Number</label>
              <input type="number" class="form-control" id="stu-ph-number" name="stu-ph-number" />
            </div>
            <div class="form-group pb-3">
              <label for="stu-address">Address</label>
              <input type="text" class="form-control" id="stu-address" name="stu-address" />
            </div>
            <div class="form-group pb-3">
              <label for="stu-gender">Gender</label>
              <input type="radio" name="stu-gender" value="male" />Male
              <input type="radio" name="stu-gender" value="female" />Female
              <input type="radio" name="stu-gender" value="other" />Other
            </div>

            <div class="form-group pb-3" data-provide="datepicker">
              <label for="stu-dob">Date of Birth</label>
              <input type="date" class="form-control" id="stu-dob" name="stu-dob" />
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