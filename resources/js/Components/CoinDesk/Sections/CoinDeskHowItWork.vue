<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <span class="wt-title-subline font-16 text-gray-dark m-b15"
                    >Three steps bticoin</span
                >
                <h2 class="text-uppercase">How It Work</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
                <p>Get started with cryptocurrency in just a few easy steps!</p>
            </div>
            <!-- TITLE END-->
            <div class="section-content">
                <div class="row d-flex justify-content-center">
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6 m-b30 step-number-block">
                        <div
                            class="wt-icon-box-wraper p-a30 center m-a5 bg-white"
                        >
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell"
                                    ><img
                                        :src="
                                            getImportedAsset(
                                                'images/icon/pick-4.png',
                                            )
                                        "
                                        alt=""
                                /></a>
                            </div>
                            <div class="icon-content">
                                <div class="step-number">1</div>
                                <h4
                                    class="wt-tilte text-uppercase font-weight-500"
                                >
                                    Create your wallet
                                </h4>
                                <p>
                                    Set up a digital wallet to store your crypto
                                    assets. It’s a secure and easy way to manage
                                    your investments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-6 m-b30 step-number-block">
                        <div
                            class="wt-icon-box-wraper p-a30 center bg-secondry m-a5"
                        >
                            <div class="icon-lg m-b20">
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
                            <div class="icon-content text-white">
                                <div class="step-number active">2</div>
                                <h4
                                    class="wt-tilte text-uppercase font-weight-500"
                                >
                                    Make payments
                                </h4>
                                <p>
                                    Use your wallet to send and receive payments
                                    quickly and securely. Cryptocurrency
                                    transactions are fast and efficient.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-6 m-b30 step-number-block">
                        <div
                            class="wt-icon-box-wraper p-a30 center m-a5 bg-white"
                        >
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell"
                                    ><img
                                        :src="
                                            getImportedAsset(
                                                'images/icon/pick-12.png',
                                            )
                                        "
                                        alt=""
                                /></a>
                            </div>
                            <div class="icon-content">
                                <div class="step-number">3</div>
                                <h4
                                    class="wt-tilte text-uppercase font-weight-500"
                                >
                                    Buy or Sell Orders
                                </h4>
                                <p>
                                    Use your wallet to send and receive payments
                                    quickly and securely. Cryptocurrency
                                    transactions are fast and efficient.
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
