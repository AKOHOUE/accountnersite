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
                <h5 class="card-title">Détail </h5>

               <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Type Opération</label>
                  <div class="col-sm-10">
                     {{$ops->typeOperation }}
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Montant</label>
                  <div class="col-sm-10">
                    {{$ops->montant }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Montant de Virement</label>
                  <div class="col-sm-10">
                  {{$ops->montantVire }}
                   </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Montant de Depot</label>
                  <div class="col-sm-10">
                    {{$ops->montantDepot }}
                  </div>
                </div>
           
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Raison de l'opération</label>
                  <div class="col-sm-10">
                  {{$ops->raison }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Bénéficiaire/Receveur</label>
                  <div class="col-sm-10">
                      {{$ops->receveur }}
                  </div>
                </div>
              
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Support</label>
                  <div class="col-sm-10">
                      {{$ops->support }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Code1</label>
                  <div class="col-sm-10">
                      {{$ops->code1 }}
                  </div>
                </div>  

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Code2</label>
                  <div class="col-sm-10">
                      {{$ops->code2 }}
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Code3	</label>
                  <div class="col-sm-10">
                      {{$ops->code3 }}
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Pourcentage</label>
                  <div class="col-sm-10">
                      {{$ops->percentage }}
                  </div>
                </div>  

                
              </form><!-- End General Form Elements -->


                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection