<script lang="ts">
import { defineComponent } from 'vue';
// Lets ingnore build check here to avoid errors
// @ts-ignore
import { Chart, CryptoMarket, Screener, Snaps, MiniChart} from 'vue-tradingview-widgets';
import CoinDeskMainWrapper from '@/Components/CoinDesk/Wrappers/CoinDeskMainWrapper.vue';

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
    },
});
</script>

<template>
    <coin-desk-main-wrapper :with-space="false">
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
                    }"
        />
    </coin-desk-main-wrapper>
</template>

<style scoped>

</style>
