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