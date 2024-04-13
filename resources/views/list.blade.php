@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom clusters</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clusters as $cluster)
                        <tr>
                            <td>{{ $cluster->nom }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
