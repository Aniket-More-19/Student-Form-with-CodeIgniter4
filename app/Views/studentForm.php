<!-- app/Views/studentForm.php -->

<?php $this->extend('main') ?>

<?= $this->section('content') ?>

<!-- student form -->
<section class="stud-form-container">
    <form action="/studentFormSubmit" method="post" class="form-container">
        <div class="mb-3 input-container">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>

        <div class="mb-3 input-container">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" pattern="[0-9]{10}"
                class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
        </div>

        <div class="mb-3 input-container">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
        </div>

        <div class="mb-3 input-container">
            <label for="education" class="form-label">Highest Educational Qualification</label>
            <input type="text" class="form-control" id="education" name="education" placeholder="HSC, B.Tech, etc.">
        </div>

        <button type="submit" class="submit-button">
            Submit
        </button>

    </form>

</section>

<?= $this->endSection() ?>