import VueRouter from 'vue-router';
import GiftConstruct from './components/GiftConstructComponent';

export default new VueRouter({
    routes : [
        {
            path : '/gift-construct',
            component : GiftConstruct
        }
    ],
    mode: 'history'
})