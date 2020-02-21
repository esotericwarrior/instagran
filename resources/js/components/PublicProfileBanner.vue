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
                          @click="isFollowed = !isFollowed"
                          class="ma-2"
                          color="grey darken-2"
                          dark
                          large
                        >
                          {{ isFollowed ? "Following" : "Follow " }}
                          <v-icon dark right>
                            {{
                              isFollowed
                                ? "mdi-account-cancel"
                                : "mdi-account-plus"
                            }}
                          </v-icon>
                        </v-btn>
                        <v-btn icon color="" x-large>
                          <v-icon>mdi-dots-horizontal</v-icon>
                        </v-btn>
                      </v-card-actions>
                    </v-list-item>
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
