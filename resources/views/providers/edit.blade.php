@extends('layouts.base')

@section('content')
<div>
    <div class="flex justify-between">
        <h2 class="text-lg font-bold">Edit Provider</h2>
    </div>
    <form class="flex flex-col mt-5 gap-y-2" action="{{ route('providers.update', ['provider' => $provider->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input class="rounded-lg" type="text" name="name" placeholder="Provider Name" value="{{ $provider->name }}">
        </div>
        <div>
            <input class="rounded-lg" type="text" name="url" placeholder="Website URL" value="{{ $provider->url }}">
        </div>
        <div>
            <button class="p-2 text-sm text-white bg-blue-800 rounded-lg" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
