<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    {{-- @php
        dd($data)
    @endphp --}}
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Teks Sempro</h4>
    </center>
    <p>
        <span style="font-weight: bold">[Teks Moderator by HMIF]</span> <br>
        Assalamu'alaikum Wr.Wb <br>
        Salam sejahtera untuk kita semua <br>
    </p>
    <p>
        ......... <br>
        Yang terhormat {{ $data[3] }} {{ $data[4] }} selaku dosen pembimbing utama,
        Yang terhormat {{ $data[5] }} {{ $data[6] }} selaku dosen pembimbing pendamping,
        Yang terhormat {{ $data[7] }} {{ $data[8] }} selaku dosen pembahas pertama,
        dan yang terhormat {{ $data[9] }} {{ $data[10] }} selaku dosen pembahas kedua
    </p>
    <p>
        ......... <br>
        Saya ucapkan terimakasih kepada bapak/ibu dosen yang telah bersedia hadir di acara seminar proposal pada pagi
        hari
        ini,
    </p>
    <p>
        ......... <br>
        Sebelumnya, ijinkan saya untuk memperkenalkan diri terlebih dahulu, saya {{ $data[0] }} kamu selaku
        moderator pada
        Seminar proposal kali ini,
    </p>
    <p>
        ......... <br>
        Sebelum seminar proposal dimulai, alangkah baiknya kita berdoa terlebih dahulu sesuai agama dan kepercayaan
        masing-masing.
        BERDOA DIMULAI
    </p>
    <p>
        ......... <br>
        BERDOA DAPAT DIAKHIRI
    </p>
    <p>
        ......... <br>
        Seminar proposal kali ini akan di sampaikan oleh {{ $data[1] }} {{ $data[2] }}.
        Dengan judul proposal {{ $data[11] }},
        Kepada {{ $data[1] }} {{ $data[2] }} dipersilahkan untuk memulai presentasinya.
    </p>
    <p>
        ......... <br>
        Terimakasih kepada {{ $data[1] }} {{ $data[2] }}, yang telah memaparkan proposalnya.
    </p>
    <p>
        ......... <br>
        Selanjutnya dipersilahkan kepada dosen pembahas pertama untuk memberikan pertanyaan atau tanggapannya kepada
        {{ $data[1] }}
        {{ $data[2] }}. untuk {{ $data[7] }} {{ $data[8] }} saya persilahkan.
    </p>
    <p>
        ......... <br>
        Trimakasih atas tanggapan dan masukan dari {{ $data[7] }} {{ $data[8] }}
    </p>
    <p>
        ......... <br>
        Selanjutnya saya persilahkan kepada dosen pembahas kedua
        {{ $data[9] }} {{ $data[10] }} untuk memberikan pertanyaan atau tanggapannya kepada {{ $data[1] }}
        Nama
        mahasiswa sempro
    </p>
    <p>
        ......... <br>
        Baik terimakasih atas tanggapan dan masukan dari {{ $data[9] }} {{ $data[10] }} selaku dosen
        pembahas II
    </p>
    <p>
        ......... <br>
        selanjutnya, saya persilahkan kepada {{ $data[3] }} {{ $data[4] }} dan Bapak/Ibu Nama
        dosen
        {{ $data[5] }} {{ $data[6] }} selaku dosen pembimbing jika ada yang ingin ditambahkan
    </p>
    <p>
        ......... <br>
        Terimakasih atas masukan dari dosen pembimbing
    </p>
    <p>
        ......... <br>
        Selanjutnya, kepada audiens yang ingin memberikan tanggapan, kami persilahkan.
    </p>
    <p>
        ......... <br>
        (kalou tidak ada tanggapan audiens)
        baik apabila dari audiens tidak ada yang memberikan tanggapannya, maka dipersilahkan untuk {{ $data[1] }} Nama
        mahasiswa
        sempro untuk menutup presentasinya.

        (kalok ada tanggapan audiens)
        baik kami persilahkan untuk sadara/i nama audiens untuk memberikan tanggapan kepada {{ $data[1] }} Nama mahasiswa
        sempro
    </p>
    <p>
        ......... <br>
        Baik terimakasih dan SELAMAT saya ucapkan untuk {{ $data[1] }} {{ $data[2] }} yang telah menyelesaikan seminar
        proposalnya pada pagi hari ini.
    </p>
    <p>
        ......... <br>
        Saya ucapkan terimakasih juga atas kehadiran Bapak dan Ibu dosen, serta para audiens pada kegiatan seminar
        proposal
        pada pagi hari ini.

        Untuk para audiens yang ingin mengakses draft proposal dari {{ $data[1] }} {{ $data[2] }} kami tidak akan
        membagikan
        dalam bentuk softfile tetapi kami akan mengirimkan link record seminar proposal pada hari ini dikarenakan ada
        beberapa
        hal yang akan merugikan pihak {{ $data[1] }} {{ $data[2] }}
    </p>
    <p>
        ......... <br>
        Demikian seminar proposal pada pagi hari ini, saya selaku moderator pamit undur diri, jika ada kurang lebihnya
        perkataan saya, saya mohon maaf yang sebesar besarnya.
    </p>

    <p>
        ......... <br>
        Wassalamu'alaikum WR.WB
    </p>
</body>

</html>
