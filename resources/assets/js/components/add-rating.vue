<style lang="scss" scoped>

</style>
<template>
  <div>
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <div class="alert alert-success" role="alert" v-if="showSuccessBanner">
          Your review was posted! Thanks for submitting!
        </div>
        <h2> Add a rating</h2>
        <form method="post" action="" enctype="multipart/form-data" @submit.prevent="submitForm">
          <div class="form-group">
            <label for="restaurantInput">Restaurant</label>
            <select id="restaurantInput" class="form-control" v-model="restaurantId">
              <option value="" selected>Select One</option>
              <option v-for="restaurant in restaurants.data" :value="restaurant.id">{{ restaurant.name }}</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ratingInput">Rating</label>
            <select id="ratingInput" class="form-control" v-model="rating">
              <option value="">Pick One</option>
              <option :value="1">1 Star</option>
              <option :value="2">2 Stars</option>
              <option :value="3">3 Stars</option>
              <option :value="4">4 Stars</option>
              <option :value="5">5 Stars</option>
            </select>
          </div>
          <div class="form-group">
            <label for="reviewInput">Review</label>
            <textarea class="form-control" id="reviewInput" cols="10" rows="10" v-model="review"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Submit</button>
            <button class="btn btn-secondary">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
  import axios from 'axios';

  export default {

    mounted() {
      this.getRestaurants();
    },

    data() {
      return {
        restaurantId: '',
        rating: '',
        review: '',
        restaurants: [],
        showSuccessBanner: false,
      };
    },

    methods: {
      getRestaurants() {
        axios.get('api/restaurants').then(response => {
          this.restaurants = response.data;
        }).catch(error => {
          console.log(error);
        });
      },

      submitForm() {
        axios.post('api/rating', { rating: this.rating, review: this.review, restaurantId: this.restaurantId }).then(response => {
          this.showSuccessBanner = true;

          setTimeout(() => {
            this.showSuccessBanner = false;
          }, 5000);
        })
      },
    },

    components: { }
  }
</script>
