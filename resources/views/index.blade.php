@extends('layout')
@section('title', 'Trang danh sách sách có giá cao và thấp nhất')
@section('content')
<div class="flex flex-row gap-4">
    <div class="shadow-lg rounded-lg p-5">
        <h2 class="text-2xl font-bold mb-4">Danh sách sách có giá cao nhất</h2>
        <ul class="list-disc pl-5 mb-8">
            @foreach($maxPriceBooks as $book)
            <li class="mb-2">
                <a href="/book/{{ $book->id }}" class="text-blue-600 hover:underline">{{ $book->title }}</a> - <span class="text-gray-700">{{ $book->price }} đ</span>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="shadow-lg rounded-lg p-5">
        <h2 class="text-2xl font-bold mb-4">Danh sách sách có giá thấp nhất</h2>
    <ul class="list-disc pl-5">
        @foreach($minPriceBooks as $book)
        <li class="mb-2">
            <a href="/book/{{ $book->id }}" class="text-blue-600 hover:underline">{{ $book->title }}</a> - <span class="text-gray-700">{{ $book->price }} đ</span>
        </li>
        @endforeach
    </ul>
    </div>
    
</div>
<div class="mt-4">
    <a href="/category" class="border rounded-lg">Danh sách loại</a>
</div>




@endsection