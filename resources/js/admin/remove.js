import {createApp} from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

createApp({
    name: 'remove',
    data() {
        return {
            remove_id: '',
        }
    },
    methods: {
        setId: function (event) {
           this.remove_id = event.target.getAttribute('data-user_id');
        }
    }
}).mount('#remover');
