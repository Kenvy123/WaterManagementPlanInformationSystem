<?php
    
namespace App\Http\Controllers;
    
use App\Models\EstateForm;
use App\Models\EstateOperationWSource;
use App\Models\EstateOperationWConsumption;
use App\Models\EstateOperationWMonitoring;
use App\Models\EstateOperationFlowMeter;
use App\Models\EstateOperationProtectionwns;
use App\Models\EstateOperationSoilMC;
use App\Models\EstateOperationObstructionRiver;
use App\Models\EstateDomesticWSource;
use App\Models\EstateDomesticWConsumptions;
use App\Models\EstateDomesticSTCapacity;
use App\Models\EstateDomesticFlowMeter;
use App\Models\EstateDomesticPFRate;
use App\Models\EstateDomesticWTPlant;
use App\Models\EstateDomesticWMonitoring;
use App\Models\EstateDomesticWasteWMonitoring;
use App\Models\EstateDomesticWATLCommunity;
use App\Models\EstateDomesticERPlan;
use App\Models\EstateDomesticAEducation;
use App\Models\EstateDomesticMap;
use App\Models\OperatingUnits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    
class EstateFormController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:estateform-list|estateform-create|estateform-edit|estateform-delete', ['only' => ['index','show']]);
         $this->middleware('permission:estateform-create', ['only' => ['create','store']]);
         $this->middleware('permission:estateform-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:estateform-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estateform = EstateForm::latest()->paginate(10);
        return view('estate_form.index',compact('estateform'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    
    public function create()
    {
        $form = EstateForm::all();
        $operatingUnits = OperatingUnits::all();
        return view('estate_form.create', ['form' => $form], ['operatingUnits' => $operatingUnits]);
    }
    
 
    public function store(Request $request)
    {
        $input = $request->all();
        $input['estate_form_id'] = 1;
        $this->validate($request, [
            'estate_form_year' => 'required',
            'estate_unit_name' => 'required',
            'estate_area_state' => 'required',
            'estate_land_title' => 'required',
            'estate_planting_profile' => 'required',
            'estate_soil_type' => 'required',
            'estate_staff_exe' => 'required',
            'estate_staff_exed' => 'required',
            'estate_workers' => 'required',
            'estate_worker_dep' => 'required',
            'estate_total_housing' => 'required',
            'estate_general_remark' => 'required',
            'Jan' => 'required',
            'Feb' => 'required',
            'Mar' => 'required',
            'Apr' => 'required',
            'May' => 'required',
            'Jun' => 'required',
            'Jul' => 'required',
            'Aug' => 'required',
            'Sep' => 'required',
            'Oct' => 'required',
            'Nov' => 'required',
            'Dec' => 'required',
            'estate_operation_river_water_name' => 'required',
            'estate_operation_river_water_abstraction' => 'required',
            'estate_operation_ground_water_name' => 'required',
            'estate_operation_ground_water_abstraction' => 'required',
            'estate_operation_reservoir_name' => 'required',
            'estate_operation_reservoir_abstraction' => 'required',
            'estate_operation_natural_pond_name' => 'required',
            'estate_operation_natural_pond_abstraction' => 'required',
            'estate_operation_local_authority_name' => 'required',
            'estate_operation_local_authority_abstraction' => 'required',
            'estate_operation_rain_water_harvesting_abstraction' => 'required',
            'estate_operation_workshop_wc' => 'required',
            'estate_operation_pre_mc_wc' => 'required',
            'estate_operation_trf_wc' => 'required',
            'estate_operation_nursery_wc' => 'required',
            'estate_operation_ls_wc' => 'required',
            'estate_operation_store_fm' => 'required',
            'estate_operation_ws_fm' => 'required',
            'estate_operation_pmarea_fm' => 'required',
            'estate_operation_tra_fm' => 'required',
            'estate_operation_nursery_fm' => 'required',
            'estate_operation_lb_fm' => 'required',
            'estate_operation_pwns_location_riparian' => 'required',
            'estate_operation_pwns_riparian_reserve' => 'required',            
            'estate_operation_pwns_pic' => 'required',
            'estate_operation_efb_application' => 'required',
            'estate_operation_efb_ta' => 'required',
            'estate_operation_dc_application' => 'required',
            'estate_operation_dc_ta' => 'required',
            'estate_operation_ba_application' => 'required',
            'estate_operation_ba_ta' => 'required',
            'estate_operation_shell_application' => 'required',
            'estate_operation_shell_ta' => 'required',
            'estate_operation_fiber_application' => 'required',
            'estate_operation_fiber_ta' => 'required',
            'estate_operation_sp_application' => 'required',
            'estate_operation_sp_ta' => 'required',
            'estate_operation_sdp_application' => 'required',
            'estate_operation_sdp_ta' => 'required',
            'estate_operation_fs_application' => 'required',
            'estate_operation_fs_ta' => 'required',
            'estate_operation_orw_bund_application' => 'required',
            'estate_operation_orw_bund_location' => 'required',
            'estate_operation_orw_weir_application' => 'required',
            'estate_operation_orw_weir_location' => 'required',
            'estate_operation_orw_dam_application' => 'required',
            'estate_operation_orw_dam_location' => 'required',
            'estate_domestic_river_water_name' => 'required',
            'estate_domestic_river_water_abstraction' => 'required',
            'estate_domestic_ground_water_name' => 'required',
            'estate_domestic_ground_water_abstraction' => 'required',
            'estate_domestic_reservoir_name' => 'required',
            'estate_domestic_reservoir_abstraction' => 'required',
            'estate_domestic_natural_pond_name' => 'required',
            'estate_domestic_natural_pond_abstraction' => 'required',
            'estate_domestic_local_authority_name' => 'required',
            'estate_domestic_local_authority_abstraction' => 'required',
            'estate_domestic_rain_water_harvesting_abstraction' => 'required',
            'estate_domestic_housing_wc' => 'required',
            'estate_domestic_office_building_wc' => 'required',
            'estate_domestic_wtpst_stc' => 'required',
            'estate_domestic_housing_stc' => 'required',
            'estate_domestic_office_stc' => 'required',
            'estate_domestic_ha_fm' => 'required',
            'estate_domestic_oa_fm' => 'required',
            'estate_domestic_rnr_pfr' => 'required',
            'estate_domestic_rwtp_pfr' => 'required',
            'estate_domestic_wtps_pfr' => 'required',
            'estate_domestic_wwm_ss' => 'required',
            'estate_domestic_wwm_d' => 'required',
            'estate_domestic_watlc_list_stake' => 'required',
            'estate_domestic_watlc_feedback_stake' => 'required',
            'estate_domestic_erp_dsp' => 'required',
            'estate_domestic_erp_dwsja' => 'required',
            'estate_domestic_ae_np' => 'required',
            'estate_domestic_ae_aop' => 'required',
            'estate_domestic_ae_plan' => 'required',
            'estate_domestic_ae_actual' => 'required',
            'estate_domestic_ae_pic' => 'required',
            'estate_domestic_map_estate_area' => 'required',
            'estate_domestic_map_oh_area' => 'required',
            'estate_domestic_map_ws_area' => 'required',
            'estate_domestic_map_wtp_area' => 'required',
            'estate_domestic_map_rz_area' => 'required',
            'estate_domestic_map_ss_area' => 'required', 
            'estate_domestic_map_topo_map' => 'required',
        ]);
        $input=$request->all();
        $estateform = EstateForm::create($request->all());
        $input['estate_form_id'] = $estateform->id;
        $estate_operation_ws = EstateOperationWSource::create($input);
        $estate_operation_wc = EstateOperationWConsumption::create($input);
        $estate_operation_fm = EstateOperationFlowMeter::create($input);
        $estate_operation_smc = EstateOperationSoilMC::create($input);
        $estate_operation_wm = EstateOperationWMonitoring::create($input);
        $estate_operation_or = EstateOperationObstructionRiver::create($input);

        $input['estate_operation_pwns_location_riparian'] = json_encode($input['estate_operation_pwns_location_riparian']);
        $input['estate_operation_pwns_riparian_reserve'] = json_encode($input['estate_operation_pwns_riparian_reserve']);
        $input['estate_operation_pwns_mf'] = json_encode($input['estate_operation_pwns_mf']);
        $input['estate_operation_pwns_pic'] = json_encode($input['estate_operation_pwns_pic']);

        $estate_operation_pwns = EstateOperationProtectionwns::create($input);
        $estate_domestic_ws = EstateDomesticWSource::create($input);
        $estate_domestic_wc = EstateDomesticWConsumptions::create($input);
        $estate_domestic_stc = EstateDomesticSTCapacity::create($input);
        $estate_domestic_fm = EstateDomesticFlowMeter::create($input);
        $estate_domestic_pfr = EstateDomesticPFRate::create($input);
        $estate_domestic_wtp = EstateDomesticWTPlant::create($input);
        $estate_domestic_wm = EstateDomesticWMonitoring::create($input);
        $estate_domestic_wwm = EstateDomesticWasteWMonitoring::create($input);
        $estate_domestic_watlc = EstateDomesticWATLCommunity::create($input);
        $estate_domestic_erp = EstateDomesticERPlan::create($input);
        
        $input['estate_domestic_ae_np'] = json_encode($input['estate_domestic_ae_np']);
        $input['estate_domestic_ae_aop'] = json_encode($input['estate_domestic_ae_aop']);
        $input['estate_domestic_ae_plan'] = json_encode($input['estate_domestic_ae_plan']);
        $input['estate_domestic_ae_actual'] = json_encode($input['estate_domestic_ae_actual']);
        $input['estate_domestic_ae_pic'] = json_encode($input['estate_domestic_ae_pic']);
        
        $estate_domestic_ae = EstateDomesticAEducation::create($input);
        $estate_domestic_map = EstateDomesticMap::create($input);
        return redirect()->route('estate_form.index')
                        ->with('success','form created successfully.');
    }
    

    public function show(EstateForm $estateform)
    {
        return view('estate_form.show',compact('estate_form'));
    }
    
   
    public function edit($id)
    {
        $estateform = EstateForm::find($id);
        $estate_operation_ws = EstateOperationWSource::firstWhere('estate_form_id', $id)->toArray();
        $estate_operation_wc = EstateOperationWConsumption::firstWhere('estate_form_id', $id)->toArray();
        $estate_operation_fm = EstateOperationFlowMeter::firstWhere('estate_form_id', $id)->toArray();
        $estate_operation_smc = EstateOperationSoilMC::firstWhere('estate_form_id', $id)->toArray();
        $estate_operation_wm = EstateOperationWMonitoring::firstWhere('estate_form_id', $id)->toArray();
        $estate_operation_or = EstateOperationObstructionRiver::firstWhere('estate_form_id', $id)->toArray();
        $estate_operation_pwns = EstateOperationProtectionwns::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_ws = EstateDomesticWSource::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_wc = EstateDomesticWConsumptions::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_stc = EstateDomesticSTCapacity::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_fm = EstateDomesticFlowMeter::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_pfr = EstateDomesticPFRate::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_wtp = EstateDomesticWTPlant::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_wm = EstateDomesticWMonitoring::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_wwm = EstateDomesticWasteWMonitoring::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_watlc = EstateDomesticWATLCommunity::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_erp = EstateDomesticERPlan::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_ae = EstateDomesticAEducation::firstWhere('estate_form_id', $id)->toArray();
        $estate_domestic_map = EstateDomesticMap::firstWhere('estate_form_id', $id)->toArray();
       
        return view('estate_form.edit',compact('estate_form'));
    }
    
    
    public function update(Request $request, $id)
    {
         request()->validate([
            'estate_form_year' => 'required',
            'estate_unit_name' => 'required',
            'estate_area_state' => 'required',
            'estate_land_title' => 'required',
            'estate_planting_profile' => 'required',
            'estate_soil_type' => 'required',
            'estate_staff_exe' => 'required',
            'estate_staff_exed' => 'required',
            'estate_workers' => 'required',
            'estate_worker_dep' => 'required',
            'estate_total_housing' => 'required',
            'estate_general_remark' => 'required',
            'Jan' => 'required',
            'Feb' => 'required',
            'Mar' => 'required',
            'Apr' => 'required',
            'May' => 'required',
            'Jun' => 'required',
            'Jul' => 'required',
            'Aug' => 'required',
            'Sep' => 'required',
            'Oct' => 'required',
            'Nov' => 'required',
            'Dec' => 'required',
            'estate_operation_river_water_name' => 'required',
            'estate_operation_river_water_abstraction' => 'required',
            'estate_operation_ground_water_name' => 'required',
            'estate_operation_ground_water_abstraction' => 'required',
            'estate_operation_reservoir_name' => 'required',
            'estate_operation_reservoir_abstraction' => 'required',
            'estate_operation_natural_pond_name' => 'required',
            'estate_operation_natural_pond_abstraction' => 'required',
            'estate_operation_local_authority_name' => 'required',
            'estate_operation_local_authority_abstraction' => 'required',
            'estate_operation_rain_water_harvesting_abstraction' => 'required',
            'estate_operation_workshop_wc' => 'required',
            'estate_operation_pre_mc_wc' => 'required',
            'estate_operation_trf_wc' => 'required',
            'estate_operation_nursery_wc' => 'required',
            'estate_operation_ls_wc' => 'required',
            'estate_operation_store_fm' => 'required',
            'estate_operation_ws_fm' => 'required',
            'estate_operation_pmarea_fm' => 'required',
            'estate_operation_tra_fm' => 'required',
            'estate_operation_nursery_fm' => 'required',
            'estate_operation_lb_fm' => 'required',
            'estate_operation_pwns_location_riparian' => 'required',
            'estate_operation_pwns_riparian_reserve' => 'required',            
            'estate_operation_pwns_pic' => 'required',
            'estate_operation_efb_application' => 'required',
            'estate_operation_efb_ta' => 'required',
            'estate_operation_dc_application' => 'required',
            'estate_operation_dc_ta' => 'required',
            'estate_operation_ba_application' => 'required',
            'estate_operation_ba_ta' => 'required',
            'estate_operation_shell_application' => 'required',
            'estate_operation_shell_ta' => 'required',
            'estate_operation_fiber_application' => 'required',
            'estate_operation_fiber_ta' => 'required',
            'estate_operation_sp_application' => 'required',
            'estate_operation_sp_ta' => 'required',
            'estate_operation_sdp_application' => 'required',
            'estate_operation_sdp_ta' => 'required',
            'estate_operation_fs_application' => 'required',
            'estate_operation_fs_ta' => 'required',
            'estate_operation_orw_bund_application' => 'required',
            'estate_operation_orw_bund_location' => 'required',
            'estate_operation_orw_weir_application' => 'required',
            'estate_operation_orw_weir_location' => 'required',
            'estate_operation_orw_dam_application' => 'required',
            'estate_operation_orw_dam_location' => 'required',
            'estate_domestic_river_water_name' => 'required',
            'estate_domestic_river_water_abstraction' => 'required',
            'estate_domestic_ground_water_name' => 'required',
            'estate_domestic_ground_water_abstraction' => 'required',
            'estate_domestic_reservoir_name' => 'required',
            'estate_domestic_reservoir_abstraction' => 'required',
            'estate_domestic_natural_pond_name' => 'required',
            'estate_domestic_natural_pond_abstraction' => 'required',
            'estate_domestic_local_authority_name' => 'required',
            'estate_domestic_local_authority_abstraction' => 'required',
            'estate_domestic_rain_water_harvesting_abstraction' => 'required',
            'estate_domestic_housing_wc' => 'required',
            'estate_domestic_office_building_wc' => 'required',
            'estate_domestic_wtpst_stc' => 'required',
            'estate_domestic_housing_stc' => 'required',
            'estate_domestic_office_stc' => 'required',
            'estate_domestic_ha_fm' => 'required',
            'estate_domestic_oa_fm' => 'required',
            'estate_domestic_rnr_pfr' => 'required',
            'estate_domestic_rwtp_pfr' => 'required',
            'estate_domestic_wtps_pfr' => 'required',
            'estate_domestic_wwm_ss' => 'required',
            'estate_domestic_wwm_d' => 'required',
            'estate_domestic_watlc_list_stake' => 'required',
            'estate_domestic_watlc_feedback_stake' => 'required',
            'estate_domestic_erp_dsp' => 'required',
            'estate_domestic_erp_dwsja' => 'required',
            'estate_domestic_ae_np' => 'required',
            'estate_domestic_ae_aop' => 'required',
            'estate_domestic_ae_plan' => 'required',
            'estate_domestic_ae_actual' => 'required',
            'estate_domestic_ae_pic' => 'required',
            'estate_domestic_map_estate_area' => 'required',
            'estate_domestic_map_oh_area' => 'required',
            'estate_domestic_map_ws_area' => 'required',
            'estate_domestic_map_wtp_area' => 'required',
            'estate_domestic_map_rz_area' => 'required',
            'estate_domestic_map_ss_area' => 'required', 
            'estate_domestic_map_topo_map' => 'required',
        ]);

        $input = $request->all();
    
        $estateform = EstateForm::find($id);
        $estateform->update($input);

    
        return redirect()->route('estate_form.index')
                        ->with('success','Form updated successfully');
    }
    
    public function destroy(EstateForm $estateform)
    {
        $estateform->delete();
    
        return redirect()->route('estate_form.index')
                        ->with('success','form deleted successfully');
    }
}