<script>
    var controller = new ScrollMagic.Controller();
</script>
<style type="text/css">
	#reveal1 {
		opacity: 0;
		-webkit-transform: scale(0.9);
        -moz-transform: scale(0.9);
        -ms-transform: scale(0.9);
        -o-transform: scale(0.9);
        transform: scale(0.9);

		-webkit-transition: all 1s ease-in-out;
        -moz-transition: all 1s ease-in-out;
        -ms-transition: all 1s ease-in-out;
        -o-transition: all 1s ease-in-out;
        transition: all 1s ease-in-out;
	}
	#reveal1.visible {
		opacity: 1;
		-webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
	}
</style>
<section id="impact" class="w-full py-12 md:py-24 lg:py-32 bg-blue-50 relative overflow-hidden -z-10">
    <div id="trigger1" class="spacer s0"></div>
    <div class="container px-4 md:px-6 relative z-10 m-auto" id="reveal1">
        <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl mb-8 text-center">
            El Impacto es Real
        </h2>
        
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="flex flex-col justify-center space-y-4 bg-white p-6 rounded-lg shadow-lg h-auto md:h-96 -left-2">
                <h3 class="text-2xl font-bold">Ecosistemas en Peligro</h3>
                <p class="text-gray-600">
                    El cambio climático está alterando hábitats naturales, provocando la extinción de especies y
                    desequilibrando ecosistemas enteros. Los arrecifes de coral, los bosques tropicales y los
                    ecosistemas polares son especialmente vulnerables.
                </p>
                <h3 class="text-2xl font-bold">Seguridad Alimentaria</h3>
                <p class="text-gray-600">
                    Los cambios en los patrones climáticos afectan directamente la producción agrícola, poniendo en
                    riesgo
                    la seguridad alimentaria global y aumentando la volatilidad de los precios de los alimentos.
                </p>
                <button class="w-fit">Descubre Más</button>
            </div>
            <div class="grid gap-4 lg:gap-8" 
            >
                <div class="flex flex-col space-y-2 bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Salud Humana</h3>
                    <p class="text-gray-600">
                        El aumento de las temperaturas y los eventos climáticos extremos tienen impactos directos en la
                        salud humana, incluyendo enfermedades relacionadas con el calor, propagación de enfermedades
                        infecciosas y problemas de salud mental.
                    </p>
                </div>
                <div class="flex flex-col space-y-2 bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Economía y Sociedad</h3>
                    <p class="text-gray-600">
                        El cambio climático afecta a sectores económicos clave como la agricultura, el turismo y la
                        energía.
                        Además, exacerba las desigualdades sociales y puede provocar migraciones masivas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    new ScrollMagic.Scene({
        triggerElement: "#trigger1",
        // triggerHook: 0.95, // show, when scrolled 10% into view
        duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    })

    .setClassToggle("#reveal1", "visible") // add class to reveal
    .addTo(controller);
</script>