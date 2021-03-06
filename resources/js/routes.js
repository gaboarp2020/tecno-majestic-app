import VueRouter from 'vue-router';

let routes = [{
        path: "/",
        component: require("./views/Home").default,
        alias: "/home"
    },

    {
        path: "/nosotros",
        component: require("./views/About").default,
    },

    {
        path: "/servicios",
        component: require("./views/Services").default,
    },

    {
        path: "/contacto",
        component: require("./views/Contact").default,
    },
];

export default new VueRouter({

    routes,

    scrollBehavior(to, from, savedPosition) {
        return {
            x: 0,
            y: 0
        }
    },

    linkActiveClass: 'is-active'

});
