<template>
    <Teleport to="body">
        <Transition name="modal">
            <div
                v-if="isOpen"
                class="tw-bg-black/80 tw-fixed tw-inset-0 tw-z-50 tw-flex tw-items-center tw-justify-center tw-overflow-y-auto"
            >
                <div
                    class="tw-bg-gray-900 tw-w-full tw-max-w-2xl tw-rounded-lg tw-overflow-hidden"
                >
                    <!-- Header -->
                    <div
                        class="tw-p-4 tw-border-b tw-border-gray-800 tw-flex tw-items-center"
                    >
                        <button
                            @click="closeModal"
                            class="tw-text-gray-400 hover:tw-text-white"
                        >
                            <ArrowLeftIcon class="tw-h-6 tw-w-6" />
                        </button>
                        <h2
                            class="tw-text-xl tw-font-semibold tw-text-white tw-ml-4"
                        >
                            Deposit
                        </h2>
                    </div>

                    <!-- Content -->
                    <div
                        class="tw-p-6 tw-max-h-[calc(100vh-10rem)] tw-overflow-y-auto"
                    >
                        <p class="tw-text-gray-400 tw-mb-4">
                            Please select the currency you want to Deposit
                        </p>

                        <!-- Currency Selector -->
                        <div class="tw-relative tw-mb-6">
                            <button
                                @click="isDropdownOpen = !isDropdownOpen"
                                class="tw-w-full tw-p-3 tw-bg-gray-800 tw-rounded-lg tw-text-white tw-flex tw-items-center tw-justify-between"
                            >
                                <div class="tw-flex tw-items-center">
                                    <img
                                        :src="selectedCurrency.icon"
                                        class="tw-w-6 tw-h-6 tw-rounded-full"
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
                                class="tw-w-full tw-bg-gray-800 tw-rounded-lg tw-shadow-xl tw-absolute tw-left-0 tw-top-full tw-z-10 tw-mt-2"
                            >
                                <div
                                    v-for="currency in currencies"
                                    :key="currency.id"
                                    @click="selectCurrency(currency)"
                                    class="tw-p-3 hover:tw-bg-gray-700 tw-cursor-pointer tw-flex tw-items-center"
                                >
                                    <img
                                        :src="currency.icon"
                                        class="tw-w-6 tw-h-6 tw-rounded-full"
                                        :alt="currency.name"
                                    />
                                    <span class="tw-text-white tw-ml-2">{{
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
                                class="tw-w-48 tw-h-48 tw-bg-white"
                            />
                        </div>

                        <!-- Chain Selection -->
                        <div class="tw-mb-6">
                            <p class="tw-text-gray-400 tw-mb-2">Chain name</p>
                            <div class="tw-gap-3 tw-flex">
                                <button
                                    v-for="chain in chains"
                                    :key="chain"
                                    @click="selectedChain = chain"
                                    :class="[
                                        'tw-px-4 tw-py-2 tw-rounded-lg tw-border',
                                        selectedChain === chain
                                            ? 'tw-border-cyan-500 text-cyan-500'
                                            : 'tw-border-gray-700 tw-text-gray-400',
                                    ]"
                                >
                                    {{ chain }}
                                </button>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="tw-mb-6">
                            <p class="tw-text-gray-400 tw-mb-2">Address</p>
                            <div
                                class="tw-bg-gray-800 tw-rounded-lg tw-p-3 tw-flex tw-items-center"
                            >
                                <input
                                    type="text"
                                    :value="depositAddress"
                                    readonly
                                    class="tw-flex-1 tw-bg-transparent tw-text-white tw-outline-none"
                                />
                                <button
                                    @click="copyAddress"
                                    class="tw-text-cyan-500 hover:tw-text-cyan-400 tw-ml-2"
                                >
                                    Copy
                                </button>
                            </div>
                        </div>

                        <!-- Amount Input -->
                        <div class="tw-mb-6">
                            <p class="tw-text-gray-400 tw-mb-2">
                                Deposit amount
                            </p>
                            <input
                                v-model="amount"
                                type="number"
                                placeholder="Please enter the recharge amount"
                                class="tw-w-full tw-bg-gray-800 tw-rounded-lg tw-p-3 tw-text-white tw-outline-none"
                            />
                        </div>

                        <!-- Quick Payment Button -->
                        <button
                            @click="handleQuickPayment"
                            class="tw-w-full tw-bg-cyan-500 tw-text-black tw-py-3 tw-rounded-lg hover:tw-bg-cyan-400 tw-transition-colors"
                        >
                            Quick Payment
                        </button>

                        <!-- Offsite Links -->
                        <div class="tw-mt-8">
                            <p class="tw-text-gray-400 tw-mb-4">Offsite link</p>
                            <div class="tw-grid-cols-5 tw-gap-4 tw-grid">
                                <a
                                    v-for="exchange in exchanges"
                                    :key="exchange.name"
                                    :href="exchange.url"
                                    class="tw-p-3 tw-bg-gray-800 tw-rounded-lg hover:tw-bg-gray-700 tw-transition-colors tw-flex tw-flex-col tw-items-center"
                                >
                                    <img
                                        :src="exchange.icon"
                                        alt=""
                                        class="tw-w-10 tw-h-10 tw-mb-2"
                                    />
                                    <span class="tw-text-sm tw-text-gray-400">{{
                                        exchange.name
                                    }}</span>
                                </a>
                            </div>
                        </div>

                        <!-- Important Notice -->
                        <div
                            class="tw-bg-gray-800 tw-rounded-lg tw-p-4 tw-mt-8"
                        >
                            <div
                                class="tw-text-yellow-500 tw-mb-4 tw-flex tw-items-center"
                            >
                                <AlertTriangleIcon
                                    class="tw-h-5 tw-w-5 tw-mr-2"
                                />
                                <h3 class="tw-font-semibold">
                                    Important Notice
                                </h3>
                            </div>
                            <ol
                                class="tw-text-gray-400 tw-list-decimal tw-pl-4 tw-space-y-2"
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
                                class="tw-w-full tw-mt-2 tw-bg-red-500 tw-text-black tw-py-3 tw-rounded-lg hover:tw-bg-red-400 tw-transition-colors"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Contact Button -->
                <button
                    @click="handleContact"
                    class="tw-bg-green-500/90 tw-text-white tw-px-4 tw-py-2 tw-rounded-full tw-fixed tw-bottom-4 tw-right-4 tw-flex tw-items-center"
                >
                    <HeadphonesIcon class="tw-h-5 tw-w-5 tw-mr-2" />
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
const selectedChain = ref('ERC20');
const amount = ref('');
const depositAddress = ref('0x8A94B03cc7Da56a8A38B90792991c7CA96b3EC70');

// Types
interface Currency {
    id: string;
    name: string;
    icon: string;
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
    }
];const selectedCurrency = ref(currencies[0]);

// Methods
const closeModal = () => {
    emit('update:isOpen', false);
    emit('close');
};

const chains = ['ERC20', 'TRC20'];
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
