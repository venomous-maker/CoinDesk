<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <span class="wt-title-subline font-16 text-gray-dark m-b15"
                    >Buy and Sell Bitcoin using Mavexcrypt</span
                >
                <h2 class="text-uppercase">Why Choose Mavexcrypt</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
                <p>
                    Bitcoin offers a decentralized and transparent financial
                    system, enabling secure and seamless transactions worldwide
                    with no intermediaries.
                </p>
            </div>
            <!-- TITLE END-->
            <div class="section-content">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div
                            class="wt-icon-box-wraper p-a30 center m-a5 bg-white"
                        >
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell"
                                    ><img
                                        :src="
                                            getImportedAsset(
                                                'images/icon/pick-29.png',
                                            )
                                        "
                                        alt=""
                                /></a>
                            </div>
                            <div class="icon-content">
                                <h4
                                    class="wt-tilte text-uppercase font-weight-500"
                                >
                                    Instant Trading
                                </h4>
                                <p>
                                    Experience lightning-fast trading with
                                    Bitcoin, ensuring you never miss an
                                    opportunity in the ever-changing crypto
                                    market.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div
                            class="wt-icon-box-wraper p-a30 center m-a5 bg-white"
                        >
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell"
                                    ><img
                                        :src="
                                            getImportedAsset(
                                                'images/icon/pick-28.png',
                                            )
                                        "
                                        alt=""
                                /></a>
                            </div>
                            <div class="icon-content">
                                <h4
                                    class="wt-tilte text-uppercase font-weight-500"
                                >
                                    Recurring Buying
                                </h4>
                                <p>
                                    Automate your Bitcoin investments with
                                    recurring buying options, making it easier
                                    to grow your portfolio over time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div
                            class="wt-icon-box-wraper p-a30 center m-a5 bg-white"
                        >
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell"
                                    ><img
                                        :src="
                                            getImportedAsset(
                                                'images/icon/pick-17.png',
                                            )
                                        "
                                        alt=""
                                /></a>
                            </div>
                            <div class="icon-content">
                                <h4
                                    class="wt-tilte text-uppercase font-weight-500"
                                >
                                    Safe and Secure
                                </h4>
                                <p>
                                    With advanced encryption and decentralized
                                    architecture, Bitcoin transactions are
                                    highly secure and resistant to fraud.
                                </p>
                            </div>
                        </div>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
