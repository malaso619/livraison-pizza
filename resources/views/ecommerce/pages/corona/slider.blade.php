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
                            <h3 class="card-title">Slider</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" class="cmxform" method="post" id="commentForm" action="{{ route('save_slider')  }}" enctype="multipart/form-data">
                            <div class="card-body">
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
                                @csrf
                                <div class="form-group">
                                    <label for="cname">Titre</label>
                                    <input id="cname" value="{{ old('titre') }}" class="form-control" name="titre" minlength="2" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="cname">Description</label>
                                    <textarea class="form-control" name="description" value="{{ old('description') }}" id="" cols="30" rows="13"></textarea>

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
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
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



