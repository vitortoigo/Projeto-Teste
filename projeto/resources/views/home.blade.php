@extends('layout.main')
@section('title', 'Testando')

@section('content')


<section class="py-10">
    <div class="flex justify-center items-center">
        <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
            <div role="main" class="relative flex flex-col items-center justify-center">
                <div>
                    <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Notícias da semana</h1>
                    <p class="w-full text-base leading-normal text-center text-gray-600 dark:text-white mt-4">As principais notícias da semana estão aqui!</p>
                </div>
                <div>
                    <a href="create/blog" class="absolute right-0 bottom-0 rounded-md flex space-x-2 px-5 h-10 font-normal text-sm leading-3 text-white bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 focus:bg-orange-400 hover:bg-orange-400 duration-150 justify-center items-center">Cadastrar novo evento</a>
                </div>
            </div>
            <div class="lg:flex items-stretch md:mt-12 mt-8">
                <div class="w-full">
                    <div class="grid grid-cols-4 gap-4">
                        @foreach($blogs as $b)
                        <div class="w-full relative">
                            <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">{{ $b->category }}</p>
                            <div class="absolute bottom-0 left-0 p-6">
                                <h2 class="text-xl font-semibold 5 text-white">{{ $b->title }}</h2>
                                <p class="line-clamp-3 text-base leading-4 text-white mt-2">{{ $b->description }}</p>
                                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                    <p class="pr-2 text-sm font-medium leading-none">Leia mais</p>
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg" alt="arrow">
                                </a>
                            </div>
                            <img src="img/blogs/{{ $b->image }}" class="w-full" alt="chair" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('elements.pagination')

@endsection