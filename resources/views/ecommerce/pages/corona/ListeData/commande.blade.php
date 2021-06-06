@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Commande</h4>
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
        </div>
    </div>
@endsection


@section('custom-js')
    <!-- Custom js for this page-->
    <script src="dashbord/js/data-table.js"></script>
    <!-- End custom js for this page-->
@endsection
