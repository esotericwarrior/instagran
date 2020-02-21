<template>
  <v-app class="white" id="inspire">
    <v-container class="grey lighten-5"> </v-container>
  </v-app>
</template>

<script>
export default {
  name: "PublicProfileBanner",
  props: {
    count: {
      default: null,
      type: Number
    },
    description: {
      default: null,
      type: String
    },
    displayname: {
      type: String,
      required: true
    },
    title: {
      default: null,
      type: String
    },
    url: {
      default: null,
      type: String
    },
    username: {
      type: String,
      required: true
    }
  },
  data() {
    return {
      isFollowed: true
    };
  }
};
</script>
<style lang="scss" scoped></style>
