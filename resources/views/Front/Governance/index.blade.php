@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="container mx-auto px-4">
        <!-- Introducción -->
        <section id="introduccion" class="py-20 border-b border-gray-100 opacity-0 transform translate-y-5 transition-all duration-700 section">
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
                    <img src="/placeholder.svg?height=300&width=500" alt="Representación de gobernanza climática" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </section>

        <!-- Estructura de Gobernanza -->
        <section id="estructura" class="py-20 border-b border-gray-100 opacity-0 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Estructura de Gobernanza</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="text-gray-600 mb-5">Nuestra estructura de gobernanza incluye diversos actores involucrados en la toma de decisiones climáticas, desde organizaciones gubernamentales hasta instituciones internacionales.</p>
                    <ul class="space-y-4 mt-6">
                        <li class="flex items-center"><i class="fas fa-globe text-green-800 mr-3 text-xl"></i> Organismos internacionales</li>
                        <li class="flex items-center"><i class="fas fa-building text-green-800 mr-3 text-xl"></i> Gobiernos nacionales</li>
                        <li class="flex items-center"><i class="fas fa-users text-green-800 mr-3 text-xl"></i> Sociedad civil</li>
                        <li class="flex items-center"><i class="fas fa-industry text-green-800 mr-3 text-xl"></i> Sector privado</li>
                    </ul>
                </div>
                <div class="lg:w-1/2">
                    <img src="/placeholder.svg?height=300&width=500" alt="Diagrama de la estructura de gobernanza" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </section>

        <!-- Monitoreo y Reportes -->
        <section id="monitoreo" class="py-20 border-b border-gray-100 opacity-0 transform translate-y-5 transition-all duration-700 section">
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
                    <img src="/placeholder.svg?height=300&width=500" alt="Gráfica de reportes climáticos" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </section>

        <!-- Financiamiento y Recursos -->
        <section id="financiamiento" class="py-20 border-b border-gray-100 opacity-0 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Financiamiento y Recursos</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="text-gray-600 mb-5">Contamos con diversas fuentes de financiamiento para apoyar iniciativas climáticas. Explora oportunidades de inversión en energías renovables y tecnologías sostenibles.</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-8">
                        <div class="bg-white p-6 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <i class="fas fa-solar-panel text-4xl text-green-800 mb-4"></i>
                            <h3 class="text-lg font-semibold text-green-800 mb-2">Energía Solar</h3>
                            <p class="text-gray-600 text-sm">Proyectos de energía solar a gran escala</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <i class="fas fa-wind text-4xl text-green-800 mb-4"></i>
                            <h3 class="text-lg font-semibold text-green-800 mb-2">Energía Eólica</h3>
                            <p class="text-gray-600 text-sm">Parques eólicos terrestres y marinos</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <i class="fas fa-seedling text-4xl text-green-800 mb-4"></i>
                            <h3 class="text-lg font-semibold text-green-800 mb-2">Reforestación</h3>
                            <p class="text-gray-600 text-sm">Iniciativas de plantación de árboles</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="/placeholder.svg?height=300&width=500" alt="Representación de financiamiento climático" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </section>

        <!-- Recursos y Herramientas -->
        <section id="recursos" class="py-20 opacity-0 transform translate-y-5 transition-all duration-700 section">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 inline-block mb-4">Recursos y Herramientas</h2>
                <div class="h-1 w-16 bg-accent mx-auto"></div>
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-10">
                <div class="lg:w-1/2">
                    <p class="text-gray-600 mb-5">Aquí encontrarás herramientas interactivas, bases de datos y recursos útiles para comprender mejor el impacto del cambio climático y cómo puedes contribuir a mitigarlo.</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <i class="fas fa-file-pdf text-2xl text-green-800 mr-4 group-hover:text-white"></i>
                            <span>Informes Anuales</span>
                        </a>
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <i class="fas fa-database text-2xl text-green-800 mr-4 group-hover:text-white"></i>
                            <span>Base de Datos Climáticos</span>
                        </a>
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <i class="fas fa-calculator text-2xl text-green-800 mr-4 group-hover:text-white"></i>
                            <span>Calculadora de Huella de Carbono</span>
                        </a>
                        <a href="#" class="flex items-center bg-white p-4 rounded-lg shadow-md transition-all duration-300 hover:bg-green-800 hover:text-white group">
                            <i class="fas fa-book text-2xl text-green-800 mr-4 group-hover:text-white"></i>
                            <span>Biblioteca Digital</span>
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="/placeholder.svg?height=300&width=500" alt="Recursos y herramientas climáticas" class="rounded-lg shadow-lg w-full">
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
                <input type="email" placeholder="Tu correo electrónico" required class="w-full md:flex-1 px-4 py-3 rounded-full md:rounded-r-none mb-3 md:mb-0 focus:outline-none">
                <button type="submit" class="bg-accent text-dark font-semibold px-6 py-3 rounded-full md:rounded-l-none hover:bg-opacity-90 transition-all duration-300">Suscribirse</button>
            </form>
        </div>
    </section>


@endsection