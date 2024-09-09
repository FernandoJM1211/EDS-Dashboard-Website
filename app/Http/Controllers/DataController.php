<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use Illuminate\Http\Request;
use App\Charts\StatusPerusahaanChart;



class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data', [
            'title' => 'Enterprise Dynamic System',
            'datas' => Data::paginate(5),
            'allDatas' => Data::all(),
            'dataCount' => Data::count(),
            'dataPermohonan' => Data::distinct('nomor_permohonan')->count('nomor_permohonan'),
            'dataProvinsi' => Data::distinct('provinsi')->count('provinsi'),
            'dataPerusahaan' => Data::distinct('nama_perusahaan')->count('nama_perusahaan'),
            'dataSektor' => Data::distinct('sektor')->count('sektor'),
            'dataPemohon' => Data::distinct('data_pemohon')->count('data_pemohon'),
            'dataNib' => Data::distinct('nib')->count('nib'),
        ]);
    }
    public function filterData(Request $request)
{
    $tanggal_publish = $request->input('tanggal_publish');
    $provinsi = $request->input('provinsi');
    $nama_perusahaan = $request->input('nama_perusahaan');
    $nomor_permohonan = $request->input('nomor_permohonan');

    session([
        'selected_tanggal_publish' => $tanggal_publish,
        'selected_nama_perusahaan' => $nama_perusahaan,
        'selected_nomor_permohonan' => $nomor_permohonan,
        'selected_provinsi' => $provinsi
    ]);

    $query = Data::query();

    if (!empty($tanggal_publish)) {
        $query->where('tanggal_publish', $tanggal_publish);
    }

    if (!empty($provinsi)) {
        $query->where('provinsi', $provinsi);
    }

    if (!empty($nama_perusahaan)) {
        $query->where('nama_perusahaan', $nama_perusahaan);
    }

    if (!empty($nomor_permohonan)) {
        $query->where('nomor_permohonan', $nomor_permohonan);
    }

    $dataCount = $query->distinct('nomor_permohonan')->count('nomor_permohonan');
    $dataProvinsi = $query->distinct('provinsi')->count('provinsi');
    $dataPerusahaan = $query->distinct('nama_perusahaan')->count('nama_perusahaan');
    $dataSektor = $query->distinct('sektor')->count('sektor');
    $dataPemohon = $query->distinct('data_pemohon')->count('data_pemohon');
    $dataNib = $query->distinct('nib')->count('nib');
    $datas = $query->paginate(5);
    $datas->appends(['tanggal_publish' => $tanggal_publish, 'provinsi' => $provinsi, 'nama_perusahaan' => $nama_perusahaan, 'nomor_permohonan' => $nomor_permohonan]);

    return view('data', [
        'title' => 'EDS',
        'datas' => $datas,
        'allDatas' => Data::all(),
        'dataCount' => $dataCount,
        'dataProvinsi' => $dataProvinsi,
        'dataPerusahaan' => $dataPerusahaan,
        'dataSektor' => $dataSektor,
        'dataPemohon' => $dataPemohon,
        'dataNib' => $dataNib,
    ]);
}

public function resetSession()
{
    session()->forget('selected_tanggal_publish');
    session()->forget('selected_nama_perusahaan');
    session()->forget('selected_nomor_permohonan');
    session()->forget('selected_provinsi');

    return redirect('/data');
}

public function indexStatus(StatusPerusahaanChart $chart)
    {
        return view('coba', [
            'title' => 'Enterprise Dynamic System',
            'chart' => $chart->build(),
            'datas' => Data::all(),
            'dataProvinsi' => Data::distinct()->pluck('provinsi'),
            'dataNib' => Data::distinct()->pluck('nib'),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataRequest $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        //
    }
}
