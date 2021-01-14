<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
Use Auth;

class ComplaintController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = Complaint::with(['user'])->paginate('15');
        return view('admin_pages.complaints.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin_pages.complaints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
 
      	// isi dengan nama folder tempat kemana file diupload
        Complaint::create([
            'user_id' => Auth::id(),
            'nik' => Auth::id(),
            'isi_laporan' => $request->isi_laporan,
            'foto'  => $nama_file,
            'status' => 'new'
        ]);


        return  redirect (route('pengaduan.index'));
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
        $complaint = Complaint::find($id);
        return view('admin_pages.complaints.edit', compact('complaint'));
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
        $complaint = Complaint::find($id);
        $nama_file = null;
        if ($request->file('file')) {
            $file = $request->file('file');
 
            $nama_file = time()."_".$file->getClientOriginalName();
    
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
        } else {
            $nama_file = $complaint->foto;
        }
        
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move(asset('data_file/'), $filename);
        }
        else {
            $nama_file = $complaint->foto;
        }

        $complaint->update([    
            'isi_laporan' => $request->isi_laporan,
            'foto'  => $nama_file,
            'status' => 'new'
        ]);

        return  redirect (route('pengaduan.index'));
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
