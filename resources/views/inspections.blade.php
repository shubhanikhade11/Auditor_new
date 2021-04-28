@include('header')
<script type="text/javascript">
jQuery(document).ready(function($) 
{
// Sample Toastr Notification
// setTimeout(function()
// {
// var opts = {
// "closeButton": true,
// "debug": false,
// "positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
// "toastClass": "black",
// "onclick": null,
// "showDuration": "300",
// "hideDuration": "1000",
// "timeOut": "5000",
// "extendedTimeOut": "1000",
// "showEasing": "swing",
// "hideEasing": "linear",
// "showMethod": "fadeIn",
// "hideMethod": "fadeOut"
// };
// toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
// }, 3000);

  
// $(".daily-visitors").sparkline([1,5,5.5,5.4,5.8,6,8,9,13,12,10,11.5,9,8,5,8,9], {
//   type: 'line',
//   width: '100%',
//   height: '55',
//   lineColor: '#ff4e50',
//   fillColor: '#ffd2d3',
//   lineWidth: 2,
//   spotColor: '#a9282a',
//   minSpotColor: '#a9282a',
//   maxSpotColor: '#a9282a',
//   highlightSpotColor: '#a9282a',
//   highlightLineColor: '#f4c3c4',
//   spotRadius: 2,
//   drawNormalOnTop: true
//  });


 
 $("#calendar").fullCalendar({
header: {
left: '',
right: '',
},
firstDay: 1,
height: 200,
});
});


</script> 

<div class="row"> <div class="col-md-3 col-sm-6"> </div>
 <br> <div class="row"> <div class="col-md-9"> <script type="text/javascript">
jQuery(document).ready(function($)
{
var map = $("#map-2");
map.vectorMap({
map: 'europe_merc_en',
zoomMin: '3',
backgroundColor: '#f4f4f4',
focusOn: { x: 0.5, y: 0.7, scale: 3 },
  markers: [
   {latLng: [50.942, 6.972], name: 'Cologne'},
   {latLng: [42.6683, 21.164], name: 'Prishtina'},
   {latLng: [41.3861, 2.173], name: 'Barcelona'},
  ],
  markerStyle: {
   initial: {
    fill: '#ff4e50',
    stroke: '#ff4e50',
  "stroke-width": 6,
  "stroke-opacity": 0.3,
     }
  },
regionStyle: 
{
 initial: {
  fill: '#e9e9e9',
  "fill-opacity": 1,
  stroke: 'none',
  "stroke-width": 0,
  "stroke-opacity": 1
 },
 hover: {
  "fill-opacity": 0.8
 },
 selected: {
  fill: 'yellow'
 },
 selectedHover: {
 }
}
});
});
</script> 


 <ol class="breadcrumb 2"> 
 <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li> 
  <li class="active"> <strong>Inspections</strong> </li> </ol> <br>
<div class="tile-group tile-group-2"> <div class="tile-left tile-white"> 
  
    
    </div> </div> </div> <br> 

    <div class="row"> <div class="col-sm-12"> <div class="panel panel-primary panel-table"> <div class="panel-heading"> <div class="panel-title"> 
      <h3>Inspections </div>
       <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div>
        <div class="panel-body"> <table class="table table-responsive">
         <thead> <tr> <th>Title</th> <th>Template</th> <th class="text-center">Completed</th> </tr> </thead> 
         <tbody> <tr> <td>Flappy Bird</td> <td>2,215,215</td> <td class="text-center"><span class="top-apps">4,3,5,4,5,6,3,2,5,3</span></td> </tr> <tr> <td>Angry Birds</td> <td>1,001,001</td> <td class="text-center"><span class="top-apps">3,2,5,4,3,6,7,5,7,9</span></td> </tr> <tr> <td>Asphalt 8</td> <td>998,003</td> <td class="text-center"><span class="top-apps">1,3,4,3,5,4,3,6,9,8</span></td> </tr> <tr> <td>Viber</td> <td>512,015</td> <td class="text-center"><span class="top-apps">9,2,5,7,2,4,6,7,2,6</span></td> </tr> <tr> <td>Whatsapp</td> <td>504,135</td> <td class="text-center"><span class="top-apps">1,4,5,4,4,3,2,5,4,3</span></td> </tr> </tbody> </table> </div> </div> </div> 
       
        </body> </html>
@include('footer')