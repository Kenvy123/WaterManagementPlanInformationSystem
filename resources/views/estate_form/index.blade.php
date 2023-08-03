@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Estate Forms</h2>
        </div>
        <div class="pull-right">
            @can('estateform-create')
            <a class="btn btn-success" href="{{ route('estate_form.create') }}"> Add New Form</a>
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
    @foreach ($estateform as $estateform)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $estateform->estate_unit_name }}</td>
        <td>{{ $estateform->estate_form_year }}</td>
        <td>{{ $estateform->estate_general_remark }}</td>
        <td>
            @can('estateform-edit')
            <a class="btn btn-primary" href="{{ route('estate_form.edit',$estateform->id) }}">Edit</a>
        
            @endcan
            @can('estateform-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['estate_form.destroy', $estateform->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
        </td>
        
        </td>
    </tr>
    @endforeach
</table>

@endsection