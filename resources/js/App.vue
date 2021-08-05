<template>
    <div>
        <h1>Hello, {{ msg }}!</h1>
        <!--路由引入的组件将在这里被渲染  公共文件 -->
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                msg: 'Vue'
            }
        }
    }
</script>

<style>
</style>

