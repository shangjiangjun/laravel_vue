<template>
    <div class="index-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        绑定事件，触发事件
                    </div>
                    <div class="card-body">
                        <button class="btn btn-sm btn-primary" v-on:click="checkStatus">按钮</button>
                        <div class="card-text">{{ iconStatus }}</div>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-sm btn-primary" v-on:click="iconStatus = !iconStatus">!按钮</button>
                        <div class="card-text">{{ iconStatus }}</div>
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
        },
        data() {
            return {
                iconStatus: false,
            }
        },
        methods: {
            checkStatus() {
                this.iconStatus = true;
            }
        }
    }
</script>
<style scoped>
    .index-container {
        width: 100%;
        height: 100%;
    }
</style>
