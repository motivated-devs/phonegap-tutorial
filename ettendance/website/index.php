<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" />
    <title>E-ttendance</title>
    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_css/index.css">
    <link rel="stylesheet" href="css/font_awesome/css/all.css">
    <script src="js/jquery/jquery-3.5.1.min.js"></script>
    <script src="js/popper_js/popper.min.js"></script>
    <script src="js/bootstrap_js/bootstrap.min.js"></script>
    <style>
        html, body{
            height: 100%;
            width: 100%;
        }

        .align-middle-parent{
            display: table;
            height: 100%;
            width: 100%;
            text-align: center;
        }

        .align-middle-child{
            display: table-cell;
            vertical-align: middle;
        }

        .btn-download{
            padding: 1em;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="position: fixed; width: 100%">
  <a class="navbar-brand" href="#" style="color: white">E-ttendance</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none; outline: none; color: white">
    <span class="fa fa-bars fa-1x"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="#" style="color: white">Home</a>
    </form>
  </div>
</nav>
<div class="container">
    <div class="align-middle-parent">
        <div class="align-middle-child">
            <h1 class="mb-3">Download the Attendance report of your people here!</h1>
            <h3><i>Fast, Easy and Simple!</i></h3>
            <!-- <div class="mb-5"></div> -->
            <hr>
            <form action="../app_processes/download.php" method="POST">
            <button class="btn btn-danger btn-download">DOWNLOAD REPORT</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
