
@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Produits</h4>

                            @if( count($errors)>0 )
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $errs)
                                            <li>{{ $errs }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="cmxform" method="post" id="commentForm" action="{{ route('update_prod') }}" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <input type="hidden" name="id_prod" id="" value="{{ $prod->id_prod }}">
                                    <div class="form-group">
                                        <label for="cname">Produits</label>
                                        <input id="cname" value="{{  $prod->produits_name }}" class="form-control" name="produits_name" minlength="2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Prix</label>
                                        <input id="cname" value="{{  $prod->prix }}" class="form-control" name="prix" type="number" >
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Image</label>
{{--                                        <img class="img img-2" id="mm" src="{{ asset('storage/uploadsFichierss/ecommerce/imagess/'.$prod->image) }}" alt=""/>--}}
                                        <input id="cname" class="form-control" name="image" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Catégorie</label>
                                        <select class="form-control" name="categories" id="">
{{--                                            <option value="{{null}}">Select catégorie ...</option>--}}
{{--                                                <option value="{{ $upcat->categories }}" selected>{{ $upcat->categories }}</option>--}}
{{--                                            @foreach($upcat as $item)--}}
{{--                                                <option value="{{ $item->id_cate }}">{{ $item->categories }}</option>--}}
{{--                                            @endforeach--}}
{{--                                            @foreach($allcat as $item)--}}
{{--                                                <option value="{{ $item->id_cate }}">{{ $item->categories }}</option>--}}
{{--                                            @endforeach--}}
{{--                                                <option value="{{ $cat }}">{{ $cat }}</option>--}}
                                            <option value="{{ $prod->categories }}">{{ $prod->categories }}</option>
                                            @foreach($plk as $p)
                                                <option value="{{ $p }}">{{ $p }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Modifier">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <!-- Custom js for this page-->
{{--    <script src="dashbord/js/form-validation.js"></script>--}}
{{--    <script src="dashbord/js/bt-maxLength.js"></script>--}}
@endsection
