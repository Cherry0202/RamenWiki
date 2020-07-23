<template>
    <div class="amountinput">
        <label for="condition">量</label>
        <input id="condition" type="text" :value="value" @input="$emit('input',$event.target.value)">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('AmountInputComponent')
        }
    }
</script>

<style scoped lang="scss">
    .amountinput {
        color:black;
    }
</style>