import Vue from "vue";
import Vuex from "vuex";
import { posts } from "./modules/posts";
import { users } from "./modules/users";
import { auth } from "./modules/auth";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: { posts, users, auth },
    strict: true
});
