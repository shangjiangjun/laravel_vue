<template>
    <div class="info-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div v-if="info">
                    {{ info.name }} - {{ info.tel }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import listApi from '../api/lists.js'
    export default {
        mounted() {

        },
        data() {
            return {
                id: 0,
                infoStatus: false,
                info: []
            }
        },
        created() {
            this.onGetInfo();
        },
        methods: {
            onGetInfo() {
                let id = this.$route.params.id
                this.id = id;
                listApi.getInfo(id).then(res =>  {
                    let result = res.data
                    if (result.status) {
                        this.infoStatus = true;
                        this.info = result.data;
                    }
                })
            }
        }
    }
</script>
<style scoped>
    .info-container {
        width: 100%;
        height: 100%;
    }
</style>
