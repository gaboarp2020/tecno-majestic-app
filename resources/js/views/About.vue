<template>
    <div id="nosotros" >
        <section id="hero" class="hero is-fullheight" 
            :style="{ backgroundImage: 'url(' + image[0] + ')' }">
                <div class="hero-body layer">
                    <div class="container">
                        <h1 class="title is-1">Nosotros</h1>
                        <h2 class="subtitle is-3">
                            Ofrecemos los mejores servicios a nivel tecnologico y soluciones para tu empresa 
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
                <div class="columns">
                    <div class="column">
                        <h1 class="title for-white level-item has-text-centered">Descripcion de la Empresa</h1>
                        <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut. </p>
                    </div>
                </div>
                <div class="columns mt-1 is-centered is-vcentered">
                    <div class="column">
                        <h1 class="title for-white">Misión</h1>
                        <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                        <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                    </div>
                    <div class="column has-text-centered">
                        <!--<img :src="getImgUrl(1)" alt="Grupo de personas" height="320" width="320">-->
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <img src="C:\Users\Chirino\Desktop\tecno-majestic-app\public\img\storage\people-work.jpeg" alt="" srcset="">
                    </div>
                    <div class="column">
                        <h1 class="title for-white">Visión</h1>
                        <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                        <p class="is-size-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, enim dignissimos facere inventore consectetur eum, saepe sit quae ratione excepturi est sint vero omnis nulla ut.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero is-medium has-text-centered is-bold bg-cover is-success" 
            :style="{ backgroundImage: 'url(' + image + ')' }">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title for-dark-title is-2">Valores</h1>
                    <h2 class="subtitle for-dark-subtitle is-4">
                        A simple container to divide your page into sections, like the one you're currently reading
                    </h2>
                </div>
            </div>
        </section>

        <section class="section is-medium">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div>
                            <img src="C:\Users\Chirino\Desktop\tecno-majestic-app\public\img\vector\alarm-clock.png" alt=""  height="140" width="140">
                        </div>
                        <div>
                            <h1 class="title for-white">Responsabilidad</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div>
                            <img src="C:\Users\Chirino\Desktop\tecno-majestic-app\public\img\vector\star.png" alt="" height="140" width="140">
                        </div>
                        <div>
                            <h1 class="title for-white">Excelencia</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
                        </div>
                    </div>
                </div>
                <div class="columns">
                        <div class="column">
                        <div>
                            <img src="C:\Users\Chirino\Desktop\tecno-majestic-app\public\img\vector\chat.png" alt=""  height="140" width="140">
                        </div>
                        <div>
                            <h1 class="title for-white">Comunicacion</h1>
                            <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quos reiciendis.</p>
                        </div>
                        </div>
                    <div class="column">
                        <div>
                            <img src="C:\Users\Chirino\Desktop\tecno-majestic-app\public\img\vector\winners-ribbon.png" alt="" height="140" width="140">
                        </div>
                        <div>
                            <h1 class="title for-white">Competitividad </h1>
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

    }


</style>
