import {createApp} from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
    data() {
        return {
            msg: 'hksf'
        }
    },
    methods: {
        // submit the form logout
        logout(event) {
            event.preventDefault();
            this.$refs.form.submit();
        }
    }
}).mount('#logout')

