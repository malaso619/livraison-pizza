
@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Produits</h4>
                            @if( Session::has('status') )
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>

                            @endif

                            @if( count($errors)>0 )
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $errs)
                                            <li>{{ $errs }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="cmxform" method="post" id="commentForm" action="{{ route('save_produit') }}" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="cname">Produits</label>
                                        <input id="cname" value="{{ old('produits_name') }}" class="form-control" name="produits_name" minlength="2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Prix</label>
                                        <input id="cname" value="{{ old('prix') }}" class="form-control" name="prix" type="number" >
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Image</label>
                                        <input id="cname" class="form-control" name="image" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Catégorie</label>
                                        <select class="form-control" name="categories" id="">
{{--                                            <option value="{{null}}">Select catégorie ...</option>--}}

                                            <option value="{{ null }}" selected>Select catégorie ...</option>
                                            @foreach($cat as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach@
{{--                                                <option value="{{ $cat }}">{{ $cat }}</option>--}}

                                        </select>
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Ajouter">
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
