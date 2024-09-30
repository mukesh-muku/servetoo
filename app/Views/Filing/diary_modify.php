<?= $this->extend('Filing/layout') ?>
<?= $this->section('content') ?>


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Filing</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Filing</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header heading">
            <?php //print_r($_SESSION);
            ?>
            <h3 class="card-title">Filing</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row ml-4">
              <div class="col-1"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
              <div class="col-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
              <div class="col-1"><i class="fa fa-trash" aria-hidden="true"></i></div>
              <div class="col-9"></div>
            </div>
            <div class="row">
              <br>
              <ul class="nav-breadcrumb">
                <li>
                  <a href="" class="first active" style="z-index:15;"><span style="background-color: #01ADEF">1</span> Diary Details </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:14"><span style="background-color: #C11900;color:#ffffff;">2</span> Earlier Courts </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:13"><span style="background-color: #C11900;color:#ffffff;">3</span>Parties </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:12;"><span style="background-color: #f0ad4e;color:#ffffff;">4</span> Advocates </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:11;"><span style="background-color: #f0ad4e;color:#ffffff;">5</span> Category </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:10;"><span style="background-color: #f0ad4e;color:#ffffff;">6</span> Limitation </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:9;"><span style="background-color: #C11900;color:#ffffff;">7</span> Defect </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:8;"><span style="background-color: #C11900;color:#ffffff;">8</span> Refiling </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:7;"><span style="background-color: #C11900;color:#ffffff;">9</span> IA/Documents </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:6;"><span style="background-color: #C11900;color:#ffffff;">10</span> Coram </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:5;"><span style="background-color: #C11900;color:#ffffff;">11</span> Tapying </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:4;"><span style="background-color: #f0ad4e;color:#ffffff;">12</span> Registration </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:3;"><span style="background-color: #C11900;color:#ffffff;">13</span> Verification </a>
                </li>
                <li>
                  <a href="" class="" style="z-index:1;"><span style="background-color: #C11900;color:#ffffff">14</span> View </a>
                </li>
              </ul>
            </div>

            <div class="card card-default addbox">
              <div class="card-header">
                <h3 class="card-title">Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body container">
                <div class="row ">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Court</label>
                      <select name="court" class="custom-select rounded-0">
                        <option value="1">Supreme Court</option>
                        <option value="2" selected>High Court</option>
                        <option value="3">District Court</option>
                        <option value="4">State Agency</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">State</label>
                      <select name="state" class="custom-select rounded-0">
                        <option>A</option>
                        <option>B</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bench</label>
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
                      <label for="exampleInputEmail1">Case Type</label>
                      <select name="case_type" class="custom-select rounded-0">
                        <option>A</option>
                        <option>B</option>
                      </select>

                    </div>
                    <!-- /.form-group -->
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Section</label>
                      <select name="section" class="custom-select rounded-0">
                        <option>A</option>
                        <option>B</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Special Type</label>
                      <select name="special_type" class="custom-select rounded-0">
                        <option>A</option>
                        <option>B</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-2">
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Total No. of Pages in File</label>
                      <input type="text" class="form-control" id="total_pages" placeholder="Enter Court">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-2">
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">IF SLSC</label>
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
                      <label for="exampleInputEmail1">Is Efiling</label>
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

                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-default addbox">
              <div class="card-header">
                <h3 class="card-title">Petitioner Individual / Dept.:  </h3>
                <select id="petitioner_department" name="petitioner_department" onchange="activate_main(this.id)" class="custom-select rounded-0" style="width:20%">
                        <option value="I">Individual</option>
                        <option value="D1">State Department</option>
                        <option value="D2">Central Department</option>
                        <option value="D3">Other Organization</option>
                    </select>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                      <label>Name</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Father/Husband</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Gender</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Age</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Occupation/Department</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Address</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Tehsil/City</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Pin</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Phone/Mobile:	</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Email Id:	</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4">
                      <label>Total Pet(s):	</label>
                      <input type="text" class="form-control" id="petitioner_name" placeholder="Enter Name">
                    </div>
                </div>
              </div>
            </div>


          </div>
          <!-- /.card-body -->
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
  });
</script>
<?= $this->endSection() ?>