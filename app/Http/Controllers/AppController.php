<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public static int $counter = 0;
    public function input()
    {
        return view('app');
    }

    public function process(Request $request)
    {
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
            'foto-ktp' => ['required', 'min:2'],
       ]);

       return view('process-screening',['data' => $request]);
    }
}
