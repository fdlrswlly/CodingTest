@extends('template.default')
@section('content')
<!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Mobil</h1>
                        <title>Data Mobil</title>
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
                  <a href = '/DataMobil/tambah_mobil' type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
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
                        <th>Merek</th>
                        <th>Model</th>
                        <th>No Plat</th>
                        <th>Tarif Sewa</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                         @foreach ($mobil as $d)
                      <tr>
                        <td>{{ $d->id_mobil }}</td>
                        <td>{{ $d->nama_merek }}</td>
                        <td>{{ $d->model }}</td>
                        <td>{{ $d->no_plat }}</td>
                        <td>{{ $d->tarif_sewa }}</td>
                        <td>
                            <a href="/DataMobil/edit_mobil/{{$d->id_mobil}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="/DataMobil/hapus/{{$d->id_mobil}}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                      </tr>
                      @endforeach
                        
                      </tr>
                      
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
