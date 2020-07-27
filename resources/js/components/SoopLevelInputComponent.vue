<template>
    <div class="sooplevel">
        <label for="condition">スープ</label>
        <input id="condition" type="text" :value="value" @input="$emit('input',$event.target.value)">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('SoopLevelInputComponent')
        }
    }
</script>

<style scoped lang="scss">
    .sooplevel {
        color:black;
    }
</style>