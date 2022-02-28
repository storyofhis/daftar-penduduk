<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{

    public function input()
    {
        return view('app');
    }

    public function process(Request $request)
    {
        // Alert::success('Submit Berhasil!', 'Terima kasih sudah mengisi form Penduduk!');
        $messagesError = [
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
        ];
        $this->validate($request,[
            'nama' => ['required', 'min:6', 'max:20'],
            'nik' => ['required', 'numeric', 'min:16'],
            'alamat' => ['required', 'min:2'],
            'tempat-lahir' => ['required', 'min:2'],
            'tanggal-lahir' => ['required', 'min:2'],
            'ktp' => ['required', 'image', 'mimes:jpg,jpeg,png'],
       ]);
       $img_link = $this->saveImage( $request , 1);
       $request->ktp = $img_link;
       return view('process-screening',['data' => $request]);
    }

    public function saveImage(Request $request, $id)
    {
        $img = $request->ktp; 
        $img_name = ''; 
        if ($img !== NULL) {
            $img_name = 'ktp'. $id . "." . $img->extension();
            $img_name = str_replace(' ', '-', strtolower($img_name)); 
            $img->storeAs(null, $img_name, ['disk' => 'public']); 
        }
        return asset('storage') . '/' . $img_name; 
    }
}
