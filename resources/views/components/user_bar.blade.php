<div class="d-flex bg-black text-white align-items-center justify-content-between p-3">
    <div>
        Username: <strong>{{ Auth::user()->username }}</strong>
    </div>

    <div>
        <a href="{{ route('logout') }}" class="btn btn-large btn-outline-danger">Logout</a>
    </div>
</div>