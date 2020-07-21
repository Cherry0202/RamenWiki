<template>
    <div class="wrap">
        <div id="google-map">
            <div class= "header">
                <div class="menu-all">
                    <a href="#" class="button">MENU</a>
                </div>
                <search-form-component @postLists="getLists"></search-form-component>
            </div>
                <GmapMap
                :center="maplocation"
                :zoom="15"
                :draggable="true"
                map-type-id="roadmap"
                style="width: 375px; height: 500px"
                ref="mapRef"
                >
                <GmapMarker v-for="m in makers"
                    :position="m.position"
                    :title="m.title"
                    :clickable="true"
                    :draggable="false"
                    :icon="m.icon"
                    :key="m.id">
                </GmapMarker>
                </GmapMap>
        </div>
        <div id="under-color-block">
            <div class="block1"></div>
            <div class="block2"></div>
            <div class="block3"></div>
            <div class="block4"></div>
        </div>
        <div id="ramen-menu-bar">
            <div class="text2">
                <h2>Nearby</h2>
                <p>近くのラーメン店</p>
            </div>
            <div class="text3"><h1>７</h1></div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                maplocation:{lat:0, lng:0},
                makers:[],
                lists: null,
            }
        },
        async mounted() {
            // 現在地の取得
            if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position){
                let coords = position.coords;
                // 緯度経度を取得
                this.maplocation.lat = coords.latitude;
                this.maplocation.lng = coords.longitude;
                // 地図読み込み完了時のイベント
                this.$gmapApiPromiseLazy().then(() => {
                    google.maps.event.addListenerOnce(this.$refs.mapRef.$mapObject, 'idle',
                    function() { this.setPlaceMakers() }.bind(this)
                    );
                });
                }.bind(this),
                function(error) {
                // エラーの場合は東京駅周辺に移動
                this.maplocation.lat = 35.6813092;
                this.maplocation.lng = 139.7677269;
                }
            );
            } else {
            // 現在地取得不可の場合は東京駅周辺に移動
            this.maplocation.lat = 35.6813092;
            this.maplocation.lng = 139.7677269;
            }
        },
        methods: {
           setPlaceMakers() {
            let map = this.$refs.mapRef.$mapObject
            let placeService = new google.maps.places.PlacesService(map);
      // Places APIのnearbySearchを使用する。
      placeService.nearbySearch(
        {
          location: new google.maps.LatLng(this.maplocation.lat, this.maplocation.lng),
          radius: 500,
          type: ['restaurant']
        },
        function(results, status) {
          if (status == google.maps.places.PlacesServiceStatus.OK) {
            results.forEach(place => {
              // デフォルトのアイコンが大きめなので縮小
              let icon = {
                url: place.icon, // url
                scaledSize: new google.maps.Size(30, 30), // scaled size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(0, 0) // anchor
              };
              let maker = {
                position: place.geometry.location,
                icon: icon,
                title: place.name,
                id: place.place_id
              };
              this.makers.push(maker);
            });
          }
        }.bind(this)
      );
    },
            getLists(lists) {
               this.lists = lists
            }
  }
}
</script>


<style scoped lang="scss">
    .wrap{
        width: 100vw;
        height: 100vh;
        background-color: whitesmoke;
        position: relative;
        /*top: 0;*/
        /*right: 0;*/
        /*bottom: 0;*/
        /*left: 0;*/
        .header{
            display: flex;
            background-color: #339b4d;
        }
        .menu-all{
            background-color: #3ACCE1;
            height: 100%;
            padding-top: 10px;
            padding-left: 20px;
            .button {margin-top: 10px;
                padding: 0.75em 1em;
                text-align: center;
                text-decoration: none;
                color: #2194E0;
                border: 2px solid #2194E0;
                font-size: 12px;
                display: inline-block;
                border-radius: 0.3em;
                transition: all 0.2s ease-in-out;
                position: relative;
                overflow: hidden;
            }
        }
        .searcher{
            background-color: #339b4d;
            height: 60px;
            .search-container{
            width: 260px;
            display: block;
            padding-left: 15px;
            padding-top: 23px;
            margin: 0 auto;
            }

            input#search-bar{
            margin: 0 auto;
            width: 100%;
            height: 35px;
            font-size: 1rem;
            border: 1px solid #D0CFCE;
            outline: none;
            &:focus{
                border: 1px solid #008ABF;
                transition: 0.35s ease;
                color: #008ABF;
                &::-webkit-input-placeholder{
                transition: opacity 0.45s ease;
                opacity: 0;
                }
            }
            }
            .search-icon{
            position: relative;
            float: right;
            width: 50px;
            height: 50px;
            top: -43px;
            right: -5px;
            }
        }
        #google-map{
            width: 100%;
            height: 91%;
            background-color: #2A2E43;
        }
        #under-color-block{
            display: flex;
            height: 8px;
            .block1{
                width: 25%;
                background-color: #665EFF;
            }
            .block2{
                width: 25%;
                background-color: #5773FF;
            }
            .block3{
                width: 25%;
                background-color: #3497FD;
            }
            .block4{
                width: 25%;
                background-color: #3ACCE1;
            }
        }
        #ramen-menu-bar{
            background-color: #2A2E43;
            display: flex;
            height: 9%;
            width: 100%;
            .text2{
                width: 85%;
                background-color: #3AC;
            }
            .text3{
                width: 15%;
                background-color: #CE1;
                display: flex;
                justify-content: center;
                align-items: center;
                h1{
                    font-size: 62px;
                }
            }
        }
    }
</style>
