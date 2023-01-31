<?php
include_once('connect.php');
$sql = "SELECT name,email,phone,address,gender,dob from students";
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
      <th>Name</th>
      <th>E-mail</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Gender</th>
      <th>DOB</th>
    </tr>
    <?php
        if ($result->num_rows > 0) {
            while ($data = $result->fetch_assoc()) {
        ?>
    <tr>
      <td><?php echo $data['name']; ?> </td>
      <td><?php echo $data['email']; ?> </td>
      <td><?php echo $data['phone']; ?> </td>
      <td><?php echo $data['address']; ?> </td>
      <td> <?php $gender = $data['gender'];
                            switch ($gender) {
                                case "m":
                                    echo "male";
                                    break;
                                case "f":
                                    echo "female";
                                    break;
                                case "o":
                                    echo "other";
                                    break;
                            }
                            ?> </td>
      <td><?php echo $data['dob']; ?> </td>
    </tr>
    <?php
            }
        } ?>
  </table>
</body>

</html>