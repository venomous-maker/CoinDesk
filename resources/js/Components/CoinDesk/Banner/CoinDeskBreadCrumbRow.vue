<script setup lang="ts">
defineProps({
    pageTitle: {
        type: String,
        default: 'Unknown Page Title',
    },
});
</script>

<template>
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li>
                    <a href="javascript:void(0);"
                        ><i class="fa fa-home"></i> Home</a
                    >
                </li>
                <li>{{ pageTitle }}</li>
            </ul>
        </div>
    </div>
</template>

<style scoped></style>
