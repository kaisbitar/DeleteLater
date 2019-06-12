<template>
    <div class="container">                        
        <div class="row justify-content-center">
            <div v-for="record in dummyData.data" :key="record.id">
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b4a57327b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b4a57327b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                        <div class="card-header">
                            <h5>Header {{record.id}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="card-title">{{record.title}}</div>
                            <div class="card-text">{{record.description}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <pagination :data="dummyData" @pagination-change-page="getResults"></pagination>
    </div>
</template>

<script>
import axios from "axios";
Vue.component('pagination', require('laravel-vue-pagination'));

export default {  
  data() {
    return {
        dummyData: {}
    };
  },

  mounted() {
        this.getResults(); 
        
  },

  methods: {
		// Our method to GET results from a Laravel endpoint
		getResults(page = 1) {
			axios.get('/dummy?page=' + page)
				.then(response => {
					this.dummyData = response.data;
				});
		}
	}
};
</script>
<style scoped>
.row{
    display: grid;
    grid-template-columns: 29% 29% 29%;
    margin-bottom: 42px;
}
ul.pagination {
    max-width: 366px;
    margin-right: auto;
    margin-left: auto;
}
.col-md-12 {
    margin-bottom: 31px;
}
@media (max-width: 991px){
    .row{
            grid-template-columns: 50% 50%;
    }
}
@media (max-width: 454px){
    .row{
            grid-template-columns: 100%;
    }
}
</style>
