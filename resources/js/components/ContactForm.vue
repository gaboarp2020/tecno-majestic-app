

<template>
  <div class="box-form">
    <h1 class="title for-white">Formulario de contacto</h1>

    <form action="/contactMessages" method="POST" @submit.prevent="onSubmit">
      <input type="hidden" name="_token" :value="csrf">

      <h2 class="subtitle for-white">Información Personal</h2>

      <div class="field mb-1">
        <div class="control">
          <label for="name" class="label">Nombre</label>
          <input
            type="text"
            id="name"
            name="name"
            :class="[{'is-danger': $v.name.$error }, 'is-hovered', 'input']"
            v-model="name"
            @blur="$v.name.$touch()"
          >
          <div v-if="$v.name.$error">
            <span class="help is-danger" v-if="!$v.name.required">Debes colocar tu nombre</span>
          </div>
        </div>
      </div>

      <div class="field mb-1">
        <div class="control">
          <label for="last_name" class="label">Apellidos</label>
          <input
            type="text"
            id="last_name"
            name="last_name"
            :class="[{'is-danger': $v.last_name.$error }, 'is-hovered', 'input']"
            v-model="last_name"
            @blur="$v.last_name.$touch()"
          >
          <div v-if="$v.last_name.$error">
            <span class="help is-danger" v-if="!$v.last_name.required">Debes colocar tu apellido</span>
          </div>
        </div>
      </div>

      <div class="field mb-1">
        <div class="control">
          <label for="country" class="label">
            País -
            <span class="opcional-label">opcional</span>
          </label>
          <input
            type="text"
            id="country"
            name="country"
            :class="['is-hovered', 'input']"
            v-model="country"
          >
        </div>
      </div>

      <h2 class="subtitle for-white">Información de la Empresa</h2>

      <div class="field mb-1">
        <div class="control">
          <label for="company" class="label">
            Empresa -
            <span class="opcional-label">opcional</span>
          </label>
          <input
            type="text"
            id="company"
            name="company"
            :class="['is-hovered', 'input']"
            v-model="company"
          >
        </div>
      </div>

      <div class="field mb-1">
        <div class="control">
          <label for="business_sector" class="label">
            Rubro -
            <span class="opcional-label">opcional</span>
          </label>
          <input
            type="text"
            id="business_sector"
            name="business_sector"
            :class="['is-hovered', 'input']"
            v-model="business_sector"
          >
        </div>
      </div>

      <h2 class="subtitle for-white">Información del Correo</h2>

      <div class="field mb-1">
        <div class="control">
          <label for="email" class="label">Correo Electrónico</label>
          <input
            type="text"
            id="email"
            name="email"
            :class="[{'is-danger': $v.email.$error }, 'is-hovered', 'input']"
            v-model="email"
            @blur="$v.email.$touch()"
          >
          <div v-if="$v.email.$error">
            <span class="help is-danger" v-if="!$v.email.email">Debes colocar un email válido</span>
          </div>
          <div v-if="$v.email.$error">
            <span class="help is-danger" v-if="!$v.email.required">Debes colocar tu email</span>
          </div>
        </div>
      </div>

      <div class="field mb-1">
        <div class="control">
          <label for="subject" class="label">Asunto</label>
          <input
            type="text"
            id="subject"
            name="subject"
            :class="[{'is-danger': $v.subject.$error }, 'is-hovered', 'input']"
            v-model="subject"
            @blur="$v.subject.$touch()"
          >
          <div v-if="$v.subject.$error">
            <span class="help is-danger" v-if="!$v.subject.required">Debes colocar un asunto</span>
          </div>
        </div>
      </div>

      <div class="field mb-1">
        <div class="control">
          <label for="content" class="label">Mensaje</label>
          <textarea
            type="text"
            id="content"
            name="content"
            :class="[{'is-danger': $v.content.$error }, 'is-hovered', 'textarea']"
            v-model="content"
            @blur="$v.content.$touch()"
          ></textarea>
          <div v-if="$v.content.$error">
            <span class="help is-danger" v-if="!$v.content.required">¡Te faltó colocar un mensaje!</span>
          </div>
        </div>
      </div>

      <div class="field is-medium">
        <div class="control has-text-centered">
          <button class="button is-primary is-medium is-outlined" :disabled="$v.$invalid">Contactar</button>
        </div>
      </div>
    </form>

    <div
      :class="['notification', {'is-success': isSuccess}, {'is-danger': isDanger}, {'is-invisible': hasMessage}]"
    >
      <button @click="hiddenNotification" class="delete"></button>
      <p :class="{'for-green-title': isSuccess}" v-text="notification"></p>
    </div>
  </div>
</template>

<script>
import { required, email } from "vuelidate/lib/validators";

export default {
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),

      name: null,

      last_name: null,

      country: null,

      company: null,

      business_sector: null,

      email: null,

      subject: null,

      content: null,

      notification: null,

      hasMessage: true,

      isSuccess: false,

      isDanger: false
    };
  },

  validations: {
    name: {
      required
    },

    last_name: {
      required
    },

    email: {
      required,
      email
    },

    subject: {
      required
    },

    content: {
      required
    }
  },

  methods: {
    onSubmit() {
      this.$v.$touch();
      if (!this.$v.$invalid) {
        axios
          .post("/api/contact", {
            name: this.name,

            last_name: this.last_name,

            country: this.country,

            company: this.company,

            business_sector: this.business_sector,

            email: this.email,

            subject: this.subject,

            content: this.content
          })
          .then(response => {
            this.isDanger = false;
            this.isSuccess = true;
            this.notification = "¡Mensaje enviado! Gracias por contactarnos";
            this.hasMessage = false;
          })
          .catch(error => {
            console.log(error);

            this.isSuccess = true;
            this.isDanger = true;
            this.notification = "Húbo un problema al enviar la información.";
            this.hasMessage = false;
          });
      }
    },

    hiddenNotification() {
      this.hasMessage = true;
    }
  }
};
</script>

<style lang="scss">
.box-form {
  margin: auto;
  max-width: 768px;
  padding: 2rem;
  display: block;
}

.field:not(:last-child) {
  margin-bottom: 20px;
}

.label:not(:last-child) {
  margin-bottom: 4px;
}

.opcional-label {
  color: gray;
  font-style: italic;
}

.label {
  color: #616161;
  font-weight: 500;
}

.notification {
  position: fixed;
  width: 40%;
  min-width: 280px;
  bottom: 5%;
  right: 5%;
  z-index: 100;
}
</style>