<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = [
            [
                'name' => 'Dr. John Smith',
                'specialty' => 'Cardiology',
                'email' => 'john.smith@hospital.com',
                'phone' => '555-0123',
                'image' => 'https://media.istockphoto.com/id/538774262/photo/smiling-doctor-portrait.jpg?s=612x612&w=0&k=20&c=pWArrI02ECiUW7tq94Kxpk7lODkX55QnwcvusWIANds=',
                'day' => 'Monday-wednesday',
                'time' => '10:00 AM'
            ],
            [
                'name' => 'Dr. Muminul Islam',
                'specialty' => 'Pediatrics',
                'email' => 'muminul.i@hospital.com',
                'phone' => '555-0124',
                'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGRvY3RvcnN8ZW58MHx8MHx8fDA%3D',
                'day' => 'Wednesday-Thursday',
                'time' => '2:00 PM'
            ],
            [
                'name' => 'Dr. Michael Brown',
                'specialty' => 'Neurology',
                'email' => 'michael.b@hospital.com',
                'phone' => '555-0125',
                'image' => 'https://media.istockphoto.com/id/1345058004/photo/young-male-doctor-standing-confidently-with-his-arms-crossed.webp?a=1&s=612x612&w=0&k=20&c=Na5xinf3boOerzJEHFcpdnSt4oRPxKAXoQgOdrOTH80=',
                'day' => 'Friday-Tuesday',
                'time' => '11:30 AM'
            ],
            [
                'name' => 'Dr. Emily Davis',
                'specialty' => 'Dermatology',
                'email' => 'emily.d@hospital.com',
                'phone' => '555-0126',
                'image' => 'https://images.unsplash.com/photo-1618498082410-b4aa22193b38?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDQyfHx8ZW58MHx8fHx8',
                'day' => 'Tuesday-Saturday',
                'time' => '3:30 PM'
            ],
            [
                'name' => 'Dr. Lisa Chen',
                'specialty' => 'Oncology',
                'email' => 'lisa.c@hospital.com',
                'phone' => '555-0127',
                'image' => 'https://media.istockphoto.com/id/1822270347/photo/asian-woman-wearing-doctor-uniform-doctor-happy-smiling-holding-stethoscope-isolated-over.webp?a=1&b=1&s=612x612&w=0&k=20&c=gJLEm2ZVB0BYGs6v-Xc42yMVHAqZEvTkmQxbTtdkAEA=',
                'day' => 'Thursday-Wednesday',
                'time' => '9:15 AM'
            ],
            [
                'name' => 'Dr. Robert Patel',
                'specialty' => 'Orthopedics',
                'email' => 'robert.p@hospital.com',
                'phone' => '555-0128',
                'image' => 'https://plus.unsplash.com/premium_photo-1661631297261-7c27a49ed8dc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bWFsZSUyMGRvY3RvcnN8ZW58MHx8MHx8fDA%3D',
                'day' => 'Saturday-Monday',
                'time' => '1:45 PM'
            ],
            [
                'name' => 'Dr. Anna Rodriguez',
                'specialty' => 'Gynecology',
                'email' => 'anna.r@hospital.com',
                'phone' => '555-0129',
                'image' => 'https://images.unsplash.com/photo-1674049406176-021807a2802e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGZlbWFsZSUyMGRvY3RvcnN8ZW58MHx8MHx8fDA%3D',
                'day' => 'Sunday-Wednesday',
                'time' => '11:00 AM'
            ],
            [
                'name' => 'Dr. David Kim',
                'specialty' => 'Psychiatry',
                'email' => 'david.k@hospital.com',
                'phone' => '555-0130',
                'image' => 'https://media.istockphoto.com/id/587522764/photo/dedicated-to-good-health.webp?a=1&b=1&s=612x612&w=0&k=20&c=_ZSf-plY_8zvG211NchWmR7yXpOfaeRFP4rWOruSS7Q=',
                'day' => 'Tuesday-Friday',
                'time' => '4:00 PM'
            ],
            [
                'name' => 'Dr. Sophia Turner',
                'specialty' => 'Endocrinology',
                'email' => 'sophia.t@hospital.com',
                'phone' => '555-0131',
                'image' => 'https://media.istockphoto.com/id/2164885087/photo/confident-female-doctor-in-white-coat-holding-stethoscope-in-modern-medical-office-with.webp?a=1&b=1&s=612x612&w=0&k=20&c=KUZ-_3arfHLFmmEn3GUIOMBgzdmywXeUKpXHw6ftoaM=',
                'day' => 'Friday-Monday',
                'time' => '10:30 AM'
            ],
            [
                'name' => 'Dr. James Carter',
                'specialty' => 'Gastroenterology',
                'email' => 'james.c@hospital.com',
                'phone' => '555-0132',
                'image' => 'https://plus.unsplash.com/premium_photo-1661634265749-20267b28e13d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fG1hbGUlMjBkb2N0b3JzfGVufDB8fDB8fHww',
                'day' => 'Thursday-Friday',
                'time' => '3:15 PM'
            ]
        ];

        return view('all_doctors', ['doctors' => $doctors]);
    }
}
