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
                            Withdraw
                        </h2>
                    </div>

                    <!-- Content -->
                    <div
                        class="tw-max-h-[calc(100vh-10rem)] tw-overflow-y-auto tw-p-6"
                    >
                        <div>
                            <div
                                class="tw-grid tw-grid-cols-1 tw-gap-8 lg:tw-grid-cols-3"
                            >
                                <!-- Main Form -->
                                <div class="lg:tw-col-span-full">
                                    <div class="tw-space-y-6">
                                        <!-- Account Type -->
                                        <div>
                                            <label
                                                class="tw-mb-2 tw-block tw-text-gray-400"
                                                >Account Type</label
                                            >
                                            <select
                                                class="tw-w-full tw-rounded-lg tw-border tw-border-gray-700 tw-bg-gray-800 tw-p-3 tw-text-white"
                                            >
                                                <option>Exchange</option>
                                                <option>Trade</option>
                                                <option>Perpetual</option>
                                                <option>Finance</option>
                                            </select>
                                        </div>

                                        <!-- Currency Selection -->
                                        <!-- Currency Selector -->
                                        <div class="tw-relative tw-mb-6">
                                            <button
                                                @click="
                                                    isDropdownOpen =
                                                        !isDropdownOpen
                                                "
                                                class="tw-flex tw-w-full tw-items-center tw-justify-between tw-rounded-lg tw-bg-gray-800 tw-p-3 tw-text-white"
                                            >
                                                <div
                                                    class="tw-flex tw-items-center"
                                                >
                                                    <img
                                                        :src="
                                                            selectedCurrency.icon
                                                        "
                                                        class="tw-h-6 tw-w-6 tw-rounded-full"
                                                        :alt="
                                                            selectedCurrency.name
                                                        "
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
                                                    @click="
                                                        selectCurrency(currency)
                                                    "
                                                    class="tw-flex tw-cursor-pointer tw-items-center tw-p-3 hover:tw-bg-gray-700"
                                                >
                                                    <img
                                                        :src="currency.icon"
                                                        class="tw-h-6 tw-w-6 tw-rounded-full"
                                                        :alt="currency.name"
                                                    />
                                                    <span
                                                        class="tw-ml-2 tw-text-white"
                                                        >{{
                                                            currency.name
                                                        }}</span
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Chain Selection -->
                                        <div>
                                            <div class="tw-flex tw-gap-3">
                                                <button
                                                    v-for="chain in [
                                                        'ERC20',
                                                        'TRC20',
                                                    ]"
                                                    :key="chain"
                                                    :class="[
                                                        'tw-rounded-lg tw-border tw-px-4 tw-py-2',
                                                        selectedChain === chain
                                                            ? 'tw-border-cyan-500 tw-text-cyan-500'
                                                            : 'tw-border-gray-700 tw-text-gray-400',
                                                    ]"
                                                    @click="
                                                        selectedChain = chain
                                                    "
                                                >
                                                    {{ chain }}
                                                </button>
                                            </div>
                                            <p
                                                class="tw-mt-2 tw-text-sm tw-text-gray-500"
                                            >
                                                *ERC20 coin withdrawal, please
                                                enter ERC20 wallet address
                                            </p>
                                        </div>

                                        <!-- Withdrawal Address -->
                                        <div>
                                            <label
                                                class="tw-mb-2 tw-block tw-text-gray-400"
                                                >Withdrawal address</label
                                            >
                                            <input
                                                type="text"
                                                placeholder="Please enter wallet address"
                                                class="tw-w-full tw-rounded-lg tw-border tw-border-gray-700 tw-bg-gray-800 tw-p-3 tw-text-white"
                                            />
                                        </div>

                                        <!-- Withdrawal Quantity -->
                                        <div>
                                            <label
                                                class="tw-mb-2 tw-block tw-text-gray-400"
                                                >Withdrawal Quantity</label
                                            >
                                            <div class="tw-relative">
                                                <input
                                                    type="number"
                                                    placeholder="Please enter the quantity"
                                                    class="tw-w-full tw-rounded-lg tw-border tw-border-gray-700 tw-bg-gray-800 tw-p-3 tw-pr-16 tw-text-white"
                                                />
                                                <button
                                                    class="tw-absolute tw-right-3 tw-top-1/2 tw--translate-y-1/2 tw-text-cyan-500 hover:tw-text-cyan-400"
                                                >
                                                    All
                                                </button>
                                            </div>
                                            <p class="tw-mt-2 tw-text-gray-500">
                                                Balance: 0USDT
                                            </p>
                                        </div>

                                        <!-- Handling Fee -->
                                        <div>
                                            <label
                                                class="tw-mb-2 tw-block tw-text-gray-400"
                                                >Handling fee</label
                                            >
                                            <input
                                                type="number"
                                                value="0"
                                                readonly
                                                class="tw-w-full tw-rounded-lg tw-border tw-border-gray-700 tw-bg-gray-800 tw-p-3 tw-text-white"
                                            />
                                        </div>

                                        <!-- Submit Button -->
                                        <button
                                            class="tw-w-full tw-rounded-lg tw-bg-cyan-500 tw-py-3 tw-text-black tw-transition-colors hover:tw-bg-cyan-400"
                                        >
                                            Withdraw
                                        </button>
                                    </div>
                                </div>

                                <!-- Important Notice -->
                                <div class="lg:tw-col-span-full">
                                    <div
                                        class="tw-rounded-lg tw-bg-gray-800 tw-p-6"
                                    >
                                        <div
                                            class="tw-mb-4 tw-flex tw-items-center tw-gap-2 tw-text-yellow-500"
                                        >
                                            <AlertTriangleIcon
                                                class="tw-h-5 tw-w-5"
                                            />
                                            <h3 class="tw-font-semibold">
                                                Important Notice
                                            </h3>
                                        </div>
                                        <ol
                                            class="tw-list-inside tw-list-decimal tw-space-y-4 tw-text-gray-400"
                                        >
                                            <li>
                                                In order to prevent arbitrage
                                                behavior, the transaction volume
                                                can be applied for withdrawal
                                                after reaching the limit.
                                            </li>
                                            <li>
                                                The account will be received
                                                within 24 hours after submitting
                                                the withdrawal application. If
                                                the account is not received
                                                after the estimated time of
                                                withdrawal, please consult the
                                                online customer service.
                                            </li>
                                            <li>
                                                After submitting the withdrawal
                                                application, the funds are in a
                                                frozen state because the
                                                withdrawal is in progress and
                                                the funds are temporarily under
                                                the custody of the system, which
                                                does not mean that you have lost
                                                the asset or the asset is
                                                abnormal.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
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
import { ArrowLeftIcon, HeadphonesIcon } from 'lucide-vue-next';
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
    },
];
const selectedCurrency = ref(currencies[0]);

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
