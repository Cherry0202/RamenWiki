<template>
    <div class="inredientsamount">
        <label for="condition">具の量</label>
        <input id="condition" type="text" :value="value" @input="$emit('input',$event.target.value)">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('InredientsAmountInputComponent')
        }
    }
</script>

<style scoped lang="scss">
    .inredientsamount {
        color:black;
    }
</style>