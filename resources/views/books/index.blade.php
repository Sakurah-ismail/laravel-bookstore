@extends('layout')
 @section('page-content')
 <div class="row">
   <div class="col-lg-10">
  <div class="col-8">
   <form method="get"action="{{route('books.index')}}">
  <input type="text" id="search" name="search" placeholder="Search" value="{{request('search')}}">
  <button type="submit" class="btn btn-default">Search</button>
</div>
</form>
</div>
<div class="col-lg-2">
   <p class="text-right"><a href="{{route('books.create')}}" class="btn btn-primary">New Book</a></p>
</div>
</div>
 <h1>BookStore</h1>
    <table class="table table-striped table-dark">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th colspan="3">Action</th>
</tr>
 @foreach($books as $book)
 
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->price}}</td>
        <td><a class="btn btn-light"href="{{route('books.show',$book->id)}}">View</a></td>
        <td><a class="btn btn-light"href="{{route('books.edit',$book->id)}}">Edit</a></td>
        <td>
         <form method="post" action="{{route('books.destroy')}}" onsubmit="return confirm('sure?')">
         @csrf
         <input type="hidden" name="id" value="{{$book->id}}">
         <input type="submit" value="Delete" class="btn btn-danger">


</form>
</td>
        
 </tr>
 @endforeach

    </table>
    {{$books->links()}}
 @endsection
