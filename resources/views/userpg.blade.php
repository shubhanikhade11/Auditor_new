@include('header')

<!-- TS16167565253788: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> 
<ol class="breadcrumb bc-3"> <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li> <li> <a href="userpg">Templates</a>  </li> </ol> 
<!-- <h2>Buttons &amp; Pagination</h2> <br>  -->
<div class="row"> <div class="col-md-12"> <div class="panel panel-primary"> <div class="panel-heading"> <div class="panel-title"><h3>Templates</h3></div> <div class="panel-options"> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a> </div> </div> 
<div class="panel-body"> <div></div> 
<p class="bs-example">  <p class="bs-example bs-baseline-top">
@foreach ($templates as $template)
<form method="POST" action="templateEdit">
        @csrf
        <input type="hidden" name="name" value="{{$template}}" required="">
        <input type="submit" class="btn btn-grey btn-block" name="submit" style="margin-right:25%;" value="{{$template}}">
        </form>
<!-- <a href="templates"><button type="button" class="btn btn-grey btn-block"><strong>{{$template}}</strong></button></a><br> -->
@endforeach
 </p> </div> </div> </div> </div> 


<br>
<!-- <div class="row" id="bt" onclick="toggle(this)" > <div class="col-md-12"> <div class="panel panel-primary"> <div class="panel-heading" > <div class="panel-title"  ><h3>Add  A New Template </h3></div> <div class="panel-options"> <a href="#" data-rel="collapse"><i class="entypo-down-open" id="bt" onclick="toggle(this)"></i></a> <a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a> </div> </div> 
<div class="panel-body" style="border:solid 0px #ddd; padding:10px; display:none;" id="cont">
          <div>
          

<label>Template Name:</label>
<div><input class="form-control" id="" name="name" /></div>
</div>
<div>
            <label>Layer:</label>
            <div><input class="form-control" id="" name="layer" /></div>
        </div>
        <div>
            <label>User:</label>
            <div><input class="form-control" name="user" id="" /></div></div>
        <div>
            <label>Add your:</label>
            <div><textarea  class="form-control" style="width:100%;" rows="5" cols="46"></textarea></div>
        </div>
    </div>
</body>
<script>
    function toggle(ele) {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';

            document.getElementById(ele.id).value = 'Add new';
        }
        else {
            cont.style.display = 'block';
            document.getElementById(ele.id).value = 'Hide DIV';
        }
    }
</script> <div></div> 

 </p> </div> </div> </div> </div>  -->

 <!-- <a href="xyz"><button class="btn btn-primary btn-icon btn-block" type="button" id="formButton">Add Template <i class="entypo-plus"></i></button></a> -->
 <a href="javascript:;.html" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});"><button class="btn btn-primary btn-icon btn-block" onclick="showAjaxModal();"type="button" id="formButton">Add Template <i class="entypo-plus"></i></button></a>
 <script type="text/javascript">
function showAjaxModal()
{
jQuery('#modal-7').modal('show', {backdrop: 'static'});
jQuery.ajax({
url: "https://demo.neontheme.com/data/ajax-content.txt",
success: function(response)
{
jQuery('#modal-7 .modal-body').html(response);
}
});
}
</script>
<!-- Modal 6 (Long Modal)--> <form method="post" action="templateSave" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal fade" id="modal-6"> <div class="modal-dialog">
 <div class="modal-content"> <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
  <h4 class="modal-title">Add Template</h4> </div>
   <div class="modal-body"> <div class="row"> <div class="col-md-12">
   
    <div class="form-group"> <label for="field-1" class="control-label">Template Name:</label>  
<div><input type="text" class="form-control" placeholder="Name.." name="Name"></div></div>
   
   
<!-- <form name="add_name" id="add_name" >
            <table class="table table-bordered table-hover" id="dynamic_field">
              <tr>
                <td><input type="text" name="question[]" placeholder="" class="form-control name_list" /></td>
                
                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
              </tr>
            </table>
            </div> </div>  -->
         <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
         <button class="btn btn-success" >Submit</button></div>
</div> </div> </div> </div> 
          </form>
        </div>
      </div>

@include('footer')
