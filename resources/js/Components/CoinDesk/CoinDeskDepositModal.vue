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
                            Deposit
                        </h2>
                    </div>

                    <!-- Content -->
                    <div
                        class="tw-max-h-[calc(100vh-10rem)] tw-overflow-y-auto tw-p-6"
                    >
                        <p class="tw-mb-4 tw-text-gray-400">
                            Please select the currency you want to Deposit
                        </p>

                        <!-- Currency Selector -->
                        <div class="tw-relative tw-mb-6">
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

                        <!-- QR Code -->
                        <div class="tw-mb-6 tw-flex tw-justify-center">
                            <img
                                :src="qrCodeUrl"
                                alt="QR Code"
                                class="tw-h-48 tw-w-48 tw-bg-white"
                            />
                        </div>

                        <!-- Chain Selection -->
                        <div class="tw-mb-6">
                            <p class="tw-mb-2 tw-text-gray-400">Chain name</p>
                            <div class="tw-flex tw-gap-3">
                                <button
                                    v-for="chain in selectedCurrency.chains"
                                    :key="chain"
                                    @click="selectedChain = chain"
                                    :class="[
                                        'tw-rounded-lg tw-border tw-px-4 tw-py-2',
                                        selectedChain === chain
                                            ? 'text-[#edbe00] tw-border-[#edbe00]'
                                            : 'tw-border-gray-700 tw-text-gray-400',
                                    ]"
                                >
                                    {{ chain }}
                                </button>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="tw-mb-6">
                            <p class="tw-mb-2 tw-text-gray-400">Address</p>
                            <div
                                class="tw-flex tw-items-center tw-rounded-lg tw-bg-gray-800 tw-p-3"
                            >
                                <input
                                    type="text"
                                    :value="depositAddress"
                                    readonly
                                    class="tw-flex-1 tw-bg-transparent tw-text-white tw-outline-none"
                                />
                                <button
                                    @click="copyAddress"
                                    class="tw-ml-2 tw-text-[#edbe00] hover:tw-text-cyan-400"
                                >
                                    Copy
                                </button>
                            </div>
                        </div>

                        <!-- Amount Input -->
                        <div class="tw-mb-6">
                            <p class="tw-mb-2 tw-text-gray-400">
                                Deposit amount
                            </p>
                            <input
                                v-model="amount"
                                type="number"
                                placeholder="Please enter the recharge amount"
                                class="tw-w-full tw-rounded-lg tw-bg-gray-800 tw-p-3 tw-text-white tw-outline-none"
                            />
                        </div>

                        <!-- Quick Payment Button -->
                        <button
                            @click="handleQuickPayment"
                            class="tw-w-full tw-rounded-lg tw-bg-[#edbe00] tw-py-3 tw-text-black tw-transition-colors hover:tw-bg-[#edbe00] "
                        >
                            Quick Payment
                        </button>

                        <!-- Offsite Links -->
                        <div class="tw-mt-8">
                            <p class="tw-mb-4 tw-text-gray-400">Offsite link</p>
                            <div class="tw-grid tw-grid-cols-5 tw-gap-4">
                                <a
                                    v-for="exchange in exchanges"
                                    :key="exchange.name"
                                    :href="exchange.url"
                                    class="tw-flex tw-flex-col tw-items-center tw-rounded-lg tw-bg-gray-800 tw-p-3 tw-transition-colors hover:tw-bg-gray-700"
                                >
                                    <img
                                        :src="exchange.icon"
                                        alt=""
                                        class="tw-mb-2 tw-h-10 tw-w-10"
                                    />
                                    <span class="tw-text-sm tw-text-gray-400">{{
                                        exchange.name
                                    }}</span>
                                </a>
                            </div>
                        </div>

                        <!-- Important Notice -->
                        <div
                            class="tw-mt-8 tw-rounded-lg tw-bg-gray-800 tw-p-4"
                        >
                            <div
                                class="tw-mb-4 tw-flex tw-items-center tw-text-yellow-500"
                            >
                                <AlertTriangleIcon
                                    class="tw-mr-2 tw-h-5 tw-w-5"
                                />
                                <h3 class="tw-font-semibold">
                                    Important Notice
                                </h3>
                            </div>
                            <ol
                                class="tw-list-decimal tw-space-y-2 tw-pl-4 tw-text-gray-400"
                            >
                                <li
                                    v-for="(notice, index) in importantNotices"
                                    :key="index"
                                >
                                    {{ notice }}
                                </li>
                            </ol>
                        </div>
                        <div>
                            <button
                                @click="closeModal"
                                class="tw-mt-2 tw-w-full tw-rounded-lg tw-bg-red-500 tw-py-3 tw-text-black tw-transition-colors hover:tw-bg-red-400"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Contact Button -->
                <button
                    @click="handleContact"
                    class="tw-fixed tw-bottom-4 tw-right-4 tw-flex tw-items-center tw-rounded-full tw-bg-green-500/90 tw-px-4 tw-py-2 tw-text-white"
                >
                    <HeadphonesIcon class="tw-mr-2 tw-h-5 tw-w-5" />
                    Contact Us
                </button>
            </div>
        </Transition>
    </Teleport>
</template>

<script setup lang="ts">
import {
    AlertTriangleIcon,
    ArrowLeftIcon,
    ChevronDownIcon,
    HeadphonesIcon,
} from 'lucide-vue-next';
import { defineEmits, defineProps, ref } from 'vue';

interface Props {
    isOpen: boolean;
}

const props = defineProps<Props>();
const emit = defineEmits(['update:isOpen', 'close']);

// State
const isDropdownOpen = ref(false);
const amount = ref('');
const depositAddress = ref('0x8A94B03cc7Da56a8A38B90792991c7CA96b3EC70');

// Types
interface Currency {
    id: string;
    name: string;
    icon: string;
    chains: string[];
}

interface Exchange {
    name: string;
    icon: string;
    url: string;
}

// Data
const currencies: Currency[] = [
    {
        id: 'usdt',
        name: 'USDT',
        icon: 'https://static-00.iconduck.com/assets.00/tether-cryptocurrency-icon-2048x2048-dp13oydi.png',
        chains: ['ECR20', 'TRC20'],
    },
    {
        id: 'eth',
        name: 'ETH',
        icon: 'https://cryptologos.cc/logos/ethereum-eth-logo.png',
        chains: ['ETH'],
    },
    {
        id: 'btc',
        name: 'BTC',
        icon: 'https://cryptologos.cc/logos/bitcoin-btc-logo.png',
        chains: ['BTC'],
    },
    {
        id: 'usdc',
        name: 'USDC',
        icon: 'https://cryptologos.cc/logos/usd-coin-usdc-logo.png',
        chains: ['ECR-20'],
    },
    {
        id: 'dai',
        name: 'DAI',
        icon: 'https://cryptologos.cc/logos/multi-collateral-dai-dai-logo.png',
        chains: ['ECR-20'],
    },
    {
        id: 'shib',
        name: 'SHIB',
        icon: 'https://cryptologos.cc/logos/shiba-inu-shib-logo.png',
        chains: ['ECR-20'],
    },
    {
        id: 'xrp',
        name: 'XRP',
        icon: 'https://cryptologos.cc/logos/xrp-xrp-logo.png',
        chains: ['Ripple'],
    },
];
const selectedCurrency = ref(currencies[0]);

const selectedChain = ref(selectedCurrency.value.chains[0]);
// Methods
const closeModal = () => {
    emit('update:isOpen', false);
    emit('close');
};

const exchanges: Exchange[] = [
    {
        name: 'Gemini',
        icon: 'https://t3.ftcdn.net/jpg/06/48/76/10/360_F_648761086_8GpmhVy3qRHvdHpjzIYDPtJXap6SXFFQ.jpg',
        url: '#',
    },
    {
        name: 'Coinbase',
        icon: 'https://www.svgrepo.com/show/331345/coinbase-v2.svg',
        url: '#',
    },
    {
        name: 'Kraken',
        icon: 'https://cdn-icons-png.flaticon.com/512/1355/1355845.png',
        url: '#',
    },
    {
        name: 'Shakepay',
        icon: 'https://shakepay.com/assets/images/logo.png',
        url: '#',
    },
    {
        name: 'OTC',
        icon: 'https://cdn-icons-png.flaticon.com/512/1442/1442106.png',
        url: '#',
    },
];
const importantNotices = [
    'The above deposit address is the official payment address of the platform, please look for the official deposit address of the platform, and the loss of funds caused by incorrect charging shall be borne by yourself;',
    'Please make sure that your computer and browser are safe to prevent information from being tampered with or leaked;',
    'After you recharge the above address, you need to confirm the entire network node before it can be credited;',
    'Please select the above-mentioned token system and currency type and transfer the corresponding amount for deposit. Please do not transfer any other irrelevant assets, otherwise they will not be retrieved.',
];

// Computed
const qrCodeUrl = ref(
    'https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg',
);

// Methods
const selectCurrency = (currency: Currency) => {
    selectedCurrency.value = currency;
    isDropdownOpen.value = false;
};

const copyAddress = () => {
    navigator.clipboard.writeText(depositAddress.value);
};

const handleQuickPayment = () => {
    // Implement quick payment logic
};

const handleContact = () => {
    // Implement contact logic
};

// Exchange Link Component
</script>

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
