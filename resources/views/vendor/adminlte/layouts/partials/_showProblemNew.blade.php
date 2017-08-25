<!-- Root Cause-->
<div class="modal fade" id="rootcause5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Root Cause</h4>
                <form method="POST" action="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/general/5/sd_problem" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="5ZoPuolDNMs5dKS1hRUEjCN1WugV2erCPQxFSqc2">
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       <label for="root-cause">Root Cause</label>
                       <textarea class="form-control" id="root-cause" name="root-cause" cols="50" rows="10">This is the root cause</textarea>
                       <input name="identifier" type="hidden" value="root-cause">
                    </div>
                    <div class="col-md-12">
                       <label for="attachment">Attachment</label>
                       <input class="file" name="attachment[]" type="file">
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
<script type="text/javascript">
    $(function () {
        $("#root-cause").wysihtml5();
    });
</script>  

<!--Impact-->
<div class="modal fade" id="impact5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Impact</h4>
                <form method="POST" action="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/general/5/sd_problem" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="5ZoPuolDNMs5dKS1hRUEjCN1WugV2erCPQxFSqc2">
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       <label for="impact">Impact</label>
                       <textarea class="form-control" id="impact" name="impact" cols="50" rows="10">This is the impact</textarea>
                       <input name="identifier" type="hidden" value="impact">
                    </div>
                    <div class="col-md-12">
                       <label for="attachment">Attachment</label>
                       <input name="attachment[]" type="file">
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
<script type="text/javascript">
    $(function () {
        $("#impact").wysihtml5();
    });
</script>

<!--Symptoms-->
<div class="modal fade" id="symptoms5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Symptoms</h4>
                <form method="POST" action="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/general/5/sd_problem" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="5ZoPuolDNMs5dKS1hRUEjCN1WugV2erCPQxFSqc2">
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       <label for="symptoms">Symptoms</label>
                       <textarea class="form-control" id="symptoms" name="symptoms" cols="50" rows="10">dshbcdshjcsdhjc ds cdshcs</textarea>
                       <input name="identifier" type="hidden" value="symptom">
                    </div>
                    <div class="col-md-12">
                       <label for="attachment">Attachment</label>
                       <input name="attachment[]" type="file">
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
<script type="text/javascript">
    $(function () {
        $("#symptoms").wysihtml5();
    });
</script>  

<!--Solution-->
<div class="modal fade" id="solution5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Solution</h4>
                <form method="POST" action="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/general/5/sd_problem" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="5ZoPuolDNMs5dKS1hRUEjCN1WugV2erCPQxFSqc2">
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                       <label for="solution-title">Solution Title</label>
                       <input class="form-control" name="solution-title" type="text" value="tittlt" id="solution-title">
                       <input name="identifier" type="hidden" value="solution">
                    </div>
                    <div class="col-md-12">
                       <label for="solution">Solution</label>
                       <textarea class="form-control" id="solution" name="solution" cols="50" rows="10">dschjds cdsc dsh csdh</textarea>
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
<script type="text/javascript">
    $(function () {
        $("#solution").wysihtml5();
    });
</script>

<!--delete-->
<div class="modal fade" id="delete5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete qwertyui</h4>
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
                <a href="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/problem/5/delete" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<!--Create new Change-->
<div class="modal fade" id="changenew5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change</h4>
                <form method="POST" action="http://www.faveohelpdesk.com/demo/servicedesk/public/service-desk/problem/change/5" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="5ZoPuolDNMs5dKS1hRUEjCN1WugV2erCPQxFSqc2">
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