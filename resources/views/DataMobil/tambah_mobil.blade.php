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
                        <strong>Masukkan</strong> Data Mobil
                      </div>
                      <div class="card-body card-block">
                        <form action="/DataMobil/tambah_mobil/store" method="post">
                            @csrf
                          <div class="form-group"><label for="nf-email" class=" form-control-label">Kode</label>
                            <input type="text" id="nf-email" name="id_mobil" class="form-control"></div>
                          <div class="form-group"><label for="nf-password" class=" form-control-label">Nama Mobil</label>
                            <input type="text" id="nf-password" name="nama_merek" placeholder="Enter Car.." class="form-control"></div>
                            <div class="form-group"><label for="nf-password" class=" form-control-label">Model</label>
                            <input type="text" id="nf-password" name="model" placeholder="Enter Model" class="form-control"></div>
                               <div class="form-group"><label for="nf-password" class=" form-control-label">Plat Nomer</label>
                                <input type="text" id="nf-password" name="no_plat" placeholder="Enter Plat Number" class="form-control">
                               </div>
                               <div class="form-group"><label for="nf-password" class=" form-control-label">Tarif</label>
                                <input type="text" id="nf-password" name="tarif_sewa" placeholder="Enter Price" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">SImpan
                              <button type="reset" class="btn btn-danger btn-sm">Back
                        </form>
                      </div>
                      <div class="card-footer">
                        </button>
                      </div>
                    </div>
@endsection