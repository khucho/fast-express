<script>
    export default{
        data: () => ({
            user_data : {
                phone_no: '',
                password : '',
            },
        }),
    }
</script>
<template>
    <v-row>
        <v-col></v-col>
        <v-col>
            <v-sheet class="mx-auto">
                <v-form ref="form" >
                <v-row>
                    <v-col></v-col>
                    <v-col>
                    <v-img
                        :width="100"
                        aspect-ratio="16/9"
                        cover
                        src="@/assets/logo.png"
                        ></v-img>
                    </v-col>
                    <v-col></v-col>
                </v-row><br/>
                <h2 class="text-center"><b>Login To Dashboard</b></h2><br/>
                <v-row>  
                    <v-col>
                    <v-text-field
                        variant="solo-filled"
                        v-model="user_data.phone_no"
                        label="Phone No *"
                    ></v-text-field>
                    </v-col>
                </v-row>

                <v-row>
                    <v-col>
                    <v-text-field
                        variant="solo-filled"
                        v-model="user_data.password"
                        label="Password *"
                        ></v-text-field>
                    </v-col>
                </v-row>

                <v-row>
                    <v-col>
                        <v-btn
                            color="success"
                            class="mt-4"
                            block
                        >
                            Login
                        </v-btn>
                    </v-col>
                </v-row>

                </v-form>
            </v-sheet>
        </v-col>
        <v-col></v-col>
    </v-row>
</template>


<style scoped>

  .v-form{
    background: #9390C7 !important;
    padding: 15% 15% 5% 10%!important;
    border-radius: 6px;
    margin-top: 20%!important;
  }

  .v-sheet{
    background: #9390C7 !important;
    border-radius: 16px;
  }

  .v-row + .v-row {
    margin-top: 0px!important;
  }
</style>