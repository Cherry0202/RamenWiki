<template>
    <div style="display: flex;">
        <div class="flip">
            <div class="front" style="display: inline-block;">
                <div class="card">
                    <!-- 店舗写真 -->
                    <img class="card-img-top" src="https://msp.c.yimg.jp/images/v2/FUTi93tXq405grZVGgDqG0y4r189JNlic90O6R_GwHI9sNMfPUdP5qVRomMIfAwXEFXaCintilsqKVPU2NJ51JltAbxtFViPsdGV5MMoYF8sAcPkkKOmJQ5M4O55z8cBSrOIb74hC735APTQwch577nIGXvL5Xb3kBd306ZtJN8IdPg849LO5pfMhRBhNffSauWdnwYtiv20YKknCvq3PpifB0oFDyjVuv442LrlJmjhIr8ryFuC2aLatQbG3u0ILaeH3SQbyOhkEykkWlKLDQ==" style="height: 120px; width: 100%; display: block;">
                    <div class="card_deteil">
                        <h4>お店名</h4>
                    </div>
                </div>
            </div>
            <div class="back"  style="display: inline-block;">
                <div class="card">
                    <!-- チャート表示 -->
                    <img class="card-img-top" src="https://msp.c.yimg.jp/images/v2/FUTi93tXq405grZVGgDqG5dKs-0aOvg76LQ_Qwd2KTld_yqDBMdkOHghXMEQlDIADs6PiDMt-BOq3JXUB_PLClhXSPyp56rZOBf811Wl1mFbpfIGX2b_jd_UXfBPo-4A2yQn6nj1fhTNCAPFrz1dVAkWTDlLXZEHRnVVc4MgKtwzMLtXrKsDiquaKyEs2QC-pDit8zy3wFK_w3PdwLzrK_eNMzfhF4eAUcS5o827CV0V_BUEqfE33vidzJSlc7UyW6kzLEUIwOS3P-dpFGqZbvwq_CBYZHMTFMQE7D2iisbYb5iyju37hWvXtX9TaXyu?errorImage=false" style="height: 120px; width: 100%; display: block;">
                    <div class="card_detail">
                        <div class="button">
                            <a href="#" class="btn red">店舗詳細</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    
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

// base
.flip {
    position: relative;
    >.front,
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
        top: 0px;
        left: 0px;
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
        width: 150px;
        background-size: cover!important;
        background-position: center!important;
        height: 170px;
        background: #313131;
        border-radius: 10px;
    }
}

//button
.buttons {
  padding: 5px;
  text-align: center;
}

.btn {
  border-radius: 5px;
  padding: 10px 20px;
  width: 140px;
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