@extends('master')

@section('title', 'Book List')

@section('content')
    <h1>Book List</h1>
    <table>
        <tr>
            <th>Title&emsp;&emsp;&emsp;&emsp;</th>
            <th>ISBN&emsp;&emsp;&emsp;</th>
            <th>Category&emsp;&emsp;</th>
            <th>Pages<th>
        </tr>
        <tr>
            <td>{{$book1['title']}}</td>
            <td>{{$book1['isbn']}}</td>
            <td>{{$book1['category']}}</td>
            <td>{{$book1['page']}}</td>
        </tr>
        <tr>
            <td>{{$book2['title']}}</td>
            <td>{{$book2['isbn']}}</td>
            <td>{{$book2['category']}}</td>
            <td>{{$book2['page']}}</td>
        </tr>
        <tr>
            <td>{{$book3['title']}}</td>
            <td>{{$book3['isbn']}}</td>
            <td>{{$book3['category']}}</td>
            <td>{{$book3['page']}}</td>
        </tr>
        <tr>
            <td>{{$book4['title']}}</td>
            <td>{{$book4['isbn']}}</td>
            <td>{{$book4['category']}}</td>
            <td>{{$book4['page']}}</td>
        </tr>
    </table>
    
@endsection