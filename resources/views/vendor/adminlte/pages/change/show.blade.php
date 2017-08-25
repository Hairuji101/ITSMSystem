@extends('adminlte::layouts.app')

@section('contentheader_title')
  Show Change
@stop

@section('contentheader_description')
  ITSM System
@stop

@section('htmlheader_title')
  Show Change 
@endsection

@section('main-content')
 <!--Form Start-->

<div class="container-fluid spark-screen">



<section class="content">
<!--Edit Button-->

{!! Html::linkRoute('changes.edit', 'Edit Change', array($change->id), array('class' => 'btn btn-success btn-m pull-right-containerl form-spacing-bottom' )) !!}

 <!--Delete Button-->
 <button href='#delete' data-toggle="modal" data-target="#delete5" class="btn btn-danger btn-m pull-right-containerl form-spacing-bottom"><i class="glyphicon glyphicon-trash"></i> Delete</button>

<!--Cancel Button-->
<a href='{{ route('changes.index') }}'><button class="btn btn-primary btn-m pull-right "><span class="glyphicon glyphicon-remove"></span> Close</button></a>  


<br>
<!--///////////////////////////////////////////-->
<div class="box box-primary">
  <div class="box-header">
    <h2 class="box-title">
        Subject: {{ $change -> subject }}  
    </h2>
    <div class="pull-right">
      <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-spinner fa-spin" style="color:teal; display:none;" id="spin"></i>
              Update <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
              <li><a href="#reason"  data-toggle="modal" data-target="#reason5">Reason for Change</a></li>
              <li><a href="#impact"  data-toggle="modal" data-target="#impact5">Impact Analysis</a></li>
              <li><a href="#backout" data-toggle="modal" data-target="#backout5">Backout Plan</a></li>
              <li><a href="#ccb" data-toggle="modal" data-target="#ccb5">CCB Review</a></li>
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

    @include('adminlte::layouts.partials._modalCh')  

          </div>
      </div>

      <div class="row">
        <section class="content">
          <div class="col-md-12">
              <div class="callout" style="  background-color: #3c8dbc; color: #fff; border-color: :#3c8dbc">
                <div class="row">
                  <div class="col-md-3">
                      <b>Created Date: </b> 
                      {{ date('d F, Y', strtotime($change -> created_at)) }}
                  </div>
                  <div class="col-md-3">
                    <b>Status: </b>
                        @if ($change -> status == 'Open')
                            <span class="label label-primary">Open</span>
                        @elseif ($change -> status == 'Planning')
                            <span class="label label-info">Planning</span>
                        @elseif ($change -> status == 'Awaiting Approval')
                            <span class="label label-danger">Awaiting Approval</span>
                        @elseif ($change -> status == 'Pending Review')
                            <span class="label label-warning">Pending Review</span>
                        @elseif ($change -> status == 'Pending Release')
                            <span class="label label-success">Pending Release</span>
                        @elseif ($change -> status == 'Closed')
                            <span class="label label-default" style="background-color: #000; color: #fff;">Closed</span>
                        @endif 
                  </div>
                  <div class="col-md-3">
                      <b>Implementer Assign: </b> 
                      {{ $change -> implementer }} 
                  </div>
                  <div class="col-md-3">
                      <b>Priority:</b> 
                      {{ $change -> priority }} 
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
                              <td class="col-md-10">{{ $change -> description }}</td>
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
                              <td><b>Change Type:</b></td>   
                              <td>{{ $change -> changeType }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="col-md-6">
                  <table class="table table-hover">
                      <tbody>    
                          <tr>
                              <td><b>Impact:</b></td> 
                              <td>{{ $change -> impactType }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
        </section>
      </div>
  </div>
</div>

<!--///////////////////////////////////////////////////////-->


<div class="col-md-12">
<!-- The time line -->
<ul class="timeline">
      

<!--reason for change-->
@if (!empty($change -> reasonChange))
<li class="time-label">
    <p> &nbsp; </p>
    <span class="bg-green">
        Reason For Change 
    </span> 
</li>
<li>
  <i class="fa fa-ambulance bg-purple" title="Reason Change"></i>
  <div class="timeline-item">
      <div class="timeline-header">
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deletereason5"> </a>
                  &nbsp;
                  <a href="#edit" data-toggle="modal" data-target="#reason5"><i class="fa fa-pencil"></i></a>
              </div>
          </div>
      </div>
      <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
          {{ strip_tags($change -> reasonChange) }}
      </div>
      
  </div>
</li>
@endif


<!--impactAnalysis-->
@if (!empty($change -> impactAnalysis))
  <li class="time-label">
      <p> &nbsp; </p>
      <span class="bg-green">
          Impact Analysis
      </span>     
  </li>

  <li>
    <i class="fa fa-anchor bg-purple" title="Impact Analysis"></i>
      <div class="timeline-item">
        <div class="timeline-header">
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deleteimpact5"> </a>
                  &nbsp;<a href="#edit" data-toggle="modal" data-target="#impact5"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
        </div>
        <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
            {{ strip_tags($change -> impactAnalysis) }}
        </div>
    </div>
  </li>
@endif


<!--backout plan-->
@if (!empty($change -> backoutPlan))
  <li class="time-label">
      <p> &nbsp; </p>
      <span class="bg-green">
          Backout Plan
      </span>     
  </li>

  <li>
    <i class="fa fa-battery-0 bg-purple" title="Backout Plan"></i>
      <div class="timeline-item">
        <div class="timeline-header">
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deletebackout5"> </a>
                  &nbsp;<a href="#edit" data-toggle="modal" data-target="#backout5"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
        </div>
        <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
            {{ strip_tags($change -> backoutPlan) }}
        </div>
    </div>
  </li>
@endif


<!--ccb Review-->                               
@if (!empty($change -> ccbReview))
<li class="time-label">
    <p> &nbsp; </p>
    <span class="bg-green">
        CCB Review
    </span>     
</li>

<li>
<i class="fa fa-thumbs-up bg-purple" title="Solution"></i>
  <div class="timeline-item">
      <!--<span  class="time" style="color:#fff;"><i class="fa fa-clock-o"> </i> 25.05.2016 11:01:01</span>-->
      <div class="timeline-header">
          <h3>{{ date('d F, Y', strtotime($change -> ccbDate)) }}</h3>
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deleteccb5"> </a>
                  &nbsp;<a href="#edit" data-toggle="modal" data-target="#ccb5"><i class="fa fa-pencil"></i></a>
              </div>
          </div>
      </div>
      <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
          {{ strip_tags($change -> ccbReview) }}
      </div>
  </div>
</li>
@endif



<!--Change-->
{{--@if (!empty($change -> changeId))
<li class="time-label">
    <p> &nbsp; </p>
    <span class="bg-green">
        Change
    </span>     
</li>
<li>
    <i class="fa fa-refresh bg-purple" title="change"></i>
    <div class="timeline-item">
        <!--<span  class="time" style="color:#fff;"><i class="fa fa-clock-o"> </i> 25.05.2016 11:01:01</span>-->
        <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
            <a href="#">Change Link</a>
        </div>
        <br><br>
    </div>
</li>
{{--@endif
//end of need to edit

</ul>
</div>
--}}



<!---->
</section></div>






@endsection
