import VueRouter from 'vue-router';

let routes = [
    {
        path: "/",
        component: require("./views/Home").default
    },
    
    {
        path: "/home",
        component: require("./views/Home").default
    },

    {
        path: "/nosotros",
        component: require("./views/About").default
    },

    {
        path: "/servicios",
        component: require("./views/Services").default
    },

    {
        path: "/contacto",
        component: require("./views/Contact").default
    },

    {
        path: "/blog",
        component: require("./views/Blog").default
    }
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