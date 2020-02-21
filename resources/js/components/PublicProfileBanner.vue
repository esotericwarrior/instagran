<template> </template>

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
