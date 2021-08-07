<template>
    <div class="info-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div v-if="info">
                    {{ info.name }} - {{ info.tel }}
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="grid-container">
                                <div class="grid-x grid-padding-x">
                                    <div class="large-12 medium-12 small-12 cell">
                                        <label>名称
                                            <input type="text" placeholder="名称" v-model="name">
                                        </label>
                                    </div>
                                    <div class="large-12 medium-12 small-12 cell">
                                        <label>电话号码
                                            <input type="text" placeholder="电话号码" v-model="tel">
                                        </label>
                                    </div>
                                    <div class="large-12 medium-12 small-12 cell">
                                        <button type="button" class="btn btn-primary" v-on:click="submitNewCafe()">提交</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                info: [],
                name: '',
                tel: '',
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
            },
            submitNewCafe: function () {
                listApi.newInfo({
                    id  : this.id,
                    name: this.name,
                    tel : this.tel
                }).then(res => {
                    console.log(res);
                    let result = res.data;

                });
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
