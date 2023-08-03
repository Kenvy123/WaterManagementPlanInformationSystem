@extends('layouts.app')


@section('content')
<style>
    hr {
        border: 2px dashed green;
    }
</style>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Estate Form</h1>
    <a href="{{ route('estate_form.index') }}" class="btn btn-primary d-sm-inline-block shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M48.5 224H40c-13.3 0-24-10.7-24-24V72c0-9.7 5.8-18.5 14.8-22.2s19.3-1.7 26.2 5.2L98.6 96.6c87.6-86.5 228.7-86.2 315.8 1c87.5 87.5 87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3c-62.2-62.2-162.7-62.5-225.3-1L185 183c6.9 6.9 8.9 17.2 5.2 26.2s-12.5 14.8-22.2 14.8H48.5z"/></svg> Back</a>
</div>

<!-- Content Row -->

<div class="row">

    <div class="col-12">
        {{-- <p class="text-right">
            <a href="{{ route('estate_form.create') }}" class="btn btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Create New form</a>
            <a href="{{ route('estate_form.index') }}" class="btn btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Back</a>
        </p> --}}
    </div>
        <?php
            if (!isset($model)) {
                $model = null;
            }
        ?>

        <?=Form::model($model, array('route' => array('estate_form.store')))?>
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
                        <?=Form::label('estate_form_year', 'Year:');?>
                        <?=Form::selectRange('estate_form_year', 1990, 2099, null, array('class'=>'a'));?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="opr_id">Operating Unit</label>
                        <select name="opr_id" id="opr_id" class="form-control">
                            <option value="">Select an operating unit</option>
                            @foreach($operatingUnits as $ou)
                                <option value="{{ $ou->id }}">{{ $ou->operating_unit_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group mb-3">
                        <?=Form::label('estate_unit_name', 'Operating Unit Name:');?>
                        <?=Form::text('estate_unit_name', null, array('class'=>'form-control', 'placeholder'=>"Enter the operating units' name..."));?>
                    </div> --}}
                    <div class="form-group mb-3">
                        <?=Form::label('estate_area_state', 'Area Statement:');?>
                        <?=Form::text('estate_area_state', null, array('class'=>'form-control', 'placeholder'=>"Enter the area statement..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_land_title', 'Land Title:');?>
                        <?=Form::text('estate_land_title', null, array('class'=>'form-control', 'placeholder'=>"Enter the land title..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_planting_profile', 'Planting Profile:');?>
                        <?=Form::text('estate_planting_profile', null, array('class'=>'form-control', 'placeholder'=>"Enter the planting profile..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_soil_type', 'Soil Type:');?>
                        <?=Form::select('estate_soil_type',array('sandy'=>'Sandy','clay'=>'Clay', 'peat'=>'Peat'), 'sandy');?>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="form-group mb-3">
                        <strong>Total Occupancy</strong>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_staff_exe', 'Staff & Executive:');?>
                        <?=Form::number('estate_staff_exe', null, array('class'=>'form-control', 'placeholder'=>"Enter the operating units' name..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_staff_exed', 'Staff & Executive Dependants:');?>
                        <?=Form::number('estate_staff_exed', null, array('class'=>'form-control', 'placeholder'=>"Enter the operating units' name..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_workers', 'Workers:');?>
                        <?=Form::number('estate_workers', null, array('class'=>'form-control', 'placeholder'=>"Enter the operating units' name..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_worker_dep', 'Workers Dependants:');?>
                        <?=Form::number('estate_worker_dep', null, array('class'=>'form-control', 'placeholder'=>"Enter the operating units' name..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_total_housing', 'Total Housing (All):');?>
                        <?=Form::number('estate_total_housing', null, array('class'=>'form-control', 'placeholder'=>"Enter the operating units' name..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_general_remark', 'Remark:');?>
                        <?=Form::text('estate_general_remark', null, array('class'=>'form-control', 'placeholder'=>"Enter the operating units' name..."));?>
                    </div>
                    
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Rainfall Data (mm)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <table class="table table-bordered text-center" id="table_estate_rainfall">
                            <thead>
                                <tr>
                                    <th>Jan</th>
                                    <th>Feb</th>
                                    <th>Mar</th>
                                    <th>Apr</th>
                                    <th>May</th>
                                    <th>Jun</th>
                                    <th>Jul</th>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Oct</th>
                                    <th>Nov</th>
                                    <th>Dec</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><?=Form::number('Jan', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Feb', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Mar', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Apr', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('May', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Jun', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Jul', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Aug', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Sep', null, array('class'=>'form-control'));?></td>                             
                                <td><?=Form::number('Oct', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Nov', null, array('class'=>'form-control'));?></td>
                                <td><?=Form::number('Dec', null, array('class'=>'form-control'));?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Source of Water (Operation)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_river_water_name', 'River Water (Name):');?>
                        <?=Form::text('estate_operation_river_water_name',null, array('class'=>'form-control','placeholder'=>"Enter the river name..." ));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_river_water_abstraction', 'Abstraction');?><br>
                        <?=Form::radio('estate_operation_river_water_abstraction', 'yes');?>
                        <?=Form::label('estate_operation_river_water_abstraction', 'Yes');?><br>
                        <?=Form::radio('estate_operation_river_water_abstraction', 'no');?>
                        <?=Form::label('estate_operation_river_water_abstraction', 'No');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_use_of_river_water', 'Use of Water:');?>
                        <?=Form::text('estate_operation_use_of_river_water', null, array('class'=>'form-control', 'placeholder'=>"Enter the use of water..."));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_ground_water_name', 'Ground Water (Name):');?>
                        <?=Form::text('estate_operation_ground_water_name',null, array('class'=>'form-control','placeholder'=>"Enter the ground water name..." ));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_ground_water_abstraction', 'Abstraction');?><br>
                        <?=Form::radio('estate_operation_ground_water_abstraction', 'yes');?>
                        <?=Form::label('estate_operation_ground_water_abstraction', 'Yes');?><br>
                        <?=Form::radio('estate_operation_ground_water_abstraction', 'no');?>
                        <?=Form::label('estate_operation_ground_water_abstraction', 'No');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_use_of_ground_water', 'Use of Water:');?>
                        <?=Form::text('estate_operation_use_of_ground_water', null, array('class'=>'form-control', 'placeholder'=>"Enter the use of water..."));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_reservoir_name', 'Reservoir (Name):');?>
                        <?=Form::text('estate_operation_reservoir_name',null, array('class'=>'form-control','placeholder'=>"Enter the reservoir name..." ));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_reservoir_abstraction', 'Abstraction');?><br>
                        <?=Form::radio('estate_operation_reservoir_abstraction', 'yes');?>
                        <?=Form::label('estate_operation_reservoir_abstraction', 'Yes');?><br>
                        <?=Form::radio('estate_operation_reservoir_abstraction', 'no');?>
                        <?=Form::label('estate_operation_reservoir_abstraction', 'No');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_use_of_reservoir_water', 'Use of Water:');?>
                        <?=Form::text('estate_operation_use_of_reservoir_water', null, array('class'=>'form-control', 'placeholder'=>"Enter the use of water..."));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_natural_pond_name', 'Natural Pond (Name):');?>
                        <?=Form::text('estate_operation_natural_pond_name',null, array('class'=>'form-control','placeholder'=>"Enter the natural pond name..." ));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_natural_pond_abstraction', 'Abstraction');?><br>
                        <?=Form::radio('estate_operation_natural_pond_abstraction', 'yes');?>
                        <?=Form::label('estate_operation_natural_pond_abstraction', 'Yes');?><br>
                        <?=Form::radio('estate_operation_natural_pond_abstraction', 'no');?>
                        <?=Form::label('estate_operation_natural_pond_abstraction', 'No');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_use_of_natural_pond_water', 'Use of Water:');?>
                        <?=Form::text('estate_operation_use_of_natural_pond_water', null, array('class'=>'form-control', 'placeholder'=>"Enter the use of water..."));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_local_authority_name', 'Local Authority (Jabatan Air):');?>
                        <?=Form::text('estate_operation_local_authority_name',null, array('class'=>'form-control','placeholder'=>"Enter the local authority name..." ));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_local_authority_abstraction', 'Abstraction');?><br>
                        <?=Form::radio('estate_operation_local_authority_abstraction', 'yes');?>
                        <?=Form::label('estate_operation_local_authority_abstraction', 'Yes');?><br>
                        <?=Form::radio('estate_operation_local_authority_abstraction', 'no');?>
                        <?=Form::label('estate_operation_local_authority_abstraction', 'No');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_use_of_local_authority_water', 'Use of Water:');?>
                        <?=Form::text('estate_operation_use_of_local_authority_water', null, array('class'=>'form-control', 'placeholder'=>"Enter the use of water..."));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('Rain Water Harvesting:');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_rain_water_harvesting_abstraction', 'Abstraction');?><br>
                        <?=Form::radio('estate_operation_rain_water_harvesting_abstraction', 'yes');?>
                        <?=Form::label('estate_operation_rain_water_harvesting_abstraction', 'Yes');?><br>
                        <?=Form::radio('estate_operation_rain_water_harvesting_abstraction', 'no');?>
                        <?=Form::label('estate_operation_rain_water_harvesting_abstraction', 'No');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_use_of_harvesting_water', 'Use of Water:');?>
                        <?=Form::text('estate_operation_use_of_harvesting_water', null, array('class'=>'form-control', 'placeholder'=>"Enter the use of water..."));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_other_name', 'Other (Specify if any):');?>
                        <?=Form::text('estate_operation_other_name',null, array('class'=>'form-control','placeholder'=>"Enter the name..." ));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_other_abstraction', 'Abstraction');?><br>
                        <?=Form::radio('estate_operation_other_abstraction', 'yes');?>
                        <?=Form::label('estate_operation_other_abstraction', 'Yes');?><br>
                        <?=Form::radio('estate_operation_other_abstraction', 'no');?>
                        <?=Form::label('estate_operation_other_abstraction', 'No');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_use_of_other_water', 'Use of Water:');?>
                        <?=Form::text('estate_operation_use_of_other_water', null, array('class'=>'form-control', 'placeholder'=>"Enter the use of water..."));?><br/>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Consumption (Total Liter/Year)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-4">
                        <h4>Field Operation</h4>
                    </div>
                    <div class="form-group mb-4">
                        <?=Form::label('estate_operation_workshop_wc', 'Workshop:');?>
                        <?=Form::number('estate_operation_workshop_wc',null, array('class'=>'form-control','placeholder'=>"Enter the water comsumption by workshop..." ));?>
                    </div>
                    <div class="form-group mb-4">
                        <?=Form::label('estate_operation_pre_mc_wc', 'Pre- Mix Chemical:');?>
                        <?=Form::number('estate_operation_pre_mc_wc',null, array('class'=>'form-control','placeholder'=>"Enter the water comsumption by pre- mix chemical..." ));?>
                    </div>
                    <div class="form-group mb-4">
                        <?=Form::label('estate_operation_trf_wc', 'Triple Rinse Facility:');?>
                        <?=Form::number('estate_operation_trf_wc',null, array('class'=>'form-control','placeholder'=>"Enter the water comsumption by Triple Rinse Facility..." ));?>
                    </div>
                    <div class="form-group mb-4">
                        <?=Form::label('estate_operation_nursery_wc', 'Nursery:');?>
                        <?=Form::number('estate_operation_nursery_wc',null, array('class'=>'form-control','placeholder'=>"Enter the water comsumption by workshop..." ));?>
                    </div>
                    <div class="form-group mb-4">
                        <?=Form::label('estate_operation_ls_wc', 'Livestock:');?>
                        <?=Form::number('estate_operation_ls_wc',null, array('class'=>'form-control','placeholder'=>"Enter the water comsumption by workshop..." ));?>
                    </div>
                    <div class="form-group mb-4">
                        <?=Form::label('estate_operation_other_wc_name', 'Other (Specify):');?>
                        <?=Form::text('estate_operation_other_wc_name',null, array('class'=>'form-control','placeholder'=>"Enter the name of other sources..." ));?><br/>
                        <?=Form::number('estate_operation_other_wc',null, array('class'=>'form-control','placeholder'=>"Enter the water comsumption..." ));?>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Quality Monitoring</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label>River (Upstream & Downstream):</label><br/>
                        <label>Parameter (NWQS) :</label><br/>
                        <?=Form::checkbox('estate_operation_wqm_ph', 'ph');?>
                        <?=Form::label('estate_operation_wqm_ph', 'pH');?><br>
                        <?=Form::checkbox('estate_operation_wqm_do', 'do');?>
                        <?=Form::label('estate_operation_wqm_do', 'Dissolved Oxygen (DO)');?><br>
                        <?=Form::checkbox('estate_operation_wqm_bod', 'bod');?>
                        <?=Form::label('estate_operation_wqm_bod', 'Biological Oxygen Demand (BOD)');?><br>
                        <?=Form::checkbox('estate_operation_wqm_cod', 'cod');?>
                        <?=Form::label('estate_operation_wqm_cod', 'Chemical Oxygen Demand (COD)');?><br>
                        <?=Form::checkbox('estate_operation_wqm_tss', 'tss');?>
                        <?=Form::label('estate_operation_wqm_tss', 'Total Suspended Solid (TSS)');?><br>
                        <?=Form::checkbox('estate_operation_wqm_an', 'an');?>
                        <?=Form::label('estate_operation_wqm_an', 'Ammoniacal Nitrogen (AN)');?><br>
                        <?=Form::checkbox('estate_operation_wqm_ong', 'ong');?>
                        <?=Form::label('estate_operation_wqm_ong', 'Oil and Grease (O&G)');?><br>
                        <?=Form::checkbox('estate_operation_wqm_turbidity', 'turbidity');?>
                        <?=Form::label('estate_operation_wqm_turbidity', 'Turbidity');?><br>
                        <?=Form::label('estate_operation_other_parameter_value,estate_other_parameter_name', 'Other (specify):');?><br>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <?=Form::checkbox('estate_operation_other_parameter_value',);?>
                                </div>
                            </div>
                            <?=Form::text('estate_other_parameter_name',null,array('class'=>'form-control', 'placeholder'=>"Enter the parameter name..."));?>
                        </div>
                        <div class="form-group mb-3">
                            <?=Form::label('estate_operation_rw_qmf', 'Quality Monitoring Frequency (Refer Environment Compliance Report - EIA): ');?><br/>
                            <?=Form::text('estate_operation_rw_qmf',null,array('class'=>'form-control', 'placeholder'=>"Enter the monitoring frequency..."));?>
                        </div>
                        <div class="form-group mb-3">
                            <?=Form::label('estate_gw_parameter_value, estate_gw_parameter_name', 'Ground Water (Borewell / Tubewell):');?><br/>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <?=Form::checkbox('estate_gw_parameter_value',null,array('class'=>'form-control'));?>
                                    </div>
                                </div>
                                <?=Form::text('estate_gw_parameter_name',null,array('class'=>'form-control', 'placeholder'=>"Enter the parameter name..."));?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <?=Form::label('estate_operation_gw_qmf', 'Quality Monitoring Frequency (Refer Environment Compliance Report - EIA): ');?><br/>
                            <?=Form::text('estate_operation_gw_qmf',null,array('class'=>'form-control', 'placeholder'=>"Enter the monitoring frequency..."));?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Flow Meter Installed</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_store_fm', 'Store: ');?><br/>
                        <?=Form::number('estate_operation_store_fm',null,array('class'=>'form-control', 'placeholder'=>"0..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_store_remark', 'Remarks: ');?><br/>
                        <?=Form::text('estate_operation_store_remark',null,array('class'=>'form-control', 'placeholder'=>"other remark..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_ws_fm', 'Workshop: ');?><br/>
                        <?=Form::number('estate_operation_ws_fm',null,array('class'=>'form-control', 'placeholder'=>"0..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_ws_remark', 'Remarks: ');?><br/>
                        <?=Form::text('estate_operation_ws_remark',null,array('class'=>'form-control', 'placeholder'=>"other remark..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_pmarea_fm', 'Pre- mix Area: ');?><br/>
                        <?=Form::number('estate_operation_pmarea_fm',null,array('class'=>'form-control', 'placeholder'=>"0..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_pmarea_remark', 'Remarks: ');?><br/>
                        <?=Form::text('estate_operation_pmarea_remark',null,array('class'=>'form-control', 'placeholder'=>"other remark..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_tra_fm', 'Triple Rinse Area: ');?><br/>
                        <?=Form::number('estate_operation_tra_fm',null,array('class'=>'form-control', 'placeholder'=>"0..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_tra_remark', 'Remarks: ');?><br/>
                        <?=Form::text('estate_operation_tra_remark',null,array('class'=>'form-control', 'placeholder'=>"other remark..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_nursery_fm', 'Nursery: ');?><br/>
                        <?=Form::number('estate_operation_nursery_fm',null,array('class'=>'form-control', 'placeholder'=>"0..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_nursery_remark', 'Remarks: ');?><br/>
                        <?=Form::text('estate_operation_nursery_remark',null,array('class'=>'form-control', 'placeholder'=>"other remark..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_lb_fm', 'Livestock Barn: ');?><br/>
                        <?=Form::number('estate_operation_lb_fm',null,array('class'=>'form-control', 'placeholder'=>"0..."));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_lb_remark', 'Remarks: ');?><br/>
                        <?=Form::text('estate_operation_lb_remark',null,array('class'=>'form-control', 'placeholder'=>"other remark..."));?>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Protection of Natural Water Sources</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <table class="table table-bordered text-center" id="table_estate_pnws">
                            <thead>
                                <tr>
                                    <th><?=Form::label('estate_operation_pwns_location_riparian', 'Location of Riparian (Phase / DIV/ Block No.)');?></th>
                                    <th><?=Form::label('estate_operation_pwns_riparian_reserve', 'Riparian Reserve (width in m)');?></th>
                                    <th><?=Form::label('estate_operation_pwns_mf', 'Monitoring Frequency');?></th>
                                    <th><?=Form::label('estate_operation_pwns_pic', 'PIC');?></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?=Form::text('estate_operation_pwns_location_riparian[]', null, array('class'=>'form-control'));?></td>
                                    <td><?=Form::text('estate_operation_pwns_riparian_reserve[]', null, array('class'=>'form-control'));?></td>
                                    <td><?=Form::text('estate_operation_pwns_mf[]', null, array('class'=>'form-control'));?></td>
                                    <td><?=Form::text('estate_operation_pwns_pic[]', null, array('class'=>'form-control'));?></td>
                                    <td><button type="button" class="btn btn-danger"
                                            onclick="deleteWaterSourcesRow(this)">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" onclick="addNewWaterSourcesRow()">Add New Row</button>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Soil Moisture Conservation</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>EFB Mulching</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_efb_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_efb_application', 'available');?>
                        <?=Form::label('estate_operation_efb_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_efb_application', 'notavailable');?>
                        <?=Form::label('estate_operation_efb_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_efb_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_efb_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_efb_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_efb_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Decanter Cake</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_dc_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_dc_application', 'available');?>
                        <?=Form::label('estate_operation_dc_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_dc_application', 'notavailable');?>
                        <?=Form::label('estate_operation_dc_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_dc_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_dc_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_dc_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_dc_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Bunch Ash</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_ba_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_ba_application', 'available');?>
                        <?=Form::label('estate_operation_ba_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_ba_application', 'notavailable');?>
                        <?=Form::label('estate_operation_ba_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_ba_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_ba_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_ba_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_ba_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Shell</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_shell_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_shell_application', 'available');?>
                        <?=Form::label('estate_operation_shell_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_shell_application', 'notavailable');?>
                        <?=Form::label('estate_operation_shell_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_shell_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_shell_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_shell_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_shell_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Fiber</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_fiber_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_fiber_application', 'available');?>
                        <?=Form::label('estate_operation_fiber_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_fiber_application', 'notavailable');?>
                        <?=Form::label('estate_operation_fiber_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_fiber_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_fiber_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_fiber_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_fiber_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Slit Pit</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_sp_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_sp_application', 'available');?>
                        <?=Form::label('estate_operation_sp_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_sp_application', 'notavailable');?>
                        <?=Form::label('estate_operation_sp_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_sp_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_sp_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_sp_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_sp_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Sedimentation Pond</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_sdp_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_sdp_application', 'available');?>
                        <?=Form::label('estate_operation_sdp_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_sdp_application', 'notavailable');?>
                        <?=Form::label('estate_operation_sdp_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_sdp_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_sdp_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_sdp_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_sdp_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Frond Stacking</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_fs_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_fs_application', 'available');?>
                        <?=Form::label('estate_operation_fs_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_fs_application', 'notavailable');?>
                        <?=Form::label('estate_operation_fs_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_fs_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_fs_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_fs_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_fs_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Other (specify): </strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_othr_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_othr_application', 'available');?>
                        <?=Form::label('estate_operation_othr_application', 'Available');?><br/>
                        <?=Form::radio('estate_operation_othr_application', 'notavailable');?>
                        <?=Form::label('estate_operation_othr_application', 'Not Available');?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_othr_ta', 'Total Applied (mt/year): ');?><br/>
                        <?=Form::text('estate_operation_othr_ta', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_othr_mf', 'Monitoring (if any): ');?><br/>
                        <?=Form::text('estate_operation_othr_mf', null, array('class'=>'form-control'));?><br/>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Obstruction of River/ Waterway (if any)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>Bunds</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_bund_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_orw_bund_application', 'available')?>
                        <?=Form::label('estate_operation_orw_bund_application', 'Available')?><br>
                        <?=Form::radio('estate_operation_orw_bund_application', 'notavailable')?>
                        <?=Form::label('estate_operation_orw_bund_application', 'Not Available')?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_bund_location', 'Location: ');?><br/>
                        <?=Form::text('estate_operation_orw_bund_location', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_bund_remark', 'Remark: ');?><br/>
                        <?=Form::text('estate_operation_orw_bund_remark', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Weirs</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_weir_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_orw_weir_application', 'available')?>
                        <?=Form::label('estate_operation_orw_weir_application', 'Available')?><br>
                        <?=Form::radio('estate_operation_orw_weir_application', 'notavailable')?>
                        <?=Form::label('estate_operation_orw_weir_application', 'Not Available')?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_weir_location', 'Location: ');?><br/>
                        <?=Form::text('estate_operation_orw_weir_location', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_weir_remark', 'Remark: ');?><br/>
                        <?=Form::text('estate_operation_orw_weir_remark', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Dams</strong><br/>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_dam_application', 'Application: ');?><br/>
                        <?=Form::radio('estate_operation_orw_dam_application', 'available')?>
                        <?=Form::label('estate_operation_orw_dam_application', 'Available')?><br>
                        <?=Form::radio('estate_operation_orw_dam_application', 'notavailable')?>
                        <?=Form::label('estate_operation_orw_dam_application', 'Not Available')?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_dam_location', 'Location: ');?><br/>
                        <?=Form::text('estate_operation_orw_dam_location', null, array('class'=>'form-control'));?>
                    </div>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_operation_orw_dam_remark', 'Remark: ');?><br/>
                        <?=Form::text('estate_operation_orw_dam_remark', null, array('class'=>'form-control'));?><br/>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Source of Water (Domestic)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>River Water (Name): </strong>
                        <?=Form::text('estate_domestic_river_water_name', null, array('class'=>'form-control'));?>
                    </div>
                    <div>
                        <?=Form::label('estate_domestic_river_water_abstraction', 'Abstraction: ');?><br/>
                        <?=Form::radio('estate_domestic_river_water_abstraction', 'yes')?>
                        <?=Form::label('estate_domestic_river_water_abstraction', 'Yes')?><br>
                        <?=Form::radio('estate_domestic_river_water_abstraction', 'no')?>
                        <?=Form::label('estate_domestic_river_water_abstraction', 'No')?>
                    </div><br>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_domestic_use_of_river_water', 'Use of Water: ');?>
                        <?=Form::text('estate_domestic_use_of_river_water', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Ground Water (Name): </strong>
                        <?=Form::text('estate_domestic_ground_water_name', null, array('class'=>'form-control'));?>
                    </div>
                    <div>
                        <?=Form::label('estate_domestic_ground_water_abstraction', 'Abstraction: ');?><br/>
                        <?=Form::radio('estate_domestic_ground_water_abstraction', 'yes')?>
                        <?=Form::label('estate_domestic_ground_water_abstraction', 'Yes')?><br>
                        <?=Form::radio('estate_domestic_ground_water_abstraction', 'no')?>
                        <?=Form::label('estate_domestic_ground_water_abstraction', 'No')?>
                    </div><br>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_domestic_use_of_ground_water', 'Use of Water: ');?>
                        <?=Form::text('estate_domestic_use_of_ground_water', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Reservoir (Name): </strong>
                        <?=Form::text('estate_domestic_reservoir_name', null, array('class'=>'form-control'));?>
                    </div>
                    <div>
                        <?=Form::label('estate_domestic_reservoir_abstraction', 'Abstraction: ');?><br/>
                        <?=Form::radio('estate_domestic_reservoir_abstraction', 'yes')?>
                        <?=Form::label('estate_domestic_reservoir_abstraction', 'Yes')?><br>
                        <?=Form::radio('estate_domestic_reservoir_abstraction', 'no')?>
                        <?=Form::label('estate_domestic_reservoir_abstraction', 'No')?>
                    </div><br>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_domestic_use_of_reservoir_water', 'Use of Water: ');?>
                        <?=Form::text('estate_domestic_use_of_reservoir_water', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Natural Pond (Name): </strong>
                        <?=Form::text('estate_domestic_natural_pond_name', null, array('class'=>'form-control'));?>
                    </div>
                    <div>
                        <?=Form::label('estate_domestic_natural_pond_abstraction', 'Abstraction: ');?><br/>
                        <?=Form::radio('estate_domestic_natural_pond_abstraction', 'yes')?>
                        <?=Form::label('estate_domestic_natural_pond_abstraction', 'Yes')?><br>
                        <?=Form::radio('estate_domestic_natural_pond_abstraction', 'no')?>
                        <?=Form::label('estate_domestic_natural_pond_abstraction', 'No')?>
                    </div><br>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_domestic_use_of_natural_pond_water', 'Use of Water: ');?>
                        <?=Form::text('estate_domestic_use_of_natural_pond_water', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Local Authority (Jabatan Air): </strong>
                        <?=Form::text('estate_domestic_local_authority_name', null, array('class'=>'form-control'));?>
                    </div>
                    <div>
                        <?=Form::label('estate_domestic_local_authority_abstraction', 'Abstraction: ');?><br/>
                        <?=Form::radio('estate_domestic_local_authority_abstraction', 'yes')?>
                        <?=Form::label('estate_domestic_local_authority_abstraction', 'Yes')?><br>
                        <?=Form::radio('estate_domestic_local_authority_abstraction', 'no')?>
                        <?=Form::label('estate_domestic_local_authority_abstraction', 'No')?>
                    </div><br>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_domestic_use_of_local_authority_water', 'Use of Water: ');?>
                        <?=Form::text('estate_domestic_use_of_local_authority_water', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Rain Water Harvesting: </strong>
                        <?=Form::text('estate_domestic_river_water_name', null, array('class'=>'form-control'));?>
                    </div>
                    <div>
                        <?=Form::label('estate_domestic_rain_water_harvesting_abstraction', 'Abstraction: ');?><br/>
                        <?=Form::radio('estate_domestic_rain_water_harvesting_abstraction', 'yes')?>
                        <?=Form::label('estate_domestic_rain_water_harvesting_abstraction', 'Yes')?><br>
                        <?=Form::radio('estate_domestic_rain_water_harvesting_abstraction', 'no')?>
                        <?=Form::label('estate_domestic_rain_water_harvesting_abstraction', 'No')?>
                    </div><br>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_domestic_use_of_river_water', 'Use of Water: ');?>
                        <?=Form::text('estate_domestic_use_of_river_water', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Rain Water Harvesting: </strong>
                        <?=Form::text('estate_domestic_river_water_name', null, array('class'=>'form-control'));?>
                    </div>
                    <div>
                        <?=Form::label('estate_domestic_rain_water_harvesting_abstraction', 'Abstraction: ');?><br/>
                        <?=Form::radio('estate_domestic_rain_water_harvesting_abstraction', 'yes')?>
                        <?=Form::label('estate_domestic_rain_water_harvesting_abstraction', 'Yes')?><br>
                        <?=Form::radio('estate_domestic_rain_water_harvesting_abstraction', 'no')?>
                        <?=Form::label('estate_domestic_rain_water_harvesting_abstraction', 'No')?>
                    </div><br>
                    <div class="form-group mb-3">
                        <?=Form::label('estate_domestic_use_of_harvesting_water', 'Use of Water: ');?>
                        <?=Form::text('estate_domestic_use_of_harvesting_water', null, array('class'=>'form-control'));?><br/>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Consumption (Total Liter/Year)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>Housing: </strong>
                        <?=Form::text('estate_domestic_housing_wc', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Office Building: </strong>
                        <?=Form::text('estate_domestic_office_building_wc', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Other (Specify)</strong><br>
                        <?=Form::label('estate_domestic_other_wc_name', 'Name: ');?>
                        <?=Form::text('estate_domestic_other_wc_name', null, array('class'=>'form-control'));?><br>
                        <?=Form::label('estate_domestic_other_wc', 'Water Consumption (Total Litre/Year): ');?>
                        <?=Form::text('estate_domestic_other_wc', null, array('class'=>'form-control'));?>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Storage Tank Capacity</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>Water Treatment Plant Storage Tank: </strong>
                        <?=Form::number('estate_domestic_wtpst_stc', null, array('class'=>'form-control'));?><br>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Housing: </strong>
                        <?=Form::number('estate_domestic_housing_stc', null, array('class'=>'form-control'));?><br>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Office: </strong>
                        <?=Form::number('estate_domestic_office_stc', null, array('class'=>'form-control'));?><br>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total Flow Meter Installed</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>Housing Area</strong><br/>
                        <?=Form::label('estate_domestic_ha_fm', 'Flow Meter installed: ');?>
                        <?=Form::number('estate_domestic_ha_fm', null, array('class'=>'form-control'));?><br>
                        <?=Form::label('estate_domestic_ha_remark', 'Remark: ');?>
                        <?=Form::text('estate_domestic_ha_remark', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Office Area</strong><br/>
                        <?=Form::label('estate_domestic_oa_fm', 'Flow Meter installed: ');?>
                        <?=Form::number('estate_domestic_oa_fm', null, array('class'=>'form-control'));?><br>
                        <?=Form::label('estate_domestic_oa_remark', 'Remark: ');?>
                        <?=Form::text('estate_domestic_oa_remark', null, array('class'=>'form-control'));?><br/>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Other:</strong><br/>
                        <?=Form::label('estate_domestic_otr_fm', 'Flow Meter installed: ');?>
                        <?=Form::number('estate_domestic_otr_fm', null, array('class'=>'form-control'));?><br>
                        <?=Form::label('estate_domestic_otr_remark', 'Remark: ');?>
                        <?=Form::text('estate_domestic_otr_remark', null, array('class'=>'form-control'));?><br/>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pumping/ Flow Rate</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>River to Reservoir (litre/hour):</strong>
                        <?=Form::number('estate_domestic_rnr_pfr', null, array('class'=>'form-control'));?><br>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Reservoir to Water Treatment Plant (litre/hour):</strong>
                        <?=Form::number('estate_domestic_rwtp_pfr', null, array('class'=>'form-control'));?><br>
                    </div>
                    <div class="form-group mb-3">
                        <strong>Water Treatment Plant to Housing& Office (litre/hour):</strong>
                        <?=Form::number('estate_domestic_wtps_pfr', null, array('class'=>'form-control'));?><br>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Treatment Plant</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Quality Monitoring</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Quality Monitoring</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Quality Monitoring</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Water Quality Monitoring</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group mb-3">
                        
                    </div>
                </div>
            </div>
        <?=Form::close();?>
    </div>

    <form action="{{ route('estate_form.store') }}" method="POST"><br/>
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <h3>Estate</h3>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Year: </strong>
                        <input type="number" min="1990" max="2099" id="estate_form_year" name="estate_form_year">
                    </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <strong>Operating Unit Name:</strong>
                    <input type="text" name="estate_unit_name" class="form-control"
                        placeholder="Enter the operating units' name...">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <strong>Area Statement:</strong>
                    <input type="text" name="estate_area_state" class="form-control" placeholder="Enter the area statement...">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <strong>Land Title:</strong>
                    <input type="text" name="estate_land_title" class="form-control" placeholder="Enter the land title...">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <strong>Planting Profile:</strong>
                    <input type="text" name="estate_planting_profile" class="form-control"
                        placeholder="E.g: year of planting/ planting material...">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3 mb-3">
                    <strong>Soil Type:</strong>
                    <select name="estate_soil_type">
                        <option value="sandy">Sandy</option>
                        <option value="clay">Clay</option>
                        <option value="peat">Peat</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <h3>Total Occupancy</h3>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Staff & Executive:</strong>
                    <input type="int" name="estate_staff_exe" class="form-control" placeholder="E.g: 26">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Staff & Executive Dependants:</strong>
                    <input type="int" name="estate_staff_exed" class="form-control" placeholder="E.g: 55">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Workers:</strong>
                    <input type="int" name="estate_workers" class="form-control" placeholder="E.g: 102">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Workers Dependants:</strong>
                    <input type="int" name="estate_worker_dep" class="form-control" placeholder="E.g: 102">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Total Housing (All):</strong>
                    <input type="int" name="estate_total_housing" class="form-control" placeholder="E.g: 100">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Remark:</strong>
                    <textarea class="form-control" rows="4" name="estate_general_remark"
                        placeholder="Other remarks..."></textarea>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h3>Rainfall Data (mm)</h3>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <table class="table table-bordered text-center" id="table_estate_rainfall">
                        <thead>
                            <tr>
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>May</th>
                                <th>Jun</th>
                                <th>Jul</th>
                                <th>Aug</th>
                                <th>Sep</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><input class="form-control" , name="Jan"></td>
                            <td><input class="form-control" , name="Feb"></td>
                            <td><input class="form-control" , name="Mar"></td>
                            <td><input class="form-control" , name="Apr"></td>
                            <td><input class="form-control" , name="May"></td>
                            <td><input class="form-control" , name="Jun"></td>
                            <td><input class="form-control" , name="Jul"></td>
                            <td><input class="form-control" , name="Aug"></td>
                            <td><input class="form-control" , name="Sep"></td>
                            <td><input class="form-control" , name="Oct"></td>
                            <td><input class="form-control" , name="Nov"></td>
                            <td><input class="form-control" , name="Dec"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <!---------------------------------Operation------------------------------------------------->
            <h2>Operation</h2>
            <h3>Source of Water</h3>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3 mb-3">
                    <strong>River Water (Name): </strong>
                    <input class="form-control" name="estate_operation_river_water_name"
                        placeholder="Enter the name of river...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('estate_operation_river_water_abstraction', 'yes') !!}
                    {!! Form::label('estate_operation_river_water_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('estate_operation_river_water_abstraction', 'no') !!}
                    {!! Form::label('estate_operation_river_water_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_use_of_river_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Ground Water (Name): </strong>
                    <input class="form-control" name="estate_operation_ground_water_name"
                        placeholder="Enter the name of ground water...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('estate_operation_ground_water_abstraction', 'yes') !!}
                    {!! Form::label('estate_operation_ground_water_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('estate_operation_ground_water_abstraction', 'no') !!}
                    {!! Form::label('estate_operation_ground_water_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_use_of_ground_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Reservoir (Name): </strong>
                    <input class="form-control" name="estate_operation_reservoir_name"
                        placeholder="Enter the name of reservoir...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('estate_operation_reservoir_abstraction', 'yes') !!}
                    {!! Form::label('estate_operation_reservoir_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('estate_operation_reservoir_abstraction', 'no') !!}
                    {!! Form::label('estate_operation_reservoir_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_use_of_reservoir_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Natural Pond (Name): </strong>
                    <input class="form-control" name="estate_operation_natural_pond_name"
                        placeholder="Enter the name of natural pond...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('estate_operation_natural_pond_abstraction', 'yes') !!}
                    {!! Form::label('estate_operation_natural_pond_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('estate_operation_natural_pond_abstraction', 'no') !!}
                    {!! Form::label('estate_operation_natural_pond_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_use_of_natural_pond_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Local Authority (Jabatan Air): </strong>
                    <input class="form-control" name="estate_operation_local_authority_name"
                        placeholder="Enter the name of local authority...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('estate_operation_local_authority_abstraction', 'yes') !!}
                    {!! Form::label('estate_operation_local_authority_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('estate_operation_local_authority_abstraction', 'no') !!}
                    {!! Form::label('estate_operation_local_authority_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_use_of_local_authority_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Rain Water Harvesting: </strong>
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('estate_operation_rain_water_harvesting_abstraction', 'yes') !!}
                    {!! Form::label('estate_operation_rain_water_harvesting_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('estate_operation_rain_water_harvesting_abstraction', 'no') !!}
                    {!! Form::label('estate_operation_rain_water_harvesting_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_use_of_harvesting_water"
                        placeholder="Use of water..."></textarea>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Other (Specify if any): </strong>
                        <input class="form-control" name="estate_operation_other_name"
                            placeholder="Enter the name of other source...">
                    </div>

                    <div class="form-group mb-3">
                        <strong>Abstraction: </strong><br>
                        {!! Form::radio('estate_operation_other_abstraction', 'yes') !!}
                        {!! Form::label('estate_operation_other_abstraction', 'Yes') !!}<br>
                        {!! Form::radio('estate_operation_other_abstraction', 'no') !!}
                        {!! Form::label('estate_operation_other_abstraction', 'No') !!}
                    </div>

                    <div class="form-group mb-3">
                        <strong>Use of Water : </strong>
                        <textarea class="form-control" rows="2" name="estate_operation_use_of_other_water"
                            placeholder="Use of water..."></textarea>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h3>Water Consumption (Total Liter/Year)</h3>
            <h4>Field Operation: </h4>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Workshop: </strong>
                    <input class="form-control" name="estate_operation_workshop_wc" type="number"
                        placeholder="Enter the water comsumption by workshop..." required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Pre- Mix Chemical: </strong>
                    <input class="form-control" name="estate_operation_pre_mc_wc" type="number"
                        placeholder="Enter the water comsumption by pre- mix chemical..." required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Triple Rinse Facility: </strong>
                    <input class="form-control" name="estate_operation_trf_wc" type="number"
                        placeholder="Enter the water comsumption by Triple Rinse Facility..." required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Nursery: </strong>
                    <input class="form-control" name="estate_operation_nursery_wc" type="number"
                        placeholder="Enter the water comsumption by nursery..." required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Livestock: </strong>
                    <input class="form-control" name="estate_operation_ls_wc" type="number"
                        placeholder="Enter the water comsumption by livestock..." required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Other (Specify): </strong>
                    <input class="form-control" name="estate_operation_other_wc_name"
                        placeholder="Enter the name of other sources..."><br/>
                    <input class="form-control" name="estate_operation_other_wc" type="number"
                        placeholder="Enter the water comsumption by others...">
                </div>
            </div>
            <br>
            <hr>
            <br>
            <h3>Water Monitoring</h3>
            <h4>Water Quality Monitoring </h4>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>River (Upstream & Downstream): </strong>
                    <label><strong>Parameter (NWQS) :</strong></label><br />
                    <input type="checkbox" id="estate_operation_wqm_ph" name="estate_operation_wqm_ph" value="ph">
                    <label for="ph">pH</label><br>
                    <input type="checkbox" id="estate_operation_wqm_do" name="estate_operation_wqm_do" value="do">
                    <label for="do">Dissolved Oxygen (DO)</label><br>
                    <input type="checkbox" id="estate_operation_wqm_bod" name="estate_operation_wqm_bod" value="bod">
                    <label for="bod">Biological Oxygen Demand (BOD)</label><br>
                    <input type="checkbox" id="estate_operation_wqm_cod" name="estate_operation_wqm_cod" value="cod">
                    <label for="cod">Chemical Oxygen Demand (COD)</label><br>
                    <input type="checkbox" id="estate_operation_wqm_tss" name="estate_operation_wqm_tss" value="tss">
                    <label for="tss">Total Suspended Solid (TSS)</label><br>
                    <input type="checkbox" id="estate_operation_wqm_an" name="estate_operation_wqm_an" value="an">
                    <label for="an">Ammoniacal Nitrogen (AN)</label><br>
                    <input type="checkbox" id="estate_operation_wqm_ong" name="estate_operation_wqm_ong" value="ong">
                    <label for="ong">Oil and Grease (O&G)</label><br>
                    <input type="checkbox" id="estate_operation_wqm_turbidity" name="estate_operation_wqm_turbidity" value="turbidity">
                    <label for="turbidity">Turbidity</label><br>

                    <br><label><strong>Other (specify): </strong></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="estate_operation_other_parameter_value">
                            </div>
                        </div>
                        <input type="text" class="form-control" name="estate_other_parameter_name">
                    </div>
                    <br>
                    <strong>Quality Monitoring Frequency (Refer Environment Compliance Report - EIA): </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_rw_qmf"
                        placeholder="Quality Monitoring Frequency..."></textarea><br>
                    <strong>Ground Water (Borewell / Tubewell): </strong>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="estate_gw_parameter_value">
                            </div>
                        </div>
                        <br>
                        <input type="text" class="form-control" name="estate_gw_parameter_name">
                    </div>
                    <strong>Quality Monitoring Frequency (Refer Environment Compliance Report - EIA): </strong>
                    <textarea class="form-control" rows="2" name="estate_operation_gw_qmf"
                        placeholder="Quality Monitoring Frequency..."></textarea><br>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Total Flow Meter Installed</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Store:</strong>
                <input class="form-control" name="estate_operation_store_fm" placeholder="0">
                <strong>Remarks: </strong>
                <input class="form-control" name="estate_operation_store_remark" placeholder="other remarks...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Workshop:</strong>
                <input class="form-control" name="estate_operation_ws_fm" placeholder="0">
                <strong>Remarks: </strong>
                <input class="form-control" name="estate_operation_ws_remark" placeholder="other remarks...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Pre- mix Area:</strong>
                <input class="form-control" name="estate_operation_pmarea_fm" placeholder="0">
                <strong>Remarks: </strong>
                <input class="form-control" name="estate_operation_pmarea_remark" placeholder="other remarks...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Triple Rinse Area:</strong>
                <input class="form-control" name="estate_operation_tra_fm" placeholder="0">
                <strong>Remarks: </strong>
                <input class="form-control" name="estate_operation_tra_remark" placeholder="other remarks...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Nursery:</strong>
                <input class="form-control" name="estate_operation_nursery_fm" placeholder="0">
                <strong>Remarks: </strong>
                <input class="form-control" name="estate_operation_nursery_remark" placeholder="other remarks...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Livestock Barn:</strong>
                <input class="form-control" name="estate_operation_lb_fm" placeholder="0">
                <strong>Remarks: </strong>
                <input class="form-control" name="estate_operation_lb_remark" placeholder="other remarks...">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Protection of Natural Water Sources</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <table class="table table-bordered text-center" id="table_estate_pnws">
                    <thead>
                        <tr>
                            <th>Location of Riparian (Phase / DIV/ Block No.)</th>
                            <th>Riparian Reserve (width in m)</th>
                            <th>Monitoring Frequency</th>
                            <th>PIC</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control" name="estate_operation_pwns_location_riparian[]"></td>
                            <td><input class="form-control" name="estate_operation_pwns_riparian_reserve[]"></td>
                            <td><input class="form-control" name="estate_operation_pwns_mf[]"></td>
                            <td><input class="form-control" name="estate_operation_pwns_pic[]"></td>
                            <td><button type="button" class="btn btn-danger"
                                    onclick="deleteWaterSourcesRow(this)">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addNewWaterSourcesRow()">Add New Row</button>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Soil Moisture Conservation</h3>
        <h4>EFB Mulching</h4>
        <div class="form-group mb-3">
            <strong>Application: </strong><br>
            {!! Form::radio('estate_operation_efb_application', 'available') !!}
            {!! Form::label('estate_operation_efb_application', 'Available') !!}<br>
            {!! Form::radio('estate_operation_efb_application', 'notavailable') !!}
            {!! Form::label('estate_operation_efb_application', 'Not Available') !!}
        </div>
        <div class="form-group mb-3">
            <strong>Total Applied (mt/year) : </strong>
            <input class="form-control" name="estate_operation_efb_ta" type="number" placeholder="Enter the total applied...">
        </div>
        <div class="form-group mb-3">
            <strong>Monitoring (if any) : </strong>
            <input class="form-control" name="estate_operation_efb_mf" placeholder="monitoring...">
        </div>
        <br>
        <h4>Decanter Cake</h4>
        <div class="form-group mb-3">
            <strong>Application: </strong><br>
            {!! Form::radio('estate_operation_dc_application', 'available') !!}
            {!! Form::label('estate_operation_dc_application', 'Available') !!}<br>
            {!! Form::radio('estate_operation_dc_application', 'notavailable') !!}
            {!! Form::label('estate_operation_dc_application', 'Not Available') !!}
        </div>
        <div class="form-group mb-3">
            <strong>Total Applied (mt/year) : </strong>
            <input class="form-control" name="estate_operation_dc_ta" type="number" placeholder="Enter the total applied...">
        </div>
        <div class="form-group mb-3">
            <strong>Monitoring (if any) : </strong>
            <input class="form-control" name="estate_operation_dc_mf" placeholder="monitoring...">
        </div>
        <br>
        <h4>Bunch Ash</h4>
        <div class="form-group mb-3">
            <strong>Application: </strong><br>
            {!! Form::radio('estate_operation_ba_application', 'available') !!}
            {!! Form::label('estate_operation_ba_application', 'Available') !!}<br>
            {!! Form::radio('estate_operation_ba_application', 'notavailable') !!}
            {!! Form::label('estate_operation_ba_application', 'Not Available') !!}
        </div>
        <div class="form-group mb-3">
            <strong>Total Applied (mt/year) : </strong>
            <input class="form-control" name="estate_operation_ba_ta" type="number" placeholder="Enter the total applied...">
        </div>
        <div class="form-group mb-3">
            <strong>Monitoring (if any) : </strong>
            <input class="form-control" name="estate_operation_ba_mf" placeholder="monitoring...">
        </div>
        <br>
        <h4>Shell</h4>
        <div class="form-group mb-3">
            <strong>Application: </strong><br>
            {!! Form::radio('estate_operation_shell_application', 'available') !!}
            {!! Form::label('estate_operation_shell_application', 'Available') !!}<br>
            {!! Form::radio('estate_operation_shell_application', 'notavailable') !!}
            {!! Form::label('estate_operation_shell_application', 'Not Available') !!}
        </div>
        <div class="form-group mb-3">
            <strong>Total Applied (mt/year) : </strong>
            <input class="form-control" name="estate_operation_shell_ta" type="number"
                placeholder="Enter the total applied...">
        </div>
        <div class="form-group mb-3">
            <strong>Monitoring (if any) : </strong>
            <input class="form-control" name="estate_operation_shell_mf" placeholder="monitoring...">
        </div>
        <br>
        <h4>Fiber</h4>
        <div class="form-group mb-3">
            <strong>Application: </strong><br>
            {!! Form::radio('estate_operation_fiber_application', 'available') !!}
            {!! Form::label('estate_operation_fiber_application', 'Available') !!}<br>
            {!! Form::radio('estate_operation_fiber_application', 'notavailable') !!}
            {!! Form::label('estate_operation_fiber_application', 'Not Available') !!}
        </div>
        <div class="form-group mb-3">
            <strong>Total Applied (mt/year) : </strong>
            <input class="form-control" name="estate_operation_fiber_ta" type="number"
                placeholder="Enter the total applied...">
        </div>
        <div class="form-group mb-3">
            <strong>Monitoring (if any) : </strong>
            <input class="form-control" name="estate_operation_fiber_mf" placeholder="monitoring...">
        </div>
        <br>
        <h4>Slit Pit</h4>
        <div class="form-group mb-3">
            <strong>Application: </strong><br>
            {!! Form::radio('estate_operation_sp_application', 'available') !!}
            {!! Form::label('estate_operation_sp_application', 'Available') !!}<br>
            {!! Form::radio('estate_operation_sp_application', 'notavailable') !!}
            {!! Form::label('estate_operation_sp_application', 'Not Available') !!}
        </div>
        <div class="form-group mb-3">
            <strong>Total Applied (mt/year) : </strong>
            <input class="form-control" name="estate_operation_sp_ta" type="number" placeholder="Enter the total applied...">
        </div>
        <div class="form-group mb-3">
            <strong>Monitoring (if any) : </strong>
            <input class="form-control" name="estate_operation_sp_mf" placeholder="monitoring...">
        </div>
        <br>
        <h4>Sedimentation Pond</h4>
        <div class="form-group mb-3">
            <strong>Application: </strong><br>
            {!! Form::radio('estate_operation_sdp_application', 'available') !!}
            {!! Form::label('estate_operation_sdp_application', 'Available') !!}<br>
            {!! Form::radio('estate_operation_sdp_application', 'notavailable') !!}
            {!! Form::label('estate_operation_sdp_application', 'Not Available') !!}
        </div>
        <div class="form-group mb-3">
            <strong>Total Applied (mt/year) : </strong>
            <input class="form-control" name="estate_operation_sdp_ta" type="number" placeholder="Enter the total applied...">
        </div>
        <div class="form-group mb-3">
            <strong>Monitoring (if any) : </strong>
            <input class="form-control" name="estate_operation_sdp_mf" placeholder="monitoring...">
        </div>
        <br>
    </div>
    <h4>Frond Stacking</h4>
    <div class="form-group mb-3">
        <strong>Application: </strong><br>
        {!! Form::radio('estate_operation_fs_application', 'available') !!}
        {!! Form::label('estate_operation_fs_application', 'Available') !!}<br>
        {!! Form::radio('estate_operation_fs_application', 'notavailable') !!}
        {!! Form::label('estate_operation_fs_application', 'Not Available') !!}
    </div>
    <div class="form-group mb-3">
        <strong>Total Applied (mt/year) : </strong>
        <input class="form-control" name="estate_operation_fs_ta" type="number" placeholder="Enter the total applied...">
    </div>
    <div class="form-group mb-3">
        <strong>Monitoring (if any) : </strong>
        <input class="form-control" name="estate_operation_fs_mf" placeholder="monitoring...">
    </div>

    <h4>Other (specify): </h4>
    <input class="form-control" name="estate_operation_othr_name" placeholder="Conservation...">
    <div class="form-group mb-3">
        <strong>Application: </strong><br>
        {!! Form::radio('estate_operation_othr_application', 'available') !!}
        {!! Form::label('estate_operation_othr_application', 'Available') !!}<br>
        {!! Form::radio('estate_operation_othr_application', 'notavailable') !!}
        {!! Form::label('estate_operation_othr_application', 'Not Available') !!}
    </div>
    <div class="form-group mb-3">
        <strong>Total Applied (mt/year) : </strong>
        <input class="form-control" name="estate_operation_othr_ta" type="number" placeholder="Enter the total applied...">
    </div>
    <div class="form-group mb-3">
        <strong>Monitoring (if any) : </strong>
        <input class="form-control" name="estate_operation_othr_mf" placeholder="monitoring...">
    </div>
    <h3>Obstruction of River/ Waterway (if any)</h3>
    <h4>Bunds</h4>
    <div class="form-group mb-3">
        <strong>Application: </strong><br>
        {!! Form::radio('estate_operation_orw_bund_application', 'available') !!}
        {!! Form::label('estate_operation_orw_bund_application', 'Available') !!}<br>
        {!! Form::radio('estate_operation_orw_bund_application', 'notavailable') !!}
        {!! Form::label('estate_operation_orw_bund_application', 'Not Available') !!}
    </div>
    <div class="form-group mb-3">
        <strong>Location: </strong>
        <input class="form-control" name="estate_operation_orw_bund_location"
            placeholder="Enter the location of obstruction...">
    </div>
    <div class="form-group mb-3">
        <strong>Remarks: </strong>
        <input class="form-control" name="estate_operation_orw_bund_remark" placeholder="remarks...">
    </div>
    <br>
    <h4>Weirs</h4>
    <div class="form-group mb-3">
        <strong>Application: </strong><br>
        {!! Form::radio('estate_operation_orw_weir_application', 'available') !!}
        {!! Form::label('estate_operation_orw_weir_application', 'Available') !!}<br>
        {!! Form::radio('estate_operation_orw_weir_application', 'notavailable') !!}
        {!! Form::label('estate_operation_orw_weir_application', 'Not Available') !!}
    </div>
    <div class="form-group mb-3">
        <strong>Location: </strong>
        <input class="form-control" name="estate_operation_orw_weir_location"
            placeholder="Enter the location of obstruction...">
    </div>
    <div class="form-group mb-3">
        <strong>Remarks: </strong>
        <input class="form-control" name="estate_operation_orw_weir_remark" placeholder="remarks...">
    </div>
    <br>
    <h4>Dams</h4>
    <div class="form-group mb-3">
        <strong>Application: </strong><br>
        {!! Form::radio('estate_operation_orw_dam_application', 'available') !!}
        {!! Form::label('estate_operation_orw_dam_application', 'Available') !!}<br>
        {!! Form::radio('estate_operation_orw_dam_application', 'notavailable') !!}
        {!! Form::label('estate_operation_orw_dam_application', 'Not Available') !!}
    </div>
    <div class="form-group mb-3">
        <strong>Location: </strong>
        <input class="form-control" name="estate_operation_orw_dam_location"
            placeholder="Enter the location of obstruction...">
    </div>
    <div class="form-group mb-3">
        <strong>Remarks: </strong>
        <input class="form-control" name="estate_operation_orw_dam_remark" placeholder="remarks...">
    </div>
    <br>
    <hr>
    <br>
    <!---------------------------------Domestic------------------------------------------------->
    <h2>Domestic</h2>
    <h3>Source of Water</h3>
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group mb-3 mb-3">
            <strong>River Water (Name): </strong>
            <input class="form-control" name="estate_domestic_river_water_name" placeholder="Enter the name of river...">
        </div>

        <div class="form-group mb-3">
            <strong>Abstraction: </strong><br>
            {!! Form::radio('estate_domestic_river_water_abstraction', 'yes') !!}
            {!! Form::label('estate_domestic_river_water_abstraction', 'Yes') !!}<br>
            {!! Form::radio('estate_domestic_river_water_abstraction', 'no') !!}
            {!! Form::label('estate_domestic_river_water_abstraction', 'No') !!}
        </div>

        <div class="form-group mb-3">
            <strong>Use of Water : </strong>
            <textarea class="form-control" rows="2" name="estate_domestic_use_of_river_water"
                placeholder="Use of water..."></textarea>
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group mb-3">
            <strong>Ground Water (Name): </strong>
            <input class="form-control" name="estate_domestic_ground_water_name"
                placeholder="Enter the name of ground water...">
        </div>

        <div class="form-group mb-3">
            <strong>Abstraction: </strong><br>
            {!! Form::radio('estate_domestic_ground_water_abstraction', 'yes') !!}
            {!! Form::label('estate_domestic_ground_water_abstraction', 'Yes') !!}<br>
            {!! Form::radio('estate_domestic_ground_water_abstraction', 'no') !!}
            {!! Form::label('estate_domestic_ground_water_abstraction', 'No') !!}
        </div>

        <div class="form-group mb-3">
            <strong>Use of Water : </strong>
            <textarea class="form-control" rows="2" name="estate_domestic_use_of_ground_water"
                placeholder="Use of water..."></textarea>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group mb-3">
            <strong>Reservoir (Name): </strong>
            <input class="form-control" name="estate_domestic_reservoir_name" placeholder="Enter the name of reservoir...">
        </div>

        <div class="form-group mb-3">
            <strong>Abstraction: </strong><br>
            {!! Form::radio('estate_domestic_reservoir_abstraction', 'yes') !!}
            {!! Form::label('estate_domestic_reservoir_abstraction', 'Yes') !!}<br>
            {!! Form::radio('estate_domestic_reservoir_abstraction', 'no') !!}
            {!! Form::label('estate_domestic_reservoir_abstraction', 'No') !!}
        </div>

        <div class="form-group mb-3">
            <strong>Use of Water : </strong>
            <textarea class="form-control" rows="2" name="estate_domestic_use_of_reservoir_water"
                placeholder="Use of water..."></textarea>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group mb-3">
            <strong>Natural Pond (Name): </strong>
            <input class="form-control" name="estate_domestic_natural_pond_name"
                placeholder="Enter the name of natural pond...">
        </div>

        <div class="form-group mb-3">
            <strong>Abstraction: </strong><br>
            {!! Form::radio('estate_domestic_natural_pond_abstraction', 'yes') !!}
            {!! Form::label('estate_domestic_natural_pond_abstraction', 'Yes') !!}<br>
            {!! Form::radio('estate_domestic_natural_pond_abstraction', 'no') !!}
            {!! Form::label('estate_domestic_natural_pond_abstraction', 'No') !!}
        </div>

        <div class="form-group mb-3">
            <strong>Use of Water : </strong>
            <textarea class="form-control" rows="2" name="estate_domestic_use_of_natural_pond_water"
                placeholder="Use of water..."></textarea>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group mb-3">
            <strong>Local Authority (Jabatan Air): </strong>
            <input class="form-control" name="estate_domestic_local_authority_name"
                placeholder="Enter the name of local authority...">
        </div>

        <div class="form-group mb-3">
            <strong>Abstraction: </strong><br>
            {!! Form::radio('estate_domestic_local_authority_abstraction', 'yes') !!}
            {!! Form::label('estate_domestic_local_authority_abstraction', 'Yes') !!}<br>
            {!! Form::radio('estate_domestic_local_authority_abstraction', 'no') !!}
            {!! Form::label('estate_domestic_local_authority_abstraction', 'No') !!}
        </div>

        <div class="form-group mb-3">
            <strong>Use of Water : </strong>
            <textarea class="form-control" rows="2" name="estate_domestic_use_of_local_authority_water"
                placeholder="Use of water..."></textarea>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="form-group mb-3">
            <strong>Rain Water Harvesting: </strong>
        </div>

        <div class="form-group mb-3">
            <strong>Abstraction: </strong><br>
            {!! Form::radio('estate_domestic_rain_water_harvesting_abstraction', 'yes') !!}
            {!! Form::label('estate_domestic_rain_water_harvesting_abstraction', 'Yes') !!}<br>
            {!! Form::radio('estate_domestic_rain_water_harvesting_abstraction', 'no') !!}
            {!! Form::label('estate_domestic_rain_water_harvesting_abstraction', 'No') !!}
        </div>

        <div class="form-group mb-3">
            <strong>Use of Water : </strong>
            <textarea class="form-control" rows="2" name="estate_domestic_use_of_harvesting_water"
                placeholder="Use of water..."></textarea>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Other (Specify if any): </strong>
                <input class="form-control" name="estate_domestic_other_name" placeholder="Enter the name of other source...">
            </div>

            <div class="form-group mb-3">
                <strong>Abstraction: </strong><br>
                {!! Form::radio('estate_domestic_other_abstraction', 'yes') !!}
                {!! Form::label('estate_domestic_other_abstraction', 'Yes') !!}<br>
                {!! Form::radio('estate_domestic_other_abstraction', 'no') !!}
                {!! Form::label('estate_domestic_other_abstraction', 'No') !!}
            </div>

            <div class="form-group mb-3">
                <strong>Use of Water : </strong>
                <textarea class="form-control" rows="2" name="estate_domestic_use_of_other_water"
                    placeholder="Use of water..."></textarea>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Water Consumption (Total Liter/Year)</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Housing: </strong>
                <input class="form-control" name="estate_domestic_housing_wc" type="number"
                    placeholder="Enter the water comsumption by housing..." required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Office Building: </strong>
                <input class="form-control" name="estate_domestic_office_building_wc" type="number"
                    placeholder="Enter the water comsumption by office building..." required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Other (Specify): </strong>
                <input class="form-control" name="estate_domestic_other_wc_name"
                        placeholder="Enter the name of other sources..."><br/>
                <input class="form-control" name="estate_domestic_other_wc" type="number"
                    placeholder="Enter the water comsumption by housing...">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Storage Tank Capacity</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Water Treatment Plant Storage Tank: </strong>
                <input class="form-control" name="estate_domestic_wtpst_stc" type="number"
                    placeholder="Enter the storage tank capacity of water treatment plant storage tank..." required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Housing: </strong>
                <input class="form-control" name="estate_domestic_housing_stc" type="number"
                    placeholder="Enter the storage tank capacity of housing..." required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Office: </strong>
                <input class="form-control" name="estate_domestic_office_stc" type="number"
                    placeholder="Enter the storage tank capacity of office..." required>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Total Flow Meter Installed</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Housing Area:</strong>
                <input class="form-control" name="estate_domestic_ha_fm" placeholder="0" type="number">
                <strong>Remark:</strong>
                <input class="form-control" name="estate_domestic_ha_remark" placeholder="other remark....">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Offiice Area:</strong>
                <input class="form-control" name="estate_domestic_oa_fm" placeholder="0" type="number">
                <strong>Remark:</strong>
                <input class="form-control" name="estate_domestic_oa_remark" placeholder="other remark....">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Other:</strong>
                <input class="form-control" name="estate_domestic_otr_fm" placeholder="0" type="number">
                <strong>Remark:</strong>
                <input class="form-control" name="estate_domestic_otr_remark" placeholder="other remark....">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Pumping/ Flow Rate</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>River to Reservoir (litre/hour):</strong>
                <input class="form-control" name="estate_domestic_rnr_pfr" placeholder="0">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Reservoir to Water Treatment Plant (litre/hour):</strong>
                <input class="form-control" name="estate_domestic_rwtp_pfr" placeholder="0">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <strong>Water Treatment Plant to Hosing& Office (litre/hour):</strong>
                <input class="form-control" name="estate_domestic_wtps_pfr" placeholder="0">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Water Treatment Plant</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group mb-3">
                <h4>pH Adjustment:</h4>
                <strong>Type of Chemical Used (If Any): </strong>
                <input class="form-control" name="estate_domestic_wtp_pha_chemi">
                <strong>Dosage: </strong>
                <input class="form-control" name="estate_domestic_wtp_pha_chemi_dosage">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group mb-3">
                <h4>Coagulant:</h4>
                <strong>Type of Chemical Used (If Any): </strong>
                <input class="form-control" name="estate_domestic_wtp_coagulant_chemi">
                <strong>Dosage: </strong>
                <input class="form-control" name="estate_domestic_wtp_coagulant_chemi_dosage">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group mb-3">
                <h4>Flocculent:</h4>
                <strong>Type of Chemical Used (If Any): </strong>
                <input class="form-control" name="estate_domestic_wtp_flocculent_chemi">
                <strong>Dosage: </strong>
                <input class="form-control" name="estate_domestic_wtp_flocculent_chemi_dosage">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group mb-3">
                <h4>Filter:</h4>
                <strong>Type of Chemical Used (If Any): </strong>
                <input class="form-control" name="estate_domestic_wtp_filter_chemi">
                <strong>Dosage: </strong>
                <input class="form-control" name="estate_domestic_wtp_filter_chemi_dosage">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group mb-3">
                <h4>Chlorine:</h4>
                <strong>Type of Chemical Used (If Any): </strong>
                <input class="form-control" name="estate_domestic_wtp_chlorine_chemi">
                <strong>Dosage: </strong>
                <input class="form-control" name="estate_domestic_wtp_chlorine_chemi_dosage">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group mb-3">
                <h4>Other (Specify):</h4>
                <strong>Type of Chemical Used (If Any): </strong>
                <input class="form-control" name="estate_domestic_wtp_other_chemi">
                <strong>Dosage: </strong>
                <input class="form-control" name="estate_domestic_wtp_other_chemi_dosage">
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
            <div class="form-group mb-3">
                <h3>Water Quality Monitoring:</h3>
                <h4>Before Treatment: </h4>
                <strong>River/ Reservoir/ Pond/ Groundwater</strong><br />
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label><strong>Parameter (NWQS) :</strong></label><br />
                    <input type="checkbox" id="estate_domestic_bf_ph" name="estate_domestic_bf_ph" value="ph">
                    <label for="ph">pH</label><br>
                    <input type="checkbox" id="estate_domestic_bf_do" name="estate_domestic_bf_do" value="do">
                    <label for="do">Dissolved Oxygen (DO)</label><br>
                    <input type="checkbox" id="estate_domestic_bf_bod" name="estate_domestic_bf_bod" value="bod">
                    <label for="bod">Biological Oxygen Demand (BOD)</label><br>
                    <input type="checkbox" id="estate_domestic_bf_cod" name="estate_domestic_bf_cod" value="cod">
                    <label for="cod">Chemical Oxygen Demand (COD)</label><br>
                    <input type="checkbox" id="estate_domestic_bf_tss" name="estate_domestic_bf_tss" value="tss">
                    <label for="tss">Total Suspended Solid (TSS)</label><br>
                    <input type="checkbox" id="estate_domestic_bf_an" name="estate_domestic_bf_an" value="an">
                    <label for="an">Ammoniacal Nitrogen (AN)</label><br>
                    <input type="checkbox" id="estate_domestic_bf_ong" name="estate_domestic_bf_ong" value="ong">
                    <label for="ong">Oil and Grease (O&G)</label><br>
                    <input type="checkbox" id="estate_domestic_bf_turbidity" name="estate_domestic_bf_turbidity" value="turbidity">
                    <label for="turbidity">Turbidity</label><br>

                    <br><label><strong>Other (specify): </strong></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="estate_domestic_bf_other_parameter_value">
                            </div>
                        </div>
                        <input type="text" class="form-control" name="estate_domestic_bf_other_parameter_name">
                    </div>
                    <br>
                    <strong>Quality Monitoring Frequency: </strong>
                    <textarea class="form-control" rows="2" name="estate_domestic_wqm_bf_qmf"
                        placeholder="Quality Monitoring Frequency..."></textarea><br>
                    <h4>After Treatment</h4>
                    <strong>Water Treatment Storage Tank/ Tap Water/ Rain Water</strong>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <label><strong>MOH Parameter (NSTWQ) :</strong></label><br />
                        <input type="checkbox" id="estate_domestic_af_tc" name="estate_domestic_af_tc" value="tc">
                        <label for="ph">Total Coliform</label><br>
                        <input type="checkbox" id="estate_domestic_af_ecoli" name="estate_domestic_af_ecoli" value="ecoli">
                        <label for="do">E.Coli</label><br>
                        <input type="checkbox" id="estate_domestic_af_turbidity" name="estate_domestic_af_turbidity" value="turbidity">
                        <label for="bod">Turbidity</label><br>
                        <input type="checkbox" id="estate_domestic_af_ph" name="estate_domestic_af_ph" value="ph">
                        <label for="cod">pH</label><br>
                        <input type="checkbox" id="estate_domestic_af_frc" name="estate_domestic_af_frc" value="frc">
                        <label for="tss">Free Residual Chlorine</label><br>
                        <input type="checkbox" id="estate_domestic_af_iron" name="estate_domestic_af_iron" value="iron">
                        <label for="an">Iron</label><br>
                        <input type="checkbox" id="estate_domestic_af_manganese" name="estate_domestic_af_manganese" value="manganese">
                        <label for="ong">Manganese</label><br>

                        <br><label><strong>Other (specify): </strong></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" name="estate_domestic_af_other_parameter_value">
                                </div>
                            </div>
                            <input type="text" class="form-control" name="estate_domestic_af_other_parameter_name">
                        </div>
                    <strong>Quality Monitoring Frequency: </strong>
                    <textarea class="form-control" rows="2" name="estate_domestic_wqm_af_qmf"
                        placeholder="Quality Monitoring Frequency..."></textarea>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Waste Water Monitoring</h3><br/>
        <h4>Sewage System</h4>
        <textarea class="form-control" rows="2" name="estate_domestic_wwm_ss" placeholder="Eg: Weekly house inspection,..."></textarea><br/>
        <h4>Drainage</h4>
        <textarea class="form-control" rows="2" name="estate_domestic_wwm_d" placeholder="Eg: Weekly house inspection,..."></textarea>
        <br>
        <hr>
        <br>
        <h3>Water Access To Local Community</h3>
        <strong>List of Satkeholder: </strong>
        <textarea class="form-control" rows="2" name="estate_domestic_watlc_list_stake" placeholder="List of stakeholder..."></textarea>
        <strong>Stakeholder Feedback (Regarding to Water Access): </strong>
        <textarea class="form-control" rows="2" name="estate_domestic_watlc_feedback_stake" placeholder="Feedback..."></textarea>
        <strong>Continual Improvement Plan (If Any): </strong>
        <textarea class="form-control" rows="2" name="estate_domestic_watlc_infoplan_stake" placeholder="Plan..."></textarea>
        <br>
        <hr>
        <br>
        <h3>Emergency Response Plan</h3>
        <strong>Drought Seasons Plan: </strong>
        <textarea class="form-control" rows="2" name="estate_domestic_erp_dsp" placeholder="Plan..."></textarea>
        <strong>Distruption of water supply from Jabatan Air: </strong>
        <textarea class="form-control" rows="2" name="estate_domestic_erp_dwsja" placeholder="..."></textarea>
        <br>
        <hr>
        <br>
        <h3>Awareness & Education</h3>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <table class="table table-bordered text-center" id="table_estate_ae">
                    <thead>
                        <tr>
                            <th>Name of Program</th>
                            <th>Availability of Program</th>
                            <th>Plan</th>
                            <th>Actual</th>
                            <th>PIC</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control" name="estate_domestic_ae_np[]"></td>
                            <td><select class="custom-select" name="estate_domestic_ae_aop[]">
                                    <option selected value="available">Available</option>
                                    <option value="notavailable">Not Available</option>
                                </select>
                            </td>
                            <td> <select class="custom-select" name="estate_domestic_ae_plan[]">
                                    <option selected>Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </td>
                            <td><select class="custom-select" name="estate_domestic_ae_actual[]">
                                <option selected>Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select></td>
                            <td><input class="form-control" name="estate_domestic_ae_pic[]"></td>
                            <td><button type="button" class="btn btn-danger"
                                    onclick="deleteAwarenessEducationRow(this)">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addNewAwarenessEducationRow()">Add New Row</button>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <h3>Maps (Include GPS Coordinate)</h3>
        <strong>Estate Area</strong>
        <input class="form-control" name="estate_domestic_map_estate_area"><br/>
        <strong>Office & Housing Area</strong>
        <input class="form-control" name="estate_domestic_map_oh_area"><br/>
        <strong>Water Sources</strong>
        <input class="form-control" name="estate_domestic_map_ws_area"><br/>
        <strong>Water Treatment Plant</strong>
        <input class="form-control" name="estate_domestic_map_wtp_area"><br/>
        <strong>Riparian Zone</strong>
        <input class="form-control" name="estate_domestic_map_rz_area"><br/>
        <strong>Stakeholder Settlement</strong>
        <input class="form-control" name="estate_domestic_map_ss_area"><br/>
        <strong>Topo Map</strong>
        <input type="file" class="form-control-file" name="estate_domestic_map_topo_map">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<script>
    function addNewWaterSourcesRow(){
        $('#table_estate_pnws tbody').append(`<tr>
                            <td><input class="form-control" name="estate_operation_pwns_location_riparian[]"></td>
                            <td><input class="form-control" name="estate_operation_pwns_riparian_reserve[]"></td>
                            <td><input class="form-control" name="estate_operation_pwns_mf[]"></td>
                            <td><input class="form-control" name="estate_operation_pwns_pic[]"></td>
                            <td><button type="button" class="btn btn-danger" onclick="deleteWaterSourcesRow(this)">Delete</button></td>
                        </tr>`);
    }
    function deleteWaterSourcesRow(el) {
        if ($("#table_estate_pnws tbody tr").length > 1) {
            $(el).closest("tr").remove()
        }
    }
</script>
<script>
    function addNewAwarenessEducationRow(){
        $('#table_estate_ae tbody').append(`<tr>
            <td><input class="form-control" name="estate_domestic_ae_np[]"></td>
                            <td><select class="custom-select" name="estate_domestic_ae_aop[]">
                                    <option selected value="available">Available</option>
                                    <option value="notavailable">Not Available</option>
                                </select>
                            </td>
                            <td> <select class="custom-select" name="estate_domestic_ae_plan[]">
                                    <option selected>Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </td>
                            <td><select class="custom-select" name="estate_domestic_ae_actual[]">
                                <option selected>Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select></td>
                            <td><input class="form-control" name="estate_domestic_ae_pic[]"></td>
                            <td><button type="button" class="btn btn-danger"
                                    onclick="deleteAwarenessEducationRow(this)">Delete</button></td>
                        </tr>`);
    }
    function deleteAwarenessEducationRow(el) {
        if ($("#table_estate_ae tbody tr").length > 1) {
            $(el).closest("tr").remove()
        }
    }
</script>
@endsection