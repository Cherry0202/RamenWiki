<template>
    <div v-if="results.length == 0" style="display: none;"></div>
    <div v-else style="display: flex;" class="wrap">
    <div class="frip-wrap" v-for="result in results" :key="index">
        <div class="flip">
            <div class="front" style="display: inline-block;">
                <div class="card">
                    <!-- 店舗写真 -->
                    <div v-if="result['store'].id%2 === 1">
                    <img class="card-img-top" src="../Ozawa_files/Sample_ramenshot.jpg" style="height: 280px; width: 100%; display: block;">
                    </div>
<!--                    <div v-if="result['store'].id === 2">-->
<!--                    <img class="card-img-top" src="https://msp.c.yimg.jp/images/v2/FUTi93tXq405grZVGgDqG0y4r189JNlic90O6R_GwHI9sNMfPUdP5qVRomMIfAwXEFXaCintilsqKVPU2NJ51JltAbxtFViPsdGV5MMoYF8sAcPkkKOmJQ5M4O55z8cBSrOIb74hC735APTQwch577nIGXvL5Xb3kBd306ZtJN8IdPg849LO5pfMhRBhNffSauWdnwYtiv20YKknCvq3PpifB0oFDyjVuv442LrlJmjhIr8ryFuC2aLatQbG3u0ILaeH3SQbyOhkEykkWlKLDQ==" style="height: 280px; width: 100%; display: block;">-->
<!--                    </div>-->
                    <div v-else>
                        <img class="card-img-top" src="https://dancyu.jp/images/mm2074.jpg" style="height: 280px; width: 100%; display: block;">
                    </div>
                    <div class="card_deteil">
                        <div class="store">
                            <h4>{{result['store'].store_name}}</h4>
<!--                            <p>{{result['store'].id}}</p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="back"  style="display: inline-block;">
                <div class="card">
                    <!-- チャート表示 -->
                    <img class="card-img-top" src="../Ozawa_files/chart.png" style="height: 280px; width: 100%; display: block;">
                    <div class="card_detail">
                        <div class="button">
                            <router-link class="btn red" :to="{ name: 'wiki', params: { id: result['store'].id } }">
                                店舗詳細
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</template>

<script>
export default {
    props: {
        results: null
    }
}
</script>

<style lang="scss" scoped>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Mono');

* {
  box-sizing: border-box;
  font-weight: normal;
}

body {
  color: #555;
  background: #222;
  text-align: left;
  font-family: 'Roboto Mono';
  padding: 1em;
  margin:0;
}
img {
    border-radius:10px;
}
.frip-wrap {
    display: flex;
    justify-content: space-between;
}
.wrap {
    width: 100vw;
    height: 338px;
    overflow-x: scroll;
}
.card {
    margin: 0px;
}

// base
.flip {
    position: relative;
    margin-left: 18px;
    >.front{
        background-color: #636b6f;
    }
    >.back {
        display: inline-block;
        transition-timing-function: cubic-bezier(.175, .885, .32, 1.275);
        transition-duration: .5s;
        transition-property: transform, opacity;
    }
    >.front {
        transform: rotateY(0deg);
    }
    >.back {
        position: absolute;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: rotateY(-180deg);
    }
    &:hover {
        >.front {
            transform: rotateY(180deg);
        }
        >.back {
            opacity: 1;
            transform: rotateY(0deg);
        }
    }
    &.flip-vertical {
        >.back {
            transform: rotateX(-180deg);
        }
        &:hover {
            >.front {
                transform: rotateX(180deg);
            }
            >.back {
                transform: rotateX(0deg);
            }
        }
    }
}

// custom
.flip {
    position: relative;
    margin-right: 1px;
    margin-bottom: 1em;
    >.front,
    >.back {
        color: white;
        width: 300px;
        background-size: cover!important;
        background-position: center!important;
        height: 340px;
        background: #313131;
        border-radius: 10px;
    }
}

.store {
    margin: 10px;
}

h4 {
    font-family: "Gibson";
    text-size: 14px;
}

p {
    font-family: "Gibson";
    text-size: 12px;
    color: gray;
}

//button
.buttons {
  padding: 5px;
  text-align: center;
}

.btn {
  border-radius: 5px;
  padding: 10px 20px;
  width: 290px;
  height:40px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  margin: 5px;
  color: #fff;
  position: relative;
  display: inline-block;
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.red {
  background-color: #e74c3c;
  box-shadow: 0px 5px 0px 0px #CE3323;
}

.red:hover {
  background-color: #FF6656;
}

.text-shadow {
text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
}
</style>

<!--  TODO: photoref-->
<!-- TODO: card css-->
