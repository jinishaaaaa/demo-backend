<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border rounded-3">
                
                <div class="card-header bg-primary text-white text-center">
                    <h4>Contact Us</h4>
                </div>

                <div class="card-body">

                    <form action="/ankita" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">oe tero name k ho</label>
                            <input type="text" name="name" class="form-control border" placeholder="Enter your name">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">tero email k xa vann form ma halnu pariyo</label>
                            <input type="email" name="email" class="form-control border" placeholder="Enter your email">
                        </div>

                        <!-- Subject -->
                        <div class="mb-3">
                            <label class="form-label">k karan le aau timi</label>
                            <input type="text" name="subject" class="form-control border" placeholder="Enter subject">
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label class="form-label">message kk xa vann ta haldinxu mah</label>
                            <textarea name="message" rows="4" class="form-control border" placeholder="Write your message"></textarea>
                        </div>

                        <!-- Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Send Message
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>