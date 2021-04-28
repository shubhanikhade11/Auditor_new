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
<input type="text" class="form-control" placeholder="" name="mytext" value=""></div><br></br><br>




 <div class="form-group">
  
  <div class="col-sm-5"> <div class="radio radio-replace"> 
  <input type="radio" id="rd-1" name="radio1" checked> <label>Stop the production</label> </div> </br>
  <div class="radio radio-replace"> <input type="radio" id="rd-2" name="radio1"> <label>Quarantine all stock and close the non-conformity</label> </div> <br>
  <div class="radio radio-replace"> <input type="radio" id="rd-3" name="radio1"> <label>Close the non-conformity immediately</label> </div> <br>

   </div> </div>
   <!-- <div class="col-sm-5"> <div class="radio radio-replace"> 
                        <span>Gender : </span>
                            <input type="radio" name="Stop" value="male"> Stop the production &nbsp;&nbsp;
                            <input type="radio" name="gender" value="female"> Female
                        <div class="clearfix"> </div>
                    </div> -->
</div></div></div>
<button class="btn btn-success ">Submit</button></form></div>
 

   
  






@include('footer')