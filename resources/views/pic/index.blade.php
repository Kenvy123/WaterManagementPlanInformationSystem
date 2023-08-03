@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Person In Charge</h2>
        </div>
        <div class="pull-right">
            @can('pic-create')
            <a class="btn btn-success" href="{{ route('pic.create') }}"> Add New Person In Charge</a>
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
        <th>Name</th>
        <th>Position In Company</th>
        <th>Contact</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pic as $piC)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $piC->pic_name }}</td>
        <td>{{ $piC->pic_position }}</td>
        <td>{{ $piC->pic_contact }}</td>
        <td>
            @can('pic-edit')
            <a class="btn btn-primary" href="{{ route('pic.edit',$piC->id) }}">Edit</a>
            @endcan
            @can('pic-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['pic.destroy', $piC->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
        </td>
        </td>
    </tr>
    @endforeach
</table>


{!! $pic->links() !!}


@endsection