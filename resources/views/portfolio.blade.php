@extends('layouts.inc.app')
@section('content')
    <section class="pt-[100px] pb-[100px]" style="background: url(' {{ asset('img/services/brcm.jpg') }} ') no-repeat center center/cover;">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">Portolio</h1>
            <ul class="flex justify-center items-center space-x-2">
                <li class="text-lg font-medium text-interface-100">Home</li>
                <li>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 7.5L14 12.5L10 17.5" stroke="#04091E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </li>
                <li class="text-lg font-medium text-interface-100">Portolio Grid</li>
            </ul>
        </div>
    </section>

    <section class="lg:py-120 port-grid-two relative mb-10">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 relative z-10">
            <div class="max-w-2xl mx-auto mb-14 text-center">
                <h2 class="text-4xl leading-normal xl:text-5xl xl:leading-snug font-bold text-interface-100 mb-4">
                    Let’s Check my
                    <span class="relative"><span class="relative z-10">Best Works</span>
                        <svg class="absolute right-0 bottom-1" width="243" height="11" viewBox="0 0 243 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7.22656C45.1729 4.20807 151.615 -0.017823 240 7.22656" stroke="#FFD233" stroke-width="6" stroke-linecap="round"></path>
                        </svg>
                    </span>
                </h2>
                <p class="text-interface-200 text-xl mb-5">E-commerce Website,Custom Web Application,Content Management System (CMS),API Integration,Booking and Reservation System, Social Media Application,API Development,</p>
            </div>

            <div id="port_project">

                @foreach ($projects as $project)
                    <div class="port_project_insid my-10">

                        <img class="w-[350px]" src="{{ asset('img/projects/' . $project->thumbnail) }}" alt="Error">

                        <div class="port_insid2">
                            <h3 class="mb-6 font-semibold text-2xl text-interface-100">{{ $project->title }}</h3>
                            <p class="pb-6 text-interface-200text-lg">{{ substr($project->description, 0, 200) }}</p>
                        </div>
                        <div class="mt-10 flex flex-wrap justify-center w-full">
                            <a href="{{ url('project-detail/' . $project->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                <span>Learn more</span>
                            </a>
                            <hr style="border: 0.1vw solid rgb(163, 163, 163);" class="w-full my-10 rounded-2xl">
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection
