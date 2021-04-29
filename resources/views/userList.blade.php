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

      <div class="row">
        <div class="col-md-3 col-sm-6"> </div>
        <br>
        <div class="row">
          <div class="col-md-9">
            <script type="text/javascript">
              jQuery(document).ready(function($) {
                var map = $("#map-2");
                map.vectorMap({
                  map: 'europe_merc_en',
                  zoomMin: '3',
                  backgroundColor: '#f4f4f4',
                  focusOn: {
                    x: 0.5,
                    y: 0.7,
                    scale: 3
                  },
                  markers: [{
                      latLng: [50.942, 6.972],
                      name: 'Cologne'
                    },
                    {
                      latLng: [42.6683, 21.164],
                      name: 'Prishtina'
                    },
                    {
                      latLng: [41.3861, 2.173],
                      name: 'Barcelona'
                    },
                  ],
                  markerStyle: {
                    initial: {
                      fill: '#ff4e50',
                      stroke: '#ff4e50',
                      "stroke-width": 6,
                      "stroke-opacity": 0.3,
                    }
                  },
                  regionStyle: {
                    initial: {
                      fill: '#e9e9e9',
                      "fill-opacity": 1,
                      stroke: 'none',
                      "stroke-width": 0,
                      "stroke-opacity": 1
                    },
                    hover: {
                      "fill-opacity": 0.8
                    },
                    selected: {
                      fill: 'yellow'
                    },
                    selectedHover: {}
                  }
                });
              });

              #form1 {

                display: none;

              }
            </script>

            <!-- TS16167565253788: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
            <ol class="breadcrumb bc-3">
              <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li>
              <li> <a href="userpg">Users</a> </li>
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
                    
                    <div class="col-sm-8"> <div class="panel panel-primary panel-table"> <div class="panel-heading"> <div class="panel-title">
      <h3>List of Users</h3> </div>
       <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div> </div>
        <div class="panel-body"> <table class="table table-responsive" style="width:100%;">
         <thead>
            <tr> 
                <th style="width:15%">Name</th>
                <th style="width:15%">Email</th>
                <th style="width:15%">Mobile Number</th>
                <th style="width:15%">Layer</th>
                <th style="width:15%">Level</th>
                <th style="width:15%">View</th>
            </tr>
        </thead>
         <tbody>   
         @foreach ($userList as $key => $user )
            <tr>
                <td> {{$user['Name']}}</td>
                <td> {{$user['email']}}</td>
                <td> {{$user['mobile']}}</td>
                <td> {{$user['layer']}}</td>
                <td> {{$user['level']}}</td>
                <td> <input type="submit"  onclick="viewProfile('{{$key}}',
                      '{{$user['Name']}}','{{$user['email']}}','{{$user['mobile']}}','{{$user['layer']}}','{{$user['level']}}')" data-toggle="modal" data-target="#viewModel" class="btn btn-grey btn-block" name="View" style="margin-right:25%;" value="View"></td>
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
          <h4 class="modal-title">Edit User</h4>
        </div>
        <div class="modal-body">
        <form class="form-container" method="post" action="userEdit" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                     <div class="col-sm-6"> 
                      <div>
                         <label> Name:</label>
                      </div>
                      <div>
                         <input type="text" class="form-control" placeholder="Name.." name="Name" value="" id="name" required>
                     </div>
                     </div>
                     <div class="col-sm-6"> 
                      <div>
                         <label> Email:</label>
                      </div>
                      <div>
                         <input type="email" class="form-control" placeholder="Email" name="email" value="" id="email" required>
                         <input type="hidden"  id ="id" name="id" required>
                     </div>
                     </div>
                     </div>
                     <div class="row">
                     <div class="col-sm-6"> 
                      <div>
                         <label> Mobile:</label>
                      </div>
                      <div>
                         <input type="text" class="form-control" placeholder="Mobile number" name="mobile"  id="mobile" required>
                     </div>
                     </div>
                     <div class="col-sm-6"> 
                      <div>
                         <label> Level:</label>
                      </div>
                      <div>
                      <input type="text" class="form-control" placeholder="Level" name="level"  id="levelname" required>   
                     </div>
                     </div>
                     </div>
                     <div class="row">
                     
                     <div class="col-sm-6"> 
                      <div>
                         <label> Layer:</label>
                      </div>
                      <div>
                         <input type="text" class="form-control" placeholder="Layer" name="layer"  id="layer" required>    
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
        function viewProfile(id, name, email, mobile, layer, level) {
           document.getElementById("name").value = name;
          document.getElementById("email").value = email;
          document.getElementById("id").value = id;
          document.getElementById("mobile").value = mobile;
          document.getElementById("layer").value = layer;
          document.getElementById("levelname").value = level;
         
        }
        </script>
        @include('footer')

</html>