window.Vue = require('vue');

window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

window.axios = require('axios');
window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};