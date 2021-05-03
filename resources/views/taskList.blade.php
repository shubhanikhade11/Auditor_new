@include('header')
      <script type="text/javascript">
        jQuery(document).ready(function($) {



          $("#calendar").fullCalendar({
            header: {
              left: '',
              right: '',
            },
            firstDay: 1,
            height: 200,
          });
        });
      </script>

            <ol class="breadcrumb bc-3">
              <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li>
              <li> <a href="userpg">Task</a> </li>
            </ol>
            <!-- <h2>Buttons &amp; Pagination</h2> <br>  -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h3>Users</h3>
                    </div>
                    <div class="panel-options"> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a> </div>
                  </div>
                  <div class="panel-body">
                    
                    <div class="col-sm-12"> <div class="panel panel-primary panel-table"> <div class="panel-heading"> <div class="panel-title">
      <h3>List of Users</h3> </div>
       <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div>
        <div class="panel-body"> <table class="table table-responsive" style="width:100%;">
         <thead>
            <tr> 
                <th>Task</th>
                <th >Auditor</th>
               <th >Layer</th>
                <th >Level</th>
                <th >Machine</th>
                <th >Date</th>
                <th >Time</th>
                <th >View</th>
            </tr>
        </thead>
         <tbody>   
         @foreach ($taskList as $key => $task )
            <tr>
                <td> {{$task['task']}}</td>
                <td> {{$task['userName']}}</td>
                <td> {{$task['layer']}}</td>
                <td> {{$task['level']}}</td>
                <td> {{$task['machine']}}</td>
                <td> {{$task['date']}}</td>
                <td> {{$task['time']}}</td>
                <td> <input type="submit"  onclick="viewTask('{{$key}}','{{$task['task']}}','{{$task['userName']}}','{{$task['user']}}','{{$task['layer']}}','{{$task['level']}}','{{$task['machine']}}','{{$task['date']}}' ,'{{$task['time']}}'  )" data-toggle="modal" data-target="#viewModel" class="btn btn-grey btn-block" name="View" style="margin-right:25%;" value="View"></td>
            </tr>
        @endforeach
       </tbody> </table> </div> </div> </div>

                  </div>
                </div>
              </div>
            </div>
            


            <br>
           
        <!-- Modal -->
  <div class="modal fade" id="viewModel" role="dialog">
  <div class="modal-dialog modal-xl">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Task</h4>
        </div>
        <div class="modal-body">
        <form class="form-container" method="post" action="taskEdit" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                     <div class="col-sm-6"> 
                      <div>
                         <label> Task:</label>
                      </div>
                      <div>
                         <input type="text" class="form-control" placeholder="Task" name="task" value="" id="task" required>
                     </div>
                     </div>
                     <div class="col-sm-6"> 
                      <div>
                         <label>Auditor:</label>
                      </div>
                      <div>
                      <select name="user" class="form-control" id="userame" required>
                        <option >Select</option>
                        @foreach ($userList as $key => $user )
                         <option value="{{$key}}" >{{$user['Name']}}</option >
                        @endforeach
                      </select> 
                         <input type="hidden"  id ="id" name="id" required>
                     </div>
                     </div>
                     </div>
                     <div class="row">
                     <div class="col-sm-6"> 
                      <div>
                         <label> Level:</label>
                      </div>
                      <div>
                      <select name="level" class="form-control" id="levelname" required>
                        <option >Select</option>
                        @foreach ($levelList as $key => $level )
                         <option value="{{$level['name']}}" >{{$level['name']}}</option >
                        @endforeach
                      </select>  
                     </div>
                     </div>
                     <div class="col-sm-6"> 
                      <div>
                         <label> Layer:</label>
                      </div>
                      <div>
                       <select name="layer" class="form-control" id="layer" required>
                        <option >Select</option>
                        @foreach ($layerList as $key => $layer )
                         <option value="{{$layer['name']}}" >{{$layer['name']}}</option >
                        @endforeach
                      </select>     
                     </div>
                     </div>
                     </div>
                     <div class="row">
                     <div class="col-sm-6"> 
                      <div>
                         <label> Machine:</label>
                      </div>
                      <div>
                      <select name="machine" class="form-control" id="machinename" required>
                        <option >Select</option>
                        @foreach ($machineList as $key => $machine )
                         <option value="{{$machine['name']}}" >{{$machine['name']}}</option >
                        @endforeach
                      </select>  
                     </div>
                     </div>
                     <div class="col-sm-6"> 
                      <div>
                         <label> Date:</label>
                      </div>
                      <div>
                      <input type="date"  id="date" name="date">
                     </div>
                     </div>
                     </div>
                     <div class="row">
                     
                     <div class="col-sm-6"> 
                     <div>
                         <label> Time:</label>
                      </div>
                      <div>
                      <input type="time"  id="time" name="time">
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
        function viewTask(id,task,username, user,layer,level,machine,date,time) {
           document.getElementById("task").value = task;
           document.getElementById("id").value = id;
          document.getElementById("userame").value = user;
          document.getElementById("levelname").value = level;
          document.getElementById("layer").value = layer;
          document.getElementById("machinename").value = machine;
          document.getElementById("date").value = date;
          document.getElementById("time").value = time;
         
        }
        </script>
        @include('footer')

</html>