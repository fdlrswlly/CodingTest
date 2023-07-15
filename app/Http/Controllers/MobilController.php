<?php

namespace App\Http\Controllers;
use App\Models\MobilModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ViewErrorBag;

class MobilController extends Controller
{
    public function mobil()
    {
        //mengambil data dari DB
        $mobil = DB::table('tb_mobil')->get();

        // mengirim data dari tabel mobil ke index
        return view('/Datamobil/mobil', ['mobil' => $mobil]);
    }

        public function simpan()
    {
       
    }
    public function tambah2() {
        
        return view('/DataMobil/tambah_mobil');
    }
    public function store(Request $request) {
       
        DB::table('tb_mobil')->insert([
            'id_mobil' => $request->id_mobil,
            'nama_merek' => $request->nama_merek,
            'model' => $request->model,
            'no_plat' => $request->no_plat,
            'tarif_sewa' => $request->tarif_sewa
        ]);
        return redirect('/DataMobil/mobil');
    }
    
    public function edit($id) {
        $mobil = DB::table('tb_mobil')->where('id_mobil', $id)->get();
        return view('/DataMobil/edit_mobil', ['mobil' => $mobil]);
    }
    public function update(Request $request) {
        DB::table('tb_mobil')->where('id_mobil',$request->id_mobil)->update([
            'nama_merek' => $request->nama_merek,
            'model' => $request->model,
            'no_plat' => $request->no_plat,
            'tarif_sewa' => $request->tarif_sewa,
        ]);
        return redirect('/DataMobil/mobil');
    }
    public function hapus($id)  {
        DB::table('tb_mobil')->where('id_mobil',$id)->delete();
        return redirect('/DataMobil/mobil');
    }

 
}
