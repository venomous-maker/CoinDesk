<script setup lang="ts">
defineProps({
    withSpace: {
        type: Boolean,
        default: true,
    },
});
</script>

<template>
    <div class="bg-black" v-if="withSpace">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <!--        Content here-->
        <slot></slot>

        <br />
    </div>
    <div v-if="!withSpace" class="bg-black">
        <slot></slot>
    </div>
</template>

<style scoped></style>
