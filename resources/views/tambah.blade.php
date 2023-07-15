@extends('template.default')
@section('content')
<!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data</h1>
                        <title>Tambah Data Dosen</title>
                    </div>
                </div>
            </div>
        </div>
            <div class="card">
                      <div class="card-header">
                        <strong>Masukkan</strong> Dosen
                      </div>
                      <div class="card-body card-block">
                        <form action="{{url('/dosen/tambah')}}" method="post">
                          <div class="form-group"><label for="nf-email" class=" form-control-label">Kode</label>
                            <input type="text" id="nf-email" name="Kd_dosen" class="form-control"></div>
                          <div class="form-group"><label for="nf-password" class=" form-control-label">NIDN Dosen</label>
                            <input type="text" id="nf-password" name="NIDN_Dosen" placeholder="Enter NIDN.." class="form-control"></div>
                            <div class="form-group"><label for="nf-password" class=" form-control-label">Nama Dosen</label>
                            <input type="text" id="nf-password" name="Nm_Dosen" placeholder="Enter Lecturer Name" class="form-control"></div>
                            <div class="form-group"><label for="nf-password" class=" form-control-label">Jenis Kelamin</label>
                                  <select data-placeholder="Pilih Jenis Kelamin" class="form-control">
                                    <option value=""></option>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                               </div>
                               <div class="form-group"><label for="nf-password" class=" form-control-label">No Handphone</label>
                                <input type="text" id="nf-password" name="NoHP_Dosen" placeholder="Enter Phone Number" class="form-control">
                               </div>
                               <div class="form-group"><label for="nf-password" class=" form-control-label">Email</label>
                                <input type="text" id="nf-password" name="Email_dosen" placeholder="Enter Email" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-primary btn-sm">
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm" value="Simpan">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
@endsection