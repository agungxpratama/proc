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
          <div class="row">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="card-title">Data Kapal</h5>
                      </div>
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($kapal as $k)
                                <tr>
                                    @php
                                        $no++;
                                    @endphp
                                    <td>{{$no}}</td>
                                    <td>{{$k->nama_kapal}}</td>
                                    <td> <button class="btn btn-primary" type="button" name="button"><i class="fas fa-pen"></i> Edit</button> </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="card-title">Data Kapal Terhapus</h5>
                      </div>
                      <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
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
