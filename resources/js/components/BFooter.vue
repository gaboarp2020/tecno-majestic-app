<template>
  <footer class="footer is-blue">
    <div class="container">
      <div class="content has-text-centered">
        <div class="columns is-mobile is-multiline is-centered">
          <div class="column is-one-quarter-desktop is-half-mobile has-text-left">
            <p class="for-blue is-size-5 has-text-weight-bold">Mapa del Sitio</p>
            <p>
              <router-link to="/nosotros">
                <strong class="for-blue is-size-6">Nosotros</strong>
              </router-link>
            </p>
            <p>
              <router-link to="/servicios">
                <strong class="for-blue is-size-6">Servicios</strong>
              </router-link>
            </p>
            <p>
              <router-link to="/contacto">
                <strong class="for-blue is-size-6">Contacto</strong>
              </router-link>
            </p>
            <p>
              <a href="https://blog.tecnomajestic.com" target="_blank">
                <strong class="for-blue is-size-6">Blog</strong>
              </a>
            </p>
          </div>
          <div class="column is-one-quarter-desktop is-half-mobile has-text-left">
            <p class="for-blue is-size-5 has-text-weight-bold">Síguenos</p>
            <p>
              <a
                href="https://www.facebook.com/Consultora-Tecnol%C3%B3gica-Tecnomajestic-627964787660066/"
                target="_blank"
              >
                <span class="icon">
                  <i class="fa for-blue fa-facebook-f"></i>
                </span>
                <strong class="for-blue is-size-6">Facebook</strong>
              </a>
            </p>
            <p>
              <a href="https://twitter.com/tecnomajestic" target="_blank">
                <span class="icon">
                  <i class="fa for-blue fa-twitter"></i>
                </span>
                <strong class="for-blue is-size-6">Twitter</strong>
              </a>
            </p>
            <p>
              <a href="https://www.instagram.com/consultora_tecnomaj/?hl=es-la" target="_blank">
                <span class="icon">
                  <i class="fa for-blue fa-instagram"></i>
                </span>
                <strong class="for-blue is-size-6">Instagram</strong>
              </a>
            </p>
            <p>
              <a
                href="https://www.linkedin.com/in/consultora-tecnomajestic-c-a-456608180/"
                target="_blank"
              >
                <span class="icon">
                  <i class="fa for-blue fa-linkedin"></i>
                </span>
                <strong class="for-blue is-size-6">LinkedIn</strong>
              </a>
            </p>
          </div>
          <div class="column is-full-mobile is-half-desktop has-text-left">
            <p class="for-blue is-size-5 has-text-weight-bold">Contáctanos</p>
            <div class>
              <p class="for-blue is-size-6">
                Dirección: Av. Francisco Solano con calle Los Mangos Torre Charan Piso 3 Oficina 3-3
                Sabana Grande Municipio Libertador
                Caracas, Municipio Libertador, 1010
                Venezuela
              </p>
              <p class="for-blue is-size-6">Correo: info@tecnomajestic.com</p>
              <p class="for-blue is-size-6">Teléfono: +507 6616-5455</p>
            </div>
          </div>
        </div>

        <div class="has-text-centered is-size-6 for-blue mt-3">
          <p>Consultorías Tecnológicas por TecnoMajestic, C.A. J-412132105 | Caracas, Venezuela | By Koodev Developers</p>
          <p>&copy; 2019 Todos los derechos reservados</p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  //
};
</script>

<style>
.footer {
  padding: 3rem 1.5rem;
}

.columns {
  margin: auto;
}
</style>

