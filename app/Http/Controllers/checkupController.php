<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkupController extends Controller
{
    public function index()
    {
        $checkups = [
            [
                'name' => 'ECG (Electrocardiogram)',
                'price' => 800.00,
                'discount' => 10,
                'available_time' => 'Monday-Wednesday, 10:00 AM - 12:00 PM',
                'checkup_doctor_name' => 'Dr. John Smith',
            ],
            [
                'name' => 'Echocardiogram',
                'price' => 3000.00,
                'discount' => 15,
                'available_time' => 'Monday-Wednesday, 11:00 AM - 1:00 PM',
                'checkup_doctor_name' => 'Dr. John Smith',
            ],
            [
                'name' => 'MRI',
                'price' => 12000.00,
                'discount' => 5,
                'available_time' => 'Tuesday, 9:00 AM - 11:00 AM',
                'checkup_doctor_name' => 'Dr. Jane Doe',
            ],
            [
                'name' => 'Blood Test (CBC)',
                'price' => 500.00,
                'discount' => 5,
                'available_time' => 'Monday-Wednesday, 10:30 AM - 11:30 AM',
                'checkup_doctor_name' => 'Dr. John Smith',
            ],
            [
                'name' => 'Ultrasound',
                'price' => 2500.00,
                'discount' => 10,
                'available_time' => 'Wednesday, 10:00 AM - 12:00 PM',
                'checkup_doctor_name' => 'Dr. Emily Brown',
            ],
            [
                'name' => 'Stress Test',
                'price' => 3500.00,
                'discount' => 12,
                'available_time' => 'Monday, 10:00 AM - 11:00 AM',
                'checkup_doctor_name' => 'Dr. John Smith',
            ],
            [
                'name' => 'CT Scan',
                'price' => 8000.00,
                'discount' => 15,
                'available_time' => 'Tuesday, 1:00 PM - 3:00 PM',
                'checkup_doctor_name' => 'Dr. Michael Lee',
            ],
            [
                'name' => 'Colonoscopy',
                'price' => 9000.00,
                'discount' => 25,
                'available_time' => 'Wednesday, 2:00 PM - 4:00 PM',
                'checkup_doctor_name' => 'Dr. Sarah Kim',
            ],
            [
                'name' => 'Endoscopy',
                'price' => 6000.00,
                'discount' => 10,
                'available_time' => 'Monday, 1:00 PM - 3:00 PM',
                'checkup_doctor_name' => 'Dr. Sarah Kim',
            ],
            [
                'name' => 'Mammogram',
                'price' => 3000.00,
                'discount' => 8,
                'available_time' => 'Tuesday, 10:00 AM - 11:00 AM',
                'checkup_doctor_name' => 'Dr. Emily Brown',
            ],
            [
                'name' => 'Bone Density Scan (DEXA)',
                'price' => 4500.00,
                'discount' => 10,
                'available_time' => 'Wednesday, 9:00 AM - 10:00 AM',
                'checkup_doctor_name' => 'Dr. Robert Patel',
            ],
            [
                'name' => 'Liver Function Test',
                'price' => 1200.00,
                'discount' => 5,
                'available_time' => 'Monday-Wednesday, 11:00 AM - 12:00 PM',
                'checkup_doctor_name' => 'Dr. John Smith',
            ],
            [
                'name' => 'Pap Smear',
                'price' => 1500.00,
                'discount' => 7,
                'available_time' => 'Tuesday, 11:00 AM - 12:00 PM',
                'checkup_doctor_name' => 'Dr. Lisa Chen',
            ],
            [
                'name' => 'Thyroid Function Test',
                'price' => 1800.00,
                'discount' => 10,
                'available_time' => 'Monday, 10:00 AM - 11:00 AM',
                'checkup_doctor_name' => 'Dr. John Smith',
            ],
            [
                'name' => 'PET Scan',
                'price' => 30000.00,
                'discount' => 20,
                'available_time' => 'Wednesday, 1:00 PM - 3:00 PM',
                'checkup_doctor_name' => 'Dr. Michael Lee',
            ],
            [
                'name' => 'Spirometry',
                'price' => 2500.00,
                'discount' => 5,
                'available_time' => 'Tuesday, 2:00 PM - 3:00 PM',
                'checkup_doctor_name' => 'Dr. David Ortiz',
            ],
        ];
        
    return view('checkup', ['checkups' => $checkups]);
}
}
