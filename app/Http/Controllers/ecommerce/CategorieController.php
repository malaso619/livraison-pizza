<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\CategorieModel;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function index(){
        return view('ecommerce.pages.corona.categorie');
    }

    public function liste_categorie(){
        $categories=CategorieModel::get();
        return view('ecommerce.pages.corona.ListeData.categorie')->with('categories',$categories);
    }

    public function save_categorie(Request $req){
        $this->validate($req,[
            'categories'=>'required|unique:categories'
        ]);
        $cat=new CategorieModel();
        $cat->categories=$req->input('categories');
        $cat->save();
        return redirect('/categorie')->with('status','La catégories '.$cat->categories.' a été enregistrer avec succès');
    }

    public function misejour_categorie(Request $req){
        $this->validate($req,[
            'name_categorie'=>'required'
        ]);
        $cat=CategorieModel::find($req->input('id_cate'));
        $cat->categories=$req->input('name_categorie');
        $cat->update();
        return redirect('/list-categorie')->with('status','La catégories '.$cat->categories.' a été modifier avec succès');
    }

    public function edit_cate($id){
        $upcat=CategorieModel::findOrFail($id);
        return view('ecommerce.pages.corona.editCategorie')->with('categorie',$upcat);
    }
    public function supprimer_categorie($id){
        $upcat=CategorieModel::find($id);
        $upcat->delete();
        return redirect('/list-categorie')->with('status','La catégories '.$upcat->categories.' a été supprimer avec succès');
    }

}

