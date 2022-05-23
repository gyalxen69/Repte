<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>ALL THE STARS</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php include("../starfield.php") ?>
  <?php
      if(is_array($fetchData)){
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['username']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
</body>
</html>
