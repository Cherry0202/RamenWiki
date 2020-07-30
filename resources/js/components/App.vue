<template>
    <div>
        <main>
            <div class="container">
                <RouterView />
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "App",
        metaInfo: [
            { name: 'viewport', content: 'width=device-width, initial-scale=1' }
        ]
    }
</script>

<style scoped>

</style>
