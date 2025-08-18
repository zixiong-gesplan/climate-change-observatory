@extends('layouts.app')

@section('content')
    <section class="w-full relative -z-10 flex gap-10 overflow-hidden h-48 px-8">
        <figure class="relative w-full rounded-lg overflow-hidden bg-cover bg-no-repeat">
            <img class=" object-cover absolute rounded-lg" src="/public/images/Panorama-ITER.jpg" alt="image description" loading="lazy">
            <figcaption class="w-full h-full bg-green-300 bg-opacity-50 p-4 transition-all text-black absolute duration-300 cursor pointer hover:bg-opacity-0 rounded-lg">
                <h2 class="text-3xl font-bold w-full text-center h-full flex justify-center items-center text-white">El Observatorio de Cambio Climatico de la Macaronesia</h2>
            </figcaption>
        </figure>
    </section>

    <main class="w-full px-8 lg:w-8/12 mx-auto my-4 flex flex-col gap-4">
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-4">
                <x-ImageZoom 
                    src="/public/images/observatorio_v_1.png"
                    class="w-full h-full object-cover "
                />
                <div class="flex flex-col gap-4">
                    <x-ImageZoom 
                        src="https://fastly.picsum.photos/id/1/200/300.jpg?hmac=jH5bDkLr6Tgy3oAg5khKCHeunZMHq0ehBZr6vGifPLY"
                        class="w-full max-h-4/5"
                    />
                    <div class="w-full bg-green-600 rounded-lg flex justify-center items-center text-center flex-col py-4">
                        <h3 class="text-2xl text-white font-bold">+20</h3>
                        <p class="text-white font-semibold">Años de experiencia</p>
                    </div>
                </div>
            </div>
            <blockquote class="p-4 border-s-4 border-green-300 bg-green-50 dark:border-green-500 dark:bg-green-800">
                <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">
                    "Somos un ente supraregional que conecta territorios y comunidades a ambos lados del Atlántico. Nuestra área de acción abarca toda la Macaronesia <span class="text-green-600"> —Azores, Madeira, Canarias, Cabo Verde— </span> y se extiende hasta localidades estratégicas en el continente africano. Un espacio único donde confluyen biodiversidad, cultura y oportunidades, y donde trabajamos para impulsar un desarrollo sostenible, integrado y con visión de futuro"
                </p>
            </blockquote>
        </section>
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 h-full">
            <div class="grid grid-rows-1 grid-cols-3 lg:grid-cols-1 lg:grid-rows-3 gap-4">
                <div class="w-full bg-green-600 rounded-lg flex flex-col px-8 py-4 gap-2">
                    <h3 class="text-4xl text-left lg:text-lg font-bold px-4 py-2 rounded-md bg-white text-green-600 w-full md:w-1/2">Nuestra misión</h3>
                    <p class="text-white text-sm md:text-base font-semibold">Conectamos territorios, unimos personas, impulsamos futuro</p>
                </div>
                <div class="w-full bg-green-600 rounded-lg flex flex-col px-8 py-4 gap-2 ">
                    <h3 class="text-4xl text-left lg:text-lg font-bold px-4 py-2 rounded-md bg-white text-green-600 w-full md:w-1/2">Nuestro objetivo</h3>
                    <p class="text-white text-sm md:text-base font-semibold">Ser el puente atlántico hacia un desarrollo sostenible y compartido</p>
                </div>
                <div class="w-full bg-green-600 rounded-lg flex flex-col px-8 py-4 gap-2 ">
                    <h3 class="text-4xl text-left lg:text-lg font-bold px-4 py-2 rounded-md bg-white text-green-600 w-full md:w-1/2">Nuesrta historia</h3>
                    <p class="text-white text-sm md:text-base font-semibold">Un viaje que une culturas, mares y comunidades desde el origen</p>
                </div>
            </div>
            <div class="w-full">
                <x-ImageZoom 
                    src="/public/images/observatorio_2.png"
                    class="w-full aspect-square object-cover"
                />
            </div>
        </section>
    </main>
    <section class="w-full bg-green-600 py-4">
        <div class="w-8/12 mx-auto flex gap-4 flex-col lg:flex-row">
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                <h1 class="text-6xl font-bold text-green-300">7</h1>
                <p class="text-white font-semibold">Regiones</p>
            </div>
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                <h1 class="text-6xl font-bold text-green-300">16</h1>
                <p class="text-white font-semibold">Entidades</p>
            </div>
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                <h1 class="text-6xl font-bold text-green-300">2</h1>
                <p class="text-white font-semibold">Proyectos</p>
            </div>
            <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                <h1 class="text-6xl font-bold text-green-300">+20</h1>
                <p class="text-white font-semibold">Años de experiencia</p>
            </div>
        </div>
    </section>
    <section class="w-full mt-2">
        <div class="w-8/12 mx-auto grid grid-rows-3 gap-2">
            <div class="flex gap-4 flex-col lg:flex-row">
                <div class="w-2/3">
                    <x-ImageZoom 
                        src="/public/images/acidificacion_portada.jpeg" 
                        class="w-full h-full duration-500 ease-in-out hover:scale-125 cursor-pointer rounded-lg object-cover"
                    />
                </div>
                <div class="rounded-lg bg-green-700 p-4 flex flex-col gap-4 m-0 w-1/3">
                    <h1 class="text-4xl text-white">Nuestras metas</h1>
                    <p class="text-white">Buscamos mejorar el entorno en la macaronesia</p>
                    <button class="bg-green-50 text-black rounded-full max-w-48 py-1">Saber más</button>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-4">
                <div class="rounded-lg bg-green-600 p-4 text-white font-semibold">
                    <svg class="w-16 h-16" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" stroke="white"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                            aria-labelledby="title desc" role="img">
                        <title id="title">Compromiso climático</title>
                        <desc id="desc">Escudo con una hoja y una marca de verificación</desc>

                        <!-- Escudo -->
                        <path d="M12 3l7 3v6c0 5-4.5 8-7 9-2.5-1-7-4-7-9V6l7-3z"/>

                        <!-- Check de compromiso -->
                        <path d="M6.8 10.2l1.6 1.8 2.9-3.5"/>

                        <!-- Hoja (compromiso con el clima) -->
                        <path d="M9 15c2.6-4 6.2-5 7.5-3.2 1.8 2.8-2.7 6.7-7.5 6.7"/>
                        <path d="M9 15l5.2-3.2"/>
                    </svg>

                    <h1 class="text-2xl my-4">
                        Compromiso Climático
                    </h1>
                    <p class="text-sm">
                        Trabajamos con dedicación para proteger los ecosistemas de la Macaronesia, impulsando acciones que reduzcan el impacto del cambio climático y fomenten la resiliencia de nuestras comunidades costeras e insulares.
                    </p>
                </div>
                <div class="rounded-lg bg-green-600 p-4 text-white font-semibold">
                <svg class="w-16 h-16" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" stroke="white"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                        aria-labelledby="title desc" role="img">
                    <title id="title">Transparencia y Rigor</title>
                    <desc id="desc">Documento con líneas visibles, una lupa y una marca de verificación</desc>

                    <!-- Documento -->
                    <rect x="3.5" y="3" width="11" height="15" rx="1.8"/>
                    <line x1="6" y1="6.5" x2="12" y2="6.5"/>
                    <line x1="6" y1="9"   x2="12" y2="9"/>
                    <line x1="6" y1="11.5" x2="12" y2="11.5"/>
                    <line x1="6" y1="14" x2="10" y2="14"/>

                    <!-- Lupa (inspección/rigor) -->
                    <circle cx="15.5" cy="15.5" r="3.5"/>
                    <line x1="18.2" y1="18.2" x2="20.5" y2="20.5"/>

                    <!-- Check dentro de la lupa (verificación transparente) -->
                    </svg>

                    <h1 class="text-2xl my-4">
                        Transparencia y Rigor
                    </h1>
                    <p class="text-sm">
                        Basamos nuestro trabajo en datos científicos verificables, compartiendo información clara y precisa para que instituciones, ciudadanía y empresas tomen decisiones informadas frente a los retos climáticos.
                    </p>
                </div>
                <div class="rounded-lg bg-green-600 p-4 text-white font-semibold">

                <svg class="w-16 h-16" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" stroke="white"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                        aria-labelledby="title desc" role="img">
                    <title id="title">Innovación Sostenible</title>
                    <desc id="desc">Bombilla con una hoja en el interior que simboliza ideas sostenibles</desc>

                    <!-- Bombilla -->
                    <path d="M9 18v1.5c0 .8.7 1.5 1.5 1.5h3c.8 0 1.5-.7 1.5-1.5V18"/>
                    <path d="M8 14c-1.2-1.4-2-3.2-2-5a6 6 0 1 1 12 0c0 1.8-.8 3.6-2 5"/>

                    <!-- Hoja interior -->
                    <path d="M12 9c1.2-1.5 3-2 4-1.2-.5 2-2.5 3.7-4 4.2-1.5-.5-3.5-2.2-4-4.2 1-.8 2.8-.3 4 1.2z"/>

                    <!-- Base de la bombilla -->
                    <line x1="10" y1="18" x2="14" y2="18"/>
                    </svg>

                    <h1 class="text-2xl my-4">
                        Innovación Sostenible
                    </h1>
                    <p class="text-sm">
                    Promovemos el desarrollo de soluciones innovadoras y sostenibles que fortalezcan la adaptación al cambio climático, generando oportunidades verdes para la región y el continente africano.
                    </p>
                </div>
            </div>

        </div>
    </section>
    {{-- <script>
        const { animate, inView } = Motion
        inView("section", (element) => {
            animate(
                element,
                { opacity: 1, y: [100, 0 ] },
                {
                    duration: 0.75,
                    easing: [0.17, 0.55, 0.55, 1],
                }
            )

            return () => animate(element, { opacity: 0, y: 0 })
        })
    </script> --}}
@endsection
