import Department from '../components/pages/deaprtment'
import mainPage from '../components/pages/main-page'
import newsActionsPage from '../components/pages/news-actions-page'
import newsDetailPage from '../components/news-detail-page'
import actionDetailPage from '../components/action-detail-page'
import contacts from '../components/contacts'
import our_map from '../components/our-map'
import our_map2 from '../components/our-map2'
import plainPage from '../components/plain-page'
import renterPage from '../components/renter-page'

export const routes = [
    {path: '/department', component: Department },
    {path: '/renter/:id', component: renterPage },
    {path: '/', component: mainPage },
    {path: '/news', component: newsActionsPage },
    {path: '/news/:id', component: newsDetailPage },
    {path: '/action/:id', component: actionDetailPage },
    {path: '/our_map', component: our_map },
    {path: '/our_map/:floor/:map_place', component: our_map2 },
    {path: '/path', component: contacts },
    {path: '/contacts', component: contacts },
    {path: '/plainpage/:name_page', component: plainPage },
]