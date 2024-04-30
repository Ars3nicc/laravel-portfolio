@extends('layouts.app')

@section('content')
<main>
    <header class="text-center text-4xl m-5">My Projects</header>
    <section>
        @include('main.projects.my_stacks')
    </section>
</main>
@endsection
