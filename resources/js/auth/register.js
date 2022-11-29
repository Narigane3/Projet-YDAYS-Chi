import {createApp} from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
    data() {
        return {
            "approved": false,
            "last_name" : ''
        }
    },
    methods: {
    }

}).mount('#register_page')
