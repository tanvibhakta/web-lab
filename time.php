<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="1">
</head>
<body>
  <h1>Display Current Date & Time</h1>
  <h2>
    <?php
    date_default_timezone_set('Asia/Kolkata');
    echo date("H : i : s a");
    ?>
  </h2>
</body>
</html>
