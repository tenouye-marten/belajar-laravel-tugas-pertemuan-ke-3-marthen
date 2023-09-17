@extends('layouts.app')

@section('body')
<div class="row justify-content-center">


<div class="w-75 ">
<div class="row justify-content-center mt-1  ">


    <h1 class="mb-0 fw-bold text-secondary  ">detail book</h1>
</div>
<hr>

<div class="container mt-3 p-3 ">
    <div class="row ">


      
        <div class="col ">
            <h1 class="my-0  py-0 fw-bold display-5">{{ $book->name }}</h1>
            <p  class="m-0 "> <span class="fst-italic text-secondary fs-5">author : {{ $book->author }}  </span><br><span class=" text-secondary fs-5 fst-italic">Year : {{ $book->year }}</span></p>
            
                <article class="fs-5">{{ $book->description }}</article>
                
                <p  class="m-0 ">
                    <span class=" text-secondary fs-6 fst-italic">Created : {{ $book->created_at }}</span>
                    <br>
                    <span class=" text-secondary fs-6 fst-italic">Updated :{{ $book->updated_at }}</span>
                </p>
            
            </div>
        </div>
        </div>
    </div>
</div> 


@endsection