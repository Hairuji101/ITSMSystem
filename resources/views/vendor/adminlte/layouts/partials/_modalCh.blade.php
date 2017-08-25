<!--Modal for reason for change-->
<div class="modal fade" id="reason5">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::model($change,['route'=> [ 'changes.update', $change->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reason for Change</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::label('reasonChange', 'Reason for Change:')}}
                        {{ Form::textarea('reasonChange', null, array('class' => 'form-control', 'placeholder' =>'Reason for change...','id' => 'reasonChange' ,'name' => 'reasonChange', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
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
 


<!--Modal for impact analysis-->
<div class="modal fade" id="impact5">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::model($change,['route'=> [ 'changes.update', $change->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Impact Analysis</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::label('impactAnalysis', 'Impact Analysis:')}}
                        {{ Form::textarea('impactAnalysis', null, array('class' => 'form-control', 'placeholder' =>'Impact Analysis...','id' => 'impactAnalysis' ,'name' => 'impactAnalysis', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
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




<!--Modal for Backout plan-->
<div class="modal fade" id="backout5">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::model($change,['route'=> [ 'changes.update', $change->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Backout Plan</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       {{ Form::label('backoutPlan', 'Backout Plan:')}}
                        {{ Form::textarea('backoutPlan', null, array('class' => 'form-control', 'placeholder' =>'Backout Plan...','id' => 'backoutPlan' ,'name' => 'backoutPlan', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
                       <input name="identifier" type="hidden" value="backout">
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


<!-- Modal for CCB Review & date -->
<div class="modal fade" id="ccb5">
    <div class="modal-dialog">
        <div class="modal-content">
        {!! Form::model($change,['route'=> [ 'changes.update', $change->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">CCB Review</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       {{ Form::label('ccbDate', 'CCB Date:')}}
                       {{ Form::text('ccbDate', null, array('class' => 'form-control','id' => 'today' ,'name' => 'ccbDate'))}} 
                    </div>
                    <div class="col-md-12">
                       {{ Form::label('ccbReview', 'Solution:')}}
                        {{ Form::textarea('ccbReview', null, array('class' => 'form-control', 'placeholder' =>'CCB Review...','id' => 'ccbReview' ,'name' => 'ccbReview', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
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
                <h4 class="modal-title">Delete this Change</h4>
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
                {!! Form::open(['route' => ['changes.destroy', $change->id], 'method' =>'DELETE']) !!}
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

<!-- Delete Modal for Reason for Change -->
<div class="modal fade" id="deletereason5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete reason for change</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Are you sure ?</p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
            {!! Form::open(array('route' => ['changes.update',$change->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delReason', 'null', array('id' => 'delReason' ,'name' => 'delReason' ,'hidden'=>'true'))}}
                    <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
            {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>


<!-- Delete Modal for Impact analysis -->
<div class="modal fade" id="deleteimpact5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete impact analysis</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Are you sure ?</p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
            {!! Form::open(array('route' => ['changes.update',$change->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delImpact', 'null', array('id' => 'delImpact' ,'name' => 'delImpact' ,'hidden'=>'true'))}}
                    <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
            {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>


<!-- Delete Modal for backout plan -->
<div class="modal fade" id="deletebackout5">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Delete backout plan</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                  <div class="col-md-12">
                  <p>Are you sure ?</p>
                  </div>
                  </div>
              </div>
              <div class="modal-footer">
                {!! Form::open(array('route' => ['changes.update',$change->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delBackout', 'null', array('id' => 'delBackout' ,'name' => 'delBackout' ,'hidden'=>'true'))}}
                    <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                {!! Form::close()!!}
              </div>
          </div>
      </div>
  </div>


<!-- Delete Modal for CCB Review-->
<div class="modal fade" id="deleteccb5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete CCB Review</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Are you sure ?</p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::open(array('route' => ['changes.update',$change->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delCCB', 'null', array('id' => 'delCCB' ,'name' => 'delCCB' ,'hidden'=>'true'))}}
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
        $("#reasonChange,#impactAnalysis,#backoutPlan,#ccbReview").wysihtml5();
    });

  $('#form').parsley();
</script> 


