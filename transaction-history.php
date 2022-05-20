<?php include "includes/header.php" ?>


<div class="container">
    <div class="py-5">
        <div class="row">
            <div class="heading mb-5">
                <h3>Transaction History</h3>
            </div>
        </div>
        <div class="row mb-3 mb-md-4">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="mb-3"><b>From Date</b></label>
                    <input type="date" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="mb-3"><b>To Date</b></label>
                    <input type="date" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div class="mb-2 mb-md-4">
            <div class="table-main">
                <table class="table w-100">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Student Name</th>
                            <th>Student ID</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                            <th>Debit/Credit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/02/2021</td>
                            <td>Martin Alex</td>
                            <td>123456789321</td>
                            <td>123456789987</td>
                            <td><b>Rs. 6,000</b></td>
                            <td><a href="javascript:void(0)" class="debitOrCredit"><span class="badge rounded-pill bg-success w-100 p-3">Debit</span></a></td>
                            <td><a href="report-and-details.php">View Details</a></td>
                        </tr>
                        <tr>
                            <td>01/02/2021</td>
                            <td>Martin Alex</td>
                            <td>123456789321</td>
                            <td>123456789987</td>
                            <td><b>Rs. 6,000</b></td>
                            <td><a href="javascript:void(0)" class="debitOrCredit"><span class="badge rounded-pill bg-warning w-100 p-3">Credit</span></a></td>
                            <td><a href="report-and-details.php">View Details</a></td>
                        </tr>
                        <tr>
                            <td>01/02/2021</td>
                            <td>Martin Alex</td>
                            <td>123456789321</td>
                            <td>123456789987</td>
                            <td><b>Rs. 6,000</b></td>
                            <td><a href="javascript:void(0)" class="debitOrCredit"><span class="badge rounded-pill bg-success w-100 p-3">Debit</span></a></td>
                            <td><a href="report-and-details.php">View Details</a></td>
                        </tr>
                        <tr>
                            <td>01/02/2021</td>
                            <td>Martin Alex</td>
                            <td>123456789321</td>
                            <td>123456789987</td>
                            <td><b>Rs. 6,000</b></td>
                            <td><a href="javascript:void(0)" class="debitOrCredit"><span class="badge rounded-pill bg-warning w-100 p-3">Credit</span></a></td>
                            <td><a href="report-and-details.php">View Details</a></td>
                        </tr>
                        <tr>
                            <td>01/02/2021</td>
                            <td>Martin Alex</td>
                            <td>123456789321</td>
                            <td>123456789987</td>
                            <td><b>Rs. 6,000</b></td>
                            <td><a href="javascript:void(0)" class="debitOrCredit"><span class="badge rounded-pill bg-success w-100 p-3">Debit</span></a></td>
                            <td><a href="report-and-details.php">View Details</a></td>
                        </tr>
                        <tr>
                            <td>01/02/2021</td>
                            <td>Martin Alex</td>
                            <td>123456789321</td>
                            <td>123456789987</td>
                            <td><b>Rs. 6,000</b></td>
                            <td><a href="javascript:void(0)" class="debitOrCredit"><span class="badge rounded-pill bg-warning w-100 p-3">Credit</span></a></td>
                            <td><a href="report-and-details.php">View Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.php" ?>