@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Mill Forms</h2>
        </div>
        <div class="pull-right">
            @can('millform-create')
            <a class="btn btn-success" href="{{ route('mill_form.create') }}"> Add New Form</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th width="50px">No. </th>
        <th width="220px">Name</th>
        <th width="150px">Date</th>
        <th width="280px">Remarks</th>
        <th width="200px">Action</th>
    </tr>
    @foreach ($millform as $millform)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $millform->mill_unit_name}}</td>
        <td>{{ $millform->mill_form_year}}</td>
        <td>{{ $millform->mill_general_remark}}</td>
        <td>
            @can('millform-edit')
            <a class="btn btn-primary" href="{{ route('mill_form.edit',$millform->id) }}">Edit</a>
            @endcan

            @can('millform-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['mill_form.destroy', $millform->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
        </td>
        
        </td>
    </tr>
    @endforeach
</table>

@endsection