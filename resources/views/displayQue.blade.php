@include('header')

<h1 class="margin-bottom">Question View</h1> <ol class="breadcrumb 2"> <li> <a href="main.html"><i class="fa-home"></i>Home</a> </li> 
  <li class="active"> <strong>Question View</strong> </li> </ol> <br>



 <script type="text/javascript">
jQuery( document ).ready( function( $ ) {
var $table3 = jQuery("#table-3");
var table3 = $table3.DataTable( {
"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
} );
// Initalize Select Dropdown after DataTables is created
$table3.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
minimumResultsForSearch: -1
});
// Setup - add a text input to each footer cell
$( '#table-3 tfoot th' ).each( function () {
var title = $('#table-3 thead th').eq( $(this).index() ).text();
$(this).html( '<input type="text" class="form-control" placeholder="Search ' + title + '" />' );
} );
// Apply the search
table3.columns().every( function () {
var that = this;
$( 'input', this.footer() ).on( 'keyup change', function () {
if ( that.search() !== this.value ) {
that
.search( this.value )
.draw();
}
} );
} );
} );
</script> 



<table class="table table-bordered datatable" id="table-3"> 
<thead> <tr class="replace-inputs">
<th class="text-center">Layer</th>
<th class="text-center">Level</th>
<th class="text-center">LPA Section</th>
<th class="text-center">Questions</th>  
<th class="text-center">Close   </th> 
<th class="text-center">Stop   </th>
<th class="text-center">Quarantine   </th>
<th class="text-center">Action</th> </tr> </thead>


 <tbody> 
 @if($questions != null)
  @foreach ($questions as $key=> $question )
  @csrf
 <tr> 
 <td class="text-center">{{$question['layer_name']}} </td>
 <td class="text-center"> {{$question['level_name']}}</td>
  <td class="text-center">{{$question['section_name']}} </td>
  <td class="text-center">{{$question['question']}}</td>


   <td class="text-center">{{$question['close']}}</td>
  
   <td class="text-center">{{$question['stop']}}</td>
   <td class="text-center">{{$question['quarantine']}}</td>
   <td class="text-center"> <input type="submit"  onclick="queView('{{$key}}',
                      '{{$question['layer_name']}}','{{$question['level_name']}}','{{$question['section_name']}}','{{$question['question']}}','{{$question['close']}}','{{$question['stop']}}','{{$question['quarantine']}}')" data-toggle="modal" data-target="#viewModel" class="btn btn-default" name="Edit"  value="Edit"></td>
   </tr> 
   @endforeach
  @endif 
  
     
     
 <tfoot> <tr> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th></tr> </tfoot> </table> <br> 

 

 <a href="addQuestionDisplay"><button class="btn btn-primary btn-icon btn-block" onclick="" type="button" id="formButton">Add Question <i class="entypo-plus"></i></button></a>
 
 <!-- Modal -->
<div class="modal fade" id="viewModel" role="dialog">
<div class="modal-dialog modal-xl">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Edit View</h4>
</div>
<div class="modal-body">
<form class="form-container" method="post" action="QueEdit" enctype="multipart/form-data">
 {{csrf_field()}}
 <input type="hidden"  id ="id" name="id" required>
 <div class="row">
  <div class="col-sm-6"> 
   <div>
      <label>Layer Name:</label>
   </div>
   <div>

<select name="layer_name" class="form-control" id="layer_name" required>
     <option >Select</option>
     @foreach ($layerList as $key => $layer )
      <option value="{{$layer['name']}}" >{{$layer['name']}}</option >
     @endforeach
   </select>  


      
  </div>
  </div>
  <div class="col-sm-6"> 
   <div>
      <label> Level Name:</label>
   </div>
   <div>
   <select name="level_name" class="form-control" id="level_name" required>
     <option >Select</option>
     @foreach ($levelList as $key => $level )
      <option value="{{$level['name']}}" >{{$level['name']}}</option >
     @endforeach
   </select>  



   
      
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6"> 
   <div>
      <label> LPA Section:</label>
   </div>
   <div>
   <select name="section_name" class="form-control" id="section_name" required>
     <option >Select</option>
     @foreach ($sectionList as $key => $section)
      <option value="{{$section['name']}}" >{{$section['name']}}</option >
     @endforeach
   </select> 


      
  </div>
  </div>
  <div class="col-sm-6"> 
   <div>
      <label>Question: </label>
   </div>
   <div>
      <input type="text" class="form-control" placeholder="Question" name="question"  id="question" required>    
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6"> 
   <div>
      <label>Status (Close):</label>
   </div>
   <div>
   <input type="text" class="form-control" placeholder="close" name="close"  id="close" required>   
  </div>
  </div>
  
  
  
  <div class="col-sm-6"> 
   <div>
      <label>Status (Stop):</label>
   </div>
   <div>
   <input type="text" class="form-control" placeholder="stop" name="stop"  id="stop" required>   
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6"> 
   <div>
      <label>Status (Quarantine):</label>
   </div>
   <div>
   <input type="text" class="form-control" placeholder="quarantine" name="quarantine"  id="quarantine" required>   
  </div>
  </div>
  </div>
  
  
<br> 



</div>
<div class="modal-footer">
<button type="submit" class="btn btn-success">Save</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</form>
</div>
</div>

</div>
</div>

</div>

<script>
function queView(id,layer_name,level_name,section_name,question,close,stop,quarantine) {
document.getElementById("id").value = id;
document.getElementById("layer_name").value = layer_name;
document.getElementById("level_name").value = level_name;
document.getElementById("section_name").value = section_name;
document.getElementById("question").value = question;
document.getElementById("close").value = close;
document.getElementById("stop").value = stop;
document.getElementById("quarantine").value = quarantine;

}
</script>


<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
var $table4 = jQuery( "#table-4" );
$table4.DataTable( {
dom: 'Bfrtip',
buttons: [
'copyHtml5',
'excelHtml5',
'csvHtml5',
'pdfHtml5'
]
} );
} );
</script> 


<!-- TS16167566729584: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> <!-- Footer --> <footer class="main"> <div class="pull-right"> <a href="https://themeforest.net/item/neon-bootstrap-admin-theme/6434477?ref=Laborator" target="_blank"><strong>Purchase this theme for $25</strong></a> </div>
&copy; 2021 <strong>Neon</strong> Admin Theme by <a href="https://laborator.co/" target="_blank">Laborator</a> </footer></div> <!-- TS16167566728568: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25"> <div class="chat-inner"> <h2 class="chat-header"> <a href="#" class="chat-close"><i class="entypo-cancel"></i></a> <i class="entypo-users"></i>
Chat
<span class="badge badge-success is-hidden">0</span> </h2> <div class="chat-group" id="group-1"> <strong>Favorites</strong> <a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a> <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a> <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a> <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a> <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a> </div> <div class="chat-group" id="group-2"> <strong>Work</strong> <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a> <a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a> <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a> </div> <div class="chat-group" id="group-3"> <strong>Social</strong> <a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a> <a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a> <a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a> <a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a> </div> </div> <!-- conversation template --> <div class="chat-conversation"> <div class="conversation-header"> <a href="#" class="conversation-close"><i class="entypo-cancel"></i></a> <span class="user-status"></span> <span class="display-name"></span> <small></small> </div> <ul class="conversation-body"> </ul> <div class="chat-textarea"> <textarea class="form-control autogrow" placeholder="Type your message"></textarea> </div> </div> </div> <!-- Chat Histories --> <ul class="chat-history" id="sample_history"> <li> <span class="user">Art Ramadani</span> <p>Are you here?</p> <span class="time">09:00</span> </li> <li class="opponent"> <span class="user">Catherine J. Watkins</span> <p>This message is pre-queued.</p> <span class="time">09:25</span> </li> <li class="opponent"> <span class="user">Catherine J. Watkins</span> <p>Whohoo!</p> <span class="time">09:26</span> </li> <li class="opponent unread"> <span class="user">Catherine J. Watkins</span> <p>Do you like it?</p> <span class="time">09:27</span> </li> </ul> <!-- Chat Histories --> <ul class="chat-history" id="sample_history_2"> <li class="opponent unread"> <span class="user">Daniel A. Pena</span> <p>I am going out.</p> <span class="time">08:21</span> </li> <li class="opponent unread"> <span class="user">Daniel A. Pena</span> <p>Call me when you see this message.</p> <span class="time">08:27</span> </li> </ul>  <!-- Imported styles on this page --> <link rel="stylesheet" href="css/datatables-datatables.css" id="style-resource-1"> <link rel="stylesheet" href="css/select2-select2-bootstrap.css" id="style-resource-2"> <link rel="stylesheet" href="css/select2-select2.css" id="style-resource-3"> <script src="js/gsap-TweenMax.min.js" id="script-resource-1"></script> <script src="js/js-jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> <script src="js/js-bootstrap.js" id="script-resource-3"></script> <script src="js/js-joinable.js" id="script-resource-4"></script> <script src="js/js-resizeable.js" id="script-resource-5"></script> <script src="js/js-neon-api.js" id="script-resource-6"></script> <script src="js/js-cookies.min.js" id="script-resource-7"></script> <script src="js/datatables-datatables.js" id="script-resource-8"></script> <script src="js/select2-select2.min.js" id="script-resource-9"></script> <script src="js/js-neon-chat.js" id="script-resource-10"></script> <!-- JavaScripts initializations and stuff --> <script src="js/js-neon-custom.js" id="script-resource-11"></script> <!-- Demo Settings --> <script src="js/js-neon-demo.js" id="script-resource-12"></script> <script src="js/js-neon-skins.js" id="script-resource-13"></script> <script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-28991003-7']);
 _gaq.push(['_setDomainName', 'demo.neontheme.com']);
 _gaq.push(['_trackPageview']);
 (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script> </body> </html>
