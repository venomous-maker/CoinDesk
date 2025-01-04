<template>
    <div class="tw-min-h-screen tw-bg-black tw-p-6 tw-text-gray-300">
        <!-- Top Metrics -->
        <div class="tw-mb-8 tw-grid tw-grid-cols-3 tw-gap-8">
            <div>
                <div class="tw-mb-2 tw-flex tw-items-center tw-gap-2">
                    <span>Escrow amount</span>
                    <InfoIcon class="tw-h-4 tw-w-4 tw-text-gray-500" />
                </div>
                <div class="tw-text-3xl tw-text-white">0</div>
                <div class="tw-mt-1 tw-text-sm tw-text-gray-500">Pre-earnings</div>
                <div class="tw-text-xl tw-text-white">0</div>
            </div>
            <div>
                <div class="tw-text-sm tw-text-gray-500">Total revenue</div>
                <div class="tw-text-xl tw-text-white">0</div>
            </div>
            <div>
                <div class="tw-text-sm tw-text-gray-500">Order Holding</div>
                <div class="tw-text-xl tw-text-white">0</div>
            </div>
        </div>

        <!-- Currency Tabs -->
        <div class="tw-mb-8 tw-flex tw-gap-4">
            <button
                v-for="currency in ['BTC', 'ETH', 'USDC']"
                :key="currency"
                :class="[
                    'tw-rounded-lg tw-px-4 tw-py-2 tw-font-medium',
                    selectedCurrency === currency
                        ? 'tw-bg-gray-800 tw-text-white'
                        : 'tw-text-gray-500',
                ]"
                @click="selectedCurrency = currency"
            >
                {{ currency }}
            </button>
        </div>

        <!-- Products Table -->
        <div class="tw-mb-8">
            <div class="tw-grid tw-grid-cols-5 tw-gap-4 tw-px-4 tw-py-2 tw-text-sm tw-text-gray-500">
                <div>Name of product</div>
                <div>Cyclicality</div>
                <div>Prices</div>
                <div>Daily Return</div>
                <div></div>
            </div>

            <div
                v-for="product in products"
                :key="product.id"
                class="tw-grid tw-grid-cols-5 tw-items-center tw-gap-4 tw-border-t tw-border-gray-800 tw-px-4 tw-py-4"
            >
                <div class="tw-flex tw-items-center tw-gap-2">
                    <RobotIcon class="tw-h-6 tw-w-6 tw-text-gray-400" />
                    <span>BTC Robots</span>
                    <div
                        v-if="product.vip"
                        class="tw-rounded bg-yellow-900/20 tw-px-2 tw-py-0.5 tw-text-xs tw-text-yellow-600"
                    >
                        VIP
                    </div>
                </div>
                <div>Indefinite</div>
                <div>{{ product.priceRange }} USDT</div>
                <div>{{ product.dailyReturn }}%</div>
                <div>
                    <button
                        class="tw-rounded-lg bg-cyan-500 tw-px-4 tw-py-1.5 tw-text-sm tw-font-medium tw-text-black hover:bg-cyan-600"
                    >
                        Rent Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Bottom Tabs -->
        <div class="tw-mb-6 tw-border-b tw-border-gray-800">
            <div class="tw-flex tw-gap-8">
                <button
                    v-for="tab in ['Buy', 'Redeem', 'Interest']"
                    :key="tab"
                    :class="[
                        'tw-border-b-2 tw-px-4 tw-py-2',
                        selectedTab === tab
                            ? 'border-cyan-500 tw-text-white'
                            : 'tw-border-transparent tw-text-gray-500',
                    ]"
                    @click="selectedTab = tab"
                >
                    {{ tab }}
                </button>
            </div>
        </div>

        <!-- Transactions Table -->
        <div class="tw-grid tw-grid-cols-7 tw-gap-4 tw-px-4 tw-py-2 tw-text-sm tw-text-gray-500">
            <div>Name of product</div>
            <div>Time of purchase</div>
            <div>Closing time</div>
            <div>Payment amount</div>
            <div>Total revenue</div>
            <div>Daily Profit</div>
            <div>Status</div>
        </div>
        <div class="tw-py-8 tw-text-center tw-text-gray-500">No data</div>
    </div>
</template>

<script setup>
import { InfoIcon } from 'lucide-vue-next';
import { ref, defineComponent, h } from 'vue';

const RobotIcon = defineComponent({
    name: 'RobotIcon',
    render: () =>
        h(
            'svg',
            {
                xmlns: 'http://www.w3.org/2000/svg',
                viewBox: '0 0 24 24',
                fill: 'none',
                stroke: 'currentColor',
                class: 'tw-w-6 tw-h-6',
            },
            [
                h('path', {
                    d: 'M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z',
                    strokeLinecap: 'round',
                    strokeLinejoin: 'round',
                }),
                h('rect', {
                    x: '4',
                    y: '10',
                    width: '16',
                    height: '12',
                    rx: '2',
                    strokeLinecap: 'round',
                    strokeLinejoin: 'round',
                }),
            ],
        ),
});

const selectedCurrency = ref('BTC');
const selectedTab = ref('Buy');

const products = ref([
    { id: 1, priceRange: '100.00 ~ 10.00K', dailyReturn: 1.7, vip: false },
    { id: 2, priceRange: '10.00K ~ 100.00K', dailyReturn: 2.2, vip: true },
    { id: 3, priceRange: '100.00K ~ 1.00M', dailyReturn: 2.7, vip: true },
    { id: 4, priceRange: '1.00M ~ 10.00M', dailyReturn: 3.2, vip: true },
]);
</script>
