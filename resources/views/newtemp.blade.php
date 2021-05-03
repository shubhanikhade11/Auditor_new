@include('header') 

 <h1 class="margin-bottom">Question View</h1> <ol class="breadcrumb 2"> <li> <a href="main.html"><i class="fa-home"></i>Home</a> </li> 
  <li class="active"> <strong>Question View</strong> </li> </ol> <br>
<script type="text/javascript">
jQuery( window ).load( function() {
var $table2 = jQuery( "#table-2" );
// Initialize DataTable
$table2.DataTable( {
"sDom": "tip",
"bStateSave": false,
"iDisplayLength": 8,
"aoColumns": [
{ "bSortable": false },
null,
null,
null,
null
],
"bStateSave": true
});
// Highlighted rows
$table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
var $this = $(el),
$p = $this.closest('tr');
$( el ).on( 'change', function() {
var is_checked = $this.is(':checked');
$p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
} );
} );
// Replace Checboxes
$table2.find( ".pagination a" ).click( function( ev ) {
replaceCheckboxes();
} );
} );
// Sample Function to add new row
var giCount = 1;
function fnClickAddRow() {
jQuery('#table-2').dataTable().fnAddData (<div class="checkbox checkbox-replace"><input type="checkbox" /></script>


<table class="table table-bordered table-striped datatable" id="table-2" style=" width: 100%; display: table; table-layout: fixed;"> <thead> <tr>  
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

   <td> <input type="submit"  onclick="queView('{{$key}}',
                      '{{$question['layer_name']}}','{{$question['level_name']}}','{{$question['section_name']}}','{{$question['question']}}','{{$question['close']}}','{{$question['stop']}}','{{$question['quarantine']}}')" data-toggle="modal" data-target="#viewModel" class="btn btn-grey btn-block" name="Edit" style="margin-right:25%;" value="Edit"></td>
     
 </tr>
 @endforeach
                    @endif </tbody> </table>



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
                     
                     <div class="row">
                     <div class="col-sm-6"> 
                      <div>
                 <br> <button type="submit" class="btn">Save</button>
                  </div>
                     </div>
                     </div>

                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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







@include('footer')