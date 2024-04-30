@extends('layouts.app')

@section('content')
<style>
    .transform-icon-hover:hover {
        transform: scale(1.2);
        /* Enlarge the icon by 20% on hover */
    }

    .tooltip {
        position: relative;
    }

    .tooltip::before {
        content: attr(title);
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        font-size: 14px;
        border-radius: 4px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .tooltip:hover::before {
        opacity: 1;
    }
</style>

<main class="p-8">
    <section class="text-center md:text-left md:flex justify-center gap-16 mt-20">
        <div class="md:w-2/5">
            <header class="text-4xl">Hello! I'm</header>
            <header class="text-7xl font-extrabold" style="color: #2D4E83;">Franz Manrique</header>
            <p class="pt-6 text-justify leading-7 md:1/4">
                I am a proficient software developer with extensive expertise in fundamental to advanced programming concepts. My skill set allows me to excel in both technical and non-technical roles within the profession.
            </p>
            <div class="mt-6 flex gap-4">
                <a href="https://github.com/Ars3nicc" class="text-5xl inline-block transition-transform transform-icon-hover tooltip" title="GitHub" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/franz-ronin-manrique-4b7612242/" class="text-5xl inline-block transition-transform transform-icon-hover tooltip" title="LinkedIn" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="{{ asset('document/Manrique_CV.pdf') }}" class="text-5xl inline-block transition-transform transform-icon-hover tooltip" title="Resume" target="_blank">
                    <i class="fas fa-file"></i>
                </a>
            </div>
        </div>

        <img class="hidden md:block md:object-contain md:rounded-full  md:w-80 hover:outline" src="{{ asset('img/home/suisei.jpg') }}" alt="profile image">

    </section>
    <section class="p-12">
        @include('main.work_exp')
    </section>
</main>
@endsection
