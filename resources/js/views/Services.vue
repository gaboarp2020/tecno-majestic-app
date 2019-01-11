<template>
    <section id="hero" class="hero is-fullheight" 
        :style="{ backgroundImage: 'url(' + image + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title is-1">Servicios</h1>
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
</template>

<script>
    export default {

        data() {
            return {

                title: "Servicios",

                image: ""

            }
        },

        beforeMount() {
            
            document.title = "Tecnomajestic | " + this.title;

        }
    }
</script>