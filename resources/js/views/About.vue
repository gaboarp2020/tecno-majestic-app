<template>
  <div id="about">
    <section id="hero" class="hero is-medium" :style="{ backgroundImage: 'url(' + image[0] + ')' }">
      <div class="hero-body layer">
        <div class="container">
          <h1 class="title for-dark-title is-2">Nosotros</h1>
          <h2
            class="subtitle for-dark-subtitle is-3"
          >Ofrecemos los mejores servicios a nivel tecnológico y soluciones para tu empresa</h2>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title for-white has-text-left">Innovamos en materia tecnológica</h1>
            <p
              class="is-size-5 has-text-grey-darker has-text-justified"
            >Somos una empresa multidisciplinaria de marketing, diseño y desarrollo web o Móvil, implementaciones de servicios de hosting, servidores y consultora tecnológica con amplio dominio en las arquitecturas y tecnologías más modernas.</p>
          </div>
        </div>
        <div class="columns is-vcentered">
          <div class="column">
            <h1 class="title for-white has-text-centered">Misión</h1>
            <p class="is-size-5 has-text-grey-darker has-text-justified">
              Brindar soluciones modernas, bajo ambiente web o móvil, diseñados para asegurar un funcionamiento
              óptimo, brindando confianza y seguridad
              a cualquier negocio en América.
            </p>
            <p class="is-size-5 mt-2"></p>
          </div>
          <div class="column has-text-centered mt-3">
            <img :src="getImgUrl(1)" alt="Grupo de personas" height="700"/>
          </div>
        </div>
        <div class="columns is-vcentered">
          <div class="column has-text-centered mt-3">
            <img :src="getImgUrl(2)" alt="Vision" height="700"/>
          </div>
          <div class="column">
            <h1 class="title for-white has-text-centered">Visión</h1>
            <p
              class="is-size-5 has-text-grey-darker has-text-justified"
            >Ser la mejor opción para la consultoría y el desarrollo de soluciones en sistemas de información adecuados a sus necesidades, seguros y confiables.</p>
            <p class="is-size-5 mt-2"></p>
          </div>
        </div>
        <div class="columns">
          <div class="column">
            <h1 class="title for-white has-text-left">Nuestra Historia</h1>
            <p class="is-size-5 has-text-grey-darker has-text-justified">
              Somos una empresa orientada a ofrecer servicios tecnológicos que incluyen soluciones
              integrales para nuestros clientes, asegurando la operatividad de sus negocios con tecnología
              de punta.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="hero is-medium has-text-left is-bold bg-cover is-green">
      <div class="hero-body">
        <div class="container">
          <h1 class="title for-green-title is-2">Valores</h1>
          <h2 class="subtitle for-green-subtitle is-4">Lo mejor de nosotros, para nuestros clientes.</h2>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column has-text-centered section">
            <div class="section">
              <img :src="getImgUrl(3)" alt="Responsabilidad" height="80" width="80" />
            </div>
            <div>
              <h1 class="title for-white is-size-4">Responsabilidad</h1>
              <p class="is-size-5">Soluciones dentro del tiempo requerido.</p>
            </div>
          </div>
          <div class="column has-text-centered section">
            <div class="section">
              <img :src="getImgUrl(4)" alt="Excelencia" height="80" width="80" />
            </div>
            <div>
              <h1 class="title for-white is-size-4">Excelencia</h1>
              <p class="is-size-5">Servicio de calidad, por profesionales.</p>
            </div>
          </div>
          <div class="column has-text-centered section">
            <div class="section">
              <img :src="getImgUrl(5)" alt="Comunicacion" height="80" width="80" />
            </div>
            <div>
              <h1 class="title for-white is-size-4">Comunicacion</h1>
              <p class="is-size-5">Constante comunicación con nuestros clientes.</p>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="column has-text-centered section">
            <div class="section">
              <img :src="getImgUrl(6)" alt="Competitividad" height="80" width="80" />
            </div>
            <div>
              <h1 class="title for-white is-size-4">Competitividad</h1>
              <p class="is-size-5">Tus soluciones a precios competitivos en el mercado.</p>
            </div>
          </div>
          <div class="column has-text-centered section">
            <div class="section">
              <img :src="getImgUrl(7)" alt="Integridad" height="80" width="80" />
            </div>
            <div>
              <h1 class="title for-white is-size-4">Integridad</h1>
              <p class="is-size-5">Auténticos y honestos con nuestros clientes.</p>
            </div>
          </div>
          <div class="column has-text-centered section">
            <div class="section">
              <img :src="getImgUrl(8)" alt="Excelencia" height="80" width="80" />
            </div>
            <div>
              <h1 class="title for-white is-size-4">Pasión</h1>
              <p class="is-size-5">Amamos lo que hacemos para mejorar lo que ofrecemos.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: "Nosotros",

      image: [
        "../img/background/home-about.jpg",
        "../img/storage/people-work.jpeg",
        "../img/storage/vision.jpeg",
        "../img/vector/alarm-clock.png",
        "../img/vector/star.png",
        "../img/vector/chat.png",
        "../img/vector/winners-ribbon.png",
        "../img/vector/locked.png",
        "../img/vector/protect.png"
      ]
    };
  },

  methods: {
    getImgUrl(index) {
      return this.image[index];
    }
  },

  beforeMount() {
    document.title = "Tecnomajestic | " + this.title;
  }
};
</script>
<style lang="scss" scoped>
.hero {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: left;
  position: relative;
  margin-top: 52px;
}
</style>
