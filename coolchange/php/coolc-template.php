<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="utf-8" />
  <title>Timelpase Philippines</title>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.2.3/bootstrap-table.min.css" />
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.0.2/css/bootstrap2/bootstrap-switch.css"/>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.css">
  <link rel="stylesheet" type="text/css" href="../../css/coolc.css" />

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.0.2/js/bootstrap-switch.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.2.3/bootstrap-table.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.js"></script>
  <script type="text/javascript" src="../../js/coolc.js"></script>
</head>

<body>
  <div class="container">
    <div>
      <h2>Project Videos</h2>
        <?php
          include 'project-videos.php';
        ?>
    </div>
    <div>
      <?php include 'data/project-video-data.php' ?>
    </div>
  </div>
</body>

</html>
