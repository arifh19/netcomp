<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\Team;
use Illuminate\Support\Facades\File;


class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Team::where('user_id', auth()->user()->id)->first()->verify_id==1){
            return redirect()->route('peserta.tim')->with('warning', 'Data tim belum terverifikasi');
        }
        else{
            $proposals = Proposal::where('user_id',auth()->user()->id);
            $proposal = $proposals->first();
            if($proposals->count()>0){
                return view('peserta.proposal')->with(compact('proposal'));
            }else{
                return view('peserta.proposal');
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'upload' => 'required|mimes:pdf|max:10240'
        ], [
            'upload.mimes' => 'proposal harus format pdf',
            'upload.max' => 'Size proposal terlalu besar'
        ]);
        $cekproposal = Proposal::where('user_id', auth()->user()->id);
        if($cekproposal->count()>0){
            $proposal = Proposal::where('user_id', auth()->user()->id)->first();
            if ($request->hasFile('upload')) {
                // Mengambil file yang diupload
                $uploaded_upload = $request->file('upload');
                // Mengambil extension file
                $extension = $uploaded_upload->getClientOriginalExtension();
                // Membuat nama file random berikut extension
                $filename = md5(time()) . "." . $extension;
                // Menyimpan proposal ke folder public/proposal
                $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'proposal';
                $uploaded_upload->move($destinationPath, $filename);
                // Mengisi field upload di tabel proposal dengan filename yang baru dibuat

                if ($proposal->upload) {
                    $old_upload = $proposal->upload;
                    $filepath = public_path() . DIRECTORY_SEPARATOR . 'proposal' . DIRECTORY_SEPARATOR . $proposal->upload;
                    try {
                        File::delete($filepath);
                    } catch (FileNotFoundException $e) {
                        // File sudah dihapus/tidak ada
                    }
                }
                $proposal->upload = $filename;
            }
        }
        else{
            $proposal = new Proposal;
            $proposal->user_id= auth()->user()->id;
            if ($request->hasFile('upload')) {
                // Mengambil file yang diupload
                $uploaded_upload = $request->file('upload');
                // Mengambil extension file
                $extension = $uploaded_upload->getClientOriginalExtension();
                // Membuat nama file random berikut extension
                $filename = md5(time()) . "." . $extension;
                // Menyimpan proposal ke folder public/proposal
                $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'proposal';
                $uploaded_upload->move($destinationPath, $filename);
                // Mengisi field upload di tabel proposal dengan filename yang baru dibuat
                $proposal->upload = $filename;
            }
        }
        $proposal->save();
        return redirect()->route('peserta.proposal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
