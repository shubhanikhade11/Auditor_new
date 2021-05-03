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

     


            <!-- TS16167565253788: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
            <ol class="breadcrumb bc-3">
              <li> <a href="main-3"><i class="fa-home"></i>Home</a> </li>
              <li> <a href="userpg">Notice</a> </li>
            </ol>
            <!-- <h2>Buttons &amp; Pagination</h2> <br>  -->
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h3>Notice</h3>
                    </div>
                    <div class="panel-options">
                    <a  href="javascript:;.html" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" onclick="showAjaxModal();"  >New notice</a>
                     <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a> </div>
                  </div>
                  <div class="panel-body">
                    @if($noticeList != null)
                    <table class="table table-responsive" style="width:100%;">
         <thead>
            <tr> 
                <th style="width:15%">Subject</th>
                <th style="width:55%">Notice</th>
                <th style="width:15%">To</th>
                <th style="width:15%">Time</th>
               
            </tr>
        </thead>
         <tbody>   
         @foreach ($noticeList as $key => $notice )
            <tr>
                <td>{{$notice['subject']}}</td>
                <td>{{$notice['notice']}}</td>
                <td> {{$notice['userName']}}</td>
                <td>{{$notice['time']}}</td>
                
            </tr>
        @endforeach
        @endif
       </tbody> </table>
                   
                  </div>
                </div>
              </div>
            </div>
    

            <br>
            
            <!-- <a href="xyz"><button class="btn btn-primary btn-icon btn-block" type="button" id="formButton">Add Template <i class="entypo-plus"></i></button></a> -->
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
            <form method="post" action="noticeSave" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="modal fade" id="modal-6">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Add Notice</h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group"> 
                          <label for="field-1" class="control-label">To:</label>
                          </div>
                          </div>
                          <div class="col-md-10">
                          <div class="form-group"> 
                         <select name="user" class="form-control" id="userame" required>
                        <option >Select</option>
                        @foreach ($userList as $key => $user )
                         <option value="{{$key}}" >{{$user['Name']}}</option >
                        @endforeach
                      </select> </div>
                          </div>
                          </div>
                          <div class="row">
                        <div class="col-md-2">
                          <div class="form-group"> 
                          <label for="field-1" class="control-label">Subject:</label>
                          </div>
                          </div>
                          <div class="col-md-10">
                          <div class="form-group"> 
                          <input type="text" class="form-control" name="subject" id="subject" >
                          </div>
                          </div>
                          </div>
                          <div class="row">
                        <div class="col-md-2">
                          <div class="form-group"> 
                          <label for="field-1" class="control-label">Notice:</label>
                          </div>
                          </div>
                          <div class="col-md-10">
                          <div class="form-group"> 
                          <textarea id="notice" class="form-control"  name="notice" rows="4" cols="50"></textarea>
                          </div>
                          </div>
                          </div>
                          </div>
                          <div class="row">
                        <div class="col-md-12">
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
  <div class="modal fade" id="editLevelModel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Level</h4>
        </div>
        <div class="modal-body">
        <form class="form-container" method="post" action="levelEdit" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <label for="psw"><b>Level name</b></label>
                  <input type="text" placeholder="Lavel"  id ="editLevelName" name="editLevelName" required>
                  <input type="hidden"  id ="editLevelId" name="editLevelId" required>
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
        function myEditLevel(id,layer) {
          document.getElementById("editLevelName").value = layer;
          document.getElementById("editLevelId").value = id;
        }
        </script>
       

        <!-- TS161675642412610: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
        @include('footer')
</body>

</html>