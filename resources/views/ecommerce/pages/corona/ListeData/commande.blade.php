@extends('ecommerce.layouts.corona.dash')

@section('custom-header')
    <!-- DataTables -->

    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbord/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des Commandes</h3>
        </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Client</th>
                                        <th>Adresse</th>
                                        <th>Panier</th>
                                        <th>Payement id</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Edinburgh</td>
                                        <td>New York</td>
                                        <td>$1500</td>
                                        <td>36</td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
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
