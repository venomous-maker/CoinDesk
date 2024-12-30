<template>
    <div class="bg-black">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

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

        <CryptoMarket :options="{ theme: theme }" />
        <!--        <Snaps/>-->
        <Screener
            :options="{

                defaultColumn: 'overview',
                defaultScreen: 'general',
                market: 'bitcoin',
                showToolbar: true,
                colorTheme: 'dark',
                locale: 'en',
            }"
        />
        <br />
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

<style></style>
