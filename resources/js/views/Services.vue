<template>
    <div class="services">
        <section id="hero" class="hero is-medium" 
            :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Servicios</h1>
                    <h2 class="subtitle for-dark-subtitle is-3">
                        Los principales productos que ofrecemos para tu empresa
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
                                        Servicio 1
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service2' }" @click="tabsel ='service2'" >
                                    <a>
                                    Servicio 2
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service3' }" @click="tabsel ='service3'" >
                                    <a>
                                    Servicio 3
                                    </a>
                                </li>
                                <li v-bind:class="{ 'is-active': tabsel == 'service4' }" @click="tabsel ='service4'" >
                                    <a>
                                    Servicio 4
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="bd-content">
                        <div v-show="tabsel == 'service1'">
                            <div class="columns section">
                                <div class="column mt-1">
                                    <img :src="getImgUrl(1)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Service 1</h1>
                                    <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                                    <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service2'">
                            <div class="columns section">
                                <div class="column mt-1">
                                    <img :src="getImgUrl(1)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Service 2</h1>
                                    <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                                    <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service3'">
                            <div class="columns section">
                                <div class="column mt-1">
                                    <img :src="getImgUrl(1)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Service 3</h1>
                                    <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                                    <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                                </div>
                            </div>
                        </div>
                        <div v-show="tabsel == 'service4'">
                            <div class="columns section">
                                <div class="column mt-1">
                                    <img :src="getImgUrl(1)" alt="service" srcset="" >
                                </div>
                                <div class="column">
                                    <h1 class="title for-white mt-1">Service 4</h1>
                                    <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                                    <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
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
                    "../img/storage/service.jpg",
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
