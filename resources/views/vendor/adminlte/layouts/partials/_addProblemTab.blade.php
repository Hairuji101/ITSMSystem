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
         {{ Form::label('type', 'Problem Type:')}}
        
        {{ Form::select('type', 
          ['Problem' => 'Problem', 
           'Known Error' => 'Known Error'],null,
            array('class' =>'form-control', 'placeholder'=>'--Select--', 'style' => 'width: 100%','required' => ''))}}

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
      {{ Form::label('resolutionDate', 'Scheduled Resolution Date:')}}


      <div class="input-group date" >
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>

           {{ Form::text('resolutionDate',null, array('class' => 'form-control pull-right', 'id' =>'datepicker'))}}


      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form-group -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->

               
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
        <input type="change" class="form-control" id="change" placeholder="" value="CR_001">
      </div>
    </div>
    &nbsp;
    
    <!--Resolution-->
    <div class="form-group">
      {{ Form::textarea('resolution', null, array('class' => 'textarea',
                                                  'id' => 'res',
                                                  'placeholder' =>'Write problem resolution here', 
                                                  'style'=> 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;'))}}
        <!-- Jquery Script for bootstrap WYSIHTML5 - text editor-->
    </div>
        
  </div>
</div>





