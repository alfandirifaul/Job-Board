import axios from 'axios';
import Alpine from 'alpinejs'

// axios
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// alpine
window.Alpine = Alpine
Alpine.start()
