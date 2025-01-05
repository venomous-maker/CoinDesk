<template>
    <div class="loan-dashboard">
        <div class="cards">
            <div class="card">
                <p class="card-title">USDT</p>
                <p class="card-subtitle">Tether</p>
            </div>
            <div class="card">
                <p class="card-title">Liquidity</p>
                <p class="card-subtitle">$ 100M</p>
            </div>
            <div class="card">
                <p class="card-title">Quantity available</p>
                <p class="card-subtitle">0</p>
            </div>
            <div class="card">
                <p class="card-title">Amount to be repaid</p>
                <p class="card-subtitle">0</p>
            </div>
        </div>

        <div class="content">
            <div class="borrowing-period">
                <h3>Borrowing period</h3>
                <table>
                    <thead>
                    <tr>
                        <th>Currency</th>
                        <th>Interest rates</th>
                        <th>Repayment period</th>
                        <th>Borrowing Amount</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>USDT</td>
                        <td>1.1%</td>
                        <td>2 Day</td>
                        <td>100 - 99999999</td>
                        <td><button>Borrowing</button></td>
                    </tr>
                    <tr>
                        <td>USDT</td>
                        <td>5.11%</td>
                        <td>7 Day</td>
                        <td>100 - 99999999</td>
                        <td><button>Borrowing</button></td>
                    </tr>
                    <tr>
                        <td>USDT</td>
                        <td>12.75%</td>
                        <td>15 Day</td>
                        <td>100 - 99999999</td>
                        <td><button>Borrowing</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="account-info">
                <h3>Account Information</h3>
                <p>Wallet Balance: 0 USDT</p>
                <p>Borrowable amount: 0 USDT</p>
                <p>Borrowed Amount: 0 USDT</p>
                <p>Remaining Amount: 0 USDT</p>
                <button>Get Loan Amount</button>
            </div>
        </div>

        <div class="records">
            <div class="tabs">
                <button>Current Record</button>
                <button>Repayment history</button>
                <button>History Record</button>
            </div>
            <div class="record-table">
                <table>
                    <thead>
                    <tr>
                        <th>Currency</th>
                        <th>Loan amount</th>
                        <th>Repayment Amount</th>
                        <th>Cycle</th>
                        <th>Release time</th>
                        <th>Status</th>
                        <th>Operate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="7">No data</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            // Add data properties if needed
        };
    },
    methods: {
        // Add methods if needed
    }
};
</script>

<style scoped>
.loan-dashboard {
    background-color: black;
    color: white;
    padding: 20px;
}
.cards {
    display: flex;
    justify-content: space-between;
}
.card {
    background-color: #1a1a1a;
    padding: 20px;
    text-align: center;
    width: 22%;
}
.card-title {
    font-size: 18px;
    margin-bottom: 5px;
}
.card-subtitle {
    font-size: 16px;
}
.content {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.borrowing-period {
    width: 60%;
}
.borrowing-period h3,
.account-info h3 {
    margin-bottom: 10px;
}
.borrowing-period table,
.record-table table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}
.borrowing-period th,
.borrowing-period td,
.record-table th,
.record-table td {
    border: 1px solid white;
    padding: 10px;
    text-align: center;
}
.account-info {
    background-color: #1a1a1a;
    padding: 20px;
    width: 35%;
}
.account-info button,
.borrowing-period button {
    background-color: #00bcd4;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}
.account-info button:hover,
.borrowing-period button:hover {
    background-color: #0097a7;
}
.records {
    margin-top: 20px;
}
.tabs {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}
.tabs button {
    background-color: #00bcd4;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}
.tabs button:hover {
    background-color: #0097a7;
}
</style>
