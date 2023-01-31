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
          <h1>Course Update</h1>
        </div>
        <div class="panel-body">
          <form action="course-insert.php" method="post">
            <div class="form-group pb-3">
              <label for="name">Course Name</label>
              <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="form-group pb-3">
              <label for="number">Description</label>
              <textarea type="number" class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group pb-3">
              <label for="lessons">Total Lessons</label>
              <input type="number" class="form-control" id="lessons" name="lessons" />
            </div>
            <div class="form-group pb-3" data-provide="datepicker">
              <label for="strt-date">Start Date</label>
              <input type="date" class="form-control" id="strt-date" name="strt-date" />
            </div>
            <div class="form-group pb-3">
              <label for="duration">Course Duration</label>
              <input type="number" class="form-control" id="duration" name="duration" />
            </div>
            <input name=submit type="submit" class="btn btn-primary" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>