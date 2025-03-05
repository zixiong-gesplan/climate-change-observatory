<section id="projects" class="w-full py-12 md:py-24 lg:py-32 -z-10">
    <div class="px-4 md:px-6 w-full">
        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-8 text-center">
            Iniciativas de Cambio Climático MAC
        </h2>

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 group items-center" id="cards">

            <x-projects.card 
                :image="'/images/PLANCLIMAC2.png'"
                :title="'PLANCLIMAC2'"
                :description="'El proyecto de restauración del Atlántico en Brasil ha plantado más de 73 millones de árboles desde 2016, recuperando la biodiversidad y capturando carbono.'"
            />

            <x-projects.card 
                :image="'https://picsum.photos/id/18/384/316'"
                :title="'Restauración Masiva de Bosques'"
                :description="'El proyecto de restauración del Atlántico en Brasil ha plantado más de 73 millones de árboles desde 2016, recuperando la biodiversidad y capturando carbono.'"
            />
            <x-projects.card 
                :image="'https://picsum.photos/id/18/384/316'"
                :title="'Innovación en Energía Limpia'"
                :description="'Empresas como Tesla están revolucionando el mercado con baterías de almacenamiento de energía a gran
                    escala, facilitando la adopción de energías renovables.'"
            />
        </div>
        <div class="mt-10 text-center">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-fit">Ver Más Historias</button>
        </div>
    </div>
</section>

<style>
  #cards:hover .peer:not(:hover) {
    opacity: 50%;
  }
</style>