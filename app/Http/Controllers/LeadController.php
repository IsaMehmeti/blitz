<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use App\Imports\LeadsImport;
use App\Models\File;
use App\Models\Lead;
use App\Models\Transmission;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LeadController extends Controller
{
    public function index()
    {
        $files = Lead::all();
        return view('lead.index', compact('files'));
    }

    public function create()
    {
        return view('lead.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'file' => 'required|file|max:50000',
        ]);

        $transmission = new Transmission;
        $transmission->name = $request->file('file')->getClientOriginalName();
        $transmission->user_id = auth()->user()->id;
        $transmission->save();
        Excel::import(new LeadsImport($transmission->id), $request->file('file'));
        Excel::import(new CustomerImport, $request->file('file'));
        $this->uploadFile($request->file('file'), $transmission->id);
        return response()->json(['success' => 'Lead Uploaded Successfully']);
    }

    public function download($id)
    {
        $file = Lead::findOrFail($id);
        $filePath = storage_path($file->file);
    	$headers = ['Content-Type: application/'. $file->filetype];
    	$fileName = $file->originalName;
//    	dd(storage_path($file->file));
    	if (!file_exists(storage_path($file->file))) {
    	    return redirect()->back()->with(['danger' => __('Lead doesn\'t exist')]);
    	}
    	return response()->download($filePath, $fileName, $headers);
    }

    public function destroy($id)
    {
       $file = Lead::findOrFail($id);
           if (file_exists(storage_path($file->file))) {
            unlink(storage_path($file->file));
           }
       $file->delete();
       return redirect()->back()->with(['status' => __('Deleted Successfully')]);

    }

    public function uploadFile($reqFile, $transmission_id)
    {
         $file_path = 'uploads/'.$reqFile->getClientOriginalName();
         $file = new File;
         $file->filename = $reqFile->getClientOriginalName();
         $file->filetype = $reqFile->getClientOriginalExtension();;
         $file->filesize = $reqFile->getSize();;
         $file->filepath = '/uploads';
         $file->file = $file_path;
         $file->originalName = $reqFile->getClientOriginalName();
         $file->transmission_id = $transmission_id;
         $file->save();
         $reqFile->move(storage_path('uploads'), $reqFile->getClientOriginalName());
    }
}
