@extends('layouts.base')

@section('content')
    <div>
        <div class="flex justify-between">
            <h2 class="text-lg font-bold">Domains</h2>
            <a href="{{ route('domains.create') }}">
                <button class="p-2 text-sm text-white bg-blue-800 rounded-lg">Add New</button>
            </a>
        </div>
        <table class="w-full mt-5 border">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Provider</th>
                    <th>Expires</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($domains as $domain)
                    <tr class="odd:bg-gray-100">
                        <td class="p-2 border"><a href="{{ $domain->name }}">{{ $domain->name }}</a></td>
                        <td class="p-2 text-center border">{{ $domain->provider->name }}</td>
                        <td class="p-2 text-center border">{{ $domain->expires }}</td>
                        <td class="p-2 text-center border">{{ $domain->created_at->diffForHumans() }}</td>
                        <td class="p-2 text-center border">{{ $domain->updated_at->diffForHumans() }}</td>
                        <td class="p-2 text-center border"><a href="{{ route('domains.edit', ['domain' => $domain->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
