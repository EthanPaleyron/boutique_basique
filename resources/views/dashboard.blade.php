<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('The products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($articles as $article)
            <article>
                <article>
                    <h2>{{$article->name}}</h2>
                    <img src="storage/files/{{$article->file}}" alt="{{$article->file}}">
                    <b>{{$article->price}}</b>
                    <p>{{$article->category->name}}</p>
                    <a href="{{route('product', $article->id)}}">Afficher les details du produit</a>
                </article>
            </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
