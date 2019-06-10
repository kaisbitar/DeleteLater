<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Here is the Dummy data returned in AJAX using Vue js</div>
                      <div v-for="record in dummyData.data" :key="record.id">
                           <p>{{record.name}}</p>
                           <p>Desc: {{record.description}}</p>
                      </div>
                    <pagination :data="dummyData" @pagination-change-page="getResults"></pagination>

                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
Vue.component('pagination', require('laravel-vue-pagination'));

export default {  
  data() {
    return {
        dummyData: []
    };
  },

  mounted() {
        this.getResults(); 
        
  },

  methods: {
		// Our method to GET results from a Laravel endpoint
		getResults(page = 1) {
			axios.get('/TriggerSampleSoftware/public/dummy?page=' + page)
				.then(response => {
					this.dummyData = response.data;
				});
		}
	}
};
</script>
<style scoped>

</style>
