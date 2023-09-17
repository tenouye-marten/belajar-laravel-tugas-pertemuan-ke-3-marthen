@extends('layouts.app')

@section('body')
<div class="row justify-content-center">


    <div class="w-75 ">
<div class="row  mt-1">

    <h1 class="mb-0 fw-bold ">Update book</h1>

</div>

<div class="container">
    <div class="row">
        <div class="col py-4">
            <form action="{{ route('book.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
            <div class="mb-2">
                <label for="nama" class="form-label">Input Name :</label>
                <input type="text"  name="name" id="nama" value="{{ $book->name }}" class="form-control">
            </div>
            <div class="mb-2">
                <label for="author" class="form-label">Input Author :</label>
                <input type="text" name="author" id="author" value="{{ $book->author }}" class="form-control">
            </div>
            <div class="mb-2">
                <label for="year" class="form-label">Input Year :  </label>
                <input type="text" name="year" id="year" value="{{ $book->year }}" class="form-control">
            </div>
            <div class="mb-2">
                <label for="description" class="form-label">Input Description :  </label>
                <textarea name="description" id="description" class="form-control"   cols="30" rows="5">{{ $book->description }}
                </textarea>
            </div>
            <div class="d-grid">
               <button class="btn   btn-warning">Update Book</button>
            </div>
        </form>
            
        </div>
    </div>
</div>
    </div>
</div>
@endsection
