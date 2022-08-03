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
                <h5 class="card-title">Détail du Contact </h5>

               <form>
             
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Nom complet</label>
                  <div class="col-sm-10">
                      {{$contact->name }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                      {{$contact->email	 }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Objet</label>
                  <div class="col-sm-10">
                      {{$contact->objet	 }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Message</label>
                  <div class="col-sm-10">
                      {{$contact->message	 }}
                  </div>
                </div>
              </form><!-- End General Form Elements -->


                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection