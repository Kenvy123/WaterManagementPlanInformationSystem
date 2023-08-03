@extends('layouts.app')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Person In Charge</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pic.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('pic.store') }}" method="POST">
    	@csrf
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">General Information</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="form-group mb-3">
                    <strong>Name:</strong>
		            <input type="text" name="pic_name" class="form-control" placeholder="Enter the name of PIC...">
                </div>
                <div class="form-group mb-3">
                    <strong>Position In Company:</strong>
                    <select class="pic_position form-control" name="pic_position">
                        <option value="Normal Staff" selected>Normal Staff</option>
                        <option value="Admin">Admin</option>
                        <option value="HR Manager">HR Manager</option>
                        <option value="Manager">Manager</option>
                        <option value="Auditor">Auditor</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <strong>Contact Number:</strong>
		            <input type="text" class="form-control" name="pic_contact" placeholder="Enter the contact number...">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		        </div>
            </div>
        </div>
    </form>
@endsection
  
<script>
    $(document).ready(function() {
      $(".pic_position").select2({
        tags: true
      });
    });
</script>