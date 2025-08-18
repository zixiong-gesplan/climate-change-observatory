@extends('layouts.app')

@section('content')

    <main class="py-4 px-2 md:px-8 md:py-12 flex flex-col gap-4">
        <section class="flex flex-col md:flex-row gap-2 items-center">
            <div class="w-full md:w-1/2">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="text-xl md:text-3xl text-left font-bold text-gray-700 text-balance">
                                Porque adaptarse a las variantes climáticas no es una opción. 
                                <span class="text-green-600">Es una necesidad.</span> 
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p class="text-xl md:text-3xl text-left font-bold text-gray-700 text-balance">
                                <span class="text-green-600"> Observa. Comprende. Actúa. </span> Un futuro más sostenible empieza con el conocimiento de datos climáticos
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <p class="text-xl md:text-3xl text-left font-bold text-gray-700 text-balance">
                                Conocer bien las amenazas es el paso previo a <span class="text-green-600">la actuación certera.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <p class="text-lg text-left text-gray-500 text-balance my-4 md:text-2xl">El seguimiento de la evolución del cambio climático como eje prioritario dentro del contexto científico de la Macaronesia y África Occidental.</p>
        
                <div class="flex flex-row gap-2 text-sm">
                    <a class="bg-green-600 rounded-full px-4 py-2 text-white font-bold" href="cambio-climatico#projects">
                        Nuestras iniciativas
                    </a>
                    <a href="observatorio" class="text-green-600 font-bold px-4 py-2">
                        Descubre más del Observatorio
                        
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/swiper1.jpg" class="rounded-lg drop-shadow-lg w-full aspect-video"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/swiper2.jpg" class="rounded-lg drop-shadow-lg w-full aspect-video"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/swiper3.jpg" class="rounded-lg drop-shadow-lg w-full aspect-video"/>
                        </div>
                    </div>
                </div> 
            </div>

        </section>
        <section class="flex flex-col md:flex-row">
            <h2 class="w-full bg-green-600 text-white text-center text-6xl font-bold py-8 px-6 md:w-1/4 md:text-4xl flex items-center justify-center" >
                Asistencia
            </h2>
            <div class="w-full bg-slate-800 text-white text-2xl font-bold py-8 px-6 md:w-3/4 h-full">
                <p class="text-balance mb-4">
                    Desde el Observatorio queremos asistirte en en la búsqueda de sostenibilidad para luchar contra el cambio climático
                </p>
                <div class="flex overflow-x-visible gap-4">
                    <a href="huella-carbono" target="_blank" class="text-base font-normal border rounded-full border-blue-300 bg-slate-500 px-4 py-2 flex gap-4 items-center">
                        Caculadora de CO2 
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none">
                            <g id="Interface / External_Link">
                                <path id="Vector" d="M10.0002 5H8.2002C7.08009 5 6.51962 5 6.0918 5.21799C5.71547 5.40973 5.40973 5.71547 5.21799 6.0918C5 6.51962 5 7.08009 5 8.2002V15.8002C5 16.9203 5 17.4801 5.21799 17.9079C5.40973 18.2842 5.71547 18.5905 6.0918 18.7822C6.5192 19 7.07899 19 8.19691 19H15.8031C16.921 19 17.48 19 17.9074 18.7822C18.2837 18.5905 18.5905 18.2839 18.7822 17.9076C19 17.4802 19 16.921 19 15.8031V14M20 9V4M20 4H15M20 4L13 11" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </main>
    <section class="bg-slate-50 p-4 flex flex-col md:flex-row md:items-center gap-8">
        <div class="w-full md:w-1/2">
            <img src="images/partners.png" alt="" srcset="" class="w-full">
        </div>
        <div  class="w-full md:w-1/2">
            <p class="font-bold mt-4 text-lg">
                Un compromiso desde diferentes historias y bajo un mismo final.
            </p>
            <a href="#" class="text-green-600 font-bold">
                Lee nuestras historias
            </a>
        </div>
    </section>

    <section class="bg-green-800 text-white font-bold py-8 px-6 flex flex-col md:flex-row md:items-center gap-8 ">
        <div class="w-full md:w-1/2 flex flex-row items-center">
            <img src="images/climate_change.png" alt="" class="shadow-white filter drop-shadow-lg max-h-96 mx-auto">
        </div>
        <div class="w-full md:w-1/2">
            <h1 class="text-4xl mb-8">
                El cambio climatico es un problema de todos.
            </h1>
            <p class="py-2 text-lg">
                Aunque estos cambios pueden ocurrir de manera natural debido a factores como erupciones volcánicas y variaciones en la radiación solar, en la actualidad el término se usa principalmente para referirse al calentamiento global causado por la actividad humana, en concreto por la combustión de combustibles fósiles. Estas variaciones climáticas se están intensificando y repercuten sobre todo ser vivo en el planeta 
            </p>
            <a href="cambio-climatico" class="text-green-600 font-bold bg-white rounded-full px-4 py-1 mt-2">
                Más información
            </a>
        </div>

    </section>

    <section class="px-4 flex flex-col md:flex-row gap-4 my-8">
        <div class="w-full md:w-1/2">
            <h1 class="text-4xl mb-8 font-bold">
                Impulsamos el cambio desde diferentes areas de nuestra gobernanza
            </h1>
            <p></p>
        </div>
        <div class="grid grid-cols-2 gap-4 px-4 w-full md:w-1/2">
            <button class="border rounded-xl w-full border-green-300 hover:drop-shadow-xl hover:shadow-lg hover:shadow-green-400 h-24 font-bold p-4">
                Universidades
            </button>
            <button class="border rounded-xl w-full border-green-300 hover:drop-shadow-xl hover:shadow-lg hover:shadow-green-400 h-24 font-bold p-4">
                Goberinos Regionales
            </button>
            <button class="border rounded-xl w-full border-green-300 hover:drop-shadow-xl hover:shadow-lg hover:shadow-green-400 h-24 font-bold p-4">
                Empresas públicas
            </button>
            <button class="border rounded-xl w-full border-green-300 hover:drop-shadow-xl hover:shadow-lg hover:shadow-green-400 h-24 font-bold p-4">
                Empresas privadas
            </button>
            <button class="border rounded-xl w-full border-green-300 hover:drop-shadow-xl hover:shadow-lg hover:shadow-green-400 h-24 font-bold p-4">
                ONGs
            </button>
            <button class="border rounded-xl w-full border-green-300 hover:drop-shadow-xl hover:shadow-lg hover:shadow-green-400 h-24 font-bold p-4">
                Administraciones locales
            </button>
        </div>
    </section>
@endsection
