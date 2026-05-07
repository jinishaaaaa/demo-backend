<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-7">

            <!-- Card Start -->
            <div class="card shadow border rounded-4">

                <!-- Card Header -->
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3>Student Registration Form</h3>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">

                    <form action="/register" method="POST">
                        @csrf

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text"
                                   name="fullname"
                                   class="form-control"
                                   placeholder="Enter full name">
                                   @error('fullname')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text"
                                   name="phone"
                                   class="form-control"
                                   placeholder="Enter phone number">
                                   @error('phone')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Enter email">
                                   @error('email')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- College -->
                        <div class="mb-3">
                            <label class="form-label">College</label>
                            <input type="text"
                                   name="college"
                                   class="form-control"
                                   placeholder="Enter college name">
                                   @error('college')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Course -->
                        <div class="mb-3">
                            <label class="form-label">Course</label>
                            <input type="text"
                                   name="course"
                                   class="form-control"
                                   placeholder="Enter course name">
                            @error('course')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Semester -->
                        <div class="mb-3">
                            <label class="form-label">Semester</label>
                            <select name="semester" class="form-select">
                                <option value="">Select Semester</option>
                                <option>1st Semester</option>
                                <option>2nd Semester</option>
                                <option>3rd Semester</option>
                                <option>4th Semester</option>
                                <option>5th Semester</option>
                                <option>6th Semester</option>
                                <option>7th Semester</option>
                                <option>8th Semester</option>
                            </select>
                            @error('semester')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>

                    </form>

                </div>

            </div>
            <!-- Card End -->

        </div>

    </div>
</div>

</body>
</html>