@extends('layouts.app')
@section('content')
<style>
    .accordion-content {
        display: none;
    }
    .accordion-open .accordion-content {
        display: block;
    }
    .accordion-toggle::after {
        content: "▼";
        font-size: 0.85em;
        margin-left: 7px;
        transition: transform 0.2s;
        display: inline-block;
        transform: rotate(0deg);
    }
    .accordion-open .accordion-toggle::after {
        transform: rotate(180deg);
    }
</style>
<main
    class="bg-gradient-to-br from-sky-100 via-white to-emerald-100 min-h-screen flex flex-col items-center py-7 px-2"
  >
    <div
      class="w-full max-w-2xl bg-white shadow-2xl rounded-2xl px-6 py-8 sm:px-8 sm:py-10 mt-2 relative"
    >
      <div class="absolute right-5 top-4 flex items-center gap-2">
        <button
          id="langBtn"
          aria-label="Trocar idioma"
          class="text-sm font-semibold text-sky-700 bg-sky-50 px-3 py-1 rounded-lg border border-sky-200 hover:bg-sky-100 transition"
        >
          🌐 Español / Português
        </button>
      </div>
      <h1
        id="mainTitle"
        class="text-2xl md:text-3xl font-bold text-sky-700 text-center mb-2"
      >
        Calculadora Bioclimática
      </h1>
      <form id="calcForm" autocomplete="off" novalidate class="space-y-2 mt-2">
        <!-- Datos generales -->
        <div>
          <label
            id="lbl-volumen"
            for="volumen"
            class="block text-sm font-medium text-sky-800 mb-1"
            >Volumen interior (m³):</label
          >
          <input
            type="number"
            step="0.1"
            min="1"
            id="volumen"
            placeholder="Ej: 320"
            class="w-full rounded-lg border border-sky-200 px-4 py-2 text-base bg-sky-50 focus:outline-none focus:ring-2 focus:ring-sky-400"
            required
          />
          <span
            id="err-volumen"
            class="text-pink-600 text-xs min-h-[1rem] block"
          ></span>
        </div>
        <div>
          <label
            id="lbl-superficie"
            for="superficie"
            class="block text-sm font-medium text-sky-800 mb-1"
            >Superficie envolvente (m²):</label
          >
          <input
            type="number"
            step="0.1"
            min="1"
            id="superficie"
            placeholder="Ej: 290"
            class="w-full rounded-lg border border-sky-200 px-4 py-2 text-base bg-sky-50 focus:outline-none focus:ring-2 focus:ring-sky-400"
            required
          />
          <span
            id="err-superficie"
            class="text-pink-600 text-xs min-h-[1rem] block"
          ></span>
        </div>
        <div>
          <label
            id="lbl-material"
            for="material"
            class="block text-sm font-medium text-sky-800 mb-1"
            >Material principal de paredes:</label
          >
          <select
            id="material"
            class="w-full rounded-lg border border-sky-200 px-4 py-2 text-base bg-sky-50 focus:outline-none focus:ring-2 focus:ring-sky-400"
            required
          >
            <option value="">Selecciona material...</option>
            <option value="beton">Hormigón / Piedra</option>
            <option value="ladrillo">Ladrillo / Bloque cerámico</option>
            <option value="madera">Madera</option>
            <option value="yeso">Yeso / Pladur</option>
            <option value="otro">Otro / Mixto</option>
          </select>
          <span
            id="err-material"
            class="text-pink-600 text-xs min-h-[1rem] block"
          ></span>
        </div>
        <div>
          <label
            id="lbl-acristalado"
            for="acristalado"
            class="block text-sm font-medium text-sky-800 mb-1"
            >Superficie acristalada (% sobre envolvente):</label
          >
          <input
            type="number"
            step="1"
            min="0"
            max="90"
            id="acristalado"
            placeholder="Ej: 18"
            class="w-full rounded-lg border border-sky-200 px-4 py-2 text-base bg-sky-50 focus:outline-none focus:ring-2 focus:ring-sky-400"
            required
          />
          <span
            id="err-acristalado"
            class="text-pink-600 text-xs min-h-[1rem] block"
          ></span>
        </div>
        <!-- Aislamiento -->
        <div>
          <label
            id="lbl-aislamiento"
            class="block text-sm font-medium text-sky-800 mb-1 mt-3"
            >Aislamiento (muro exterior):</label
          >
          <div class="flex flex-col md:flex-row gap-2">
            <select
              id="materialAislante"
              class="rounded-lg border border-sky-200 px-3 py-2 bg-sky-50"
            >
              <option value="lana">Lana mineral</option>
              <option value="corcho">Corcho</option>
              <option value="poliuretano">Poliuretano</option>
              <option value="EPS">EPS</option>
              <option value="otro">Otro</option>
            </select>
            <input
              type="number"
              id="espesorAislante"
              min="0.02"
              max="0.2"
              step="0.01"
              value="0.06"
              class="rounded-lg border border-sky-200 px-3 py-2 w-28 bg-sky-50"
              placeholder="0.06"
            />
            <span class="text-sm text-sky-800 self-center">m</span>
          </div>
        </div>
        <!-- Puentes térmicos -->
        <div>
          <label
            id="lbl-geometria"
            class="block text-sm font-medium text-sky-800 mb-1"
            >Geometría / voladizos:</label
          >
          <select
            id="geometria"
            class="rounded-lg border border-sky-200 px-3 py-2 bg-sky-50"
          >
            <option value="compacto">Compacto</option>
            <option value="muchos voladizos">Muchos voladizos</option>
            <option value="forma irregular">Forma irregular</option>
          </select>
        </div>
        <!-- Confort -->
        <div>
          <label
            id="lbl-ventilacion"
            class="block text-sm font-medium text-sky-800 mb-1 mt-3"
            >Ventilación:</label
          >
          <select
            id="ventilacion"
            class="rounded-lg border border-sky-200 px-3 py-2 bg-sky-50"
          >
            <option value="baja">Baja</option>
            <option value="media">Media</option>
            <option value="alta">Alta</option>
          </select>
        </div>
        <div>
          <label
            id="lbl-humedad"
            for="humedad"
            class="block text-sm font-medium text-sky-800 mb-1"
            >Humedad interior (%):</label
          >
          <input
            type="number"
            min="20"
            max="90"
            id="humedad"
            placeholder="55"
            class="w-full rounded-lg border border-sky-200 px-4 py-2 text-base bg-sky-50 focus:outline-none focus:ring-2 focus:ring-sky-400"
            value="55"
          />
        </div>
        <!-- Renovables -->
        <div>
          <label
            id="lbl-renovables"
            class="block text-sm font-medium text-sky-800 mb-1 mt-3"
            >¿Instalaciones de energías renovables?</label
          >
          <div class="flex gap-4 items-center flex-wrap">
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="solarFV" />
              <span>Solar FV</span></label
            >
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="solarTermica" />
              <span>Solar térmica</span></label
            >
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="eolica" />
              <span>Mini-eólica</span></label
            >
          </div>
        </div>
        <!-- Agua -->
        <div>
          <label
            id="lbl-agua"
            class="block text-sm font-medium text-sky-800 mb-1 mt-3"
            >Gestión y ahorro de agua:</label
          >
          <div class="flex gap-4 items-center flex-wrap">
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="pluviales" />
              <span>Recogida pluvial</span></label
            >
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="grises" />
              <span>Reutilización aguas grises</span></label
            >
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="eficientes" />
              <span>Sanitarios eficientes</span></label
            >
          </div>
        </div>
        <!-- Economía circular -->
        <div>
          <label
            id="lbl-circular"
            class="block text-sm font-medium text-sky-800 mb-1 mt-3"
            >Economía circular:</label
          >
          <div class="flex gap-4 items-center flex-wrap">
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="reciclables" />
              <span>Materiales reciclables</span></label
            >
            <label class="flex gap-1 items-center"
              ><input type="checkbox" id="desmontable" />
              <span>Diseño desmontable</span></label
            >
          </div>
        </div>
        <!-- Mejora y coste -->
        <div>
          <label
            id="lbl-mejora"
            for="mejora"
            class="block text-sm font-medium text-sky-800 mb-1 mt-3"
            >Mejora a aplicar:</label
          >
          <select
            id="mejora"
            class="w-full rounded-lg border border-sky-200 px-4 py-2 text-base bg-sky-50 focus:outline-none focus:ring-2 focus:ring-sky-400"
            required
          >
            <option value="none">Ninguna / Nenhuma</option>
            <option value="muro">
              Aislamiento en muros / Isolamento nas paredes
            </option>
            <option value="cubierta">
              Aislamiento en cubierta / Isolamento na cobertura
            </option>
            <option value="vidrio">
              Cambio a doble acristalamiento / Vidros duplos
            </option>
          </select>
        </div>
        <div id="div-coste" style="display: none">
          <label
            id="lbl-coste"
            for="coste"
            class="block text-sm font-medium text-sky-800 mb-1"
            >Precio estimado de la mejora (€):</label
          >
          <input
            type="number"
            step="1"
            min="0"
            id="coste"
            placeholder="Ej: 4000"
            class="w-full rounded-lg border border-sky-200 px-4 py-2 text-base bg-sky-50 focus:outline-none focus:ring-2 focus:ring-sky-400"
          />
        </div>
        <button
          type="submit"
          class="w-full mt-4 py-3 px-6 rounded-xl bg-sky-700 text-white text-base font-semibold shadow hover:bg-sky-800 active:scale-95 transition-all"
        >
          Calcular eficiencia y recomendaciones
        </button>
      </form>
      <div id="output"></div>
    </div>
    <script>
      class AppTranslator {
        constructor() {
          this.language = "es";
          this.dict = {
            es: {
              mainTitle: "Calculadora Bioclimática",
              volumen: "Volumen interior (m³):",
              superficie: "Superficie envolvente (m²):",
              material: "Material principal de paredes:",
              acristalado: "Superficie acristalada (% sobre envolvente):",
              aislamiento: "Aislamiento (muro exterior):",
              geometria: "Geometría / voladizos:",
              ventilacion: "Ventilación:",
              humedad: "Humedad interior (%):",
              renovables: "¿Instalaciones de energías renovables?",
              agua: "Gestión y ahorro de agua:",
              circular: "Economía circular:",
              mejora: "Mejora a aplicar:",
              coste: "Precio estimado de la mejora (€):",
              submit: "Calcular eficiencia y recomendaciones",
              mejoras: {
                none: "Ninguna",
                muro: "Aislamiento en muros",
                cubierta: "Aislamiento en cubierta",
                vidrio: "Cambio a doble acristalamiento",
              },
              errors: {
                volumen: "Introduce un volumen entre 10 y 20.000 m³.",
                superficie: "Superficie entre 10 y 10.000 m².",
                material: "Selecciona el material principal.",
                acristalado: "Porcentaje entre 0 y 90.",
                coste: "Introduce un precio mayor que 0.",
              },
              resultTitle: "Resultados y Diagnóstico",
              recomendaciones: "Recomendaciones detalladas:",
              ahorroTitle: "Ahorro y retorno de inversión",
              costeMejora: "Coste de la mejora",
              ahorroAnual: "Ahorro energético anual estimado",
              retorno: "Tiempo de retorno de inversión",
              anios: "años",
              outputAdvanced: "Más análisis avanzado:",
              tool1: "CBE Climate Tool",
              tool2: "Carta de Givoni",
              aislamientoMod: {
                insuficiente:
                  "Aislamiento insuficiente: aumenta el espesor o mejora el material.",
                mejorable:
                  "Aislamiento mejorable: considera optimizar para reducir consumos.",
                bueno: "Aislamiento óptimo, cumple estándares bioclimáticos.",
              },
              puentes: {
                criticos:
                  "Riesgo de puentes térmicos: revisa voladizos y uniones sin aislamiento.",
                consejoGeneral:
                  "Aísla siempre encuentros de muro y forjado y los huecos de ventanas.",
              },
              confort: {
                confort: "Nivel de confort adecuado.",
                disconfort:
                  "Disconfort: riesgo de sensación térmica baja en invierno.",
                "posible sobrecalentamiento":
                  "Atención a sobrecalentamiento en verano.",
                riesgoCondensacion:
                  "¡Riesgo de condensación y moho! Mejora ventilación.",
                sinRiesgo: "No hay riesgo de humedad crítica.",
              },
              renovables_resp: {
                ahorro: (vars) =>
                  `Puedes ahorrar ~${
                    vars.ahorro
                  } €/año y evitar ${vars.co2.toFixed(
                    1
                  )} tCO₂/año usando renovables.`,
              },
              agua_resp: {
                pluviales:
                  "Instala sistemas de recolección de aguas pluviales para riego y cisternas.",
                grises: "Reutiliza aguas grises en sanitarios o riego.",
                eficientes:
                  "Utiliza grifería y sanitarios eficientes para reducir consumo.",
                consejoGeneral:
                  "Vigila fugas y mantenimiento regular de instalaciones de agua.",
              },
              circular_resp: {
                reciclaje:
                  "Utiliza materiales reciclados y reciclables siempre que sea posible.",
                desmontable:
                  "Prioriza diseños desmontables para facilitar futuras reformas y reciclaje.",
                consejoGeneral:
                  "Reduce residuos, planifica para el desmontaje y reutilización futura.",
              },
            },
            pt: {
              mainTitle: "Calculadora Bioclimática",
              volumen: "Volume interior (m³):",
              superficie: "Superfície envolvente (m²):",
              material: "Material principal das paredes:",
              acristalado: "Superfície envidraçada (% da envolvente):",
              aislamiento: "Isolamento (parede exterior):",
              geometria: "Geometria / beirais:",
              ventilacion: "Ventilação:",
              humedad: "Humidade interior (%):",
              renovables: "Instalações de energias renováveis?",
              agua: "Gestão e poupança de água:",
              circular: "Economia circular:",
              mejora: "Melhoria a aplicar:",
              coste: "Preço estimado da melhoria (€):",
              submit: "Calcular eficiência e recomendações",
              mejoras: {
                none: "Nenhuma",
                muro: "Isolamento nas paredes",
                cubierta: "Isolamento na cobertura",
                vidrio: "Vidros duplos",
              },
              errors: {
                volumen: "Introduza um volume entre 10 e 20.000 m³.",
                superficie: "Superfície entre 10 e 10.000 m².",
                material: "Selecione o material principal.",
                acristalado: "Percentagem entre 0 e 90.",
                coste: "Introduza um preço superior a 0.",
              },
              resultTitle: "Resultados e Diagnóstico",
              recomendaciones: "Recomendações detalhadas:",
              ahorroTitle: "Poupança e retorno do investimento",
              costeMejora: "Custo da melhoria",
              ahorroAnual: "Poupança energética anual estimada",
              retorno: "Tempo de retorno do investimento",
              anios: "anos",
              outputAdvanced: "Mais análise avançada:",
              tool1: "CBE Climate Tool",
              tool2: "Carta de Givoni",
              aislamientoMod: {
                insuficiente:
                  "Isolamento insuficiente: aumente a espessura ou melhore o material.",
                mejorable:
                  "Isolamento melhorável: considere otimizar para reduzir consumos.",
                bueno: "Isolamento ótimo, cumpre padrões bioclimáticos.",
              },
              puentes: {
                criticos:
                  "Risco de pontes térmicas: reveja beirais e uniões sem isolamento.",
                consejoGeneral:
                  "Isole sempre encontros de parede e laje e os vãos de janelas.",
              },
              confort: {
                confort: "Nível de conforto adequado.",
                disconfort:
                  "Desconforto: risco de sensação térmica baixa no inverno.",
                "posible sobrecalentamiento":
                  "Atenção ao sobreaquecimento no verão.",
                riesgoCondensacion:
                  "Risco de condensação e bolor! Melhore a ventilação.",
                sinRiesgo: "Sem risco crítico de humidade.",
              },
              renovables_resp: {
                ahorro: (vars) =>
                  `Pode poupar ~${
                    vars.ahorro
                  } €/ano e evitar ${vars.co2.toFixed(
                    1
                  )} tCO₂/ano com renováveis.`,
              },
              agua: {
                pluviales:
                  "Instale sistemas de recolha de águas pluviais para rega e autoclismos.",
                grises: "Reutilize águas cinzentas em sanitários ou rega.",
                eficientes:
                  "Utilize torneiras e sanitários eficientes para reduzir o consumo.",
                consejoGeneral:
                  "Vigie fugas e faça manutenção regular das instalações de água.",
              },
              circular: {
                reciclaje:
                  "Use materiais reciclados e recicláveis sempre que possível.",
                desmontable:
                  "Priorize designs desmontáveis para facilitar futuras reformas e reciclagem.",
                consejoGeneral:
                  "Reduza resíduos, planeie para a desmontagem e reutilização futura.",
              },
            },
          };
        }
        setLanguage(lang) {
          if (this.dict[lang]) this.language = lang;
        }
        t(key, vars) {
          let val = key
            .split(".")
            .reduce((a, b) => a && a[b], this.dict[this.language]);
          if (typeof val === "function") return val(vars || {});
          return val;
        }
        get currentLanguage() {
          return this.language;
        }
      }
      const translator = new AppTranslator();

      const AHORROS = { muro: 300, cubierta: 250, vidrio: 180 };

      document.getElementById("langBtn").onclick = function () {
        const nextLang = translator.currentLanguage === "es" ? "pt" : "es";
        translator.setLanguage(nextLang);
        updateLabels();
        clearErrors();
        document.getElementById("output").innerHTML = "";
      };
      function updateLabels() {
        [
          ["mainTitle", "mainTitle"],
          ["lbl-volumen", "volumen"],
          ["lbl-superficie", "superficie"],
          ["lbl-material", "material"],
          ["lbl-acristalado", "acristalado"],
          ["lbl-aislamiento", "aislamiento"],
          ["lbl-geometria", "geometria"],
          ["lbl-ventilacion", "ventilacion"],
          ["lbl-humedad", "humedad"],
          ["lbl-renovables", "renovables"],
          ["lbl-agua", "agua"],
          ["lbl-circular", "circular"],
          ["lbl-mejora", "mejora"],
          ["lbl-coste", "coste"],
        ].forEach(([id, key]) => {
          if (document.getElementById(id))
            document.getElementById(id).innerText = translator.t(key);
        });
        document
          .getElementById("calcForm")
          .querySelector('button[type="submit"]').innerText =
          translator.t("submit");
        // Mejora select
        const opt = document.getElementById("mejora").options;
        opt[0].text = translator.t("mejoras.none");
        opt[1].text = translator.t("mejoras.muro");
        opt[2].text = translator.t("mejoras.cubierta");
        opt[3].text = translator.t("mejoras.vidrio");
      }
      function clearErrors() {
        [
          "err-volumen",
          "err-superficie",
          "err-material",
          "err-acristalado",
        ].forEach((id) => showError(id, ""));
      }
      function showError(id, msg) {
        document.getElementById(id).innerText = msg;
      }
      function validate(formData) {
        const e = translator.t("errors");
        const errors = {};
        if (
          !formData.volumen ||
          isNaN(formData.volumen) ||
          formData.volumen < 10 ||
          formData.volumen > 20000
        )
          errors.volumen = e.volumen;
        if (
          !formData.superficie ||
          isNaN(formData.superficie) ||
          formData.superficie < 10 ||
          formData.superficie > 10000
        )
          errors.superficie = e.superficie;
        if (!formData.material) errors.material = e.material;
        if (
          formData.acristalado === "" ||
          isNaN(formData.acristalado) ||
          formData.acristalado < 0 ||
          formData.acristalado > 90
        )
          errors.acristalado = e.acristalado;
        if (
          formData.mejora !== "none" &&
          (!formData.coste || isNaN(formData.coste) || formData.coste <= 0)
        )
          errors.coste = e.coste;
        return errors;
      }
      function calcAislamiento({ espesorAislante, materialAislante }) {
        const conductividad = {
          lana: 0.036,
          corcho: 0.04,
          poliuretano: 0.03,
          EPS: 0.038,
          otro: 0.045,
        };
        const lambda = conductividad[materialAislante] || conductividad.otro;
        const U = (lambda / espesorAislante).toFixed(2);
        let consejo = "";
        if (U > 0.45) consejo = translator.t("aislamientoMod.insuficiente");
        else if (U > 0.3) consejo = translator.t("aislamientoMod.mejorable");
        else consejo = translator.t("aislamientoMod.bueno");
        return { U, consejo };
      }
      function alertaPuentesTermicos({ geometria }) {
        let consejos = [];
        if (geometria === "muchos voladizos") {
          consejos.push(translator.t("puentes.criticos"));
        }
        consejos.push(translator.t("puentes.consejoGeneral"));
        return consejos;
      }
      function simularConfort({ ventilacion, humedad, espesorAislante }) {
        let invierno =
          ventilacion === "baja" && espesorAislante < 0.05
            ? "disconfort"
            : "confort";
        let verano =
          ventilacion === "alta" && espesorAislante > 0.04
            ? "confort"
            : "posible sobrecalentamiento";
        let humedadRiesgo =
          humedad > 70
            ? translator.t("confort.riesgoCondensacion")
            : translator.t("confort.sinRiesgo");
        return {
          invierno: translator.t(`confort.${invierno}`),
          verano: translator.t(`confort.${verano}`),
          humedadRiesgo,
        };
      }
      function calcularRenovables({ solarFV, solarTermica, eolica }) {
        let ahorro = 0,
          co2 = 0;
        if (solarFV) {
          ahorro += 500;
          co2 += 0.8;
        }
        if (solarTermica) {
          ahorro += 250;
          co2 += 0.3;
        }
        if (eolica) {
          ahorro += 200;
          co2 += 0.4;
        }
        return {
          ahorro,
          co2Reduc: co2,
          resumen: translator.t("renovables_resp.ahorro", { ahorro, co2 }),
        };
      }
      function gestionAgua({ pluviales, grises, eficientes }) {
        let consejos = [];
        if (pluviales) consejos.push(translator.t("agua_resp.pluviales"));
        if (grises) consejos.push(translator.t("agu_respa.grises"));
        if (eficientes) consejos.push(translator.t("agua_resp.eficientes"));
        consejos.push(translator.t("agua_resp.consejoGeneral"));
        return consejos;
      }
      function economiaCircular({ reciclables, desmontable }) {
        let consejos = [];
        if (reciclables) consejos.push(translator.t("circular_resp.reciclaje"));
        if (desmontable) consejos.push(translator.t("circular_resp.desmontable"));
        consejos.push(translator.t("circular_resp.consejoGeneral"));
        return consejos;
      }
      document.getElementById("mejora").onchange = function () {
        document.getElementById("div-coste").style.display =
          this.value !== "none" ? "block" : "none";
      };
      function toggleAccordion(id) {
        const box = document.getElementById(id);
        if (!box) return;
        box.classList.toggle("accordion-open");
      }
      document.getElementById("calcForm").onsubmit = function (e) {
        e.preventDefault();
        clearErrors();
        const fd = {
          volumen: Number(document.getElementById("volumen").value),
          superficie: Number(document.getElementById("superficie").value),
          material: document.getElementById("material").value,
          acristalado: Number(document.getElementById("acristalado").value),
          espesorAislante: Number(
            document.getElementById("espesorAislante").value
          ),
          materialAislante: document.getElementById("materialAislante").value,
          geometria: document.getElementById("geometria").value,
          ventilacion: document.getElementById("ventilacion").value,
          humedad: Number(document.getElementById("humedad").value),
          solarFV: document.getElementById("solarFV").checked,
          solarTermica: document.getElementById("solarTermica").checked,
          eolica: document.getElementById("eolica").checked,
          pluviales: document.getElementById("pluviales").checked,
          grises: document.getElementById("grises").checked,
          eficientes: document.getElementById("eficientes").checked,
          reciclables: document.getElementById("reciclables").checked,
          desmontable: document.getElementById("desmontable").checked,
          mejora: document.getElementById("mejora").value,
          coste: Number(document.getElementById("coste").value),
        };
        const errors = validate(fd);
        Object.entries(errors).forEach(([k, v]) => showError("err-" + k, v));
        if (Object.keys(errors).length > 0) return;
        const ff = fd.superficie / fd.volumen;
        const resultadoAislamiento = calcAislamiento({
          espesorAislante: fd.espesorAislante,
          materialAislante: fd.materialAislante,
        });
        const alertasPuentes = alertaPuentesTermicos({
          geometria: fd.geometria,
        });
        const confort = simularConfort({
          ventilacion: fd.ventilacion,
          humedad: fd.humedad,
          espesorAislante: fd.espesorAislante,
        });
        const renovables = calcularRenovables({
          solarFV: fd.solarFV,
          solarTermica: fd.solarTermica,
          eolica: fd.eolica,
        });
        const gestion = gestionAgua({
          pluviales: fd.pluviales,
          grises: fd.grises,
          eficientes: fd.eficientes,
        });
        const circular = economiaCircular({
          reciclables: fd.reciclables,
          desmontable: fd.desmontable,
        });
        let ahorro = 0,
          retorno = null,
          mejoraTxt = "";
        if (fd.mejora !== "none") {
          ahorro = AHORROS[fd.mejora] || 0;
          retorno =
            fd.coste > 0 && ahorro > 0 ? (fd.coste / ahorro).toFixed(1) : null;
          mejoraTxt = translator.t(`mejoras.${fd.mejora}`);
        }
        function accordionBox(id, title, content, open = true) {
          return `
      <div id="${id}" class="rounded-xl mb-3 border ${
            open ? "accordion-open" : ""
          }">
        <button type="button" class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-base px-4 py-3 bg-emerald-100 hover:bg-emerald-200 rounded-t-xl select-none" data-accordion-id="${id}">
          ${title}
        </button>
        <div class="accordion-content px-4 pb-4 pt-2 text-green-900 text-[15px] bg-white rounded-b-xl">${content}</div>
      </div>
    `;
        }
        const output = `
    <div class="mt-8 animate-fade-in">
      ${accordionBox(
        "acc-basico",
        translator.t("resultTitle"),
        `<ul class="pl-4 list-disc space-y-1">
          <li><b>Factor de Forma:</b> <span class="text-sky-700 font-bold">${ff.toFixed(
            2
          )}</span></li>
          <li><b>U (muro):</b> <span class="text-emerald-700 font-bold">${
            resultadoAislamiento.U
          } W/m²K</span> <span class="text-xs">${
          resultadoAislamiento.consejo
        }</span></li>
        </ul>`,
        true
      )}
      ${accordionBox(
        "acc-puentes",
        "Puentes térmicos",
        `<ul class="pl-4 list-disc space-y-1">${alertasPuentes
          .map((s) => "<li>" + s + "</li>")
          .join("")}</ul>`,
        false
      )}
      ${accordionBox(
        "acc-confort",
        "Confort térmico/higrométrico",
        `<ul class="pl-4 list-disc space-y-1">
          <li><b>Invierno:</b> ${confort.invierno}</li>
          <li><b>Verano:</b> ${confort.verano}</li>
          <li>${confort.humedadRiesgo}</li>
        </ul>`,
        false
      )}
      ${accordionBox(
        "acc-renovables",
        "Energías renovables",
        fd.solarFV || fd.solarTermica || fd.eolica
          ? renovables_resp.resumen
          : `<span class="text-gray-500">No seleccionadas</span>`,
        false
      )}
      ${accordionBox(
        "acc-agua",
        "Gestión y ahorro de agua",
        `<ul class="pl-4 list-disc space-y-1">${gestion
          .map((s) => "<li>" + s + "</li>")
          .join("")}</ul>`,
        false
      )}
      ${accordionBox(
        "acc-circular",
        "Economía circular",
        `<ul class="pl-4 list-disc space-y-1">${
        circular
          .map((s) => "<li>" + s + "</li>")
          .join("")}</ul>`,
        false
      )}
      ${
        fd.mejora !== "none" && retorno
          ? accordionBox(
              "acc-retorno",
              translator.t("ahorroTitle"),
              `<ul class="pl-4 text-[15px] space-y-1">
            <li><b>${translator.t("mejora")}:</b> ${mejoraTxt}</li>
            <li><b>${translator.t("costeMejora")}:</b> ${fd.coste} €</li>
            <li><b>${translator.t("ahorroAnual")}:</b> ~${ahorro} €/año</li>
            <li><b>${translator.t("retorno")}:</b> ${retorno} ${translator.t(
                "anios"
              )}</li>
          </ul>`,
              false
            )
          : ""
      }
      <div class="mt-5 text-center text-sky-600 text-sm">
        ${translator.t("outputAdvanced")}
        <a href="https://clima.cbe.berkeley.edu" target="_blank" class="underline hover:text-sky-800 font-medium">${translator.t(
          "tool1"
        )}</a> |
        <a href="https://andrewmarsh.com/software/psychro-chart-web/" target="_blank" class="underline hover:text-sky-800 font-medium">${translator.t(
          "tool2"
        )}</a>
      </div>
    </div>
  `;
        document.getElementById("output").innerHTML = output;
        // Attach accordion event listeners after rendering
        document
          .querySelectorAll("#output .accordion-toggle")
          .forEach((btn) => {
            btn.addEventListener("click", function () {
              const id = this.getAttribute("data-accordion-id");
              const box = document.getElementById(id);
              if (box) box.classList.toggle("accordion-open");
            });
          });
        document.getElementById("acc-basico").classList.add("accordion-open");
      };
      ["volumen", "superficie", "acristalado", "coste"].forEach((id) => {
        document.getElementById(id).addEventListener("input", function () {
          if (this.value && Number(this.value) > 0) showError("err-" + id, "");
        });
      });
      document
        .getElementById("material")
        .addEventListener("change", function () {
          if (this.value) showError("err-material", "");
        });
      updateLabels();
    </script>
  </main>

@endsection