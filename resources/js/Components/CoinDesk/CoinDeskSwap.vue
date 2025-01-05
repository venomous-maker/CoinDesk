<script lang="ts" setup>
import { ArrowLeftIcon } from 'lucide-vue-next';
import { defineEmits, defineProps, ref } from 'vue';

interface Props {
    isOpen: boolean;
}

const props = defineProps<Props>();
const emit = defineEmits(['update:isOpen', 'close']);

// State
const isDropdownOpen = ref(false);
const isSwapDropDown = ref(false);
// Types
interface Currency {
    id: string;
    name: string;
    icon: string;
}

// Data
const currencies: Currency[] = [
    {
        id: 'usdt',
        name: 'USDT',
        icon: 'https://static-00.iconduck.com/assets.00/tether-cryptocurrency-icon-2048x2048-dp13oydi.png',
    },
    {
        id: 'eth',
        name: 'ETH',
        icon: 'https://cryptologos.cc/logos/ethereum-eth-logo.png',
    },
    {
        id: 'btc',
        name: 'BTC',
        icon: 'https://cryptologos.cc/logos/bitcoin-btc-logo.png',
    },
    {
        id: 'usdc',
        name: 'USDC',
        icon: 'https://cryptologos.cc/logos/usd-coin-usdc-logo.png',
    },
    {
        id: 'dai',
        name: 'DAI',
        icon: 'https://cryptologos.cc/logos/multi-collateral-dai-dai-logo.png',
    },
    {
        id: 'shib',
        name: 'SHIB',
        icon: 'https://cryptologos.cc/logos/shiba-inu-shib-logo.png',
    },
    {
        id: 'xrp',
        name: 'XRP',
        icon: 'https://cryptologos.cc/logos/xrp-xrp-logo.png',
    },
];
const selectedCurrency = ref(currencies[0]);
const selectedCurrencySwapTo = ref(currencies[0]);

// Methods
const closeModal = () => {
    emit('update:isOpen', false);
    emit('close');
};

// Methods
const selectCurrency = (currency: Currency) => {
    selectedCurrency.value = currency;
    isDropdownOpen.value = false;
};

const selectSwapToCurrency = (currency: Currency) => {
    selectedCurrencySwapTo.value = currency;
    isSwapDropDown.value = false;
};
</script>
<template>
    <Teleport to="body">
        <Transition name="modal">
            <div
                v-if="isOpen"
                class="tw-fixed tw-inset-0 tw-z-50 tw-flex tw-items-center tw-justify-center tw-overflow-y-auto tw-bg-black/80"
            >
                <div
                    class="tw-w-full tw-max-w-2xl tw-overflow-hidden tw-rounded-lg tw-bg-gray-900"
                >
                    <!-- Header -->
                    <div
                        class="tw-flex tw-items-center tw-border-b tw-border-gray-800 tw-p-4"
                    >
                        <button
                            @click="closeModal"
                            class="tw-text-gray-400 hover:tw-text-white"
                        >
                            <ArrowLeftIcon class="tw-h-6 tw-w-6" />
                        </button>
                        <h2
                            class="tw-ml-4 tw-text-xl tw-font-semibold tw-text-white"
                        >
                            Swap Modal
                        </h2>
                    </div>

                    <!-- Content -->
                    <div
                        class="tw-max-h-[calc(100vh-10rem)] tw-overflow-y-auto tw-p-6"
                    >
                        <!-- Currency Selector -->
                        <div class="tw-relative tw-mb-6">
                            <label>From</label>
                            <button
                                @click="isDropdownOpen = !isDropdownOpen"
                                class="tw-flex tw-w-full tw-items-center tw-justify-between tw-rounded-lg tw-bg-gray-800 tw-p-3 tw-text-white"
                            >
                                <div class="tw-flex tw-items-center">
                                    <img
                                        :src="selectedCurrency.icon"
                                        class="tw-h-6 tw-w-6 tw-rounded-full"
                                        :alt="selectedCurrency.name"
                                    />
                                    <span class="tw-ml-2">{{
                                        selectedCurrency.name
                                    }}</span>
                                </div>
                                <ChevronDownIcon
                                    class="tw-h-5 tw-w-5 tw-text-gray-400"
                                />
                            </button>
                            <!-- Dropdown -->
                            <div
                                v-if="isDropdownOpen"
                                class="tw-absolute tw-left-0 tw-top-full tw-z-10 tw-mt-2 tw-w-full tw-rounded-lg tw-bg-gray-800 tw-shadow-xl"
                            >
                                <div
                                    v-for="currency in currencies"
                                    :key="currency.id"
                                    @click="selectCurrency(currency)"
                                    class="tw-flex tw-cursor-pointer tw-items-center tw-p-3 hover:tw-bg-gray-700"
                                >
                                    <img
                                        :src="currency.icon"
                                        class="tw-h-6 tw-w-6 tw-rounded-full"
                                        :alt="currency.name"
                                    />
                                    <span class="tw-ml-2 tw-text-white">{{
                                        currency.name
                                    }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Currency Selector -->
                        <div class="tw-relative tw-mb-6">
                            <label>To</label>
                            <button
                                @click="isSwapDropDown = !isSwapDropDown"
                                class="tw-flex tw-w-full tw-items-center tw-justify-between tw-rounded-lg tw-bg-gray-800 tw-p-3 tw-text-white"
                            >
                                <div class="tw-flex tw-items-center">
                                    <img
                                        :src="selectedCurrencySwapTo.icon"
                                        class="tw-h-6 tw-w-6 tw-rounded-full"
                                        :alt="selectedCurrencySwapTo.name"
                                    />
                                    <span class="tw-ml-2">{{
                                        selectedCurrencySwapTo.name
                                    }}</span>
                                </div>
                                <ChevronDownIcon
                                    class="tw-h-5 tw-w-5 tw-text-gray-400"
                                />
                            </button>

                            <!-- Dropdown -->
                            <div
                                v-if="isSwapDropDown"
                                class="tw-absolute tw-left-0 tw-top-full tw-z-10 tw-mt-2 tw-w-full tw-rounded-lg tw-bg-gray-800 tw-shadow-xl"
                            >
                                <div
                                    v-for="currency in currencies"
                                    :key="currency.id"
                                    @click="selectSwapToCurrency(currency)"
                                    class="tw-flex tw-cursor-pointer tw-items-center tw-p-3 hover:tw-bg-gray-700"
                                >
                                    <img
                                        :src="currency.icon"
                                        class="tw-h-6 tw-w-6 tw-rounded-full"
                                        :alt="currency.name"
                                    />
                                    <span class="tw-ml-2 tw-text-white">{{
                                        currency.name
                                    }}</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="tw-mb-2 tw-block tw-text-gray-400"
                                >Exchange Amount</label
                            >
                            <input
                                type="text"
                                placeholder="Please enter amount of exchange"
                                class="tw-w-full tw-rounded-lg tw-border tw-border-gray-700 tw-bg-gray-800 tw-p-3 tw-text-white"
                            />
                        </div>
                        <div class="tw-mt-4">
                            <!-- Submit Button -->
                            <button
                                class="tw-w-full tw-rounded-lg tw-bg-cyan-500 tw-py-3 tw-text-black tw-transition-colors hover:tw-bg-cyan-400"
                            >
                                Transfer
                            </button>
                        </div>
                        <div class="tw-mt-4">
                            <!-- Submit Button -->
                            <button
                                @click="$emit('close')"
                                class="tw-w-full tw-rounded-lg tw-bg-red-500 tw-py-3 tw-text-black tw-transition-colors hover:tw-bg-red-400"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </Transition>
    </Teleport>
</template>
<style scoped>
.modal-enter-active,
.modal-leave-active {
    transition: opacity 0.3s ease;
}

.modal-enter-from,
.modal-leave-to {
    opacity: 0;
}
</style>
