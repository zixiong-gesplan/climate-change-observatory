@extends('layouts.app')

@section('content')
    <section class="w-full relative -z-10 flex gap-10 overflow-hidden h-48 px-8">
        <figure class="relative w-full rounded-lg overflow-hidden bg-cover bg-no-repeat">
            <img class=" object-cover absolute rounded-lg" src="images/Panorama-ITER.jpg" alt="image description">
            <figcaption class="w-full h-full bg-green-400 bg-opacity-40 p-4 transition-all text-black absolute duration-300 cursor pointer hover:bg-opacity-0 rounded-lg">
                <h2 class="text-3xl font-bold w-full text-center h-full flex justify-center items-center text-white">El Observatorio de Cambio Climatico de la Macaronesia</h2>
            </figcaption>
        </figure>
    </section>

    <main class="w-full px-8 lg:w-8/12 mx-auto my-4 flex flex-col gap-4">
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-4">
                <x-ImageZoom 
                    src="https://fastly.picsum.photos/id/866/200/300.jpg?hmac=rcadCENKh4rD6MAp6V_ma-AyWv641M4iiOpe1RyFHeI"
                    class="w-full h-full"
                />
                <div class="flex flex-col gap-4">
                    <x-ImageZoom 
                        src="https://fastly.picsum.photos/id/1/200/300.jpg?hmac=jH5bDkLr6Tgy3oAg5khKCHeunZMHq0ehBZr6vGifPLY"
                        class="w-full max-h-4/5"
                    />
                    <div class="w-full bg-green-700 rounded-lg flex justify-center items-center text-center flex-col py-4">
                        <h3 class="text-2xl text-white">+7</h3>
                        <p class="text-white">Regiones en el marco del programa</p>
                    </div>
                </div>
            </div>
            <div class="bg-green-400 p-4 flex flex-col gap-4 rounded-lg">
                <h1 class="bold text-white">
                    Sorbre el observatorio
                </h1>
                <h2 class="text-lg">
                    Somos un ente supra-regional que, además de toda la Macaronesia incluye localidades situadas en el continente africano.
                </h2>
            </div>
        </section>
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 h-full">
            <div class="grid grid-rows-1 grid-cols-3 lg:grid-cols-1 lg:grid-rows-3 gap-4">
                <div class="w-full bg-green-700 rounded-lg flex justify-center items-center text-center flex-col lg:flex-row py-4 px-2 gap-2 ">
                    <h3 class="text-4xl lg:text-lg text-white ">+7</h3>
                    <p class="text-white text-left text-sm md:text-lg">Regiones en el marco del programa</p>
                </div>
                <div class="w-full bg-green-700 rounded-lg flex justify-center items-center text-center flex-col lg:flex-row py-4 px-2 gap-2 ">
                    <h3 class="text-4xl lg:text-lg text-white">+7</h3>
                    <p class="text-white text-left text-sm md:text-lg">Regiones en el marco del programa</p>
                </div>
                <div class="w-full bg-green-700 rounded-lg flex justify-center items-center text-center flex-col lg:flex-row py-4 px-2 gap-2 ">
                    <h3 class="text-4xl lg:text-lg text-white">+7</h3>
                    <p class="text-white text-left text-sm md:text-lg">Regiones en el marco del programa</p>
                </div>
            </div>
            <div class="w-full">
                <x-ImageZoom 
                    src="https://fastly.picsum.photos/id/1/200/300.jpg?hmac=jH5bDkLr6Tgy3oAg5khKCHeunZMHq0ehBZr6vGifPLY"
                    class="w-full"
                />
            </div>
        </section>
    </main>
    <section class="w-full bg-green-50 py-4">
        <div class="w-8/12 mx-auto flex gap-4 flex-col lg:flex-row">
            <div class="relative w-full lg:w-1/4 overflow-hidden bg-cover bg-no-repeat rounded-lg flex justify-center">
                <img 
                    src="https://fastly.picsum.photos/id/1/200/300.jpg?hmac=jH5bDkLr6Tgy3oAg5khKCHeunZMHq0ehBZr6vGifPLY" 
                    alt=""
                    class="h-96 duration-300 ease-in-out hover:scale-125 cursor-pointer rounded-lg"
                />
            </div>
            <aside class="w-full lg:w-3/4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti consequatur molestias rem quos perferendis? Earum nam neque modi suscipit repellat ratione doloribus provident corrupti, velit alias molestiae repudiandae ea quae?
                </p>
            </aside>
        </div>
    </section>
    <section class="w-full mt-2">
        <div class="w-8/12 mx-auto grid grid-rows-3 gap-2">
            <div class="flex gap-4 flex-col lg:flex-row">
                <img 
                    src="https://fastly.picsum.photos/id/1/200/300.jpg?hmac=jH5bDkLr6Tgy3oAg5khKCHeunZMHq0ehBZr6vGifPLY" 
                    alt=""
                    class="w-full lg:w-7/12 max-h-48 rounded-lg"
                >
                <div class="rounded-lg bg-green-50 p-4 flex flex-col gap-4 m-0">
                    <h1 class="text-4xl">Nuestras metas</h1>
                    <p>Buscamos mejorar el entorno en la macaronesia</p>
                    <button class="bg-green-700 text-white rounded-full max-w-48 py-1">Saber más</button>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-4">
                <div class="rounded-lg bg-green-400 p-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cum, ab a porro quos ad? Quaerat suscipit, aspernatur corrupti harum nesciunt at, autem, aperiam impedit repellat dolor repudiandae. At, sequi?
                </div>
                <div class="rounded-lg bg-green-400 p-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam non quisquam atque voluptate ipsam, quos temporibus quasi fugiat minus, error deserunt inventore blanditiis impedit perspiciatis totam. Ea sit est maxime!
                </div>
                <div class="rounded-lg bg-green-400 p-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dicta repellat consectetur minima nam officia vel? Fugit iure sapiente quis molestiae tenetur laborum dolor. Veniam dicta pariatur perspiciatis modi omnis?
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 rounded-lg bg-green-50 justify-evenly w-full">
                <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                    <h1 class="text-6xl font-bold text-green-400">7</h1>
                    <p>Regiones</p>
                </div>
                <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                    <h1 class="text-6xl font-bold text-green-400">16</h1>
                    <p>Entidades</p>
                </div>
                <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                    <h1 class="text-6xl font-bold text-green-400">2</h1>
                    <p>Proyectos</p>
                </div>
                <div class="flex flex-col justify-center items-center w-full md:w-1/2 lg:w-1/4">
                    <h1 class="text-6xl font-bold text-green-400">+20</h1>
                    <p>Años de experiencia</p>
                </div>
            </div>
        </div>
    </section>
    <script>
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
    </script>
@endsection
