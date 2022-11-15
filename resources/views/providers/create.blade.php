@extends('layouts.base')

@section('content')
<div>
    <div class="flex justify-between">
        <h2 class="text-lg font-bold">Add Provider</h2>
    </div>
    <form class="flex flex-col mt-5 gap-y-2" action="{{ route('providers.store') }}" method="POST">
        @csrf
        <div>
            <input class="rounded-lg" type="text" name="name" placeholder="Provider Name">
        </div>
        <div>
            <input class="rounded-lg" type="text" name="url" placeholder="Website URL">
        </div>
        <div>
            <button class="p-2 text-sm text-white bg-blue-800 rounded-lg" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
