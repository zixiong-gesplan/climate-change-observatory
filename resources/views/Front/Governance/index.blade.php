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

  <section class=" bg-[url(/images/gobernanza.png)]">
    <div class="bg-slate-200 bg-opacity-80 py-16 px-6">
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