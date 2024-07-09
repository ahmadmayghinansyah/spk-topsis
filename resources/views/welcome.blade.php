<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Pemilihan Khatib dan Imam Jumat</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #007BFF;
            color: #fff;
            padding: 1em 0;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2em;
        }

        nav h1 {
            margin: 0;
            font-size: 1.5em;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 2em;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ffeb3b;
        }

        header {
            background: linear-gradient(135deg, #007BFF, #00C6FF);
            color: #fff;
            height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        header .container {
            max-width: 600px;
        }

        header h2 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }

        header p {
            font-size: 1.2em;
            margin-bottom: 1.5em;
        }

        header .btn {
            background: #28a745;
            color: #fff;
            padding: 0.8em 1.5em;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        header .btn:hover {
            background: #218838;
        }

        section {
            padding: 4em 0;
            background: linear-gradient(135deg, #ffffff, #f0f0f0);
        }

        section .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2em;
            text-align: center;
        }

        section h2 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }

        section p {
            font-size: 1.2em;
            line-height: 1.6em;
            margin-bottom: 2em;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 2em 0;
        }

        footer p {
            margin: 0;
        }

        ul, ol {
            text-align: left;
            margin: 0 0 1em 2em;
        }

        .faq {
            text-align: left;
        }

        .faq h3 {
            font-size: 1.5em;
            margin-bottom: 1em;
        }

        .faq p {
            font-size: 1em;
            margin-bottom: 1em;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <h1>Pemilihan Khatib dan Imam Jumat</h1>
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
    </nav>
    <header id="welcome">
        <div class="container">
            <h2>Selamat Datang</h2>
            <p>Ikuti proses pemilihan khatib dan imam Jumat yang transparan dan akuntabel.</p>
            <a href="#about" class="btn">Pelajari Lebih Lanjut</a>
        </div>
    </header>
    <section id="about">
        <div class="container">
            <h2>Tentang Pemilihan</h2>
            <p>Pemilihan ini bertujuan untuk memilih khatib dan imam Jumat yang akan memimpin ibadah dengan integritas dan tanggung jawab.</p>
        </div>
    </section>
    <section id="topsis">
        <div class="container">
            <h2>Pemilihan Khatib dan Imam Jumat dengan Metode TOPSIS</h2>
            <p>Kami dengan bangga memperkenalkan sebuah proses pemilihan yang inovatif untuk memilih khatib dan imam Jumat terbaik melalui metode TOPSIS (Technique for Order of Preference by Similarity to Ideal Solution). Metode ini menjamin transparansi, akuntabilitas, dan objektivitas dalam menentukan pemimpin ibadah yang memiliki integritas dan tanggung jawab tinggi.</p>
            <div class="faq">
                <h3>Mengapa Metode TOPSIS?</h3>
                <p>Metode TOPSIS memungkinkan kita untuk:</p>
                <ul>
                    <li><strong>Menganalisis Kriteria Secara Menyeluruh:</strong> Mempertimbangkan berbagai kriteria penting seperti pengetahuan agama, kemampuan komunikasi, kepemimpinan, dan akhlak.</li>
                    <li><strong>Evaluasi yang Adil:</strong> Setiap calon dievaluasi secara komprehensif berdasarkan kriteria yang telah ditetapkan, memastikan tidak ada bias dalam proses pemilihan.</li>
                    <li><strong>Keputusan Berdasarkan Data:</strong> Dengan menggunakan data dan metode matematis, hasil pemilihan didasarkan pada fakta dan analisis yang objektif.</li>
                </ul>
                <h3>Proses Pemilihan</h3>
                <ol>
                    <li><strong>Pengumpulan Data Calon:</strong> Data dari calon khatib dan imam dikumpulkan, meliputi kualifikasi, pendidikan, dan pengalaman yang relevan.</li>
                    <li><strong>Penentuan Kriteria:</strong> Kriteria pemilihan ditetapkan dan diberi bobot sesuai dengan tingkat kepentingannya.</li>
                    <li><strong>Normalisasi Data:</strong> Data yang dikumpulkan dinormalisasi agar dapat dibandingkan dengan kriteria ideal.</li>
                    <li><strong>Perhitungan Nilai TOPSIS:</strong> Menggunakan formula TOPSIS, setiap calon diberi nilai yang menunjukkan seberapa dekat mereka dengan solusi ideal.</li>
                    <li><strong>Peringkat Calon:</strong> Calon diurutkan berdasarkan nilai TOPSIS mereka, dan calon dengan nilai tertinggi dipilih sebagai khatib dan imam Jumat.</li>
                </ol>
                <h3>Manfaat bagi Komunitas</h3>
                <ul>
                    <li><strong>Kepercayaan Publik:</strong> Dengan proses yang transparan dan objektif, jamaah dapat mempercayai hasil pemilihan.</li>
                    <li><strong>Peningkatan Kualitas Ibadah:</strong> Memilih pemimpin yang terbaik akan meningkatkan kualitas ibadah Jumat.</li>
                    <li><strong>Komunitas yang Lebih Kuat:</strong> Memiliki pemimpin yang dihormati dan dipercaya akan memperkuat ikatan dalam komunitas.</li>
                </ul>
            </div>
            <p>Kami mengundang semua pihak untuk mendukung dan berpartisipasi dalam proses pemilihan ini. Bersama-sama, kita dapat memastikan bahwa khatib dan imam Jumat yang terpilih adalah yang terbaik, demi kebaikan bersama dan kemajuan komunitas kita.</p>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Untuk informasi lebih lanjut, silakan hubungi panitia pemilihan melalui email: @eghinansyah554@gmail.com</p>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Pemilihan Khatib dan Imam Jumat. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>

</html>
