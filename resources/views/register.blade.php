<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-primary">
    <section class="p-3 p-md-4 p-xl-4 mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border border-light-subtle rounded-3">
                        <div class="card-body p-3 p-md-3 p-xl-3">
                            <div class="row">
                                <div class="col-13">
                                    <div class="mb-5">
                                        <h4 class="text-center">Register Here</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('processRegister') }}" method="post">
                                @csrf
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                                            <label for="name" class="form-label">Name</label>
                                            @error('name')
                                               <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror   
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                                            <label for="email" class="form-label">Email</label>
                                            @error('email')
                                               <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror   
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="phone" value="{{ old('phone') }}">
                                            <label for="phone" class="form-label">Phone</label>
                                            @error('phone')
                                               <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror   
                                        </div>
                                    </div>
                                    {{-- <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select @error('role') is-invalid @enderror" name="role" id="role" aria-label="Role">
                                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                            </select>
                                            <label for="role" class="form-label">Role</label>
                                            @error('role')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="form-floating mb-3 position-relative">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                            <label for="password" class="form-label">Password</label>
                                            @error('password')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror 
                                            
                                            <!-- SVG icon for showing/hiding password -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye position-absolute" id="togglePasswordIcon" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3 position-relative">
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                                            @error('password_confirmation')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror 
                                            
                                            <!-- SVG icon for showing/hiding password -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye position-absolute" id="togglePasswordIconConfirmation" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary py-3" type="submit">Register Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-center">
                                        <a href="{{ route('login') }}" class="link-secondary text-decoration-none">Click here to login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordConfirmationInput = document.getElementById('password_confirmation');
            const togglePasswordIcon = document.getElementById('togglePasswordIcon');
            const togglePasswordIconConfirmation = document.getElementById('togglePasswordIconConfirmation');

            // Toggle password visibility for the password field
            togglePasswordIcon.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePasswordIcon.setAttribute('fill', type === 'password' ? 'currentColor' : '#007bff');
            });

            // Toggle password visibility for the password confirmation field
            togglePasswordIconConfirmation.addEventListener('click', function() {
                const type = passwordConfirmationInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordConfirmationInput.setAttribute('type', type);
                togglePasswordIconConfirmation.setAttribute('fill', type === 'password' ? 'currentColor' : '#007bff');
            });
        });
    </script>
</body>
</html>
