<?php
include_once('connect.php');
$sql = "SELECT course_id,course_name,description,total_lessons,start_date,course_duration FROM courses";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (mysqli_num_rows($result) > 0) {
  ?>
  <table>
    <tr>
      <th>Course ID</th>
      <th>Course Name</th>
      <th>Description</th>
      <th>Total Lessons</th>
      <th>Start Date</th>
      <th>Duration</th>
    </tr>
    <?php
      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
      ?>
    <tr>
      <td><?php echo $data['course_name']; ?> </td>
      <td><?php echo $data['description']; ?> </td>
      <td><?php echo $data['total_lessons']; ?> </td>
      <td><?php echo $data['start_date']; ?> </td>
      <td><?php echo $data['course_duration']; ?> </td>
      <td><a href="update-process.php?id=<?php echo $data["id"]; ?>">Update</a></td>
    </tr>
    <?php
        $i++;
      }
      ?>
  </table>
  <?php
  } else {
    echo "No result found";
  }
  ?>
</body>

</html>