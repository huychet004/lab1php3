
@extends('layout')
@section('title', 'Chi tiết sách')
@section('content')
<h2 class="text-xl font-bold mb-4">Tên sách: <span class="font-normal">{{ $book->title }}</span></h2>
<table class="min-w-full bg-white border border-gray-200">
    <tbody>
        <tr>
            <td class="border px-4 py-2 font-bold">Author:</td>
            <td class="border px-4 py-2">{{ $book->author }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-bold">Publisher:</td>
            <td class="border px-4 py-2">{{ $book->publisher }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-bold">Publication Date:</td>
            <td class="border px-4 py-2">{{ $book->publication }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-bold">Price:</td>
            <td class="border px-4 py-2">{{ $book->price }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-bold">Quantity:</td>
            <td class="border px-4 py-2">{{ $book->quantity }}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-bold">Category:</td>
            <td class="border px-4 py-2">{{ $book->category_id }}</td>
        </tr>
    </tbody>
</table>


@endsection