<template>
  <v-container>
    <v-row>
      <v-col cols="12" sm="6" offset-sm="3">
        <v-row class="mb-6 mt-10" no-gutters>
          <!-- Profile Avatar -->
          <v-col cols="3">
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
          <v-col cols="9">
            <v-card class="pa-2" color="grey lighten-5" flat tile>
              <div class="pl-10">
                <v-list-item two-line>
                  <v-list-item-content class="pl-6">
                    <v-list-item-title class="headline">
                      {{ displayname }}
                    </v-list-item-title>
                    <v-list-item-subtitle>
                      {{ username }}
                    </v-list-item-subtitle>
                  </v-list-item-content>

                  <!-- Profile Header Buttons -->
                  <v-card-actions>
                    <v-btn class="ma-2" color="grey darken-2" dark large>
                      Edit Profile
                      <v-icon dark right>mdi-pen</v-icon>
                    </v-btn>
                    <v-tooltip bottom>
                      <template v-slot:activator="{ on }">
                        <v-btn text icon x-large>
                          <v-icon>mdi-settings</v-icon>
                        </v-btn>
                      </template>
                      <span>Settings</span>
                    </v-tooltip>
                  </v-card-actions>
                </v-list-item>

                <!-- Upload Button -->
                <v-card-actions class="pl-10">
                  <v-btn block class="ma-2" color="primary" dark x-large>
                    Upload Photo / Video
                    <v-icon dark right>mdi-camera</v-icon>
                  </v-btn>
                </v-card-actions>
              </div>
            </v-card>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
export default {
  name: "ProfileBanner",
  props: {
    displayname: {
      type: String,
      required: true
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
<style lang="scss" scoped></style>
