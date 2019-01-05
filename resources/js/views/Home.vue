<template>

    <div id="home">
        <section id="hero" class="hero is-fullheight is-bold" 
        :style="{ backgroundImage: 'url(' + image + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title is-1">Section</h1>
                    <h2 class="subtitle is-3">
                        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
                    </h2>
                </div>
                <span class="icon is-large donwArrow-icon">
                    <a href="#section-2">
                        <i class="fa fa-2x fa-chevron-down"></i>
                    </a>
                </span>
            </div>
        </section>

        <section id="section-2" class="hero is-primary is-medium is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-2">Section</h1>
                    <h2 class="subtitle is-4">
                        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
                    </h2>
                </div>
            </div>
        </section>

        <section id="section-3" class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">Section</h1>
                    <h2 class="subtitle">
                        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
                    </h2>
                </div>
            </div>
        </section>

        <section id="section-4" class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">Section</h1>
                    <h2 class="subtitle">
                        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
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

                image: "../img/home-hero.jpeg"

            }
        },

        mounted() {
            
            //

        }
    }
</script>

<style>

    html {
        scroll-behavior: smooth;
    }

    .hero {

        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom;
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

    .donwArrow-icon {
        position: absolute;
        bottom: 10px;
        left: 47%;
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

    #section-2 {

        background-color: #72B8E8;

    }

    #section-3 {

        background-color: #A2C94A;

    }

    #section-4 {

        background-color: #C97024;

    }

</style>
