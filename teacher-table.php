<?php
include_once('connect.php');
$sql = "SELECT id,name,email,nrc,phone1,phone2,contact_address,gender,join_date,is_left FROM teachers";
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
      <th>ID</th>
      <th>Name</th>
      <th>E-mail</th>
      <th>Nrc</th>
      <th>Phone 01</th>
      <th>Phone 02</th>
      <th>Address</th>
      <th>Gender</th>
      <th>Join Date</th>
      <th>Is_left</th>
    </tr>
    <?php
        if ($result->num_rows > 0) {
            while ($data = $result->fetch_assoc()) {
        ?>
    <tr>
      <td><?php echo $data['id']; ?> </td>
      <td><?php echo $data['name']; ?> </td>
      <td><?php echo $data['email']; ?> </td>
      <td><?php echo $data['nrc']; ?> </td>
      <td><?php echo $data['phone1']; ?> </td>
      <td><?php echo $data['phone2']; ?> </td>
      <td><?php echo $data['contact_address']; ?> </td>
      <td><?php echo $data['gender']; ?> </td>
      <td><?php echo $data['join_date']; ?> </td>
      <td><?php echo $data['is_left']; ?> </td>
    </tr>
    <?php
            }
        } ?>
  </table>
</body>

</html>