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
			$(wrapper).append('<div><br><input type="text" class="form-control" placeholder="" name="mytext[]" value=""/> <Span><div class="form-group"> <label for="stop">Stop the production&nbsp;&nbsp;</label><select name="stop[]" id="stop" required><option >Select</option> <option value="1">Yes</option><option value="0">No</option></select><br><label for="close">Close the non-conformity immediately&nbsp;&nbsp;</label><select name="close[]" id="close" required><option >Select</option> <option value="1">Yes</option><option value="0">No</option></select><br><label for="quarantine">Quarantine all stock and close the non-conformity&nbsp;&nbsp;</label><select name="quarantine[]" id="quarantine" required><option >Select</option> <option value="1">Yes</option><option value="0">No</option></select></div></span><br><span><a href="#" class="remove_field">&nbspRemove</a></span><br></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});</script>
<form method="post" action="AddQuestion" enctype="multipart/form-data">
@csrf
<div class="col-sm-3 row"> 

<label>Layer Name:</label>
<div><input type="text" class="form-control" placeholder="Name.." name="template_name" value="" id="txtName"></div></div><br></br><br></br>
<div class="col-sm-3 row"> 

<label>Level Name:</label>
<div><input type="text" class="form-control" placeholder="Name.." name="level_name" value="" id="txtName"></div></div><br></br><br></br>

 <div class="col-sm-3 row"> 

<label>Section Name:</label>
<div><input type="text" class="form-control" placeholder="Name.." name="section_name" value="" id="txtName"></div></div><br></br><br></br>
<label>Question:</label><br>
<div class="col-md-11 row" >
<input type="text" class="form-control" placeholder="" name="mytext[]" value=""></div><br></br>


    <div class="form-group"> 

    <label for="stop">Stop the production&nbsp;</label>
<select name="stop[]" id="stop" required>
  <option >Select</option> 
  <option value="1">Yes</option>
  <option value="0">No</option>
</select><br>
<label for="close">Close the non-conformity immediately&nbsp;</label>
<select name="close[]" id="close" required>
  <option >Select</option> 
  <option value="1">Yes</option>
  <option value="0">No</option>
</select><br>
<label for="quarantine">Quarantine all stock and close the non-conformity&nbsp;</label>
<select name="quarantine[]" id="quarantine" required>
  <option >Select</option> 
  <option value="1">Yes</option>
  <option value="0">No</option>
</select></div>

    <!-- <select name="stop[]" id="stop">
  <option value="1">Stop the production</option>
  <option value="1">Close the non-conformity immediately</option>
  <option value="1">Quarantine all stock and close the non-conformity</option>
  
</select> -->

    <!-- <input type="hidden" id="stop1" name="stop[]" value="0">
  <input type="checkbox" id="stop1" name="stop[]" value='1'>
  <label>Stop the production</label><br>

  <input type="hidden" id="close1" name="close[]" value="0">
  <input type="checkbox" id="close1" name="close[]" value='1'>
  <label>Close the non-conformity immediately</label><br>
  
  <input type="hidden" id="quarantine1" name="quarantine[]" value="0">
  <input type="checkbox" id="quarantine1" name="quarantine[]" value='1'>
  <label>Quarantine all stock and close the non-conformity</label><br>
 </div></span> -->
 
 <div class="input_fields_wrap">
   <br> <button class="add_field_button">Add More Questions</button><br>

<!-- <a href="javascript:;.html" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-primary" onclick="showAjaxModal();">Add Section</a> -->

<!-- 
<div class="form-group">
  
  <div class="col-sm-5"> <div class="radio radio-replace"> 
  <input type="radio" id="rd-1" name="radio1" checked> <label>Stop the production</label> </div> </br>
  <div class="radio radio-replace"> <input type="radio" id="rd-2" name="radio1"> <label>Quarantine all stock and close the non-conformity</label> </div> <br>
  <div class="radio radio-replace"> <input type="radio" id="rd-3" name="radio1"> <label>Close the non-conformity immediately</label> </div> <br>

   </div> </div> -->

   <!-- <div class="panel-body"> 
   <form role="form" class="form-horizontal form-groups-bordered"> 
   <div class="form-group"> 
   <label class="col-sm-3 control-label">Checkboxes</label> 
   <div class="col-sm-5"> <div class="checkbox checkbox-replace"> <input type="checkbox" id="chk-1" checked>
    <label>Checkbox 1</label> </div> <br>
    <div class="checkbox checkbox-replace"> <input type="checkbox" id="chk-2"> <label>Checkbox 2</label> </div>
     
    </div> </div> </div>  -->

   
   <!-- <div class="form-group"><div class="col-sm-5"><label>Stop the production</label><input type="radio" name="stop[]" value='0'>No&nbsp;&nbsp;<input type="radio"  name="stop[]" value='1'>Yes </div> </br><div class="col-sm-5"> <label>Close the non-conformity immediately</label><input type="radio" name="close[]" value='0'>No&nbsp;&nbsp;<input type="radio"  name="stop[]" value='1'>Yes </div> </br><div class="col-sm-5"><label>Quarantine all stock and close the non-conformity</label><input type="radio" name="quarantine[]" value='0'>No&nbsp;&nbsp;<input type="radio"  name="stop[]" value='1'>Yes </div> </br></div> -->

   


   <!-- <div class="form-group">
<div class="col-sm-5">
<label>Stop the production&nbsp;&nbsp;</label>
<input type="radio" name="stop[]" value='0'>No&nbsp;&nbsp;<input type="radio"  name="stop[]" value='1'>Yes </div> </br>
<div class="col-sm-5"> 
<label>Close the non-conformity immediately&nbsp;&nbsp;</label>
<input type="radio" name="close[]" value='0'>No&nbsp;&nbsp;<input type="radio"  name="stop[]" value='1'>Yes </div> </br>
<div class="col-sm-5">
 <label>Quarantine all stock and close the non-conformity&nbsp;&nbsp;</label>
 <input type="radio" name="quarantine[]" value='0'>No&nbsp;&nbsp;<input type="radio"  name="stop[]" value='1'>Yes </div> </br>

</div> -->

<!-- <form action="/action_page.php"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1"> I have a bike</label><br><input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2"> I have a car</label><br><input type="checkbox" id="vehicle3" name="vehicle3" value="Boat"><label for="vehicle3"> I have a boat</label><br><br><input type="submit" value="Submit"></form> -->




</div></div></div></div>
<button class="btn btn-success ">Submit</button></form></div>
  </body> </html>
  @include('footer')