@extends('layouts.app')

@section('content')
<style>
    :root { --ring:#A7F3D0; --brand:#34D399; --brand-2:#10B981; }
    html{ scroll-behavior:smooth; }
    /* Scroll progress bar */
    #scrollProgress{position:fixed;inset:0 auto auto 0;height:3px;background:linear-gradient(90deg,var(--brand),var(--brand-2));width:0;z-index:60}
    /* Floating microanimation */
    @keyframes floatY{0%{transform:translateY(0)}50%{transform:translateY(-6px)}100%{transform:translateY(0)}}
    /* Subtle glow */
    .glow{box-shadow:0 0 0 0 rgba(167,243,208,.35);animation:glowPulse 2.8s ease-in-out infinite}
    @keyframes glowPulse{0%{box-shadow:0 0 0 0 rgba(167,243,208,.4)}50%{box-shadow:0 0 30px 0 rgba(52,211,153,.35)}100%{box-shadow:0 0 0 0 rgba(167,243,208,.4)}}
    /* Card border gradient on hover */
    .card-grad{position:relative}
    .card-grad:before{content:"";position:absolute;inset:-1px;border-radius:1rem;padding:1px;background:linear-gradient(135deg,rgba(255,255,255,.25),rgba(255,255,255,.06));-webkit-mask:linear-gradient(#000 0 0) content-box,linear-gradient(#000 0 0);-webkit-mask-composite:xor;mask-composite:exclude;}
    .card-grad:hover:before{background:linear-gradient(135deg,var(--brand),rgba(255,255,255,.2))}
    /* Slider */
    .carousel-track{scroll-snap-type:x mandatory}
    .carousel-slide{scroll-snap-align:start}
    /* Respect reduced motion */
    @media (prefers-reduced-motion: reduce){
      .glow{animation:none}
      .float{animation:none}
      video{animation:none}
    }
  </style>

<section class="w-full max-h-dvh h-screen flex justify-center">
    <video class="w-full h-full object-cover mx-auto rounded-xl absolute" autoplay muted id="video">
        <source src="images/mitigacion.mp4" type="video/mp4">
    </video>
    <div id="main-text-video" class="w-full bg-black bg-opacity-60">
        <div class="relative z-10 flex h-full items-center mx-auto">
            <div class="mx-auto wf-max px-4">
                <div class="max-w-2xl">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl text-green-600 drop-shadow-lg">Juntos por un futuro sostenible</h1>
                    <p class="mt-4 max-w-xl text-white/90 text-emerald-800 drop-shadow-lg">Acciones y soluciones para mitigar el cambio climático desde lo local hasta lo global.</p>
                    <div class="mt-6 flex items-center gap-3">
                        <a href="#soluciones" class="inline-flex items-center rounded-xl bg-white px-5 py-3 font-medium text-green-800 shadow hover:bg-white/90">Conoce cómo actuar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="principal">
    <!-- Sección: Nuestras Soluciones -->
    <section id="soluciones" class="py-20">
      <div class="mx-auto max-w-[1200px] px-4">
        <header>
          <h2 class="text-3xl font-bold text-black">Nuestras Soluciones</h2>
          <p class="mt-2 text-black/80">Acciones concretas con impacto medible.</p>
        </header>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          <!-- Energía renovable -->
          <article class="card-grad rounded-2xl bg-white/5 p-5 backdrop-blur-md ring-1 ring-white/10 transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex items-center gap-3">
              <div class="grid size-11 place-items-center rounded-xl bg-emerald-200/20 ring-1 ring-emerald-200/40 glow" aria-hidden="true">
                <svg class="size-5 text-emerald-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </div>
              <h3 class="text-lg font-semibold">Compromiso Climático</h3>
            </div>
            <p class="mt-3 text-sm text-white/80">Compromiso climático en el.</p>
            <img alt="paneles solares" class="mt-4 h-32 w-full rounded-xl object-cover" src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=1200&auto=format&fit=crop"/>
          </article>

          <!-- Ciudades verdes -->
          <article class="card-grad rounded-2xl bg-white/5 p-5 backdrop-blur-md ring-1 ring-white/10 transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex items-center gap-3">
              <div class="grid size-11 place-items-center rounded-xl bg-emerald-200/20 ring-1 ring-emerald-200/40" aria-hidden="true">
                <svg class="size-5 text-emerald-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 13h18M5 21V8l7-5 7 5v13"/></svg>
              </div>
              <h3 class="text-lg font-semibold">Ciudades verdes</h3>
            </div>
            <p class="mt-3 text-sm text-white/80">Infraestructura resiliente y refugios climáticos.</p>
            <img alt="parque urbano" class="mt-4 h-32 w-full rounded-xl object-cover" src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1200&auto=format&fit=crop"/>
          </article>

          <!-- Consumo responsable -->
          <article class="card-grad rounded-2xl bg-white/5 p-5 backdrop-blur-md ring-1 ring-white/10 transition hover:-translate-y-1 hover:shadow-xl">
            <div class="flex items-center gap-3">
              <div class="grid size-11 place-items-center rounded-xl bg-emerald-200/20 ring-1 ring-emerald-200/40" aria-hidden="true">
                <svg class="size-5 text-emerald-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v6a8 8 0 0016 0V4M8 8h8"/></svg>
              </div>
              <h3 class="text-lg font-semibold">Consumo responsable</h3>
            </div>
            <p class="mt-3 text-sm text-green-200/80">Alimentación sostenible y economía circular.</p>
            <img alt="alimentos frescos" class="mt-4 h-32 w-full rounded-xl object-cover" src="https://static.vecteezy.com/system/resources/previews/002/055/448/large_2x/selection-of-fresh-foods-free-photo.jpg"/>
          </article>
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
                <img alt="RedPromar" class="h-full w-full object-cover" src="https://www.gobiernodecanarias.org/cmsgob2/export/sites/economia/ocea/galeria/proyectos/RED-PROMAR.png"/>
              </div>
              <h3 class="mt-4 text-xl font-semibold">REDPROMAR</h3>
              <p class="mt-2 text-gray-700">Red de transporte público y carriles bici de alta capacidad.</p>
            </article>
            <!-- Slide 3 -->
            <article class="carousel-slide min-w-full rounded-2xl bg-gradient-to-br from-emerald-50 to-white p-6 shadow md:min-w-[60%]">
              <div class="h-44 w-full overflow-hidden rounded-xl">
                <img alt="RedVigia" class="mx-auto h-full object-fit" src="/images/Red_vigia.png"/>
              </div>
              <h3 class="mt-4 text-xl font-semibold">RedVigia</h3>
              <p class="mt-2 text-gray-700">Red Canaria de Vigilancia Sanitaria de la Fauna Silvestre.</p>
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
  </main>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const video = document.getElementById('video');
        const text = document.getElementById('main-text-video');
        video.addEventListener('loadedmetadata', function(e){
            let {innerWidth, innerHeight} = window;
            window.addEventListener('scroll', () => {
                let value = window.scrollY;
                if((innerWidth * 10 / 12) < innerWidth - (value)){
                    video.style.width = innerWidth - (value) + 'px';
                    video.style.height = innerHeight - (value) + 'px';
                    text.style.width = innerWidth - (value) + 'px';
                    text.style.height = innerHeight - (value) + 'px';
                    return
                }
            })
        });
    });


    // // Reveal on view
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target);} });
    },{ threshold:.16 });
    document.querySelectorAll('.reveal').forEach(el=>io.observe(el));

    // Simple, accessible slider with autoplay + swipe
    document.addEventListener("DOMContentLoaded", () => {
      function animation(){
        const track = document.getElementById('sliderTrack');
        const prev = document.getElementById('prevBtn');
        const next = document.getElementById('nextBtn');
        const dots = [document.getElementById('dot1'), document.getElementById('dot2'), document.getElementById('dot3')];
        const slides = track.children;
        let idx = 0, intv=null, isHover=false;

        function width(){ return slides[0].getBoundingClientRect().width + 24; }
        function update(){
          track.scrollTo({ left: idx * width(), behavior: 'smooth' });
          dots.forEach((d,i)=>{ d.classList.toggle('bg-gray-900', i===idx); d.classList.toggle('bg-gray-300', i!==idx); d.setAttribute('aria-current', i===idx ? 'true':'false'); });
        }
        function go(n){ idx = (n + slides.length) % slides.length; update(); }

        // Controls
        prev.addEventListener('click', ()=>go(idx-1));
        next.addEventListener('click', ()=>go(idx+1));

        // Autoplay (pause on hover & reduce motion)
        const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        function start(){ if(!reduce && !intv) intv = setInterval(()=>{ if(!isHover) go(idx+1); }, 5000); }
        function stop(){ clearInterval(intv); intv=null; }
        track.addEventListener('pointerenter', ()=>{isHover=true});
        track.addEventListener('pointerleave', ()=>{isHover=false});
        start();

        // Swipe support
        let startX=0, curX=0, isDown=false;
        track.addEventListener('pointerdown', e=>{ isDown=true; startX=e.clientX; track.setPointerCapture(e.pointerId); });
        track.addEventListener('pointermove', e=>{ if(!isDown) return; curX=e.clientX; });
        track.addEventListener('pointerup', ()=>{ if(!isDown) return; const dx = curX-startX; if(Math.abs(dx)>40){ dx>0 ? go(idx-1) : go(idx+1); } isDown=false; });

        // Keyboard
        window.addEventListener('keydown', (e)=>{ if(e.key==='ArrowLeft') go(idx-1); if(e.key==='ArrowRight') go(idx+1); });

        // Resize
        window.addEventListener('resize', update);
        update();
      }
      animation();
    })

  </script>