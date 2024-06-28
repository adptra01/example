<!doctype html>
<html lang="en">

<head>
    <title>
        {{ $title ?? '' }}
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

    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">

    @vite([])
</head>

<body>

    <header>
        @include('layouts.bg-styles')
    </header>

    <main>
        <div class="container-fluid px-5 pt-5">
            <div class="row">
                <div class="col-md sticky-column">
                    <div class="sticky-top">
                        <img src="{{ asset('/assets/img/Image_Banner.svg') }}" class="img-fluid rounded" width="100%"
                            alt="...">

                        <div class="card border-responsive mb-3 mt-3 mt-md-5">
                            <div class="card-body">
                                <h6 class="text-capitalize text-center fw-bold responsive-font">
                                    Thrive Blog Competition 2024
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md scroll-column">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>


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
                                            href="https://www.youtube.com/@aristonindonesia8668" target="_blank">Ariston
                                            Indonesia</a></li>
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
