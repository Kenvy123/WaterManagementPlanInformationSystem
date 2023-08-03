@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Chemical Parameter</h2>
        </div>
        <div class="pull-right">
            @can('cm-create')
            <a class="btn btn-success" href="{{ route('chemical_parameter.create') }}"> Add New Chemical Parameter</a>
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
        <th>No</th>
        <th>Chemical Name</th>
        <th>Usage</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($chemicalParameters as $c_parameter)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $c_parameter->chemical_parameter_name }}</td>
        <td>{{ $c_parameter->cm_usage }}</td>
        <td>
            @can('cm-edit')
            <a class="btn btn-primary" href="{{ route('chemical_parameter.edit',$c_parameter->id) }}">Edit</a>
            @endcan
            @can('cm-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['chemical_parameter.destroy', $c_parameter->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
        </td>
        </td>
    </tr>
    @endforeach
</table>


{!! $chemicalParameters->links() !!}


@endsection