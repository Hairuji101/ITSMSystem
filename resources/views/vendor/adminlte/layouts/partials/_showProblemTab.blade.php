<!-- 1st DIV: Problem Profile  -->
<div class="box box-info" id='Profile'>
  <div class="box-header with-border">
      <nav class="navbar navbar-default">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Problem Profile</a></li>
            <li><a href="#"  onclick="return show('Resolution','Profile');">Resolution</a></li>
          </ul>
      </nav>
  </div>
<!-- /.box-header -->

          
<!--2nd-Form Box -->
<div class="box-body">
  <div class="row">
    <div class="col-lg-6">
      
      <!--Problem Type -->
      <div class="form-group">
        <label for="type" class='control-label'>Problem Type:</label>    
       
        <input class="form-control" type="text" value={{ $problem -> type}} disabled='true'> 

      </div>  
  </div>
  <!-- /.col -->

  <div class="col-md-6">

    <!-- Registration Date -->
    <div class="form-group">
        <label> Registration Date:</label>
      <div class="input-group date">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
            <input class='form-control pull-right' id='today' disabled="true"> 
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form-group -->


      <!-- Scheduled Resolution Date -->
      <div class="form-group">
      <label for="resolutionDate" class='control-label'>Scheduled Resolution Date:</label> 

      <div class="input-group date" >
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
           <input class="form-control" type="text" value={{ $problem -> resolutionDate}} disabled='true'> 
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form-group -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->

<!--List Of Cases  (will do this later) --> 
<div class="box-footer">
  <h3>Cases 
  
  <a href="add"><button class="btn btn-success"  value="Add Row"><span class="glyphicon glyphicon-plus"></span> New Case</button></a></h3>
  <div class="box-body table-responsive no-padding">

    <table class="table table-hover">
      <tr>
        <th>Number</th>
        <th>Subject</th>
        <th>Registered On</th>
        <th>Status</th>
        <th>Assignee</th>
      </tr>
      <tr>
        <td>183</td>
        <td>Network Down</td>
        <td>11-7-2014</td>
        <td><span class="label label-success">closed</span></td>
        <td>John Doe</td>
      </tr>
      <tr>
        <td>219</td>
        <td>Alexander Pierce</td>
        <td>11-7-2014</td>
        <td><span class="label label-warning">Pending</span></td>
        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
      </tr>
      <tr>
        <td>657</td>
        <td>Bob Doe</td>
        <td>11-7-2014</td>
        <td><span class="label label-primary">Approved</span></td>
        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
      </tr>
      <tr>
        <td>175</td>
        <td>Mike Doe</td>
        <td>11-7-2014</td>
        <td><span class="label label-danger">Denied</span></td>
        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
      </tr>
    </table>
  </div>
  <!-- /.box-body -->
</div>                 
</div>
<!-- /.box-body -->
</div>
<!-- /.row --> 


<!-- 2nd DIV: Resolution -->
<div class="box box-info" id="Resolution" style="display:none">
  <div class="box-header with-border">
   
         <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
              <li><a href="#"  onclick="return show('Profile','Resolution');">Problem Profile</a></li>
              <li class="active"><a href="#" >Resolution</a></li>
            </ul>
        </nav>
          
  </div>
  <!-- /.box-header -->
              
<!-- form start -->
<div class="box-body">

    <div class="form-group">
     
      <!-- Change-->
      <!-- Add label fof this later-->
      <label class="control-label col-sm-2" for="change">Change</label>
      <div class="col-sm-10">
        <input type="change" class="form-control" id="change" placeholder="" value="CR_001" disabled='true'>
      </div>
    </div>
    &nbsp;
    
    <!--Resolution-->
    <div class="form-group">
      <input class="form-control" type="textarea" style='width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;' value={{ $problem -> resolution }} disabled='true'> 
        <!-- Jquery Script for bootstrap WYSIHTML5 - text editor-->
    </div>
        
  </div>
</div>






