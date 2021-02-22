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
                        <th>ID Proc</th>
                        <th>No Ref Req</th>
                        <th>No Memorandum</th>
                        <th>Kapal</th>
                        <th>Deskripsi</th>
                        <th>Status Part</th>
                        <th>Tanggal Terima</th>
                        <th>Buyers</th>
                        <th>No Proc</th>
                        <th>Proses</th>
                        <th>Metode</th>
                        <th>No Rfq</th>
                        <th>Tgl Rfq</th>
                        <th>Tgl Rfq Ul</th>
                        <th>Memo Revisi</th>
                        <th>Tgl Baep Berkas Revisi</th>
                        <th>Tgl Baep Berkas Kembali</th>
                        <th>Vendor</th>
                        <th>Anak Perusahaan</th>
                        <th>No PO</th>
                        <th>Tgl PO</th>
                        <th>Delivate PO</th>
                        <th>Nilai PO</th>
                        <th>Estimasi</th>
                        <th>Cost Saving</th>
                        <th>No Kontrak</th>
                        <th>Tgl Kontrak</th>
                        <th>Selesai Dokumen</th>
                        <th>PO Terima Vendor</th>
                        <th>Fungsi</th>
                        <th>SA</th>
                        <th>GR</th>
                        <th>Keterangan</th>
                        <th>PO Selesai Bulan</th>
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
                                  <td>{{$d->no_pr}}</td>
                                  <td>{{$d->proses}}</td>
                                  <td>{{$d->metode}}</td>
                                  <td>{{$d->no_rfq}}</td>
                                  <td>{{$d->tgl_rfq}}</td>
                                  <td>{{$d->tgl_rfq_ul}}</td>
                                  <td>{{$d->memo_revisi}}</td>
                                  <td>{{$d->tgl_trm_berkas_revisi}}</td>
                                  <td>{{$d->tgl_baep_kembali}}</td>
                                  <td>{{$d->vendor}}</td>
                                  <td>{{$d->anak_perusahaan}}</td>
                                  <td>{{$d->no_po}}</td>
                                  <td>{{$d->tgl_po}}</td>
                                  <td>{{$d->delivate_po}}</td>
                                  <td>{{$d->nilai_po}}</td>
                                  <td>{{$d->estimasi}}</td>
                                  <td>{{$d->cost_saving}}</td>
                                  <td>{{$d->no_kontrak}}</td>
                                  <td>{{$d->tgl_kontrak}}</td>
                                  <td>{{$d->selesai_dokumen}}</td>
                                  <td>{{$d->po_terima_vendor}}</td>
                                  <td>{{$d->fungsi}}</td>
                                  <td>{{$d->sa}}</td>
                                  <td>{{$d->gr}}</td>
                                  <td>{{$d->keterangan}}</td>
                                  <td>{{$d->po_selesai_bulan}}</td>
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
