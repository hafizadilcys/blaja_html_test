<?php include "includes/header.php" ?>
<!-- Dashboard Basics -->
<div class="dashboard inner-page">
<?php include "includes/navbars.php" ?>
         
        
<div class="container dashboard-page">
    <div class="card card-rounded p-3 p-sm-5 exam-details">
    <h2 class="fw-bold text-danger text-center mt-3">Exam Details</h2>
    <p class='fw-bold text-center mb-5'>Congrats! You have Successfully Clear this Course</p>
      <div class="row mt-4">
          <div class="col-md-6 px-lg-5 mb-5 mb-md-0">
              <div class="card">
                  <div class="icon"><i class="fas fa-check"></i></div>
                  <table>
                      <thead>
                          <tr>
                              <th class='text-success'>Right Answer</th>
                              <th>Marks</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Question No. 1</td>
                              <td>01</td>
                          </tr>
                          <tr>
                              <td>Question No. 3</td>
                              <td>01</td>
                          </tr>
                          <tr>
                              <td>Question No. 6</td>
                              <td>14</td>
                          </tr>
                          <tr>
                              <td>Question No. 9</td>
                              <td>09</td>
                          </tr>
                          <tr>
                              <td>Question No. 12</td>
                              <td>08</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="col-md-6 px-lg-5">
              <div class="card">
                  <div class="icon bg-danger"><i class="fas fa-times"></i></div>
                  <table>
                      <thead>
                          <tr>
                              <th class='text-danger'>Wrong Answer</th>
                              <th>Marks</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Question No. 1</td>
                              <td>00</td>
                          </tr>
                          <tr>
                              <td>Question No. 3</td>
                              <td>00</td>
                          </tr>
                          <tr>
                              <td>Question No. 6</td>
                              <td>00</td>
                          </tr>
                          <tr>
                              <td>Question No. 9</td>
                              <td>00</td>
                          </tr>
                          <tr>
                              <td>Question No. 12</td>
                              <td>00</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
</div>       
<?php include "includes/footer.php"?>