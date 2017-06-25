import VueRouter from 'vue-router';
import Home from './components/home.vue';
import AddRating from './components/add-rating.vue';
import AddRestaurant from './components/add-restaurant.vue';

const routes = [
	{
		path: '/',
		component: Home,
		name: 'Home'
	},
	{
		path: '/ratings/add',
		component: AddRating,
		name: 'AddRating',
	},
	{
		path: '/restaurants/add',
		component: AddRestaurant,
		name: 'AddRestaurant',
	},
];

export default new VueRouter({
	routes
});
