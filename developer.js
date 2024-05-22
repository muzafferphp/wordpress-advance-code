
var $ = jQuery;
var templateDir = "<?php bloginfo('template_directory') ?>";

$( document ).ready(function() {
   
      const firebaseConfig = {
        apiKey: "AIzaSyBqRCGuSyFpuJMYjXynF7lHbkpKCKMXxLE",
        authDomain: "yoga-sutra-admin.firebaseapp.com",
        projectId: "yoga-sutra-admin",
        storageBucket: "yoga-sutra-admin.appspot.com",
        messagingSenderId: "775537961048",
        appId: "1:775537961048:web:20668c3aa78bf64007022d",
        measurementId: "G-251EPE5XE1"
      };
      firebase.initializeApp(firebaseConfig);


});

// Add to cart product
$(document).on("click","#AddTocart",function() {

  /*  $.ajax({
      type : "POST",
      dataType : "json",
      url: "/wp-admin/admin-ajax.php",
      data : {action: "check_user"},
     success: function(response){
         if(response.status ==false){

            //alert(response.message);
            AddTocart();
         }
        
      }
   });*/

initApp();

});

    initApp = function() {
        firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
            // User is signed in.
            var displayName = user.displayName;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var uid = user.uid;
            var phoneNumber = user.phoneNumber;
            var providerData = user.providerData;

            if(!uid ==""){

            var loginFirebase = {};

            try{
              var loginFirebase = JSON.parse($.cookie('FIREBASE_LOGIN'));
            }catch(error){

            }
            //alert(loginFirebase.name);
               AddTocart();
            }

          } else {
                $(".error-messages").text("Please login before add to cart !").fadeIn();
                $(".error-messages").fadeOut(2000);

                setTimeout(function () {
                    window.location.href = '/user-login/';
                }, 1000);

          }
        }, function(error) {
          console.log(error);
        });
      }


function AddTocart(){
   var product_id =  $("#product_id").val();
   var product_category =  $("#product_category").val();
   var product_name =  $("#product_name").val();
   var product_duration =  $("#product_duration").val();
   var product_price =  $("#product_price").val();
   var AddTocart =  $("#AddTocart").val();
   var product_image =  $("#product_image").val();

   var data = {
     'action': 'addto_cart',
     'product_id': product_id,
     'product_category': product_category,
     'product_name': product_name,
     'product_duration': product_duration,
     'product_price': product_price,
     'product_image': product_image,
     'AddTocart': AddTocart
    };

   $.ajax({
      type : "POST",
      dataType : "json",
      url: "/wp-admin/admin-ajax.php",
      data : data,
     success: function(response){

         if(response.status ==true){
            
            if(response.statuscode ===200){
                $(".success-messages").text(response.message).fadeIn();
                $(".success-messages").fadeOut(4000);
            }else{
                $(".error-messages").text(response.message).fadeIn();
                $(".error-messages").fadeOut(4000);
            }

            setTimeout(function () {
                location.reload();
            }, 1000);

            
         }
      }
   });

}

// cart items remove
function removeItem(id,key){

    var data = {
     'action': 'removeitem',
     'product_id': id,
     'items_index': key
    };

   $.ajax({
      type : "POST",
      dataType : "json",
      url: "/wp-admin/admin-ajax.php",
      data : data,
     success: function(response){

         if(response.status ==true){
            if(response.statuscode ===200){
                $(".success-messages").text(response.message).fadeIn();
                $(".success-messages").fadeOut(2000);
            }else{
                $(".error-messages").text(response.message).fadeIn();
                $(".error-messages").fadeOut(2000);
            }

            setTimeout(function () {
               location.reload(true);
            }, 1000);

            //alert(response.message);
            
         }
      }
   });
}

//Chart checkout
$(document).on("click","#cartChekout", function() {
   
      $.ajax({
      type : "POST",
      dataType : "json",
      url: "/wp-admin/admin-ajax.php",
      data : {action: "checkout_cart"},
     success: function(response){

         if(response.status == true){

            if(response.statuscode ===200){

                window.location.href ="/checkout";
            
            }else{
                $(".error-messages").text(response.message).fadeIn();
                $(".error-messages").fadeOut(4000);
            }
            
         }else{
            $(".error-messages").text(response.message).fadeIn();
            $(".error-messages").fadeOut(4000);
            //location.reload(true);
         }
      }
   });

});


//Buy Now functionality
$(document).on("click","#buyNow", function() {

/*   var product_id =  $("#product_id").val();
   var product_category =  $("#product_category").val();
   var product_name =  $("#product_name").val();
   var product_duration =  $("#product_duration").val();
   var product_price =  $("#product_price").val();
   var AddTocart =  $("#AddTocart").val();
   var product_image =  $("#product_image").val();

   var data = {
     'action': 'addto_cart',
     'product_id': product_id,
     'product_category': product_category,
     'product_name': product_name,
     'product_duration': product_duration,
     'product_price': product_price,
     'product_image': product_image,
     'AddTocart': AddTocart
    };

   $.ajax({
      type : "POST",
      dataType : "json",
      url: "/wp-admin/admin-ajax.php",
      data : data,
     success: function(response){

         if(response.status ==true){
            alert(response.message);
            window.location.href ="/cart-list";
         }
      }
   });*/


   checkUsertinCheckout();

});


//Buy Now functionality
 function BuyNow() {

   var product_id =  $("#product_id").val();
   var product_category =  $("#product_category").val();
   var product_name =  $("#product_name").val();
   var product_duration =  $("#product_duration").val();
   var product_price =  $("#product_price").val();
   //var AddTocart =  $("#AddTocart").val();
   var product_image =  $("#product_image").val();

   var data = {
     'action': 'addto_cart',
     'product_id': product_id,
     'product_category': product_category,
     'product_name': product_name,
     'product_duration': product_duration,
     'product_price': product_price,
     'product_image': product_image,
     'AddTocart': 'AddTocart'
    };

   $.ajax({
      type : "POST",
      dataType : "json",
      url: "/wp-admin/admin-ajax.php",
      data : data,
     success: function(response){

         if(response.status ==true){

            if(response.statuscode ===200){
                $(".success-messages").text(response.message).fadeIn();
                $(".success-messages").fadeOut(4000);
            }else{
                $(".error-messages").text(response.message).fadeIn();
                $(".error-messages").fadeOut(4000);
            }

            setTimeout(function () {
                window.location.href ="/cart-list";
            }, 1000);


            //alert(response.message);
            
         }
      }
   });

}



   checkUsertinCheckout = function() {
        firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
            // User is signed in.
            var displayName = user.displayName;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var uid = user.uid;
            var phoneNumber = user.phoneNumber;
            var providerData = user.providerData;

            if(!uid ==""){

            var loginFirebase = {};

            try{
              var loginFirebase = JSON.parse($.cookie('FIREBASE_LOGIN'));
            }catch(error){

            }
            //alert(loginFirebase.name);
               BuyNow();
            }

          } else {
               //alert("Please login before add to cart !");
                $(".success-messages").text("Please login before add to cart !").fadeIn();
                $(".success-messages").fadeOut(4000);
               window.location.href = '/user-login/';
          }
        }, function(error) {
          console.log(error);
        });
   }

// Logout login user 
 function LogoutUser(){
   firebase.auth().signOut().then(function() {
    $.removeCookie("FIREBASE_LOGIN", { path: '/' });
    $.cookie("FIREBASE_LOGIN", null, { path: '/' });
    //alert('You have successfully log out');

    $(".success-messages").text("You have successfully log out").fadeIn();
    $(".success-messages").fadeOut(1000);
    setTimeout(function () {
            location.reload();
        }, 2000);
    window.location.href = '/';

   }, function(error) {
     console.error('Sign Out Error', error);
   });

 }


 // Quize submit

 $(document).on("click","#submitQuize",function(e){

       $("#QuizeForm").validate({

            rules: {
                quest_1: {
                    required: true
                 },
                 quest_2: {
                   required: true
                 },
                 quest_3: {
                   required: true
                 },
                 quest_4: {
                   required: true
                 },
                 quest_5: {
                    required: true
                 },
                 quest_6: {
                    required: true
                 },
                 quest_7: {
                    required: true
                 },
                 quest_8: {
                    required: true
                 },
                 quest_9: {
                    required: true
                 },
                 quest_10: {
                    required: true
                 },
                 quest_11: {
                    required: true
                 }
            },
        
        submitHandler: function(form,e) {

            firebase.auth().onAuthStateChanged(function(user){
                
                if (user) {
                    var logname = user.displayName;
                    var logemail = user.email;
                    var phoneNumber = user.phoneNumber;
                    $("#UserName").val(logname);
                    $("#UserEmail").val(logemail);
                    $("#Mobile").val(phoneNumber);
                    return true;
                }else{

                    var name = $("#UserName").val();
                    var email = $("#UserEmail").val();
                    var mobile = $("#Mobile").val();
                    var countryCode = $("#countryCode").val(); 


                     if(name==""){
                        $("#formError").text("Name field is required");
                        var modal = document.getElementById("myModal");
                        modal.style.display = "block";
                        $("#UserName" ).focus();
                        return false;
                    }


                    if(email==""){
                        $("#formError").text("Email field is required");
                        var modal = document.getElementById("myModal");
                        modal.style.display = "block";
                        $("#UserEmail" ).focus();
                        return false;
                    }


                    if(countryCode==""){
                        $("#formError").text("Country code field is required");
                        var modal = document.getElementById("myModal");
                        modal.style.display = "block";
                        $("#countryCode" ).focus();
                        return false;
                    }

                    if(mobile==""){
                        $("#formError").text("Mobile field is required");
                        var modal = document.getElementById("myModal");
                        modal.style.display = "block";
                        $("#Mobile" ).focus();
                        return false;
                    }

                    if(mobile < 8 || mobile > 10){
                        $("#formError").text("Mobile number must be between 8 and 10");
                        var modal = document.getElementById("myModal");
                        modal.style.display = "block";
                        $("#Mobile" ).focus();
                        return false;
                    }



                    function IsEmail(email) {
                    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if (!regex.test(email)){
                            return false;
                            }else {
                            return true;
                        }
                    }

                       if( email!=="" && mobile!==""){

                            if (IsEmail(email) == false) {
                                $('#formError').html("Email address is not valid");
                                var modal = document.getElementById("myModal");
                                modal.style.display = "block";
                                return false;
                            }

                            if($.isNumeric(mobile) === false){
                                $("#formError").text("Only numeric mobile no");
                                var modal = document.getElementById("myModal");
                                modal.style.display = "block";
                                $("#Mobile" ).focus();
                                return false;
                            }

                    }else{
                        var modal = document.getElementById("myModal");
                        modal.style.display = "block";
                        //alert("Please enter your name and email");
                        return false;
                    }

                }

            });
            


            $('html, body').animate({scrollTop:0}, 'slow');
            $("#pageloader").fadeIn();
            $("#formError").empty();

            var quest_1 = $('input[name="quest_1"]:checked').val();
            var quest_2 = $('input[name="quest_2"]:checked').val();
            var quest_3 = $('input[name="quest_3"]:checked').val();
            var quest_4 = $('input[name="quest_4"]:checked').val();
            var quest_5 = $('input[name="quest_5"]:checked').val();
            var quest_6 = $('input[name="quest_6"]:checked').val();
            var quest_7 = $('input[name="quest_6"]:checked').val();
            var quest_8 = $('input[name="quest_8"]:checked').val();
            var quest_9 = $('input[name="quest_9"]:checked').val();
            var quest_10 = $('input[name="quest_10"]:checked').val();
            var quest_11 = $('input[name="quest_11"]:checked').val();
            //var name = logname && logname!=undefined ? logname:name;
            //var email = logemail && logemail!=undefined ? logemail:email;
            var name = $("#UserName").val();
            var email = $("#UserEmail").val();
            var mobile = $("#Mobile").val();
            var countryCode = $("#countryCode").val();

            total_no =0;


            var total_yes = parseInt(quest_1)+parseInt(quest_2)+parseInt(quest_3)+parseInt(quest_4)+parseInt(quest_5)+parseInt(quest_6)+parseInt(quest_7)+parseInt(quest_8)+parseInt(quest_9)+parseInt(quest_10)+parseInt(quest_11);

            var totalAverage = total_yes/11;
            var totalAverag = Math.trunc(totalAverage);
            var data = {
                    'action': 'quize_submite',
                    'total_yes': total_yes,
                    'totalAverag': totalAverag,
                    'total_no': total_no,
                    'quest_1': quest_1,
                    'quest_2': quest_2,
                    'quest_3': quest_3,
                    'quest_4': quest_4,
                    'quest_5': quest_5,
                    'quest_6': quest_6,
                    'quest_7': quest_7,
                    'quest_8': quest_8,
                    'quest_9': quest_9,
                    'quest_10': quest_10,
                    'quest_11': quest_11,
                    'name': name,
                    'email': email,
                    'mobile': countryCode+mobile
                };

            $.ajax({
                  type : "POST",
                  dataType : "json",
                  url: "/wp-admin/admin-ajax.php",
                  data : data,
                 success: function(response){
                      if(response.status == true){

                        //alert(response.total_yes);
                        //alert(response.total_no);
                         $("#formError").empty();
                        
                         $("#pageloader").fadeOut();

                        $(".success-messages").text(response.message).fadeIn();
                        $(".success-messages").fadeOut(4000);
                        window.location = '/quize-result/?keyanswer=' + totalAverag;

                      }else{
                        $("#pageloader").fadeOut();
                        $(".error-messages").text(response.message).fadeIn();
                        $(".error-messages").fadeOut(4000);
                      }
                 }

            });

            e.preventDefault();
            return false;
         }

       });
});


$(document).on("click","#AddInfo",function(e){

    var name = $("#UserName").val();
    var email = $("#UserEmail").val();
    var mobile = $("#Mobile").val();
    var countryCode = $("#countryCode").val();


    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)){
                return false;
                }else {
                    return true;
            }
    }

    if(name==""){
        $("#formError").text("Name field is required");
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        $("#UserName" ).focus();
        return false;
    }


    if(email==""){
        $("#formError").text("Email field is required");
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        $("#UserEmail" ).focus();
        return false;
    }

     if (IsEmail(email) == false) {
            $('#formError').html("Email address is not valid");
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            return false;
        }


    if(countryCode==""){
        $("#formError").text("Country code field is required");
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        $("#countryCode" ).focus();
        return false;
    }

    if(mobile==""){
        $("#formError").text("Mobile field is required");
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        $("#Mobile" ).focus();
        return false;
    }

    if(mobile.length < 8 || mobile.length> 10){
        $("#formError").text("Mobile number must be between 8 and 10");
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        $("#Mobile" ).focus();
        return false;
    }

    if($.isNumeric(mobile) === false){
            $("#formError").text("Only numeric mobile no");
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            $("#Mobile" ).focus();
            return false;
        }else{
            $("#formError").empty();
            return true;
        }

});


$(document).on("click","#modelClose",function(e){

    var modal = document.getElementById("myModal");
    modal.style.display = "none";
    return false;
});


/*$(document).ready(function() {
    jQuery("#logedInuserEmail").val("<?=$userData->email?>");
    jQuery("#logedInuserName").val("<?=$userData->name?>");
});*/