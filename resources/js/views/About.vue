<template>
    <div id="about" >
        <section id="hero" class="hero is-medium" 
            :style="{ backgroundImage: 'url(' + image[0] + ')' }">
            <div class="hero-body layer">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Nosotros</h1>
                    <h2 class="subtitle for-dark-subtitle is-3">
                        Ofrecemos los mejores servicios a nivel tecnologico y soluciones para tu empresa 
                    </h2>
                </div>
            </div>
        </section>

        <section class="section is-medium">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="title for-white has-text-centered">Tecnomajestic</h1>
                        <p class="is-size-5 has-text-justified">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolores modi eos voluptatem fugit temporibus nihil! Laboriosam amet in quis saepe, eligendi ratione laborum, accusantium exercitationem cumque itaque, molestias facilis!</p>
                    </div>
                </div>
                
                <div class="section">
                    <div class="columns is-vcentered">
                        <div class="column has-text-centered mt-3">
                            <img :src="getImgUrl(1)" alt="Grupo de personas" height="600" width="400">
                        </div>
                        <div class="column">
                            <h1 class="title for-white">Misión</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                            <p class="is-size-5 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                        </div>
                    </div>
                    <div class="columns is-vcentered">
                        <div class="column">
                            <h1 class="title for-white">Visión</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                            <p class="is-size-5 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                        </div>
                        <div class="column has-text-centered mt-3">
                            <img :src="getImgUrl(2)" alt="Vision" height="600" width="400">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="hero is-medium has-text-centered is-bold bg-cover is-green">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title for-green-title is-2">Valores</h1>
                    <h2 class="subtitle for-green-subtitle is-4">
                        A simple container to divide your page into sections, like the one you're currently reading
                    </h2>
                </div>
            </div>
        </section>

        <section class="section is-medium">
            <div class="container">
                <div class="columns">
                    <div class="column has-text-centered section">
                        <div class="section">
                            <img :src="getImgUrl(3)" alt="Responsabilidad"  height="100" width="100">
                        </div>
                        <div>
                            <h1 class="title for-white is-size-4">Responsabilidad</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
                        </div>
                    </div>
                    <div class="column has-text-centered section">
                        <div class="section">
                            <img :src="getImgUrl(4)"  alt="Excelencia" height="100" width="100">
                        </div>
                        <div>
                            <h1 class="title for-white is-size-4">Excelencia</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
                        </div>
                    </div>
                </div>
                <div class="columns">
                        <div class="column has-text-centered section">
                        <div class="section">
                            <img :src="getImgUrl(5)" alt="Comunicacion"  height="100" width="100">
                        </div>
                        <div>
                            <h1 class="title for-white is-size-4 ">Comunicacion</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
                        </div>
                        </div>
                    <div class="column  has-text-centered section">
                        <div class="section">
                            <img :src="getImgUrl(6)" alt="Competitividad" height="100" width="100">
                        </div>
                        <div>
                            <h1 class="title for-white is-size-4">Competitividad </h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
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

                title: "Nosotros",

                image: [
                    "../img/background/home-about.jpg",
                    "../img/storage/people-work.jpeg",
                    "../img/storage/vision.jpeg",
                    "../img/vector/alarm-clock.png",
                    "../img/vector/star.png",
                    "../img/vector/chat.png",
                    "../img/vector/winners-ribbon.png"
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
        margin-top: 52px;

    }


</style>
