@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Catégorie</h4>
                            @if( count($errors)>0 )
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $errs)
                                            <li>{{ $errs }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="cmxform" id="commentForm" method="post" action="{{ route('update_cate') }}">
                                @csrf
{{--                                @method('PUT')--}}
                                <fieldset>
                                    <input type="hidden" name="id_cate" id="" value="{{ $categorie->id_cate }}">
                                    <div class="form-group">
                                        <label for="cname">Catégorie</label>
                                        <input id="cname" class="form-control" name="name_categorie" minlength="2" type="text" value="{{ $categorie->categories }}">
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
{{--        <script src="dashbord/js/form-validation.js"></script>--}}
{{--        <script src="dashbord/js/bt-maxLength.js"></script>--}}
@endsection
