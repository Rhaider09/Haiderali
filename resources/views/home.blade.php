@extends('layouts.inc.master')
@section('style')
    <style>
        .swiper-pagination-bullet {
            background-color: white;
        }
    </style>
@endsection
@section('content')
    {{-- main intro here --}}

    <section>
        <div class="max-w mx-auto shadow-md overflow-hidden mt-6 p-10" style="background: url('{{ asset('img/hero-three-bg.jpg') }}') no-repeat center center/cover;">
            <div class="md:flex">
                <div class="md:shrink-0 text-white">
                    <h1 class="text-5xl leading-snug xl:text-[66px] mb-8 xl:leading-normal font-bold text-white">
                        Hey, I am <br>
                        Haider Ali Amjad <br>
                        <span class="inline-block" style="background: url('{{ asset('img/wide-line.svg') }}') no-repeat bottom;">Web
                            Developer</span>
                    </h1>
                    <p class="text-2xl text-borderl-500 mb-4">
                        Agency work with top rated talented people provide qulaity
                        services.
                    </p>
                    <div class="flex items-center gap-8 mt-10">
                        <a href="{{ url('contact') }}" class="bg-sky-400 text-interface-100 px-6 py-4 rounded-lg inline-flex justify-center items-center hover:bg-lime-600 font-medium transition-all">
                            <span>Hire Me</span>

                            {{-- <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 16.5L18 12.5M18 12.5L14 8.5M18 12.5L6 12.5" stroke="#04091E" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> --}}

                        </a>

                        {{-- <a href="" class="flex video-popup items-center gap-5">
                        <span
                            class="w-[60px] pulsing-dev h-[60px] rounded-full grid place-items-center border border-lime-500">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 18.4719V3.52806C0 1.14774 2.63921 -0.284513 4.63497 1.01273L16.1303 8.48467C17.9503 9.6677 17.9503 12.3323 16.1303 13.5153L4.63496 20.9873C2.63921 22.2845 0 20.8523 0 18.4719Z"
                                    fill="#DAED1A"></path>
                            </svg>
                        </span>
                        <span><span class="text-white uppercase text-lg font-medium">WATCH</span>
                            <br>
                            <span class="text-base font-medium text-interface-200">Intro Video</span></span>
                    </a> --}}

                    </div>
                    <div class="pt-14">
                        <p class="text-base text-interface-200">
                            Over
                            <span class="text-sky-300 font-semibold text-xl">1000+ client</span>
                            all over the world.
                        </p>
                    </div>

                </div>
                <div class="p-8">
                    <img src="{{ asset('img/model.png') }}" class="w-full" alt="">

                </div>
            </div>
        </div>
    </section>

    {{-- main intro ends here --}}

    {{-- socal media links here --}}

    <section class="py-8">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">
                <div class="group">
                    <a href="https://stackoverflow.com/users/23036570/haider-ali" target="_blank" class="group-hover:bg-sky-400 group-hover:border-transparent transition-all flex space-x-3 p-8 rounded-xl border border-dashed bg-[#0A1429] border-[#3A3E4E] items-center justify-center">
                        <i class="fa-brands fa-stack-overflow text-white text-5xl"></i>
                        <span class="text-white transition-all group-hover:text-interface-100 text-2xl font-semibold">S. Overflow</span>
                    </a>
                </div>
                <div class="group">
                    <a href="https://github.com/Rhaider09" target="_blank" class="group-hover:bg-sky-400 group-hover:border-transparent transition-all flex space-x-3 p-8 rounded-xl border border-dashed bg-[#0A1429] border-[#3A3E4E] items-center justify-center">
                        <i class="fa-brands fa-github text-white text-5xl"></i>
                        <span class="text-white transition-all group-hover:text-interface-100 text-2xl font-semibold">Github</span>
                    </a>
                </div>
                <div class="group">
                    <a href="https://www.upwork.com/freelancers/~0154f6a664c6088549?mp_source=share" target="_blank" class="group-hover:bg-sky-400 group-hover:border-transparent transition-all flex space-x-3 p-8 rounded-xl border border-dashed bg-[#0A1429] border-[#3A3E4E] items-center justify-center">
                        <i class="fa-brands fa-upwork text-white text-5xl"></i>
                        <span class="text-white transition-all group-hover:text-interface-100 text-2xl font-semibold">Upwork</span>
                    </a>
                </div>
                <div class="group">
                    <a href="https://www.fiverr.com/haider424337/write-any-script-in-html-css-javascript-react-js" target="_blank" class="group-hover:bg-sky-400 group-hover:border-transparent transition-all flex space-x-3 p-8 rounded-xl border border-dashed bg-[#0A1429] border-[#3A3E4E] items-center justify-center">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/fiverr--v2.png" alt="fiverr--v2" style="filter: brightness(0) invert(1);" />
                        <span class="text-white transition-all group-hover:text-interface-100 text-2xl font-semibold">Fiverr</span>
                    </a>
                </div>

                <div class="group">
                    <a href="https://www.linkedin.com/in/haider-ali-amjad-a89438236/" target="_blank"class="group-hover:bg-sky-400 group-hover:border-transparent transition-all flex space-x-3 p-8 rounded-xl border border-dashed bg-[#0A1429] border-[#3A3E4E] items-center justify-center">
                        <i class="fa-brands fa-linkedin text-white text-5xl"></i>
                        <span class="text-white transition-all group-hover:text-interface-100 text-2xl font-semibold">Linkedin</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- socal media links ends here --}}

    {{-- services section here --}}

    <section class="py-12">

        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-5 xl:gap-10 lg:gap-16 place-items-center mb-14">
                <div class="xl:col-span-2">
                    <h2 class="text-white font-bold lg:text-5xl text-4xl capitalize leading-snug">
                        Expertise
                        <span class="relative">
                            <span class="relative z-20">Service!</span>
                            <svg class="absolute  -left-1 z-0 -top-2 hidden md:block" width="206" height="75" viewBox="0 0 206 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.1282 14.4113C66.5337 9.03391 151.827 4.45371 187.897 15.4254C226.745 27.2424 180.759 53.1141 129.951 64.6499C77.3856 76.585 18.356 73.496 6.50757 58.6571C-13.495 33.6061 61.3156 8.13765 120.395 3.11796" stroke="#DAED1A" stroke-width="6" stroke-linecap="round"></path>
                            </svg>
                            Let’s check it out.
                        </span>
                    </h2>
                </div>
                <div class="xl:col-span-3">
                    <p class="text-white text-xl">
                        E-commerce Website,Custom Web Application,Content Management System (CMS),API Integration,Booking
                        and Reservation System,
                        Social Media Application,API Development,
                    </p>
                </div>
            </div>

            <div>
                <div #swiperRef="" class="swiper mySwiper w-full h-96 px-1 lg:px-20 xl:px-0">
                    <div class="swiper-wrapper">
                        @foreach ($services as $service)
                            <div class="swiper-slide">
                                <div class="border border-transparent hover:border-sky-400 px-7 py-8">
                                    <h3 class="mb-6 font-semibold text-2xl text-white text-center">{{ $service->title }}
                                    </h3>
                                    <p class="pb-6 text-white text-center text-base">
                                        {{ substr($service->description, 0, 200) }}</p>
                                    <a href="{{ url('service-detail/' . $service->id) }}" class="underline flex justify-center hover:text-sky-400 items-center text-white">
                                        <span class="">Learn more</span>
                                        <svg class="stroke-white group-hover:stroke-lime-500" width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.10156 18.0748L17.2491 7.92383" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.10156 7.92383H17.2491V18.0748" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next "></div>
                    <div class="swiper-button-prev "></div>
                    <div class="swiper-pagination text-white"></div>
                </div>
            </div>
    </section>

    {{-- services section ends here --}}

    {{-- resume and skills section here --}}

    <section class="py-12">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="bg-interface-600 rounded-xl border border-[#494C5F] p-8 xl:p-14">
                <h2 class="text-white text-4xl font-medium">Resume</h2>
                <div class="flex justify-center items-center lg:flex-nowrap flex-wrap">
                    <div class="pb-4 lg:w-1/2 w-full mt-10 lg:mx-7">
                        <div class="flex flex-col gap-y-5 md:flex-row justify-between pb-5 border-b border-[#494C5F]">
                            <div>
                                <h3 class="text-2xl text-white font-semibold mb-2">
                                    Haider Ali Amjad
                                </h3>
                                <span class="text-white text-lg">Web developer And SEO Optimizer</span>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <h3 class="text-7xl leading-none text-sky-500 font-bold">
                                    2
                                </h3>
                                <p class="text-lg text-white font-medium">
                                    Years <br>
                                    Experience
                                </p>
                            </div>
                        </div>
                        <p class="text-white text-lg mt-5 leading-normal">
                            Hi there! My name is Haider Ali amjad, and I'm a web developer and seo optimizer based in Lahore, Pakistan. I
                            have a passion .
                        </p>
                        <p class="text-white text-lg leading-normal">
                            I've been working in the web development and seo optimizer field for 2 Years,
                            and during that time, I've gained experience
                        </p>
                    </div>
                    {{-- <div class="mx-auto">
                        <img src="{{ asset('img/male.png') }}" class="w-full" alt="">
                    </div> --}}
                    <div class="w-full lg:mt-10 lg:mx-7">
                        <ul class="divide-y divide-[#494C5F]">
                            @foreach ($experience as $exp)
                                <li class="flex justify-between items-center pl-4 py-5">
                                    <div>
                                        <h4 class="text-xl font-semibold text-white mb-4">{{ $exp->company_name }}</h4>
                                        <p class="text-white">{{ $exp->position }}</p>
                                    </div>
                                    <div class="shrink-0">
                                        <span class="border border-sky-400 text-sky-500 px-3 py-2 rounded-md">{{ $exp->time_stayed }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div>

                    <div class="mt-10">
                        <div class="border-b border-[#494C5F] pb-3 text-white">
                            <h2 class="text-white text-4xl font-medium">Skills</h2>
                        </div>
                        <ul class="mt-7 flex flex-wrap gap-3">
                            @foreach ($skills as $skill)
                                <li class="bg-[#16213B] block px-4 py-3 hover:bg-sky-500 hover:text-interface-100 transition rounded-md text-white text-xl">
                                    {{ $skill->skill_name }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-10">
                        <div class="border-b border-[#494C5F] pb-3 text-white">
                            <h3 class="text-borderl-500 text-2xl">Tools I use every day</h3>
                        </div>
                        <ul class="mt-7 flex flex-wrap gap-x-5 gap-y-7">
                            {{-- <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/atom_io.png') }}" alt="Error">
                                <span class="tooltiptext">Atom.io</span>
                            </li> --}}
                            {{-- <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/webstorm.png') }}" alt="Error">
                                <span class="tooltiptext">WebStorm</span>
                            </li> --}}
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/vscode.png') }}" alt="Error">
                                <span class="tooltiptext">Visual Studio Code</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/vstudio.png') }}" alt="Error">
                                <span class="tooltiptext">Visual Studio</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/postman.png') }}" alt="Error">
                                <span class="tooltiptext">postman</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/seo.png') }}" alt="Error">
                                <span class="tooltiptext">SEO</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/node_js.png') }}" alt="Error">
                                <span class="tooltiptext">Node.Js</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/react_js.png') }}" alt="Error">
                                <span class="tooltiptext">React.js</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/flutter.png') }}" alt="Error">
                                <span class="tooltiptext">Flutter</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/dart.png') }}" alt="Error">
                                <span class="tooltiptext">Dart</span>
                            </li>
                            <li class="tooltip">
                                <img class="h-[50px] hover:opacity-75" src="{{ asset('img/tools/electron.png') }}" alt="Error">
                                <span class="tooltiptext">Electron</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- resume and skills section ends here --}}

    {{-- projects section here --}}

    <section class="py-12">

        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

            <div class="max-w-xl mx-auto text-center">
                <h2 class="text-4xl leading-normal xl:text-5xl xl:leading-snug font-bold text-white mb-4">
                    Let’s Check my
                    <span class="relative z-30"><span class="relative z-10"> Projects</span>
                        <svg class="absolute right-0 bottom-1" width="200" height="10" viewBox="0 0 243 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7C45.1729 3.98151 151.615 -0.244386 240 7" stroke="#FFD233" stroke-width="6" stroke-linecap="round"></path>
                        </svg>
                    </span>
                </h2>
                <p class="text-white text-xl mb-5">
                    E-commerce Website,Custom Web Application,API Integration,Booking and Reservation System,
                    Social Media Application
                </p>
            </div>

            <div>
                <div #swiperRef="" class="swiper mySwiper w-full h-96 px-1 lg:px-20 xl:px-0">
                    <div class="swiper-wrapper">
                        @foreach ($projects as $project)
                            <div class="swiper-slide">
                                @if ($project->images)
                                    <div class="relative group min-h-[370px] rounded-lg cursor-pointer overflow-hidden" style="background: url('{{ asset('assets/uploads/place_images/' . $project->images) }}') no-repeat center center/cover;" alt="not_img">
                                @endif
                                <div class="absolute w-full h-full hover:bg-opacity-80 rounded-lg flex flex-col items-center justify-center">
                                    <div class="flex flex-col items-center justify-center text-center">
                                        <h3 class="text-white mb-4">
                                            <a href="{{ url('project-detail/' . $project->id) }}" class="text-3xl font-semibold text-white">{{ $project->title }}</a>
                                        </h3>
                                        <span class="flex items-center gap-2 text-white">
                                            <span class="w-2 h-2 rounded-full inline-block bg-sky-500"></span>
                                            {{ $project->tags }}
                                        </span>
                                        <a href="{{ url('project-detail/' . $project->id) }}" class="grid place-content-center transition mt-6 px-3 py-2 border border-sky-500 text-sky-500 text-sm rounded hover:bg-[#1E71FF] hover:text-white">
                                            View Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-next "></div>
                    <div class="swiper-button-prev "></div>
                    <div class="swiper-pagination text-white"></div>
                </div>
            </div>

            {{-- <div class="flex justify-center mt-14">
                <a href="{{ url('cv') }}"
                    class="text-white text-lg font-medium rounded-lg border border-white py-3 px-8 text-center hover:bg-[#68CE30]">See
                    More</a>
            </div> --}}
        </div>
    </section>

    {{-- projects section ends here --}}

    {{-- customers review here --}}

    <section class="py-12">
        <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-7xl py-120" style="background: url('{{ asset('img/testimonial-bg.jpg') }}') no-repeat center center/cover;">
            <div class="max-w-2xl mx-auto text-center mb-10">
                <h4 class="text-sky-500 text-lg font-medium uppercase mb-2">
                    CUSTOMER REVIEWS
                </h4>
                <h2 class="text-white font-bold lg:text-5xl text-4xl">
                    What’s Our Customer Say
                </h2>
            </div>
            <div class="md:flex">
                <div class="shadow-custom rounded-lg bg-[#16213C] p-7 relative">
                    <ul class="flex space-x-2 mb-6">
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                    </ul>
                    <q class="pb-8 block text-xl text-gray-200 italic">
                        Excellent, working with Haider Ali Amjad express was great. Thanks to their knowledge and
                        determination
                        our website looks great and functions really good.
                    </q>
                    <div class="flex space-x-4">
                        <img src="{{ asset('img/av-10.png') }}" alt="">
                        <div>
                            <h4 class="font-semibold text-white text-xl">
                                Esthar Howard
                            </h4>
                            <span class="text-gray-500 text-base">Travel Agent
                            </span>
                        </div>
                    </div>
                    <span class="absolute bottom-7 right-7">
                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.9637 67.8045C32.2719 71.1359 32.0362 80.1919 23.3608 92.7849C22.7045 93.7351 22.8236 95.0168 23.6385 95.8315C27.1755 99.3685 29.3654 101.6 30.9013 103.162C32.921 105.222 33.843 106.16 35.1926 107.383C36.0936 108.193 37.457 108.207 38.3676 107.413C53.4889 94.2556 70.2842 67.0667 67.8539 33.7564C66.4297 14.197 52.1628 0.000146351 33.9317 0.000147945C15.2223 0.00014958 0.000510688 15.2195 0.000512323 33.9292C0.000513901 51.9781 14.1668 66.7796 31.9637 67.8045ZM33.9317 4.78144C49.5879 4.78144 61.8469 17.1129 63.0864 34.1018C63.0864 34.1018 63.0864 34.1018 63.0864 34.1042C65.8204 71.5678 43.5505 95.9016 36.822 102.345C36.166 101.698 35.4166 100.937 34.3123 99.8122C32.9817 98.4581 31.1605 96.6044 28.4057 93.8401C38.9373 77.6145 36.9504 66.0536 36.0797 64.3959C35.6664 63.6091 34.8189 63.0791 33.9317 63.0791C17.8579 63.0791 4.78181 50.003 4.78181 33.9292C4.78181 17.8576 17.8579 4.78145 33.9317 4.78144Z" fill="#1E2B48"></path>
                            <path d="M116.868 67.8041C117.179 71.1261 116.95 80.1752 108.265 92.7845C107.611 93.7348 107.728 95.0164 108.543 95.8311C112.073 99.3612 114.26 101.591 115.794 103.152C117.821 105.216 118.745 106.157 120.094 107.383C120.996 108.193 122.359 108.205 123.27 107.416C138.391 94.2576 155.189 67.0733 152.763 33.756L152.763 33.7536C151.334 14.1966 137.065 -0.000250377 118.834 -0.000248783C100.124 -0.000247148 84.9024 15.2191 84.9024 33.9288C84.9024 51.9799 99.069 66.7838 116.868 67.8041ZM118.834 4.78105C134.487 4.78105 146.754 17.1125 147.996 34.1038L147.996 34.1014C150.722 71.5744 128.452 95.9036 121.724 102.345C121.066 101.698 120.314 100.932 119.207 99.8046C117.879 98.4506 116.06 96.5992 113.31 93.8397C123.842 77.6117 121.855 66.0532 120.984 64.3979C120.571 63.6111 119.721 63.0787 118.834 63.0787C102.76 63.0787 89.6837 50.0026 89.6837 33.9288C89.6837 17.8572 102.76 4.78106 118.834 4.78105Z" fill="#1E2B48"></path>
                        </svg>
                    </span>
                </div>
                <div class="shadow-custom rounded-lg bg-[#16213C] p-7 relative">
                    <ul class="flex space-x-2 mb-6">
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li class="text-yellow-500">
                            <i class="fa-solid fa-star"></i>
                        </li>
                    </ul>
                    <q class="pb-8 block text-xl text-gray-200 italic">
                        My experience with Haider Ali Amjad has been fantastic. I have worked with many web design
                        companies
                        and they are by far the most skilled and professional I have encountered.
                    </q>
                    <div class="flex space-x-4">
                        <img src="{{ asset('img/av-4.png') }}" alt="">
                        <div>
                            <h4 class="font-semibold text-white text-xl">
                                Hugo Boss
                            </h4>
                            <span class="text-gray-500 text-base">Travel Agent
                            </span>
                        </div>
                    </div>
                    <span class="absolute bottom-7 right-7">
                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.9637 67.8045C32.2719 71.1359 32.0362 80.1919 23.3608 92.7849C22.7045 93.7351 22.8236 95.0168 23.6385 95.8315C27.1755 99.3685 29.3654 101.6 30.9013 103.162C32.921 105.222 33.843 106.16 35.1926 107.383C36.0936 108.193 37.457 108.207 38.3676 107.413C53.4889 94.2556 70.2842 67.0667 67.8539 33.7564C66.4297 14.197 52.1628 0.000146351 33.9317 0.000147945C15.2223 0.00014958 0.000510688 15.2195 0.000512323 33.9292C0.000513901 51.9781 14.1668 66.7796 31.9637 67.8045ZM33.9317 4.78144C49.5879 4.78144 61.8469 17.1129 63.0864 34.1018C63.0864 34.1018 63.0864 34.1018 63.0864 34.1042C65.8204 71.5678 43.5505 95.9016 36.822 102.345C36.166 101.698 35.4166 100.937 34.3123 99.8122C32.9817 98.4581 31.1605 96.6044 28.4057 93.8401C38.9373 77.6145 36.9504 66.0536 36.0797 64.3959C35.6664 63.6091 34.8189 63.0791 33.9317 63.0791C17.8579 63.0791 4.78181 50.003 4.78181 33.9292C4.78181 17.8576 17.8579 4.78145 33.9317 4.78144Z" fill="#1E2B48"></path>
                            <path d="M116.868 67.8041C117.179 71.1261 116.95 80.1752 108.265 92.7845C107.611 93.7348 107.728 95.0164 108.543 95.8311C112.073 99.3612 114.26 101.591 115.794 103.152C117.821 105.216 118.745 106.157 120.094 107.383C120.996 108.193 122.359 108.205 123.27 107.416C138.391 94.2576 155.189 67.0733 152.763 33.756L152.763 33.7536C151.334 14.1966 137.065 -0.000250377 118.834 -0.000248783C100.124 -0.000247148 84.9024 15.2191 84.9024 33.9288C84.9024 51.9799 99.069 66.7838 116.868 67.8041ZM118.834 4.78105C134.487 4.78105 146.754 17.1125 147.996 34.1038L147.996 34.1014C150.722 71.5744 128.452 95.9036 121.724 102.345C121.066 101.698 120.314 100.932 119.207 99.8046C117.879 98.4506 116.06 96.5992 113.31 93.8397C123.842 77.6117 121.855 66.0532 120.984 64.3979C120.571 63.6111 119.721 63.0787 118.834 63.0787C102.76 63.0787 89.6837 50.0026 89.6837 33.9288C89.6837 17.8572 102.76 4.78106 118.834 4.78105Z" fill="#1E2B48"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- customers review ends here --}}
@endsection
