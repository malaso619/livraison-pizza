<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\SliderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    //

    public function index(){
        return view('ecommerce.pages.dashbord.slider');
    }

    public function save_slider(Request $req){
        //echo $req->input('sliderimg');

        $this->validate($req,[
            'titre'=>'required',
            'description'=>'required',
            'sliderimg'=>'image|nullable|max:3900'
        ]);

        if($req->hasFile('image')){
            //get file name with extension
            $FileWithExt=$req->file('image')->getClientOriginalName();

            //2-get just file name
            $FileName=pathinfo($FileWithExt,PATHINFO_FILENAME);

            //3-get just file extension
            $extentionFile=$req->file('image')->getClientOriginalExtension();

            //4-File name to store
            $storeFile=$FileName.'_'.time().'.'.$extentionFile;

            //5-upload sliderimg
            $chemin=$req->file('image')->storeAs('public/slider',$storeFile);//ceci est stocké dans le fichier storage/app/public
        }else{
            
            $storeFile='noimage.jpg';
        }

        // echo $req->input('produits_name');
        $slider=new SliderModel();
        $slider->titre=$req->input('titre');
        $slider->status=1;
        $slider->description=$req->input('description');
        $slider->image=$storeFile;

        $slider->save();
        return redirect('/slider')->withStatus("Le slide ".$slider->titre." a été enregistrer avec succès");
    }

    public function liste_slider(){
        $slider=SliderModel::get();
        return view('ecommerce.pages.dashbord.ListeData.slider',compact('slider'));
    }

    public function updated_slider(Request $req){

        $this->validate($req,[
            'titre'=>'required',
            'description'=>'required',
            'sliderimg'=>'image|nullable|max:3900'
        ]);

        $slider=SliderModel::find($req->input('id_slider'));
        $slider->titre=$req->input('titre');
        $slider->description=$req->input('description');

        if($req->hasFile('image')){
            //get file name with extension
            $FileWithExt=$req->file('image')->getClientOriginalName();

            //2-get just file name
            $FileName=pathinfo($FileWithExt,PATHINFO_FILENAME);

            //3-get just file extension
            $extentionFile=$req->file('image')->getClientOriginalExtension();

            //4-File name to store
            $storeFile=$FileName.'_'.time().'.'.$extentionFile;

            //5-upload sliderimg
            $chemin=$req->file('image')->storeAs('public/slider',$storeFile);//ceci est stocké dans le fichier storage/app/public
            if($slider->image!='noimage.jpg'){

                Storage::delete('/public/slider/'.$slider->image);

            }
            $slider->image=$storeFile;

        }
        $slider->update();
        return redirect('/list-slider')->withStatus("Le slide ".$slider->titre." a été modifier avec succès");
    }
    public function edit_slider($id){
        $slide=SliderModel::findOrFail($id);
        return view('ecommerce.pages.dashbord.editSlider')->with('slide',$slide);

    }
    public function deleted_slider($id){
        $slider=SliderModel::find($id);
        if($slider->image!='noimage.jpg'){
            Storage::delete('/public/slider/'.$slider->image);
        }
        $slider->delete();
        return redirect('/list-slider')->withStatus("Le slide ".$slider->titre." a été supprimer avec succès");
    }

    public function activer($id){
        $slider=SliderModel::find($id);
        $slider->status=1;
        $slider->update();
        return redirect('/list-slider')->withStatus("Le status du slide ".$slider->titre." a été activer avec succès");
    }
    public function desactiver($id){
        $slider=SliderModel::find($id);
        $slider->status=0;
        $slider->update();
        return redirect('/list-slider')->withStatus("Le status du slide ".$slider->titre." a été desactiver avec succès");
    }


}
