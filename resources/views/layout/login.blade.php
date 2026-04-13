@section('contenu')
    <div class="row" style="min-height:100vh;display:flex;align-items:center;justify-content:center;">
        <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="panel pn" style="padding:30px;border-radius:10px;box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
                <h3 class="text-center-mb-4"><i class="fa fa-book"></i>Connexion</h3>

                <form action="{{ route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>

                    <div class="checkbox">
                        <label for="">
                            <input type="checkbox" name="remember">Se souvenir de moi
                        </label>
                    </div>
                    <button class="btn btn-theme btn-block"><i class="fa fa-lock"></i>Se connecter</button>

                    @if($errors->any())
                    <div class="alert alert-danger mt-3">
                        {{ $errors->first()}}
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
