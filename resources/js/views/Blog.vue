<template>

    <div id="blog">
        <section id="hero" class="hero is-fullheight"
        :style="{ backgroundImage: 'url(' + image + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title is-2 mb-2">¡Zona en Construcción!</h1>
                    <h2 class="subtitle is-3">
                        Actualmente tenemos nuestro Blog<strong> bajo Construcción </strong> para brindarte un mejor servicio y la mejor información tecnológica.
                    </h2>
                    <h2 class="subtitle is-3">
                        Revisa nuestros  <a href="#/servicios">servicios</a> o <a href="#/Contacto">contáctanos</a> para mayor información.
                    </h2>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {

        data() {
            return {

                title: "Blog",

                image: "../img/background/construction.jpeg"

            }
        },

        beforeMount() {

            document.title = "Tecnomajestic | " + this.title;

        }
    }
</script>

<style lang="scss" scoped>

    .hero {

        background-size: cover;
        background-repeat: no-repeat;
        background-position: left;
        position: relative;

    }

    .layer {
        background-color: rgba(248, 247, 216, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .mb-2 {
        margin-bottom: 1.5rem;
    }

</style>
