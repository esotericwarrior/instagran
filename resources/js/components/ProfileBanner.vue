<template>
  <v-app id="inspire">
    <v-container class="grey lighten-5">
      <v-row>
        <v-col cols="12" sm="10" offset-sm="0">
          <v-row class="mb-6 mt-10" no-gutters>
            <!-- Profile Avatar -->
            <v-col cols="4">
              <div class="pr-10" align="right">
                <v-avatar color="primary" size="150">
                  <img
                    src="/jpeg/profile.jpg"
                    class="rounded-circle"
                    style="height: 150px;"
                  />
                </v-avatar>
              </div>
            </v-col>

            <!-- Profile Header -->
            <v-col cols="8">
              <v-card class="pa-2" color="grey lighten-5" flat tile>
                <div class="">
                  <v-col cols="12">
                    <v-list-item two-line>
                      <v-list-item-content class="">
                        <v-list-item-title class="headline">{{
                          username
                        }}</v-list-item-title>
                        <v-list-item-subtitle>{{
                          displayname
                        }}</v-list-item-subtitle>
                      </v-list-item-content>
                      <v-card-actions>
                        <v-btn
                          class="ma-2"
                          color="grey darken-2"
                          dark
                          large
                          :href="user.id + '/edit'"
                        >
                          Edit Profile
                          <v-icon dark right>
                            mdi-account-edit
                          </v-icon>
                        </v-btn>
                        <v-btn icon color="" x-large>
                          <v-icon>mdi-settings</v-icon>
                        </v-btn>
                      </v-card-actions>
                    </v-list-item>

                    <v-card-actions>
                      <v-btn
                        block
                        class="ma-2"
                        color="primary"
                        dark
                        x-large
                        href="/p/create"
                      >
                        Add New Post
                        <v-icon dark right>
                          mdi-camera
                        </v-icon>
                      </v-btn>
                    </v-card-actions>

                    <v-card-title>{{ title }}</v-card-title>
                    <v-card-text>
                      <div>{{ description }}</div>
                      <div>
                        <a :href="url">{{ url }}</a>
                      </div>
                      <div class="d-flex">
                        <div class="pr-5">
                          <strong>{{ count }}</strong> posts
                        </div>
                        <div class="pr-5">
                          <strong>{{ 1302 }}</strong> followers
                        </div>
                        <div class="pr-5">
                          <strong>{{ 212 }}</strong> following
                        </div>
                      </div>
                    </v-card-text>
                  </v-col>
                </div>
              </v-card>
            </v-col>
          </v-row>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>
<script>
export default {
  name: "ProfileBanner",
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
    user: {
      default: null,
      type: Object
    },
    username: {
      type: String,
      required: true
    }
  },
  data() {
    return {};
  }
};
</script>
<style lang="scss" scoped>
#inspire {
  flex: 1 1 auto;
  backface-visibility: hidden;
  display: flex;
  flex-direction: column;
  min-height: 50vh !important;
  max-width: 100%;
  height: 30vh;
  position: relative;
}

a {
  text-decoration: none;
  color: grey;
}
</style>
