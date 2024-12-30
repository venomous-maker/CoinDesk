<template>
    <div class="bg-black">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />


        <Chart />
        <CryptoMarket />
<!--        <Snaps/>-->
        <Screener/>
        <br />
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { Chart, CryptoMarket, Screener, Snaps } from 'vue-tradingview-widgets';

export default defineComponent({
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
