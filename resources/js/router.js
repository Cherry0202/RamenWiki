import Vue from 'vue'
import VueRouter from 'vue-router'
import Meta from 'vue-meta'

// ページコンポーネントをインポートする
import Search from './pages/SearchView'
import Wiki from './pages/WikiPage'
import WikiPageDemo from "./pages/WikiPageDemo";
import Login from './pages/LoginComponent'
import Register from './pages/MemberRegisterComponent'
import Mypage from "./pages/Mypage";
import SearchView2 from "./pages/SearchView2";
import AI from "./pages/AIPage"
import WikiEdit from "./pages/Wikiedit"
import Bye from "./pages/Goodbye"
import ByeBye from "./pages/Goodbye_bye"

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)
Vue.use(Meta)

// パスとコンポーネントのマッピング
const routes = [
    {
        path: '/',
        component: Search
    },
    {
        path: '/ok',
        component: SearchView2,
        name: 'search-view2'
    },
    {
        path: '/wiki/:id',
        component: Wiki,
        name: 'wiki'
    },
    {
        path: '/wiki/demo',
        component: WikiPageDemo,
        name: 'wiki-demo'
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
    },
    {
        path: '/mypage',
        component: Mypage,
        name: 'mypage'
    },
    {
        path: '/aipage',
        component: AI,
        name: 'ai',
        meta: { name: 'viewport', content: 'width=375' }
    },
    {
        path: '/edit',
        component: WikiEdit,
        name: 'edit',
        meta: { name: 'viewport', content: 'width=375' }
    },
    {
        path: '/bye',
        component: Bye,
        name: 'bye',
    },
    {
        path: '/bye/bye',
        component: ByeBye,
        name: 'byebye',
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
