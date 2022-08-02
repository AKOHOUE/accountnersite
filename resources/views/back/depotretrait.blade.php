@section('title')
  Comptes Clients
  
@endsection


@extends('back.layout.admin')
 
@section('content')


 
    <section class="section">
        <div class="row">
           <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Credit/Debit </h5>

               	<form method="post" action="{{ route('back.depotClient', $user->id) }}">
						@csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom d'Utlisateur</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="username" value="{{$user->username }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Montant(Sommez le montant avec le solde disponible avant d'enregistrer)</label>
                  <div class="col-sm-10">
                   <input type="number" class="form-control" name="solde" value="{{$user->solde }}">
                  </div>
                </div>
               
	                    <a href="{{ route('back.clients') }}" style="margin-right: 10px" class="btn btn-danger">Annuler</a>
						<button class="btn btn-success" type="submit">Enregistrer</button>
              </form><!-- End General Form Elements -->

                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection