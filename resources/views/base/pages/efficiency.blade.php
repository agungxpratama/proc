@extends('base.layout')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Material</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Material</li>
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
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
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
          <!-- /.card-header -->
          <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No.</th>
                        <th>Bulan</th>
                        <th>Jumlah Dokumen</th>
                        <th>Total Nilai SP/PO</th>
                        <th>Total Estimasi
                            Alokasi Anggaran (Rp)
                        </th>
                        <th>Total Estimasi</th>
                        <th>∆ (Delta)
                            ( 5 - 4 )/Rp
                        </th>
                        <th>Hasil Nego
                            ( 6 - 4 )/Rp
                        </th>
                        <th>∆ (Delta)
                            ( 6 - 4 )/%
                        </th>
                      </tr>
                      </thead>
                      <tbody>
                          @php
                            $no = 0;
                          @endphp
                          @foreach ($material as $d)
                          @php
                              $no++
                          @endphp
                              <tr>
                                  <td>{{$no}}</td>
                                  <td>{{$d->id_proc}}</td>
                                  <td>{{$d->no_ref_req}}</td>
                                  <td>{{$d->no_memorandum}}</td>
                                  <td>{{$d->kapal}}</td>
                                  <td>{{$d->description}}</td>
                                  <td>{{$d->status_part}}</td>
                                  <td>{{$d->tgl_trm_berkas}}</td>
                                  <td>{{$d->buyers}}</td>
                              </tr>
                          @endforeach
                      </tfoot>
                    </table>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">

            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
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
