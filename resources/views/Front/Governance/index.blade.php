@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="w-full px-8 lg:w-8/12 mx-auto my-4 flex flex-col gap-4">
        <!-- Introducción -->
        <section id="introduccion" class="py-20 border-b border-gray-100 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Introducción</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="mb-5">Bienvenidos a nuestra página de Gobernanza Climática. Nuestra misión es liderar las políticas para mitigar el impacto del cambio climático, promoviendo soluciones sostenibles y colaborativas.</p>
                    <p class="">Trabajamos con gobiernos, organizaciones internacionales y sociedad civil para desarrollar estrategias efectivas contra el cambio climático.</p>
                </div>
                <div class="lg:w-1/2">
                    <x-Placeholder/>
                </div>
            </div>
        </section>
        <!-- Estructura de Gobernanza -->
        <section id="estructura" class="py-20 border-b border-gray-100 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Estructura de Gobernanza</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="text-gray-600 mb-5">Nuestra estructura de gobernanza incluye diversos actores involucrados en la toma de decisiones climáticas, desde organizaciones gubernamentales hasta instituciones internacionales.</p>
                    <ul class="space-y-4 mt-6">
                        <li class="flex items-center gap-4">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                              
                            Organismos internacionales
                        </li>
                        <li class="flex items-cente gap-4">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                            </svg>
                              
                            Gobiernos nacionales
                        </li>
                        <li class="flex items-center gap-4">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                            </svg>
                            Sociedad civil
                        </li>
                        <li class="flex items-center gap-4">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" width="24" height="24" fill="#000000" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">    <path d="m153.6 273.07h-34.133c-4.713 0-8.533 3.821-8.533 8.533v34.133c0 4.713 3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533v-34.133c0-4.713-3.82-8.533-8.533-8.533zm-8.533 34.133h-17.067v-17.067h17.067v17.067z"/> <path d="m153.6 341.33h-34.133c-4.713 0-8.533 3.82-8.533 8.533s3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533s-3.82-8.533-8.533-8.533z"/> <path d="m153.6 85.333h-34.133c-4.713 0-8.533 3.821-8.533 8.533v34.134c0 4.713 3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533v-34.133c0-4.713-3.82-8.534-8.533-8.534zm-8.533 34.134h-17.067v-17.067h17.067v17.067z"/> <path d="m153.6 153.6h-34.133c-4.713 0-8.533 3.82-8.533 8.533s3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533s-3.82-8.533-8.533-8.533z"/> <path d="m153.6 392.53h-34.133c-4.713 0-8.533 3.821-8.533 8.533v34.134c0 4.713 3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533v-34.133c0-4.713-3.82-8.534-8.533-8.534zm-8.533 34.134h-17.067v-17.067h17.067v17.067z"/> <path d="m153.6 460.8h-34.133c-4.713 0-8.533 3.82-8.533 8.533s3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533s-3.82-8.533-8.533-8.533z"/> <path d="m290.13 384h-34.133c-4.713 0-8.533 3.821-8.533 8.533v34.133c0 4.713 3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533v-34.133c1e-3 -4.712-3.82-8.533-8.533-8.533zm-8.533 34.133h-17.067v-17.067h17.067v17.067z"/> <path d="m290.13 452.27h-34.133c-4.713 0-8.533 3.821-8.533 8.533s3.82 8.533 8.533 8.533h34.133c4.713 0 8.533-3.82 8.533-8.533s-3.82-8.533-8.533-8.533z"/> <path d="m392.53 93.867c4.713 0 8.533-3.821 8.533-8.533 0-9.367 7.699-17.067 17.067-17.067h25.6c14.1 0 25.6-11.5 25.6-25.6s-11.5-25.6-25.6-25.6h-25.6c-4.713 0-8.533 3.82-8.533 8.533s3.82 8.533 8.533 8.533h25.6c4.674 0 8.533 3.859 8.533 8.533s-3.859 8.533-8.533 8.533h-25.6c-18.792 1e-3 -34.133 15.342-34.133 34.134 0 4.713 3.821 8.534 8.533 8.534z"/> <path d="m503.47 341.33h-76.8v-179.2h8.533c4.713 0 8.533-3.821 8.533-8.533v-34.133c0-4.713-3.82-8.533-8.533-8.533h-85.333c-4.713 0-8.533 3.82-8.533 8.533v34.133c0 4.713 3.82 8.533 8.533 8.533h8.533v179.2h-136.53v-85.333h17.067c4.713 0 8.533-3.82 8.533-8.533v-34.133c0-4.713-3.82-8.533-8.533-8.533h-17.067v-153.6h17.067c4.713 0 8.533-3.82 8.533-8.533v-34.134c0-4.713-3.82-8.533-8.533-8.533h-204.8c-4.713 0-8.534 3.82-8.534 8.533v34.133c0 4.713 3.821 8.533 8.533 8.533h17.067v153.6h-17.067c-4.713 0-8.533 3.821-8.533 8.533v34.133c0 4.713 3.821 8.533 8.533 8.533h17.067v85.333h-42.667c-4.713 0-8.533 3.82-8.533 8.533v153.6c0 4.716 3.82 8.536 8.533 8.536h494.93c4.713 0 8.533-3.82 8.533-8.533v-153.6c0-4.713-3.82-8.534-8.533-8.534zm-145.07-213.33h68.267v17.067h-68.267v-17.067zm51.2 34.133v298.67h-34.133v-298.67h34.133zm-366.93-145.07h187.73v17.067h-187.73v-17.067zm25.6 34.133h136.53v153.6h-136.53v-153.6zm-25.6 170.67h187.73v17.067h-187.73v-17.067zm-25.6 136.53h34.133v136.53h-34.133v-136.53zm51.2-8.533v-93.867h136.53v238.93h-136.53v-145.07zm153.6 8.533h136.53v102.4h-25.6c-4.713 0-8.533 3.82-8.533 8.533v25.6h-102.4v-136.53zm119.47 136.53v-17.067h102.4v17.067h-102.4zm153.6 0h-34.133v-25.6c0-4.713-3.821-8.533-8.533-8.533h-25.6v-102.4h68.267v136.53z"/>    </svg>

                            Sector privado
                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2">
                    <x-Placeholder/>
                </div>
            </div>
        </section>

        
        <!-- Monitoreo y Reportes -->
        <section id="monitoreo" class="py-20 border-b border-gray-100 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Monitoreo y Reportes</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="text-gray-600 mb-5">Seguimos un conjunto de indicadores clave (KPIs) para medir el progreso en la lucha contra el cambio climático. Aquí puedes encontrar nuestros informes más recientes.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-8">
                        <div class="bg-white p-6 rounded-lg shadow-md text-center">
                            <span class="block text-4xl font-bold text-green-800 mb-2">85%</span>
                            <span class="text-gray-500 text-sm">Reducción de emisiones</span>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md text-center">
                            <span class="block text-4xl font-bold text-green-800 mb-2">120+</span>
                            <span class="text-gray-500 text-sm">Países participantes</span>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md text-center">
                            <span class="block text-4xl font-bold text-green-800 mb-2">$50B</span>
                            <span class="text-gray-500 text-sm">Financiamiento anual</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <x-Placeholder/>
                </div>
            </div>
        </section>

        <!-- Financiamiento y Recursos -->
        <section id="financiamiento" class="py-20 border-b border-gray-100 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Financiamiento y Recursos</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="text-gray-600 mb-5">Contamos con diversas fuentes de financiamiento para apoyar iniciativas climáticas. Explora oportunidades de inversión en energías renovables y tecnologías sostenibles.</p>
                    <div class="flex flex-col gap-5 mt-8">
                        <div class="bg-white p-6 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl cursor-pointer">
                            <i class="fas fa-solar-panel text-4xl text-green-800 mb-4"></i>
                            <h3 class="text-lg font-semibold text-green-800 mb-2">Energía Solar</h3>
                            <p class="text-gray-600 text-sm">Proyectos de energía solar a gran escala</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl cursor-pointer">
                            <i class="fas fa-wind text-4xl text-green-800 mb-4"></i>
                            <h3 class="text-lg font-semibold text-green-800 mb-2">Energía Eólica</h3>
                            <p class="text-gray-600 text-sm">Parques eólicos terrestres y marinos</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl cursor-pointer">
                            <i class="fas fa-seedling text-4xl text-green-800 mb-4"></i>
                            <h3 class="text-lg font-semibold text-green-800 mb-2">Reforestación</h3>
                            <p class="text-gray-600 text-sm">Iniciativas de plantación de árboles</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <x-Placeholder/>
                </div>
            </div>
        </section>

        <!-- Recursos y Herramientas -->
        <section id="recursos" class="py-20 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Recursos y Herramientas</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="text-gray-600 mb-5">Aquí encontrarás herramientas interactivas, bases de datos y recursos útiles para comprender mejor el impacto del cambio climático y cómo puedes contribuir a mitigarlo.</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m14 9.006h-.335a1.647 1.647 0 0 1-1.647-1.647v-1.706a1.647 1.647 0 0 1 1.647-1.647L19 12M5 12v5h1.375A1.626 1.626 0 0 0 8 15.375v-1.75A1.626 1.626 0 0 0 6.375 12H5Zm9 1.5v2a1.5 1.5 0 0 1-1.5 1.5v0a1.5 1.5 0 0 1-1.5-1.5v-2a1.5 1.5 0 0 1 1.5-1.5v0a1.5 1.5 0 0 1 1.5 1.5Z"/>
                            </svg>
                            <span>Informes Anuales</span>
                        </a>
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 6c0 1.657-3.134 3-7 3S5 7.657 5 6m14 0c0-1.657-3.134-3-7-3S5 4.343 5 6m14 0v6M5 6v6m0 0c0 1.657 3.134 3 7 3s7-1.343 7-3M5 12v6c0 1.657 3.134 3 7 3s7-1.343 7-3v-6"/>
                            </svg>
                            <span>Base de Datos Climáticos</span>
                        </a>
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5"/>
                            </svg>
                            <span>Calculadora de Huella de Carbono</span>
                        </a>
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M12.1429 11v9m0-9c-2.50543-.7107-3.19099-1.39543-6.13657-1.34968-.48057.00746-.86348.38718-.86348.84968v7.2884c0 .4824.41455.8682.91584.8617 2.77491-.0362 3.45995.6561 6.08421 1.3499m0-9c2.5053-.7107 3.1067-1.39542 6.0523-1.34968.4806.00746.9477.38718.9477.84968v7.2884c0 .4824-.4988.8682-1 .8617-2.775-.0362-3.3758.6561-6 1.3499m2-14c0 1.10457-.8955 2-2 2-1.1046 0-2-.89543-2-2s.8954-2 2-2c1.1045 0 2 .89543 2 2Z"/>
                            </svg>
                            <span>Biblioteca Digital</span>
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <x-Placeholder/>
                </div>
            </div>
        </section>
    </main>

    <!-- CTA Section -->
    <section class="bg-green-800 py-20 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-5">¿Quieres unirte a nuestra causa?</h2>
            <p class="max-w-2xl mx-auto mb-8">Suscríbete a nuestro boletín para recibir actualizaciones sobre nuestras iniciativas y eventos.</p>
            <form class="max-w-md mx-auto flex flex-col md:flex-row" id="subscribe-form">
                <input type="email" placeholder="Tu correo electrónico" required class="w-full md:flex-1 px-4 py-3 rounded-full md:rounded-r-none mb-3 md:mb-0 focus:outline-none text-black">
                <button type="submit" class="bg-accent text-dark font-semibold px-6 py-3 rounded-full md:rounded-l-none hover:bg-opacity-90 transition-all duration-300 border border-white">Suscribirse</button>
            </form>
        </div>
    </section>


@endsection