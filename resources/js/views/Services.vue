<template>
    <div class="services">
        <section id="hero" class="hero is-medium"
            :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Servicios</h1>
                    <h2 class="subtitle for-dark-subtitle is-3">
                        Los principales servicios que ofrecemos para tu empresa son los siguientes
                    </h2>
                </div>
            </div>
        </section>

        <section class="section is-medium">
            <div id="vueapp" >
                <div class="container">
                    <nav class="bd-tabs">
                        <div class="tabs is-centered">
                            <ul>
                                <li v-bind:class="{ 'is-active': tabsel == 'service1' }" @click="tabsel ='service1'" >
                                    <a>
                                        Implementación y Hosting
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service2' }" @click="tabsel ='service2'" >
                                    <a>
                                    Desarrollo de Apps Web
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service3' }" @click="tabsel ='service3'" >
                                    <a>
                                    Consultorías Tecnológicas
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service4' }" @click="tabsel ='service4'" >
                                    <a>
                                    Plataformas de código abierto
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="bd-content">
                        <div v-show="tabsel == 'service1'">
                            <div class="columns section">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(1)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Implementación y Hosting</h1>
                                    <p class="is-size-5">Ofrecemos algunos beneficios claves para los Sistemas de Información empresariales: Ahorro de costes, rapidez de implementación y escalabilidad.</p>
                                    <p class="is-size-5 mt-1">Nos basamos en nuevos modelos de negocios que ofrecen servicios con muchas características atractivas para la mayoría de las empresas.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service2'">
                            <div class="columns section">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(2)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Desarrollo de Aplicaciones Web</h1>
                                    <p class="is-size-5">Las aplicaciones web son muy populares actualmente y compatibles con cualquier sistema operativo. Su bajo o nulo mantenimiento las convierten en una muy buena opción para usuarios finales.</p>
                                    <p class="is-size-5 mt-1">Si piensa en desarrollar alguna webapp nuestro equipo se centra tanto en la UI como en la UX y puede trabajar en el diseño, desarrollo e implementación y mantenimiento.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service3'">
                            <div class="columns section">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(3)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Consultorías Tecnológicas</h1>
                                    <p class="is-size-5">Somos expertos en ofrecerte toda la información relacionada para el desarrollo de tu aplicación web o aplicaciones de gestión empresarial que te ayudarán a ahorrar tiempo y dinero.</p>
                                    <p class="is-size-5 mt-1">Ayudamos a mejorar tu impacto online. Vende más gracias a la implementación del e-commerce y soluciones que se integran a la perfección con tu modelo de negocios.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service4'">
                            <div class="columns section">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(4)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Plataformas de código abierto</h1>
                                    <p class="is-size-5">En el entorno de negocios mundial, las empresas emergentes más exitosas no utilizan software propietario sino abierto, dándoles una mayor oportunidad de innovar y madurar.</p>
                                    <p class="is-size-5 mt-1">Impulsamos tu competitividad ayudándote a reaccionar a los cambios del mercado. Satisfacemos todas tus necesidades que permitan integrar el código abierto en tus proyectos.</p>
                                </div>
                            </div>
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

                title: "Servicios",

                image:[
                    "../img/background/homes-service-2.jpg",
                    "../img/storage/hosting-v2.jpg",
                    "../img/storage/development-v2.jpg",
                    "../img/storage/consulting-v2.jpg",
                    "../img/storage/opensource-v2.jpg",
                ],
                tabsel:"service1"

            }
        },
        methods: {

            getImgUrl(index) {

                return this.image[index];
            }

        },

        beforeMount() {

            document.title = "Tecnomajestic | " + this.title;
            el: '#vueapp'

        }
    }

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
