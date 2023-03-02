<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\MediaStoreRequest;
use Illuminate\Support\Facades\Validator;


class MediaController extends Controller
{
    public function upload(Request $request)
    {
        // if ($file = $request->media('media')) {
        //     $path = $file->store('public/media');
        //     $name = $file->getClientOriginalName();
            $filename = $request->name;
            //store your file into directory and db
            // $save = new Media();
            // $save->name = $file;
            // $save->store_path= $path;
            // $save->save();
            $media = Media::create([
                'name' => $request->name,
                'path' => $request->path,
            ]);
            if($media){
                return response()->json([
                    "success" => true,
                    "message" => "File successfully uploaded",
                    "name" => $filename
                ]);
            }

        }


    }
