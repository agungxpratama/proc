@extends('base.layout')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{$nama_menu}}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-play"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">ON GOING</span>
            <span class="info-box-number">
              10
              <small>%</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-pause"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">ON HOLD</span>
            <span class="info-box-number">41,410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">COMPLETED</span>
            <span class="info-box-number">760</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">CANCELED</span>
            <span class="info-box-number">2,000</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                  <div class="col-md-8">
                      <p class="text-center">
                        <strong>Jenis Pengadaan</strong>
                        <br>pada hari ini
                      </p>
                      <div class="row">
                          <div class="col-md-6">
                              <p class="text-center">
                                <strong>Sinergi Pertamina</strong>
                                {{-- <br>pada hari ini --}}
                              </p>
                              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                          <div class="col-md-6">
                              <p class="text-center">
                                <strong>Reguler</strong>
                                {{-- <br>pada hari ini --}}
                              </p>
                              <canvas id="donutChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>

                  </div>
                  <div class="col-md-4">
                      <div class="row">
                          <div class="col-12">
                              <div class="description-block border-bottom pb-3">
                                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                  <h5 class="description-header">$35,210.43</h5>
                                  <span class="description-text">JUMLAH PERMINTAAN PENGADAAN</span>
                              </div>
                              <!-- /.description-block -->
                          </div>
                          <div class="col-12">
                            <div class="description-block border-bottom pb-3">
                              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                              <h5 class="description-header">$10,390.90</h5>
                              <span class="description-text">NILAI KONTRAK TERTINGGI</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <div class="col-12">
                            <div class="description-block border-bottom pb-3">
                              <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                              <h5 class="description-header">$24,813.53</h5>
                              <span class="description-text">NILAI KONTRAK TERENDAH</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <div class="col-12">
                            <div class="description-block border-bottom pb-3">
                              <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                              <h5 class="description-header">$10,390.90</h5>
                              <span class="description-text">PROC. PROCCESS TIME ACC (%)</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <div class="col-12">
                            <div class="description-block pb-3">
                              <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                              <h5 class="description-header">1200</h5>
                              <span class="description-text">KOMITMEN TKD (%)</span>
                            </div>
                            <!-- /.description-block -->
                          </div>

                      </div>
                  </div>
              </div>
            {{-- <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p>

                <div class="progress-group">
                  Add Products to Cart
                  <span class="float-right"><b>160</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  Complete Purchase
                  <span class="float-right"><b>310</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Visit Premium Page</span>
                  <span class="float-right"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  Send Inquiries
                  <span class="float-right"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div> --}}
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          {{-- <div class="card-footer">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">$35,210.43</h5>
                  <span class="description-text">TOTAL REVENUE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">$10,390.90</h5>
                  <span class="description-text">TOTAL COST</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">$24,813.53</h5>
                  <span class="description-text">TOTAL PROFIT</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 col-6">
                <div class="description-block">
                  <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                  <h5 class="description-header">1200</h5>
                  <span class="description-text">GOAL COMPLETIONS</span>
                </div>
                <!-- /.description-block -->
              </div>
            </div>
            <!-- /.row -->
          </div> --}}
          <!-- /.card-footer -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">SLA Achievment</h5>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            {{-- <i class="fas fa-minus"></i> --}}
                            VIew Details
                          </button>
                          {{-- <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                              <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item">Another action</a>
                              <a href="#" class="dropdown-item">Something else here</a>
                              <a class="dropdown-divider"></a>
                              <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                          </div> --}}
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td class="text-bold">Sinergi</td>
                                <td>12312</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Sinergi</td>
                                <td>12312</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Log Activity</h5>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            {{-- <i class="fas fa-minus"></i> --}}
                            VIew Details
                          </button>
                          {{-- <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                              <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item">Another action</a>
                              <a href="#" class="dropdown-item">Something else here</a>
                              <a class="dropdown-divider"></a>
                              <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                          </div> --}}
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Aktivitas</th>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                </td>
                                <td class="text-bold">Sinergi</td>
                                <td>12312</td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                </td>
                                <td class="text-bold">Sinergi</td>
                                <td>12312</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Realisasi Cost Saving</h5>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            {{-- <i class="fas fa-minus"></i> --}}
                            VIew Details
                          </button>
                          {{-- <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                              <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item">Another action</a>
                              <a href="#" class="dropdown-item">Something else here</a>
                              <a class="dropdown-divider"></a>
                              <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                          </div> --}}
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td class="text-bold">Pengadaan</td>
                                <td>12312</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Sinergi</td>
                                <td>12312</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Status Kontrak</h5>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            {{-- <i class="fas fa-minus"></i> --}}
                            VIew Details
                          </button>
                          {{-- <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                              <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                              <a href="#" class="dropdown-item">Action</a>
                              <a href="#" class="dropdown-item">Another action</a>
                              <a href="#" class="dropdown-item">Something else here</a>
                              <a class="dropdown-divider"></a>
                              <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                          </div> --}}
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th colspan="2">Daftar Kontrak</th>
                                <th>Aktivitas</th>
                            </tr>
                            <tr>
                                <td class="text-bold"><i class="fas fa-check-circle text-success"></i></td>
                                <td class="text-bold">Sinergi</td>
                                <td>
                                    <div class="badge badge-success">
                                        ON GOING
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><i class="fas fa-check-circle text-secondary  "></i></td>
                                <td class="text-bold">Sinergi</td>
                                <td>
                                    <div class="badge badge-warning">
                                        ON HOLD
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- /.row -->
  </div><!--/. container-fluid -->
</section>
<!-- /.content -->

@endsection
