$(document).ready(function(){

    function getParameterByName(name, url) {
        if (!url) {
          url = window.location.href;
        }
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    } 
    
    var getaccountname = getParameterByName('account_name');
    var getaccountid = getParameterByName('account_id');
    var ipconfig = ipaddress();
    var showname = $(function(){
        $('.account_name').html(getaccountname);
    });

    $('#btn-present').on('click',function(){
      var status = 1;
      $('#loading').modal('show');
      getLocation(status);
    });

    $('#btn-absent').on('click',function(){
      var status = 0;
      $('#loading').modal('show');
      getLocation(status);
    });

    function getLocation(status){
      $('.progresslabel').html("Getting Current Location...");
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          $.ajax
           ({
              type: "GET",
              url: "https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyD-hdiDkYUMd96dLg2JLpah8EbrbvbakwM&latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true",
              success: function(data){
              var long_name = data.results[0].address_components[0].long_name;
              var formatted_address = data.results[0].formatted_address;
              var location_lat = data.results[0].geometry.location.lat;
              var location_long = data.results[0].geometry.location.lng;
              var final_loc = data.results[0].address_components[0].long_name+", "+formatted_address;
              $('.progresslabel').html("Saving Data...");
              saveToDB(location_lat, location_long, final_loc, status);
              },
              error: function(data){
                alert("Failed to get current location");
                window.location.reload();
              }
            });
        });
      }
    }

    function saveToDB(location_lat, location_long, final_loc, status){
      $.ajax({
        type: "POST",
        url: ipconfig+'userstatus.php',
        data: {location_lat:location_lat,location_long:location_long,final_loc:final_loc, status:status, getaccountid:getaccountid},
        success: function(response){
          var decode = $.parseJSON(response);
          $('#loading').modal('hide');
          $('#message-dialog').modal('show');
          $('.messagelabel').html(decode.message);
        },
        error: function(error){
          alert(error.responseTxt);
        }
      });
    }

});