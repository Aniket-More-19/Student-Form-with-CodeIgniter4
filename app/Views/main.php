<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php $title ?? "Student Form" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css linked -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Handlee&family=Patrick+Hand&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

    <!-- STYLES -->

    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            font-family: "Roboto";
        }

        .header {
            background-color: #ffeb80;
            padding: 1.5rem;
        }

        .header h1 {
            text-align: center;
        }

        /* student form */

        .input-container {
            min-width: 40rem;
            max-width: 40rem;
        }

        .stud-form-container {
            padding: 2rem;
        }

        .form-container {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            row-gap: 1rem;
        }

        .submit-button {
            padding: 0.5rem 2rem;
            font-size: 1.2rem;
            background-color: #ffeb80;
            border-width: 0.09rem;
            border-radius: 0.4rem;
        }

        .submit-button:hover {
            background-color: rgb(11, 10, 2);
            color: #ffeb80;
            border-color: #ffeb80;
            border-width: 0.1rem;
        }

        .studentList-btn-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .studentList-btn {
            padding: 0.5rem 2rem;
            font-size: 1.2rem;
            background-color: #ffeb80;
            border-width: 0.09rem;
            border-radius: 0.4rem;
        }

        .studentList-btn:hover {
            background-color: rgb(11, 10, 2);
            color: #ffeb80;
            border-color: #ffeb80;
            border-width: 0.1rem;
        }

        /* student list */
        .studentList {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .student-table-container {
            min-width: 80rem;
            max-width: 80rem;

            min-height: 27rem;
            max-height: 27rem;
            overflow: auto;
            border: 0.1rem solid black;
        }

        .register-btn-container {
            margin-top: 1rem;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .register-btn {
            padding: 0.5rem 2rem;
            font-size: 1.2rem;
            background-color: #ffeb80;
            border-width: 0.09rem;
            border-radius: 0.4rem;
        }

        .register-btn:hover {
            background-color: rgb(11, 10, 2);
            color: #ffeb80;
            border-color: #ffeb80;
            border-width: 0.1rem;
        }
    </style>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header class="header">
        <h1>Student Registration</h1>
    </header>

    <!-- main content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- SCRIPTS -->

    <!-- script for bootstrap js to work for poppers, dropdowns,etc. elements -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- for dropdown popper selection to work -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>



</body>

</html>