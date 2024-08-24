@extends('layouts.inc.app')
@section('content')
    <section class="py-[100px]" style="background: url('{{ asset('img/services/brcm.jpg') }}') no-repeat center center/cover;">
        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-5xl text-interface-100 font-semibold mb-2.5">Project Details</h1>
            <ul class="flex justify-center items-center space-x-2">
                <li class="text-lg font-medium text-interface-100">Home</li>
                <li>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 7.5L14 12.5L10 17.5" stroke="#04091E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </li>
                <li class="text-lg font-medium text-interface-100">Project Details</li>
            </ul>
        </div>
    </section>

    <section class="pt-120 pb-14">

        {{-- title here --}}

        <div class="my-20 flex justify-center">
            <a href="{{ $projectDetail->link }}" target="_blank" class="text-4xl font-semibold hover:text-blue-600 duration-300">{{ $projectDetail->title }}</a>
        </div>

        {{-- titile ends here --}}

        {{-- product description here --}}

        <div class="mt-32 mb-20">
            <h1 class="text-3xl text-center font-medium">Product Description</h1>
            <p class="mt-10 text-center text-xl">{{ $projectDetail->description }}</p>
        </div>

        {{-- product description ends here --}}

        {{-- main featurs section here --}}

        <div class="my-20 flex justify-evenly items-center">
            <div>
                <img class="w-[350px]" src="{{ asset('img/projects/' . $projectDetail->thumbnail) }}" alt="Error">
            </div>

            <div>
                <h1 class="mb-4 text-3xl font-semibold">Main Features</h1>
                @foreach ($project_features as $pro_feature)
                    <div class="flex items-center">
                        <span style="margin-right: 10px;" class="text-2xl">&bull;</span>
                        <p class="">{{ $pro_feature->feature }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- main featurs section ends here --}}

        {{-- tech used here --}}

        <div class="my-20">
            <h1 class="text-3xl text-center">Technology's Used</h1>
            <p class="mt-10 text-center text-xl">We will select solution stacks that optimize your projects and enhance overall project quality.</p>
            <div class="por_lang_usd mt-10 flex flex-wrap justify-evenly">
                @foreach ($project_languages as $language)
                    <div class="m-5">
                        <img class="h-[100px]" src="{{ asset('img/lang/' . $language->image) }}" alt="Error">
                        <p class="text-center mt-3 text-lg font-semibold">{{$language->name}}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- tech used ends here --}}

        {{-- screen shoots here --}}

        <div class="my-20">
            <h1 class="text-3xl text-center">ScreenShots</h1>
            <p class="mt-10 text-center text-xl">The screenshots provide you with a comprehensive overview of the project, development roadmap, and detailed design.</p>

            <div #swiperRef="" class="swiper mySwiper w-full h-60 px-1 lg:px-20 xl:px-0 mt-10">
                <div class="swiper-wrapper">
                    @foreach ($project_images as $pro_image)
                        <div class="swiper-slide">
                            <img style="user-select: none; cursor: grab;" src="{{ asset('img/projects/' . $pro_image->image) }}" class="w-full rounded" alt="Error">
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-next "></div>
                <div class="swiper-button-prev "></div>
                <div class="swiper-pagination text-white"></div>
            </div>
        </div>

        {{-- screen shoots ends here --}}

        {{-- tags here --}}

        <div class="my-20">
            <h1 class="text-3xl font-medium text-center">Tags: </h1>
            <p class="text-xl text-center mt-10">{{ $projectDetail->tags }}</p>
        </div>

        {{-- tags ends here --}}

        {{-- contact form here --}}

        @include('contact_form')

        {{-- contact form ends here --}}
    </section>
@endsection
