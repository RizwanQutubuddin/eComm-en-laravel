@extends('master')
@section('content')
<div class="container">
    <div class="raw">
        <div class="col-md-4 offset-md-4">
            <form class="row g-3" action="/login" method="POST">
                @csrf
                <div class="col-md-12">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection