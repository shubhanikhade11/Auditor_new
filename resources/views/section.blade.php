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
              <li> <a href="userpg">Section</a> </li>
            </ol>
            <!-- <h2>Buttons &amp; Pagination</h2> <br>  -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h3>Section</h3>
                    </div>
                    <div class="panel-options"> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a> </div>
                  </div>
                  <div class="panel-body">
                    <div></div>
                    <p class="bs-example">
                    <p class="bs-example bs-baseline-top">
                      @if($sectionList != null)
                      @foreach ($sectionList as $key=> $section )
                      
                      @csrf
                      <input type="hidden" name="name" value="{{$section['name']}}" required="">
                      <input type="submit" class="btn btn-grey btn-block" onclick="myEditSection('{{$key}}',
                      '{{$section['name']}}')" data-toggle="modal" data-target="#editSectionModel" name="submit" style="margin-right:25%;" value="{{$section['name']}}">
                   
                    @endforeach
                    @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>


            <br>
            <a href="javascript:;.html" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});"><button class="btn btn-primary btn-icon btn-block" onclick="showAjaxModal();" type="button" id="formButton">Add Section <i class="entypo-plus"></i></button></a>
            <script type="text/javascript">
              function showAjaxModal() {
                jQuery('#modal-7').modal('show', {
                  backdrop: 'static'
                });
                jQuery.ajax({
                  url: "https://demo.neontheme.com/data/ajax-content.txt",
                  success: function(response) {
                    jQuery('#modal-7 .modal-body').html(response);
                  }
                });
              }
            </script>
            <!-- Modal 6 (Long Modal)-->
            <form method="post" action="sectionSave" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="modal fade" id="modal-6">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add Section</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">

                          <div class="form-group"> <label for="field-1" class="control-label">Section Name:</label>
                            <div><input type="text" class="form-control" placeholder="Name.." name="Name"></div>
                          </div>
                          <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </form>
          </div>
        </div>

         <!-- Modal -->
  <div class="modal fade" id="editSectionModel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Section</h4>
        </div>
        <div class="modal-body">
        <form class="form-container" method="post" action="sectionEdit" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <label for="psw"><b>Section Name</b></label>
                  <input type="text" placeholder="Section"  id ="editSectionName" name="editSectionName" required>
                  <input type="hidden"  id ="editSectionId" name="editSectionId" required>
                 <br>
                  <button type="submit" class="btn">Save</button>

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
        function myEditSection(id,section) {
          document.getElementById("editSectionName").value = section;
          document.getElementById("editSectionId").value = id;
        }
        </script>
       
        @include('footer')
</body>

</html>