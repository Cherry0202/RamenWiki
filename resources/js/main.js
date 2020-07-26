import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
  load: {
    //GoogleのAPIKey
    key: 'AIzaSyBWzyU_hkyqq0q7Hba7hiYaLaExNs5H6lg',
    libraries: 'places', 
  },
})