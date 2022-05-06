@extends('layout.main')
@section('title', 'Criar Notícia')

@section('content')

<section class="py-10">
    <h1 class="text-center font-bold text-4xl">Cadastrar Notícias</h1>
    
    <form action="/" method="post" class="w-6/12 mx-auto flex lg:flex-column flex-col items-center py-8 px-4 gap-4" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col w-full lg:py-0 py-4">
            <label for="email2" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Título</label>
            <div class="relative">
                <div class="absolute text-gray-600 dark:text-gray-400 flex items-center px-4 border-r dark:border-gray-700 h-full cursor-pointer">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1.svg" alt="mail">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1dark.svg" alt="mail">
                </div>
                <input id="email2" name="title" class="w-full text-gray-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:text-gray-400 focus:outline-none  dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal h-10 flex items-center pl-16 text-sm border-gray-300 rounded border shadow" />
            </div>
        </div>
        <div class="flex flex-col w-full lg:py-0 py-4">
            <label for="email2" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Categoria</label>
            <div class="relative">
                <div class="absolute text-gray-600 dark:text-gray-400 flex items-center px-4 border-r dark:border-gray-700 h-full cursor-pointer">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1.svg" alt="mail">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1dark.svg" alt="mail">
                </div>
                <input id="email2" name="category" class="w-full text-gray-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:text-gray-400 focus:outline-none  dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal h-10 flex items-center pl-16 text-sm border-gray-300 rounded border shadow" />
            </div>
        </div>
        <div class="flex flex-col w-full lg:py-0 py-4">
            <label for="email2" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Imagem</label>
            <div class="relative">
                <div class="absolute text-gray-600 dark:text-gray-400 flex items-center px-4 border-r dark:border-gray-700 h-full cursor-pointer">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1.svg" alt="mail">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1dark.svg" alt="mail">
                </div>
                <input type="file" multiple id="email2" name="image" class="w-full text-gray-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:text-gray-400 focus:outline-none  dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal h-10 flex items-center pl-16 text-sm border-gray-300 rounded border shadow" />
            </div>
        </div>
        <div class="flex flex-col w-full lg:py-0 py-4">
            <label for="email2" class="text-gray-800 dark:text-gray-100 text-sm font-bold leading-tight tracking-normal mb-2">Email</label>
            <div class="relative">
                <div class="absolute text-gray-600 dark:text-gray-400 flex items-center px-4 border-r dark:border-gray-700 h-full cursor-pointer">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1.svg" alt="mail">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/input_with_icon_at_start-svg1dark.svg" alt="mail">
                </div>
                <textarea id="email2" name="description" rows="5" class="w-full py-2 text-gray-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 dark:text-gray-400 focus:outline-none  dark:focus:border-indigo-700 dark:border-gray-700 dark:bg-gray-800 bg-white font-normal flex items-center pl-16 text-sm border-gray-300 rounded border shadow"></textarea>
            </div>
        </div>
        <div>
            <a href="/" class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-indigo-600 rounded border border-indigo-700 text-indigo-700 px-8 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-700">Cancelar</a>
            <button type="submit" class="mx-2 my-2 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-600">Cadastrar</button>
        </div>
    </form>
</section>


@endsection