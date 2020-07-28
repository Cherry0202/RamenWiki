<template>
    <div class="noodlesize">
        <!--<label for="condition">麺のサイズ</label>
        <input id="condition" type="text" :value="value" @input="$emit('input',$event.target.value)"> --> 
        <label>麺のサイズ</label>
        <strong class="error" v-for="value in error.name">{{ value }}</strong>
        <input class="form-control" name="noodlesize" type="text" v-model="name">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('NoodleSizeInputComponent')
        }
    }
</script>

<style scoped lang="scss">
    .noodlesize {
        color:black;
    }
</style>