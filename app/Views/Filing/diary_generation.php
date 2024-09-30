<?= $this->extend('header') ?>
<?= $this->section('content') ?>
<style>
    .custom-radio{float: left; display: inline-block; margin-left: 10px; }
    .custom_action_menu{float: left; display: inline-block; margin-left: 10px; }
    .basic_heading{text-align: center;color: #31B0D5}
    .btn-sm {
        padding: 0px 8px;
        font-size: 14px;
    }
    .card-header {
        padding: 5px;
    }
    h4 {
        line-height: 0px;
    }
</style>

    <!--<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Filing</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>-->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header heading">

                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="card-title">Filing</h3>
                                </div>

                                <div class="col-sm-2">
                                    <div class="custom_action_menu">
                                        <button class="btn btn-success btn-sm" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                        <button class="btn btn-primary btn-sm" type="button"><i class="fas fa-pen	" aria-hidden="true"></i></button>
                                        <button class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                       <!-- <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <div class="custom_action_menu">
                                    <button class="btn btn-success btn-sm" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                    <button class="btn btn-primary btn-sm" type="button"><i class="fas fa-pen	" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-2" style="background-color: #fff;">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#diary_generation_tab_panel" data-toggle="tab">Basic Details</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#petitioner_tab_panel" data-toggle="tab">Petitioner</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#respondent_tab_panel" data-toggle="tab">Respondent</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">

                                            <div class="active tab-pane" id="diary_generation_tab_panel">
                                                <h4 class="basic_heading"> Basic Details </h4>
                                                <?php
                                                $attribute = array('class' => 'form-horizontal', 'name' => 'subordinate_court_details', 'id' => 'subordinate_court_details', 'autocomplete' => 'off');
                                                echo form_open('#', $attribute);

                                                ?>

                                                <div class="form-group row ">
                                                    <div class="col-sm-2"></div>
                                                    <label for="inputEmail3" class="col-sm-1 col-form-label"> Select Court <span style="color: red">*</span> :</label>
                                                    <div class="col-sm-9">
                                                        <?php
                                                        $party_details = array();
                                                        $caseData = array();
                                                        $subordinate_court_details = array();
                                                        $noHcEntry = '';
                                                        $noHCButton = '';
                                                        $scchecked = '';
                                                        $hcchecked = 'checked="checked"';
                                                        $dcchecked = '';
                                                        $ochecked = '';
                                                        $sachecked = '';


                                                        $court_type = !empty($caseData['court_type']) ? $caseData['court_type'] : NULL;
                                                        $state_id = !empty($caseData['state_id']) ? $caseData['state_id'] : NULL;
                                                        $district_id = !empty($caseData['district_id']) ? $caseData['district_id'] : NULL;
                                                        $estab_code = !empty($caseData['estab_code']) ? $caseData['estab_code'] : NULL;
                                                        $estab_id = !empty($caseData['estab_id']) ? $caseData['estab_id'] : NULL;

                                                        //echo '<pre>'; print_r($caseData['court_type']); exit;
                                                        ?>

                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="radio_selected_court1" name="radio_selected_court" onchange="get_court_as(this.value)" value="4" maxlength="2" <?php echo $scchecked; ?>>
                                                            <label for="radio_selected_court1" class="custom-control-label">Supreme Court</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="radio_selected_court2" name="radio_selected_court" onchange="get_court_as(this.value)" value="1" maxlength="2" <?php echo $hcchecked; ?>>
                                                            <label for="radio_selected_court2" class="custom-control-label">High Court</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="radio_selected_court3" name="radio_selected_court" onchange="get_court_as(this.value)" value="3" maxlength="2" <?php echo $dcchecked; ?>>
                                                            <label for="radio_selected_court3" class="custom-control-label">District Court</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="radio_selected_court4" name="radio_selected_court" onchange="get_court_as(this.value)" value="2" maxlength="2" <?php echo $ochecked; ?>>
                                                            <label for="radio_selected_court4" class="custom-control-label">Other Court</label>
                                                        </div>

                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="radio_selected_court5" name="radio_selected_court" onchange="get_court_as(this.value)" value="5" maxlength="2" <?php echo $sachecked; ?>>
                                                            <label for="radio_selected_court5" class="custom-control-label">State Agency/Tribunal</label>
                                                        </div>


                                                    </div>
                                                </div>

                                                <!--<div class="row ">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8">
                                                        <label>CNR No</label>
                                                        <input type="text" class="form-control" id="cnr" name="cnr" maxlength="16" pattern="^[A-Z]{4}[0-9]{12}$" placeholder="Enter CNR">
                                                        OR
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>-->

                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >State</label>
                                                            <select name="state" class="custom-select rounded-0">
                                                                <option>A</option>
                                                                <option>B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Bench</label>
                                                            <select name="bench" class="custom-select rounded-0">
                                                                <option>A</option>
                                                                <option>B</option>
                                                            </select>
                                                            <!-- <input type="text" class="form-control" id="Court" placeholder="Enter Court"> -->
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Case Type</label>
                                                            <select name="case_type" class="custom-select rounded-0">
                                                                <option>A</option>
                                                                <option>B</option>
                                                            </select>

                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label >Section</label>
                                                            <select name="section" class="custom-select rounded-0">
                                                                <option>A</option>
                                                                <option>B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label >Special Type</label>
                                                            <select name="special_type" class="custom-select rounded-0">
                                                                <option>A</option>
                                                                <option>B</option>
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Extream Priority Category</label>
                                                            <select name="special_type" class="custom-select rounded-0">
                                                                <option>A</option>
                                                                <option>B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label >Total No. of Pages in File</label>
                                                            <input type="text" class="form-control" id="total_pages" placeholder="Enter Court">
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-2">
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label >IF SCLSC</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="if_sclsc" id="if_sclsc">
                                                            </div>
                                                            <div id="sclc_info" style="display:none">
                                                                <input type="text" class="form-control" id="sclc_no" placeholder="Enter Court" style="width:50%">
                                                                <input type="text" class="form-control" id="sclc_year" placeholder="Enter Court" style="width:50%">
                                                            </div>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <!-- <div class="col-md-2">
                                                          <div class="form-group">
                                                            <label >Is Efiling</label>
                                                            <div class="icheck-primary d-inline">
                                                              <input type="checkbox" name="if_filing" id="if_filing">
                                                            </div>
                                                            <div id="filing_info" style="display:none">
                                                              <input type="text" class="form-control" id="filing_no" placeholder="Enter Court" style="width:50%">
                                                              <input type="text" class="form-control" id="filing_year" placeholder="Enter Court" style="width:50%">
                                                            </div>
                                                          </div>
                                                        </div> -->
                                                    <!-- /.col -->
                                                </div>

                                                <h4 class="basic_heading"> Advocate Details </h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Main Pet. Adv.</label>
                                                        <select name="special_type" class="custom-select rounded-0">
                                                            <option>A</option>
                                                            <option>B</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">

                                                        <div class="form-group">
                                                            <label >Is Amicus Curiae:</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="Amicus" id="Amicus">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <label> Enrol State:</label>
                                                        <select name="special_type" class="custom-select rounded-0">
                                                            <option>A</option>
                                                            <option>B</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>AOR code/Name:/Enrol No.(Non-AOR)</label>
                                                        <input type="text" class="form-control" id="petitioner_city" placeholder="Enter City">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Year</label>
                                                        <input type="text" class="form-control" id="petitioner_pin" placeholder="Enter Pin">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" id="petitioner_pin" placeholder="Enter Pin">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Mob</label>
                                                        <input type="text" class="form-control" id="petitioner_pin" placeholder="Enter Pin">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email Id:</label>
                                                        <input type="text" class="form-control" id="petitioner_pin" placeholder="Enter Pin">
                                                    </div>
                                                </div>
                                                <!-- /.row -->

                                            </div>
                                            <!-- /.diary_generation_tab_panel -->







                                            <div class="tab-pane" id="petitioner_tab_panel">
                                                <h4 class="basic_heading"> Petitioner Information</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Party Type</label>
                                                        <select id="petitioner_department" name="petitioner_department" class="custom-select rounded-0">
                                                            <option value="I">Individual</option>
                                                            <option value="D1">State Department</option>
                                                            <option value="D2">Central Department</option>
                                                            <option value="D3">Other Organization</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row" id="petitioner_individual">

                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Relation</label>
                                                        <select id="petitioner_relation" name="petitioner_relation" class="custom-select rounded-0">
                                                            <option value="">Select</option>
                                                            <option value="S">Son of</option>
                                                            <option value="D">Daughter of</option>
                                                            <option value="W">Wife of</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Father/Husband</label>
                                                        <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Father/Husband">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Gender</label>
                                                        <select id="petitioner_gender" name="petitioner_gender" class="custom-select rounded-0">
                                                            <option value="">Select</option>
                                                            <option value="N">N.A.</option>
                                                            <option value="M">Male</option>
                                                            <option value="F">Female</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" id="petitioner_age" placeholder="Enter Age">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Occupation/Department</label>
                                                        <input type="text" class="form-control" id="petitioner_occupation" placeholder="Enter Occupation/Department">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div id="petitioner_state_central" style="display:none">
                                                        <div class="col-md-4">
                                                            <label>State</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="petitioner_causetitle1" id="petitioner_causetitle1" checked>
                                                            </div>
                                                            <input type="text" class="form-control" id="petitioner_state_name" placeholder="Enter State">
                                                        </div>
                                                    </div>
                                                    <div id="petitioner_post" style="display:none">
                                                        <div class="col-md-4">
                                                            <label>Department</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="petitioner_causetitle2" id="petitioner_causetitle2" checked>
                                                            </div>
                                                            <input type="text" class="form-control" id="petitioner_department" placeholder="Enter Department">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Post</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="petitioner_causetitle3" id="petitioner_causetitle3">
                                                            </div>
                                                            <input type="text" class="form-control" id="petitioner_post" placeholder="Enter Post">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control" id="petitioner_address" placeholder="Enter Address">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Tehsil/City</label>
                                                            <input type="text" class="form-control" id="petitioner_city" placeholder="Enter City">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Pin</label>
                                                            <input type="text" class="form-control" id="petitioner_pin" placeholder="Enter Pin">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Country: </label>
                                                            <select id="petitioner_country" name="petitioner_country" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>State: </label>
                                                            <select id="petitioner_state" name="petitioner_state" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>District: </label>
                                                            <select id="petitioner_district" name="petitioner_district" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Email Id: </label>
                                                            <input type="text" class="form-control" id="petitioner_email" placeholder="Enter Email Id">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Total Petitioner(s): </label>
                                                            <input type="text" class="form-control" id="petitioner_total" placeholder="Enter Total Petitioner(s)">
                                                        </div>
                                                    </div>

                                                    <!-- <input type="hidden" name="petitoner_add_address" id="petitoner_add_address" value="0"/>
                                                    <div id="pettioner_add_parties" class="row">

                                                    </div>

                                                    <button id="add_address_pet"  class="btn btn-success btn-sm" type="button">Add Address <i class="fa fa-plus-circle" aria-hidden="true"></i></button> -->
                                                </div>

                                                <!--extra address Petitioner-->
                                                <div class="multi-field-wrapper">
                                                    <div class="multi-fields">
                                                        <div class="multi-field">
                                                            <button type="button" class="remove_out_row  d-none btn btn-danger btn-outline-danger" value="1">out-Removed</button>
                                                            <span class="add-field btn btn-outline-success float-sm-right mt-4"><i class='fas fa-plus-circle'></i></span>
                                                            <button type="button" class="remove_in_row remove-field d-none btn btn-outline-danger mt-4 float-sm-right" value="1"><i class='fas fa-minus-circle'></i></button>
                                               <div class="row">
                                                       <div class="col-md-3">
                                                           <label>Address : </label>
                                                           <textarea class="form-control" rows="1" placeholder="Enter Address"></textarea>
                                                       </div>
                                                        <div class="col-md-3">
                                                            <label>Country : </label>
                                                            <select id="petitioner_country" name="petitioner_country" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>State: </label>
                                                            <select id="petitioner_state" name="petitioner_state" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>District: </label>
                                                            <select id="petitioner_district" name="petitioner_district" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>


                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end extra Address Petitioner-->

                                            </div>
                                            <!-- /.petitioner_tab_panel -->








                                            <div class="tab-pane" id="respondent_tab_panel">
                                                <h4 class="basic_heading"> Respondent Information </h4>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Party Type</label>
                                                        <select id="respondent_department" name="respondent_department" class="custom-select rounded-0">
                                                            <option value="I">Individual</option>
                                                            <option value="D1">State Department</option>
                                                            <option value="D2">Central Department</option>
                                                            <option value="D3">Other Organization</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row" id="respondent_individual">

                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" id="respondent_name" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Relation</label>
                                                        <select id="respondent_relation" name="respondent_relation" class="custom-select rounded-0">
                                                            <option value="">Select</option>
                                                            <option value="S">Son of</option>
                                                            <option value="D">Daughter of</option>
                                                            <option value="W">Wife of</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Father/Husband</label>
                                                        <input type="text" class="form-control" id="respondent_fathername" placeholder="Enter Name of Father/Husband">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Gender</label>
                                                        <select id="petitioner_gender" name="respondent_gender" class="custom-select rounded-0">
                                                            <option value="">Select</option>
                                                            <option value="N">N.A.</option>
                                                            <option value="M">Male</option>
                                                            <option value="F">Female</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" id="respondent_age" placeholder="Enter Age">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Occupation/Department</label>
                                                        <input type="text" class="form-control" id="respondent_occupation" placeholder="Enter Occupation/Department">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div id="respondent_state_central" style="display:none">
                                                        <div class="col-md-4">
                                                            <label>State</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="respondent_causetitle1" id="respondent_causetitle1" checked>
                                                            </div>
                                                            <input type="text" class="form-control" id="respondent_state_name" placeholder="Enter State">
                                                        </div>
                                                    </div>
                                                    <div id="respondent_post" style="display:none">
                                                        <div class="col-md-4">
                                                            <label>Department</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="respondent_causetitle2" id="respondent_causetitle2" checked>
                                                            </div>
                                                            <input type="text" class="form-control" id="respondent_department" placeholder="Enter Department">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Post</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" name="respondent_causetitle3" id="respondent_causetitle3">
                                                            </div>
                                                            <input type="text" class="form-control" id="respondent_post" placeholder="Enter Post">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control" id="respondent_address" placeholder="Enter Address">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Tehsil/City</label>
                                                            <input type="text" class="form-control" id="respondent_city" placeholder="Enter Tehsil/City">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Pin</label>
                                                            <input type="text" class="form-control" id="respondent_pin" placeholder="Enter Pin">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Country: </label>
                                                            <select id="respondent_country" name="respondent_country" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>State: </label>
                                                            <select id="respondent_state" name="respondent_state" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>District: </label>
                                                            <select id="respondent_district" name="respondent_district" class="custom-select rounded-0">
                                                                <option value="I">Individual</option>
                                                                <option value="D1">State Department</option>
                                                                <option value="D2">Central Department</option>
                                                                <option value="D3">Other Organization</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Email Id: </label>
                                                            <input type="text" class="form-control" id="respondent_email" placeholder="Enter Email Id">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Total Respondents(s): </label>
                                                            <input type="number" class="form-control" id="respondent_total" placeholder="Enter Total Respondents">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--extra address respondend-->
                                                <div class="multi-field-wrapper">
                                                    <div class="multi-fields">
                                                        <div class="multi-field">
                                                            <button type="button" class="remove_out_row_heading  d-none btn btn-danger btn-outline-danger" value="1">out-Removed</button>
                                                            <span class="add-field_heading btn btn-outline-success float-sm-right mt-4"><i class='fas fa-plus-circle'></i></span>
                                                            <button type="button" class="remove_in_row_heading remove-field_heading d-none btn btn-outline-danger mt-4 float-sm-right" value="1"><i class='fas fa-minus-circle'></i></button>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label>Address : </label>
                                                                    <textarea class="form-control" rows="1" placeholder="Enter Address"></textarea>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Country : </label>
                                                                    <select id="petitioner_country" name="petitioner_country" class="custom-select rounded-0">
                                                                        <option value="I">Individual</option>
                                                                        <option value="D1">State Department</option>
                                                                        <option value="D2">Central Department</option>
                                                                        <option value="D3">Other Organization</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>State: </label>
                                                                    <select id="petitioner_state" name="petitioner_state" class="custom-select rounded-0">
                                                                        <option value="I">Individual</option>
                                                                        <option value="D1">State Department</option>
                                                                        <option value="D2">Central Department</option>
                                                                        <option value="D3">Other Organization</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>District: </label>
                                                                    <select id="petitioner_district" name="petitioner_district" class="custom-select rounded-0">
                                                                        <option value="I">Individual</option>
                                                                        <option value="D1">State Department</option>
                                                                        <option value="D2">Central Department</option>
                                                                        <option value="D3">Other Organization</option>
                                                                    </select>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end extra Address respondent-->

                                            </div>
                                            <!-- /.respondent_tab_panel -->




                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        $('.remove_in_row').click(function() {
            var v = $(this).val();
            $('.delete_out_row_'+v).click();
        });

        $('.multi-field-wrapper').each(function() {
            var $wrapper = $('.multi-fields', this);
            $(".add-field", $(this)).click(function(e) {
                var length_row=$('.multi-field', $wrapper).length;
                var delete_out_row='delete_out_row_'+length_row;
                var delete_in_row='delete_in_row_'+length_row;
                $(".remove_out_row:first").val(length_row);
                $(".remove_in_row:first").val(length_row);

                $(".remove_out_row:first").addClass(delete_out_row);
                $(".remove_in_row:first").addClass(delete_in_row);
                $(".add-field:first").addClass("d-none");
                $(".remove-field:first").removeClass("d-none");

                $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('');
                $(".remove_out_row:first").removeClass(delete_out_row);
                $(".remove_in_row:first").removeClass(delete_in_row);

                $(".add-field:first").removeClass("d-none");
                $(".remove-field").removeClass("d-none");
                $(".remove-field:first").addClass("d-none");
            });

            $('.multi-field .remove_out_row', $wrapper).click(function() {
                var length_row=$('.multi-field', $wrapper).length;
                // alert('length_row='+length_row);
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });
        });

    </script>

    <script>
        $('.remove_in_row_heading').click(function() {
            var v = $(this).val();
            $('.delete_out_row_heading'+v).click();
        });

        $('.multi-field-wrapper').each(function() {
            var $wrapper = $('.multi-fields', this);
            $(".add-field_heading", $(this)).click(function(e) {
                var length_row=$('.multi-field', $wrapper).length;
                var delete_out_row='delete_out_row_heading'+length_row;
                var delete_in_row='delete_in_row_heading'+length_row;
                $(".remove_out_row_heading:first").val(length_row);
                $(".remove_in_row_heading:first").val(length_row);

                $(".remove_out_row_heading:first").addClass(delete_out_row);
                $(".remove_in_row_heading:first").addClass(delete_in_row);
                $(".add-field_heading:first").addClass("d-none");
                $(".remove-field_heading:first").removeClass("d-none");

                $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('');
                $(".remove_out_row_heading:first").removeClass(delete_out_row);
                $(".remove_in_row_heading:first").removeClass(delete_in_row);

                $(".add-field_heading:first").removeClass("d-none");
                $(".remove-field_heading").removeClass("d-none");
                $(".remove-field_heading:first").addClass("d-none");
            });

            $('.multi-field .remove_out_row_heading', $wrapper).click(function() {
                var length_row=$('.multi-field', $wrapper).length;
                // alert('length_row='+length_row);
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.multi-field').remove();
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#if_sclsc', function() {
                if ($(this).is(':checked')) {
                    $('#sclc_info').css('display', 'inline-flex');
                } else {
                    $('#sclc_info').css('display', 'none');
                }
                $('#sclc_no').val('');
                $('#sclc_year').val('');
            });
            $(document).on('click', '#if_filing', function() {
                if ($(this).is(':checked')) {
                    $('#filing_info').css('display', 'inline-flex');
                } else {
                    $('#filing_info').css('display', 'none');
                }
                $('#filing_no').val('');
                $('#filing_year').val('');
            });
            $(document).on('change', '#petitioner_department,#respondent_department', function() {
                var type_name = $(this).attr('id');
                var type = type_name.split("_");
                var type_code = type[0];

                var department = $('#' + type_name).val();

                if (department == "I") {
                    $('#' + type_code + '_state_central').css('display', 'none');
                    $('#' + type_code + '_individual').css('display', 'flex');
                    $('#' + type_code + '_post').css('display', 'none');
                } else if (department == "D3") {
                    $('#' + type_code + '_state_central').css('display', 'none');
                    $('#' + type_code + '_post').css('display', 'contents');
                    $('#' + type_code + '_individual').css('display', 'none');
                } else {
                    $('#' + type_code + '_state_central').css('display', 'contents');
                    $('#' + type_code + '_post').css('display', 'contents');
                    $('#' + type_code + '_individual').css('display', 'none');
                }
            });

            $(document).on('click', '#add_address_pet,#add_address_res', function() {
                var petitoner_add_address = $('#petitoner_add_address').val();
                alert(petitoner_add_address);
                myhtml = '<div class="row"><div class="col-md-4"><label>Address: </label><input type="text" class="form-control" id="petitioner_name_' + petitoner_add_address + '" placeholder="Enter Name"></div>';
                myhtml = '<div class="col-md-4"><label>Country: </label><select id="petitioner_department_' + petitoner_add_address + '" name="petitioner_department_' + petitoner_add_address + '" class="custom-select rounded-0"><option value="I">Individual</option><option value="D1">State Department</option></select></div>';
                myhtml += '</div>';
                alert(myhtml);
                $('#pettioner_add_parties').append(myhtml);


            });
        });
    </script>
<?= $this->endSection() ?>