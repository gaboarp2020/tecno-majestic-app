

<template>

    <div class="box-form">

        <h1 class="title for-white">Formulario de contacto</h1>

        <form action="/contactMessages" method="POST" @submit.prevent="onSubmit"  @keydown="form.errors.clear($event.target.name)">
                    
            <h2 class="subtitle for-white">
                Información personal
            </h2>

            <div class="field mb-1">
                <div class="control">
                    <label for="name" class="label">Nombre</label>
                    <input type="text" id="name" name="name" :class="[{'is-danger': form.errors.has('name')}, 'is-hovered', 'input']" v-model="form.name">
                    <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
                </div>
            </div>

            <div class="field mb-1">
                <div class="control">
                    <label for="last_name" class="label">Apellidos</label>
                    <input type="text" id="last_name" name="last_name" :class="[{'is-danger': form.errors.has('last_name')}, 'is-hovered', 'input']" v-model="form.last_name">
                    <span class="help is-danger" v-if="form.errors.has('last_name')" v-text="form.errors.get('last_name')"></span>
                </div>
            </div>

            <div class="field mb-1">
                <div class="control">
                    <label for="country" class="label">País - <span class="opcional-label">opcional</span></label>
                    <input type="text" id="country" name="country" :class="['is-hovered', 'input']" v-model="form.country">
                    <span class="help is-danger" v-if="form.errors.has('country')" v-text="form.errors.get('country')"></span>
                </div>
            </div>

            <h2 class="subtitle for-white">
                Información del correo
            </h2>

            <div class="field mb-1">
                <div class="control">
                    <label for="email" class="label">Correo Electrónico</label>
                    <input type="text" id="email" name="email" :class="[{'is-danger': form.errors.has('email')}, 'is-hovered', 'input']" v-model="form.email">
                    <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                </div>
            </div>

            <div class="field mb-1">
                <div class="control">
                    <label for="subject" class="label">Asunto</label>
                    <input type="text" id="subject" name="subject" :class="[{'is-danger': form.errors.has('subject')}, 'is-hovered', 'input']" v-model="form.subject">
                    <span class="help is-danger" v-if="form.errors.has('subject')" v-text="form.errors.get('subject')"></span>
                </div>
            </div>

            <div class="field mb-1">
                <div class="control">
                    <label for="content" class="label">Mensaje</label>
                    <textarea type="text" id="content" name="content" :class="[{'is-danger': form.errors.has('subject')}, 'is-hovered', 'textarea']" v-model="form.content"></textarea>
                    <span class="help is-danger" v-if="form.errors.has('content')" v-text="form.errors.get('content')"></span>
                </div>
            </div>

            <div class="field is-medium">
                <div class="control has-text-centered">
                    <button class="button is-primary is-medium is-outlined" :disabled="form.errors.any()">Contactar</button>
                </div>
            </div>

        </form>

    </div>

</template>

<script>

    export default {

        data() {
            return {

                form: new Form({

                    name: '',

                    last_name: '',

                    email: '',

                    subject: '',

                    content: '',

                }),

            }
        },

        methods: {
            onSubmit() {

                this.form.submit('post', '/api/contact')
                    .then(data => console.log(data));

            },
        },

    }

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

</style>