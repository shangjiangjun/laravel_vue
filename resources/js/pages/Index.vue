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
        beforeCreate() {
            console.log('beforeCreate')
        },
        created() {
            console.log('created')
        },
        beforeMount() {
            console.log('beforeMount')
        },
        mounted() {
            console.log('mounted')
        },
        beforeUpdate() {
            console.log('beforeUpdate')
        },
        updated() {
            console.log('updated')
        },
        beforeDestroy() {
            // 跳转页面之前
            console.log('beforeDestroy')
        },
        destroyed() {
            // 跳转页面之后
            console.log('destroyed')
        }
    }
</script>
<style scoped>
    .index-container {
        width: 100%;
        height: 100%;
    }
</style>
