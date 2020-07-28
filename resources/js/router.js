import Vue from 'vue'
import VueRouter from 'vue-router'

// ページコンポーネントをインポートする
import Search from './pages/SearchView'
import Wiki from './pages/WikiPage'
import Login from './pages/LoginComponent'
import Register from './pages/MemberRegisterComponent'

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
const routes = [
    {
        path: '/',
        component: Search
    },
    {
        path: '/wiki/:id',
        component: Wiki,
        name: 'wiki'
    },
    {
        path: '/login',
        component: Login,
        name: 'login'
    },
    {
        path: '/register',
        component: Register,
        name: 'register'
    }
]

// VueRouterインスタンスを作成する
const router = new VueRouter({
    mode: 'history',
    routes
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router
