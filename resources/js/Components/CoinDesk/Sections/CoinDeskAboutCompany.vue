<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <div
        class="section-full home-about-section p-t80 p-b0 bg-bottom-right bg-no-repeat"
        :style="{
            backgroundImage:
                'url(' +
                getImportedAsset('images/background/bg-coin.png') +
                ')',
        }"
    >
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-end">
                <div class="col-lg-6 col-md-12">
                    <div class="wt-box text-right">
                        <img
                            :src="
                                getImportedAsset(
                                    'images/background/bg-laptop.png',
                                )
                            "
                            alt=""
                        />
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 m-b30">
                    <div class="wt-right-part">
                        <!-- TITLE START -->
                        <div class="section-head text-left">
                            <span
                                class="wt-title-subline font-16 text-gray-dark m-b15"
                                >What is bitcoin</span
                            >
                            <h2 class="text-uppercase">New Currency Bitcoin</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator site-bg-primary"></div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <div class="section-content m-b60">
                            <div class="wt-box">
                                <p>
                                    <strong
                                        >Lorem Ipsum has been the industry's
                                        standard dummy text ever since the when.
                                        it to make a tyLorem Ipsum is simply
                                        dummy text of the printing and
                                        typesetting indust
                                    </strong>
                                </p>
                                <p>
                                    when an unknown printer took a galley of
                                    type and scrambled it to make a tyLorem
                                    Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer
                                    took a galley of type and scrambled.
                                </p>
                                <a
                                    href="#"
                                    class="site-button text-uppercase m-r15"
                                    >Read More</a
                                >
                                <a
                                    href="#"
                                    class="site-button-secondry text-uppercase"
                                    >Contact us</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
