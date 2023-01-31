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
  <table border="1">
    <tr>
      <th>Course ID</th>
      <th>Course Name</th>
      <th>Description</th>
      <th>Total Lessons</th>
      <th>Start Date</th>
      <th>Duration</th>
    </tr>
    <?php
    $i = 1;
        if ($result->num_rows > 0) {
            while ($data = $result->fetch_assoc()) {
        ?>
    <tr>
      <td><?php echo $data['course_id']; ?> </td>
      <td><?php echo $data['course_name']; ?> </td>
      <td><?php echo $data['description']; ?> </td>
      <td><?php echo $data['total_lessons']; ?> </td>
      <td><?php echo $data['start_date']; ?> </td>
      <td><?php echo $data['course_duration']; ?> </td>
    </tr>
    <?php
                $i++;
            }
        } ?>
  </table>
</body>

</html>