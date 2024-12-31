<script lang="ts">
import { defineComponent} from 'vue';
// Lets ingnore build check here to avoid errors
// @ts-ignore
import {
    Chart,
    CryptoMarket,
    Screener,
    Snaps,
    TickerTape,
} from 'vue-tradingview-widgets';

export default defineComponent({
    name: 'CoinDeskTickerTapeMarqueeScroll',
    components: {
        CryptoMarket,
        Chart,
        Screener,
        Snaps,
        TickerTape,
    },
    data() {
        return {};
    },
});
</script>

<template>
    <div>
        <TickerTape
            :options="{
                symbols: [
                    { proName: 'FOREXCOM:SPXUSD', title: 'S&P 500 Index' },
                    { proName: 'FOREXCOM:NSXUSD', title: 'US 100 Cash CFD' },
                    { proName: 'FX_IDC:EURUSD', title: 'EUR to USD' },
                    { proName: 'BITSTAMP:BTCUSD', title: 'Bitcoin' },
                    { proName: 'BITSTAMP:ETHUSD', title: 'Ethereum' },
                    { proName: 'COINBASE:BTCUSD', description: 'Bitcoin USD' },
                ],
                showSymbolLogo: true,
                isTransparent: false,
                displayMode: 'adaptive',
                colorTheme: 'dark',
                locale: 'en',
            }"
        />
    </div>
</template>

<style scoped></style>
