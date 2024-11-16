<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintController extends Controller
{
    public function print(Request $request)
    {

        $nama_moderator = $request->moderator;
        $jenis_mahasiswa_sempro = $request->jenis_mahasiswa_sempro;
        $nama_mahasiswa_sempro = $request->nama_mahasiswa_sempro;
        $judul_proposal = $request->judul_proposal;

        $jenis_pembimbing_1 = $request->jenis_pembimbing_1;
        $nama_pembimbing_1 = $request->nama_pembimbing_1;
        $jenis_pembimbing_2 = $request->jenis_pembimbing_2;
        $nama_pembimbing_2 = $request->nama_pembimbing_2;

        $jenis_penguji_1 = $request->jenis_penguji_1;
        $nama_penguji_1 = $request->nama_penguji_1;
        $jenis_penguji_2 = $request->jenis_penguji_2;
        $nama_penguji_2 = $request->nama_penguji_2;

        $data = [

                $nama_moderator,
                $jenis_mahasiswa_sempro,
                $nama_mahasiswa_sempro,

                $jenis_pembimbing_1,
                $nama_pembimbing_1,
                $jenis_pembimbing_2,
                $nama_pembimbing_2,

                $jenis_penguji_1,
                $nama_penguji_1,
                $jenis_penguji_2,
                $nama_penguji_2,

                $judul_proposal
        ];



        $pdf = Pdf::loadView('tekspdf', ['data' => $data]);
        return $pdf->download('teks-sempro.pdf');
    }
}
