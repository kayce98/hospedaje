<div class="card-header">
    <h3 class="card-title">INGRESE DATOS USUARIO</h3>
</div>

<form method="POST" action="{{ route('user.store') }}">
    @csrf
    @if(!empty(Session::get('person')))
    <div class="form-group row" style="padding-top: 10px;">
        <div class="col-md-6">
            <input id="people_id" type="hidden" class="form-control" name="people_id" value="{{ session('person')->id }}" required>
        </div>
    </div>
    @endif
    <div class="form-group row" style="padding-top: 10px;">
        <label for="username" class="col-md-4 col-form-label text-md-right">Usuario</label>
        <div class="col-md-6">
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }} </label>

        <div class="col-md-6">
            <select name="role_id" id="role_id" class="form-control">
                @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0" style="padding-bottom: 10px;">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>