@extends('template.default')
@section('content')
<!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dosen</h1>
                        <title>Data Dosen</title>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        
                    </div>
                  </div>
                </div>
              </div>
              <div class="content mt-3">
                <div class="animated fadeIn">
                  <div class="row">
                    <div class="col-md-12">
                  <a href = '/dosen/tambah' type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
                  <br>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                            
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Kode</th>
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Handphone</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($dosen as $d)
                      <tr>
                        <td>{{ $d->Kd_dosen }}</td>
                        <td>{{ $d->NIDN_Dosen }}</td>
                        <td>{{ $d->Nm_Dosen }}</td>
                        <td>{{ $d->Jk_Dosen }}</td>
                        <td>{{ $d->NoHP_Dosen }}</td>
                        <td>{{ $d->Email_dosen }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection
    

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
