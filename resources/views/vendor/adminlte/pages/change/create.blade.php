@extends('adminlte::layouts.app')

@section('contentheader_title')
	New Change
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	New Change
@endsection


@section('main-content')
 <!--Form Start-->
 {!! Form::open(array('route' => 'changes.store', 'data-parsley-validate'=> '')) !!}
    {{ csrf_field() }}

	<div class="container-fluid spark-screen">
    <section class="content-header">     
       <!--Cancel Button-->
       <a class="btn btn-danger btn-m pull-right-container" href="{{ route('changes.index') }}"><span class='glyphicon glyphicon-remove'></span> Cancel</a>
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
                  {{ Form::label('subject', 'Subject:', array('class' => 'required'))}}              
              </div>
              <div class="col-sm-6">
                  {{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' =>'Subject','required' => ''))}}  
              </div>

              <!--Implementer -->
              <div class="col-lg-2">                  
                  {{ Form::label('implementer', 'Implementer:', array('class' => 'control-label'))}}
              </div>
              <div class="col-lg-3">
                  {{ Form::select('implementer', 
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
          </div>
          &nbsp;

          <div class="row">
            <!-- Description -->
            <div class="col-lg-1"> 
                {{ Form::label('description', 'Description:')}}                        
            </div>
            <div class="col-lg-11">
                {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' =>'Description', 'size'=> '30x10' ))}}
            </div>  
          </div>
          &nbsp;

          <div class="row">                
            <!-- Status -->    
            <div class="col-lg-6">                  
              <div class="form-group">
                {{ Form::label('status', 'Status:', array('class' => 'required'))}}
             
                {{ Form::select('status', 
                ['Open' => 'Open', 
                 'Planning' => 'Planning',
                 'Awaiting Approval' => 'Awaiting Approval',
                 'Pending Release' => 'Pending Release',
                 'Pending Review' => 'Pending Review',
                 'Closed' => 'Closed'],null,
                  array('class' =>'form-control', 'placeholder'=>'--Select--','required' => ''))}}
                </div>
            </div>

            <!-- Priority -->    
            <div class="col-lg-6">                  
              <div class="form-group">
                {{ Form::label('priority', 'Priority:', array('class' => 'required'))}}
             
                {{ Form::select('priority', 
                ['Low' => 'Low', 
                 'Medium' => 'Medium',
                 'High' => 'High',
                 'Urgent' => 'Urgent'],null,
                  array('class' =>'form-control', 'placeholder'=>'--Select--','required' => ''))}}
                </div>
            </div>
            &nbsp;
          </div>

          
          <div class="row">
              <div class="col-lg-6">
                
                <!--Change Type -->
                <div class="form-group">
                   {{ Form::label('changeType', 'Change Type:')}}
                  
                  {{ Form::select('changeType', 
                    ['Non- Standard' => 'Non- Standard',
                     'Standard' => 'Standard',
                     'Minor' => 'Minor',
                     'Major' => 'Major', 
                     'Emergency' => 'Emergency'],null,
                      array('class' =>'form-control', 'placeholder'=>'--Select--', 'style' => 'width: 100%','required' => ''))}}
                </div>  
            </div>
            <!-- /.col -->

            <div class="col-lg-6">
                
                <!--Change Impact -->
                <div class="form-group">
                   {{ Form::label('impactType', 'Impact Level:')}}
                  
                  {{ Form::select('impactType', 
                    ['Low' => 'Low', 
                     'Medium' => 'Medium',
                     'High' => 'High'],null,
                      array('class' =>'form-control', 'placeholder'=>'--Select--', 'style' => 'width: 100%','required' => ''))}}
                </div>  
            </div>
            <!-- /.col -->

            
          </div>
          <!-- /.row -->
           &nbsp;
      {{Form::submit('Add Change', array('class'=>'btn btn-success btn-lg btn-block'))}}

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
