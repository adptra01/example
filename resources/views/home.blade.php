<x-admin-layout>
    <x-slot name="title">Home</x-slot>
    @include('layouts.datatables')

    <div class="table-responsive">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Laporan</a>
                </li>
                <li class="breadcrumb-item active">Peserta</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table wrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>WhatsApp</th>
                                <th>Jenis Kelamin</th>
                                <th>Blog Link</th>
                                <th>File Karya</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participants as $participant)
                                <tr>
                                    <td>{{ $participant->fullname }}</td>
                                    <td>{{ $participant->email }}</td>
                                    <td class="text-center">{{ $participant->whatsapp }}</td>
                                    <td class="text-capitalize">{{ $participant->gender }}</td>
                                    <td>
                                        @if ($participant->blog_link)
                                            <a href="{{ $participant->blog_link }}" target="_blank">Lihat Blog</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($participant->work_file)
                                            <a
                                                href="{{ route('download.work_file', ['participant' => $participant]) }}">Unduh
                                                File</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-admin-layout>
