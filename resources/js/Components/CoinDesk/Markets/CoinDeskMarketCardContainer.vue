<template>
    <div class="d-flex justify-space-between">
        <v-card
            v-for="(item, index) in cryptoData"
            :key="index"
            class="mx-2"
            flat
            tile
            outlined
        >
            <v-card-title class="d-flex justify-space-between">
                <div>
                    <div>{{ item.pair }}</div>
                    <div :class="item.change > 0 ? 'text-success' : 'text-error'">
                        {{ item.change }}%
                    </div>
                </div>
                <v-spacer></v-spacer>
                <div>
                    <v-icon>mdi-chart-line</v-icon>
                </div>
            </v-card-title>
            <v-card-text>
                <div class="text-h5">{{ item.price }}</div>
                <div class="text-caption">≈ $ {{ item.usdEquivalent }}</div>
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
export default {
    data() {
        return {
            cryptoData: [
                {
                    pair: "BTC/USDT",
                    change: 0.15,
                    price: "98363.64",
                    usdEquivalent: "98363.64",
                },
                {
                    pair: "ETH/USDT",
                    change: -0.51,
                    price: "3638.69",
                    usdEquivalent: "3638.69",
                },
                {
                    pair: "XRP/USDT",
                    change: -0.75,
                    price: "2.4011",
                    usdEquivalent: "2.4",
                },
                {
                    pair: "TRX/USDT",
                    change: -2.60,
                    price: "0.2627",
                    usdEquivalent: "0.26",
                },
            ],
        };
    },
};
</script>

<style scoped>
.text-success {
    color: green;
}
.text-error {
    color: red;
}
</style>
