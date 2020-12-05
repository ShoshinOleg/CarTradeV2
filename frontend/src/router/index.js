import Vue from 'vue'
import VueRouter from 'vue-router'

import vHome from "../views/vHome"
import vCarCatalog from "../views/vCarCatalog"
import vCarDescription from "../views/vCarDescription"
import vProfile from "../views/vProfile"

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'vHome',
        component: vHome
    },
    {
        path: '/car-сatalog',
        name: 'vCarCatalog',
        component: vCarCatalog
    },
    {
        path: '/car-description',
        name: 'vCarDescription',
        component: vCarDescription
    },
    {
        path: '/profile',
        name: 'vProfile',
        component: vProfile
    }   
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router