<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DeletedAdmin;
use App\Models\File;
use App\Models\User;
use App\Models\Umkm;
use App\Models\Administrasi;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataFile = Administrasi::all();
        return view('adminlte.administrasi', compact('dataFile'))->with('dataFile', $dataFile);
    }


    public function updateStatus(Request $request, $id)
    {
        $file = Administrasi::find($id);

        if ($file) {
            $file->status = true;
            $file->save();
        }

        return redirect()->back();
    }


    public function count()
    {
        $activeCount = Administrasi::where('status', 0)->count();
        $completedCount = Administrasi::where('status', 1)->count();
        $adminCount = User::count();
        $umkmCount = Umkm::count();

        $adminAdded = User::orderBy('created_at', 'desc')->first();
        if ($adminAdded) {
            $adminAdded->created_at = Carbon::parse($adminAdded->created_at)->addHours(7);
        }
        $adminRemoved = DeletedAdmin::with('admin')->orderBy('created_at', 'desc')->first();
        if ($adminRemoved) {
            $adminRemoved->deleted_at = Carbon::parse($adminRemoved->deleted_at)->addHours(7);
        }
        $fileAdded = null;
        $fileStatusChanged = null;


        return view('adminlte.index', compact('activeCount', 'adminCount', 'completedCount', 'umkmCount', 'adminAdded', 'adminRemoved', 'fileAdded', 'fileStatusChanged'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Form/form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file;
        $namaFile = $file->getClientOriginalName();

        $dataFile = new File;
        $dataFile->nomor_file = strval(mt_rand(100000, 999999));
        $dataFile->nik = $request->nik;
        $dataFile->nama = $request->nama;
        $dataFile->deskripsi = $request->deskripsi;
        $dataFile->file = $namaFile;

        $file->move(public_path() . '/file', $namaFile);
        $dataFile->save();

        return view('Form/form-number', compact('dataFile'));
    }

    /**
     * Display the specified resource.
     */
    public function validasi()
    {
        $administrasi = Administrasi::whereIn('status', [1, 2])->get();
        return view('adminlte/validasi', compact('administrasi'));
    }

    public function tombolvalid(Request $request, $id)
    {
        $file = Administrasi::find($id);

        if ($file) {
            $file->status = 2;
            $file->save();
        }

        return redirect()->back();
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function storekematian(Request $request)
    {
        // Validate the presence of PDF URL in the request
        $request->validate([
            'pdfDownloadUrl' => 'required',
            'fileKTPJenazah' => 'required|file|mimes:jpeg,png,pdf', // Modify the allowed file types as needed
            'fileKKJenazah' => 'required|file|mimes:jpeg,png,pdf',   // Modify the allowed file types as needed
            'fileKTPPelapor' => 'required|file|mimes:jpeg,png,pdf',  // Modify the allowed file types as needed
        ]);

        // Move uploaded files to the desired directories
        $tujuanktp = 'public/ktpkematian';
        $tujuankk = 'public/kkkematian';
        $tujuanktp2 = 'public/ktp2kematian';

        $filektp = $request->file('fileKTPJenazah');
        $filekk = $request->file('fileKKJenazah');
        $filektp2 = $request->file('fileKTPPelapor');

        $ktpName = $filektp->getClientOriginalName();
        $kkName = $filekk->getClientOriginalName();
        $ktp2Name = $filektp2->getClientOriginalName();

        $filektp->move($tujuanktp, $ktpName);
        $filekk->move($tujuankk, $kkName);
        $filektp2->move($tujuanktp2, $ktp2Name);

        $data = new Administrasi();
        $data->ktp = $ktpName;
        $data->kk = $kkName;
        $data->ktp2 = $ktp2Name;
        $data->form = $request->input('pdfDownloadUrl');
        $data->kode_tiket = $this->generateUniqueNumber();
        $data->save();

        Session::put('kode_tiket', $data->kode_tiket);

        return redirect('/form-ticket')->with('success', 'Formulir berhasil ditambahkan');
    }

    private function generateUniqueNumber()
    {
        while (true) {
            $randomNumber = str_pad(mt_rand(100000, 999999), 6, '0', STR_PAD_LEFT);

            $count = Administrasi::where('kode_tiket', $randomNumber)->count();

            if ($count === 0) {
                return $randomNumber;
            }
        }
    }


    public function showKematianForm()
    {
        return view('Form.form');
    }

    public function kematian(Request $request)
    {
        $data = [
            'namaKepalaKeluarga' => $request->input('namaKepalaKeluarga'),
            'nomorKartuKeluarga' => $request->input('nomorKartuKeluarga'),
            'nomorIndukKependudukanJenazah' => $request->input('nomorIndukKependudukanJenazah'),
            'nomorIndukKependudukanAyah' => $request->input('nomorIndukKependudukanAyah'),
            'nomorIndukKependudukanIbu' => $request->input('nomorIndukKependudukanIbu'),
            'nomorIndukKependudukanPelapor' => $request->input('nomorIndukKependudukanPelapor'),
            'nomorIndukKependudukanSaksi1' => $request->input('nomorIndukKependudukanSaksi1'),
            'nomorIndukKependudukanSaksi2' => $request->input('nomorIndukKependudukanSaksi2'),
            'namaLengkapJenazah' => $request->input('namaLengkapJenazah'),
            'namaLengkapAyah' => $request->input('namaLengkapAyah'),
            'namaLengkapIbu' => $request->input('namaLengkapIbu'),
            'namaLengkapPelapor' => $request->input('namaLengkapPelapor'),
            'namaLengkapSaksi1' => $request->input('namaLengkapSaksi1'),
            'namaLengkapSaksi2' => $request->input('namaLengkapSaksi2'),
            'jenisKelaminJenazah' => $request->input('jenisKelaminJenazah'),
            'tanggalLahirJenazah' => $request->input('tanggalLahirJenazah'),
            'bulanLahirJenazah' => $request->input('bulanLahirJenazah'),
            'tahunLahirJenazah' => $request->input('tahunLahirJenazah'),
            'tanggalLahirAyah' => $request->input('tanggalLahirAyah'),
            'bulanLahirAyah' => $request->input('bulanLahirAyah'),
            'tahunLahirAyah' => $request->input('tahunLahirAyah'),
            'tanggalLahirIbu' => $request->input('tanggalLahirIbu'),
            'bulanLahirIbu' => $request->input('bulanLahirIbu'),
            'tahunLahirIbu' => $request->input('tahunLahirIbu'),
            'tanggalLahirPelapor' => $request->input('tanggalLahirPelapor'),
            'bulanLahirPelapor' => $request->input('bulanLahirPelapor'),
            'tahunLahirPelapor' => $request->input('tahunLahirPelapor'),
            'tanggalLahirSaksi1' => $request->input('tanggalLahirSaksi1'),
            'bulanLahirSaksi1' => $request->input('bulanLahirSaksi1'),
            'tahunLahirSaksi1' => $request->input('tahunLahirSaksi1'),
            'tanggalLahirSaksi2' => $request->input('tanggalLahirSaksi2'),
            'bulanLahirSaksi2' => $request->input('bulanLahirSaksi2'),
            'tahunLahirSaksi2' => $request->input('tahunLahirSaksi2'),
            'tanggalMatiJenazah' => $request->input('tanggalMatiJenazah'),
            'bulanMatiJenazah' => $request->input('bulanMatiJenazah'),
            'tahunMatiJenazah' => $request->input('tahunMatiJenazah'),
            'umurJenazah' => $request->input('umurJenazah'),
            'umurAyah' => $request->input('umurAyah'),
            'umurIbu' => $request->input('umurIbu'),
            'umurPelapor' => $request->input('umurPelapor'),
            'umurSaksi1' => $request->input('umurSaksi1'),
            'umurSaksi2' => $request->input('umurSaksi2'),
            'tempatKelahiranJenazah' => $request->input('tempatKelahiranJenazah'),
            'agamaJenazah' => $request->input('agamaJenazah'),
            'pekerjaanJenazah' => $request->input('pekerjaanJenazah'),
            'pekerjaanAyah' => $request->input('pekerjaanAyah'),
            'pekerjaanIbu' => $request->input('pekerjaanIbu'),
            'pekerjaanPelapor' => $request->input('pekerjaanPelapor'),
            'pekerjaanSaksi1' => $request->input('pekerjaanSaksi1'),
            'pekerjaanSaksi2' => $request->input('pekerjaanSaksi2'),
            'alamatJenazah' => $request->input('alamatJenazah'),
            'desaJenazah' => $request->input('desaJenazah'),
            'kecJenazah' => $request->input('kecJenazah'),
            'kabJenazah' => $request->input('kabJenazah'),
            'provJenazah' => $request->input('provJenazah'),
            'desaAyah' => $request->input('desaAyah'),
            'kecAyah' => $request->input('kecAyah'),
            'kabAyah' => $request->input('kabAyah'),
            'provAyah' => $request->input('provAyah'),
            'desaIbu' => $request->input('desaIbu'),
            'kecIbu' => $request->input('kecIbu'),
            'kabIbu' => $request->input('kabIbu'),
            'provIbu' => $request->input('provIbu'),
            'desaPelapor' => $request->input('desaPelapor'),
            'kecPelapor' => $request->input('kecPelapor'),
            'kabPelapor' => $request->input('kabPelapor'),
            'provPelapor' => $request->input('provPelapor'),
            'desaSaksi1' => $request->input('desaSaksi1'),
            'kecSaksi1' => $request->input('kecSaksi1'),
            'kabSaksi1' => $request->input('kabSaksi1'),
            'provSaksi1' => $request->input('provSaksi1'),
            'desaSaksi2' => $request->input('desaSaksi2'),
            'kecSaksi2' => $request->input('kecSaksi2'),
            'kabSaksi2' => $request->input('kabSaksi2'),
            'provSaksi2' => $request->input('provSaksi2'),
            'anakKeJenazah' => $request->input('anakKeJenazah'),
            'sebabKematianJenazah' => $request->input('sebabKematianJenazah'),
            'tempatKematianJenazah' => $request->input('tempatKematianJenazah'),
            'yangMenerangkanKematianJenazah' => $request->input('yangMenerangkanKematianJenazah'),
        ];
        $view = View::make('templatform.suratpengantarkematian.index', $data);
        $html = $view->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfOutput = $dompdf->output();

        $pdfDirectory = 'public/kematian/';
        if (!file_exists($pdfDirectory)) {
            mkdir($pdfDirectory, 0777, true);
        }
        $pdfFileName = time() . 'spkematian.pdf';
        $pdfFilePath = $pdfDirectory . $pdfFileName;
        file_put_contents($pdfFilePath, $pdfOutput);

        $pdfDownloadUrl = asset($pdfFilePath);
        return view('Form.kematian-lanjut', ['pdfDownloadUrl' => $pdfDownloadUrl]);
    }

    public function check(Request $request)
    {
        $cek_tiket = Administrasi::where('kode_tiket', $request->kode_tiket)->first();
        if ($cek_tiket) {
            return redirect()->to('check-form/' . $cek_tiket->kode_tiket);
        } else {
            Session::flash('ticket_not_found', 'Kode tiket tidak ditemukan.');
            return redirect()->back();
        }
    }

    public function detail($kode_tiket)
    {
        $cek_tiket = Administrasi::where('kode_tiket', $kode_tiket)->first();
        return view('Form.detail-ticket', ['ticket' => $cek_tiket]);
    }
}