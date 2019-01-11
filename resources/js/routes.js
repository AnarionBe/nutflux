import Router from 'vue-router';
import login from './components/Login';
import welcome from './components/Welcome';

export default new Router({
    mode: "history",
    routes: [{
            path: "/",
            name: "home",
            component: welcome
        }, {
            path: "/login",
            name: "login",
            component: login
        }, 
    ]
});