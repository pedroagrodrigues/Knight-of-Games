@extends('dashboard.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Company</th>
                            </tr>
                            @foreach($companies as $company)
                            <?php
                        $id = $company['id'];
                        ?>
                            <tr>
                                <td><a href="{{ url('company/'.$company['id'])}}"> {{$company->company}}</a></td>
                            </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection