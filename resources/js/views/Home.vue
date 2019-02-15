<template>

    <div id="inicio">
        <section id="hero" class="hero is-relative bg-cover is-fullheight is-bold"
        :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Innovando las Consultorías Tecnológicas</h1>
                    <h2 class="subtitle for-dark-subtitle is-3">
                        Consultorías y desarrollo web. Implementación en tiempo récord.
                    </h2>
                </div>
                <span class="icon is-large donwArrow-icon">
                    <a href="#home">
                        <i class="fa for-dark-subtitle fa-2x fa-chevron-down"></i>
                    </a>
                </span>
            </div>
        </section>

        <div id="home" class="step"></div>

        <section class="hero is-orange is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title for-orange-title is-2">Nuestra Historia</h1>
                    <h2 class="subtitle for-orange-subtitle is-4">
                        Somos una Joven empresa orientados a ofrecer servicios tecnológicos que incluyen soluciones integrales para nuestros clientes, asegurando la operatividad de sus negocios con tecnología de punta.
                    </h2>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="title for-white has-text-centered">Nuestro Equipo de Trabajo</h1>
                        <p class="is-size-5 has-text-justified">Conformamos un equipo de trabajo jóven, guiado por expertos. Interesados en el dominio de las nuevas tendencias en el área de desarrollo y con las mejores ideas innovadoras. Fomentamos el talento, actuamos éticamente y cumplimos con nuestros compromisos,  estamos orgullosos de nuestra misión</p>
                    </div>
                </div>
                <div class="columns mt-3 is-centered is-vcentered">
                    <div class="column">
                        <h1 class="title for-white">Soluciones Modernas</h1>
                        <p class="is-size-5 has-text-justified">Desarrollamos soluciones prácticas para cualquier tipo de ambientes y aplicaciones web especializadas, diseñadas para asegurar un funcionamiento óptimo y una utilidad máxima, brindando confianza, seguridad y disponibilidad 24/7.</p>
                        <p class="is-size-5 mt-2 has-text-justified">Tenemos la convicción de ser la mejor opción para consultorías en el área tecnológica y el desarrollo de soluciones en sistemas de información sofisticados adecuados a sus necesidades, seguros y confiables.</p>
                    </div>
                    <div class="column has-text-centered">
                        <img :src="getImgUrl(1)" alt="Grupo de personas" height="320" width="320">
                    </div>
                </div>
            </div>
        </section>

        <section class="hero is-medium has-text-centered is-bold bg-cover"
            :style="{ backgroundImage: 'url(' + image[2] + ')' }">
            <div class="hero-body grey-layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Servicios que ofrecemos</h1>
                    <h2 class="subtitle for-dark-subtitle is-4">
                        Integramos la implementación de Sistemas de Información bajo diversas tecnologías orientadas web, diseñando e implementando tanto en la nube como en infraestructura privada.
                    </h2>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container has-text-centered">
                <div class="">
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <div class="section">
                                    <img :src="getImgUrl(3)" alt="Servicio Icono" height="140" width="140">
                                </div>
                                <h1 class="title for-white">Implementación y Hosting</h1>
                                <p class="is-size-5">Especializados en plataformas de hosting remotas o privadas del cliente.</p>
                                <div class="section">
                                    <a href="/#/servicios" class="has-text-weight-semibold is-size-5">Más información</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="box">
                                <div class="section">
                                    <img :src="getImgUrl(4)" alt="Servicio Icono" height="140" width="140">
                                </div>
                                <h1 class="title for-white">Desarrollo de Apps Web</h1>
                                <p class="is-size-5">Plataformas web, con las tecnologías más innovadoras y modernas.</p>
                                <div class="section">
                                    <a href="/#/servicios" class="has-text-weight-semibold is-size-5">Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <div class="section">
                                    <img :src="getImgUrl(5)" alt="Servicio Icono" height="140" width="140">
                                </div>
                                <h1 class="title for-white">Consultorías Tecnológicas</h1>
                                <p class="is-size-5">Grupo especializado en ofrecerte la mejor solución para tus necesidades</p>
                                <div class="section">
                                    <a href="/#/servicios" class="has-text-weight-semibold is-size-5">Más información</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="box">
                                <div class="section">
                                    <img :src="getImgUrl(6)" alt="Servicio Icono" height="140" width="140">
                                </div>
                                <h1 class="title for-white">Open Source</h1>
                                <p class="is-size-5">ERP, CMS, e-commerce y CMS. Data Warehouse e Inteligencia de Negocios.</p>
                                <div class="section">
                                    <a href="/#/servicios" class="has-text-weight-semibold is-size-5">Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <div class="section">
                                    <img :src="getImgUrl(8)" alt="Servicio Icono" height="140" width="140">
                                </div>
                                <h1 class="title for-white">Implementación y Hosting</h1>
                                <p class="is-size-5">Especializados en plataformas de hosting remotas o privadas del cliente.</p>
                                <div class="section">
                                    <a href="/#/servicios" class="has-text-weight-semibold is-size-5">Más información</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="box">
                                <div class="section">
                                    <img :src="getImgUrl(9)" alt="Servicio Icono" height="140" width="140">
                                </div>
                                <h1 class="title for-white">Desarrollo de Apps Web</h1>
                                <p class="is-size-5">Plataformas web, con las tecnologías más innovadoras y modernas.</p>
                                <div class="section">
                                    <a href="/#/servicios" class="has-text-weight-semibold is-size-5">Más información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero is-medium has-text-centered is-bold bg-cover"
            :style="{ backgroundImage: 'url(' + image[7] + ')' }">
            <div class="hero-body grey-layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Contáctanos</h1>
                    <h2 class="subtitle for-dark-subtitle is-4">
                        ¿Tienes alguna duda? ¡Comunícate con nosotros!
                    </h2>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="">
                    <contact-form></contact-form>
                </div>
            </div>
        </section>

    </div>

</template>

<script>

    import ContactForm from '../components/ContactForm.vue';

    export default {

        components: { ContactForm },

        data() {
            return {

                title: "Inicio",

                image: [

                    "../img/background/home-hero.jpeg",
                    "../img/storage/people-group.png",
                    "../img/background/home-services.jpeg",
                    "../img/vector/cloud-vector.jpeg",
                    "../img/vector/code-vector.jpeg",
                    "../img/vector/design-vector.jpeg",
                    "../img/vector/dev-vector.jpeg",
                    "../img/background/home-contact.jpeg",
                    "../img/vector/mobile-app.png",
                    "../img/vector/web-design.png",

                ]

            }
        },

        methods: {

            getImgUrl(index) {

                return this.image[index];
            }

        },

        beforeMount() {

            document.title = "Tecnomajestic | " + this.title;

        }
    }
</script>

<style>

    html {
        scroll-behavior: smooth;
    }

    .step {
        position: relative;
        bottom: 52px;
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
        background-color: rgba(74, 74, 74, 0.5);
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
        margin-left: -21px;
    }

    .fa-chevron-down {

        color: gray;

    }

    .fa-chevron-down:hover {

        animation: boing 500ms ease-in-out;

    }

    @keyframes boing {
        15%, 40%, 75%, 100% {
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

    .is-blue {

        background-color: #72B8E8;

    }

    .for-blue {
        color: #cce7f9;
    }

    .is-green {

        background-color: #A2C94A;

    }

    .for-green-title {
        color: #edffc4;
        /* color: #778c48; */
    }

    .for-green-subtitle {
        color: #e8f3ce;
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

    .is-purple{

        background-color: #7954F7;

    }

    .for-purple {
        color: #4a406d;
    }

    .for-white {
        color: #616161;
    }

    .for-dark-title {
        color: #e8e8e8;
    }

    .for-dark-subtitle {
        color: #dfdfdf;
    }

    .mt-1 {
        margin-top: 1rem;
    }

    .mt-2 {
        margin-top: 1.5rem;
    }

    .mt-3 {
        margin-top: 3rem;
    }

    .box {
        background-color: #f7f7f7;
    }

</style>
