{{-- @extends('layouts.app')

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <br>
    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data"
        class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-1200">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
            <select name="category_id" id="category_id"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" required
                class="mt-1 block w-full h-64 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('content', $article->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Current Images</label>
            <div class="flex flex-wrap gap-2">
              
                    <img src="{{ asset($article->image_path) }}" alt="Article Image" style="max-width: 100px;">
             
            </div>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">New Images</label>
            <input type="file" name="image" id="image" multiple
                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Update Article
            </button>
        </div>
    </form>

    <br>
    <br>
    <br>
    <br>
    <script>
               document.addEventListener('DOMContentLoaded', function () {
                   // ใช้ CKEditor ใน modal และตั้งค่า uploadUrl
                   ClassicEditor
                       .create(document.querySelector('#content'), {
                           ckfinder: {
                               uploadUrl: '{{ route('ckeditor.upload') }}?command=QuickUpload&type=Files&responseType=json&_token={{ csrf_token() }}'
                           },
                           toolbar: [
                               'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                               'imageUpload', 'insertTable', 'mediaEmbed', 'undo', 'redo', '|', 'htmlEmbed'
                           ],
                           htmlEmbed: {
                               showPreviews: true
                           }
                       })
                       .catch(error => {
                           console.error(error);
                       });
               });
           </script>
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
                <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

                <br>
                <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data"
                    class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
                    @csrf
                    @method('PUT')
            
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-1200">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    </div>
            
                    <div class="mb-4">
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select name="category_id" id="category_id"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" id="content" required
                            class="mt-1 block w-full h-64 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('content', $article->content) }}</textarea>
                    </div>
            
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Current Images</label>
                        <div class="flex flex-wrap gap-2">
                          
                                <img src="{{ asset($article->image_path) }}" alt="Article Image" style="max-width: 100px;">
                         
                        </div>
                    </div>
            
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">New Images</label>
                        <input type="file" name="image" id="image" multiple
                            class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
            
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Update Article
                        </button>
                    </div>
                </form>
            
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // ใช้ CKEditor ใน modal และตั้งค่า uploadUrl
            ClassicEditor
                .create(document.querySelector('#content'), {
                    ckfinder: {
                        uploadUrl: '{{ route('ckeditor.upload') }}?command=QuickUpload&type=Files&responseType=json&_token={{ csrf_token() }}'
                    },
                    toolbar: [
                        'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                        'imageUpload', 'insertTable', 'mediaEmbed', 'undo', 'redo', '|', 'htmlEmbed'
                    ],
                    htmlEmbed: {
                        showPreviews: true
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</x-app-layout>

