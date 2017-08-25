@extends('adminlte::layouts.app')

@section('contentheader_title')
	Edit Problem
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Edit Problem 
@endsection

@section('main-content')
 <!--Form Start-->
 {!! Form::model($problem,['route'=> [ 'problems.update', $problem->id], 'method' =>'PUT'] ) !!}
    {{ csrf_field() }}

	<div class="container-fluid spark-screen">
    <section class="content-header">
        <!--Save Changes Button-->
       <button type="submit" class="btn btn-success btn-m pull-right-containerl"><i class="glyphicon glyphicon-save"></i> Save Changes</button>
       <!--Cancel Button-->
       {!! Html::linkRoute('problems.show', 'Cancel', array($problem->id), array('class' => 'btn btn-danger btn-m pull-right-containerl' )) !!}
    </section>

  <section class="content">
    <div class="row-md-7">   
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Information Form</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        
        <div class="box-body">
          <div class="row">
             <!-- Subject -->
              <div class="col-sm-1">
                  {{ Form::label('subject', 'Subject', array('class' => 'required'))}}              
              </div>
            
              <div class="col-sm-6">
                  {{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' =>'Subject','required' => ''))}}  
              </div>
          </div>
          &nbsp;

          <div class="row">
            <!-- Description -->
            <div class="col-lg-1"> 
                {{ Form::label('description', 'Description:')}}                        
            </div>
            <div class="col-lg-11">
                {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' =>'Description', 'size'=> '30x4' ,'required' => ''))}}
            </div>  
          </div>
          &nbsp;

          <div class="row">
            <!--Requester -->
            <div class="col-lg-1">                  
                  {{ Form::label('requester', 'Requester', array('class' => 'control-label'))}}

              </div>
              <div class="col-lg-2">
                  {{ Form::select('requester', 
                    ['Afiq' => 'Afiq', 
                     'Alex' => 'Alex',
                     'Emy' => 'Emy',
                     'Eric' => 'Eric',
                     'Fatihah' => 'Fatihah',
                     'Fatin Liyana' => 'Fatin Liyana',
                     'IT Trainee' => 'IT Trainee',
                     'Khairul Faiz Johan' => 'Khairul Faiz Johan',
                     'Masturah' => 'Masturah',
                     'Muamar' => 'Muamar',
                     'Nancy Ng' => 'Nancy Ng',
                     'Nazli' => 'Nazli',
                     'Norhamin' => 'Norhamin',
                     'Nurhakimah' => 'Nurhakimah',
                     'Razif Jemaat' => 'Razif Jemaat'],null,
                      array('class' =>'form-control', 'placeholder'=>'--Select--','required' => '' ))}}

                   &nbsp;
              </div>
            <!-- Assignee -->
            <div class="col-lg-1">                  
                {{ Form::label('assignee', 'Assigned To:', array('class' => 'control-label'))}}

            </div>
            <div class="col-lg-2">
                {{ Form::select('assignee', 
                  ['Afiq' => 'Afiq', 
                   'Alex' => 'Alex',
                   'Emy' => 'Emy',
                   'Eric' => 'Eric',
                   'Fatihah' => 'Fatihah',
                   'Fatin Liyana' => 'Fatin Liyana',
                   'IT Trainee' => 'IT Trainee',
                   'Khairul Faiz Johan' => 'Khairul Faiz Johan',
                   'Masturah' => 'Masturah',
                   'Muamar' => 'Muamar',
                   'Nancy Ng' => 'Nancy Ng',
                   'Nazli' => 'Nazli',
                   'Norhamin' => 'Norhamin',
                   'Nurhakimah' => 'Nurhakimah',
                   'Razif Jemaat' => 'Razif Jemaat'],null,
                    array('class' =>'form-control', 'placeholder'=>'--Select--','required' => '' ))}}

                 &nbsp;
            </div>

                          
            <!-- Status -->    
            <div class="col-lg-1">                  
                {{ Form::label('status', 'Status', array('class' => 'required'))}}

            </div>
            <div class="col-lg-2">
              {{ Form::select('status', 
              ['Closed' => 'Closed', 
               'Duplicated' => 'Duplicated',
               'In Progress' => 'In Progress',
               'New' => 'New',
               'Postponed' => 'Postponed',
               'Resolved' => 'Resolved',
               'Undefined' => 'Undefined'],null,
                array('class' =>'form-control', 'placeholder'=>'--Select--','required' => ''))}}

            </div>
            &nbsp;

          </div>
          
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
                      <input class='form-control pull-right' value='{{ date('Y-m-d', strtotime($problem -> created_at))}}' disabled="true"> 
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
                     <p hidden>{!! $tempDate = date('Y-m-d', strtotime($problem -> resolutionDate)) !!} </p>

                     {{ Form::text('resolutionDate',$tempDate, array('class' => 'form-control pull-right', 'id' =>'datepicker'))}}


                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
          </div>
          <!-- /.col -->
          </div>
          <!-- /.row -->


        </div><!-- end box-body-->  
      </div><!-- end box-info-->
    </div><!-- end row-md-7-->
  </section>
</div>

{!!Form::close()!!}

<script>
  $('#form').parsley();
</script>

@endsection
