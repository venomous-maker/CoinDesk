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
                            Withdraw
                        </h2>
                    </div>

                    <!-- Content -->
                    <div
                        class="tw-p-6 tw-max-h-[calc(100vh-10rem)] tw-overflow-y-auto"
                    >
                        <div>
                            <div
                                class="tw-grid-cols-1 lg:tw-grid-cols-3 tw-gap-8 tw-grid"
                            >
                                <!-- Main Form -->
                                <div class="lg:tw-col-span-full">
                                    <div class="tw-space-y-6">
                                        <!-- Account Type -->
                                        <div>
                                            <label
                                                class="tw-text-gray-400 tw-mb-2 tw-block"
                                                >Account Type</label
                                            >
                                            <select
                                                class="tw-w-full tw-bg-gray-800 tw-border tw-border-gray-700 tw-rounded-lg tw-p-3 tw-text-white"
                                            >
                                                <option>Exchange</option>
                                            </select>
                                        </div>

                                        <!-- Currency Selection -->
                                        <div>
                                            <label
                                                class="tw-text-gray-400 tw-mb-2 tw-block"
                                                >Please select the currency you
                                                want to withdraw</label
                                            >
                                            <button
                                                class="tw-w-full tw-bg-gray-800 tw-border tw-border-gray-700 tw-rounded-lg tw-p-3 tw-text-white tw-flex tw-items-center tw-justify-between"
                                            >
                                                <div
                                                    class="tw-gap-2 tw-flex tw-items-center"
                                                >
                                                    <img
                                                        src="https://static-00.iconduck.com/assets.00/tether-cryptocurrency-icon-2048x2048-dp13oydi.png"
                                                        alt="USDT"
                                                        class="tw-w-6 tw-h-6 tw-rounded-full"
                                                    />
                                                    <span>USDT</span>
                                                </div>
                                                <ChevronDownIcon
                                                    class="tw-h-5 tw-w-5 tw-text-gray-400"
                                                />
                                            </button>
                                        </div>

                                        <!-- Chain Selection -->
                                        <div>
                                            <div class="tw-gap-3 tw-flex">
                                                <button
                                                    v-for="chain in [
                                                        'ERC20',
                                                        'TRC20',
                                                    ]"
                                                    :key="chain"
                                                    :class="[
                                                        'tw-px-4 tw-py-2 tw-rounded-lg tw-border',
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
                                                class="tw-text-gray-500 tw-text-sm tw-mt-2"
                                            >
                                                *ERC20 coin withdrawal, please
                                                enter ERC20 wallet address
                                            </p>
                                        </div>

                                        <!-- Withdrawal Address -->
                                        <div>
                                            <label
                                                class="tw-text-gray-400 tw-mb-2 tw-block"
                                                >Withdrawal address</label
                                            >
                                            <input
                                                type="text"
                                                placeholder="Please enter wallet address"
                                                class="tw-w-full tw-bg-gray-800 tw-border tw-border-gray-700 tw-rounded-lg tw-p-3 tw-text-white"
                                            />
                                        </div>

                                        <!-- Withdrawal Quantity -->
                                        <div>
                                            <label
                                                class="tw-text-gray-400 tw-mb-2 tw-block"
                                                >Withdrawal Quantity</label
                                            >
                                            <div class="tw-relative">
                                                <input
                                                    type="number"
                                                    placeholder="Please enter the quantity"
                                                    class="tw-w-full tw-bg-gray-800 tw-border tw-border-gray-700 tw-rounded-lg tw-p-3 tw-text-white tw-pr-16"
                                                />
                                                <button
                                                    class="tw--translate-y-1/2 tw-text-cyan-500 hover:tw-text-cyan-400 tw-absolute tw-right-3 tw-top-1/2"
                                                >
                                                    All
                                                </button>
                                            </div>
                                            <p class="tw-text-gray-500 tw-mt-2">
                                                Balance: 0USDT
                                            </p>
                                        </div>

                                        <!-- Handling Fee -->
                                        <div>
                                            <label
                                                class="tw-text-gray-400 tw-mb-2 tw-block"
                                                >Handling fee</label
                                            >
                                            <input
                                                type="number"
                                                value="0"
                                                readonly
                                                class="tw-w-full tw-bg-gray-800 tw-border tw-border-gray-700 tw-rounded-lg tw-p-3 tw-text-white"
                                            />
                                        </div>

                                        <!-- Submit Button -->
                                        <button
                                            class="tw-w-full tw-bg-cyan-500 tw-text-black tw-py-3 tw-rounded-lg hover:tw-bg-cyan-400 tw-transition-colors"
                                        >
                                            Withdraw
                                        </button>
                                    </div>
                                </div>

                                <!-- Important Notice -->
                                <div class="lg:tw-col-span-full">
                                    <div
                                        class="tw-bg-gray-800 tw-rounded-lg tw-p-6"
                                    >
                                        <div
                                            class="tw-gap-2 tw-text-yellow-500 tw-mb-4 tw-flex tw-items-center"
                                        >
                                            <AlertTriangleIcon
                                                class="tw-h-5 tw-w-5"
                                            />
                                            <h3 class="tw-font-semibold">
                                                Important Notice
                                            </h3>
                                        </div>
                                        <ol
                                            class="tw-text-gray-400 tw-list-decimal tw-list-inside tw-space-y-4"
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
                                class="tw-w-full tw-bg-red-500 tw-text-black tw-py-3 tw-rounded-lg hover:tw-bg-red-400 tw-transition-colors tw-mt-2"
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
