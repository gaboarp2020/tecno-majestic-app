<template>
    <div id="contact">
        <section id="hero" class="hero is-medium bg-cover" 
        :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Contáctanos</h1>
                    <h2 class="subtitle for-dark-subtitle is-3">
                        Ofrecemos los mejores servicios a nivel tecnologico y soluciones para tu empresa 
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

                title: "Contacto",

                image: [

                    "../img/background/contact.jpeg"

                    ]

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
        margin-top: 52px;

    }


</style>