    @extends('layouts.inc.app')
    @section('content')
        <section class="pt-[100px] pb-[100px]" style="
          background: url('{{ asset('/img/services/brcm.jpg') }}') no-repeat center
            center/cover;
        ">
            <div class="max-w-lg mx-auto text-center">
                <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">
                    Contact Me
                </h1>
                <ul class="flex justify-center items-center space-x-2">
                    <li class="text-xl font-medium text-interface-100">Home</li>
                    <li>
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 7.5L14 12.5L10 17.5" stroke="#04091E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </li>
                    <li class="text-xl font-medium text-interface-100">Contact Me</li>
                </ul>
            </div>
        </section>


        {{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-154f5b6a-e4b8-4829-a412-8ba26c24d3b5" data-elfsight-app-lazy></div> --}}

        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-7d195888-5f23-42f9-9fd6-18ec88b7bd94" data-elfsight-app-lazy></div>


        <section class="pt-120">
            <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid lg:grid-cols-2 bg-[#F8FBFF] divide-y lg:divide-y-0 lg:divide-x divide-[#DFEAF9] border border-[#DFEAF9] shadow-customFive rounded-[15px]">

                    <div class="flex flex-col md:flex-row  gap-6 py-14 px-20">
                        <div>
                            <img src="{{ asset('img/icons/ci-1.svg') }}" alt="">
                        </div>
                        <div class="grow">
                            <h4 class="text-2xl font-semibold text-interface-100">
                                Our Address
                            </h4>
                            <address class="text-lg text-interface-200 not-italic">
                                Lahore, Pakistan
                            </address>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-6 py-14 px-20">
                        <div>
                            <img src="{{ asset('img/icons/ci-2.svg') }}" alt="">
                        </div>
                        <div class="grow">
                            <h4 class="text-2xl font-semibold text-interface-100">
                                Contact Info
                            </h4>
                            <p class="text-lg text-interface-200 not-italic">
                                Open a chat or give us call at <br>
                                <a href="tel:310 841 5500" class="font-bold text-interface-100">+923230436771</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 lg:py-120">
            <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 place-items-center lg:grid-cols-2 gap-10 xl:grid-cols-7">
                    <div class="xl:col-span-3 w-full">
                        <div>
                            <h2 class="text-interface-500 font-bold text-4xl leading-normal xl:text-5xl capitalize xl:leading-snug">
                                Have any
                                <span class="relative">
                                    <span class="relative z-20">Thought.</span>
                                    <svg class="absolute -left-4 md:-left-1 z-0 top-0" width="204" height="61" viewBox="0 0 204 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30.2354 3.79049C69.1075 3.09921 152.664 7.57177 186.934 20.378C223.844 34.1708 176.864 51.5472 126.365 56.3301C74.1181 61.2786 16.807 52.8912 6.47632 39.1849C-10.9639 16.046 64.0926 1.83083 122.121 3.36689" stroke="#DAED1A" stroke-width="6" stroke-linecap="round"></path>
                                    </svg>
                                </span>
                                Find here
                            </h2>
                        </div>

                        <div class="flex flex-col">
                            <div class="border-b border-interface-200 py-8">
                                <div class="flex justify-between items-center cursor-pointer accordion-header" data-te-collapse-init data-te-target="#collapseOne">
                                    <h3 class="text-2xl font-medium">
                                        <span class="inline-block accordion-number mr-4">01</span>
                                        Get a project overview
                                    </h3>
                                    <span class="accordion-icon">
                                        <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5" stroke-linejoin="round"></path>
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
                                <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header" data-te-collapse-init data-te-target="#collapseTwo">
                                    <h3 class="text-2xl font-medium">
                                        <span class="inline-block accordion-number mr-4">02</span>
                                        Task monitoring at a glance
                                    </h3>
                                    <span class="accordion-icon">
                                        <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="hidden accordion-body pl-5" id="collapseTwo" data-te-collapse-item>
                                    <div class="px-4 py-2">
                                        <p class="text-interface-100 text-xl mb-3">
                                            Developed a task monitoring dashboard using Laravel and PHP that provides a
                                            comprehensive overview of ongoing tasks and project progress.
                                            Implemented real-time data updates and visualizations to give stakeholders a
                                            quick and intuitive snapshot of task statuses and key metrics
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-b border-interface-200 py-8">
                                <div class="flex gap-5 justify-between items-center cursor-pointer accordion-header" data-te-collapse-init data-te-target="#collapseThree">
                                    <h3 class="text-2xl font-medium">
                                        <span class="inline-block accordion-number mr-4">03</span>
                                        Weekly Project
                                    </h3>
                                    <span class="accordion-icon">
                                        <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L7.5 8L14 1" stroke="#04091E" stroke-width="1.5" stroke-linejoin="round"></path>
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

        <section class="lg:py-120 py-20 relative overflow-hidden" style="
          background: url('{{ asset('img/testimonial-n-bg.jpg') }}') no-repeat
            center center/cover;
        ">
            <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

                <div>
                    <div class="max-w-lg mx-auto text-center mb-10">
                        <h3 class="text-2xl text-interface font-semibold">
                            Take care of more than 100K customers
                        </h3>
                    </div>
                    <img src="{{ asset('img/big-el.png') }}" class="absolute hidden xl:block right-0 -bottom-10" alt="">
        </section>

        <section class="mt-10 mx-auto container">
            <div class="max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-7xl py-120"></div>
            <div class="max-w-2xl mx-auto text-center mb-10">
                <h4 class="text-lime-500 text-lg font-medium uppercase mb-2">
                    CUSTOMER REVIEWS
                </h4>
                <h2 class="font-bold lg:text-5xl text-4xl">
                    What’s Our Customer Say
                </h2>
            </div>
            <div class="md:flex">
                <div class="shadow-custom rounded-lg p-7 relative">
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
                    <q class="pb-8 block text-xl text-gray-500 italic">
                        I just want to thank you for the exceptional website that you created for us Your pricing is fair,
                        your
                        work is superb and the customer service is excellent and to top it off you guys are extremely fast!
                    </q>
                    <div class="flex space-x-4">
                        <img src="http://sayedbilal.com.test/img/av-10.png" alt="">
                        <div>
                            <h4 class="font-semibold text-xl">
                                Esthar Howard
                            </h4>
                            <span class="text-gray-500 text-base">Travel Agent
                            </span>
                        </div>
                    </div>
                    <span class="absolute bottom-7 right-7">
                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.9637 67.8045C32.2719 71.1359 32.0362 80.1919 23.3608 92.7849C22.7045 93.7351 22.8236 95.0168 23.6385 95.8315C27.1755 99.3685 29.3654 101.6 30.9013 103.162C32.921 105.222 33.843 106.16 35.1926 107.383C36.0936 108.193 37.457 108.207 38.3676 107.413C53.4889 94.2556 70.2842 67.0667 67.8539 33.7564C66.4297 14.197 52.1628 0.000146351 33.9317 0.000147945C15.2223 0.00014958 0.000510688 15.2195 0.000512323 33.9292C0.000513901 51.9781 14.1668 66.7796 31.9637 67.8045ZM33.9317 4.78144C49.5879 4.78144 61.8469 17.1129 63.0864 34.1018C63.0864 34.1018 63.0864 34.1018 63.0864 34.1042C65.8204 71.5678 43.5505 95.9016 36.822 102.345C36.166 101.698 35.4166 100.937 34.3123 99.8122C32.9817 98.4581 31.1605 96.6044 28.4057 93.8401C38.9373 77.6145 36.9504 66.0536 36.0797 64.3959C35.6664 63.6091 34.8189 63.0791 33.9317 63.0791C17.8579 63.0791 4.78181 50.003 4.78181 33.9292C4.78181 17.8576 17.8579 4.78145 33.9317 4.78144Z" fill="#f7f8fa"></path>
                            <path d="M116.868 67.8041C117.179 71.1261 116.95 80.1752 108.265 92.7845C107.611 93.7348 107.728 95.0164 108.543 95.8311C112.073 99.3612 114.26 101.591 115.794 103.152C117.821 105.216 118.745 106.157 120.094 107.383C120.996 108.193 122.359 108.205 123.27 107.416C138.391 94.2576 155.189 67.0733 152.763 33.756L152.763 33.7536C151.334 14.1966 137.065 -0.000250377 118.834 -0.000248783C100.124 -0.000247148 84.9024 15.2191 84.9024 33.9288C84.9024 51.9799 99.069 66.7838 116.868 67.8041ZM118.834 4.78105C134.487 4.78105 146.754 17.1125 147.996 34.1038L147.996 34.1014C150.722 71.5744 128.452 95.9036 121.724 102.345C121.066 101.698 120.314 100.932 119.207 99.8046C117.879 98.4506 116.06 96.5992 113.31 93.8397C123.842 77.6117 121.855 66.0532 120.984 64.3979C120.571 63.6111 119.721 63.0787 118.834 63.0787C102.76 63.0787 89.6837 50.0026 89.6837 33.9288C89.6837 17.8572 102.76 4.78106 118.834 4.78105Z" fill="#f7f8fa"></path>
                        </svg>
                    </span>
                </div>
                <div class="shadow-custom rounded-lg p-7 relative">
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
                    <q class="pb-8 block text-xl text-gray-500 italic">
                        thank you so much for all your help. Since we launched the website we had more than 400 hundred
                        people
                        registering for our event. I look forward to working with you guys again on a new project.
                    </q>
                    <div class="flex space-x-4">
                        <img src="http://sayedbilal.com.test/img/av-4.png" alt="">
                        <div>
                            <h4 class="font-semibold text-xl">
                                Hugo Boss
                            </h4>
                            <span class="text-gray-500 text-base">Travel Agent
                            </span>
                        </div>
                    </div>
                    <span class="absolute bottom-7 right-7">
                        <svg width="153" height="108" viewBox="0 0 153 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.9637 67.8045C32.2719 71.1359 32.0362 80.1919 23.3608 92.7849C22.7045 93.7351 22.8236 95.0168 23.6385 95.8315C27.1755 99.3685 29.3654 101.6 30.9013 103.162C32.921 105.222 33.843 106.16 35.1926 107.383C36.0936 108.193 37.457 108.207 38.3676 107.413C53.4889 94.2556 70.2842 67.0667 67.8539 33.7564C66.4297 14.197 52.1628 0.000146351 33.9317 0.000147945C15.2223 0.00014958 0.000510688 15.2195 0.000512323 33.9292C0.000513901 51.9781 14.1668 66.7796 31.9637 67.8045ZM33.9317 4.78144C49.5879 4.78144 61.8469 17.1129 63.0864 34.1018C63.0864 34.1018 63.0864 34.1018 63.0864 34.1042C65.8204 71.5678 43.5505 95.9016 36.822 102.345C36.166 101.698 35.4166 100.937 34.3123 99.8122C32.9817 98.4581 31.1605 96.6044 28.4057 93.8401C38.9373 77.6145 36.9504 66.0536 36.0797 64.3959C35.6664 63.6091 34.8189 63.0791 33.9317 63.0791C17.8579 63.0791 4.78181 50.003 4.78181 33.9292C4.78181 17.8576 17.8579 4.78145 33.9317 4.78144Z" fill="#f7f8fa"></path>
                            <path d="M116.868 67.8041C117.179 71.1261 116.95 80.1752 108.265 92.7845C107.611 93.7348 107.728 95.0164 108.543 95.8311C112.073 99.3612 114.26 101.591 115.794 103.152C117.821 105.216 118.745 106.157 120.094 107.383C120.996 108.193 122.359 108.205 123.27 107.416C138.391 94.2576 155.189 67.0733 152.763 33.756L152.763 33.7536C151.334 14.1966 137.065 -0.000250377 118.834 -0.000248783C100.124 -0.000247148 84.9024 15.2191 84.9024 33.9288C84.9024 51.9799 99.069 66.7838 116.868 67.8041ZM118.834 4.78105C134.487 4.78105 146.754 17.1125 147.996 34.1038L147.996 34.1014C150.722 71.5744 128.452 95.9036 121.724 102.345C121.066 101.698 120.314 100.932 119.207 99.8046C117.879 98.4506 116.06 96.5992 113.31 93.8397C123.842 77.6117 121.855 66.0532 120.984 64.3979C120.571 63.6111 119.721 63.0787 118.834 63.0787C102.76 63.0787 89.6837 50.0026 89.6837 33.9288C89.6837 17.8572 102.76 4.78106 118.834 4.78105Z" fill="#f7f8fa"></path>
                        </svg>
                    </span>
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
