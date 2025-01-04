<script lang="ts">
import { defineComponent } from 'vue';
// Lets ingnore build check here to avoid errors
// @ts-ignore
import CoinDeskMainWrapper from '@/Components/CoinDesk/Wrappers/CoinDeskMainWrapper.vue';
import {
    Chart,
    CryptoMarket,
    MiniChart,
    Screener,
    Snaps,
    StockMarket
} from 'vue-tradingview-widgets';
import { route } from 'ziggy-js';

export default defineComponent({
    props: {
        theme: {
            type: String,
            default: 'dark',
        },
    },
    name: 'App',
    components: {
        CoinDeskMainWrapper,
        Chart,
        CryptoMarket,
        Screener,
        Snaps,
        MiniChart,
        StockMarket,
    },
});

</script>

<template>
    <coin-desk-main-wrapper :with-space="false">
        <StockMarket/>
        <MiniChart></MiniChart>
        <Screener
            :options="{
                width: '100%',
                height: 610,
                defaultColumn: 'overview',
                defaultScreen: 'general',
                market: 'bitcoin',
                showToolbar: true,
                colorTheme: 'dark',
                locale: 'en',
                largeChartUrl: route('trade.trading'),
            }"
        />
    </coin-desk-main-wrapper>
</template>

<style scoped></style>
