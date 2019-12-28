@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/company_create" method="post">
                    <div class="form-group">
                    Website: <input type="text" name="company_name"><br>
                    Rating: <input type="text" name="company_description"><br>
                    <input type="submit" value="Submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
