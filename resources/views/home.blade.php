@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($user as $users)
    <tr>
      <th scope="row">{{ $users->id }}</th>
      <td>{{ $users->name }}</td>
      <td>{{ $users->last_name }}</td>
      <td>
      <form action="" method="POST">

   <a class="btn btn-primary" href="{{ route('edit',$users->id) }}">Edit</a>

  
</form>
      </td>   
    </tr>
    @endforeach
  </tbody>
</table>

            </div>
        </div>
    </div>
</div>
@endsection
