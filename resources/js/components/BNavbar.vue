<template>
    <nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="img/logo.png" width="118" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="menu"
                @click="showNav = !showNav"
                :class="{ 'is-active': showNav }"
            >
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="menu" class="navbar-menu"
            :class="{ 'is-active': showNav }"
        >
            <div class="navbar-end has-text-weight-semibold">
                <router-link to="/" exact class="navbar-item">Inicio</router-link>
                <router-link to="/nosotros" class="navbar-item">Nosotros</router-link>
                <router-link to="/servicios" class="navbar-item">Servicios</router-link>
                <router-link to="/contacto" class="navbar-item">Contacto</router-link>
                <div class="navbar-item">
                    <router-link to="/blog" class="button is-link is-outlined">Blog</router-link>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>

    export default {

        data() {
            return {
                showNav: false
            }
        }

    }

</script>

<style <style lang="scss">

    .navbar {

        box-shadow: 0 8px 16px rgba(10, 10, 10, 0.1);

    }

    a.navbar-item.is-active, .navbar-link.is-active {

        color: #72B8E8;

    }

    .is-link.is-outlined {
        margin: auto;
    }

    .navbar-menu {

        text-align: center;

    }

</style>

