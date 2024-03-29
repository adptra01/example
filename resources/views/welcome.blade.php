<!doctype html>
<html lang="en">

<head>
    <title>Registration Form Ariston Indonesia Blog Competition 2024
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Google font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Size font Inter -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            /* font-size: 16px; */
            /* font-weight: 400; */
            background: url('/background-form.png');
            height: 100vh;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        /* Media Query untuk layar desktop dengan lebar minimal 1200px */
        @media only screen and (min-width: 1024px) {
            body {
                padding: 0 300px;
            }
        }

        /* Media Query untuk ukuran layar lainnya */
        @media only screen and (max-width: 1023px) {
            body {
                padding: 0 5px;
            }
        }
    </style>
</head>

<body>

    <div class="container pt-5">
        <form action="{{ route('participant.post') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <h3 class="card-text p-2 text-capitalize text-center fw-bold text-danger">ariston indonesia blog
                        competition 2024
                    </h3>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nama lengkap (Sesuai dengan KTP)</label> <input
                            type="text" class="form-control rounded-3" value="{{ old('fullname') }}" name="fullname"
                            id="fullname" aria-describedby="fullnameId" placeholder="Nama Lengkap" />

                        <!-- Error fullname -->
                        @error('fullname')
                            <small id="emailId" class="form-text text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-3" value="{{ old('email') }}" name="email"
                            id="email" aria-describedby="emailId" placeholder="contoh@email.com" />

                        <!-- Error email -->
                        @error('email')
                            <small id="emailId" class="form-text text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">No Whatsapp</label>
                        <input type="number" class="form-control rounded-3" value="{{ old('whatsapp') }}"
                            name="whatsapp" id="whatsapp" aria-describedby="whatsappId" placeholder="08xxxxxxxxx" />

                        <!-- Error whatsappp -->
                        @error('whatsapp')
                            <small id="whatsappId" class="form-text text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="radio" name="gender" id="gender1"
                                value="laki-laki" checked>
                            <label class="form-check-label" for="gender1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="perempuan" name="gender"
                                id="gender2">
                            <label class="form-check-label" for="gender2">
                                Perempuan
                            </label>
                        </div>
                        <!-- Error gender -->
                        @error('gender')
                            <small id="genderId" class="form-text text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="blog_link" class="form-label">Link atau URL bukti tayang / published link
                            blog</label>
                        <input type="url" class="form-control rounded-3" value="{{ old('blog_link') }}"
                            name="blog_link" id="blog_link" aria-describedby="blog_linkId"
                            placeholder="link atau url" />

                        <!-- Error email -->
                        @error('blog_link')
                            <small id="blog_linkId" class="form-text text-danger"> {{ $message }} </small>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="work_file" class="form-label">
                            Upload karya tulis dalam bentuk file
                        </label>
                        <input type="file" class="form-control rounded-3" name="work_file" id="work_file"
                            aria-describedby="work_fileId" />

                        <!-- Error work_file -->
                        @error('work_file')
                            <small id="work_fileId" class="form-text text-danger"> {{ $message }} </small>
                        @enderror

                    </div>
                    <p class="form-text text-muted m-0">Upload File Maks 5 MB (format .pdf, .doc atau
                        .docx)</p>
                    <p class="form-text text-muted m-0">Teknis penamaan file :
                        Judul Karya Tulis_Nama Lengkap Peserta_Nomor Telepon/HP</p>
                    <p class="form-text text-muted m-0">Contoh: Fakta dan Mitos tentang Mandi Air
                        Hangat
                        saat Demam_Ariston_0800000000</p>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="follows" class="form-label">
                            Bukti follow akun social media Ariston Indonesia
                        </label>
                        <input type="file" class="form-control rounded-3" name="follows[]" id="follows"
                            aria-describedby="followsId" multiple />

                        <!-- Error follow sosmed -->
                        @error('follows')
                            <small id="followsId" class="form-text text-danger"> {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <p class="form-text text-muted m-0">Upload File Maks 5 MB (format .pdf, .jpg atau
                        .jpeg)</p>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="mb-3">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreement" required>
                            <label class="form-check-label" for="agreement">
                                Saya sudah membaca dan menyetujui
                                <a class="text-danger text-decoration-none" data-bs-toggle="modal"
                                    data-bs-target="#modalId">syarat dan
                                    ketentuan yang berlaku.</a>
                            </label>
                        </div>

                    </div>
                    <div class="mb-3">
                        <p>Dan menyatakan :</p>
                        <ol>
                            <li>Keikutsertaan dalam Ariston Indonesia Blog Competition 1017</li>
                            <li>Mematuhi segala peraturan dan ketentuan yang telah ditetapkan oleh Ariston
                                Indonesia Blog Competition 1017</li>
                            <li>Menyerahkan karya original milik sendiri untuk dapat disertakan pada Ariston
                                Indonesia Blog Competition 1017</li>
                            <li>Bertanggung jawab penuh atas karya sendiri yang diikutsertakan pada Ariston
                                Indonesia Blog Competition 1014</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="card my-3 rounded-4">
                <div class="card-body">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger">
                            SUBMIT
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal Body -->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header m-3">
                    <h4 class="modal-title fw-bold" id="modalTitleId">
                        Syarat dan Ketentuan
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-3">
                    <section>
                        <h6 class="fw-bold text-danger">Syarat dan Ketentuan Umum</h6>
                        <ol>
                            <li>Peserta harus merupakan warga negara Indonesia (WNI).</li>
                            <li>Peserta dapat menggunakan platform seperti Kompasiana, Kumparan, Kaskus atau
                                platform UGC lainnya.</li>
                            <li>Juri berhak mendiskualifikasi peserta yang tidak memenuhi semua syarat dan ketentuan
                                yang berlaku dan/atau melakukan kecurangan.</li>
                            <li>Kompetisi Blog Ariston Indonesia 2024 terbuka untuk umum
                                <strong>
                                    tanpa dipungut biaya.
                                </strong>
                            </li>
                            <li>Periode Pengajuan Kompetisi Blog Ariston Indonesia:
                                <strong>
                                    30 Maret 2024 – 30 April 2024
                                </strong>
                                (Ariston Indonesia berhak memperpanjang waktu jika masih ada sedikit peserta).
                            </li>
                            <li>Proses Penjurian Kompetisi Blog Ariston Indonesia:
                                <strong>
                                    30 April 2024 - 05 Mei 2024.
                                </strong>
                            </li>
                            <li>Pengumuman Pemenang Kompetisi Blog Ariston Indonesia:
                                <strong>
                                    25 April 2024.
                                </strong>
                            </li>
                            <li>Peserta harus mengikuti akun media sosial Ariston Indonesia:
                                <ul>
                                    <li>Instagram Ariston Indonesia: <a class="text-danger text-decoration-none"
                                            href="https://www.instagram.com/ariston.indonesia/"
                                            target="_blank">@ariston.indonesia</a></li>
                                    <li>TikTok Ariston Indonesia: <a class="text-danger text-decoration-none"
                                            href="https://www.tiktok.com/@ariston.indonesia"
                                            target="_blank">@ariston.indonesia</a></li>
                                    <li>Facebook Ariston Indonesia: <a class="text-danger text-decoration-none"
                                            href="https://www.facebook.com/AristonIndonesia"
                                            target="_blank">AristonIndonesia</a></li>
                                    <li>Youtube Ariston Indonesia: <a class="text-danger text-decoration-none"
                                            href="https://www.youtube.com/@aristonindonesia8668"
                                            target="_blank">Ariston Indonesia</a></li>
                                </ul>
                            </li>
                            <li>Hadiah Kompetisi Blog Ariston Indonesia 2024:
                                <strong>
                                    3 Water Heater (+ termasuk pemasangan
                                    gratis) dari Ariston Indonesia.
                                </strong>
                            </li>
                        </ol>

                    </section>

                    <section>
                        <h6 class="fw-bold text-danger">Syarat dan Ketentuan Teknis</h6>
                        <ol>
                            <li>Tulisan harus minimal 500-800 kata dalam Bahasa Indonesia, dengan tema:
                                “Meningkatkan Kualitas Kenyamanan Rumah dengan Water Heater (Melingkupi Manfaat
                                Mandi Air Hangat, Persiapan Pasang Water Heater, Memilih Water Heater)”</li>
                            <li>Blog yang didaftarkan harus dimiliki secara pribadi dan bebas dari konten SARA,
                                pornografi, perjudian, atau pelanggaran hukum lainnya yang dilarang.</li>
                            <li>Plagiarisme tidak diperbolehkan.</li>
                            <li>Tulisan tidak melanggar hak kekayaan intelektual pihak manapun.</li>
                            <li>Tulisan harus asli dan belum pernah dipublikasikan sebelumnya.</li>
                            <li>Postingan blog peserta harus mematuhi kriteria berikut:
                                <ol type="a">
                                    <li>Judul yang menarik: Secara jelas mencerminkan tema dan fokus yang dipilih.
                                    </li>
                                    <li>Konten informatif: Berbagi tips dan wawasan berharga dalam meningkatkan
                                        kualitas kenyamanan rumah dengan water heater. Pertimbangkan faktor seperti
                                        jenis water heater, fitur yang harus dipertimbangkan, tips pemasangan dan
                                        pemeliharaan.</li>
                                    <li>Gaya penulisan: Gunakan bahasa yang jelas, ringkas, dan pertahankan nada
                                        percakapan.</li>
                                    <li>Sertakan di blog Anda tautan do follow ke Homepage Ariston Indonesia: <a
                                            class="text-danger text-decoration-none"
                                            href="https://www.ariston.com/id-id/"
                                            target="_blank">https://www.ariston.com/id-id/</a></li>
                                </ol>
                            </li>
                            <li>Blog dan backlink harus tetap ada dan tidak boleh diubah setelah kompetisi berakhir.
                            </li>
                        </ol>

                    </section>
                </div>
                <div class="container d-grid">
                    <button type="button" class="btn btn-danger mb-3" data-bs-dismiss="modal">
                        CONFIRM
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    @include('sweetalert::alert')
</body>

</html>
