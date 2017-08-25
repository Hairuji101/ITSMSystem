@extends('adminlte::layouts.app')

@section('contentheader_title')
	Show Release
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Show Release 
@endsection

@section('main-content')
 <!--Form Start-->

<div class="container-fluid spark-screen">



<section class="content">
<!--Edit Button-->

{!! Html::linkRoute('releases.edit', 'Edit Record', array($release->id), array('class' => 'btn btn-success btn-m pull-right-containerl form-spacing-bottom' )) !!}

 <!--Delete Button-->
 <button href='#delete' data-toggle="modal" data-target="#delete5" class="btn btn-danger btn-m pull-right-containerl form-spacing-bottom"><i class="glyphicon glyphicon-trash"></i> Delete</button>

<!--Cancel Button-->
<a href='{{ route('releases.index') }}'><button class="btn btn-primary btn-m pull-right "><span class="glyphicon glyphicon-remove"></span> Close</button></a>  


<br>
<!--///////////////////////////////////////////-->
<div class="box box-primary">
    <div class="box-header">
        <h2 class="box-title">
            Subject: {{ $release -> subject }}  
        </h2>
        <div class="pull-right">
            <!-- <button type="button" class="btn btn-default"><i class="fa fa-edit" style="color:green;"> </i> Edit</button> -->

            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-spinner fa-spin" style="color:teal; display:none;" id="spin"></i>
                    Update <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#buildplan"  data-toggle="modal" data-target="#buildplan5">Build Plan</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-spinner fa-spin" style="color:teal; display:none;" id="spin"></i>
                    Change <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                     
                    <li><a href="#change-detach"  data-toggle="modal" data-target="#change-detach5">Deatach test3</a></li>
                                    </ul>
            </div>


       </div>
    </div>
    <!-- ticket details Table -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">

    @include('adminlte::layouts.partials._modalRnd')            

            </div>
        </div>

        <div class="row">
            <section class="content">
                <div class="col-md-12">
                    <div class="callout" style="  background-color: #3c8dbc; color: #fff; border-color: :#3c8dbc">
                        <div class="row">

                            <div class="col-md-3">
                                <b>Created Date: </b> 
                                {{ date('d F, Y', strtotime($release -> created_at)) }}
                            </div>
                            <div class="col-md-3">
                                <b>Status: </b>
                                  @if ($release -> status == 'Planning')
                                      <span class="label label-info">Planning</span>
                                  @elseif ($release -> status == 'Testing')
                                      <span class="label label-default">Testing</span>
                                  @elseif ($release -> status == 'Development')
                                      <span class="label label-warning">Development</span>
                                  @elseif ($release -> status == 'Deployment')
                                      <span class="label label-danger">Deployment</span>
                                  @elseif ($release -> status == 'Released')
                                      <span class="label label-success">Released</span>
                                  @endif 
                            </div>
                            <div class="col-md-3">
                                <b>Start Date: </b> 
                                {{ date('d F, Y', strtotime($release -> planStartDate)) }}
                            </div>
                            <div class="col-md-3">
                                <b>End Date:</b> 
                                {{ date('d F, Y', strtotime($release -> planEndDate)) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div id="hide2">
              <div class="col-md-12">
                  <table class="table table-hover">
                      <tbody>
                          <tr>
                              <td class="col-md-1"><b>Description:</b></td>   
                              <td class="col-md-10">{{ $release -> description }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>            
          <div id="hide2">
              <div class="col-md-6">
                  <table class="table table-hover">
                      <tbody>
                          <tr>
                              <td><b>Priority:</b></td>   
                              <td>{{ $release -> priority }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="col-md-6">
                  <table class="table table-hover">
                      <tbody>    
                          <tr>
                              <td><b>Release Type:</b></td> 
                              <td>{{ $release -> type }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
            </section>
        </div>
    </div>
</div>

  <div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Schedule</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="box box-primary">
<!--                        <div class="box-header">
                            <h3 class="box-title">Condensed Full Width Table</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-condensed">
                                <tr>
                                    <th>Stage</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Action</th>
                                </tr>
                               
                                <tr>
                                    <td>Testing</td>
                                    <td>AAEH-0111-0000111</td>
                                    <td>Re: Autheticated Use...</td>
                                    <td><a href="#" class="btn btn-info">View</a></td>
                                </tr>
                                                                                               
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!--///////////////////////////////////////////////////////-->

<div class="col-md-12">
<!-- The time line -->
<ul class="timeline">
      

<!--build plan-->
@if (!empty($release -> buildPlan))
<li class="time-label">
    <p> &nbsp; </p>
    <span class="bg-green">
        Build Plan 
    </span> 
</li>
<li>
  <i class="fa fa-ambulance bg-purple" title="Build Plan"></i>
  <div class="timeline-item">
      <div class="timeline-header">
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deletebuildplan5"> </a>
                  &nbsp;
                  <a href="#edit" data-toggle="modal" data-target="#buildplan5"><i class="fa fa-pencil"></i></a>
              </div>
          </div>
      </div>
      <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
          {{ strip_tags($release -> buildPlan) }}
      </div>
      
  </div>
</li>
@endif
<!---->
</section></div>






@endsection
