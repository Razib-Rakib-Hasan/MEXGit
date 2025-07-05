@extends('layouts.master');
@section('pages')
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .invoice-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .logo {
            max-height: 70px;
            margin-bottom: 20px;
        }
        .invoice-header {
            border-bottom: 2px solid #007bff;
            margin-bottom: 30px;
            padding-bottom: 15px;
        }
        .transaction-details {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .amount-box {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            font-size: 0.9em;
            color: #6c757d;
        }
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
        .qr-code {
            width: 120px;
            height: 120px;
            background-color: #eee;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 0.8em;
            text-align: center;
        }
    </style>
     <div class="invoice-container">
        <!-- Header with Logo -->
        <div class="invoice-header">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/200x70?text=ExchangePro" alt="ExchangePro Logo" class="logo">
                    <h4 class="text-primary">Money Exchange Invoice</h4>
                </div>
                <div class="col-md-6 text-end">
                    <h5>Transaction #: <span class="highlight">EX20230715-4587</span></h5>
                    <p>Date: <span class="highlight">July 15, 2023</span></p>
                    <p>Status: <span class="badge bg-success">Completed</span></p>
                </div>
            </div>
        </div>

        <!-- Customer and Transaction Info -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Customer Information</h5>
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Email:</strong> john.doe@example.com</p>
                <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                <p><strong>Customer ID:</strong> CUS-78945</p>
            </div>
            <div class="col-md-6">
                <div class="qr-code">
                    [QR Code Placeholder]<br>
                    Scan for verification
                </div>
            </div>
        </div>

        <!-- Transaction Details -->
        <div class="transaction-details">
            <h5 class="mb-3">Transaction Details</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="amount-box">
                        <h6>Amount Sent</h6>
                        <h3 class="highlight">1,000.00 USD</h3>
                        <p>Exchange Rate: 1 USD = 0.85 EUR</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="amount-box">
                        <h6>Amount Received</h6>
                        <h3 class="highlight">850.00 EUR</h3>
                        <p>Fee: 10.00 USD (1%)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recipient Information -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Sender Information</h5>
                <p><strong>Payment Method:</strong> Credit Card (VISA **** 4567)</p>
                <p><strong>Transaction ID:</strong> TXN-789456123</p>
            </div>
            <div class="col-md-6">
                <h5>Recipient Information</h5>
                <p><strong>Name:</strong> Maria Schmidt</p>
                <p><strong>Bank:</strong> EuroBank AG</p>
                <p><strong>IBAN:</strong> DE89 3704 0044 0532 0130 00</p>
                <p><strong>Reference:</strong> Salary payment July</p>
            </div>
        </div>

        <!-- Transaction Timeline -->
        <h5>Transaction Timeline</h5>
        <div class="mb-4">
            <div class="d-flex mb-2">
                <div class="me-3 text-success">✓</div>
                <div>
                    <strong>Payment received</strong> - July 15, 2023 10:15 AM
                    <p class="text-muted small">Amount of 1,000.00 USD received from credit card</p>
                </div>
            </div>
            <div class="d-flex mb-2">
                <div class="me-3 text-success">✓</div>
                <div>
                    <strong>Currency exchanged</strong> - July 15, 2023 10:17 AM
                    <p class="text-muted small">Converted to 850.00 EUR at rate 1 USD = 0.85 EUR</p>
                </div>
            </div>
            <div class="d-flex mb-2">
                <div class="me-3 text-success">✓</div>
                <div>
                    <strong>Transfer initiated</strong> - July 15, 2023 10:20 AM
                    <p class="text-muted small">Sent to recipient's bank account</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="me-3 text-success">✓</div>
                <div>
                    <strong>Transfer completed</strong> - July 15, 2023 10:45 AM
                    <p class="text-muted small">Funds available to recipient</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="row">
                <div class="col-md-6">
                    <h6>ExchangePro Money Transfer</h6>
                    <p>123 Financial Street, New York, NY 10001<br>
                    Phone: +1 (800) 123-4567<br>
                    Email: support@exchangepro.com</p>
                </div>
                <div class="col-md-6 text-end">
                    <p><strong>Customer Support:</strong> 24/7 available</p>
                    <p><strong>Transaction Reference:</strong> EX20230715-4587</p>
                    <p>Thank you for using our service!</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <p class="small text-muted">This is an automated invoice. No signature required. Transaction details can be verified at www.exchangepro.com/verify using the transaction reference number.</p>
            </div>
        </div>
    </div>
@endsection
