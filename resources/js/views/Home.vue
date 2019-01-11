<template>

    <div id="inicio">
        <section id="hero" class="hero is-relative bg-cover is-fullheight is-bold" 
        :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title for-dark-title is-1">Section</h1>
                    <h2 class="subtitle for-dark-subtitle is-3">
                        A simple container to divide your page into sections, like the one you're currently reading
                    </h2>
                </div>
                <span class="icon is-large donwArrow-icon">
                    <a href="#home">
                        <i class="fa for-dark-subtitle fa-2x fa-chevron-down"></i>
                    </a>
                </span>
            </div>
        </section>

        <div id="home"></div>

        <section class="hero is-orange is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title for-orange-title is-2">Nuestra Historia</h1>
                    <h2 class="subtitle for-orange-subtitle is-4">
                        A simple container to divide your page into sections, like the one you're currently reading
                    </h2>
                </div>
            </div>
        </section>

        <section class="section is-medium">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="title for-white">Subtitulo de la seccion</h1>
                        <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut. </p>
                    </div>
                </div>
                <div class="columns mt-1 is-centered is-vcentered">
                    <div class="column">
                        <h1 class="title for-white">Otro subtitulo de la seccion</h1>
                        <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                        <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
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
                        A simple container to divide your page into sections, like the one you're currently reading
                    </h2>
                </div>
            </div>
        </section>

        <section class="section is-medium">
            <div class="container has-text-centered">
                <div class="">
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <div class="section">
                                    <img :src="getImgUrl(3)" alt="Servicio Icono" height="140" width="140">
                                </div>
                                <h1 class="title for-white">Servicio</h1>
                                <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
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
                                <h1 class="title for-white">Servicio</h1>
                                <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
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
                                <h1 class="title for-white">Servicio</h1>
                                <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
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
                                <h1 class="title for-white">Servicio</h1>
                                <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
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
                    <h1 class="title for-dark-title is-2">Contactanos</h1>
                    <h2 class="subtitle for-dark-subtitle is-4">
                        A simple container to divide your page into sections, like the one you're currently reading
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

    #home {
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
        position: absolute;
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
        margin-left: -16px;
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
        color: #59829e;
    }

    .is-green {

        background-color: #A2C94A;

    }

    .for-green-title {
        color: #def1b3;
        /* color: #778c48; */
    }

    .for-green-subtitle {
        color: #d1e2a9;
        /* color: #7c9050; */
    }

    .is-orange {

        background-color: #cb601adb;

    }

    .for-orange-title {
        color: #f1d0ae;
    }

    .for-orange-subtitle {
        color: #e4c8aa;
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
        color: #d3d3d3;
    }

    .mt-1 {
        margin-top: 1.5rem;
    }

</style>
