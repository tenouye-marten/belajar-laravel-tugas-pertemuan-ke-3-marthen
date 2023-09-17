@extends('layouts.app')

@section('body')
<div class="row justify-content-center">


  <div class="w-75 ">
<div class="row justify-content-center mt-1  ">


  <h1 class="mb-0 fw-bold text-secondary  ">List book</h1>
</div>
<hr>

<div class="container   p-3 rounded ">
    <div class="row d-flex justify-content-center">
        <div class="col-12">
          <div class=" mb-3">
            <a href="{{ route('book.create') }}" class="m-0 btn btn-primary">Add Book</a>
          </div>
          @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
  {{ Session::Get('success') }}
          </div>
@endif
            <table class="table table-bordered border-dark ">
                <thead class="text-center">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Year</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @if($books->count() > 0)
                    @foreach ($books as $book)
                        
                  
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('book.show', $book->id)}}" type="button" class="btn btn-sm btn-primary">Show</a>
                        <a href="{{ route('book.edit', $book->id)}}" type="button" class="btn btn-sm btn-warning">Edit</a>
                      <form action="{{ route('book.destroy', $book->id)}}" class="btn btn-sm btn-danger m-0" method="POST" onsubmit=" return confirm('delete ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger p-0 m-0">Delete</button>
                      </form>
                      </div></td>
                  </tr>
            
                   @endforeach
                  @else
                  <tr>
                    <td class="text-center" colspan="5">
                        Book not found
                    </td>
                  </tr>
                  @endif
                </tbody>
              </table>
        </div>
    </div>
</div>

</div>
</div>  
@endsection