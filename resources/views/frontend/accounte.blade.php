@section('title')
  Compte
  
@endsection
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
            <li><a href="{{ route('front.home') }}">Accueil</a></li>
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
            		<form id="SignupForm" action="{{ route('front.customRegistration') }}" method="post" enctype="multipart/form-data" class="php-email-form">
			            @csrf
                  @if($errors->all())
                  <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Erreur dans les informations</strong>
                  @endif
                  @if(Session::has('success'))
                  <strong style="color: ##02b320; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Votre compte est activé</strong>
                  @endif
              <h3>Passez à l'action</h3>
              <p>Ouvrir en ligne votre compte bancaire, c'est bénéficier de tous les avantages sans vous déplacer.</p>
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="firstname" class="form-control" placeholder="Prénom" value="{{ old('firstname') }}" >
                      @if($errors->has('firstname'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('firstname') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                  <input type="text" name="lastname" class="form-control" placeholder="Nom" value="{{ old('lastname') }}" >

                      @if($errors->has('lastname'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('lastname') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>

                        @if($errors->has('email'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            <div class="col-md-6">
                  <input type="text" name="phone" class="form-control" placeholder="Téléphone" value="{{ old('phone') }}" required>

                       @if($errors->has('phone'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                   <span for="photo">Choisir photo votre  d'identité</span>
                  <input type="file" accept="image/*" name="photo" class="form-control" placeholder="Votre photo d'identité" required>
                  @if($errors->has('photo'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('photo') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                                  <span for="compteSolde">Montant initial au moins 10$</span>
                  <input type="number" name="compteSolde" class="form-control" value="{{ old('compteSolde') }}" placeholder="Dépôt initial pour ouverture de compte" required>
                   @if($errors->has('compteSolde'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('compteSolde') }}</div>
                    @endif
                </div>
 
  
                <div class="col-lg-12">
                  <h4>Plus d'informations</h4>
                </div>

                <div class="col-md-12">
                  <input type="text" name="profession" class="form-control" value="{{ old('profession') }}" placeholder="Profession" required>
                      @if($errors->has('profession'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('profession') }}</div>
                    @endif
                </div>

                <div class="form-group col-md-12">
                                                            <label for="country">Pays</label>

                    
                        <select name="country" class="form-control" placeholder="Pays" id="exampleFormControlSelect94">


            <option value="0" label="Sélectionner votre pays  ... " selected="selected">Sélectionner votre pays  ... </option>
            <optgroup id="country-optgroup-Africa" label="Africa">
                        <option value="DZ   Algeria">Algeria</option>
            <option value="AO   Angola">Angola</option>
            <option value="BJ   Benin">Benin</option>
            <option value="BW   Botswana">Botswana</option>
            <option value="BF   Burkina Faso">Burkina Faso</option>
            <option value="BI   Burundi">Burundi</option>
            <option value="CM   Cameroon">Cameroon</option>
            <option value="CV   Cape Verde">Cape Verde</option>
            <option value="CF   Central African Republic">Central African Republic</option>
            <option value="TD   Chad">Chad</option>
            <option value="KM   Comoros">Comoros</option>
            <option value="CG   Congo - Brazzaville">Congo - Brazzaville</option>
            <option value="CD   Congo - Kinshasa">Congo - Kinshasa</option>
            <option value="CI   Côte d’Ivoire">Côte d’Ivoire</option>
            <option value="DJ   Djibouti">Djibouti</option>
            <option value="EG   Egypt">Egypt</option>
            <option value="GQ   Equatorial Guinea">Equatorial Guinea</option>
            <option value="ER   Eritrea">Eritrea</option>
            <option value="ET   Ethiopia">Ethiopia</option>
            <option value="GA   Gabon">Gabon</option>
            <option value="GM   Gambia">Gambia</option>
            <option value="GH   Ghana">Ghana</option>
            <option value="GN   Guinea">Guinea</option>
            <option value="GW   Guinea-Bissau">Guinea-Bissau</option>
            <option value="KE   Kenya">Kenya</option>
            <option value="LS   Lesotho">Lesotho</option>
            <option value="LR   Liberia">Liberia</option>
            <option value="LY   Libya">Libya</option>
            <option value="MG   Madagascar">Madagascar</option>
            <option value="MW   Malawi">Malawi</option>
            <option value="ML   Mali">Mali</option>
            <option value="MR   Mauritania">Mauritania</option>
            <option value="MU   Mauritius">Mauritius</option>
            <option value="YT   Mayotte">Mayotte</option>
            <option value="MA   Morocco">Morocco</option>
            <option value="MZ   Mozambique">Mozambique</option>
            <option value="NA   Namibia">Namibia</option>
            <option value="NE   Niger">Niger</option>
            <option value="NG   Nigeria">Nigeria</option>
            <option value="RW   Rwanda">Rwanda</option>
            <option value="RE   Réunion">Réunion</option>
            <option value="SH   Saint Helena">Saint Helena</option>
            <option value="SN   Senegal">Senegal</option>
            <option value="SC   Seychelles">Seychelles</option>
            <option value="SL   Sierra Leone">Sierra Leone</option>
            <option value="SO   Somalia">Somalia</option>
            <option value="ZA   South Africa">South Africa</option>
            <option value="SD   Sudan">Sudan</option>
            <option value="SZ   Swaziland">Swaziland</option>
            <option value="ST   São Tomé and Príncipe">São Tomé and Príncipe</option>
            <option value="TZ   Tanzania">Tanzania</option>
            <option value="TG   Togo">Togo</option>
            <option value="TN   Tunisia">Tunisia</option>
            <option value="UG   Uganda">Uganda</option>
            <option value="EH   Western Sahara">Western Sahara</option>
            <option value="ZM   Zambia">Zambia</option>
            <option value="ZW   Zimbabwe">Zimbabwe</option>
        </optgroup>
        <optgroup id="country-optgroup-Americas" label="Americas">
           <option value="AI  Anguilla">Anguilla</option>
          <option value="AG  Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="AR  Argentina">Argentina</option>
          <option value="AW  Aruba">Aruba</option>
          <option value="BS  Bahamas">Bahamas</option>
          <option value="BB  Barbados">Barbados</option>
          <option value="BZ  Belize">Belize</option>
          <option value="BM  Bermuda">Bermuda</option>
          <option value="BO  Bolivia">Bolivia</option>
          <option value="BR  Brazil">Brazil</option>
          <option value="VG  British Virgin Islands">British Virgin Islands</option>
          <option value="CA  Canada">Canada</option>
          <option value="KY  Cayman Islands">Cayman Islands</option>
          <option value="CL  Chile">Chile</option>
          <option value="CO  Colombia">Colombia</option>
          <option value="CR  Costa Rica">Costa Rica</option>
          <option value="CU  Cuba">Cuba</option>
          <option value="DM  Dominica">Dominica</option>
          <option value="DO  Dominican Republic">Dominican Republic</option>
          <option value="EC  Ecuador">Ecuador</option>
          <option value="SV  El Salvador">El Salvador</option>
          <option value="FK  Falkland Islands">Falkland Islands</option>
          <option value="GF  French Guiana">French Guiana</option>
          <option value="GL  Greenland">Greenland</option>
          <option value="GD  Grenada">Grenada</option>
          <option value="GP  Guadeloupe">Guadeloupe</option>
          <option value="GT  Guatemala">Guatemala</option>
          <option value="GY  Guyana">Guyana</option>
          <option value="HT  Haiti">Haiti</option>
          <option value="HN  Honduras">Honduras</option>
          <option value="JM  Jamaica">Jamaica</option>
          <option value="MQ  Martinique">Martinique</option>
          <option value="MX  Mexico">Mexico</option>
          <option value="MS  Montserrat">Montserrat</option>
          <option value="AN  Netherlands Antilles">Netherlands Antilles</option>
          <option value="NI  Nicaragua">Nicaragua</option>
          <option value="PA  Panama">Panama</option>
          <option value="PY  Paraguay">Paraguay</option>
          <option value="PE  Peru">Peru</option>
          <option value="PR  Puerto Rico">Puerto Rico</option>
          <option value="BL  Saint Barthélemy">Saint Barthélemy</option>
          <option value="KN  Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="LC  Saint Lucia">Saint Lucia</option>
          <option value="MF  Saint Martin">Saint Martin</option>
          <option value="PM  Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
          <option value="VC  Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
          <option value="SR  Suriname">Suriname</option>
          <option value="TT  Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="TC  Turks and Caicos Islands">Turks and Caicos Islands</option>
          <option value="VI  U.S. Virgin Islands">U.S. Virgin Islands</option>
          <option value="US  United States">United States</option>
          <option value="UY  Uruguay">Uruguay</option>
          <option value="VE  Venezuela">Venezuela</option>
          </optgroup>
        <optgroup id="country-optgroup-Asia" label="Asia">
           <option value="AF Afghanistan">Afghanistan</option>
            <option value="AM Armenia">Armenia</option>
            <option value="AZ Azerbaijan">Azerbaijan</option>
            <option value="BH Bahrain">Bahrain</option>
            <option value="BD Bangladesh">Bangladesh</option>
            <option value="BT Bhutan">Bhutan</option>
            <option value="BN Brunei">Brunei</option>
            <option value="KH Cambodia">Cambodia</option>
            <option value="CN China">China</option>
            <option value="GE Georgia">Georgia</option>
            <option value="HK Hong Kong SAR China">Hong Kong SAR China</option>
            <option value="IN India">India</option>
            <option value="ID Indonesia">Indonesia</option>
            <option value="IR Iran">Iran</option>
            <option value="IQ Iraq">Iraq</option>
            <option value="IL Israel">Israel</option>
            <option value="JP Japan">Japan</option>
            <option value="JO Jordan">Jordan</option>
            <option value="KZ Kazakhstan">Kazakhstan</option>
            <option value="KW Kuwait">Kuwait</option>
            <option value="KG Kyrgyzstan">Kyrgyzstan</option>
            <option value="LA Laos">Laos</option>
            <option value="LB Lebanon">Lebanon</option>
            <option value="MO Macau SAR China">Macau SAR China</option>
            <option value="MY Malaysia">Malaysia</option>
            <option value="MV Maldives">Maldives</option>
            <option value="MN Mongolia">Mongolia</option>
            <option value="MM Myanmar [Burma]">Myanmar [Burma]</option>
            <option value="NP Nepal">Nepal</option>
            <option value="NT Neutral Zone">Neutral Zone</option>
            <option value="KP North Korea">North Korea</option>
            <option value="OM Oman">Oman</option>
            <option value="PK Pakistan">Pakistan</option>
            <option value="PS Palestinian Territories">Palestinian Territories</option>
            <option value="YD People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
            <option value="PH Philippines">Philippines</option>
            <option value="QA Qatar">Qatar</option>
            <option value="SA Saudi Arabia">Saudi Arabia</option>
            <option value="SG Singapore">Singapore</option>
            <option value="KR South Korea">South Korea</option>
            <option value="LK Sri Lanka">Sri Lanka</option>
            <option value="SY Syria">Syria</option>
            <option value="TW Taiwan">Taiwan</option>
            <option value="TJ Tajikistan">Tajikistan</option>
            <option value="TH Thailand">Thailand</option>
            <option value="TL Timor-Leste">Timor-Leste</option>
            <option value="TR Turkey">Turkey</option>
            <option value="TM Turkmenistan">Turkmenistan</option>
            <option value="AE United Arab Emirates">United Arab Emirates</option>
            <option value="UZ Uzbekistan">Uzbekistan</option>
            <option value="VN Vietnam">Vietnam</option>
            <option value="YE Yemen">Yemen</option>
        </optgroup>
        <optgroup id="country-optgroup-Europe" label="Europe">
           <option value="AL  Albania">Albania</option>
            <option value="AD  Andorra">Andorra</option>
            <option value="AT  Austria">Austria</option>
            <option value="BY  Belarus">Belarus</option>
            <option value="BE  Belgium">Belgium</option>
            <option value="BA  Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="BG  Bulgaria">Bulgaria</option>
            <option value="HR  Croatia">Croatia</option>
            <option value="CY  Cyprus">Cyprus</option>
            <option value="CZ  Czech Republic">Czech Republic</option>
            <option value="DK  Denmark">Denmark</option>
            <option value="DD  East Germany">East Germany</option>
            <option value="EE  Estonia">Estonia</option>
            <option value="FO  Faroe Islands">Faroe Islands</option>
            <option value="FI  Finland">Finland</option>
            <option value="FR  France">France</option>
            <option value="DE  Germany">Germany</option>
            <option value="GI  Gibraltar">Gibraltar</option>
            <option value="GR  Greece">Greece</option>
            <option value="GG  Guernsey">Guernsey</option>
            <option value="HU  Hungary">Hungary</option>
            <option value="IS  Iceland">Iceland</option>
            <option value="IE  Ireland">Ireland</option>
            <option value="IM  Isle of Man">Isle of Man</option>
            <option value="IT  Italy">Italy</option>
            <option value="JE  Jersey">Jersey</option>
            <option value="LV  Latvia">Latvia</option>
            <option value="LI  Liechtenstein">Liechtenstein</option>
            <option value="LT  Lithuania">Lithuania</option>
            <option value="LU  Luxembourg">Luxembourg</option>
            <option value="MK  Macedonia">Macedonia</option>
            <option value="MT  Malta">Malta</option>
            <option value="FX  Metropolitan France">Metropolitan France</option>
            <option value="MD  Moldova">Moldova</option>
            <option value="MC  Monaco">Monaco</option>
            <option value="ME  Montenegro">Montenegro</option>
            <option value="NL  Netherlands">Netherlands</option>
            <option value="NO  Norway">Norway</option>
            <option value="PL  Poland">Poland</option>
            <option value="PT  Portugal">Portugal</option>
            <option value="RO  Romania">Romania</option>
            <option value="RU  Russia">Russia</option>
            <option value="SM  San Marino">San Marino</option>
            <option value="RS  Serbia">Serbia</option>
            <option value="CS  Serbia and Montenegro">Serbia and Montenegro</option>
            <option value="SK  Slovakia">Slovakia</option>
            <option value="SI  Slovenia">Slovenia</option>
            <option value="ES  Spain">Spain</option>
            <option value="SJ  Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="SE  Sweden">Sweden</option>
            <option value="CH  Switzerland">Switzerland</option>
            <option value="UA  Ukraine">Ukraine</option>
            <option value="SU  Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
            <option value="GB  United Kingdom">United Kingdom</option>
            <option value="VA  Vatican City">Vatican City</option>
            <option value="AX  Åland Islands">Åland Islands</option>
        </optgroup>
        <optgroup id="country-optgroup-Oceania" label="Oceania">
            <option value="AS  American Samoa">American Samoa</option>
              <option value="AQ  Antarctica">Antarctica</option>
              <option value="AU  Australia">Australia</option>
              <option value="BV  Bouvet Island">Bouvet Island</option>
              <option value="IO  British Indian Ocean Territory">British Indian Ocean Territory</option>
              <option value="CX  Christmas Island">Christmas Island</option>
              <option value="CC  Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
              <option value="CK  Cook Islands">Cook Islands</option>
              <option value="FJ  Fiji">Fiji</option>
              <option value="PF  French Polynesia">French Polynesia</option>
              <option value="TF  French Southern Territories">French Southern Territories</option>
              <option value="GU  Guam">Guam</option>
              <option value="HM  Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
              <option value="KI  Kiribati">Kiribati</option>
              <option value="MH  Marshall Islands">Marshall Islands</option>
              <option value="FM  Micronesia">Micronesia</option>
              <option value="NR  Nauru">Nauru</option>
              <option value="NC  New Caledonia">New Caledonia</option>
              <option value="NZ  New Zealand">New Zealand</option>
              <option value="NU  Niue">Niue</option>
              <option value="NF  Norfolk Island">Norfolk Island</option>
              <option value="MP  Northern Mariana Islands">Northern Mariana Islands</option>
              <option value="PW  Palau">Palau</option>
              <option value="PG  Papua New Guinea">Papua New Guinea</option>
              <option value="PN  Pitcairn Islands">Pitcairn Islands</option>
              <option value="WS  Samoa">Samoa</option>
              <option value="SB  Solomon Islands">Solomon Islands</option>
              <option value="GS  South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
              <option value="TK  Tokelau">Tokelau</option>
              <option value="TO  Tonga">Tonga</option>
              <option value="TV  Tuvalu">Tuvalu</option>
              <option value="UM  U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
              <option value="VU  Vanuatu">Vanuatu</option>
              <option value="WF  Wallis and Futuna">Wallis and Futuna</option>
        </optgroup>
    </select>
                </div>

                 <div class="form-group col-md-12">
                                                             <label for="typeCompte">Type de compte</label>

                        <select name="typeAccounte" class="form-control" placeholder="Type de compte" id="exampleFormControlSelect8">
                                <option value="Epargne">Epargne</option>
                                <option value="Courant">Courant</option>
                        </select>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('city') }}" name="city" placeholder="Ville" required>
                    @if($errors->has('city'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('city') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('adresse') }}" name="adresse" placeholder="Adresse" required>
                    @if($errors->has('adresse'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('adresse') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                                                            <label for="genre">Sexe</label>

                        <select name="genre" class="form-control" placeholder="Sexe" id="exampleFormControlSelect2">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Autre">Autre</option>
                        </select>
                </div>
                 <div class="form-group col-md-12">
                                                             <label for="devise">Devise</label>

                        <select name="devise" class="form-control" placeholder="Devise" id="exampleFormControlSelect9">
                                                <option value="Euro">Euro</option>
                                                <option value="Dollar_Americain">Dollar Américain</option>
                                                <option value="Dollar_Australien">Dollar Australien</option>
                                                <option value="Dollar_Canadien">Dollar Canadien</option>
                                                <option value="Livre_Sterling">Livre Sterling</option>
                                                <option value="Franc_Suisse">Franc Suisse</option>   
                        </select>


                        
                </div>
                   <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('single') }}" name="single" placeholder="Matrimoniale" required>
                    @if($errors->has('single'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('single') }}</div>
                    @endif
                </div>
                      <div class="col-md-12">
                  <input type="date" class="form-control" value="{{ old('birthday') }}" name="birthday" placeholder="Date de naissance" required>
                    @if($errors->has('birthday'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('birthday') }}</div>
                    @endif
                </div>
                   <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('workCompagny') }}" name="workCompagny" placeholder="Lieu de travail" required>
                    @if($errors->has('workCompagny'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('workCompagny') }}</div>
                    @endif
                </div>
                     <div class="col-md-12">
                  <input type="text" class="form-control" value="{{ old('charge') }}" name="charge" placeholder="Charge(Nombre d'enfants, femmes ,etc et diverses charges)" required>
                    @if($errors->has('charge'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('charge') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                 <span for="piece">Choisir le fichier de votre pièce d'identité valide(Passport ou Carte Nationale d'Identité)</span>
                  <input type="file" class="form-control" value="{{ old('piece') }}" accept="image/*" name="piece" placeholder="Pièce d'identité valide" required>
                    @if($errors->has('piece'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('piece') }}</div>
                    @endif
                </div>
                 <div class="form-group col-md-12">
                        <label for="typePiece">Type de la pièce d'identité</label>

                        <select name="typePiece" class="form-control" placeholder="Type de la pièce" id="exampleFormControlSelect3">
                                <option value="Passport">Passport</option>
                                <option value="CNI">CNI</option>
                        </select>
                </div>
                   
                <div class="col-md-12">
                  <textarea class="form-control" name="others" value="{{ old('others') }}" rows="6" placeholder="Autres détails" required></textarea>
                    @if($errors->has('others'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('others') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control"  name="password" value="{{ old('password') }}" placeholder="Mot de passse" required>
                    @if($errors->has('password'))
                        <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control" name="password_confirmation"  value="{{ old('password_confirmation') }}" placeholder="Confirmation du mot de passe" required>
                @if($errors->has('password_confirmation'))
                    <div class="alert alert-danger" role="alert">{{ $errors->first('password_confirmation') }}</div>
                 @endif
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Compte ouvert avec succès !</div>

                  <button type="submit" name="SaveAccount">Ouvrir mon ompte </button>
                    Vous avez deja un compte ?
                      <button class="btn btn-primary" style="color:white"> <a  style="color:white" href="{{ route('front.login') }}">Connectez-vous</a></button>
                     
                </div>

              </div>
                    
            </form>
       
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  
  @endsection