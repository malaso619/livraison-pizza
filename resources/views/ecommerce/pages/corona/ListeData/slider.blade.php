@extends('ecommerce.layouts.corona.dash')

@section('custom-header')
    <!-- DataTables -->

    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

@endsection


@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Slider</h4>
        </div>
                <div class="card-body">
                        <div class="col-12">
                            @if( Session::has('status') )
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre Slider</th>
                                        <th>Description Slider</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($slider as $s)
                                        <tr>
                                            <td>{{ $s->id_slider - 1  }}</td>
                                            <td>{{ $s->titre  }}</td>
                                            <td>{{ $s->description  }}</td>
                                            <td width="4%">
                                                <img id="mm" class="img img-circle" src="{{ asset('storage/slider/'.$s->image) }}" alt="" width="50" height="45" />

                                            </td>

                                            <td>
                                                @if($s->status==1)
                                                    <label class="badge badge-success">Activé</label>
                                                @else
                                                    <label class="badge badge-danger">Desactivé</label>
                                                @endif

                                            </td>
                                            <td>
                                                <button class="btn btn-outline-primary">View</button>
                                                <a id="delete" class="btn btn-outline-danger" href="{{ route('deleted_slider',$s->id_slider) }}">Delete</a>
                                                <a class="btn btn-outline-info" href="{{ route('edit_slider',$s->id_slider) }}">Update</a>
                                                @if($s->status==1)
                                                    <a class="btn btn-outline-danger" href="{{ route('desactiver',$s->id_slider) }}">Desactiver</a>

                                                @else

                                                    <a class="btn btn-outline-success" href="{{ route('activer',$s->id_slider) }}">Activer</a>

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
            $('#order-listing').DataTable({
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
