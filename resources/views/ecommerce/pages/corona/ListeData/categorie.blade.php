@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Catégorie</h4>
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
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom-js')
    <!-- Custom js for this page-->
    <script src="dashbord/js/data-table.js"></script>
    <!-- End custom js for this page-->
    <script>
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Etes-vous sûr de vouloir supprimer ?", function(confirmed){
                if (confirmed){
                    window.location.href = link;
                }
            });
        });
    </script>
@endsection
