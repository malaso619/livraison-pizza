@extends('ecommerce.layouts.corona.dash')

@section('custom-header')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">

@endsection

@section('content')
    <section class="content" style="margin-top: 70px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Produit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" class="cmxform" method="post" id="commentForm" action="{{  route('update_prod') }}" enctype="multipart/form-data">
                            <div class="card-body">
                                @if( count($errors)>0 )
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $errs)
                                                <li>{{ $errs }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @csrf
                                    <input type="hidden" name="id_prod" id="" value="{{ $prod->id_prod }}">
                                <div class="form-group">
                                    <label for="cname">Produits</label>
                                    <input id="cname" value="{{ $prod->produits_name }}" class="form-control" name="produits_name" minlength="2" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="cname">Prix</label>
                                    <input id="cname" value="{{ $prod->prix }}" class="form-control" name="prix" type="number" >
                                </div>
                                <div class="form-group">
                                    <label for="cname">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="cname" class="custom-file-input" name="image" type="file">
                                            <label class="custom-file-label" for="exampleInputFile">Choisir un image</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="">Catégorie</label>
                                    <select class="form-control select2 " name="categories">
                                        <option value="{{ $prod->categories }}">{{ $prod->categories }}</option>
                                        @foreach($plk as $p)
                                            <option value="{{ $p }}">{{ $p }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('custom-js')
    <script src="{{ asset('dashbord/template/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('dashbord/template/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }} "></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
            // ('.select2').select2();
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4'
            })
        });
        $(function () {
            // $('.select2').select2();
        })
    </script>
@endsection



