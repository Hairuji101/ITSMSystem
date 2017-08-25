@extends('adminlte::layouts.app')

@section('contentheader_title')
	Release Management
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Releases
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">


<!-- Add Release Button-->
<div class="no-print col-md-9">
  <a href="{{route('releases.create')}}"><button class="btn btn-success pull-left" ><span class="glyphicon glyphicon-plus"></span> New Release</button></a>
  
</div>
<!--end_button-->
<br>
<br>

  <div class="col-md-12">
    <!-- Primary box -->
    <div class="box box-solid box-primary">
       
     <!-- Box Header-->
     <div class="box-header">
        <h3 class="box-title">Releases</h3>
     </div>

          
    <!-- Body Filter Tool-->
    <div class="box-body no-print"> 
      <div class="box-tools pull-left">
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm">Sort By</button> 
          <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
          </button>
         
          <ul class="dropdown-menu" role="menu">
              <li class=""><a href="{{ route('releases.index',['status' => request('status'), 'sort_id' => 'asc']) }}">#ID- ascending</a></li>
              <li class=""><a href="{{ route('releases.index',['status' => request('status'), 'sort_id' => 'desc']) }}">#ID- decending</a></li>
              <li class=""><a href="{{ route('releases.index',['status' => request('status'), 'sort_status' => 'asc']) }}">Status</a></li>
              <li class=""><a href="{{ route('releases.index',['status' => request('status'), 'sort_type' => 'asc']) }}">Type</a></li>
          </ul>
        </div> &nbsp;
      </div>
      
      <div class="box-tools pull-right">
        <form action="#" method="get" role="form" id="filterform">
            <input type="hidden" name="status" value="">
            <input type="hidden" name="filterbyAssignee" value="">
          <b>Filter by :</b>
          <form method="GET">
              <select style="width:200px" class="btn btn-default btn-sm" id="filterStatus" name='status' >
                <option disabled selected>Status</option>
                  <option value="Planning">Planning</option>
                  <option value="Testing">Testing</option>
                  <option value="Development">Development</option>
                  <option value="Deployment">Deployment</option>
                  <option value="Released">Released</option>
              </select> &nbsp;

              <select style="width:200px" class="btn btn-default btn-sm" id="filterType" name='type' >
                <option disabled selected>Release Type</option>
                  <option value="Standard">Standard</option>
                  <option value="Non-Standard">Non-Standard</option>
                  <option value="Major">Major</option>
                  <option value="Minor">Minor</option>
                  <option value="Emergency">Emergency</option>
              </select> &nbsp;
              
              <input type="submit" name="filterForm" class='btn btn-sm btn-warning' value="Apply Filter">
              <a href="?" class="btn btn-sm bg-gray"><span class="fa fa-undo"  title="" data-original-title="Reset"></span></a>
          </form> 

      </div>        
  </div>
  <!-- End Body Filter Tool-->

<!--Table Header -->
<div class="box-body table-responsive padding" id="table_format">
  <table class="table table-hover">
    <tbody id='myTable'><tr class="bg-gray">
          <th>#ID</th>
          <th>Subject</th>
          <th class="col-md-1">Status</th>
          <th class="col-md-2">Release Type</th>                                    
          <th class="col-md-2">Action</th>
    </tr> 


  @foreach ($releases as $release)
    <tr class="content">
      <td>{{ $release -> id}}</td>
      <td>{{ $release -> subject}}</td>
      
      <td>  @if ($release -> status == 'Planning')
                  <span class="label label-primary">Planning</span>
              @elseif ($release -> status == 'Testing')
                  <span class="label label-info">Testing</span>
              @elseif ($release -> status == 'Development')
                  <span class="label label-danger">Development</span>
              @elseif ($release -> status == 'Deployment')
                  <span class="label label-warning">Deployment</span>
              @elseif ($release -> status == 'Released')
                  <span class="label label-success">Released</span>
              @endif 
            </td>

      <td>{{ $release -> type}}</td>
      <td>
        <a href="{{ route('releases.show', $release-> id  )}}"><button value="Open" class="btn btn-primary btn-sm form-spacing-bottom"><i class="fa fa-folder-open"></i> open</button></a>

        <a href="{{ route('releases.edit', $release-> id  )}}"><button value="Edit" class="btn btn-success btn-sm form-spacing-bottom"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>

        {{--  ///Delete function in table which are taken off temporarily until further notice///

               <button href="#delete" data-toggle="modal" data-target="#delete5" value="Delete" class="btn btn-danger btn-sm form-spacing-bottom"><i class="glyphicon glyphicon-trash"></i> Delete</button>

               @include('adminlte::layouts.partials._deleteModal')    
          --}}
      </td>
    </tr>

  @endforeach

    

  </tbody></table><!--Table End
        </div><!-- /.box-body -->
    </div><!-- /.box -->  
  </div><!-- /.col -->


      <div class="text-center">
          {!! $releases -> links() !!}                     
      </div>
	</div>

		
	</div>
@endsection
