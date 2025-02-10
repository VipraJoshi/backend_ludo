<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Register - LudoMania</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Favicons -->
    <link href="{{ asset('bootstrapasset/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('bootstrapasset/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('bootstrapasset/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrapasset/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrapasset/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrapasset/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrapasset/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrapasset/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrapasset/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('bootstrapasset/assets/css/style.css') }}" rel="stylesheet">


</head>

<style>
    .password {
        input[type="number"] {
            width: 13%;
            line-height: 1;
            margin: .1em;
            padding: 0px 0 4px;
            font-size: 2.0em;
            text-align: center;
            appearance: textfield;
            -webkit-appearance: textfield;
            border: 2px solid black;
            color: #073A39;
            border-radius: 6px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    }
</style>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">LudoMania</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form id="registerForm" class="row g-3 needs-validation" novalidate role="form"
                                        method="POST">
                                        @csrf

                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="yourName"
                                                required>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror


                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" name="username" class="form-control"
                                                    id="yourUsername" required>
                                                <div class="invalid-feedback">Please choose a email.</div>
                                            </div>
                                        </div>
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror

                                        <div class="col-12">
                                            <label for="yourMobile" class="form-label">Mobile</label>
                                            <div class="input-group mb-3 has-validation">
                                                <span class="input-group-text">+91</span>
                                                <input type="number" class="form-control" name="mobile"
                                                    id="yourMobile" required>
                                                <div class="invalid-feedback">Please enter mobile no.</div>
                                            </div>
                                        </div>
                                        @error('mobile')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror


                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <div class="password">
                                                <input type="number" pattern="[0-9]*" value=""
                                                    inputtype="numeric" autocomplete="one-time-code" id="otc-1"
                                                    required>

                                                <!-- Autocomplete not to put on other input -->
                                                <input type="number" pattern="[0-9]*" min="0" max="9"
                                                    maxlength="1" value="" inputtype="numeric" id="otc-2"
                                                    required>
                                                <input type="number" pattern="[0-9]*" min="0" max="9"
                                                    maxlength="1" value="" inputtype="numeric" id="otc-3"
                                                    required>
                                                <input type="number" pattern="[0-9]*" min="0" max="9"
                                                    maxlength="1" value="" inputtype="numeric" id="otc-4"
                                                    required>
                                                <input type="number" pattern="[0-9]*" min="0" max="9"
                                                    maxlength="1" value="" inputtype="numeric" id="otc-5"
                                                    required>
                                                <input type="number" pattern="[0-9]*" min="0" max="9"
                                                    maxlength="1" value="" inputtype="numeric" id="otc-6"
                                                    required>
                                            </div>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        @error('password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept
                                                    the
                                                    <a href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create
                                                Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="{{ url('/login') }}">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('bootstrapasset/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('bootstrapasset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrapasset/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('bootstrapasset/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('bootstrapasset/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('bootstrapasset/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('bootstrapasset/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('bootstrapasset/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('bootstrapasset/assets/js/main.js') }}"></script>
    <script>
        let in1 = document.getElementById('otc-1'),
            ins = document.querySelectorAll('.password input[type="number"]'),
            splitNumber = function(e) {
                let data = e.data || e.target
                    .value; // Chrome doesn't get the e.data, it's always empty, fallback to value then.
                if (!data) return; // Shouldn't happen, just in case.
                if (data.length === 1) return; // Here is a normal behavior, not a paste action.

                popuNext(e.target, data);
                //for (i = 0; i < data.length; i++ ) { ins[i].value = data[i]; }
            },
            popuNext = function(el, data) {
                el.value = data[0]; // Apply first item to first input
                data = data.substring(1); // remove the first char.
                if (el.nextElementSibling && data.length) {
                    // Do the same with the next element and next data
                    popuNext(el.nextElementSibling, data);
                }
            };

        ins.forEach(function(input) {
            /**
             * Control on keyup to catch what the user intent to do.
             * I could have check for numeric key only here, but I didn't.
             */
            input.addEventListener('keyup', function(e) {
                // Break if Shift, Tab, CMD, Option, Control.
                if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e
                    .keyCode == 17) {
                    return;
                }

                // On Backspace or left arrow, go to the previous field.
                if ((e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this
                    .previousElementSibling.tagName === "INPUT") {
                    this.previousElementSibling.select();
                } else if (e.keyCode !== 8 && this.nextElementSibling) {
                    this.nextElementSibling.select();
                }

                // If the target is populated to quickly, value length can be > 1
                if (e.target.value.length > 1) {
                    splitNumber(e);
                }
            });

            /**
             * Better control on Focus
             * - don't allow focus on other field if the first one is empty
             * - don't allow focus on field if the previous one if empty (debatable)
             * - get the focus on the first empty field
             */
            input.addEventListener('focus', function(e) {
                // If the focus element is the first one, do nothing
                if (this === in1) return;

                // If value of input 1 is empty, focus it.
                if (in1.value == '') {
                    in1.focus();
                }

                // If value of a previous input is empty, focus it.
                // To remove if you don't wanna force user respecting the fields order.
                if (this.previousElementSibling.value == '') {
                    this.previousElementSibling.focus();
                }
            });
        });

        /**
         * Handle copy/paste of a big number.
         * It catches the value pasted on the first field and spread it into the inputs.
         */
        in1.addEventListener('input', splitNumber);

        function getOTP() {
            let inputs = document.querySelectorAll('.password input[type="number"]');
            let otp = Array.from(inputs).map(input => input.value).join('');
            return otp;
        }

        // Example usage





        document.getElementById("registerForm").addEventListener("submit", async function(event) {
            event.preventDefault(); // Default form submit ko block karo

            // ✅ FormData se values extract karke JSON object banao
            let formData = {
                name: document.getElementById("yourName").value,
                email: document.getElementById("yourUsername").value,
                mobile: document.getElementById("yourMobile").value,
                password: getOTP(),
                terms: document.getElementById("acceptTerms").checked ? 1 : 0
            };

            try {
                let response = await fetch("{{ url('/api/register') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer {{ env('API_SECRET_TOKEN') }}"
                    },
                    body: JSON.stringify(formData) // ✅ Correct JSON format
                });

                let data = await response.json();

                if (response.ok) {
                    alert("✅ Registration Successful!");
                    window.location.href = "/login"; // Redirect to login page
                } else {
                    alert("❌ Registration Failed: " + (data.message || data.errors.name || data.errors.email ||
                        data.errors.mobile || data.errors.password || data.errors.terms));
                }
            } catch (error) {
                console.error("Error:", error);
                alert("❌ Something went wrong!");
            }
        });
    </script>


</body>

</html>
