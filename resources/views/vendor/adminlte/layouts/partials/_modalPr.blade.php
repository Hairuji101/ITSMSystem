<!--Modal for rootCause-->
<div class="modal fade" id="rootcause5">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::model($problem,['route'=> [ 'problems.update', $problem->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Root Cause</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::label('rootCause', 'Root Cause')}}
                        {{ Form::textarea('rootCause', null, array('class' => 'form-control', 'placeholder' =>'Root cause...','id' => 'rootCause' ,'name' => 'rootCause', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
                    </div>
                    <!--(Will continue until further notice)
                    <div class="col-md-12">
                       <label for="attachment">Attachment</label>
                       <input class="file" name="attachment[]" type="file">
                    </div> 
                    -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-m pull-right-containerl"><i class="glyphicon glyphicon-save"></i> Save</button>
            </div>
            {!! Form::close()!!}
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 


<!--Modal for impact-->
<div class="modal fade" id="impact5">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::model($problem,['route'=> [ 'problems.update', $problem->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Impact</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::label('impact', 'Impact')}}
                        {{ Form::textarea('impact', null, array('class' => 'form-control', 'placeholder' =>'Impact...','id' => 'impact' ,'name' => 'impact', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
                    </div>
                    <!--(Will continue until further notice)
                    <div class="col-md-12">
                       <label for="attachment">Attachment</label>
                       <input class="file" name="attachment[]" type="file">
                    </div> 
                    -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-m pull-right-containerl"><i class="glyphicon glyphicon-save"></i> Save</button>
            </div>
            {!! Form::close()!!}
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!--Modal for Symptoms-->
<div class="modal fade" id="symptoms5">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::model($problem,['route'=> [ 'problems.update', $problem->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Symptoms</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       {{ Form::label('symptoms', 'Symptoms:')}}
                        {{ Form::textarea('symptoms', null, array('class' => 'form-control', 'placeholder' =>'Symptoms...','id' => 'symptoms' ,'name' => 'symptoms', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
                       <input name="identifier" type="hidden" value="symptom">
                    </div>
                     <!--(Will continue until further notice)
                    <div class="col-md-12">
                       <label for="attachment">Attachment</label>
                       <input class="file" name="attachment[]" type="file">
                    </div> 
                    -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save">
                
            </div>
            {!! Form::close()!!}
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal for Solution -->
<div class="modal fade" id="solution5">
    <div class="modal-dialog">
        <div class="modal-content">
        {!! Form::model($problem,['route'=> [ 'problems.update', $problem->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Solution</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       {{ Form::label('solutionTitle', 'Solution Title:')}}
                       {{ Form::text('solutionTitle', null, array('class' => 'form-control', 'placeholder' =>'Solution Title...','id' => 'solutionTitle' ,'name' => 'solutionTitle','required'=>''))}} 
                    </div>
                    <div class="col-md-12">
                       {{ Form::label('solution', 'Solution:')}}
                        {{ Form::textarea('solution', null, array('class' => 'form-control', 'placeholder' =>'Solution...','id' => 'solution' ,'name' => 'solution', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
                    </div>
                    
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
            {!! Form::close()!!}
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


  

<!--Modal for Delete-->
<div class="modal fade" id="delete5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete this Problem</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>Are you sure ?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                {!! Form::open(['route' => ['problems.destroy', $problem->id], 'method' =>'DELETE']) !!}
                
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>  
{{--
//Will handle change later 

<!--Modal for New Change-->
<div class="modal fade" id="changenew5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change</h4>
                <form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden">
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6 ">
                        <label for="inputPassword3" class="control-label">Subject </label>
                        <input class="form-control" name="subject" type="text">
                        <!--<input type="text" class="form-control" name="subject" id="inputPassword3" placeholder="Subject">-->
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="inputPassword3" class="control-label">Requester </label>
                        <select class="form-control" name="requester"><option value="1">demo@admin.com</option><option value="3">vijay.sebastian@ladybirdweb.com</option></select>
                        <!--<input type="text" class="form-control" name="subject" id="inputPassword3" placeholder="Subject">-->
                    </div>


                    <div class="form-group col-md-6 ">
                        <label class="control-label">Approval</label>
                        <select class="form-control" name="approval_id"><option value="1">test</option></select>

                    </div>

                    <div class="form-group col-md-12 ">
                        <label for="internal_notes" class="control-label" >Description</label>
                        <textarea class="form-control" name="description" cols="50" rows="10"></textarea>
                        <!--<textarea class="form-control textarea" name="description" rows="7" id="internal_notes"></textarea>-->
                    </div>
                    <div class="form-group col-md-6 ">
                        <label class=" control-label">Status</label>
                        <select class="form-control" name="status_id"><option value="1">Open</option><option value="2">Planning</option><option value="3">Awaiting Approval</option><option value="4">Pending Release</option><option value="5">Pending Review</option><option value="6">Closed</option></select>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label class="control-label">Priority</label>
                        <select class="form-control" name="priority_id"><option value="1">Low</option><option value="2">Medium</option><option value="3">High</option><option value="4">Urgent</option></select>

                    </div> 
                    <div class="form-group col-md-6 ">
                        <label class=" control-label">Change type</label>
                        <select class="form-control" name="change_type_id"><option value="1">Minor</option><option value="2">Standard</option><option value="3">Major</option><option value="4">Emergency</option></select>

                    </div>
                    <div class="form-group col-md-6 ">
                        <label class="control-label">Location</label>
                        <select class="form-control" name="location_id"><option value="1">tests</option></select>

                    </div>
                    <div class="form-group col-md-6 ">
                        <label class=" control-label" >Impact Type</label>
                        <select class="form-control" name="impact_id"><option value="1">Low</option><option value="2">Medium</option><option value="3">High</option></select>

                    </div>
                    <div class="form-group col-md-6 ">
                        <label class=" control-label" >Asset</label>
                        <select class="form-control" multiple="1" name="asset[]"><option value="1">tests</option><option value="2">dcbhsdbcds</option></select>

                    </div>
                    <div class="form-group col-md-6 ">
                        <label class=" control-label" >Attachments</label>
                        <input name="attachments[]" type="file">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<style>
    .table{
        width: 100% !important; 
    }
</style>

<!--Modal for Old Change-->
<div class="modal fade" id="changeold5">
    <form method="POST" action="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/problem/change/attach/5" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="5ZoPuolDNMs5dKS1hRUEjCN1WugV2erCPQxFSqc2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Changes</h4>
            </div>
            <div class="modal-body">
                <table id="mVR3dQLm" class="table table-bordered">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                        <thead>
                            <tr>
                                <th align="center" valign="middle" class="head1">#</th>
                                <th align="center" valign="middle" class="head2">Subject</th>
                            </tr>
                        </thead>
                    <tbody>
                    </tbody>
                </table>

                <script type="text/javascript">
                jQuery(document).ready(function(){
                    // dynamic table
                        oTable = jQuery('#mVR3dQLm').dataTable(
                            { "sPaginationType":"full_numbers",
                "bProcessing":true,
                "sAjaxSource":"http:\/\/www.faveohelpdesk.com\/demo\/servicedesk\/public\/service-desk\/problem\/change",
                "bServerSide":true }
                        );
                    });
                </script>

            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </form><!-- /Form -->
</div><!-- /Form -->


<!-- Modal for Change Detach -->
<div class="modal fade" id="change-detach5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Test3</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>Are you sure ?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <a href="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/problem/5/detach" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div> 
--}}

<!-- Delete Modal for Root Cause -->
<div class="modal fade" id="deleteroot-cause5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Root Cause</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Are you sure ?</p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
            {!! Form::open(array('route' => ['problems.update',$problem->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delRoot', 'null', array('id' => 'delRoot' ,'name' => 'delRoot' ,'hidden'=>'true'))}}
                    <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
            {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>


<!-- Delete Modal for Impact -->
<div class="modal fade" id="deleteimpact5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete impact</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Are you sure ?</p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
            {!! Form::open(array('route' => ['problems.update',$problem->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delImpact', 'null', array('id' => 'delImpact' ,'name' => 'delImpact' ,'hidden'=>'true'))}}
                    <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
            {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>


<!-- Delete Modal for Symptoms -->
<div class="modal fade" id="deletesymptoms5">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Delete symptoms</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                  <div class="col-md-12">
                  <p>Are you sure ?</p>
                  </div>
                  </div>
              </div>
              <div class="modal-footer">
                {!! Form::open(array('route' => ['problems.update',$problem->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delSymp', 'null', array('id' => 'delSymp' ,'name' => 'delSymp' ,'hidden'=>'true'))}}
                    <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                {!! Form::close()!!}
              </div>
          </div>
      </div>
  </div>


<!-- Delete Modal for Solution-->
<div class="modal fade" id="deletesolution5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete solution</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Are you sure ?</p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::open(array('route' => ['problems.update',$problem->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delSol', 'null', array('id' => 'delSol' ,'name' => 'delSol' ,'hidden'=>'true'))}}
                    <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>


<!-- JQuery for wysihtml5 -->
<script type="text/javascript">
    $(function () {
        $("#rootCause,#impact,#symptoms,#solution").wysihtml5();
    });

  $('#form').parsley();
</script> 


