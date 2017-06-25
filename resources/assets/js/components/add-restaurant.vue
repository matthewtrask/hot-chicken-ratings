<style lang="scss" scoped>

</style>
<template>
  <div>
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <form class="" action="" method="post" enctype="multipart/form-data" @submit.prevent="addRestaurant">
          <div class="form-group">
            <label for="restaurantInput">Restaurant Name</label>
            <input id="restaurantInput" type="text" v-model="restaurantName" placeholder="Restaurant Name">
          </div>
          <div class="form-group">
            <label for="restaurantStreet">Street</label>
            <input id="restaurantStreet" type="text" v-model="restaurantStreet" placeholder="Restaurant Street">
          </div>
          <div class="form-group">
            <label for="restaurantCity">City</label>
            <input id="restaurantCity" type="text" v-model="restaurantCity" placeholder="Restaurant City">
          </div>
          <div class="form-group">
            <label for="restaurantState">State</label>
            <input id="restaurantState" type="text" v-model="restaurantState" placeholder="Restaurant State">
          </div>
          <div class="form-group">
            <label for="restaurantZip">State</label>
            <input id="restaurantZip" type="text" v-model="restaurantZip" placeholder="Restaurant Zip Code">
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Add Restaurant</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
  import axios from 'axios';

  export default {

    data() {
      return {
        restaurantName: '',
        restaurantStreet: '',
        restaurantCity: '',
        restaurantState: '',
        restaurantZip: '',
      };
    },

    methods: {
      addRestaurant() {
        axios.post('api/restaurants', {
          restaurantName,
          restaurantStreet,
          restaurantCity,
          restaurantState,
          restaurantZip,
        }).then(response => {
          this.showSuccessBanner = true;

          setTimeout(() => {
            this.showSuccessBanner = false;
          }, 5000);
        }).catch(error => {
          console.log(error);
        });
      },
    },

    components: { }
  };
</script>
