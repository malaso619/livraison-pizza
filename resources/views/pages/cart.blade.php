@extends('layouts.main')
@section('content')

    <h1>Cart</h1>
    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>
        </thead>

        <tbody>

        @foreach(Cart::content() as $row)

        <tr>
            <td>
                <p><strong>{{ $row->name }} </strong></p>
                <p>{{ $row->options->has('size') ? $row->options->size : '' }}</p>
            </td>
            <td><input type="text" value="{{ $row->qty }}"></td>
            <td>${{ $row->price }}</td>
            <td>${{ $row->total }}</td>
        </tr>

       @endforeach
        </tbody>

        <tfoot>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Subtotal</td>
            <td>{{ Cart::subtotal() }} </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Tax</td>
            <td> {{ Cart::tax() }}</td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total</td>
            <td>{{ Cart::total() }}</td>
        </tr>
        </tfoot>
    </table>



    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">Product 1</h4>
                            <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">$1.99</td>
                <td data-th="Quantity">
                    <input type="number" class="form-control text-center" value="1">
                </td>
                <td data-th="Subtotal" class="text-center">1.99</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><i class="glyphicon glyphicon-refresh"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total 1.99</strong></td>
            </tr>
            <tr>
                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover borderless">
                <thead>
                <tr>
                    <th style="width: 47%;">Produit</th>
                    <th style="width: 13%;">Prix</th>
                    <th style="width: 15%;">Quantité</th>
                    <th style="width: 15%;">Sous-total</th>
                    <th style="width:10%;"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="col-sm-2">
                            <img src="http://placehold.it/100x100" alt="..." class="img-responsive" style="width: 330px; height: 76px"/>
                        </div>
                       <p>Alika</p>
                       <p>Ahghghghgfhhfghhhhhlika</p>

                    </td>
                    <td>15 000 Ar</td>
                    <td>4</td>
                    <td>300 000Ar</td>
                    <td>
                        <button class="btn btn-info btn-sm"><i class="glyphicon glyphicon-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Alika</td>
                    <td>15 000 Ar</td>
                    <td>4</td>
                    <td>300 000Ar</td>
                    <td>
                        <button class="btn btn-info btn-sm"><i class="glyphicon glyphicon-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Alika</td>
                    <td>15 000 Ar</td>
                    <td>4</td>
                    <td>300 000Ar</td>
                    <td>
                        <button class="btn btn-info btn-sm"><i class="glyphicon glyphicon-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Alika</td>
                    <td>15 000 Ar</td>
                    <td>4</td>
                    <td>300 000Ar</td>
                    <td>
                        <button class="btn btn-info btn-sm"><i class="glyphicon glyphicon-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                                <tr class="">
                                    <td colspan="2">&nbsp;</td>
                                    <td>Subtotal</td>
                                    <td>gfg</td>
                                </tr>
                                <tr class="" style="border-top: hidden;">
                                    <td colspan="2">&nbsp;</td>
                                    <td>Tax</td>
                                    <td>gfg</td>
                                </tr>
                                <tr class="" style="border-top: hidden;">
                                    <td colspan="2">&nbsp;</td>
                                    <td>Transaction cost</td>
                                    <td>gfg</td>
                                </tr>
                                <tr class="" style="border-top: hidden;">
                                    <td colspan="2">&nbsp;</td>
                                    <td>Transaction cost</td>
                                    <td>gfgfg</td>
                                </tr>
                                <tr class="" style="border-top: hidden;">
                                    <td colspan="2">&nbsp;</td>
                                    <td>Transaction cost</td>
                                    <td>gfgf</td>
                                </tr>
                                <tr class="" style="border-top: hidden;">
                                    <td colspan="2">&nbsp;</td>
                                    <td>Total</td>
                                    <td>Tgfgfg</td>
                                </tr>

                </tfoot>
            </table>
            <div class="pull-right">
                <button name="" id="" class="btn btn-warning" role="button">AAA</button>
                <button name="" id="" class="btn btn-primary"  role="button">BB</button>
                <br><br><br>
            </div>
        </div>
    </div>


@endsection
