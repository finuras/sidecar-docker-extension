@extends('layouts.app')

@section('content')
    <div class="mx-auto card w-[1200px] my-20 p-4">

        <livewire:cards.network></livewire:cards.network>

{{--        <livewire:cards.traefik></livewire:cards.traefik>--}}

        <div class="mt-8"></div>

        <livewire:cards.run-custom-command
            :cwd="base_path()"
        ></livewire:cards.run-custom-command>

    </div>
@endsection
