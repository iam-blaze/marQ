<?php
$con = mysqli_connect("localhost","root","","marQ");
$result = mysqli_query($con,"select * from project_rows") or die(mysql_error());
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/OlD Technologies.png" type="image/x-icon">
  <meta name="description" content="Responsive Bootstrap HTML Mobile Application Template - Free Download">

  <title>marQ - Developments</title>
      <link rel="stylesheet" href="css/list.css">
      <link rel="shortcut icon" href="assets/images/OlD Technologies.png" type="image/x-icon">
      <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
      <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
      <link rel="stylesheet" href="assets/tether/tether.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/list.css">
      <link rel="stylesheet" href="assets/animate.css/animate.min.css">
      <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
  <h3>marQ Developments</h3>
  <div id="list-form">
    <section>
        <table border="0">
          <tr>
            <th style="padding-right:10px;">S.no</th>
            <th class="list">NAME</th>
            <th class="list">PROJECT ID</th>
            <th class="list">WEBSITE LINK</th>
            <th class="list">GITHUB LINK</th>
          </tr>
          <?php
            $i=1;
            while($row= mysqli_fetch_array($result)) { ?>
          <tr>
            <td style="padding-right:10px;"><?php echo $i; $i=$i+1;?></td>
            <td class="list"><?php echo $row['project_name']; ?></td>
            <td class="list"><?php echo $row['project_id']; ?></td>
            <?php
            if($row['website_link']=="NULL") {
              echo '<td class="list">NILL</td>';
            }else if($row['project_name']=="Sirius NEXT") {
              echo '<td class="list"><a href=http://' . $row['website_link'] . ' ">GOTO ' . $row['project_name'] .'</a></td>';
            } else{
            echo '<td class="list"><a href=' . $row['website_link'] . ' ">GOTO ' . $row['project_name'] .'</a></td>';
           }?>
            <td class="list"><a href="https://<?php echo $row['github_link']; ?>">Link</a></td>
          </tr>
          <?php } ?>
        </table>
    </section>
  </div>

</body>
</html>
