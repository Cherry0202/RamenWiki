<template>
    <div class="stronglevel">
        <label for="condition">味の濃さ</label>
        <input id="condition" type="text" :value="value" @input="$emit('input',$event.target.value)">
    </div>
</template>

<script>
    export default {
        created() {
            console.log('StrongLevelInputComponent')
        }
    }
</script>

<style scoped lang="scss">
    .stronglevel {
        color:black;
    }
</style>