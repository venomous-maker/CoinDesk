<template>
    <div class="trading-panel">
        <div class="tabs">
            <button :class="{ active: activeTab === 'Market' }" @click="activeTab = 'Market'">Market</button>
            <button :class="{ active: activeTab === 'Limit' }" @click="activeTab = 'Limit'">Limit</button>
        </div>

        <div class="panel">
            <div class="trade-box">
                <input
                    type="number"
                    placeholder="Please enter quantity"
                    v-model="buyQuantity"
                />
                <span class="currency">USDT</span>
                <div class="percentages">
                    <button @click="setBuyPercentage(25)">25%</button>
                    <button @click="setBuyPercentage(50)">50%</button>
                    <button @click="setBuyPercentage(75)">75%</button>
                    <button @click="setBuyPercentage(100)">100%</button>
                </div>
                <button class="buy-button" @click="buy">Buy</button>
                <div class="info">
                    <p>Available: {{ availableUSDT }} USDT</p>
                    <p>Max buy: {{ maxBuy }} BTC</p>
                </div>
            </div>

            <div class="trade-box">
                <input
                    type="number"
                    placeholder="Please enter quantity"
                    v-model="sellQuantity"
                />
                <span class="currency">BTC</span>
                <div class="percentages">
                    <button @click="setSellPercentage(25)">25%</button>
                    <button @click="setSellPercentage(50)">50%</button>
                    <button @click="setSellPercentage(75)">75%</button>
                    <button @click="setSellPercentage(100)">100%</button>
                </div>
                <button class="sell-button" @click="sell">Sell</button>
                <div class="info">
                    <p>Available: {{ availableBTC }} BTC</p>
                    <p>Max sell: {{ maxSell }} USDT</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            activeTab: "Market",
            buyQuantity: 0,
            sellQuantity: 0,
            availableUSDT: 0,
            availableBTC: 0,
            maxBuy: 0,
            maxSell: 0,
        };
    },
    methods: {
        setBuyPercentage(percentage) {
            this.buyQuantity = (this.availableUSDT * percentage) / 100;
        },
        setSellPercentage(percentage) {
            this.sellQuantity = (this.availableBTC * percentage) / 100;
        },
        buy() {
            console.log(`Buying ${this.buyQuantity} BTC`);
        },
        sell() {
            console.log(`Selling ${this.sellQuantity} BTC`);
        },
    },
};
</script>

<style scoped>
.trading-panel {
    background-color: #1a1a1a;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 90%;
    margin: 0 auto;
}
.tabs {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.tabs button {
    flex: 1;
    padding: 10px;
    background: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}
.tabs button.active {
    background: #000;
}
.panel {
    display: flex;
    justify-content: space-between;
}
.trade-box {
    width: 48%;
}
.trade-box input {
    width: calc(100% - 40px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #555;
    background: #222;
    color: #fff;
}
.currency {
    float: right;
    margin-top: -35px;
    margin-right: 10px;
    color: #777;
}
.percentages button {
    margin: 5px 5px 0 0;
    padding: 5px 10px;
    background: #444;
    border: none;
    color: #fff;
    cursor: pointer;
}
.percentages button:hover {
    background: #666;
}
.buy-button {
    background: #4caf50;
    padding: 10px;
    width: 100%;
    border: none;
    color: #fff;
    cursor: pointer;
}
.sell-button {
    background: #f44336;
    padding: 10px;
    width: 100%;
    border: none;
    color: #fff;
    cursor: pointer;
}
.info p {
    font-size: 12px;
    color: #aaa;
}
</style>
