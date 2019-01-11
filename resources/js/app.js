import './bootstrap';
import router from './routes';
import BNavbar from "./components/BNavbar";
import BFooter from "./components/BFooter";


new Vue({
    el: "#app",

    components: {

        BNavbar,

        BFooter

    },

    router
});

