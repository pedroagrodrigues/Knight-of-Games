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
                    Company: <input type="text" name="company_name"><br>
                    Description: <input type="text" name="company_description"><br>
                    Created at: <input type="date" name="company_created"><br>
                    <input type="submit" value="Submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
