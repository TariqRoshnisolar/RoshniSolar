// $('#googleMap').locationpicker({
//   location: {latitude: $('#street_latitude').val(), longitude: $('#street_longitude').val()},
//   enableAutocomplete: true,
//   enableReverseGeocode: true,
//   radius: 0,
//   inputBinding: {
//     latitudeInput: $('#street_latitude'),
//     longitudeInput: $('#street_longitude'),
//     radiusInput: $('#us2-radius'),
//     locationNameInput: $('#street')
//   },
//   onchanged: function (currentLocation, radius, isMarkerDropped) {
//     var addressComponents = $(this).locationpicker('map').location.addressComponents;
//   }
// });

function saveContactData(){
  var formData = new FormData($("#contactForm")[0]);
  $.ajax({
    type: "POST",
    url: BASE_URL +'contact-save-data',
    data: formData,
    enctype:'multipart/form-data',
    contentType : false,
    processData : false,
    beforeSend:function(){
      $('.contactButton').prop('disabled',true);
      $('.contactButton').html(globalLang['processing']);
    },
    success:function(result){
      var data = jQuery.parseJSON(result);
      if(data.status == 1){
        $('.contactButton').html(globalLang['saved']);
        toastr.success(data.message, globalLang['success'], {timeOut: 1000,progressBar:true,closeButton:true,});
      } else {
        $('.contactButton').prop('disabled',false);
        $('.contactButton').html(globalLang['send']);
        toastr.error(data.message, globalLang['failed'], {timeOut: 2000,closeButton:true,progressBar:true});
      }
    }
  });
}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

function IsUrl(str){
  regexp =  /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
  if (regexp.test(str))
  {
    return true;
  }
  else
  {
    return false;
  }
}

function IsAlias(alias) {
  var regex = /^[a-zA-Z0-9_-]*$/;
  if(!regex.test(alias)) {
    return false;
  }else{
    return true;
  }
}

function is_numaric(event){
  var keycode = event.keyCode;
  if(keycode > 47 && keycode < 58){
    return true;
  }
  return false;

}

$(document).ready(function(){
$(".contactButton").click(function(){
    var enable = true;
    $( ".validatation" ).each(function( index,element ) {
      if($(element).val() == ''){
        toastr.error($(element).data('validate-msg'), globalLang['validation_failed'] , {timeOut: 2000,closeButton:true,progressBar:true});
        enable = false;
        return false;
      }     

      var message = $("#message").val();
      if (message !='' && message.length < 100) {
        toastr.error(globalLang['only_allow_100_charecter'], globalLang['validation_failed'] , {timeOut: 2000,closeButton:true,progressBar:true});
        enable = false;
        return false;
      }      

    });

    if(enable){
      saveContactData();
    }
  }); 


});





