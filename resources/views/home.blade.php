@include('bs.bootstrap')

<div class="container mt-3">
    <h2> Welcome Back, {{auth()->user()->username}}</h2>
    <a href="/form" class="btn btn-primary"> Go To Form </a>
    <form action="/logout" method="POST">
        @csrf
        <a href="/logout" class="btn btn-danger"> Logout </a>
    </form>
</div>