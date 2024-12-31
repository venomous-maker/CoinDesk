<script setup lang="ts">
// Lets ingnore build check here to avoid errors
// @ts-ignore
import {
    Chart,
    CryptoMarket,
    Screener,
    Snaps,
    TickerTape,
} from 'vue-tradingview-widgets';

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
