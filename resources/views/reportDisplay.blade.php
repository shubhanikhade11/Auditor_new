@include('header')

<h1 class="margin-bottom">User</h1> <ol class="breadcrumb 2"> <li> <a href="main.html"><i class="fa-home"></i>Home</a> </li> 
  <li class="active"> <strong>Profile</strong> </li> </ol> <br>
  
  <div class="profile-env"> <header class="row" style="margin-left:5%";> <div class="col-sm-2"> <a href="#" class="profile-picture">
   <img src="{{asset($user['profile_image'])}}" class="img-responsive img-circle"> </a> </div> 
   <div class="col-sm-7"> <ul class="profile-info-sections"> <li> <div class="profile-name">
    <strong> <a>{{$name}}</a> <a  class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a> </strong> <span><a href="#">Co-Founder at Laborator</a></span> </div> </li> <li> 
     <div class="col-sm-3"> <div class="profile-buttons">
   </div> </div> </header> 
   <section class="profile-info-tabs"> <div class="row"> <div class="col-sm-offset-2 col-sm-10"> <ul class="user-details">  <li> <a href="#"> <i class="entypo-suitcase"></i>
{{$user['email']}} </a> </li>
<li>
   <i class="entypo-mobile"></i>
{{$user['mobile']}}
</a> </li>
 <li> <a href="#"> <i class="entypo-calendar"></i>
16 October
</a> </li> </ul> <table>
  <tr>
    <th>
        <form method="POST" action="#">
        @csrf
        <input type="hidden" name="name" value="{{$name}}" required="">
        <input type="submit" name="submit" style="margin-right:25%;" value="Edit">
        </form>
    </th>
    <th>
    <form method="POST" action="{{ route('verify.user') }}">
        @csrf
        <input type="hidden" name="name" value="{{$name}}" required="">
        <input type="submit" name="submit" style="margin-right:25%;" value="Verify">
      </form>

    </th>
    <th>
        <form method="POST" action="{{ route('delete.user') }}">
        @csrf
        <input type="hidden" name="name" value="{{$name}}" required="">
        <input type="submit" name="submit" style="margin-right:25%;" value="Delete">
      </form>
    </th>
  </tr>
</table></div> </div> </section>


<div class="tile-group tile-group-2"> <div class="tile-left tile-white"> 
  
    
    </div> </div> </div> <br> 

    <div class="row" style="margin-left:5%";> <div class="col-sm-12"> <div class="panel panel-primary panel-table"> <div class="panel-heading"> <div class="panel-title"> 
      <h3>Auditor Name:- {{$name}}</h3> </div>
       <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div>
        <div class="panel-body"> <table class="table table-responsive">
         <thead> <tr> <th>Machine Name</th> <th>Date</th> <th>Reports</th></tr> </thead> 
         <tbody>   @foreach ($reports as $user )
   
   <tr> <td>{{$user['machinname']}}</td> <td>{{$user['date']}}</td><td><form method="POST" action="{{ route('report.display') }}">
                                            @csrf
                                            <input type="hidden" name="name" value="" required="">
                                            <input type="submit" name="submit" style="margin-right:25%;" value="View">
                                          </form></td>

</tr>@endforeach </tbody> </table> </div> </div> </div> 
      
     </body> </html>

     @include('footer')
