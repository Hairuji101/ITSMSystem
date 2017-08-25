<!--Modal for rootCause-->
<div class="modal fade" id="buildplan5">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::model($release,['route'=> [ 'releases.update', $release->id], 'method' =>'PUT'] , array('data-parsley-validate'=> '')) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Build Plan</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::label('buildPlan', 'Build Plan')}}
                        {{ Form::textarea('buildPlan', null, array('class' => 'form-control', 'placeholder' =>'Build Plan...','id' => 'buildPlan' ,'name' => 'buildPlan', 'cols'=>'50', 'rows'=> '10' ,'required'=>''))}}   
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

<!--Modal for Delete-->
<div class="modal fade" id="delete5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete this Release</h4>
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
                {!! Form::open(['route' => ['releases.destroy', $release->id], 'method' =>'DELETE']) !!}
                
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>  


<!-- Delete Modal for Build Plan -->
<div class="modal fade" id="deletebuildplan5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Build Plan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Are you sure ?</p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
            {!! Form::open(array('route' => ['releases.update',$release->id] ,'method' =>'PUT')) !!}
                    {{ Form::text('delBuildPlan', 'null', array('id' => 'delBuildPlan' ,'name' => 'delBuildPlan' ,'hidden'=>'true'))}}
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