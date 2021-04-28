@include('header')
<ol class="breadcrumb bc-3"> <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li> <li class="active"> <strong>Templates</strong> </li> </ol> <h2>Templates</h2> <section class="comments-env"> 

<div class="filtering"> <div class="row"> <div class="col-sm-3">  
<div><input type="text" class="form-control" placeholder="Add Name.." name="Name"></div>
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
			$(wrapper).append('<div><br></br><p><label>Add Question</label></p><input type="text" class="form-control" name="mytext[]"/> <Span><ul class="user-info pull-left pull-right-xs pull-none-xsm"> <li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-attention"></i>  </a> </li><li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-star"></i> </a></li><li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-db-shape"></i> </a><li></ul> </li></span><br><span><a href="#" class="remove_field">&nbspRemove</a></span><br></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});</script>
<form method="post" action="questionSave" enctype="multipart/form-data">
    {{csrf_field()}}
 <div class="row"> <div class="col-sm-3">  
<label>Section Name:</label>
<div><input type="text" class="form-control" placeholder="Name.." name="Name"></div></div><br></br><br></br><br>
<div class="row"> <div class="col-md-11"> <div class="input_fields_wrap">
    <button class="add_field_button">Add More Questions</button><br>
   <!-- <p> <label>Add Question</label></p> -->
    <br><div><input type="text" class="form-control" name="mytext[]"></div> <br>
   
</div><br></br></div></div></div></div></div></div> 
<div class="col-sm-12"> <div class="panel panel-primary panel-table"> <div class="panel-heading"> <div class="panel-title">
 </div>
       <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" 
       class="bg"><i class="entypo-cog"></i></a>
        <a href="#" data-rel="collapse"><i class="entypo-down-open">
        </i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
         <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div>
          <div class="panel-body"> <div id="calendar" class="calendar-widget"> <div id="newRow"></div>
<button id="addRow" class="btn btn-primary" type="button">Add Section</button>

<form method="post" action="">
            <div class="row">
                <div class="col-lg-12">
                    <div id="inputFormRow">
                        <div class="input-group mb-3">
                         
                        </div>
                    </div>

                    
            </div>
        </form>
    </div></div> </div> </div> </div> </div>


    <script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<table class="table table-bordered" id="dynamic_field"> <label>Section Name:</label><input type="text" name="title[]" placeholder="Enter title" class="form-control name_list" / id="title"></td><br><button type="button" name="add" id="add" class="btn btn-blue">Add Questions</button></td></table>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="text">Cancel</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>





<div class="container mt-3">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">

<div class="card-body">
<div class="form-group">
<form name="add_name" id="add_name">  
<div class="alert alert-danger show-error-message" style="display:none">
<ul></ul>
</div>
<div class="alert alert-success show-success-message" style="display:none">
<ul></ul>
</div>
<div class="table-responsive">  
<table class="table table-bordered" id="dynamic_field"> 
 

<br><button type="button" name="add" id="add" class="btn btn-blue">Add Questions</button></td>  

</table>  
<input type="button" name="submit" id="submit" class="btn btn-primary" value="Submit" />  
</div>
</form>  
</div> 
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){      
var url = "{{ url('add-remove-input-fields') }}";
var i=1;  
$('#add').click(function(){  
var title = $("#title").val();
i++;  
$('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="title[]" placeholder="" class="form-control" value="'+title+'" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button><Span><ul class="user-info pull-left pull-right-xs pull-none-xsm"> <li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-attention"></i>  </a> </li><li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-star"></i> </a></li><li class="notifications dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="entypo-db-shape"></i> </a><li></ul> </li></span><br><span></td></tr>');  
});  
$(document).on('click', '.btn_remove', function(){  
var button_id = $(this).attr("id");   
$('#row'+button_id+'').remove();  
});  
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#submit').click(function(){            
$.ajax({  
url:"{{ url('add-remove-input-fields') }}",  
method:"POST",  
data:$('#add_name').serialize(),
type:'json',
success:function(data)  
{
if(data.error){
display_error_messages(data.error);
}else{
i=1;
$('.dynamic-added').remove();
$('#add_name')[0].reset();
$(".show-success-message").find("ul").html('');
$(".show-success-message").css('display','block');
$(".show-error-message").css('display','none');
$(".show-success-message").find("ul").append('<li>Todos Has Been Successfully Inserted.</li>');
}
}  
});  
});  
function display_error_messages(msg) {
$(".show-error-message").find("ul").html('');
$(".show-error-message").css('display','block');
$(".show-success-message").css('display','none');
$.each( msg, function( key, value ) {
$(".show-error-message").find("ul").append('<li>'+value+'</li>');
});
}
});  
</script>




<button class="btn btn-success ">Submit</button></div>

</form></div></div></div></div>




@include('footer')