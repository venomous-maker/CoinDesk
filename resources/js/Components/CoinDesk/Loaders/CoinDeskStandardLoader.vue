<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="cssload-container">
                <div class="cssload-dot site-bg-primary">
                    <img
                        :src="
                            getImportedAsset('images/logo/coindesk_black.png')
                        "
                    />
                </div>
                <div class="step" id="cssload-s1"></div>
                <div class="step" id="cssload-s2"></div>
                <div class="step" id="cssload-s3"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->
</template>

<style scoped></style>
