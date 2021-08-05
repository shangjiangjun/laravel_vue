import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

export default new VueRouter({
    saveScrollPosition: true,
    routes: [
        {
            name: 'index',
            path: '/',
            component: resolve => void(require(['../pages/Index.vue'], resolve))
        },

        {
            name: 'lists',
            path: '/lists',
            component: resolve => void(require(['../pages/Lists.vue'], resolve))
        }
    ]
});

