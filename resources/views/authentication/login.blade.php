@include('bs.bootstrap')
<form action="/login" method="POST">
    @csrf
    <div class="container col-md-4 mt-5 p-2">
        <h2 class="d-flex justify-content-center"> Begin Your Day </h2>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username">
            @error('username')
            <div class="invalid-feedback">
                Bro, Just Insert Any Name
              </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control  @error('password')is-invalid @enderror" name="password" id="password">
            @error('password')
            <div class="invalid-feedback">
                Forgor Passwor?
              </div>
            @enderror
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary"> Login </button>
        </div>
    </div>
</form>