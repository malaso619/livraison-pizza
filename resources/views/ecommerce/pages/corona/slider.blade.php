@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Slider</h4>
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

                            <form class="cmxform" method="post" id="commentForm" action="{{ route('save_slider') }}" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="cname">Titre</label>
                                        <input id="cname" class="form-control" name="titre" value="{{ old('titre') }}" minlength="2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Description</label>
                                        <input id="cname" class="form-control" value="{{ old('description') }}"  name="description" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Image</label>
                                        <input type="file" class="form-control" name="image" id="">
{{--                                        <input id="cname" class="form-control"  name="sliderimg" type="file">{{ old('sliderimg') }}--}}
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
