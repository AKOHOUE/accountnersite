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
                <h5 class="card-title">Modifier le contactChanger Mot de Passe  de compte Client </h5>

               	<form method="post" action="{{ route('contactsUi.update', $contact->id) }}">
						@csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom Complet</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="name" value="{{$contact->name }}">
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="email" value="{{$contact->email }}">
                  </div>
                </div>
               
                   <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Objet</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="object" value="{{$contact->object }}">
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Message</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" name="message" value="{{$contact->message }}">
                  </div>
                </div>
	                    <a href="{{ route('contactsUi.index') }}" style="margin-right: 10px" class="btn btn-danger">Annuler</a>
						<button class="btn btn-success" type="submit">Enregistrer</button>
              </form><!-- End General Form Elements -->

                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection