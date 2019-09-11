<template>
  <div id="inicio">
    <div class="is-relative">
      <transition name="slide-fade" mode="out-in">
        <section
          id="hero"
          class="hero bg-cover is-fullheight is-bold"
          :style="{ backgroundImage: 'url(' + image[i] + ')' }"
          :key="image[i]"
        >
          <div class="hero-body layer">
            <div class="container">
              <h1 class="title for-dark-title is-2">
                <transition name="slide-fade" mode="out-in">
                  <div :key="hero.title[j]">{{ hero.title[j] }}</div>
                </transition>
              </h1>
              <h2 class="subtitle for-dark-subtitle is-3">
                <transition name="slide-fade" mode="out-in">
                  <div :key="hero.content[j]">{{ hero.content[j] }}</div>
                </transition>
              </h2>
            </div>
          </div>
        </section>
      </transition>
      <!-- <div class="row">
        <span class="point"></span>
        <span class="point"></span>
        <span class="point"></span>
        <span class="point"></span>
        <span class="point"></span>
      </div>-->
      <span class="icon is-large donwArrow-icon">
        <a href="#home">
          <i class="fa for-dark-subtitle fa-2x fa-chevron-down"></i>
        </a>
      </span>
    </div>

    <div id="home" class="step"></div>

    <section class="hero is-orange is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title for-orange-title is-2">Nuestra Historia</h1>
          <h2
            class="subtitle for-orange-subtitle is-4"
          >Somos una empresa orientada a ofrecer servicios tecnológicos que incluyen soluciones integrales para nuestros clientes, asegurando la operatividad de sus negocios con tecnología de punta.</h2>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title for-white has-text-left">Nuestro Equipo de Trabajo</h1>
            <p
              class="is-size-5 has-text-grey-darker has-text-justified"
            >Conformamos un equipo de trabajo jóven, guiado por expertos. Interesados en el dominio de las nuevas tendencias en el área de desarrollo y con las mejores ideas innovadoras. Fomentamos el talento, actuamos éticamente y cumplimos con nuestros compromisos, estamos orgullosos de nuestra misión</p>
          </div>
        </div>
        <div class="columns mt-3 is-centered is-vcentered">
          <div class="column">
            <h1 class="title for-white has-text-left">Soluciones Modernas</h1>
            <p
              class="is-size-5 has-text-grey-darker has-text-justified"
            >Desarrollamos soluciones prácticas para cualquier tipo de ambientes y aplicaciones web especializadas, diseñadas para asegurar un funcionamiento óptimo y una utilidad máxima, brindando confianza, seguridad y disponibilidad 24/7.</p>
            <p
              class="is-size-5 has-text-grey-darker mt-2 has-text-justified"
            >Tenemos la convicción de ser la mejor opción para consultorías en el área tecnológica y el desarrollo de soluciones en sistemas de información sofisticados adecuados a sus necesidades, seguros y confiables.</p>
          </div>
          <div class="column has-text-centered">
            <img :src="getImgUrl(1)" alt="Grupo de personas" height="320" width="320" />
          </div>
        </div>
      </div>
    </section>

    <section
      class="hero is-medium has-text-centered is-bold bg-cover"
      :style="{ backgroundImage: 'url(' + image[2] + ')' }"
    >
      <div class="hero-body grey-layer">
        <div class="container">
          <h1 class="title for-dark-title has-text-left is-2">Servicios que ofrecemos</h1>
          <h2
            class="subtitle for-dark-subtitle has-text-left is-4"
          >Integramos la implementación de Sistemas de Información bajo diversas tecnologías, diseñando e implementando tanto en la nube como en infraestructura privada.</h2>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container has-text-centered">
        <div class>
          <div class="columns">
            <div class="column">
              <div class="box">
                <div class="section">
                  <img :src="getImgUrl(3)" alt="Servicio Icono" height="140" width="140" />
                </div>
                <h1 class="title for-white">
                  Implementación y
                  <br />Hosting
                </h1>
                <p
                  class="is-size-5"
                >Especializados en plataformas de hosting remotas o privadas del cliente.</p>
                <div class="section">
                  <router-link
                    to="servicios"
                    class="has-text-weight-semibold is-size-5"
                  >Más información</router-link>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="section">
                  <img :src="getImgUrl(4)" alt="Servicio Icono" height="140" width="140" />
                </div>
                <h1 class="title for-white">
                  Desarrollo de Apps
                  <br />Web
                </h1>
                <p
                  class="is-size-5"
                >Plataformas web, con las tecnologías más innovadoras y modernas.</p>
                <div class="section">
                  <router-link
                    to="servicios"
                    class="has-text-weight-semibold is-size-5"
                  >Más información</router-link>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="box">
                <div class="section">
                  <img :src="getImgUrl(5)" alt="Servicio Icono" height="140" width="140" />
                </div>
                <h1 class="title for-white">Consultoría Tecnológica</h1>
                <p
                  class="is-size-5"
                >Grupo especializado en ofrecerte la mejor solución para tus necesidades.</p>
                <div class="section">
                  <router-link
                    to="servicios"
                    class="has-text-weight-semibold is-size-5"
                  >Más información</router-link>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="section">
                  <img :src="getImgUrl(6)" alt="Servicio Icono" height="140" width="140" />
                </div>
                <h1 class="title for-white">Inteligencia de Negocios</h1>
                <p
                  class="is-size-5"
                >ERP, CRM, e-commerce y CMS. Data Warehouse y Business Intelligence.</p>
                <div class="section">
                  <router-link
                    to="servicios"
                    class="has-text-weight-semibold is-size-5"
                  >Más información</router-link>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="box">
                <div class="section">
                  <img :src="getImgUrl(8)" alt="Servicio Icono" height="140" width="140" />
                </div>
                <h1 class="title for-white">
                  Desarrollo de Apps
                  <br />Móviles
                </h1>
                <p class="is-size-5">Desarrollo de aplicaciones para iOS y Android.</p>
                <div class="section">
                  <router-link
                    to="servicios"
                    class="has-text-weight-semibold is-size-5"
                  >Más información</router-link>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="section">
                  <img :src="getImgUrl(9)" alt="Servicio Icono" height="140" width="140" />
                </div>
                <h1 class="title for-white">
                  Desarrollo de Apps
                  <br />Híbridas
                </h1>
                <p class="is-size-5">Desarrollo de aplicaciones multiplataformas.</p>
                <div class="section">
                  <router-link
                    to="servicios"
                    class="has-text-weight-semibold is-size-5"
                  >Más información</router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section is-white">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title for-white has-text-left">Profesionales Certificados</h1>
            <p
              class="is-size-5 has-text-grey-darker has-text-justified"
            >Nuestro equipo de expertos cuenta con certificaciones de Microsoft y amplios conocimientos en diversas tecnologías.</p>
          </div>
        </div>
        <div class="columns">
          <div class="column has-text-centered">
            <img :src="getImgUrl(14)" alt="Microsoft Certified" width="250" />
          </div>
        </div>
      </div>
      <div class="section">
        <infinite-slide-bar>
          <div class="columns is-vcentered">
            <div class="column" v-for="stack in stacks">
              <div class="mr-1">
                <img :src="stack"/>
              </div>
            </div>
          </div>
        </infinite-slide-bar>
      </div>
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title for-white has-text-left">Nuestro compromiso</h1>
            <p class="is-size-5 has-text-grey-darker has-text-justified">
              En
              <strong>Tecno Majestic C.A.</strong>, nos comprometemos con ustedes, nuestros clientes, en apoyar y apalancar cada uno de los proyectos tecnológicos, con responsabilidad y calidad, honrando los lapsos definidos, innovando y mejorando de manera continua, con la visión de ser la mejor opción para la consultoría y los desarrollos de soluciones en sistemas de información adecuados a sus necesidades, potenciando sus fortalezas.
            </p>
            <p class="is-size-5 has-text-grey-darker has-text-justified mt-2">
              Si está interesado en recibir mayor información sobre los servicios que podemos ofrecerle, nos puede contactar a través del formulario de contacto y con gusto
              coordinaremos una entrevista personal o telefónica.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section
      class="hero is-medium has-text-centered is-bold bg-cover"
      :style="{ backgroundImage: 'url(' + image[7] + ')' }"
    >
      <div class="hero-body grey-layer">
        <div class="container">
          <h1 class="title for-dark-title is-2">Contáctanos</h1>
          <h2 class="subtitle for-dark-subtitle is-4">¿Tienes alguna duda? ¡Comunícate con nosotros!</h2>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class>
          <contact-form></contact-form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import ContactForm from "../components/ContactForm.vue";
import InfiniteSlideBar from "vue-infinite-slide-bar";

let point = document.querySelectorAll("span.point");

export default {
  components: {
    ContactForm,
    InfiniteSlideBar
  },

  data() {
    return {
      title: "Inicio",
      hero: {
        title: [
          "Innovando las Consultorías Tecnológicas",
          "Implementación y Hosting",
          "Desarrollo de Aplicaciones",
          "Consultoría Tecnológica",
          "Inteligencia de Negocios"
        ],
        content: [
          "Consultorías y Desarrollo. Implementación en tiempo récord",
          "Ahorro de costes, rapidez de implementación y escalabilidad",
          "Las aplicaciones web y móviles o híbridas son muy populares actualmente. Adicionalmente, son compatibles con cualquier plataforma",
          "Somos expertos en ofrecerte toda la información relacionada para el desarrollo de tu aplicación web o aplicaciones de gestión empresarial que te ayudarán a ahorrar tiempo y dinero",
          "Las tecnologías de información toman un papel crucial al permitir la recolección, almacenamiento y procesamiento de datos generados por la operación de la empresa"
        ]
      },
      image: [
        "../img/background/home-hero.jpeg", // 0
        "../img/storage/people-group.png",
        "../img/background/home-services.jpeg",
        "../img/vector/cloud-vector.jpeg",
        "../img/vector/code-vector.jpeg",
        "../img/vector/design-vector.jpeg",
        "../img/vector/dev-vector.jpeg",
        "../img/background/home-contact.jpeg",
        "../img/vector/mobile-app.png",
        "../img/vector/web-design.png",
        "../img/storage/hosting-v2.jpg", // 10
        "../img/storage/development-v2.jpg", // 11
        "../img/storage/consulting-v2.jpg", // 12
        "../img/storage/opensource-v2.jpg", // 13
        "../img/storage/microsoft-certified-professional.jpg"
      ],
      stacks: [
        "../img/storage/tecnologias/html-css-js.png",
        "../img/storage/tecnologias/php.png",
        "../img/storage/tecnologias/Java.png",
        "../img/storage/tecnologias/C-Sharp.png",
        "../img/storage/tecnologias/Dynamics-CRM.png",
        "../img/storage/tecnologias/microsoft-sql-server.svg",
        "../img/storage/tecnologias/mysql.png",
        "../img/storage/tecnologias/postgresql.png",
        "../img/storage/tecnologias/ibm-db2.png",
        "../img/storage/tecnologias/Power-Bi-logo-transparent.png",
        "../img/storage/tecnologias/microsoft-excel.png",
        "../img/storage/tecnologias/sybase-4-logo-png-transparent.png",
        "../img/storage/tecnologias/informix-logo-png-transparent.png",
        "../img/storage/tecnologias/as400.png"
      ],
      i: 0,
      j: 0
    };
  },

  methods: {
    getImgUrl(index) {
      return this.image[index];
    },
    changeHero(i) {
      if (i === 0) {
        this.i = 10;
        this.j = 1;
        return;
      } else if (i === 13) {
        this.i = 0;
        this.j = 0;
        return;
      }

      this.i++;
      this.j++;
    }
  },

  beforeCreate() {
    document.title = "Tecnomajestic | " + this.title;
  },

  mounted() {
    setInterval(() => this.changeHero(this.i), 5000);
  }
};
</script>

<style>
html {
  scroll-behavior: smooth;
}

.step {
  position: relative;
  bottom: 56px;
}

.is-relative {
  position: relative;
}

.bg-cover {
  background-size: cover;
  background-repeat: no-repeat;
  background-position-y: center;
  background-position-x: left;
}

.layer {
  background-color: rgba(31, 31, 31, 0.603);
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.grey-layer {
  background-color: rgba(107, 107, 107, 0.7);
}

.donwArrow-icon {
  position: absolute;
  bottom: 10px;
  left: 50%;
  margin-left: -23px;
}

.point {
  width: 12px;
  height: 12px;
  border: 2px solid white;
  background-color: transparent;
  border-radius: 50%;
  cursor: pointer;
  transition: 0.2s;
}

.point:hover {
  background-color: white;
}

.point--active {
  background-color: white;
}

.fa-chevron-down {
  color: gray;
}

.fa-chevron-down:hover {
  animation: boing 500ms ease-in-out;
}

@keyframes boing {
  15%,
  40%,
  75%,
  100% {
    transform-origin: center center;
  }
  15% {
    transform: scale(1.2, 1.1);
  }
  40% {
    transform: scale(0.95, 0.95);
  }
  75% {
    transform: scale(1.05, 1);
  }
  100% {
    transform: scale(1, 1);
  }
}

.is-dark-blue {
  background-color: #54abde;
}

.is-blue {
  background-color: #72b8e8;
}

.for-blue {
  color: #f2faffdb;
}

.for-blue-title {
  color: #e7f5ffdb;
}

.for-blue-subtitle {
  color: #e7f5ffdb;
}

.is-green {
  background-color: #a2c94a;
}

.for-green-title {
  color: #f6ffe2;
  /* color: #778c48; */
}

.for-green-subtitle {
  color: #ecf3db;
  /* color: #7c9050; */
}

.is-orange {
  background-color: #cb601adb;
}

.for-orange-title {
  color: #ffedda;
}

.for-orange-subtitle {
  color: #ffe5c8;
}

.is-purple {
  background-color: #7954f7;
}

.for-purple {
  color: #4a406d;
}

.is-white {
  background-color: #ffffff;
}

.for-white {
  color: #3d3d3d;
}

.for-dark-title {
  color: #e8e8e8;
}

.for-dark-subtitle {
  color: #e9e9e9;
}
/* 
.mt-1 {
  margin-top: 0.1rem;
} */

.mt-2 {
  margin-top: 1.5rem;
}

.mt-3 {
  margin-top: 3rem;
}

.mr-1 {
  margin-right: 1.2rem;
}

.box {
  background-color: #f7f7f7;
}

.row {
  width: 160px;
  display: flex;
  justify-content: space-around;
  position: absolute;
  bottom: 100px;
  left: 50%;
  margin-left: -80px;
}
</style>
