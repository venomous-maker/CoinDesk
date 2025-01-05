<template>
    <div class="escrow-panel">
        <div class="tw-container tw-mx-auto tw-space-y-3">
            <!-- Escrow Summary -->
            <div class="summary">
                <div class="summary-item">
                    <p>Escrow amount</p>
                    <h2 class="tw-text-3xl tw-text-white">0</h2>
                </div>
                <div class="summary-item">
                    <p>Pre-earnings</p>

                    <h2 class="tw-text-3xl tw-text-white">0</h2>
                </div>
                <div class="summary-item">
                    <p>Total revenue</p>
                    <h2 class="tw-text-3xl tw-text-white">0</h2>
                </div>
                <div class="summary-item">
                    <p>Order Hosting</p>
                    <h2 class="tw-text-3xl tw-text-white">0</h2>
                </div>
            </div>

            <!-- Tabs -->
            <div class="tw-flex tw-gap-8 tw-text-2xl ">
                <button
                    :class="activeTab === 'BTC' ? 'tw-font-bold' : '' "
                    @click="() => (activeTab = 'BTC')"
                >
                    BTC
                </button>
                <button
                    :class="activeTab === 'ETH' ? 'tw-font-bold' : '' "
                    @click="changeTab('ETH')"
                >
                    ETH
                </button>
                <button
                    :class="activeTab === 'USDC' ? 'tw-font-bold' : '' "
                    @click="activeTab = 'USDC'"
                >
                    USDC
                </button>
            </div>

            <!-- Product Table -->
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Name of product</th>
                        <th>Cyclicality</th>
                        <th>Prices</th>
                        <th>Daily Return</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(product, index) in products"
                        :key="index"
                        class="hover:tw-bg-sky-800 "
                    >
                        <td>
                            <img
                                :src="product.icon"
                                alt="icon"
                                class="product-icon"
                            />
                            {{ product.name }}
                        </td>
                        <td>{{ product.cyclicality }}</td>
                        <td>{{ product.prices }}</td>
                        <td>{{ product.dailyReturn }}</td>
                        <td>
                            <button class="rent-button">Rent Now</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Bottom Tabs -->
            <div class="bottom-tabs">
                <button
                    :class="{ active: bottomTab === 'Buy' }"
                    @click="bottomTab = 'Buy'"
                >
                    Buy
                </button>
                <button
                    :class="{ active: bottomTab === 'Redeem' }"
                    @click="bottomTab = 'Redeem'"
                >
                    Redeem
                </button>
                <button
                    :class="{ active: bottomTab === 'Interest' }"
                    @click="bottomTab = 'Interest'"
                >
                    Interest
                </button>
            </div>

            <!-- Bottom Table -->
            <table class="bottom-table">
                <thead>
                    <tr>
                        <th>Name of product</th>
                        <th>Time of purchase</th>
                        <th>Closing time</th>
                        <th>Payment amount</th>
                        <th>Total revenue</th>
                        <th>Daily Profit</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" class="no-data">No data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue';

const activeTab = ref('BTC');
const bottomTab = ref('Buy');
const products = ref([
    {
        icon: 'https://img.pikbest.com/png-images/20241025/cute-robot-clipart-illustration-png_11003024.png!sw800', // Replace with actual path to icon
        name: `${activeTab.value} Robots (VIP)`,
        cyclicality: 'Indefinite',
        prices: '100.00 ~ 10.00K USDT',
        dailyReturn: '1.7%',
    },
    {
        icon: 'https://img.pikbest.com/png-images/20241025/cute-robot-clipart-illustration-png_11003024.png!sw800', // Replace with actual path to icon
        name: `${activeTab.value} Robots (VIP)`,
        cyclicality: 'Indefinite',
        prices: '100.00 ~ 10.00K USDT',
        dailyReturn: '1.7%',
    },
    {
        icon: 'https://img.pikbest.com/png-images/20241025/cute-robot-clipart-illustration-png_11003024.png!sw800', // Replace with actual path to icon
        name: `${activeTab.value} Robots (VIP)`,
        cyclicality: 'Indefinite',
        prices: '100.00 ~ 10.00K USDT',
        dailyReturn: '1.7%',
    },
    {
        icon: 'https://img.pikbest.com/png-images/20241025/cute-robot-clipart-illustration-png_11003024.png!sw800', // Replace with actual path to icon
        name: `${activeTab.value} Robots (VIP)`,
        cyclicality: 'Indefinite',
        prices: '100.00 ~ 10.00K USDT',
        dailyReturn: '1.7%',
    },
]);
const changeTab = (tab: string) => {
    activeTab.value = tab;
};
</script>

<style scoped>
.escrow-panel {
    background-color: #000;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    font-family: Arial, sans-serif;
}
.summary {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.summary-item {
    text-align: center;
}
.tabs {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}
.tabs button {
    background: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}
.tabs button.active {
    background: #1a1a1a;
}
.product-table {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
}
.product-table th,
.product-table td {
    padding: 30px;
    text-align: left;
    border-bottom: 1px solid #444;
}
.product-icon {
    width: 20px;
    margin-right: 10px;
}
.rent-button {
    background: #00c2ff;
    color: #fff;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
}
.bottom-tabs {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}
.bottom-tabs button {
    background: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}
.bottom-tabs button.active {
    background: #1a1a1a;
}
.bottom-table {
    width: 100%;
    border-collapse: collapse;
}
.bottom-table th,
.bottom-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #444;
}
.no-data {
    text-align: center;
    color: #777;
}
</style>
