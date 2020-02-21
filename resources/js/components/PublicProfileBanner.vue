<template>
  <v-app class="white" id="inspire">
    <v-container class="grey lighten-5">
      <v-row>
        <v-col cols="12">
          <v-row class="mb-6 mt-10" no-gutters>
            <!-- Profile Avatar -->
            <v-col cols="4">
              <div class="pr-10" align="right">
                <v-avatar color="primary" size="150">
                  <span class="white--text headline">Profile Pic</span>
                </v-avatar>
              </div>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-container>
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
