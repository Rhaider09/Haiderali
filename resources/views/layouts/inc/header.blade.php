<header>

    <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex justify-between py-3">
            <div class="grow">
                <div class="flex space-x-0 md:space-x-14">

                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-envelope text-sky-500"></i>
                        <a href="mailto:haider@ali.com" class="text-gray-200 text-base">haider@ali.com</a>
                    </div>
                    <div class="space-x-2 hidden md:flex items-center">
                        <i class="fa-brands fa-whatsapp text-sky-500"></i>
                        <a href="https://wa.me/+923230436771" class="text-gray-200 text-base">+923230436771</a>
                    </div>

                </div>
            </div>
            <div class="flex items-center space-x-6">
                <a href="https://wa.me/+923230436771" class="group transition-all text-gray-200 hover:text-sky-400" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="https://github.com/Rhaider09" class="group transition-all text-gray-200 hover:text-sky-400" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://stackoverflow.com/users/23036570/haider-ali" class="group transition-all text-gray-200 hover:text-sky-400" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-stack-overflow"></i>
                </a>
                <a href="https://www.linkedin.com/in/haider-ali-amjad-a89438236/" class="group transition-all text-gray-200 hover:text-sky-400" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white mx-auto rounded-lg">
        <nav class="border-gray-200 px-9 lg:px-3 py-3 dark:bg-gray-800 rounded-lg">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ url('/') }}" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Haider Ali Amjad</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="{{ url('/contact') }}" class="py-5 px-6 bg-sky-400 text-gray-800 dark:text-white hover:bg-sky-500 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm mr-2 dark:hover:bg-sky-500 focus:outline-none dark:focus:ring-sky-800">
                        Let's Talk <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{ url('/') }}" class="hover:text-sky-400 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" data-dropdown-delay="500" data-dropdown-trigger="hover">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/services') }}" class="hover:text-sky-400 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" data-dropdown-delay="500" data-dropdown-trigger="hover">Servies</a>
                        </li>
                        <li>
                            <a href="{{ url('/portfolio') }}" class="hover:text-sky-400 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" data-dropdown-delay="500" data-dropdown-trigger="hover">Portfolio</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}" class="hover:text-sky-400 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" data-dropdown-delay="500" data-dropdown-trigger="hover">About</a>
                        </li>
                        <li>
                            <a href="{{ url('cv') }}" class="hover:text-sky-400 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" data-dropdown-delay="500" data-dropdown-trigger="hover">My CV</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="hover:text-sky-400 block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" data-dropdown-delay="500" data-dropdown-trigger="hover">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
