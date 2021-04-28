@include('header')


 <h1 class="margin-bottom">Admin</h1> <ol class="breadcrumb 2"> <li> <a href="main.html"><i class="fa-home"></i>Home</a> </li> 
  <li class="active"> <strong>Admin</strong> </li> </ol> <br>
   <form role="form" method="post" class="form-horizontal form-groups-bordered validate" action=""> <div class="row"> <div class="col-md-12"> <div class="panel panel-primary" data-collapsed="0"> <div class="panel-heading"> <div class="panel-title">
Details
</div> <div class="panel-options"> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
 <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> </div> </div> <div class="panel-body"> 
     <div class="form-group"> <label for="field-1" class="col-sm-3 control-label">Email address</label> <div class="col-sm-5"> <input type="text" class="form-control" name="email" id="field-1" data-validate="required,email" value="john@doe.com">
     <span class="description">Here you will receive site notifications.</span> </div> </div> 
     <div class="form-group"> <label for="field-2" class="col-sm-3 control-label">Password</label> <div class="col-sm-5">
           <input type="text" class="form-control" id="field-2" value="">
            <span class="description">Encrypted</span> </div> </div>
             <div class="form-group"> <label for="field-3" class="col-sm-3 control-label">Mobile Number</label> 
             <div class="col-sm-5"> 
        <input type="text" class="form-control" name="site-url" id="field-3" data-validate="required,url" value=""> </div> </div> 
            
 
         
 <button type="submit" class="btn btn-success">Save Changes</button> <button type="reset" class="btn">Reset Previous</button> </div> </form> </footer></div> 
 


@include('footer')