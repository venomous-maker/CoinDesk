<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <div
        class="section-full p-t80 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat"
        data-stellar-background-ratio="0.5"
        :style="{
            backgroundImage:
                'url(' + getImportedAsset('images/background/bg-9.jpg') + ')',
        }"
    >
        <div class="overlay-main bg-secondry opacity-05"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 m-b30">
                    <div class="rocket-pic">
                        <div class="rocket-animation">
                            <img
                                :src="getImportedAsset('images/rocket.png')"
                                alt=""
                                class="floating"
                            />
                            <div class="rocket-fire">
                                <img
                                    :src="getImportedAsset('images/fire.png')"
                                    alt=""
                                    class="floating"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 m-b30">
                    <div class="awesome-counter text-right text-white">
                        <h3 class="font-24">The Cryptocurrency</h3>
                        <h2 class="font-60 font-weight-600">
                            <span class="site-text-primary">
                                AWESOME FACTS</span
                            >
                        </h2>
                        <p>
                            Discover the incredible potential of cryptocurrency.
                            From decentralized networks to secure transactions,
                            crypto offers unparalleled innovation in the
                            financial world. It’s reshaping how we think about
                            money, making global transactions faster, safer, and
                            more efficient than ever before.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks m-tb10 text-white">
                                <div class="status-value text-right">
                                    <span class="counter">1150</span>
                                    <i class="fa fa-building font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-right">
                                    PROJECT COMPLETED
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks m-tb10 text-white">
                                <div class="status-value text-right">
                                    <span class="counter">5223</span>
                                    <i class="fa fa-users font-26 m-l15"></i>
                                </div>
                                <h6
                                    class="text-uppercase text-right text-white"
                                >
                                    HAPPY CLIENTS
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks m-tb10 text-white">
                                <div class="status-value text-right">
                                    <span class="counter">4522</span>
                                    <i
                                        class="fa fa-user-plus font-26 m-l15"
                                    ></i>
                                </div>
                                <h6
                                    class="text-uppercase text-right text-white"
                                >
                                    WORKERS EMPLOYED
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
