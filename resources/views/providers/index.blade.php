@extends('layouts.base')

@section('content')
    <div>
        <div class="flex justify-between">
            <h2 class="text-lg font-bold">List of Providers</h2>
            <a href="{{ route('providers.create') }}">
                <button class="p-2 text-sm text-white bg-blue-800 rounded-lg">Create New</button>
            </a>
        </div>
        <table class="w-full mt-5 border">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($providers as $provider)
                    <tr class="odd:bg-gray-100">
                        <td class="p-2 border"><a href="{{ $provider->url }}">{{ $provider->name }}</a></td>
                        <td class="p-2 text-center border">{{ $provider->created_at->diffForHumans() }}</td>
                        <td class="p-2 text-center border">{{ $provider->updated_at->diffForHumans() }}</td>
                        <td class="p-2 text-center border"><a href="{{ route('providers.edit', ['provider' => $provider->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
