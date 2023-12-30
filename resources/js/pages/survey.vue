<template>
    <layout> survey </layout>
</template>

<script>
import Layout from "../components/layout.vue";
export default {
    props: ["survey"],
    components: {
        Layout,
    },

    mounted() {
        console.log(this.survey);
    },
};
</script>
