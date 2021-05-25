@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza1.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="list-taille form-control"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>         
                                @endfor              
                            </select></p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza10.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="form-control list-taille"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>
                                    
                                @endfor
                                
                                
                            </select></p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza11.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="form-control list-taille"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>
                                    
                                @endfor
                            </select></p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza12.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="list-taille form-control"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>
                                    
                                @endfor
                              </select></p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza13.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="list-taille form-control"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>
                                    
                                @endfor
                                
                               
                            </select></p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza14.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="list-taille form-control"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>
                                    
                                @endfor
                            
                            </select></p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza2.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="list-taille form-control"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>
                                    
                                @endfor
                            </select>
                        </p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="thumbnail"><img src="{{ asset('others/images/pizza/pizza3.jpg')}}" style="width: 100%;height: 245px;">
                <div id="content-pizza" class="caption content-pizza">
                    <h3 class="text-center" style="font-size: 28px;opacity: 1;">Fruit de mer</h3>
                    <div>
                        <p id="label-list-ingredient" class="label-list-ingredient ">Ingredients : Tomate , Oignon</p>
                        <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;<select id="list-taille" class="list-taille form-control"><option value="pm" selected="">PM</option><option value="m">M</option><option value="gm">GM</option></select></p>
                        <p id="prix" class="prix">Prix: 15 000, 00 Ar</p>
                        <p id="quantite">Quantité:
                            <select id="list-quantite" class="list-quantite form-control">
                                @for ($i = 1; $i <= 15; $i++)
                                <option value={{ $i }} selected>{{ $i }}</option>
                                    
                                @endfor
                                                   
                            </select></p>
                    </div><button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter<i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i></button></div>
            </div>
        </div>
    </div>
</div>
@endsection
   