@extends('layouts.patient')

@section('content')
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <!-- First Slide: Appointment -->
                        <div class="carousel-item active">
                            <img src="https://plus.unsplash.com/premium_photo-1661627538245-649d85e054be?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="Appointment">
                            <div class="carousel-caption">
                                <h1>Life Care 360</h1>
                                <p>Book Your Appointment Today</p>
                            </div>
                        </div>

                        <!-- Second Slide: Blood Donation -->
                        <div class="carousel-item">
                            <img src="https://plus.unsplash.com/premium_photo-1664475458017-5d46034d4a2c?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="Blood Donation">
                            <div class="carousel-caption">
                                <h1>Life Care 360</h1>
                                <p>Join Us for Blood Donation</p>
                            </div>
                        </div>

                        <!-- Third Slide: Blood Recipe -->
                        <div class="carousel-item">
                            <img src="https://plus.unsplash.com/premium_photo-1661627195534-787aa0125999?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="Blood Recipe">
                            <div class="carousel-caption">
                                <h1>Life Care 360</h1>
                                <p>Explore Blood Recipe Benefits</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3">About Us</h2>

                    <p>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b>Welcome to our platform, where booking a doctor’s
                                appointment is quick and simple!</b></font>
                    </div>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b><br></b></font>
                    </div>
                    <div>
                        <font color="#202124" face="arial, sans-serif"><b>Imagine Search, a busy professional feeling under
                                the weather. She visits our site, registers in minutes, and browses available doctors. With
                                a few clicks, she books a slot with Dr. James, a verified specialist. On the other side, Dr.
                                James logs in, updates his schedule, and confirms Sarah’s appointment—all in one place. Our
                                website is designed to save time and connect patients with trusted care. Whether you’re a
                                new user or a returning patient, we’re here to help you find the right doctor effortlessly.
                                Doctors, join us by meeting our easy criteria and start managing your appointments today. No
                                clutter, no extras—just appointments done right!</b></font>
                    </div>.</p>

                </div>

                <div class="col-lg-4 col-md-5 col-12 mx-auto">
                    <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                        <p class="featured-text"><span class="featured-number">5+</span> Years<br> of Experiences
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-6 ps-0">
                    <img src="/assets/images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage"
                        alt="get a vaccine" title="get a vaccine for yourself">
                </div>

                <div class="col-lg-6 col-6 pe-0">
                    <img src="/assets/images/gallery/female-doctor-with-presenting-hand-gesture.jpg"
                        class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">

                        <h2 class="text-center mb-8 text-3xl font-bold text-gray-800">Book an Appointment</h2>

                        <form role="form" method="post" action="{{ route('appointment.booking') }}">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="Name" id="Name" class="form-control"
                                        placeholder="Full name" required='true'>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="Email" id="Email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required='true'>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="telephone" name="MobileNumber" id="MobileNumber" class="form-control"
                                        placeholder="Enter Phone Number" maxlength="10">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="date" name="AppointmentDate" id="AppointmentDate" value=""
                                        class="form-control">

                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="time" name="AppointmentTime" id="AppointmentTime" value=""
                                        class="form-control">

                                </div>

                                <div class="col-lg-6 col-12">
                                    <select name="Specialization" id="Specialization" class="form-control" required>
                                        <option value="">Select specialization</option>
                                        <!--- Fetching States--->
                                        @foreach ($Specializations as $specialization)
                                            <option value="{{ $specialization->id }}">{{ $specialization->Specialization }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <select name="Doctor" id="Doctor" class="form-control">
                                        <option value=''>Select Doctor</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" rows="5" id="Message" name="Message" placeholder="Additional Message"></textarea>
                                </div>

                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control" name="submit" id="submit-button">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>
                        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $("#Specialization").on('change', function() {
                                    let id_specialization = $('#Specialization').val();

                                    $.ajax({
                                        type: "POST",
                                        url: "{{ route('appointment.getDoctor') }}",
                                        data: {
                                            "id_special": id_specialization,
                                            '_token': '{{ csrf_token() }}'
                                        },
                                        cache: false,

                                        success: function(msg) {
                                            $('#Doctor').html(msg);
                                        },

                                        error: function(data) {
                                            console.log('error', data);
                                        },
                                    })
                                });
                            });
                        </script>

                    </div>
                </div>

            </div>
        </div>
        <!-- Add this right after the closing </section> tag of the booking section -->
        <section class="container section-padding" id="reviews">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-8 text-3xl font-bold text-gray-800">Patient Reviews</h2>
                </div>
                <!-- Review Cards -->
                <div class="col-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Review 1 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <img src="/assets/images/218.jpg"
                                alt="Reviewer 1" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Sarah Johnson</h3>
                                <p class="text-sm text-gray-500">February 15, 2025</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic">"Booking my appointment was so easy! Dr. James
                            was amazing, and the whole process took less than 5 minutes."</p>
                    </div>

                    <!-- Review 2 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <img src="/assets/images/201.jpg" alt="Reviewer 2"
                                class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Anthony P. Straka</h3>
                                <p class="text-sm text-gray-500">February 10, 2025</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic">"I donated blood through their event and felt
                            great about it. The site is super user-friendly!"</p>
                    </div>

                    <!-- Review 3 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <img src="/assets/images/207.jpg"
                                alt="Reviewer 3" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">April D. Kreger</h3>
                                <p class="text-sm text-gray-500">January 28, 2025</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic">"Found a specialist instantly, and the
                            appointment went smoothly. Highly recommend!"</p>
                    </div>

                    <!-- Review 4 -->
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <img src="/assets/images/213.jpg" alt="Reviewer 4"
                                class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">David Patel</h3>
                                <p class="text-sm text-gray-500">February 20, 2025</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic">"The platform saved me so much time. Booking
                            and managing appointments has never been easier!"</p>
                    </div>
                </div>
            </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </section>
@endsection
