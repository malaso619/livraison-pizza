<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ecommerce\CategorieModel;
use App\Models\ecommerce\ProduitModel;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    //
    public function index(){
        //$cat=CategorieModel::all();
        $cat=CategorieModel::all()->pluck('categories');//plug nous permet de specifier quel champ qu'on doit utiliser dans la bdd
        return view('ecommerce.pages.dashbord.produit')->withCat($cat);
    }
    public function liste_produit(){
        $prod=ProduitModel::all();
        return view('ecommerce.pages.dashbord.ListeData.produit',compact('prod'));
    }
    public function save_produit(Request $req){

        $this->validate($req,[
            'produits_name'=>'required|unique:prouduits',
            'prix'=>'required',
            'image'=>'image|nullable|max:1999',
            'categories'=>'required'
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

            //5-upload image
            $chemin=$req->file('image')->storeAs('public/uploadsFichierss/ecommerce/imagess',$storeFile);//ceci est stocké dans le fichier storage/app/public
        }else{
            $storeFile='noimage.jpg';
        }

       // echo $req->input('produits_name');
        $prod=new ProduitModel();
        $prod->produits_name=$req->input('produits_name');
        $prod->status=1;
        $prod->prix=$req->input('prix');
        $prod->image=$storeFile;
        $prod->categories=$req->input('categories');
        $prod->save();

        return redirect('/produit')->withStatus("Le produit ".$prod->produits_name." a été enregistrer avec succès");
    }

    public function update_prod(Request $req){
        $this->validate($req,[
            'produits_name'=>'required',
            'prix'=>'required',
            'image'=>'image|nullable|max:1999',
            'categories'=>'required'
        ]);

        $prod=ProduitModel::find($req->input('id_prod'));
        $prod->produits_name=$req->input('produits_name');
        $prod->prix=$req->input('prix');
        $prod->categories=$req->input('categories');

        if($req->hasFile('image')){
            //get file name with extension
            $FileWithExt=$req->file('image')->getClientOriginalName();

            //2-get just file name
            $FileName=pathinfo($FileWithExt,PATHINFO_FILENAME);

            //3-get just file extension
            $extentionFile=$req->file('image')->getClientOriginalExtension();

            //4-File name to store
            $storeFile=$FileName.'_'.time().'.'.$extentionFile;

            //5-upload image
            $chemin=$req->file('image')->storeAs('public/uploadsFichierss/ecommerce/imagess',$storeFile);//ceci est stocké dans le fichier storage/app/public

            if($prod->image!='noimage.jpg'){

                Storage::delete('/public/uploadsFichierss/ecommerce/imagess/'.$prod->image);

            }

            //else if($req->file('image')==null || $req->file('image')=='' ){
                //Storage::delete('/public/uploadsFichierss/ecommerce/imagess/'.$prod->image);
                //$storeFile=$prod->image;
           // }

            $prod->image=$storeFile;
        }



        $prod->update();
        return redirect('/list-produit')->withStatus("Le produit ".$prod->produits_name." a été modifier avec succès");
    }
    public function delete_prod($id){
        $prod=ProduitModel::find($id);
        if($prod->image!='noimage.jpg'){
            Storage::delete('/public/uploadsFichierss/ecommerce/imagess/'.$prod->image);
        }
        $prod->delete();
        return redirect('/list-produit')->withStatus("Le produit ".$prod->produits_name." a été supprimer avec succès");
    }

    public function edit_prod($id){
        $prod=ProduitModel::findOrFail($id);
        $upcat=CategorieModel::where('categories',$prod->categories)->get();
        $allcat=CategorieModel::all();
        $plk=CategorieModel::all()->pluck('categories','categories');
        return view('ecommerce.pages.dashbord.editProduit',compact('upcat','prod','allcat','plk'));
    }


    public function active_prod($id){
        $prod=ProduitModel::find($id);
        $prod->status=1;
        $prod->update();
        return redirect('/list-produit')->withStatus("Le status du produit ".$prod->produits_name." a été activé avec succès");
    }

    public function desactive_prod($id){
        $prod=ProduitModel::find($id);
        $prod->status=0;
        $prod->update();
        return redirect('/list-produit')->withStatus("Le status du produit ".$prod->produits_name." a été desactivé avec succès");
    }
}
