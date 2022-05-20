<?php include "includes/header.php" ?>


<div class="container">
    <div class="py-5">
        <!-- <div class="row">
            <div class="heading mb-5">
                <h3>Transaction History</h3>
            </div>
        </div> -->
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
        <div class="row mb-3 mb-md-4">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="mb-3"><b>Search Student</b></label>
                    <label class="wrap w-100">
                        <select class="selectTwo form-control" aria-label=".form-select-sm example">
                            <option>Please type or search from Dropdown</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="mb-3"><b>Search Course</b></label>
                    <label class="wrap w-100">
                        <select class="selectTwo form-control" aria-label=".form-select-sm example">
                            <option>Please type or search from Dropdown</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="mb-3"><b>Test Status</b></label>
                    <label class="wrap w-100">
                        <select class="form-control" aria-label=".form-select-sm example">
                            <option value="Pending">Pending</option>
                            <option value="Complete">Complete</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <label class="mb-3 d-none d-md-block d-sm-block">&nbsp;</label>
                <div class="mb-3">
                    <button type="submit" class="btn btn-main btn-primary btn-block w-100">Search</button>
                </div>
            </div>
        </div>
        <div class="mb-2 mb-md-4">
            <div class="table-main">
                <table class="table w-100">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Test ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Course ID</th>
                            <th>Course Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-2 mb-md-4">
            <div class="table-main">
                <table class="table w-100">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Total Marks</th>
                            <th>Obtain Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Premium Package</td>
                            <td><a href="submit-marks.php">Submit Marks</a></td>
                            <td>1920</td>
                            <td>1080</td>
                        </tr>
                        <tr>
                            <td>Premium Package</td>
                            <td><a href="submit-marks.php">Submit Marks</a></td>
                            <td>1920</td>
                            <td>1080</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.php" ?>