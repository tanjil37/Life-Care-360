<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bloodFlowController extends Controller
{
    public function index()
    {
        $blood_donations = [
            [
                'donate_name' => 'Alex Harper',
                'phone_no' => '555-0123', // Dr. John Smith's phone
                'group_name' => 'O+',
                'bag_size' => '450 mL',
                'donate_date' => '2025-01-15',
                'expire_date' => '2025-02-26' // ~6 weeks shelf life for whole blood
            ],
            [
                'donate_name' => 'Sara Ahmed',
                'phone_no' => '555-0124', // Dr. Muminul Islam's phone
                'group_name' => 'A-',
                'bag_size' => '350 mL',
                'donate_date' => '2025-01-20',
                'expire_date' => '2025-03-03'
            ],
            [
                'donate_name' => 'Liam Ortiz',
                'phone_no' => '555-0125', // Dr. Michael Brown's phone
                'group_name' => 'B+',
                'bag_size' => '500 mL',
                'donate_date' => '2025-02-01',
                'expire_date' => '2025-03-15'
            ],
            [
                'donate_name' => 'Emma Lee',
                'phone_no' => '555-0126', // Dr. Emily Davis's phone
                'group_name' => 'AB+',
                'bag_size' => '250 mL',
                'donate_date' => '2025-02-10',
                'expire_date' => '2025-02-24'
            ],
            [
                'donate_name' => 'Noah Patel',
                'phone_no' => '555-0127', // Dr. Lisa Chen's phone
                'group_name' => 'O-',
                'bag_size' => '300 mL',
                'donate_date' => '2025-02-15',
                'expire_date' => '2025-03-29'
            ]
        ];

        $blood_receptions = [
            [
                'receiver_name' => 'Grace Turner',
                'phone_number' => '555-0128', // Dr. Robert Patel's phone
                'group_name' => 'O+',
                'bag_size' => '450 mL',
                'receive_date' => '2025-02-20',
                'review' => 'Transfusion successful, patient stable.'
            ],
            [
                'receiver_name' => 'Jameson Reid',
                'phone_number' => '555-0129', // Dr. Anna Rodriguez's phone
                'group_name' => 'A-',
                'bag_size' => '350 mL',
                'receive_date' => '2025-02-22',
                'review' => 'Minor reaction, monitored overnight.'
            ],
            [
                'receiver_name' => 'Olivia Kim',
                'phone_number' => '555-0130', // Dr. David Kim's phone
                'group_name' => 'B+',
                'bag_size' => '500 mL',
                'receive_date' => '2025-02-23',
                'review' => 'No complications, full recovery expected.'
            ],
            [
                'receiver_name' => 'Ethan Brooks',
                'phone_number' => '555-0131', // Dr. Sophia Turner's phone
                'group_name' => 'AB+',
                'bag_size' => '250 mL',
                'receive_date' => '2025-02-24',
                'review' => 'Quick procedure, patient doing well.'
            ],
        ];
        //  return view('all_doctors', ['doctors' => $doctors]);
        return view('bloodFlow', [
            'blood_donations' => $blood_donations,
            'blood_receptions' => $blood_receptions
        ]);
    }
}
