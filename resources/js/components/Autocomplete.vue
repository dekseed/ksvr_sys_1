<template>
<div>
        <div class="form-label-group has-icon-left">
            <input type="text" class="form-control" placeholder="ค้นหา หมายเลขเครื่อง/เลขทะเบียน" name="number"
            v-model="queryString" v-on:keyup="getResults()">
            <label for="email-id-column">ค้นหา หมายเลขเครื่อง/เลขทะเบียน</label>
            <div class="form-control-position">
                <i class="feather icon-search"></i>
            </div>
        </div>
        <div class="panel-footer" v-if="stocks.length">
            <ul class="list-group">
                <li class="list-group-item" v-for="item in stocks" :key="item.number"> {{ item.number }} </li>
            </ul>
        </div>
</div>
</template>
<script>
export default {
    data(){
        return{
            queryString: '',
            stocks:[],
        }
    },
    methods:{
        getResults(){
            this.stocks = [];
            axios.get('/api/search-stock', {
                params: {queryString: this.queryString}}).then(response => {

            response.data.forEach((number)=>{
                this.stocks.push(number);
                });
            });
        }
    }
}
</script>
