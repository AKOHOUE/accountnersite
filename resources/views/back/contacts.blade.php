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
                <h5 class="card-title">Contacts</h5>
 
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">Nom Complet</th>
                         <th scope="col">Email</th>

                        <th scope="col">Objet</th>
                        <th scope="col">Message</th>

                   
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $contact)
                       
                     <tr>
                        <td> {{ $contact->name}}</td>
                        <td> {{ $contact->email}}</td>
                        <td> {{ $contact->object}}</td>
                        <td> {{ $contact->message}}</td>
                  
                         <td>
                       

                         </td>

                      </tr>
                      @endforeach
               
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
      </div>
    </section> 
@endsection