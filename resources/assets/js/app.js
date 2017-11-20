window.Vue = require('vue')

Vue.component('texteditor', require('./components/TextEditor.vue'))

const app = new Vue({
    el: '#app'
})
