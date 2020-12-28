import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import TopComponent from "./components/TopComponent";
import ListComponent from "./components/ListComponent";
import CustomerListComponent from "./components/CustomerListComponent";
import SougiShowComponent from "./components/SougiShowComponent";
import EstimateShowComponent from "./components/EstimateShowComponent";
import SougiEditComponent from "./components/SougiEditComponent";
import EstimateEditComponent from "./components/EstimateEditComponent";
import ManageComponent from "./components/ManageComponent";
import ManageEditComponent from "./components/ManageEditComponent";
import ShijuukunichiComponent from "./components/ShijuukunichiComponent";
import CreateComponent from "./components/CreateComponent";
import TaskListComponent from "./components/TaskListComponent";
import TaskShowComponent from "./components/TaskShowComponent";
import TaskCreateComponent from "./components/TaskCreateComponent";
import TaskEditComponent from "./components/TaskEditComponent";
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/tasks',
            name: 'task.list',
            component: TaskListComponent
        },
        {
            path: '/top',
            name: 'top',
            component: TopComponent
        },
        {
            path: '/list',
            name: 'list',
            component: ListComponent
        },
        {
            path: '/customer',
            name: 'customer',
            component: CustomerListComponent
        },
        {
            path: '/list/:sougiId/show1',
            name: 'sougi.show1',
            component: SougiShowComponent,
            props: true
        },
        {
            path: '/list/:sougiId/show2',
            name: 'sougi.show2',
            component: EstimateShowComponent,
            props: true
        },
        {
            path: '/list/:sougiId/edit',
            name: 'sougi.edit',
            component: SougiEditComponent,
            props: true
        },
        {
            path: '/list/:sougiId/estimate',
            name: 'sougi.estimate.edit',
            component: EstimateEditComponent,
            props: true,
        },
        {
            path: '/create',
            name: 'create',
            component: CreateComponent
        },
        {
            path: '/manage',
            name: 'manage',
            component: ManageComponent
        },
        {
            path: '/manage/:manageId',
            name: 'manage.edit',
            component: ManageEditComponent,
            props: true
        },
        {
            path: '/shijuukunichi',
            name: 'shijuukunichi',
            component: ShijuukunichiComponent
        },
        {
            path: '/tasks/create',
            name: 'task.create',
            component: TaskCreateComponent
        },
        {
            path: '/tasks/:taskId',
            name: 'task.show',
            component: TaskShowComponent,
            props: true
        },
        {
            path: '/tasks/:taskId/edit',
            name: 'task.edit',
            component: TaskEditComponent,
            props: true
        },
    ]
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
