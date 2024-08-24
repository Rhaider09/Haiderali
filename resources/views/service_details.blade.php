@extends('layouts.inc.app')
@section('content')
    <section class="pt-[100px] pb-[100px]" style="background: url('{{ asset('img/services/brcm.jpg') }}') no-repeat center center/cover;">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
                Services Details
            </h1>
            <ul class="flex justify-center items-center space-x-2">
                <li class="text-lg font-medium text-interface-100">Home</li>
                <li>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 7.5L14 12.5L10 17.5" stroke="#04091E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </li>
                <li class="text-lg font-medium text-interface-100">
                    Services Details
                </li>
            </ul>
        </div>
    </section>

    <section class="lg:pt-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div>
                <div class="pb-5 border-b border-b-interface-200">
                    {{-- @if ($serviceDetail->images)
                        <img src="{{ asset('img/services/' . $serviceDetail->images) }}" class="rounded-lg w-full h-96" alt="Error">
                    @endif --}}
                    <div class="flex flex-col md:flex-row justify-between mt-10">
                        {{-- <div>
                            <h4 class="text-lg font-medium text-interface-500">Crated by Fallow</h4>
                            <span>20 Jan. 2023</span>
                        </div> --}}
                        <div class="flex items-center gap-4">
                            <span class="text-lg font-medium text-interface-500">Share this Service</span>
                            <div class="flex space-x-3">
                                <a href="https://wa.me/+923334478044"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="https://github.com/sayedbilalhussain"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://stackoverflow.com/users/9432459/sayed-bilal-hussain"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-stack-overflow"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/sayed-bilal-hussain-06283715a/"
                                    class="text-white bg-gray-800 hover:bg-blue-500 transition-all text-lg w-10 h-10 rounded-full inline-flex justify-center items-center"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <h3 class="text-2xl font-semibold mb-5">
                        {{ $serviceDetail->title }}
                    </h3>
                    <p class="text-lg text-interface-200 mb-5">
                        {{ $serviceDetail->description }}
                    </p>

                    {{-- <h3 class="text-2xl font-semibold mb-5">
                        Do your research ahead of time
                    </h3>
                    <p class="text-lg text-interface-200">
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a the a
                        more-or-less normal distribution of letters, as opposed to using
                        '
                    </p> --}}
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mt-10">
                    <div>
                        <img src=" {{ asset('img/services/th-md-1.jpg') }}" class="w-full rounded" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('img/services/th-md-2.jpg') }}" class="w-full rounded" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('img/services/th-md-3.jpg') }}" class="w-full rounded" alt="">
                    </div>
                </div>
                <ul class="mt-10 mb-14 space-y-3 list-disc pl-5">
                    <li class="text-interface-200 text-lg">
                        Brainwriting: Everyone writes down three ideas and passes their
                        ideas to the person on their left (or right), who builds off
                        those ideas before passing them on again. This way, ideas can
                        cross-pollinate, morph and build on top of each other from
                        different perspectives. After all, two heads are better than
                        one.
                    </li>
                    <li class="text-interface-200 text-lg">
                        Rapid ideation: Everyone writes down as many ideas as they can
                        in a set amount of time before anything is discussed or
                        critiqued. This is a fun way to get all the good (and bad) ideas
                        out fast and bring a sense of fun urgency to the session.
                    </li>
                    <li class="text-interface-200 text-lg">
                        Figure storming: The group picks a well-known figure who is not
                        in the room and asks how they would approach the problem. For
                        example, “How would Barack Obama (or Harry Potter, or anyone
                        else) approach this problem?” - prepare for some funny answers
                        here, this method is a good ice-breaker for everyone involved.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="py-11 px-14 rounded-2xl"
                style="
                      background: url('{{ asset('img/services/service-cta-bg.jpg') }} ') no-repeat
                        center center/cover;
                    ">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-10 lg:items-center justify-between">
                    <div class="grow">
                        <h2 class="text-white font-semibold text-4xl leading-normal xl:leading-snug xl:text-5xl">
                            Having any Query? <br>
                            Book an appointment.
                        </h2>
                    </div>
                    <div class="shrink-0">
                        <a href="{{ url('/contact') }}"
                            class="bg-white inline-flex bg-opacity-10 py-5 px-10 rounded-custom text-white">Send Us
                            Message</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- slider --}}

    <section class="pb-20 lg:pb-120">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 place-items-center lg:grid-cols-2 gap-10 xl:grid-cols-7">
                <div class="xl:col-span-3 w-full">
                    <div>
                        <h2
                            class="text-interface-500 font-bold text-4xl leading-normal xl:text-5xl capitalize xl:leading-snug">
                            Have any
                            <span class="relative">
                                <span class="relative z-20">Thought.</span>
                                <svg class="absolute -left-4 md:-left-1 z-0 top-0" width="204" height="61"
                                    viewBox="0 0 204 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.2354 3.79049C69.1075 3.09921 152.664 7.57177 186.934 20.378C223.844 34.1708 176.864 51.5472 126.365 56.3301C74.1181 61.2786 16.807 52.8912 6.47632 39.1849C-10.9639 16.046 64.0926 1.83083 122.121 3.36689"
                                        stroke="#DAED1A" stroke-width="6" stroke-linecap="round"></path>
                                </svg>
                            </span>
                            Find here
                        </h2>
                    </div>

                    <div class="flex flex-col">
                        <div class="border-b border-interface-200 py-8">
                            <div class="flex justify-between items-center cursor-pointer accordion-header"
                                data-te-collapse-init data-te-target="#collapseOne">
                                <h3 class="text-2xl font-medium">
                                    <span class="inline-block accordion-number mr-4">01</span>
                                    Get a project overview
                                </h3>
                                <span class="accordion-icon">
                                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>

                            <div class="hidden accordion-body pl-5" id="collapseOne" data-te-collapse-item>
                                <div class="px-4 py-2">
                                    <p class="text-interface-100 text-xl mb-3">
                                        Responsive Web App Development,Custom Web Application,Content Management System
                                        (CMS),
                                        API Integration,Booking and Reservation System,Web App Backend Development,
                                        Single-Page Applications (SPA),API Development,
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="border-b border-interface-200 py-8">
                            <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header"
                                data-te-collapse-init data-te-target="#collapseTwo">
                                <h3 class="text-2xl font-medium">
                                    <span class="inline-block accordion-number mr-4">02</span>
                                    Task monitoring at a glance
                                </h3>
                                <span class="accordion-icon">
                                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="hidden accordion-body pl-5" id="collapseTwo" data-te-collapse-item>
                                <div class="px-4 py-2">
                                    <p class="text-interface-100 text-xl mb-3">
                                        Developed a task monitoring dashboard using Laravel and PHP that provides a
                                        comprehensive overview of ongoing tasks and project progress.
                                        Implemented real-time data updates and visualizations to give stakeholders a quick
                                        and intuitive snapshot of task statuses and key metrics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-interface-200 py-8">
                            <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header"
                                data-te-collapse-init data-te-target="#collapseThree">
                                <h3 class="text-2xl font-medium">
                                    <span class="inline-block accordion-number mr-4">03</span>
                                    Weekly Project
                                </h3>
                                <span class="accordion-icon">
                                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="hidden accordion-body pl-5" id="collapseThree" data-te-collapse-item>
                                <div class="px-4 py-2">
                                    <p class="text-interface-100 text-xl mb-3">
                                        Integrated task assignment and collaboration features, enabling team members to
                                        collaborate, communicate, and track progress in real-time.
                                        Designed a centralized dashboard that provides a comprehensive view of ongoing
                                        projects, upcoming deadlines, and task statuses for effective project monitoring
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @include('contact_form')
            </div>
        </div>
    </section>

    <script>
        const accordionButtons = document.querySelectorAll('[data-te-collapse-init]');


        accordionButtons.forEach((button) => {
            button.addEventListener('click', () => {

                const target = button.dataset.teTarget;
                const accordionBody = document.querySelector(target);
                accordionBody.classList.toggle('hidden');


                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                button.setAttribute('aria-expanded', !isExpanded);


                const icon = button.querySelector('svg');
                icon.classList.toggle('rotate-[-180deg]');


                const collapsedIcon = button.querySelector('.group-[data-te-collapse-collapsed] svg');
                collapsedIcon.classList.toggle('fill-[#212529]');
            });
        });
    </script>
@endsection
