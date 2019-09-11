<template>
    <div class="services">
        <section id="hero" class="hero is-medium"
            :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Servicios</h1>
                    <h2 class="subtitle for-dark-subtitle is-3">
                        Los principales servicios que ofrecemos para tu empresa
                    </h2>
                </div>
            </div>
        </section>

        <section class="section">
            <div id="vueapp" >
                <div class="container white-box">
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
                                    Desarrollo de Aplicaciones
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service3' }" @click="tabsel ='service3'" >
                                    <a>
                                    Consultoría Tecnológica
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service4' }" @click="tabsel ='service4'" >
                                    <a>
                                    Inteligencia de Negocios
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="bd-content">
                        <div v-show="tabsel == 'service1'">
                            <div class="columns section is-vcentered">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(1)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Implementación y Hosting</h1>
                                    <p class="is-size-5 has-text-grey-darker  has-text-justified">Ofrecemos algunos beneficios claves para los Sistemas de Información empresariales: Ahorro de costes, rapidez de implementación y escalabilidad.</p>
                                    <p class="is-size-5 has-text-grey-darker  mt-1 has-text-justified">Nos basamos en nuevos modelos de negocios que ofrecen servicios con muchas características atractivas para la mayoría de las empresas.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service2'">
                            <div class="columns section is-vcentered">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(2)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Desarrollo de Aplicaciones</h1>
                                    <p class="is-size-5 has-text-grey-darker  has-text-justified">Las aplicaciones web y móviles o híbridas son muy populares actualmente. Adicionalmente, son compatibles con cualquier plataforma.</p>
                                    <p class="is-size-5 has-text-grey-darker  mt-1 has-text-justified">Si piensa en desarrollar alguna webapp o aplicación móvil; nuestro equipo se centra tanto en la UI como en la UX y puede trabajar en el diseño, desarrollo e implementación y mantenimiento.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service3'">
                            <div class="columns section is-vcentered">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(3)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Consultoría Tecnológica</h1>
                                    <p class="is-size-5 has-text-grey-darker  has-text-justified">Somos expertos en ofrecerte toda la información relacionada para el desarrollo de tu aplicación web o aplicaciones de gestión empresarial que te ayudarán a ahorrar tiempo y dinero.</p>
                                    <p class="is-size-5 has-text-grey-darker  mt-1 has-text-justified">Ayudamos a mejorar tu impacto online. Vende más gracias a la implementación del e-commerce y soluciones que se integran a la perfección con tu modelo de negocios.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service4'">
                            <div class="columns section is-vcentered">
                                <div class="column has-text-centered mt-1">
                                    <img :src="getImgUrl(4)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Inteligencia de Negocios</h1>
                                    <p class="is-size-5 has-text-grey-darker  has-text-justified">Actualmente las empresas se ven regidas por el ambiente global en el que se desempeñan, el cual es altamente competitivo y exige una constante toma de decisiones estratégicas si se busca permanecer en el mercado de manera exitosa y rentable.</p>
                                    <p class="is-size-5 has-text-grey-darker  mt-1 has-text-justified">Las tecnologías de información toman un papel crucial al permitir la recolección, almacenamiento y procesamiento de datos generados por la operación de la empresa.</p>
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

    .white-box {
        min-height: 580px;
    }


</style>
