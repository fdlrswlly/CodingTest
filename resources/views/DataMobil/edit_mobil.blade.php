@extends('template.default')
@section('content')
<!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit data</h1>
                        <title>Edit data mobil</title>
                    </div>
                </div>
            </div>
        </div>
            <div class="card">
                      <div class="card-header">
                        <strong>Ubah</strong>Mobil
                      </div>
                      @foreach($mobil as $d)
                      <div class="card-body card-block">
                        <form action="/DataMobil/edit_mobil/update" method="post">
                            {{csrf_field()}}
                          <div class="form-group"><label for="nf-email" class=" form-control-label">Kode</label>
                            <input type="text" id="nf-email" name="id_mobil" class="form-control" value="{{ $d->id_mobil }}"></div>
                          <div class="form-group"><label for="nf-password" class=" form-control-label">Nama Mobil</label>
                            <input type="text" id="nf-password" name="nama_merek" placeholder="Enter Car.." class="form-control"value="{{ $d->nama_merek }}"></div>
                            <div class="form-group"><label for="nf-password" class=" form-control-label">Model</label>
                            <input type="text" id="nf-password" name="model" placeholder="Enter Model" class="form-control"value="{{ $d->model }}"></div>
                               <div class="form-group"><label for="nf-password" class=" form-control-label">Plat Nomer</label>
                                <input type="text" id="nf-password" name="no_plat" value="{{ $d->no_plat }}" class="form-control">
                               </div>
                               <div class="form-group"><label for="nf-password" class=" form-control-label">Tarif</label>
                                <input type="text" id="nf-password" name="tarif_sewa" value="{{ $d->tarif_sewa }}" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Ubah
                              <button type="reset" class="btn btn-danger btn-sm">Back
                        </form>
                        @endforeach
                      </div>
                      <div class="card-footer">
                        </button>
                      </div>
                    </div>
@endsection