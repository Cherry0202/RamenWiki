<template>
    <div class="wrap">
        <p>
            Count : <span :class="numberClasses">{{ number }}</span>
        </p>
        <button @click="countDown">−１</button>
        <button @click="countUp">＋１</button>
    </div>
</template>

<script>
    export default {
        name: "SampleComponent",
        data () {
            return {
                number: 0
            }
        },
        computed: {
            numberClasses: function () {
                return {
                    'positive': (this.number > 0),
                    'negative': (this.number < 0)
                }
            }
        },
        methods: {
            countDown: function () {
                this.number--
            },
            countUp: function () {
                this.number++
            }
        }
    }
</script>
<style scoped lang="scss">
    .wrap{
        width: 20vw;
        height: 20vh;
        background-color: whitesmoke;
        p {
            margin: 10px;
        }
        .positive {
            color: blue;
        }
        .negative {
            color: red;
        }
    }
</style>
