import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
  load: {
    //GoogleのAPIKey
    key: 'google-key',
    libraries: 'places', 
  },
})