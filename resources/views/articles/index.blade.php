{{-- @extends('layouts.app')

@section('content')


<br>
<br>
    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Articles List</h1>

        @foreach($articles as $article)
            <div class="mb-4 p-4 border rounded-lg shadow-sm">
               <img src="{{ asset($article->image_path) }}" alt="{{ $article->title }}" style="max-width: 300px;">
                <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                <p>{!! Str::limit(strip_tags(preg_replace('/<img[^>]+>/i', '', $article->content)), 150) !!}</p>

                <p><strong>Category:</strong> {{ $article->category->name }}</p>

                <div class="mt-4 flex space-x-2">
                              <a href="{{ route('articles.show', $article->id) }}"
                                             class="px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">
                                             View
                                          </a>
                    <a href="{{ route('articles.edit', $article->id) }}"
                       class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                       Edit
                    </a>

                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
                    <h1 class="text-2xl font-bold mb-6">Articles List</h1>
            
                    @foreach($articles as $article)
                        <div class="mb-4 p-4 border rounded-lg shadow-sm">
                           <img src="{{ asset($article->image_path) }}" alt="{{ $article->title }}" style="max-width: 300px;">
                            <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                            <p>{!! Str::limit(strip_tags(preg_replace('/<img[^>]+>/i', '', $article->content)), 150) !!}</p>
            
                            <p><strong>Category:</strong> {{ $article->category->name }}</p>
            
                            <div class="mt-4 flex space-x-2">
                                          <a href="{{ route('articles.show', $article->id) }}"
                                                         class="px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600">
                                                         View
                                                      </a>
                                <a href="{{ route('articles.edit', $article->id) }}"
                                   class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600">
                                   Edit
                                </a>
            
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
