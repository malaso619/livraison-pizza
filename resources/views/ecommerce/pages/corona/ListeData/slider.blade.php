@extends('ecommerce.layouts.dashbord.dash')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slider</h4>
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
                                            <td>
                                                <img id="mm" src="{{ asset('storage/slider/'.$s->image) }}" alt=""/>

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
            var ide= $(this).attr("data-value");
            bootbox.confirm("Etes-vous sûr de vouloir supprimer ?", function(confirmed){
                if (confirmed){
                    window.location.href = link;
                }
            });
        });
    </script>
@endsection
