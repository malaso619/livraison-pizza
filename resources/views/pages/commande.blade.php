@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        @foreach($pizza as $piz)
            @foreach($piz->ingredients as $ingredients)
                <div class="col-md-4">
                    <div class="thumbnail">

                            <img src="{{ asset('others/images/pizza/pizza12.jpg')}}" style="width: 100%;height: 245px;" />

                        <div id="content-pizza" class="caption content-pizza">
                            <h3 class="text-center" style="font-size: 28px;opacity: 1;">{{ $piz->NOMPIZZA }}</h3>
                            <div>
                                <strong id="label-list-ingredient" class="label-list-ingredient">Ingredients : </strong>
                                <p>{{ $ingredients->INGREDIENTS }}</p>
                                <p id="lbl-taille" class="lbl-taille">Taille:&nbsp;
                                    <select id="list-taille" class="list-taille form-control">
                                        <option value="pm" selected="">PM</option>
                                        <option value="m">M</option>
                                        <option value="gm">GM</option>
                                    </select>
                                </p>
                                <p id="prix" class="prix">Prix: {{  number_format($piz->PRIX , 2, ',', ' ')}} Ar</p>
                                <p id="quantite">Quantité:
                                    <select id="list-quantite" class="list-quantite form-control">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value={{ $i }} selected>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </p>
                            </div>
                            <button class="btn btn-primary text-center add-cart" id="add-cart" type="button">Ajouter
                                <i class="glyphicon glyphicon-shopping-cart" id="icon-btn-add-cart-1" style="margin-left: 6px;"></i>
                            </button>
                        </div>
                    </div>
                </div>
           @endforeach
        @endforeach
    </div>
</div>

@endsection
