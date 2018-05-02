@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meal</div>

                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Description</td>
                        <td>Photo</td>
                        <td>Quantité en stock</td>
                        <td>Prix d'achat</td>
                        <td>Prix de vente</td>
                        <td>Taux de TVA</td>
                        <td>ID Restaurant</td>
                        <td>ID User</td>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($meals as $key => $value)
                        <tr>

                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->photo }}</td>
                            <td>{{ $value->quantityInStock }}</td>
                            <td>{{ $value->buyPrice }}</td>
                            <td>{{ $value->salePrice }}</td>
                            <td>{{ $value->tauxTVA }}</td>
                            <td>{{ $value->restaurant_id }}</td>
                            <td>{{ $value->user_id }}</td>



                            <!-- we will also add show, edit, and delete buttons -->
                            <td>

                                <!-- delete the meal (uses the destroy method DESTROY /meals/{id} -->
                                <!-- we will add this later since its a little more complicated than the other two buttons -->

                                <!-- show the meal (uses the show method found at GET /meals/{id} -->
                                <a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Meal</a>

                                <!-- edit this meal (uses the edit method found at GET /meals/{id}/edit -->
                                <a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Meal</a>

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
@endsection