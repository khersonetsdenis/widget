import VueRouter from 'vue-router';
import GiftConstruct from './components/GiftConstructComponent';

export default new VueRouter({
    routes : [
        {
            path : '/gift-construct/1',
            component : GiftConstruct
        }
    ],
    mode: 'history'
})