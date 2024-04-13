{{-- @extends('welcome')


@section('content')
<div class="container" style="margin: 5%">

    <div class="row justify-content-center">
        <div class="col-8">
    
            <div class="card">
                <div class="card-header">Nouveau Cluster</div>
                <div class="card-body">
                    <form action= "{{ route('cluster.store') }}" method="POST">
                   
                        @csrf
                       
                
                            <div class="card-body row justify-content-">
                               
                                <div class="col-12 champs">
                                    <label for="filliere_id "  class="champs2">Filiere</label>
                                    <select name="filliere_id" id="filliere_id" class="form-control" required>
                                        <option value="">Sélectionner une filliere</option>
                                        @foreach ($filieres as $filliere)
                                            <option value="{{ $filliere->idFiliere }}">{{ $filliere->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 champs">
                                    <div class="row ">
                                        <div class="col-6">
                                            <label for="departement_id "  class="champs2">Departement</label>
                                            <select name="departement_id" id="departement_id" class="form-control" >
                                                <option value="">Sélectionner un departement</option>
                                                @foreach ($departements as $departement)
                                                    <option value="{{ $departement->idDepartement }}">{{ $departement->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="commune_id "  class="champs2">Commune</label>
                                            <select name="commune_id" id="commune_id" class="form-control">
                                                <option value="">Sélectionner une Commune</option>
                                                @foreach ($communes as $commune)
                                                    <option value="{{ $commune->idCommune }}">{{ $commune->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                <div class="col-12 champs ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="arrondissement_id "  class="champs2">Arrondissement</label>
                                            
                                            <select name="arrondissement_id" id="arrondissement_id" class="form-control" >
                                                <option value="">Sélectionner un arrondissement</option>
                                                @foreach ($arrondissements as $arrondissement)
                                                    <option value="{{ $arrondissement->idArrondissement }}">{{ $arrondissement->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6 ">
                                            <label for="village_id " class="champs2">Village</label>
                                            <select name="village_id" id="village_id" class="form-control" required>
                                                <option value="">Sélectionner un village</option>
                                                @foreach ($villages as $village)
                                                    <option value="{{ $village->idVillage }}">{{ $village->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="col-12 champs">
                                    <label for="nom" class="champs2">Nom du cluster</label>
                                    <input type="text" name="nom" id="nom" class="form-control" required />
                                </div>
                                
                                <div class="col-12 champs">
                                    <div class="row">
                                        <div class="col-6">
                                             <button type="button" class="btn1">Annuler</button>
                                             <button type="submit" class="btn2">Enregistrer</button>
                                        </div>
                                       
                                    </div>
                                </div>
                            
                            </div>
                           
                     
                    </form>
                </div>
            </div>
            
        </div>
    </div>
 

 
   
</div> 

@endsection --}}

@extends('welcome')

@section('content')
<div class="container" style="margin: 5%">

    <div class="row justify-content-center">
        <div class="col-8">
    
            <div class="card">
                <div class="card-header">Nouveau Cluster</div>
                <div class="card-body">
                    <form action= "{{ route('cluster.store') }}" method="POST">
                        @csrf

                        <div class="card-body row justify-content-">
                            <div class="col-12 champs">
                                <label for="filliere_id" class="champs2">Filiere</label>
                                <select name="filliere_id" id="filliere_id" class="form-control" required>
                                    <option value="">Sélectionner une filliere</option>
                                    @foreach ($filieres as $filliere)
                                        <option value="{{ $filliere->idFiliere }}">{{ $filliere->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 champs">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="departement_id" class="champs2">Département</label>
                                        <select name="departement_id" id="departement_id" class="form-control">
                                            <option value="">Sélectionner un département</option>
                                            @foreach ($departements as $departement)
                                                <option value="{{ $departement->idDepartement }}">{{ $departement->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="commune_id" class="champs2">Commune</label>
                                        <select name="commune_id" id="commune_id" class="form-control">
                                            <option value="">Sélectionner une Commune</option>
                                            <!-- Options des communes seront chargées dynamiquement -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 champs ">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="arrondissement_id "  class="champs2">Arrondissement</label>
                                        
                                        <select name="arrondissement_id" id="arrondissement_id" class="form-control" >
                                            <option value="">Sélectionner un arrondissement</option>
                                            @foreach ($arrondissements as $arrondissement)
                                                <option value="{{ $arrondissement->idArrondissement }}">{{ $arrondissement->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6 ">
                                        <label for="village_id " class="champs2">Village</label>
                                        <select name="village_id" id="village_id" class="form-control" required>
                                            <option value="">Sélectionner un village</option>
                                            @foreach ($villages as $village)
                                                <option value="{{ $village->idVillage }}">{{ $village->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-12 champs">
                                <label for="nom" class="champs2">Nom du cluster</label>
                                <input type="text" name="nom" id="nom" class="form-control" required />
                            </div>
                            <div class="col-12 champs">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn1">Annuler</button>
                                        <button type="submit" class="btn2">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#departement_id').change(function() {
            var departementId = $(this).val();
            if (departementId) {
                $.ajax({
                    type: 'GET',
                    url: '/get_communes/' + departementId,
                    success: function(data) {
                        $('#commune_id').empty();
                        $('#commune_id').append('<option value="">Sélectionner une Commune</option>');
                        $.each(data, function(key, value) {
                            $('#commune_id').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#commune_id').empty();
                $('#commune_id').append('<option value="">Sélectionner une Commune</option>');
            }
        });
    });
</script>
t>

@endsection
