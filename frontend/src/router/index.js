import Vue from 'vue'
import VueRouter from 'vue-router'

import vHome from "../views/vHome"
import vCarCatalog from "../views/vCarCatalog"
import vCarDescription from "../views/vCarDescription"
import vProfile from "../views/vProfile"
import vCarSell from "../views/vCarSell"


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
        path: '/car-description/:id',
        name: 'vCarDescription',
        component: vCarDescription
    },
    {
        path: '/profile',
        name: 'vProfile',
        component: vProfile
    },
    {
        path: '/car-sell',
        name: 'vCarSell',
        component: vCarSell
    }  
]



const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router