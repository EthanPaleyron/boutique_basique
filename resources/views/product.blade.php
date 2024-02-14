<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$article->name}}
        </h2>
    </x-slot>

    <article>
        <h2>{{$article->name}}</h2>
        <img src="../storage/files/{{$article->file}}" alt="{{$article->file}}">
        <b>{{$article->price}}</b>
        <p>{{$article->category->name}}</p>
    </article>
</x-app-layout>