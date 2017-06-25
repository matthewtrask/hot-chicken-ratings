<style lang="scss" scoped>

</style>
<template>
  <div>
    <h2>Hot Chicken Rating</h2>

    <div class="panel panel-default" v-for="rating in ratings">
      <div class="panel-heading">
        <h3 class="panel-title">{{ rating.restaurant.name }}</h3>
      </div>
      <div class="panel-body">
        <p>Rating: {{ rating.rating }} out of 5</p>
        <p>{{ rating.review[0].review }}</p>
        <p>Written By: {{ rating.user.name }}</p>
      </div>
    </div>
  </div>
</template>
<script>
  import axios from 'axios';

  export default {
    mounted() {
      this.getRatings();
    },

    data() {
      return {
        ratings: [],
      };
    },

    methods: {
      getRatings() {
        axios.get('api/ratings').then(response => {
          this.ratings = response.data.data;
        }).catch(error => {
          console.log(error);
        });
      },
    }
  };
</script>
