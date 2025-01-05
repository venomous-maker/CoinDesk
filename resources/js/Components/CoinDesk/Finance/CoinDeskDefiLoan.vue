<template>
    <div class="market-dashboard">
        <!-- Header Section -->
        <div class="header">
            <h1>Diversified Market</h1>
            <div class="summary-cards">
                <div class="card">
                    <p>Total Supply</p>
                    <h2>$ 600M</h2>
                    <i class="fa fa-bar-chart icon"></i> <!-- Font Awesome icon -->
                </div>
                <div class="card">
                    <p>Total Borrowings</p>
                    <h2>$ 600M</h2>
                    <i class="fas fa-icon-google-wallet icon"></i> <!-- Font Awesome icon -->
                </div>
            </div>
        </div>

        <!-- Assets Table -->
        <div class="assets-section">
            <h2>Assets</h2>
            <table class="assets-table">
                <thead>
                <tr>
                    <th>Assets</th>
                    <th>Total Supply</th>
                    <th>
                        Supply Rate
                        <i class="fas fa-info-circle info-icon"></i>
                    </th>
                    <th>Total Borrowings</th>
                    <th>
                        Borrow Rate
                        <i class="fas fa-info-circle info-icon"></i>
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(asset, index) in assets" :key="index">
                    <td>
                        <i :class="asset.icon" class="asset-icon"></i>
                        {{ asset.name }}
                    </td>
                    <td>{{ asset.totalSupply }}</td>
                    <td>{{ asset.supplyRate }}</td>
                    <td>{{ asset.totalBorrowings }}</td>
                    <td>{{ asset.borrowRate }}</td>
                    <td>
                        <button class="view-button">View</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            assets: [
                {
                    icon: "fas fa-coins", // Font Awesome class
                    name: "USDT",
                    totalSupply: "100M",
                    supplyRate: "90% - 150%",
                    totalBorrowings: "100M",
                    borrowRate: "90% - 150%",
                },
                {
                    icon: "fab fa-ethereum", // Font Awesome class
                    name: "ETH",
                    totalSupply: "100M",
                    supplyRate: "90% - 150%",
                    totalBorrowings: "100M",
                    borrowRate: "90% - 150%",
                },
                {
                    icon: "fab fa-bitcoin", // Font Awesome class
                    name: "BTC",
                    totalSupply: "100M",
                    supplyRate: "90% - 150%",
                    totalBorrowings: "100M",
                    borrowRate: "90% - 150%",
                },
                {
                    icon: "fas fa-dollar-sign", // Font Awesome class
                    name: "USDC",
                    totalSupply: "100M",
                    supplyRate: "90% - 150%",
                    totalBorrowings: "100M",
                    borrowRate: "90% - 150%",
                },
                {
                    icon: "fas fa-donate", // Font Awesome class
                    name: "DAI",
                    totalSupply: "100M",
                    supplyRate: "90% - 150%",
                    totalBorrowings: "100M",
                    borrowRate: "90% - 150%",
                },
                {
                    icon: "fas fa-paw", // Font Awesome class
                    name: "SHIB",
                    totalSupply: "100M",
                    supplyRate: "90% - 150%",
                    totalBorrowings: "100M",
                    borrowRate: "90% - 150%",
                },
            ],
        };
    },
};
</script>

<style scoped>
.market-dashboard {
    background-color: #000;
    color: #fff;
    font-family: Arial, sans-serif;
    padding: 20px;
}
.header {
    margin-bottom: 20px;
}
.header h1 {
    margin-bottom: 10px;
}
.summary-cards {
    display: flex;
    justify-content: space-between;
}
.card {
    background: #1a1a1a;
    padding: 20px;
    border-radius: 8px;
    width: 48%;
    text-align: center;
}
.card p {
    margin: 0;
    color: #aaa;
}
.card h2 {
    margin: 10px 0;
    font-size: 24px;
}
.card .icon {
    font-size: 24px;
    color: #00c2ff;
    margin-top: 10px;
}
.assets-section {
    margin-top: 20px;
}
.assets-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}
.assets-table th,
.assets-table td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #444;
}
.asset-icon {
    margin-right: 10px;
    font-size: 18px;
    vertical-align: middle;
    color: #00c2ff;
}
.info-icon {
    font-size: 12px;
    color: #aaa;
    cursor: help;
}
.view-button {
    background: #00c2ff;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
