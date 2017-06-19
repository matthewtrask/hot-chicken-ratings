import VueRouter from 'vue-router';
import Home from './components/home.vue';

let routes = [
	{
		path: '/',
		component: Home,
		name: 'Home'
	},
];

export default new VueRouter({
	mode: 'history',
	routes
});
