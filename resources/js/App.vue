<template>
    <div>
        <h1>Hello, {{ msg }}!</h1>
        <router-link :to="{ name: 'index'}">
            <span class="logo">Logo</span>
        </router-link>

        <ul class="links">
            <li>
                <router-link :to="{ name: 'lists' }">
                    列表
                </router-link>
            </li>
        </ul>
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

<style lang="scss">
    @import '../sass/_variables.scss';

    nav.top-navigation{
        background-color: $white;
        height: 50px;
        border-bottom: 2px solid $blue;

        span.logo{
            border-right: 1px solid $blue;
            display: block;
            float: left;
            height: 50px;
            line-height: 50px;
            padding: 0px 20px 0px 20px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: bold;
            color: $blue;

            &:hover{
                color: white;
                background-color: $blue;
            }
        }

        ul.links{
            display: block;
            float: left;

            li{
                display: inline-block;
                list-style-type: none;
                line-height: 50px;

                a{
                    font-family: 'Lato', sans-serif;
                    font-weight: bold;
                    color: $black;

                    &:hover{
                        color: $blue;
                    }
                }
            }
        }

        div.right{
            float: right;

            img.avatar{
                width: 40px;
                height: 40px;
                border-radius: 40px;
                margin-top: 5px;
                margin-right: 10px;
            }
        }

    }
</style>

