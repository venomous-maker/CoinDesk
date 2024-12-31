<template>
    <div class="bg-black">
        <CryptoMarket :options="{ theme: theme }" />
        <div class="trading-container">
            <div class="chart-container">
                <Chart
                    :options="{
                        symbol: 'BITSTAMP:BTCUSD',
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
                        support_host: 'https://www.tradingview.com'
                    }"
                />
            </div>
            <div class="screener-container">
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
                    }"
                />
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
// Lets ingnore build check here to avoid errors
// @ts-ignore
import { Chart, CryptoMarket, Screener, Snaps } from 'vue-tradingview-widgets';

export default defineComponent({
    props: {
        theme: {
            type: String,
            default: 'dark',
        },
    },
    name: 'App',
    components: {
        Chart,
        CryptoMarket,
        Screener,
        Snaps,
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
</style>

