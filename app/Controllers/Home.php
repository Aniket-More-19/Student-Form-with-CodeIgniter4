<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('main');
    }


    public function studentForm()
    {
        try {
            // Load the database
            $db = \Config\Database::connect();
            if ($db->connect()) {
                echo "Database connection successful!";
            } else {
                echo "Failed to connect to the database.";
            }
        } catch (\Exception $e) {
            echo "Database connection error: " . $e->getMessage();
        }

        return view('studentForm');
    }

    public function submitForm()
    {
        $name = $this->request->getPost('name');
        $phoneNumber = $this->request->getPost('phoneNumber');
        $email = $this->request->getPost('email');
        $education = $this->request->getPost('education');

        echo 'Name :', $name, '<br />';
        echo 'Phone :', $phoneNumber, '<br />';
        echo 'Email :', $email, '<br />';
        echo 'Education :', $education, '<br />';

        $studentModel = new StudentModel();
        $data = [
            'name' => $name,
            'phoneNumber' => $phoneNumber,
            'email' => $email,
            'education' => $education
        ];

        try {
            echo "inside try block" . "<br/>";
            $studentModel->insert($data);
            echo "Data inserted successfully!" . "<br/>";
        } catch (\Exception $e) {
            echo "Failed to insert data : " . $e->getMessage();
        }

        return redirect()->to('/');
    }

    public function studentList()
    {
        return view('studentList');
    }
}
