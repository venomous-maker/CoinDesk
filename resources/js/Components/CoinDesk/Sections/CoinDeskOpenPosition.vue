<template>
    <div class="open-position">
        <h3>Open Position</h3>
        <div class="quantity-buttons">
            <button @click="handlePosition('market')" type="button">
                Market
            </button>
            <button @click="handlePosition('limit')" type="button">
                Limit
            </button>
        </div>
        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="amount">Available Amount</label>
                <input
                    type="text"
                    id="amount"
                    class="form-control"
                    v-model="position.availableAmount"
                    disabled
                />
            </div>

            <div class="form-group">
                <label for="price">Buying Price (USDT)</label>
                <input
                    type="number"
                    id="price"
                    class="form-control"
                    v-model="position.buyingPrice"
                    placeholder="Enter price"
                />
            </div>

            <div class="form-group">
                <label for="leverage">Leverage</label>
                <select
                    v-model="position.leverage"
                    id="leverage"
                    class="form-control"
                >
                    <option v-for="x in leverageOptions" :key="x" :value="x">
                        {{ x }}X
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity (Pieces)</label>
                <input
                    type="number"
                    id="quantity"
                    class="form-control"
                    v-model="position.quantity"
                    placeholder="Enter quantity"
                />
                <div class="quantity-buttons">
                    <button @click="setPercentage(25)" type="button">
                        25%
                    </button>
                    <button @click="setPercentage(50)" type="button">
                        50%
                    </button>
                    <button @click="setPercentage(75)" type="button">
                        75%
                    </button>
                    <button @click="setPercentage(100)" type="button">
                        100%
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label>Initial Margin</label>
                <input
                    type="text"
                    class="form-control"
                    :value="calculateMargin()"
                    disabled
                />
            </div>

            <div class="form-group">
                <label>Handling Fee</label>
                <input type="text" class="form-control" value="0" disabled />
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" v-model="position.takePnL" />
                    Take P&L
                </label>
            </div>

            <div class="form-actions">
                <button type="button" @click="buyLong" class="btn btn-success">
                    Buy Long
                </button>
                <button type="button" @click="buyShort" class="btn btn-danger">
                    Buy Short
                </button>
            </div>
        </form>
    </div>
</template>

<script lang="ts">
export default {
    data() {
        return {
            position: {
                market: 'limit',
                availableAmount: 0,
                buyingPrice: '',
                leverage: '100X',
                quantity: '',
                takePnL: false,
            },
            leverageOptions: ['10', '25', '50', '100'],
        };
    },
    methods: {
        setPercentage(percent: number) {
            const total = this.position.availableAmount;
            this.position.quantity = ((percent / 100) * total).toFixed(2);
        },
        calculateMargin() {
            const price = parseFloat(this.position.buyingPrice) || 0;
            const quantity = parseFloat(this.position.quantity) || 0;
            return (price * quantity).toFixed(2);
        },
        buyLong() {
            console.log('Buy Long', this.position);
        },
        buyShort() {
            console.log('Buy Short', this.position);
        },
        handleSubmit() {
            console.log('Form Submitted', this.position);
        },
        handlePosition(type: string) {
            this.position.market = type;
        },
    },
};
</script>

<style scoped>
h3 {
    color: white;
}
.open-position {
    background-color: #1e1e1e;
    color: #fff;
    padding: 20px;
    border-radius: 1px;
    max-width: 400px;
}

.form-group {
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #555;
    background-color: #2c2c2c;
    color: #fff;
}

.quantity-buttons button {
    margin: 5px 5px 0 0;
    padding: 5px 10px;
    border: 1px solid #555;
    border-radius: 5px;
    background-color: #2c2c2c;
    color: #fff;
    cursor: pointer;
}

.form-actions {
    display: flex;
    justify-content: space-between;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-success {
    background-color: #28a745;
    color: #fff;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
}
</style>
