<?= $this->extend('main') ?>

<?= $this->section('content') ?>
<!-- student list -->

<section class="studentList">
    <h3>List of Students</h3>

    <div class="student-table-container">
        <!-- <?php print_r($students);  ?> -->

        <table class="table table-light table-striped studentList-table">
            <tr class="">
                <th>id</th>
                <th>name</th>
                <th>phone number</th>
                <th>email</th>
                <th>education</th>
            </tr>

            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['phoneNumber']; ?></td>
                    <td><?php echo $student['email']; ?></td>
                    <td><?php echo $student['education']; ?></td>
                </tr>

            <?php } ?>
        </table>
    </div>
    <div class="register-btn-container">
        <a href="<?php echo site_url('/') ?>">
            <button class="register-btn">
                Register Student
            </button>
        </a>
    </div>
</section>

<?php $this->endSection() ?>