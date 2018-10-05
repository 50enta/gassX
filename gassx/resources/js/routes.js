import VueRouter from 'vue-router';
import Task from './components/Task.vue';
import Profile from './components/Profile.vue';


let routes = [
    {
        path: '/',
        component: Profile
    },
    {
        path: '/profile',
        component: Profile
    }
];


export default new VueRouter({
    routes
});