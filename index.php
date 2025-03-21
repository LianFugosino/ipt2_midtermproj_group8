<?php
  include('partials\header.php');
  include('partials\sidebar.php');
  include('database\database.php');
  
  //$sql = "SELECT * FROM students";
  //$result = $conn->query($sql);
  

  // Your PHP BACK CODE HERE
  $search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM students 
            WHERE firstname LIKE '%$search%' 
            OR lastname LIKE '%$search%' 
            OR course LIKE '%$search%' 
            OR year LIKE '%$search%' 
            OR block LIKE '%$search%' 
            OR status LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM students";
}
$result = $conn->query($sql);

?>
 <main id="main" class="main">
  
    <div class="pagetitle">
      <h1>Student Management System</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h5 class="card-title">Student Table</h5>
                </div>
                <div>
                  <button  type="button" class="btn btn-primary btn-sm mt-4 mx-3" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add Student</button>
                </div>

              </div>

              <!-- Default Table -->
 
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Year</th>
                    <th scope="col">Block</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
  <tbody>
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['firstname'] ?></td>
          <td><?= $row['lastname'] ?></td>
          <td><?= $row['course'] ?></td>
          <td><?= $row['year'] ?></td>
          <td><?= $row['block'] ?></td>
          <td><?= $row['status'] ?></td>
          <td class="text-center">
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewStudentModal" 
                    data-id="<?= $row['id'] ?>"
                    data-firstname="<?= $row['firstname'] ?>"
                    data-lastname="<?= $row['lastname'] ?>"
                    data-course="<?= $row['course'] ?>"
                    data-year="<?= $row['year'] ?>"
                    data-block="<?= $row['block'] ?>"
                    data-status="<?= $row['status'] ?>">View</button>
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editStudentModal" 
                    data-id="<?= $row['id'] ?>"
                    data-firstname="<?= $row['firstname'] ?>"
                    data-lastname="<?= $row['lastname'] ?>"
                    data-course="<?= $row['course'] ?>"
                    data-year="<?= $row['year'] ?>"
                    data-block="<?= $row['block'] ?>"
                    data-status="<?= $row['status'] ?>">Edit</button>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" data-id="<?= $row['id'] ?>">Delete</button>
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="8" class="text-center">Student not found</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>



    </div>

      <!-- Modal -->
      <div class="modal fade" id="editInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="editInfoLabel">Student Information</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <!-- Add Student Modal -->
<div class="modal fade" id="addStudentModal"  tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addStudentModalLabel">Add New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="database/create.php">
          <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
          </div>
          <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
          </div>
          <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" class="form-control" id="course" name="course" required>
          </div>
          <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" class="form-control" id="year" name="year" required>
          </div>
          <div class="form-group">
            <label for="block">Block:</label>
            <input type="text" class="form-control" id="block" name="block" required>
          </div>
          <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" required>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Add Student</button><br>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
 <!-- View Student Modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="viewStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewStudentModalLabel">View Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Student Information Fields -->
        <p><strong>ID:</strong> <span id="view-id"></span></p>
        <p><strong>First Name:</strong> <span id="view-firstname"></span></p>
        <p><strong>Last Name:</strong> <span id="view-lastname"></span></p>
        <p><strong>Course:</strong> <span id="view-course"></span></p>
        <p><strong>Year:</strong> <span id="view-year"></span></p>
        <p><strong>Block:</strong> <span id="view-block"></span></p>
        <p><strong>Status:</strong> <span id="view-status"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Edit Student Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="editStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editStudentModalLabel">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="edit-student-form" method="post" action="database/update.php">
          <input type="hidden" name="id" id="edit-id">
          <div class="mb-3">
            <label for="edit-firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" id="edit-firstname">
          </div>
          <div class="mb-3">
            <label for="edit-lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="edit-lastname">
          </div>
          <div class="mb-3">
            <label for="edit-course" class="form-label">Course</label>
            <input type="text" class="form-control" name="course" id="edit-course">
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="edit-year" class="form-label">Year</label>
              <input type="number" class="form-control" name="year" id="edit-year">
            </div>
            <div class="col-md-6 mb-3">
              <label for="edit-block" class="form-label">Block</label>
              <input type="text" class="form-control" name="block" id="edit-block">
            </div>
          </div>
          <div class="mb-3">
            <label for="edit-status" class="form-label">Status</label>
            <input type="text" class="form-control" name="status" id="edit-status">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Updated</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Delete Student Modal -->
<div class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="deleteStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteStudentModalLabel">Delete Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this student?</p>
      </div>
      <div class="modal-footer">
        <form id="delete-student-form" method="post" action="database/delete.php">
          <input type="hidden" name="id" id="delete-id">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Include external JS file -->
<script src="assets/js/modal.js"></script>

<script>
document.getElementById('firstname').addEventListener('input', function(event) {
    let input = event.target.value;
    if (/[^a-zA-Z\s]/.test(input)) {
        event.target.value = input.replace(/[^a-zA-Z\s]/g, '');
    }
});

document.getElementById('lastname').addEventListener('input', function(event) {
    let input = event.target.value;
    if (/[^a-zA-Z\s]/.test(input)) {
        event.target.value = input.replace(/[^a-zA-Z\s]/g, '');
    }
});

document.getElementById('course').addEventListener('input', function(event) {
    let input = event.target.value;
    if (/[^a-zA-Z\s]/.test(input)) {
        event.target.value = input.replace(/[^a-zA-Z\s]/g, '');
    }
});

document.getElementById('status').addEventListener('input', function(event) {
    let input = event.target.value;
    if (/[^a-zA-Z\s]/.test(input)) {
        event.target.value = input.replace(/[^a-zA-Z\s]/g, '');
    }
});
  </script>


<?php
include('partials\footer.php');
?>
