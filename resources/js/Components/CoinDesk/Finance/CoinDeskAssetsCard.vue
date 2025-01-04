<script lang="ts" setup>
import { EyeIcon, RefreshCwIcon, SplitIcon } from 'lucide-vue-next';
import { ref } from 'vue';
const assests = ref([
    {
        title: 'Exchange Assets',
        profit: 0,
    },
    {
        title: 'Trade Assets',
        profit: 0,
    },
    {
        title: 'Perpertual Assets',
        profit: 0,
    },
    {
        title: 'Finance Assets',
        profit: 0,
    },
]);
</script>
<template>
    <div class="tw-min-h-screen tw-bg-black tw-p-6">
        <div
            class="tw-rounded-lg tw-border tw-border-gray-500 tw-bg-black/50 tw-p-6"
        >
            <div class="tw-gap-2 tw-text-white tw-flex tw-items-center">
                <h2 class="tw-text-lg tw-text-white">Total Assets</h2>
                <EyeIcon class="tw-h-5 tw-w-5" />
            </div>

            <div class="tw-mt-4">
                <h1 class="tw-text-4xl tw-font-bold tw-text-white">0.00</h1>
                <p class="tw-text-gray-500">≈$ 0</p>
            </div>

            <div class="tw-gap-3 tw-mt-4 tw-flex">
                <button
                    class="tw-rounded-md tw-bg-gray-800 tw-px-4 tw-py-2 tw-text-white hover:tw-bg-gray-700"
                >
                    Withdrawal
                </button>
                <button
                    class="tw-rounded-md tw-border tw-border-cyan-500 tw-px-4 tw-py-2 tw-text-cyan-500 hover:tw-bg-cyan-500/10"
                >
                    Deposit
                </button>
                <button
                    class="tw-rounded-md tw-bg-cyan-500 tw-px-4 tw-py-2 tw-text-black hover:tw-bg-cyan-400"
                >
                    Transfer
                </button>
                <button
                    class="tw-rounded-md tw-bg-gray-800 tw-px-4 tw-py-2 tw-text-white hover:tw-bg-gray-700"
                >
                    Swap
                </button>
            </div>

            <div class="tw-gap-2 tw-mt-4 tw-flex tw-items-center">
                <p class="tw-text-gray-400">Daily Profit: 0.00</p>
                <RefreshCwIcon class="tw-h-4 tw-w-4 tw-text-gray-400" />
            </div>

            <div class="tw-mt-4">
                <div class="tw-gap-2 tw-flex tw-items-center">
                    <span class="tw-text-white"
                        >Current Account : Real Account</span
                    >
                    <SplitIcon class="tw-h-5 tw-w-5 tw-text-cyan-500" />
                </div>
                <p class="tw-text-sm tw-text-gray-500 tw-mt-1">
                    Real account is equivalent to actual account and can be used
                    for trading and withdrawals.
                </p>
            </div>
        </div>

        <div class="tw-grid-cols-1 tw-gap-6 md:tw-grid-cols-2 tw-mt-6 tw-grid">
            <div
                v-for="asset in assests"
                :key="asset.title"
                class="tw-rounded-lg tw-bg-black/50 tw-border tw-border-gray-500 tw-p-6"
            >
                <h3 class="tw-text-lg tw-text-gray-300">{{ asset.title }}</h3>
                <div class="tw-mt-4">
                    <p class="tw-text-3xl tw-font-bold tw-text-white">0.00</p>
                    <p class="tw-text-gray-500">≈$ 0</p>
                </div>
                <div class="tw-gap-2 tw-mt-4 tw-flex tw-items-center">
                    <p class="tw-text-gray-400">Daily Profit: 0.00</p>
                    <RefreshCwIcon class="tw-h-4 tw-w-4 tw-text-gray-400" />
                </div>
            </div>
        </div>
    </div>
</template>
