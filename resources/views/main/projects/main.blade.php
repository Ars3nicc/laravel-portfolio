@extends('layouts.app')

@section('content')
<main>
    <header class="text-center text-5xl m-5">Projects</header>
    <section>
        @include('main.projects.my_stacks')
    </section>
    <section>
        @include('main.projects.my_projects')
    </section>
</main>
@endsection
