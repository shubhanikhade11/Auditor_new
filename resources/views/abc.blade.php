@include('header')
<ol class="breadcrumb bc-3"> <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li> <li class="active"> <strong>Templates</strong> </li> </ol> <h2>Templates</h2> <section class="comments-env"> 

<div class="filtering"> <div class="row"> <div class="col-sm-3">  

<div class="col-sm-9 search-and-pagination"> <div class="pagination-container"> <ul class="pagination">  </ul>   </div> </div> </div> </div> 
<div class="row"> <div class="col-md-10"> <div class="panel panel-primary"> <div class="panel-heading"> <div class="panel-title"> <h4>
Write your Questions here..
 </h4> </div> </div>
 <div class="panel-body no-padding"> <ul class="comments-list">
  <li> <div class="comment-checkbox">  </div>
  <div class="comment-details">  

<script>
 $(document).ready(function() {
	var max_fields      = 30; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><br><input type="text" class="form-control" name="mytext[]"/> <Span><ul class="user-info pull-left pull-right-xs pull-none-xsm"> <li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-attention"></i>  </a> </li><li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-star"></i> </a></li><li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-db-shape"></i> </a><li></ul> </li></span><br><span><a href="#" class="remove_field">&nbspRemove</a></span><br></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});</script>
<form method="post" action="questionSave" enctype="multipart/form-data">
    {{csrf_field()}}
 <div class="row"> <div class="col-sm-3"> 
 <input type="hidden" name="template_name" value="{{$name}}" required=""> 
<label>Section Name:</label>
<div><input type="text" class="form-control" placeholder="Name.." name="section_name" id="txtName"></div></div><br></br><br></br><br>
<div class="row"> <div class="col-md-11"> <div class="input_fields_wrap">
    <button class="add_field_button">Add More Questions</button><br>
   <!-- <p> <label>Add Question</label></p> -->
    <br><div><input type="text" class="form-control" name="mytext[]"></div>
    <Span><ul class="user-info pull-left pull-right-xs pull-none-xsm"> 
    <li class="notifications dropdown"> 
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> 
    <i class="entypo-attention"></i>  </a> </li>
    <li class="notifications dropdown"> 
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> 
    <i class="entypo-star"></i> </a></li>
    <li class="notifications dropdown"> 
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
     <i class="entypo-db-shape"></i> </a><li></ul> </li></span><br>
   

<!-- <a href="javascript:;.html" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-primary" onclick="showAjaxModal();">Add Section</a> -->



</div></div></div></div>
<button class="btn btn-success ">Submit</button></form></div>
  </body> </html>
  @include('footer')