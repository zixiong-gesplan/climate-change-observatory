@extends('layouts.app')

@section('content')
    <!-- Hero principal -->
    <section class="flex flex-col items-center justify-center min-h-screen px-6 text-center bg-gradient-to-b from-green-600 to-green-500 text-white">
    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight fade-in-up">
      Decidimos hoy, <br> cambiamos el clima de mañana
    </h1>
    <p class="mt-4 text-lg md:text-xl max-w-xl fade-in-up" style="animation-delay:0.3s">
      Conectamos ciudadanía, empresas y gobiernos para diseñar políticas climáticas justas, transparentes y con impacto real.
    </p>
    <button class="mt-8 bg-white text-green-600 font-semibold px-6 py-3 rounded-full shadow-md hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 fade-in-up" style="animation-delay:0.6s">
      Danos tu aportación
    </button>
    <div class="mt-10 w-32 h-32 bg-white/20 rounded-full float"></div>
  </section>

  <!-- Sección 1: Gobernanza Climática -->

  <section class=" bg-[url(/images/gobernanza.png)] bg-cover min-h-96">
    <div class="bg-slate-200 bg-opacity-80 py-16 px-6 h-full">
      <div class="max-w-3xl mx-auto text-center ">
        <h2 class="text-3xl font-bold text-green-600 fade-in-up drop-shadow-xl">Gobernanza Climática</h2>
        <p class="mt-4 text-gray-900 fade-in-up drop-shadow-xl font-bold" style="animation-delay:0.3s">
          La gobernanza climática es una manera de gestión participativa donde la información fluye, las decisiones son claras y el progreso se mide en tiempo real.
        </p>
      </div>
      <div class="mt-10 grid gap-6 sm:grid-cols-2">
        <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 fade-in-up">
          <h3 class="text-xl font-semibold text-green-600">Decisiones con datos</h3>
          <p class="mt-2 text-gray-600">Seguimiento abierto de emisiones, inversiones verdes y resultados visibles para todos.</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 fade-in-up" style="animation-delay:0.3s">
          <h3 class="text-xl font-semibold text-green-600">Acción coordinada</h3>
          <p class="mt-2 text-gray-600">Ciudadanía, empresas, organizaciones y gobiernos trabajando juntos con objetivos claros.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección 2: Participación Ciudadana -->
  <section class="py-16 px-6 bg-green-50">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-green-600 fade-in-up">La voz ciudadana es poder</h2>
      <p class="mt-4 text-gray-700 fade-in-up" style="animation-delay:0.3s">
        Cuando participamos, las decisiones políticas dejan de ser lejanas. Tu opinión puede decidir cómo se protege tu barrio, tu ciudad y tu futuro.
      </p>
    </div>
    <div class="mt-10 grid gap-6 sm:grid-cols-3">
      <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 fade-in-up">
        <h3 class="text-lg font-semibold text-green-600">Foros abiertos</h3>
        <p class="mt-2 text-gray-600">Debates interactivos donde cada voz cuenta, sin filtros ni barreras.</p>
      </div>
      <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 fade-in-up" style="animation-delay:0.3s">
        <h3 class="text-lg font-semibold text-green-600">Encuestas en vivo</h3>
        <p class="mt-2 text-gray-600">Tu opinión en tiempo real para definir prioridades urgentes.</p>
      </div>
      <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 fade-in-up" style="animation-delay:0.6s">
        <h3 class="text-lg font-semibold text-green-600">Proyectos locales</h3>
        <p class="mt-2 text-gray-600">Apoya y crea iniciativas verdes que cambian tu entorno inmediato.</p>
      </div>
    </div>
  </section>
    <!-- Historias Reales (Slider) -->
    <section id="historias" class="bg-white text-gray-900 py-20">
      <div class="mx-auto max-w-[1200px] px-4">
        <header class="">
          <h2 class="text-3xl font-bold">Actuaciones Reales</h2>
          <p class="mt-2 text-gray-600">Proyectos que ya están cambiando realidades.</p>
        </header>

        <div class="relative mt-10">
          <!-- Slider viewport -->
          <div id="sliderTrack" class="carousel-track flex gap-6 overflow-x-hidden scroll-smooth">
            <!-- Slide 1 -->
            <article class="carousel-slide min-w-full rounded-2xl bg-gradient-to-br from-emerald-50 to-white p-6 shadow md:min-w-[60%]">
              <div class="h-44 w-full overflow-hidden rounded-xl">
                <img alt="IDAFE" class="h-full w-full object-cover" src="images/Participacion-ciudadana-portada.jpeg"/>
              </div>
              <h3 class="mt-4 text-xl font-semibold">IDAFE</h3>
              <p class="mt-2 text-gray-700">Fortalecemos el conocimiento en cambio climático, dirigido a alumnos de primaria y secundaria.</p>
            </article>
            <!-- Slide 2 -->
            <article class="carousel-slide min-w-full rounded-2xl bg-gradient-to-br from-emerald-50 to-white p-6 shadow md:min-w-[60%]">
              <div class="h-44 w-full overflow-hidden rounded-xl">
                <img alt="Plan Formativo Verde" class="h-full object-cover" src="/images/PFVerde.png"/>
              </div>
              <h3 class="mt-4 text-xl font-semibold">Plan Formativo Verde</h3>
              <p class="mt-2 text-gray-700">Red de transporte público y carriles bici de alta capacidad.</p>
            </article>
            <!-- Slide 3 -->
            <article class="carousel-slide min-w-full rounded-2xl bg-gradient-to-br from-emerald-50 to-white p-6 shadow md:min-w-[60%]">
              <div class="h-44 w-full overflow-hidden rounded-xl">
                <img alt="Divulgación" class="h-full object-cover" src="/images/Divulgacion.PNG"/>
              </div>
              <h3 class="mt-4 text-xl font-semibold">Divulgación de la Ley de Cambio Climático</h3>
              <p class="mt-2 text-gray-700">Capacitación de técnicos municipales para la Transición Energética y Adapatación al Cambio Climático.</p>
            </article>
          </div>

          <!-- Controls -->
          <div class="mt-6 flex items-center justify-between">
            <button id="prevBtn" class="rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm shadow hover:bg-gray-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-400">Anterior</button>
            <div class="flex gap-2" aria-label="Paginación del carrusel">
              <span class="h-2 w-2 rounded-full bg-gray-300" id="dot1"></span>
              <span class="h-2 w-2 rounded-full bg-gray-300" id="dot2"></span>
              <span class="h-2 w-2 rounded-full bg-gray-300" id="dot3"></span>
            </div>
            <button id="nextBtn" class="rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm shadow hover:bg-gray-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-400">Siguiente</button>
          </div>
        </div>
      </div>
    </section>
  <!-- Call to Action final -->
  <section class="py-20 px-6 text-center bg-green-600 text-white">
    <h2 class="text-3xl font-bold fade-in-up">¿Imaginas tu ciudad con mejoras ambientales?</h2>
    <!-- <p class="mt-4 max-w-lg mx-auto fade-in-up" style="animation-delay:0.3s">
      Este es el momento de actuar. Involúcrate en proyectos reales, colabora con tu comunidad y sé parte de la transformación climática global.
    </p> -->
    <button class="mt-8 bg-white text-green-600 font-semibold px-6 py-3 rounded-full shadow-md hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 fade-in-up" style="animation-delay:0.6s">
      Quiero participar
    </button>
  </section>

  <style>
    /* Microanimaciones personalizadas */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-6px); }
      100% { transform: translateY(0px); }
    }
    .float {
      animation: float 3s ease-in-out infinite;
    }
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up {
      animation: fadeInUp 1s ease-out forwards;
    }
  </style>
@endsection