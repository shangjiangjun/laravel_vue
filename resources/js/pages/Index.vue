<template>
    <div class="index-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Index.')
        }
    }
</script>
<style scoped>
    .index-container {
        width: 100%;
        height: 100%;
    }
</style>
