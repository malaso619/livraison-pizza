@extends('ecommerce.layouts.corona.dash')

@section('custom-header')
    <!-- DataTables -->

    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

@endsection


@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des produits</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            @if( Session::has('status') )
                <div class="alert alert-success">
                    {{ Session::get('status') }}
                </div>

            @endif

            <table id="example1" class="table table-bordered table-striped">
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
                            <td width="3%">
                                {{--                                                storeAs('public/uploadsFichierss/ecommerce/imagess',$storeFile)    --}}
                                {{--                                                <img id="mm" src="{{ asset('dashbord/images/noimage.jpg') }}" alt=""/>--}}
                                <img class="img img-circle" id="mm" src="{{ asset('storage/uploadsFichierss/ecommerce/imagess/'.$p->image) }}" alt=""  width="50" height="45">
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


                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Produit</th>
                    <th>Catégories</th>
                    <th>Prix</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>



@endsection

@section('custom-js')


    <!-- DataTables -->
    <script src="{{ asset('dashbord/template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashbord/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashbord/template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashbord/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashbord/js/bootbox.min.js') }}"></script>

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

        $(function () {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });


    </script>




@endsection

