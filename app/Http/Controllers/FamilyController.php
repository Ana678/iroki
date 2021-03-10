<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Family;

class FamilyController extends Controller
{

    public function cadastroMembro()
    {
        return view('cadastroMembro');
    }

    /*public function updateFamilyImage(Request $request){

        $userFamily = auth()->user()->family_id;
        $family = Family::where('id', $userFamily)->first();

        if(@isset($family->family_photo_path)) {
            File::delete("assets/img/family/".$family->families_photo_path);
        }

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('assets/img/avatars'), $imageName);

            User::where('id',$sessao->id)->update(['profile_photo_path' => $imageName]);
        }

        return redirect('profile');
        
    }*/
}
