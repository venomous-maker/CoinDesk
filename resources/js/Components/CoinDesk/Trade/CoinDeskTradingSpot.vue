<template>
    <div class="bg-black">
        <SymbolInfo :options="{symbol: symbol, colorTheme: theme, width: '100%'}"></SymbolInfo>
        <div class="trading-container">
            <!-- Stock Market Container -->
            <div class="stock-market-container">
                <StockMarket
                    :options="{
                        largeChartUrl: route('trade.trading'),
                        colorTheme: 'dark',
                        height: 750,
                    }"
                />
            </div>

            <!-- Chart Container -->
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
                            height: 750,
                        }"
                />
                <div style="min-width: 350px">
                    <coin-desk-open-position-spot></coin-desk-open-position-spot>
                </div>

            </div>
            <!-- Fundamental Data -->
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
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
// @ts-ignore
import CoinDeskOpenPosition from '@/Components/CoinDesk/Sections/CoinDeskOpenPosition.vue';
import CoinDeskOpenPositionSpot from '@/Components/CoinDesk/Sections/CoinDeskOpenPositionSpot.vue';
import {
    Chart,
    FundamentalData,
    SymbolInfo,
    StockMarket
} from 'vue-tradingview-widgets';

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
        FundamentalData,
        CoinDeskOpenPosition,
        SymbolInfo,
        StockMarket,
        CoinDeskOpenPositionSpot
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
.chart-container{
    flex: 1 1 48%; /* Takes up ~50% width, with some flexibility */
    min-width: 300px; /* Prevents components from shrinking too much */
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .chart-container {
        flex: 1 1 100%; /* Stacks components vertically */
    }
}

/* Individual containers for each component */
.fundamental-data,
.stock-market-container {
    flex: 1; /* Both components take equal space */
    //max-width: 100px; /* Prevent components from shrinking too much */
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
