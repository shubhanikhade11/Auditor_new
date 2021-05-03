@include('header')


<ol class="breadcrumb bc-3">
    <li> <a href="main.html"><i class="fa-home"></i>Home</a> </li>
    <li> <a href="main.html">Forms</a> </li>
    <li class="active"> <strong>Advanced Plugins</strong> </li>
</ol>
<h2>Tasks</h2> <br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Task
                            </div>
                            <div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div>
                        </div>
                        <div class="panel-body">
                                <div class="panel-body">
                                <form method="post" action="taskSave" class="form-horizontal form-groups-bordered">
                                {{csrf_field()}}
                                        <div class="form-group"> <label class="col-sm-3 control-label">Select Level</label>
                                            <div class="col-sm-5"> 
                                            <select name="level" class="form-control" id="levelname" required>
                                            <option >Select</option>
                                            @foreach ($levelList as $key => $level )
                                            <option value="{{$level['name']}}" >{{$level['name']}}</option >
                                            @endforeach
                                        </select>  
                                             </div>
                                        </div>
                                        <div class="form-group"> <label class="col-sm-3 control-label">Select Layer</label>
                                            <div class="col-sm-5"> 
                                            <select name="layer" class="form-control" id="layer" required>
                        <option >Select</option>
                        @foreach ($layerList as $key => $layer )
                         <option value="{{$layer['name']}}" >{{$layer['name']}}</option >
                        @endforeach
                      </select>     
                                             </div>
                                        </div>
                                        <div class="form-group"> <label class="col-sm-3 control-label">Select auditor</label>
                                            <div class="col-sm-5"> 
                                            <select name="user" class="form-control" id="user" required>
                        <option >Select</option>
                        @foreach ($userList as $key => $user )
                         <option value="{{$key}}" >{{$user['Name']}}</option >
                        @endforeach
                      </select>     
                                             </div>
                                        </div>
                                        <div class="form-group"> <label class="col-sm-3 control-label">Select machine</label>
                                            <div class="col-sm-5"> 
                                            <select name="machine" class="form-control" id="machine" required>
                        <option >Select</option>
                        @foreach ($machineList as $key => $machine )
                         <option value="{{$machine['name']}}" >{{$machine['name']}}</option >
                        @endforeach
                      </select>     
                                             </div>
                                        </div>
                                        <!-- <div class="form-group"> <label class="col-sm-3 control-label">Date Range w/ Predefined Ranges</label>
                                            <div class="col-sm-5">
                                                <div class="daterange daterange-inline add-ranges" data-format="MMMM D, YYYY" data-start-date="March 13, 2021" data-end-date="April 10, 2021"> <i class="entypo-calendar"></i> <span>March 13, 2021 - April 10, 2021</span> </div>
                                            </div>
                                        </div> -->
                                   
                                    <div class="form-group"> <label class="col-sm-3 control-label">Assigned Task</label>
                                        <div class="col-sm-5"> <input type="text" class="form-control" id="task" name="task" placeholder="Task Name"></div>
                                    </div>
                                    <div class="form-group"> <label class="col-sm-3 control-label">Time &amp; Date Picker</label>
                                    <div class="row">
                                        <div class="col-sm-5">
                                           <input type="date"  id="date" name="date">
                                           <input type="time"  id="time" name="time">
                                        </div>
                                    </div>
                                    </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <button type="submit" class="btn btn-success">Assign</button>
                                    </div>
                                    </form>
                                    </footer>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        $('input.icheck').iCheck({
                                            checkboxClass: 'icheckbox_minimal',
                                            radioClass: 'iradio_minimal'
                                        });
                                        $('input.icheck-2').iCheck({
                                            checkboxClass: 'icheckbox_minimal-blue',
                                            radioClass: 'iradio_minimal-blue'
                                        });
                                    });

                                    jQuery(document).ready(function($) {
                                        var icheck_skins = $(".icheck-skins a");
                                        icheck_skins.click(function(ev) {
                                            ev.preventDefault();
                                            icheck_skins.removeClass('current');
                                            $(this).addClass('current');
                                            updateiCheckSkinandStyle();
                                        });
                                        $("#icheck-style").change(updateiCheckSkinandStyle);
                                    });

                                    function updateiCheckSkinandStyle() {
                                        var skin = $(".icheck-skins a.current").data('color-class'),
                                            style = $("#icheck-style").val();
                                        var cb_class = 'icheckbox_' + style + (skin.length ? ("-" + skin) : ''),
                                            rd_class = 'iradio_' + style + (skin.length ? ("-" + skin) : '');
                                        if (style == 'futurico' || style == 'polaris') {
                                            cb_class = cb_class.replace('-' + skin, '');
                                            rd_class = rd_class.replace('-' + skin, '');
                                        }
                                        $('input.icheck-2').iCheck('destroy');
                                        $('input.icheck-2').iCheck({
                                            checkboxClass: cb_class,
                                            radioClass: rd_class
                                        });
                                    }
                                </script> </br> <!-- Imported styles on this page -->
                                <link rel="stylesheet" href="css/select2-select2-bootstrap.css" id="style-resource-1">
                                <link rel="stylesheet" href="css/select2-select2.css" id="style-resource-2">
                                <link rel="stylesheet" href="css/selectboxit-jquery.selectBoxIt.css" id="style-resource-3">
                                <link rel="stylesheet" href="css/daterangepicker-daterangepicker-bs3.css" id="style-resource-4">
                                <link rel="stylesheet" href="css/minimal-_all.css" id="style-resource-5">
                                <link rel="stylesheet" href="css/square-_all.css" id="style-resource-6">
                                <link rel="stylesheet" href="css/flat-_all.css" id="style-resource-7">
                                <link rel="stylesheet" href="css/futurico-futurico.css" id="style-resource-8">
                                <link rel="stylesheet" href="css/polaris-polaris.css" id="style-resource-9">
                                <script src="js/gsap-TweenMax.min.js" id="script-resource-1"></script>
                                <script src="js/js-jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
                                <script src="js/js-bootstrap.js" id="script-resource-3"></script>
                                <script src="js/js-joinable.js" id="script-resource-4"></script>
                                <script src="js/js-resizeable.js" id="script-resource-5"></script>
                                <script src="js/js-neon-api.js" id="script-resource-6"></script>
                                <script src="js/js-cookies.min.js" id="script-resource-7"></script>
                                <script src="js/select2-select2.min.js" id="script-resource-8"></script>
                                <script src="js/js-bootstrap-tagsinput.min.js" id="script-resource-9"></script>
                                <script src="js/js-typeahead.min.js" id="script-resource-10"></script>
                                <script src="js/selectboxit-jquery.selectBoxIt.min.js" id="script-resource-11"></script>
                                <script src="js/js-bootstrap-datepicker.js" id="script-resource-12"></script>
                                <script src="js/js-bootstrap-timepicker.min.js" id="script-resource-13"></script>
                                <script src="js/js-bootstrap-colorpicker.min.js" id="script-resource-14"></script>
                                <script src="js/js-moment.min.js" id="script-resource-15"></script>
                                <script src="js/daterangepicker-daterangepicker.js" id="script-resource-16"></script>
                                <script src="js/js-jquery.multi-select.js" id="script-resource-17"></script>
                                <script src="js/icheck-icheck.min.js" id="script-resource-18"></script>
                                <script src="js/js-neon-chat.js" id="script-resource-19"></script>

                                @include('footer')