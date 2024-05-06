<form action="{{ route('ubahpassword') }}" method="post">
    @csrf
    <div class="row mb-3">
        <label for="passwordsekarang" class="col-md-4 col-lg-3 col-form-label">Kata Sandi Lama</label>
        <div class="col-md-8 col-lg-9">
            <input name="passwordsekarang" type="password" class="form-control" id="passwordsekarang">
            <div id="notifpasswordsekarang" class="text-danger" style="display: none">Isi password sekarang terlebih
                dahulu</div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="passwordbaru" class="col-md-4 col-lg-3 col-form-label">Kata Sandi Baru</label>
        <div class="col-md-8 col-lg-9">
            <input name="passwordbaru" type="password" class="form-control" id="passwordbaru">
            <div id="min" class="text-danger" style="display: none">password harus lebih dari 8</div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="konfirmasipassword" class="col-md-4 col-lg-3 col-form-label">Konfirmasi Kata Sandi Baru</label>
        <div class="col-md-8 col-lg-9">
            <input name="konfirmasipassword" type="password" class="form-control" id="konfirmasipassword">
            <div id="passwordMatchMessage" class="text-danger" style="display:none;">Password tidak cocok.</div>
            <div id="isiPassword" class="text-danger" style="display:none;">isi terlebih dahulu password baru.</div>
        </div>
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Simpan</button>
    </div>

    @if (session('ubahpassword'))
        <div class="text-danger text-center" style="margin-top: 30px; padding-top: 10px; ">
            {{ session('ubahpassword') }}
        </div>
    @endif

    <script>
        function validateForm() {
            var passwordsekarang = document.getElementById("passwordsekarang").value;
            var passwordBaru = document.getElementById("passwordbaru").value;
            var konfirmasiPassword = document.getElementById("konfirmasipassword").value;
            var submitBtn = document.getElementById("submitBtn");
            var passwordMatchMessage = document.getElementById("passwordMatchMessage");
            var minPasswordMessage = document.getElementById("min");
            var notifpasswordsekarang = document.getElementById("notifpasswordsekarang");

            if (!passwordsekarang) {
                notifpasswordsekarang.style.display = "block";
            } else {
                notifpasswordsekarang.style.display = "none";
            }

            if (passwordBaru.length < 6) {
                minPasswordMessage.style.display = "block";
                submitBtn.disabled = true;
                return;
            } else {
                minPasswordMessage.style.display = "none";
            }

            if (passwordBaru !== '' && konfirmasiPassword !== '') {
                if (passwordBaru === konfirmasiPassword) {
                    submitBtn.disabled = false;
                    passwordMatchMessage.style.display = "none";
                } else {
                    submitBtn.disabled = true;
                    passwordMatchMessage.style.display = "block";
                }
            } else {
                submitBtn.disabled = true;
                passwordMatchMessage.style.display = "none";
            }
        }


        document.getElementById("passwordbaru").addEventListener("keyup", function() {
            validateForm();
            minpassword();
        });

        document.getElementById("konfirmasipassword").addEventListener("keyup", validateForm);

        // Panggil validateForm() untuk menginisialisasi status tombol "Simpan"
        // validateForm();

        function disabledbutton() {
            var tombol = document.getElementById("submitBtn")

            tombol.disabled = true;
        }

        disabledbutton();
    </script>



</form>
