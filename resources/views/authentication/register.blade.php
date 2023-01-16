@include('bs.bootstrap')
<form action="/register" method="POST">
    @csrf
    <div class="container col-md-4 mt-5 p-2">
        <h2 class="d-flex justify-content-center"> Start Your Day </h2>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary"> Login </button>
        </div>
    </div>
</form>