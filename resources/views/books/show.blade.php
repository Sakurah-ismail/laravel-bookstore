@extends('layout')
  @section('page-content')
  <h1>BookStore</h1>
    <table class="table table-bordered table-dark">
        <tr>
            <th>Id</th>
            <td>
             {{$book->id}}
            </td>
</tr>
<tr>
            <th>Title</th>
            <td>
             {{$book->title}}
            </td>
</tr>
<tr>
            <th>Author</th>
            <td>
             {{$book->author}}
            </td>
</tr>
<tr>
            <th>Price</th>
            <td>
             {{$book->price}}
            </td>
</tr>
<tr>
            <th>ISBN</th>
            <td>
             {{$book->isbn}}
            </td>
</tr>
<tr>
            <th>Stock</th>
            <td>
             {{$book->stock}}
            </td>
</tr>

    </table>
    <p>
        <a class="btn btn-primary"href="{{route('books.index')}}">Back</a>
        <a class="btn btn-danger"href="{{route('books.edit',$book->id)}}">Edit</a>

     </p>
  @endsection
