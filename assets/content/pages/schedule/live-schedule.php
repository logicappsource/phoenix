<?php 
//cross domain acces
 header('Access-Control-Allow-Origin:*');

 //Array sheets
  $aCompanies = [
  "https://spreadsheets.google.com/feeds/list/1eiZfKyIQ5e66CwU3e6Pi2hm3gRfRiUHjoP9kGk2kHAA/1/public/full?alt=json",
  "https://spreadsheets.google.com/feeds/list/1NoSXTQFtqZyL0o6n5QIVnDVDCG4THRZPhVAao9gG8jo/1/public/full?alt=json"
  ];

//array of json objects 
$ajCompanies = []; 


//looping htorugh array of companies and saves as stringCompanies variable
foreach($aCompanies as $sCompanyLink){


  //gets  $Strng  companies and saves in sCompany
  $jCompany = file_get_contents($sCompanyLink);


  array_push($ajCompanies, $jCompany);

      //converting  JSON  t txt objects 
  $jgCompany = json_encode($jCompany);

// ENCODEE TO SAVE 
//saves all data to file data.txt 
//$dataPut = file_put_contents('data-sheet.txt', $jgCompany);


}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/stylesheets/live-events.css">
</head>
<body>

<script type="text/javascript">
  
      $("#btn-live-map-display").click(function(){
          $("#wdw-map").toggle();
      });

      $("#btn-stock").click(function() {

          $("#wdw-companies").toggle();
      });


</script>


   <div id="wdw-main-window">
   <div id="wdw-companies"></div>
    <div id="wdw-map">
    <div id="map"></div>
    </div>

  </div>


    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANqp5FvSLbrumLyBpohjcl1RHOUQwLyzE&callback=initMap"
    async defer></script>
    <script>

  var map;
  //template
  var sCompanyTemplate = '<div id="company-id-{{company-id}}" class="company"> \
                              <div><img src="{{company-icon}}"></div>\
                              <div class="company-name-and-price">\
                                <div class="company-name">{{company-name}}</div>\
                                <div class="company-price">{{company-price}}</div>\
                              </div>\
                              <div class="company-arrow"><i class="fa fa-sort fa5"></i></div>\
                              <div class="company-percentage">%</div>\
                               <p><button id="buy" class="snip1351">Buy<i class="ion-plus-round"></i></button> \
                                  </div> \
                            </div><hr>';

  var gaCompaniesIds = [];


  /**********************************************************************/
  /**********************************************************************/
  function initMap() {


    map = new google.maps.Map(document.getElementById('map'), {

      center: {lat: 55.701058, lng: 12.537260},
      zoom: 3,
      styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]

    });
    getDataFromGoogleSheet();
  }

 
  /**********************************************************************/
  /**********************************************************************/
  function getDataFromGoogleSheet(){
  /// muligvis error ---> chek
  //implement jquery foreach loop to loop through array of sheet here -> if(<2)
// a = [sheets fomr php]
       var sKey = "1NoSXTQFtqZyL0o6n5QIVnDVDCG4THRZPhVAao9gG8jo";
       var sLink = "https://spreadsheets.google.com/feeds/list/"+sKey+"/1/public/full?alt=json";

        $.ajax({
          "url":sLink,
          "method":"get",
          "dataType":"JSON",
          "cache":false
        }).done( function( jData ){

          gaCompaniesIds = []; // empty the array every iteration
         
          jData.feed.entry.forEach( function( jCompany ){        
            // console.log(jCompany.gsx$latitude.$t + " " +  jCompany.gsx$longitude.$t);
                var sCompanyId = jCompany.gsx$id.$t;
                var sCompanyName = jCompany.gsx$name.$t;
                var sCompanyPrice = Number( jCompany.gsx$price.$t );
                //var sCompanyPrice = "$" + sCompanyPrice;
                var fCompanyLatitude = jCompany.gsx$lat.$t;
                var fCompanyLongitude = jCompany.gsx$long.$t;
                var sCompanyIcon = jCompany.gsx$icon.$t;
                
            setMarker(fCompanyLatitude, fCompanyLongitude, sCompanyPrice);

            // push to the array every id of every company
            var sCompanyIdToArray = "company-id-"+sCompanyId;
            gaCompaniesIds.push(sCompanyIdToArray); // company-id-1001  company-id-2002

            // Check if a compnay exists, if not then created
            if( $("#company-id-"+sCompanyId).length == 0){
              // show company in the window for companies
                  var sTempCompany = sCompanyTemplate;
                  sTempCompany = sTempCompany.replace("{{company-id}}", sCompanyId);
                  sTempCompany = sTempCompany.replace("{{company-icon}}", sCompanyIcon);
                  sTempCompany = sTempCompany.replace("{{company-name}}", sCompanyName);
                  sTempCompany = sTempCompany.replace("{{company-price}}", sCompanyPrice);

              $("#wdw-companies").append(sTempCompany);
            }else{ // yes, the company exists
              var sPriceInDom = Number($("#company-id-"+sCompanyId+" .company-price").text());
              // console.log(sPriceInDom);

              // Calculating % difference
              var changePercentage = ((sCompanyPrice / sPriceInDom) * 100) - 100;
              var iPercent = changePercentage.toFixed(4);

              switch(true){

                // company down
                case sPriceInDom > sCompanyPrice:
                  $("#company-id-"+sCompanyId+" .company-name").css("color","red");
                  $("#company-id-"+sCompanyId+" .company-price").css("color","red");
                  $("#company-id-"+sCompanyId+" .fa").css("color","red");
                  $("#company-id-"+sCompanyId+" .fa").removeClass().addClass("fa fa-arrow-down");
                  $("#company-id-"+sCompanyId+" .company-percentage").text(iPercent+" %"); 
                  $("#company-id-"+sCompanyId+" .company-percentage").css("color","red");                 
                break;

                // company up
                case sPriceInDom < sCompanyPrice:
                  $("#company-id-"+sCompanyId+" .company-name").css("color","green");
                  $("#company-id-"+sCompanyId+" .company-price").css("color","green");
                  $("#company-id-"+sCompanyId+" .fa").css("color","green");
                  $("#company-id-"+sCompanyId+" .fa").removeClass().addClass("fa fa-arrow-up");
                  $("#company-id-"+sCompanyId+" .company-percentage").text(iPercent+" %"  );
                  $("#company-id-"+sCompanyId+" .company-percentage").css("color","green");
                break;
              }

              $("#company-id-"+sCompanyId+" .company-price").text(sCompanyPrice);
            }
          })

            // COMPANIES GONE
            $.each( $(".company"), function(){
              // console.log("x");
              if( gaCompaniesIds.indexOf(  $(this).attr("id") ) == -1 ){
                $(this).fadeOut(5000);
              }
            });
          });
      }

           /**********************************************************************/
           /*************************** Buying & Selling *************************/
           /**********************************************************************/
/*
            $.ajax({
              "url":"universal-stock-data.json",
              "method":"get",
              "dataType":"JSON",
              "cache": false 
            }).done(function(jDataId) {

                // var sCompanyIdBackend = jDataId.gsx$id.$t; 
                //1. get id from backend
                //2 save id to php session 
                //3 then compare from backend with frontend to buy or sell
            });
*/
/*
            $("#buy").click(function() {
              var sBuyLink = "service-buy-stock.php";
                var sCompanyIdFront = $("#company-id-").val();

                 if( gaCompaniesIds.indexOf == $(this).attr("id") ) {

                     $.ajax({
                  "url": sBuyLink,
                  "method":"get",
                  "dataType":"JSON",
                  "cache":false 
                }).done(function(jDataBuy) {
                    console.log("Stock Option Have been Purchased!")
                });
                } else {
                  console.log("did but");
                }

               
            }); */

            /*
            $("#sell").click(function(jDataSell) {
                var sSellLink  = "service-sell-stock.php";

                $.ajax({
                  "url":sSellLink,
                  "method":"get",
                  "dataType":"JSON",
                  "cache": false
                }).done(function() {
                    console.log("Stock Option have been sold! ");
                });
            });
                  */
      /**********************************************************************/
      /**************************Google maps Display !***********************/
      /**********************************************************************/
      function setMarker(fLatitude, fLongitude, sPrice){

       var image = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';

        //Prizes RATIO between -> icons, form the sheet or tournements

        if(sPrice >= 500){
          image = "data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI5Ni40NzMgMjk2LjQ3MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjk2LjQ3MyAyOTYuNDczOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPHBhdGggZD0iTTE0OC4yMzcsMEM2Ni4zNjgsMCwwLjAwMSw2Ni4zNjcsMC4wMDEsMTQ4LjIzNnM2Ni4zNjcsMTQ4LjIzNiwxNDguMjM2LDE0OC4yMzZjODEuODY3LDAsMTQ4LjIzNC02Ni4zNjcsMTQ4LjIzNC0xNDguMjM2ICAgUzIzMC4xMDQsMCwxNDguMjM3LDB6IE0yMjIuMDc1LDM4LjQ5NWwtOS40NDYsMTMuOTYyYy0xMi41NjktOC40NjctMjYuODk3LTE0LjUxOS00Mi4zMTktMTcuNTA2bDMuMzE0LTE2LjUyNSAgIEMxOTAuOTk0LDIxLjc4NSwyMDcuNDE3LDI4LjU4OCwyMjIuMDc1LDM4LjQ5NXogTTE1NS45MDMsMjE0LjAyNXYxNy4yMTFoLTE0di0xNy4xMjRjLTEwLTEuMDk5LTE5LjM4NC00LjkzLTI2LjQ0LTExLjQ5NSAgIGMtNy4wNTgtNi41NjQtMTAuMjg2LTE2LjIxNS0xMC4wNTQtMjguOTQxbDAuMzU4LTAuNDM5aDI0LjcyNmMwLDgsMS43NzksMTMuMzExLDUuMzM2LDE2LjY2NCAgIGMzLjU1OCwzLjM1NSw4LjA4Miw1LjAzNSwxMy41NzgsNS4wMzVjNS4yNjMsMCw5LjI5Ny0xLjQsMTIuMTAyLTQuMjA3YzIuODA1LTIuODA1LDQuMjA4LTYuNTc3LDQuMjA4LTExLjMyICAgYzAtNC42ODYtMS4zNDUtOC41MDItNC4wMzQtMTEuNDUxYy0yLjY4OS0yLjk1LTcuMzAzLTUuNjk2LTEzLjgzOC04LjI0MmMtMTIuODQxLTQuNjg2LTIyLjM3MS05LjkwNC0yOC41ODgtMTUuNjYgICBjLTYuMjE4LTUuNzU1LTkuMzI2LTEzLjg2Ny05LjMyNi0yNC4zMzZjMC05LjcxOCwyLjg3My0xNy42ODQsOS4wODktMjMuOTAyYzYuMjE3LTYuMjE3LDE0Ljg4MS05Ljg3NiwyNC44ODEtMTAuOTc2VjY2LjIzNmgxNCAgIHYxOC43NzhjMTAsMS41MDUsMTguMzEsNS43NTYsMjQuMTIzLDEyLjc1NGM1LjgxMyw2Ljk5OSw4LjcyOCwxNS45NzYsOC42MTMsMjcuMTM4bC0wLjE5MywwLjMzaC0yNC43MjcgICBjMC03LTEuNDAzLTExLjk4NC00LjIwOC0xNS42ODZjLTIuODA2LTMuNzAxLTYuNjM3LTUuNTAxLTExLjQ5NS01LjUwMWMtNC45NzYsMC04LjY3NiwxLjQ1Ny0xMS4xMDUsNC4zMiAgIGMtMi40MywyLjg2My0zLjY0Myw2LjY4MS0zLjY0MywxMS40MjNjMCw0LjUxMSwxLjI4Niw4LjE3NiwzLjg2LDEwLjk4MWMyLjU3MywyLjgwNiw3LjMwMiw1LjU3MSwxNC4xODYsOC4yODkgICBjMTIuNzgyLDUuMDMyLDIyLjI1NCwxMC40MTIsMjguNDEzLDE2LjEzOWM2LjE2LDUuNzI2LDkuMjQsMTMuNzM4LDkuMjQsMjQuMDMzYzAsMTAuMDY0LTMuMzYxLDE4LjEwNS05LjU0OSwyNC4xMiAgIEMxNzUuMjI3LDIwOS4zNzEsMTY2LjkwMywyMTIuOTI3LDE1NS45MDMsMjE0LjAyNXogTTEyMi44NSwxOC40MjZsMy4xOTIsMTYuNTQ5Yy0xNS40MTcsMy4wMDQtMjkuNzM5LDkuMDY5LTQyLjMsMTcuNTUgICBsLTkuMzQzLTE0LjAzQzg5LjA1NywyOC41ODgsMTA1LjQ3OSwyMS43ODUsMTIyLjg1LDE4LjQyNnogTTM4LjQ5Niw3NC4zOTdsMTMuOTYyLDkuNDQ2ICAgYy04LjQ2NywxMi41NjktMTQuNTE4LDI2Ljg5Ni0xNy41MDUsNDIuMzE4bC0xNi41MjYtMy4zMTRDMjEuNzg3LDEwNS40NzgsMjguNTksODkuMDU1LDM4LjQ5Niw3NC4zOTd6IE0zOC40OTUsMjIyLjA3MyAgIGMtOS45MDctMTQuNjU4LTE2LjcwOS0zMS4wODEtMjAuMDY4LTQ4LjQ1MWwxNi41NDktMy4xOTJjMy4wMDQsMTUuNDE3LDkuMDY5LDI5Ljc0LDE3LjU1LDQyLjMwMUwzOC40OTUsMjIyLjA3M3ogTTc0LjM5NywyNTcuOTc2ICAgbDkuNDQ2LTEzLjk2MmMxMi41NjksOC40NjgsMjYuODk3LDE0LjUyLDQyLjMyLDE3LjUwN2wtMy4zMTQsMTYuNTI2QzEwNS40NzgsMjc0LjY4Niw4OS4wNTQsMjY3Ljg4NCw3NC4zOTcsMjU3Ljk3NnogICAgTTE3My42MjMsMjc4LjA0N2wtMy4xOTItMTYuNTQ5YzE1LjQxOC0zLjAwNCwyOS43NC05LjA2OSw0Mi4zMDItMTcuNTUxbDkuMzQzLDE0LjAzICAgQzIwNy40MTcsMjY3Ljg4NSwxOTAuOTkzLDI3NC42ODgsMTczLjYyMywyNzguMDQ3eiBNMjU3Ljk3OCwyMjIuMDc0bC0xMy45NjItOS40NDZjOC40NjctMTIuNTY5LDE0LjUxOC0yNi44OTgsMTcuNTA1LTQyLjMxOSAgIGwxNi41MjUsMy4zMTRDMjc0LjY4NiwxOTAuOTkzLDI2Ny44ODQsMjA3LjQxNiwyNTcuOTc4LDIyMi4wNzR6IE0yNjEuNDk3LDEyNi4wNDFjLTMuMDA0LTE1LjQxNy05LjA2OS0yOS43NC0xNy41NTEtNDIuMzAyICAgbDE0LjAzLTkuMzQzYzkuOTA3LDE0LjY1OCwxNi43MSwzMS4wODIsMjAuMDY5LDQ4LjQ1MkwyNjEuNDk3LDEyNi4wNDF6IiBmaWxsPSIjRDgwMDI3Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==";
        }
        if(sPrice <= 200){
          image = "data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI5Ni40NzMgMjk2LjQ3MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjk2LjQ3MyAyOTYuNDczOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPHBhdGggZD0iTTE0OC4yMzcsMEM2Ni4zNjgsMCwwLjAwMSw2Ni4zNjcsMC4wMDEsMTQ4LjIzNnM2Ni4zNjcsMTQ4LjIzNiwxNDguMjM2LDE0OC4yMzZjODEuODY3LDAsMTQ4LjIzNC02Ni4zNjcsMTQ4LjIzNC0xNDguMjM2ICAgUzIzMC4xMDQsMCwxNDguMjM3LDB6IE0yMjIuMDc1LDM4LjQ5NWwtOS40NDYsMTMuOTYyYy0xMi41NjktOC40NjctMjYuODk3LTE0LjUxOS00Mi4zMTktMTcuNTA2bDMuMzE0LTE2LjUyNSAgIEMxOTAuOTk0LDIxLjc4NSwyMDcuNDE3LDI4LjU4OCwyMjIuMDc1LDM4LjQ5NXogTTE1NS45MDMsMjE0LjAyNXYxNy4yMTFoLTE0di0xNy4xMjRjLTEwLTEuMDk5LTE5LjM4NC00LjkzLTI2LjQ0LTExLjQ5NSAgIGMtNy4wNTgtNi41NjQtMTAuMjg2LTE2LjIxNS0xMC4wNTQtMjguOTQxbDAuMzU4LTAuNDM5aDI0LjcyNmMwLDgsMS43NzksMTMuMzExLDUuMzM2LDE2LjY2NCAgIGMzLjU1OCwzLjM1NSw4LjA4Miw1LjAzNSwxMy41NzgsNS4wMzVjNS4yNjMsMCw5LjI5Ny0xLjQsMTIuMTAyLTQuMjA3YzIuODA1LTIuODA1LDQuMjA4LTYuNTc3LDQuMjA4LTExLjMyICAgYzAtNC42ODYtMS4zNDUtOC41MDItNC4wMzQtMTEuNDUxYy0yLjY4OS0yLjk1LTcuMzAzLTUuNjk2LTEzLjgzOC04LjI0MmMtMTIuODQxLTQuNjg2LTIyLjM3MS05LjkwNC0yOC41ODgtMTUuNjYgICBjLTYuMjE4LTUuNzU1LTkuMzI2LTEzLjg2Ny05LjMyNi0yNC4zMzZjMC05LjcxOCwyLjg3My0xNy42ODQsOS4wODktMjMuOTAyYzYuMjE3LTYuMjE3LDE0Ljg4MS05Ljg3NiwyNC44ODEtMTAuOTc2VjY2LjIzNmgxNCAgIHYxOC43NzhjMTAsMS41MDUsMTguMzEsNS43NTYsMjQuMTIzLDEyLjc1NGM1LjgxMyw2Ljk5OSw4LjcyOCwxNS45NzYsOC42MTMsMjcuMTM4bC0wLjE5MywwLjMzaC0yNC43MjcgICBjMC03LTEuNDAzLTExLjk4NC00LjIwOC0xNS42ODZjLTIuODA2LTMuNzAxLTYuNjM3LTUuNTAxLTExLjQ5NS01LjUwMWMtNC45NzYsMC04LjY3NiwxLjQ1Ny0xMS4xMDUsNC4zMiAgIGMtMi40MywyLjg2My0zLjY0Myw2LjY4MS0zLjY0MywxMS40MjNjMCw0LjUxMSwxLjI4Niw4LjE3NiwzLjg2LDEwLjk4MWMyLjU3MywyLjgwNiw3LjMwMiw1LjU3MSwxNC4xODYsOC4yODkgICBjMTIuNzgyLDUuMDMyLDIyLjI1NCwxMC40MTIsMjguNDEzLDE2LjEzOWM2LjE2LDUuNzI2LDkuMjQsMTMuNzM4LDkuMjQsMjQuMDMzYzAsMTAuMDY0LTMuMzYxLDE4LjEwNS05LjU0OSwyNC4xMiAgIEMxNzUuMjI3LDIwOS4zNzEsMTY2LjkwMywyMTIuOTI3LDE1NS45MDMsMjE0LjAyNXogTTEyMi44NSwxOC40MjZsMy4xOTIsMTYuNTQ5Yy0xNS40MTcsMy4wMDQtMjkuNzM5LDkuMDY5LTQyLjMsMTcuNTUgICBsLTkuMzQzLTE0LjAzQzg5LjA1NywyOC41ODgsMTA1LjQ3OSwyMS43ODUsMTIyLjg1LDE4LjQyNnogTTM4LjQ5Niw3NC4zOTdsMTMuOTYyLDkuNDQ2ICAgYy04LjQ2NywxMi41NjktMTQuNTE4LDI2Ljg5Ni0xNy41MDUsNDIuMzE4bC0xNi41MjYtMy4zMTRDMjEuNzg3LDEwNS40NzgsMjguNTksODkuMDU1LDM4LjQ5Niw3NC4zOTd6IE0zOC40OTUsMjIyLjA3MyAgIGMtOS45MDctMTQuNjU4LTE2LjcwOS0zMS4wODEtMjAuMDY4LTQ4LjQ1MWwxNi41NDktMy4xOTJjMy4wMDQsMTUuNDE3LDkuMDY5LDI5Ljc0LDE3LjU1LDQyLjMwMUwzOC40OTUsMjIyLjA3M3ogTTc0LjM5NywyNTcuOTc2ICAgbDkuNDQ2LTEzLjk2MmMxMi41NjksOC40NjgsMjYuODk3LDE0LjUyLDQyLjMyLDE3LjUwN2wtMy4zMTQsMTYuNTI2QzEwNS40NzgsMjc0LjY4Niw4OS4wNTQsMjY3Ljg4NCw3NC4zOTcsMjU3Ljk3NnogICAgTTE3My42MjMsMjc4LjA0N2wtMy4xOTItMTYuNTQ5YzE1LjQxOC0zLjAwNCwyOS43NC05LjA2OSw0Mi4zMDItMTcuNTUxbDkuMzQzLDE0LjAzICAgQzIwNy40MTcsMjY3Ljg4NSwxOTAuOTkzLDI3NC42ODgsMTczLjYyMywyNzguMDQ3eiBNMjU3Ljk3OCwyMjIuMDc0bC0xMy45NjItOS40NDZjOC40NjctMTIuNTY5LDE0LjUxOC0yNi44OTgsMTcuNTA1LTQyLjMxOSAgIGwxNi41MjUsMy4zMTRDMjc0LjY4NiwxOTAuOTkzLDI2Ny44ODQsMjA3LjQxNiwyNTcuOTc4LDIyMi4wNzR6IE0yNjEuNDk3LDEyNi4wNDFjLTMuMDA0LTE1LjQxNy05LjA2OS0yOS43NC0xNy41NTEtNDIuMzAyICAgbDE0LjAzLTkuMzQzYzkuOTA3LDE0LjY1OCwxNi43MSwzMS4wODIsMjAuMDY5LDQ4LjQ1MkwyNjEuNDk3LDEyNi4wNDF6IiBmaWxsPSIjOTFEQzVBIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="  ;
        }
        
          marker = new google.maps.Marker({
            position:  new google.maps.LatLng(fLatitude, fLongitude),
            map: map,
            icon: image
          });      
        }

        setInterval(function(){ getDataFromGoogleSheet(); }, 3000);
    </script>
  </body>
  </html>


