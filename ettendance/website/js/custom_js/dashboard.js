$(document).ready(function(){
    var getaccountname = getParameterByName('account_name');
    var showname = $(function(){
        $('.account_name').html(getaccountname);
    });

    $('.btn-present').click(function(){
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
                  console.log(final_loc);
                  },
                  error: function(data){
                    alert("Failed to get current location");
                    window.location.reload();
                  }
                });
            });
          }
    });
});