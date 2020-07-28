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
        metaInfo: {
            // if no subcomponents specify a metaInfo.title, this title will be used
            title: 'Default Title',
            // all titles will be injected into this template
            // meta:[
            //     { name: 'viewport', content: 'width=device-width, initial-scale=1' }
            // ]
        }
    }
</script>

<style scoped>

</style>
