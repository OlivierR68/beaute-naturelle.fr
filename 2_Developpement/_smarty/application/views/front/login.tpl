<form class="form-signin" method="post">
    <div class="text-center my-4">
        <img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="140" height="140">
        <h1 class="h3 mb-3 font-weight-normal">{$TITLE}</h1>
    </div>


    <div class="form-label-group">
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputEmail">Email</label>
    </div>
    <div class="form-label-group">
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
        <label for="inputPassword">Mot de Passe</label>
    </div>

    <input type="hidden" id="token" name="token">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Se Connecter</button>

    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>
