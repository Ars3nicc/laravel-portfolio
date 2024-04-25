@extends('layouts.app')

@section('content')

<main class="p-8">
    <section class="text-center md:text-left md:flex justify-center gap-64 mt-20">
        <div class="md:w-2/5">
            <header class="text-4xl">Hello! I'm</header>
            <header class="text-7xl font-extrabold" style="color: #2D4E83;">Franz Manrique</header>
            <p class="pt-6 text-justify leading-7 md:1/4">
                I am a proficient software developer with extensive expertise in fundamental to advanced programming concepts. My skill set allows me to excel in both technical and non-technical roles within the profession.
            </p>
        </div>
        <img class="w-64 object-contain rounded-full md:w-80 hover:outline" src="{{ asset('img/home/suisei.jpg') }}" alt="profile image">

    </section>
    <section class="p-12">
        @include('main.work_exp')
    </section>
</main>
@endsection
