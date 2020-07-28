<template>
<form action="/reviewinput.blade" method="POST">
    <input type="hidden" name="_token" :value="csrf">
    <div class="priceinput">
        <!-- <label for="condition">価格</label>
        <input id="condition" type="text" :value="value" @input="$emit('input',$event.target.value)"> -->
        
        <label>価格</label>
        <strong class="error" v-for="value in error.name">{{ value }}</strong>
        <input class="form-control" name="priceinput" type="text" v-model="name">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('PriceInputComponent')
        }
        data:function(){
            return{
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                price: this.old.price,
                }
            }
        },
    }
</script>

<style scoped lang="scss">
    .priceinput {
        color:black;
    }
</style>