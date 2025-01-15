<script setup lang="ts">
import { getImportedAsset } from '@/utils/assets';
</script>

<template>
    <div
        class="section-full p-t80 p-b50 bg-full-height graph-slide-image bg-repeat-x"
        :style="{
            backgroundImage:
                'url(' + getImportedAsset('images/background/bg-1.jpg') + ')',
        }"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 m-b30 clearfix">
                    <div class="bit-converter p-a40 bg-white">
                        <div class="wt-box">
                            <h2 class="text-uppercase m-t0 site-text-primary">
                                Currency convertor
                            </h2>
                            <p>
                                Stay updated with live cryptocurrency exchange
                                rates!
                            </p>
                        </div>
                        <div class="currency-calculator sp-one">
                            <div style="width: 100%">
                                <crypto-converter-widget
                                    live
                                    shadow
                                    symbol
                                    fiat="united-states-dollar"
                                    crypto="bitcoin"
                                    amount="1"
                                    border-radius="0.60rem"
                                    background-color="#171f2c"
                                    decimal-places="2"
                                    ><a rel="noopener"
                                        >Converter Widget</a
                                    ></crypto-converter-widget
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 m-b30">
                    <div class="wt-box graph-part-right text-white">
                        <strong class="text-uppercase title-first"
                            >cryptocurrency</strong
                        >
                        <span
                            class="text-uppercase site-text-primary display-block title-second"
                            >Start selling, buying and trading</span
                        >
                        <p>
                            <strong
                                >Cryptocurrency has been revolutionizing the
                                financial world since its inception. Whether
                                you're looking to buy, sell, or trade, it's easy
                                to get started. Dive into the world of crypto
                                and explore the opportunities it offers. Don't
                                miss out on the future of finance!</strong
                            >
                        </p>
                        <ul class="list-check-circle primary">
                            <li>Simplified Process for Beginners</li>
                            <li>Secure and Fast Transactions</li>
                            <li>Fast and Efficient</li>
                            <li>
                                A Long-Standing Tradition in Digital Currency
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
