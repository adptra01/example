<x-guest-layout>
    <x-slot name="title">Thrive Blog Competition 2024
    </x-slot>
    <form action="{{ route('participant.post') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card mb-3 border-0">
            <div class="card-body">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nama lengkap (Sesuai dengan KTP)</label> <input type="text"
                        class="form-control rounded-3" value="{{ old('fullname') }}" name="fullname" id="fullname"
                        aria-describedby="fullnameId" placeholder="Nama Lengkap" />

                    <!-- Error fullname -->
                    @error('fullname')
                        <small id="emailId" class="form-text text-custom"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control rounded-3" value="{{ old('email') }}" name="email"
                        id="email" aria-describedby="emailId" placeholder="contoh@email.com" />

                    <!-- Error email -->
                    @error('email')
                        <small id="emailId" class="form-text text-custom"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <div class="mb-3">
                    <label for="whatsapp" class="form-label">No Whatsapp</label>
                    <input type="number" class="form-control rounded-3" value="{{ old('whatsapp') }}" name="whatsapp"
                        id="whatsapp" aria-describedby="whatsappId" placeholder="08xxxxxxxxx" />

                    <!-- Error whatsappp -->
                    @error('whatsapp')
                        <small id="whatsappId" class="form-text text-custom"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <div class="mb-3">
                    <div class="form-check form-check-inline">

                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="laki-laki"
                            checked>
                        <label class="form-check-label" for="gender1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="perempuan" name="gender" id="gender2">
                        <label class="form-check-label" for="gender2">
                            Perempuan
                        </label>
                    </div>
                    <!-- Error gender -->
                    @error('gender')
                        <small id="genderId" class="form-text text-custom"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <div class="mb-3">
                    <label for="blog_link" class="form-label">Link atau URL bukti tayang / published link
                        blog</label>
                    <input type="url" class="form-control rounded-3" value="{{ old('blog_link') }}" name="blog_link"
                        id="blog_link" aria-describedby="blog_linkId" placeholder="link atau url" />

                    <!-- Error email -->
                    @error('blog_link')
                        <small id="blog_linkId" class="form-text text-custom"> {{ $message }} </small>
                    @enderror
                </div>

            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <div class="mb-3">
                    <label for="work_file" class="form-label">
                        Upload karya tulis dalam bentuk file
                    </label>
                    <input type="file" class="form-control rounded-3" name="work_file" id="work_file"
                        aria-describedby="work_fileId" />

                    <!-- Error work_file -->
                    @error('work_file')
                        <small id="work_fileId" class="form-text text-custom"> {{ $message }} </small>
                    @enderror

                </div>
                <small class="form-text text-muted m-0">Upload File Maks 5 MB (format .pdf, .doc atau
                    .docx)</small>
                <small class="form-text text-muted m-0">Teknis penamaan file :
                    Judul Karya Tulis_Nama Lengkap Peserta_Nomor Telepon/HP</small>
                <small class="form-text text-muted m-0">Contoh: Fakta dan Mitos tentang Mandi Air
                    Hangat
                    saat Demam_Thrive_0800000000</small>
            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <div class="mb-3">
                    <label for="follows" class="form-label">
                        Bukti follow akun social media Thrive Indonesia
                    </label>
                    <input type="file" class="form-control rounded-3" name="follows[]" id="follows"
                        aria-describedby="followsId" multiple />

                    <!-- Error follow sosmed -->
                    @error('follows')
                        <small id="followsId" class="form-text text-custom"> {{ $message }}
                        </small>
                    @enderror
                </div>
                <small class="form-text text-muted m-0">Upload File Maks 5 MB (format .pdf, .jpg atau
                    .jpeg)</small>
            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <div class="mb-3">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agreement" required>
                        <label class="form-check-label" for="agreement">
                            Saya sudah membaca dan menyetujui
                            <a class="text-custom text-decoration-none" data-bs-toggle="modal"
                                data-bs-target="#modalId">syarat dan
                                ketentuan yang berlaku.</a>
                        </label>
                    </div>

                </div>
                <div class="mb-3">
                    <p>Dan menyatakan :</p>
                    <ol>
                        <li>Keikutsertaan dalam Thrive Indonesia Blog Competition 2024</li>
                        <li>Mematuhi segala peraturan dan ketentuan yang telah ditetapkan oleh Thrive Blog Competition
                            2024</li>
                        <li>Menyerahkan karya original milik sendiri untuk dapat disertakan pada Thrive Blog Competition
                            2024</li>
                        <li>Bertanggung jawab penuh atas karya sendiri yang diikutsertakan pada Thrive Blog Competition
                            2024</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card my-3 border-0">
            <div class="card-body">
                <div class="d-grid">
                    <button type="submit" class="btn btn-custom">
                        SUBMIT
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
