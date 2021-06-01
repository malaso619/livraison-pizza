@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Produits</h4>
                    <div class="row">
                        <div class="col-12">
                            @if( Session::has('status') )
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>

                            @endif
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Produit</th>
                                        <th>Catégories</th>
                                        <th>Prix</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prod as $p)
                                        <tr>
                                            <td>{{ $p->id_prod - 1 }}</td>
                                            <td>{{ $p->produits_name }}</td>
                                            <td>{{ $p->categories }}</td>
                                            <td>{{ number_format($p->prix , 2, ',', ' ')}} Ar</td>
                                            <td>
{{--                                                storeAs('public/uploadsFichierss/ecommerce/imagess',$storeFile)    --}}
{{--                                                <img id="mm" src="{{ asset('dashbord/images/noimage.jpg') }}" alt=""/>--}}
                                                <img id="mm" src="{{ asset('storage/uploadsFichierss/ecommerce/imagess/'.$p->image) }}" alt=""/>
                                            </td>
                                            <td>
                                                @if($p->status==1)
                                                    <label class="badge badge-success">Activé</label>
                                                @else
                                                    <label class="badge badge-danger">Desactivé</label>
                                                @endif

                                            </td>
                                            <td>
                                                <button class="btn btn-outline-primary">View</button>
                                                <a id="delete" class="btn btn-outline-danger" href="{{ route('delete_prod',$p->id_prod) }}">Delete</a>
                                                <a class="btn btn-outline-info" href="{{ route('edit_prod',$p->id_prod) }}">Update</a>
                                                @if($p->status==1)
                                                    <a class="btn btn-outline-danger" href="{{ route('desactive_prod',$p->id_prod) }}">Desactiver</a>

                                                @else

                                                    <a class="btn btn-outline-success" href="{{ route('active_prod',$p->id_prod) }}">Activer</a>

                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <!-- Custom js for this page-->
    <script src="dashbord/js/data-table.js"></script>
    <!-- End custom js for this page-->

    {{--    <script>--}}
    {{--        $(document).ready(function(){--}}
    {{--            var link = $('#mm').attr("src");--}}
    {{--            alert(link)--}}
    {{--        })--}}
    {{--    </script>--}}

    <script>
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            var ide= $(this).attr("data-value");
            bootbox.confirm("Etes-vous sûr de vouloir supprimer ?", function(confirmed){
                if (confirmed){
                    window.location.href = link;
                }
            });
        });
    </script>
@endsection

