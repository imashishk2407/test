@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}

               <a href="{{route('product')}}" class="btn btn-primary">Create Product</a> </div>

                
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">discription</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($product as $products)
    <tr>
      <th scope="row">{{ $products->id }}</th>
      <td>{{ $products->name }}</td>
      <td>{{ $products->description }}</td>
      <td>{{ $products->quantity }}</td>
      <td>{{ $products->price }}</td>
      <td>
      <form action="{{route('delete.product' , $products->id)}}" method="POST">

   <a class="btn btn-primary" href="{{ route('edit.product',$products->id) }}">Edit</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>



  
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
