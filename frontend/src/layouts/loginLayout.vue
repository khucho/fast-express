<script>
import { defineComponent } from "vue";

export default defineComponent({
    name: "login-layout",
});
</script>

<template>
    <v-layout>
        <v-app>
            <v-container fluid class="primary fill-height" >
                <v-main>
                    <slot></slot>
                    <login />
                </v-main>
            </v-container>
        </v-app>
    </v-layout>
</template>