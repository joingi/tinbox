<!DOCTYPE html>
<html>
<head>
  <title>Tinderbox Map</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/mystyle.css">
  </head>

  <body class="map-body">
  <!-- Full width - height background -->
  <div class="background">
    <img src="<?php echo base_url(); ?>public/img/background-schedule.png" alt="background-map">
  </div>

  <div class="container-fluid ">
      <div class="row">
         <div class="col-xs-12 hr-container">
            <hr class="first-hr">
          </div> <!-- END OF THE ROW -->
      </div> <!-- END OF THE CONTAINER-FLUID -->
  </div>

  <div class="container schedule-title">
    <div class="row">
        <div class="col-xs-2">
          <a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <div class="col-xs-8">
          <h2 class="title-page">MAP</h2>
        </div>
        <div class="col-xs-offset-1 col-xs-10">
          <hr class="second-hr">
        </div>
    </div>
  </div>
<!-- <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div> -->
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }

      // $('.dropdown-toggle').dropdown()
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANyDphZ75eS8XeiYgLTDSFQwT2-bpk-Ss&callback=initMap"
    async defer></script>
  </body>
</html>