<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hospital Invoice</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .invoice-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            max-width: 900px;
            margin: 30px auto;
        }

        .header {
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .logo img {
            height: 60px;
        }

        .invoice-title {
            font-size: 28px;
            color: #0d6efd;
            font-weight: bold;
        }

        .table thead {
            background-color: #0d6efd;
            color: white;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .total-box {
            text-align: right;
        }

        .footer-note {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .signature {
            height: 50px;
            border-bottom: 1px dashed #aaa;
            width: 200px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <div class="invoice-box">
        <div class="row header align-items-center">
            <div class="col-md-6 logo">
                <!-- Replace with your logo -->
                <img src="https://via.placeholder.com/150x60?text=Hospital+Logo" alt="Hospital Logo" />
            </div>
            <div class="col-md-6 text-end">
                <div class="invoice-title">INVOICE</div>
                <small>Invoice #: INV-10045<br />Date: July 3, 2025</small>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <h6 class="text-primary">Patient Information</h6>
                <p class="mb-1"><strong>John Doe</strong></p>
                <p class="mb-1">Patient ID: P-32145</p>
                <p class="mb-1">Age: 45 | Gender: Male</p>
                <p>Email: john@example.com<br />Phone: +1 234 567 8901</p>
            </div>
            <div class="col-md-6 text-md-end">
                <h6 class="text-primary">Hospital Info</h6>
                <p class="mb-1"><strong>CityCare Hospital</strong></p>
                <p>123 Main Street<br />New York, NY 10001<br />info@citycare.com</p>
            </div>
        </div>

        <div class="table-responsive mb-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Code</th>
                        <th>Quantity</th>
                        <th>Unit Cost</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>General Consultation</td>
                        <td>CONS-001</td>
                        <td>1</td>
                        <td>$50.00</td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>Blood Test</td>
                        <td>TEST-101</td>
                        <td>2</td>
                        <td>$30.00</td>
                        <td>$60.00</td>
                    </tr>
                    <tr>
                        <td>X-Ray (Chest)</td>
                        <td>XR-200</td>
                        <td>1</td>
                        <td>$80.00</td>
                        <td>$80.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p class="mb-1"><strong>Doctor:</strong> Dr. Sarah Thompson</p>
                <p class="mb-1"><strong>Department:</strong> General Medicine</p>
            </div>
            <div class="col-md-6 total-box">
                <table class="table table-borderless">
                    <tr>
                        <th>Subtotal:</th>
                        <td>$190.00</td>
                    </tr>
                    <tr>
                        <th>Tax (5%):</th>
                        <td>$9.50</td>
                    </tr>
                    <tr class="fw-bold text-primary">
                        <th>Total:</th>
                        <td>$199.50</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="signature"></div>
                <p class="mt-2">Authorized Signature</p>
            </div>
            <div class="col-md-6 text-end">
                <p class="footer-note">
                    Thank you for choosing CityCare Hospital. <br />
                    Please contact billing@citycare.com for queries.
                </p>
            </div>
        </div>
    </div>

</body>

</html>
