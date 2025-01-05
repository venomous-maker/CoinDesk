<script lang="ts">
import { defineComponent } from 'vue';
// Lets ignore build check here to avoid errors
// @ts-ignore
import CoinDeskMarketCardContainer from '@/Components/CoinDesk/Markets/CoinDeskMarketCardContainer.vue';
import CoinDeskMainWrapper from '@/Components/CoinDesk/Wrappers/CoinDeskMainWrapper.vue';
import {
    Chart,
    CryptoMarket,
    MarketData,
    MarketOverview,
    MiniChart,
    Screener,
    SingleTicker,
    Snaps,
    StockMarket,
    SymbolOverview,
    TechnicalAnalysis,
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
        CoinDeskMarketCardContainer,
        CoinDeskMainWrapper,
        Chart,
        CryptoMarket,
        Screener,
        Snaps,
        MiniChart,
        StockMarket,
        TechnicalAnalysis,
        SingleTicker,
        SymbolOverview,
        MarketOverview,
        MarketData,
    },
});
</script>

<template>
    <coin-desk-main-wrapper :with-space="false">
        <coin-desk-market-card-container />
        <div class="widget-container">
            <MiniChart
                :options="{
                    colorTheme: 'dark',
                    symbol: 'FX:EURUSD',
                    largeChartUrl: route('trade.trading'),
                }"
            />
            <!--            <TechnicalAnalysis :options="{ colorTheme: 'dark', height: 420, symbol: 'FX:EURUSD', largeChartUrl: route('trade.trading'), }" />-->
<!--            <SingleTicker-->
<!--                :options="{-->
<!--                    colorTheme: 'dark',-->
<!--                    height: 420,-->
<!--                    symbol: 'FX:EURUSD',-->
<!--                    largeChartUrl: route('trade.trading'),-->
<!--                }"-->
<!--            />-->
            <!--            <SymbolOverview :options="{ colorTheme: 'dark', width: '80%', height: 420, largeChartUrl: route('trade.trading'),}" />-->
        </div>
        <!--        <CryptoMarket-->
        <!--            :options="{-->
        <!--                colorTheme: 'dark',-->
        <!--                width: '100%',-->
        <!--                height: 610,-->
        <!--                market: 'bitcoin',-->
        <!--                largeChartUrl: route('trade.trading'),-->
        <!--            }"-->
        <!--        />-->
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

<style scoped>
.widget-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1px; /* Adjust spacing between widgets as needed */
}

.widget-container > * {
    flex: 1 1 24%; /* Make widgets take up 45% of the container width */
    min-width: 300px; /* Ensure widgets don't get too small */
}

@media (max-width: 768px) {
    .widget-container > * {
        flex: 1 1 100%; /* On smaller screens, make widgets stack vertically */
    }
}
</style>
