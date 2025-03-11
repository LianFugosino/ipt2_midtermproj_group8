// JavaScript to Populate Modals

var viewStudentModal = document.getElementById('viewStudentModal');
viewStudentModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var firstname = button.getAttribute('data-firstname');
    var lastname = button.getAttribute('data-lastname');
    var course = button.getAttribute('data-course');
    var year = button.getAttribute('data-year');
    var block = button.getAttribute('data-block');
    var status = button.getAttribute('data-status');

    document.getElementById('view-id').textContent = id;
    document.getElementById('view-firstname').textContent = firstname;
    document.getElementById('view-lastname').textContent = lastname;
    document.getElementById('view-course').textContent = course;
    document.getElementById('view-year').textContent = year;
    document.getElementById('view-block').textContent = block;
    document.getElementById('view-status').textContent = status;
});

var editStudentModal = document.getElementById('editStudentModal');
editStudentModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var firstname = button.getAttribute('data-firstname');
    var lastname = button.getAttribute('data-lastname');
    var course = button.getAttribute('data-course');
    var year = button.getAttribute('data-year');
    var block = button.getAttribute('data-block');
    var status = button.getAttribute('data-status');

    document.getElementById('edit-id').value = id;
    document.getElementById('edit-firstname').value = firstname;
    document.getElementById('edit-lastname').value = lastname;
    document.getElementById('edit-course').value = course;
    document.getElementById('edit-year').value = year;
    document.getElementById('edit-block').value = block;
    document.getElementById('edit-status').value = status;
});

var deleteStudentModal = document.getElementById('deleteStudentModal');
deleteStudentModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    document.getElementById('delete-id').value = id;
});


