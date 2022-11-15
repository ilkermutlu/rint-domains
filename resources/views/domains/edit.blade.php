@extends('layouts.base')

@section('content')
<div>
    <div class="flex justify-between">
        <h2 class="text-lg font-bold">Edit Domain</h2>
    </div>
    <form class="flex flex-col mt-5 gap-y-2" action="{{ route('domains.update', ['domain' => $domain->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input class="rounded-lg" type="text" name="name" placeholder="Domain" value="{{ $domain->name }}">
        </div>
        <div>
            <select class="rounded-lg" name="provider_id">
                <option value="">Select provider</option>
                @foreach ($providers as $providerId => $provider)
                    <option value="{{ $providerId }}" @if ($providerId === $domain->provider_id) selected @endif>
                        {{ $provider }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <input class="rounded-lg" type="date" name="expires" placeholder="Expires" value="{{ $domain->expires }}">
        </div>
        <div>
            <button class="p-2 text-sm text-white bg-blue-800 rounded-lg" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
