import Vue from "vue";

import axios from "axios";

//Main pages
import App from "./App.vue";

//Import store
import store from "./store";

//Import router
import router from "./router";

import "../css/app.scss";

new Vue({
    el: "#app",
    store,
    router,
    created() {
        axios.get("/sanctum/csrf-cookie");
        axios.get("/api/users").then(response => {
            const loggedIn = response.data;
            if (loggedIn) {
                this.$store.dispatch("auth/loggedInUser");
            }
        });
    },
    render: h => h(App)
});
