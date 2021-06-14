@extends('ecommerce.layouts.corona.dash')
@section('content')

    <section class="content" style="margin-top: 70px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" class="cmxform" method="post" id="commentForm" action="{{ route('update_cate')  }}">
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

                                    <input type="hidden" name="id_cate" value="{{ $categorie->id_cate }}">
                                <div class="form-group">
                                    <label for="cname">Categories</label>
                                    <input id="cname" value="{{ $categorie->categories }}" class="form-control" name="name_categorie" minlength="2" type="text">
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
