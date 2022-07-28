@extends('frontend.layouts.app')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Ouvrir un compte</h2>
              <p>POUR COMMENCER, ON VOUS OFFRE 80 € 
                Gagnez du temps, ouvrez en ligne votre premier compte bancaire, profitez de 80 € offerts  et rencontrez plus tard votre conseiller en agence.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Espace Client</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Passez à l'action</h3>
              <p>Ouvrir en ligne votre compte bancaire, c'est bénéficier de tous les avantages sans vous déplacer.</p>
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="firstname" class="form-control" placeholder="Prénom" required>
                </div>
                <div class="col-md-6">
                  <input type="text" name="lastname" class="form-control" placeholder="Nom" required>
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            <div class="col-md-6">
                  <input type="text" name="phone" class="form-control" placeholder="Téléphone" required>
                </div>
                      <div class="col-md-6">
                  <input type="file" name="photo" class="form-control" placeholder="Votre photo " required>
                </div>
                <div class="col-md-6">
                  <input type="texcompteSoldet" name="weight" class="form-control" placeholder="Dépôt initial pour ouverture de compte" required>
                </div>

                <div class="col-md-6">
                  <input type="text" name="swift" class="form-control" placeholder="SWIFT" required>
                </div>
     <div class="col-md-6">
                  <input type="text" name="bic" class="form-control" placeholder="BIC" required>
                </div>
                <div class="col-lg-12">
                  <h4>Plus d'informations</h4>
                </div>

                <div class="col-md-12">
                  <input type="text" name="profession" class="form-control" placeholder="Profession" required>
                </div>

                <div class="col-md-12 ">
                  <input type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-12">
                        <select name="country" class="form-control" placeholder="Pays" id="exampleFormControlSelect1">
                                <option>France</option>
                                <option>Canada</option>
                                <option>Espace</option>
                                <option>Turquie</option>
                                <option>Allemangne</option>
                        </select>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="city" placeholder="Vile" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="adresse" placeholder="Adresse" required>
                </div>
                <div class="form-group col-md-12">
                        <select name="genre" class="form-control" placeholder="Sexe" id="exampleFormControlSelect2">
                                <option>Homme</option>
                                <option>Femme</option>
                                <option>Autre</option>
                        </select>
                </div>
                   <div class="col-md-12">
                  <input type="text" class="form-control" name="single" placeholder="Matrimoniale" required>
                </div>
                      <div class="col-md-12">
                  <input type="date" class="form-control" name="birthday" placeholder="Date de naissance" required>
                </div>
                   <div class="col-md-12">
                  <input type="text" class="form-control" name="workCompagny" placeholder="Lieu de travail" required>
                </div>
<div class="col-md-12">
                  <input type="file" class="form-control" name="piece" placeholder="Pièce d'identité" required>
                </div>
                 <div class="form-group col-md-12">
                        <select name="typePiece" class="form-control" placeholder="Type de la pièce" id="exampleFormControlSelect3">
                                <option>Passport</option>
                                <option>CNI</option>
                        </select>
                </div>
                   
                <div class="col-md-12">
                  <textarea class="form-control" name="others" rows="6" placeholder="Autres détails" required></textarea>
                </div>
 <div class="col-md-12">
                  <input type="password" class="form-control" name="password" placeholder="Mot de passse" required>
                </div>
                   <div class="col-md-12">
                  <input type="password" class="form-control" name="passwordComfirm" placeholder="Confirmation du mot de passe" required>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Clargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Compte ouvert avec succès !</div>

                  <button type="submit">Ouvrir le ompte </button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  
  @endsection