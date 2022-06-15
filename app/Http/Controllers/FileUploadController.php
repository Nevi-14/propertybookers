<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


        $validator = $request->validate([
            'file' => '',
            'description' => ''          
             ]);

        /** Auth User */
        $user = Auth::user();
        $user_id = $user->id;

   //     return $request->all();
        //SINGLE FILE UPLOAD
/*** if($request->hasFile('file')){

    $filename = $request->file->getClientOriginalName();
    $filesize = $request->getClientSize();
    $request->file->storeAs('public/upload',$filename);
    $file = new FileUpload;
    $file->name = $filename;
    $file->size = $filesize;
    $file->save();
    return 'yes';

}
**/
        // MULTIPLE FILE UPLOAD
          // return $request->file;
        if($request->hasFile('file')){
  
            foreach ($request->file as $file){
                $filename = $file->getClientOriginalName();
                $filesize = $file->getSize();

                $destinationPath = 'public/fileupload'; // upload path
                $file->storeAs($destinationPath, $filename);

                $fileUpload = FileUpload::create([
                    'property_tracker_id'=>$request->lead_id,
                    'file' =>$filename,
                    'size' => $filesize,
                    'user_id' => $user_id,
                    'description' => $request->description
                ]);


            }

           
            $notification = array(
                'message' => 'El elemento se guardo con exito.',
                'alert-type' => 'success'
            );
    
    
            return back()->with($notification);
          
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function show(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileUpload $fileUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileUpload $fileUpload)
    {
        //
    }




    public function download_local(Request $request){

  if(Storage::disk('public')->exists("fileupload/$request->file")){

  $path = Storage::disk('public')->path("fileupload/$request->file");
  $content = file_get_contents($path);
  return response($content)->withHeaders(
  [
      'Content-Type'=>mime_content_type($path)
  ]

  );

  }

  return "no file";

    }
}
