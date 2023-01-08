import {createApp} from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

createApp({
    name: "gestion_user",
    data() {
        return {
            password: '',
            password_confirmation:''
        }
    }

}).mount('#user_gestion')
