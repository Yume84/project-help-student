@extends('layouts.sign-up')


<div>
    <form wire:submit.prevent="register">

    @if ($currentStep ==1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-black">ÉTAPE 1/6 - Status</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Pourquoi es-tu ici ?</h3>
                            <div class="form-group">
                                <label for="ask_help" class="option">Demander de l'aide</label>
                                <input type="radio" class="form-control" id="ask_help" name="choice" value="ask_help" required wire:model="ask_help">
                                <span class="text-danger">@error('option'){{ $message }}@enderror</span>
                                <br>
                                <label for="propose_help" class="option">Proposer son aide</label>
                                <input type="radio" class="form-control" id="propose_help" name="choice" value="propose_help" required wire:model="propose_help">
                                <span class="text-danger">@error('option'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

@if ($currentStep ==2)
       
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 2/4 - Categories & helps</div>
                <div class="card-body">
                    <h3>Pour quoi as-tu besoin d'aide ?</h3>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="administration" class="category">Administration scolaire</label>
                                <input type="radio" class="form-control" id="administration" name="category" value="administration" required wire:model="administration">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="service_public" class="category">Service public</label>
                                <input type="radio" class="form-control" id="service_public" name="category" value="service_public" required wire:model="service_public">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="both" class="category">Les deux</label>
                                <input type="radio" class="form-control" id="both" name="category" value="both" required wire:model="both">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="idk" class="category">Service public</label>
                                <input type="radio" class="form-control" id="idk" name="category" value="idk" required wire:model="idk">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                            </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h3>Coche les aides dont tu as besoin : </h3>
                                <div class="helps_admin d-flex flex-column align-items-left mt-2">
                        <label for="inscription">
                            <input type="checkbox" id="inscription" value="inscription" wire:model="helps_admin">Inscriptions
                        </label>
                        <label for="bourse">
                            <input type="checkbox" id="bourse" value="bourse" wire:model="helps_admin">Demande de bourse
                        </label>
                        <label for="autre">
                            <input type="checkbox" id="autre" value="autre" wire:model="helps_admin">Autre
                        </label>
                    </div>
                    <span class="text-danger">@error('helps'){{ $message }}@enderror</span>

                    <div class="col-md-6">
                            <div class="form-group">
                                <h3>Coche les aides dont tu as besoin : </h3>
                                <div class="helps_public d-flex flex-column align-items-left mt-2">
                        <label for="visa">
                            <input type="checkbox" id="visa" value="visa" wire:model="helps_public">Renouvellement de visa
                        </label>
                        <label for="caf">
                            <input type="checkbox" id="caf" value="caf" wire:model="helps_public">CAF
                        </label>
                        <label for="ameli">
                            <input type="checkbox" id="ameli" value="ameli" wire:model="helps_public">Ameli
                        </label>
                        <label for="carte_vitale">
                            <input type="checkbox" id="carte_vitale" value="carte_vitale" wire:model="helps_public">Carte vitale
                        </label>
                        <label for="compte_bancaire">
                            <input type="checkbox" id="compte_bancaire" value="compte_bancaire" wire:model="helps_public">Ouverture d'un compte bancaire
                        </label>
                        <label for="demande_logement">
                            <input type="checkbox" id="demande_logement" value="demande_logement" wire:model="helps_public">Demande de logement
                        </label>
                        <label for="assurance_logement">
                            <input type="checkbox" id="assurance_logement" value="assurance_logement" wire:model="helps_public">Assurance logement
                        </label>
                    </div>
                    <span class="text-danger">@error('helps_public'){{ $message }}@enderror</span>

                    <div class="col-md-6">
                            <div class="form-group">
                                <h3>Coche les aides dont tu as besoin : </h3>
                                <div class="helps_public d-flex flex-column align-items-left mt-2">
                                <label for="inscription">
                            <input type="checkbox" id="inscription" value="inscription" wire:model="helps_both">Inscriptions
                        </label>
                        <label for="bourse">
                            <input type="checkbox" id="bourse" value="bourse" wire:model="helps_both">Demande de bourse
                        </label>
                        <label for="autre">
                            <input type="checkbox" id="autre" value="autre" wire:model="helps_both">Autre
                        </label>
                        <label for="visa">
                            <label for="inscription">
                            <input type="checkbox" id="inscription" value="inscription" wire:model="helps_both">Inscriptions
                        </label>
                        <label for="bourse">
                            <input type="checkbox" id="bourse" value="bourse" wire:model="helps_both">Demande de bourse
                        </label>
                        <label for="autre">
                            <input type="checkbox" id="autre" value="autre" wire:model="helps_both">Autre
                        </label>
                            <input type="checkbox" id="visa" value="visa" wire:model="helps_both">Renouvellement de visa
                        </label>
                        <label for="caf">
                            <input type="checkbox" id="caf" value="caf" wire:model="helps_both">CAF
                        </label>
                        <label for="ameli">
                            <input type="checkbox" id="ameli" value="ameli" wire:model="helps_both">Ameli
                        </label>
                        <label for="carte_vitale">
                            <input type="checkbox" id="carte_vitale" value="carte_vitale" wire:model="helps_both">Carte vitale
                        </label>
                        <label for="compte_bancaire">
                            <input type="checkbox" id="compte_bancaire" value="compte_bancaire" wire:model="helps_both">Ouverture d'un compte bancaire
                        </label>
                        <label for="demande_logement">
                            <input type="checkbox" id="demande_logement" value="demande_logement" wire:model="helps_both">Demande de logement
                        </label>
                        <label for="assurance_logement">
                            <input type="checkbox" id="assurance_logement" value="assurance_logement" wire:model="helps_public">Assurance logement
                        </label>
                    </div>
                    <span class="text-danger">@error('helps_both'){{ $message }}@enderror</span>
</div>
</div>
</div>

@endif

@if ($currentStep ==3)


<div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 3/4 - Categories & helps</div>
                <div class="card-body">
                    <h3>En quoi peux-tu aider ?</h3>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="administration" class="category">Administration scolaire</label>
                                <input type="radio" class="form-control" id="administration" name="category" value="administration" required wire:model="administration">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="service_public" class="category">Service public</label>
                                <input type="radio" class="form-control" id="service_public" name="category" value="service_public" required wire:model="service_public">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="both" class="category">Les deux</label>
                                <input type="radio" class="form-control" id="both" name="category" value="both" required wire:model="both">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="idk" class="category">Service public</label>
                                <input type="radio" class="form-control" id="idk" name="category" value="idk" required wire:model="idk">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                            </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h3>Coche les aides auxquelles tu pourras aider : </h3>
                                <div class="helps_admin d-flex flex-column align-items-left mt-2">
                        <label for="inscription">
                            <input type="checkbox" id="inscription" value="inscription" wire:model="helps_admin">Inscriptions
                        </label>
                        <label for="bourse">
                            <input type="checkbox" id="bourse" value="bourse" wire:model="helps_admin">Demande de bourse
                        </label>
                        <label for="autre">
                            <input type="checkbox" id="autre" value="autre" wire:model="helps_admin">Autre
                        </label>
                    </div>
                    <span class="text-danger">@error('helps'){{ $message }}@enderror</span>

                    <div class="col-md-6">
                            <div class="form-group">
                                <h3>Coche les aides dont tu as besoin : </h3>
                                <div class="helps_public d-flex flex-column align-items-left mt-2">
                        <label for="visa">
                            <input type="checkbox" id="visa" value="visa" wire:model="helps_public">Renouvellement de visa
                        </label>
                        <label for="caf">
                            <input type="checkbox" id="caf" value="caf" wire:model="helps_public">CAF
                        </label>
                        <label for="ameli">
                            <input type="checkbox" id="ameli" value="ameli" wire:model="helps_public">Ameli
                        </label>
                        <label for="carte_vitale">
                            <input type="checkbox" id="carte_vitale" value="carte_vitale" wire:model="helps_public">Carte vitale
                        </label>
                        <label for="compte_bancaire">
                            <input type="checkbox" id="compte_bancaire" value="compte_bancaire" wire:model="helps_public">Ouverture d'un compte bancaire
                        </label>
                        <label for="demande_logement">
                            <input type="checkbox" id="demande_logement" value="demande_logement" wire:model="helps_public">Demande de logement
                        </label>
                        <label for="assurance_logement">
                            <input type="checkbox" id="assurance_logement" value="assurance_logement" wire:model="helps_public">Assurance logement
                        </label>
                    </div>
                    <span class="text-danger">@error('helps_public'){{ $message }}@enderror</span>

                    <div class="col-md-6">
                            <div class="form-group">
                                <h3>Coche les aides dont tu as besoin : </h3>
                                <div class="helps_public d-flex flex-column align-items-left mt-2">
                                <label for="inscription">
                            <input type="checkbox" id="inscription" value="inscription" wire:model="helps_both">Inscriptions
                        </label>
                        <label for="bourse">
                            <input type="checkbox" id="bourse" value="bourse" wire:model="helps_both">Demande de bourse
                        </label>
                        <label for="autre">
                            <input type="checkbox" id="autre" value="autre" wire:model="helps_both">Autre
                        </label>
                        <label for="visa">
                            <label for="inscription">
                            <input type="checkbox" id="inscription" value="inscription" wire:model="helps_both">Inscriptions
                        </label>
                        <label for="bourse">
                            <input type="checkbox" id="bourse" value="bourse" wire:model="helps_both">Demande de bourse
                        </label>
                        <label for="autre">
                            <input type="checkbox" id="autre" value="autre" wire:model="helps_both">Autre
                        </label>
                            <input type="checkbox" id="visa" value="visa" wire:model="helps_both">Renouvellement de visa
                        </label>
                        <label for="caf">
                            <input type="checkbox" id="caf" value="caf" wire:model="helps_both">CAF
                        </label>
                        <label for="ameli">
                            <input type="checkbox" id="ameli" value="ameli" wire:model="helps_both">Ameli
                        </label>
                        <label for="carte_vitale">
                            <input type="checkbox" id="carte_vitale" value="carte_vitale" wire:model="helps_both">Carte vitale
                        </label>
                        <label for="compte_bancaire">
                            <input type="checkbox" id="compte_bancaire" value="compte_bancaire" wire:model="helps_both">Ouverture d'un compte bancaire
                        </label>
                        <label for="demande_logement">
                            <input type="checkbox" id="demande_logement" value="demande_logement" wire:model="helps_both">Demande de logement
                        </label>
                        <label for="assurance_logement">
                            <input type="checkbox" id="assurance_logement" value="assurance_logement" wire:model="helps_public">Assurance logement
                        </label>
                    </div>
                    <span class="text-danger">@error('helps_both'){{ $message }}@enderror</span>

                        </div>
                    </div>
                </div>
            </div>        
            @endif

            @if ($currentStep ==4)

            <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 4/ - Langues & niveaux</div>
                <div class="card-body">
            <h3>Quelle(s) langue(s) parles-tu ?</h3>
<div class="language">
    <select name="liste_language" id="liste_language">
        <option value="default">Sélectionne une langue</option>
        @foreach($languages as $language)
            <option value="{{ $language->id }}">{{ $language->label }}</option>
        @endforeach
    </select>
</div>

                <h3>Qeul est ton niveau de français ?</h3>
                <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" wire:model="level">
                                    <option value="" selected>Select level</option>
                                    <option value="a1">A1 : Je débute</option>
                                    <option value="a2">A2 : Je comprends quelques mots</option>
                                    <option value="b1">B1-B2 : Je peux communiquer</option>
                                    <option value="c1">C1-C2 : Je suis à l'aise</option>
                                </select>
                                <span class="text-danger">@error('level'){{ $message }}@enderror</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        @endif

        @if ($currentStep ==5)

        <div class="step-five">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 4/4 - Attachments</div>
                <<h3>Où étudies-tu ?</h3>
<div class="college">
    <select wire:model="college" name="liste_college" id="liste_college">
        <option value="default">Sélectionne un campus</option>
        @foreach($colleges as $college)
            <option value="{{ $college->id }}">{{ $college->name }}</option>
        @endforeach
    </select>
    <span class="text-danger">@error('college'){{ $message }}@enderror</span>

</div>
                    </div>
                </div>
            </div>
        </div>

        @endif

        @if ($currentStep ==6)

        <div class="step-six">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 6/6 - INFOS PERSONNELLES</div>
        <h3>C'est la dernière étape !</h3>
  <div class="cadre">
    <label for="name">Nom<input id="name" type="text" placeholder="Votre nom" wire:model="nom">/></label>
    <span class="text-danger">@error('nom'){{ $message }}@enderror</span>"/></label>
    <label for="pseudo">Pseudo<input id="pseudo" type="text" placeholder="Votre pseudo" wire:model="pseudo">/></label>
    <span class="text-danger">@error('pseudo'){{ $message }}@enderror</span>"/></label>
    <label for="email">Email<input id="email" type="email" placeholder="Votre email"wire:model="email"/></label>
    <span class="text-danger">@error('email'){{ $message }}@enderror</span>"/></label>
    <label for="password">Mot de passe<input id="password" type="password" placeholder="Votre mot de passe" wire:model="password"/></label>
    <span class="text-danger">@error("password_confirm"){{ $message }}@enderror</span>"/></label>
    <label for="password">Confirmez votre mot de passe<input id="password" type="password" placeholder="Confirmez votre mot de passe" wire:model="password_confirm">
    <span class="text-danger">@error('password_confirm'){{ $message }}@enderror</span>"/></label>

  <div class="checkbox">
    <input id="rgpd" type="checkbox" class="checkbox"/>
    <label for="rgpd" class="rgpd">J'accepte les <a href="#" class="rgpd" onclick="openPopup()">conditions d'utilisation</a></label>
  </div>
  @endif

        <div class="action-buttons d-flex justify-content-between bg-blue pt-2 pb-2">

        @if ($currentStep ==1)
            <div></div>
        @endif

        @if ($currentStep ==2 || $currentStep ==3 || $currentStep ==4)
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
        @endif

        @if ($currentStep ==1 || $currentStep ==2 || $currentStep ==3)
            <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
        @endif

        @if ($currentStep ==4)
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
        @endif
    </form>
</div>

