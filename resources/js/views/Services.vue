<template>
<div class="servicios">
    <section id="hero" class="hero is-fullheight" 
        :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title is-1">Servicios</h1>
                    <h2 class="subtitle is-3">
                        Los principales productos que ofrecemos para tu empresa
                    </h2>
                </div>
                <span class="icon is-large donwArrow-icon">
                    <a href="#section-2">
                        <i class="fa fa-2x fa-chevron-down"></i>
                    </a>
                </span>
            </div>
    </section>

    <section class="section is-medium">
        <div class="container">
            <nav class="bd-tabs">
                <div class="tabs">
                    <ul>
                        <li class="is-active">
                            <a href="#">
                            Servicio 1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            Servicio 2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            Servicio 3
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="bd-content">
                <div class="columns">
                    <div class="column mt-1">
                        <img :src="getImgUrl(1)" alt="service" srcset="" >
                    </div>
                    <div class="column">
                        <h1 class="title for-white mt-1">Service</h1>
                        <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                        <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
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
                    "../img/storage/service.jpg",
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

<style lang="scss" scoped>

    .hero {

        background-size: cover;
        background-repeat: no-repeat;
        background-position: left;
        position: relative;

    }


</style>
