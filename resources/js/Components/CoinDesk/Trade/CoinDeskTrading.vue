<template>
    <div class="bg-black">
        <CryptoMarket :options="{ theme: theme }" />
        <div class="trading-container">
            <div class="chart-container">
                <Chart
                    :options="{
                        symbol: symbol,
                        timezone: 'Pacific/Chatham',
                        theme: 'dark',
                        style: 1,
                        locale: 'en',
                        backgroundColor: 'rgba(0, 0, 0, 1)',
                        withdateranges: true,
                        range: 'ALL',
                        hide_side_toolbar: false,
                        allow_symbol_change: true,
                        details: true,
                        calendar: true,
                        show_popup_button: true,
                        popup_width: '1000',
                        popup_height: '650',
                        support_host: 'https://www.tradingview.com',
                        height: 750,
                    }"
                />
            </div>
            <div class="screener-container">
                <!-- Fundamental Data Component -->
                <div class="fundamental-data">
                    <FundamentalData
                        :options="{
                    largeChartUrl: route('trade.trading'),
                    colorTheme: 'dark',
                    symbol: symbol,
                    height: 750,
                    width: 400,
                }"
                    />
                </div>

                <!-- Coin Desk Open Position Component -->
                <div class="coin-desk-open-position">
                    <div style="width: 610px; height: 750px;">
                    <coin-desk-open-position />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
// Lets ingnore build check here to avoid errors
// @ts-ignore
import {
    Chart,
    CryptoMarket,
    FundamentalData,
    Screener,
    Snaps,
} from 'vue-tradingview-widgets';
import CoinDeskOpenPosition from '@/Components/CoinDesk/Sections/CoinDeskOpenPosition.vue';

export default defineComponent({
    props: {
        theme: {
            type: String,
            default: 'dark',
        },
        symbol: {
            type: String,
            default: 'BITSTAMP:BTCUSD',
        },
    },
    name: 'App',
    components: {
        Chart,
        CryptoMarket,
        Screener,
        Snaps,
        FundamentalData,
        CoinDeskOpenPosition,
    },
});
</script>

<style scoped>
/* Flex container for Chart and Screener */
.trading-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 16px; /* Adds spacing between components */
    margin: 20px 0; /* Adds margin for better layout */
}

/* Individual containers */
.chart-container,
.screener-container {
    flex: 1 1 48%; /* Takes up ~50% width, with some flexibility */
    min-width: 300px; /* Prevents components from shrinking too much */
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .chart-container,
    .screener-container {
        flex: 1 1 100%; /* Stacks components vertically */
    }
}

.screener-container {
    display: flex;
    flex-wrap: nowrap; /* Keep components side by side unless screen size is too small */
    gap: 0px; /* Add spacing between FundamentalData and CoinDeskOpenPosition */
    justify-content: space-between; /* Distribute space evenly */
    align-items: flex-start; /* Align components at the top */
}

/* Individual containers for each component */
.fundamental-data,
.coin-desk-open-position {
    flex: 1; /* Both components take equal space */
    min-width: 300px; /* Prevent components from shrinking too much */
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .screener-container {
        flex-wrap: wrap; /* Allow wrapping */
    }

    .fundamental-data,
    .coin-desk-open-position {
        flex: 1 1 100%; /* Stack components vertically */
        min-width: 100%; /* Take full width */
    }
}
</style>
