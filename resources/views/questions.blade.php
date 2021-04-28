@include('header')
<ol class="breadcrumb bc-3"> <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li> 
<li class="active"> <strong>Templates</strong> </li> </ol> <h2>{{$templatename}}</h2> <section class="comments-env"> 


<div class="filtering"> <div class="row"> <div class="col-sm-3"> </div><br>
        
       </div> </div> <div class="row" style="margin:2%";> <div class="col-md-10"> <div class="panel panel-primary"> <div class="panel-heading"> <div class="panel-title"> <h4>
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

    
 <div class="row"> 
 <div class="col-sm-12">  

<label Style="text-align: center;">Section Name:</label>

@foreach($result as $section)
@if($section!='kshatrugan')
<div><form method="POST" action="sectionQuestion">
        @csrf
        <input type="hidden" name="sectionName" value="{{$section}}" required="">
        <input type="hidden" name="templatename" value="{{$templatename}}" required="">
        <input type="submit" class="btn btn-grey btn-block" name="submit" style="margin-right:25%;" value="{{$section}}">
        </form></div><br>
        @else
             <p>No Section Added. Add Section to review.</p>
        
        @endif
@endforeach
</div>
</div>
</div></div></div>
<form method="POST" action="addSection">
        @csrf
        <input type="hidden" name="template_name" value="{{$templatename}}" required="">
        <input type="submit" class="btn btn-primary" name="submit" style="margin-right:25%;" value="Add Section">
        </form>


 @include('footer')