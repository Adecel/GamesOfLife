<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrousel;
//use Nette\Utils\Image;
//use Intervention\Image;
//use Image;
//use Intervention\Image\ImageManager;
//use Intervention\Image\Drivers\Gd\Driver;

class HomeSliderController extends Controller
{
    public function HomeSlider(){
        $homeslide = Carrousel::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));
    } //End of HomeSlider

    public function UpdateSlider(Request $request){
        $slide_id = $request->id;

        if ($request->file('image01')){
            $image = $request->file('image01');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

//            Image::make($image)->resize(1920,1280)->save('upload/home_slide/'.$name_gen);

            $save_url = 'upload/home_slide/'.$name_gen;

            Carrousel::findOrFail($slide_id)->update([
                'titre' => $request->title,
                'description_texte' => $request->short_title,
                'lien_video' => $request->video_url,
                'image01' => $save_url,
            ]);
            $notification = array(
                'message' => "Page d'accueil avec l'image, Mise à jour réussie !",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else{
            Carrousel::findOrFail($slide_id)->update([
                'titre' => $request->title,
                'description_texte' => $request->short_title,
                'lien_video' => $request->video_url,
            ]);
            $notification = array(
                'message' => "Page d'accueil sans image, Mise à jour réussie !",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }

    }  // End of UpdateSlider

}
