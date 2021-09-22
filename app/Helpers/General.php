<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Foundation\Http;

function get_languages(){

    return \App\Models\Language::active() -> Selection() -> get();
}

function get_default_lang(){
  return   Config::get('app.locale');
}


function uploadImage($folder, $image)
{

    $filename = $image->getClientOriginalName();

    $pa =$image->storeAs( 'uploads' , $folder , 'public');
    $path=$image->move($pa.'/', $filename );
    return $path;
}
function uploadImage1($folder,$folder1, $image)
{

    $filename = $image->getClientOriginalName();

    $pa =$image->storeAs( 'uploads' , $folder.'/'.$folder1, 'public');
    $path=$image->move($pa, $filename );
    return $path;
}





function uploadVideo($folder, $video)
{
    $video->store('/', $folder);
    $filename = $video->hashName();
    $path = 'video/' . $folder . '/' . $filename;
    return $path;
}


