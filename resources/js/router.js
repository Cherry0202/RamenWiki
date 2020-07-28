import Vue from 'vue'
import VueRouter from 'vue-router'

// ページコンポーネントをインポートする
import Search from './pages/SearchView'
import Wiki from './pages/WikiPage'
import Mypage from './pages/Mypage'

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
        path: '/mypage',
        component: Mypage,
        name: 'mypage'
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
