
@extends('layout')
@section('title', 'Hiển thị dũ liệu sách theo loại')
@section('content')

<ul class="list-disc pl-5">
    @foreach($books as $book)
        <li class="mb-2">
            <a href="/book/{{ $book->id }}" class="text-blue-600 hover:underline">{{ $book->title }}</a> - <span class="text-gray-700">{{ $book->price }} đ</span>
        </li>
    @endforeach
</ul>
@endsection