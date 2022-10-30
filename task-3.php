<!DOCTYPE html>
<html>

<head>
  <title>Task-3</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style>
    .black-box {
      background-color: black;
      width: 60px;
      height: 60px;
      float: left;
      margin: 0;
    }

    .white-box {
      background-color: white;
      width: 60px;
      height: 60px;
      float: left;
      margin: 0;
    }

    .clear {
      clear: both;
    }

    .container {
      margin: auto;
      width: fit-content;
      border: 1px solid black;
    }

  </style>
</head>

<body>
  <!-- cell 270px wide (8 columns x 60px) -->
  <div class="container">
    <?php
    for ($i = 0; $i <= 7; $i++) {
      for ($j = 0; $j <= 7; $j++) {
        if ((($i + $j) % 2) == 0) {
    ?>
          <div class="black-box">&nbsp;</div>
        <?php
        } else {
        ?>
          <div class="white-box">&nbsp;</div>
      <?php
        }
      }
      ?>
      <div class="clear"></div>
    <?php
    }
    ?>
  </div>

  </table>
</body>
</html>
