@extends('ecommerce.layouts.corona.dash')

@section('custom-header')
    <!-- DataTables -->

    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

@endsection


@section('content')

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Catégorie</h4>
                </div>
                <div class="card-body">
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
                                        <th>Nom Catégorie</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $cat)
                                        <tr>
                                            <td>{{ $cat->id_cate - 1 }}</td>
                                            <td>{{ $cat->categories }}</td>
                                            <td>
                                                <button class="btn btn-outline-primary">View</button>
                                                <a id="delete" class="btn btn-outline-danger" href="{{ route('delete_cate',$cat->id_cate) }}">Delete</a>
                                                <a class="btn btn-outline-info" href="{{ route('edit_cate',$cat->id_cate) }}">Update</a>
{{--                                                <button class="btn btn-outline-info" onclick="alert('Mans')">Up</button>--}}
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>


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

