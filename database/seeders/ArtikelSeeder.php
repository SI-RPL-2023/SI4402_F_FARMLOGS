<?php

namespace Database\Seeders;

use Ramsey\Uuid\Uuid;
use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Artikel::create([
            'id_artikel' => Uuid::uuid4()->toString() . "\n",
            'nama_artikel' => 'Peran Petani dalam Meningkatkan Ketahanan Pangan',
            'desc_artikel' => 'Petani memiliki peran yang sangat penting dalam meningkatkan ketahanan pangan di Indonesia. Mereka merupakan garda terdepan dalam produksi pangan yang dapat memenuhi kebutuhan masyarakat. Petani dapat membantu menciptakan kondisi pertanian yang lebih efisien dan berkelanjutan melalui penggunaan teknologi yang tepat dan praktik pertanian yang baik.
            Selain itu, petani juga dapat membantu meningkatkan produktivitas pertanian dengan cara meningkatkan kualitas bibit dan penggunaan pupuk yang tepat. Dalam hal ini, pemerintah dan lembaga pertanian dapat memberikan bantuan teknis dan pelatihan untuk petani agar mereka dapat mengoptimalkan produksi pertanian.                        
            Petani juga dapat membantu mengatasi masalah kelangkaan pangan dengan menanam berbagai jenis tanaman pangan yang dapat tumbuh di daerah mereka. Hal ini akan membantu masyarakat lokal untuk memenuhi kebutuhan pangan sehari-hari.
            Oleh karena itu, petani memiliki peran penting dalam meningkatkan ketahanan pangan di Indonesia. Pemerintah dan lembaga pertanian harus memberikan dukungan dan bantuan teknis yang dibutuhkan oleh para petani agar mereka dapat meningkatkan produktivitas dan kualitas hasil pertanian secara berkelanjutan.',
        ]);

        Artikel::create([
            'id_artikel' => Uuid::uuid4()->toString() . "\n",
            'nama_artikel' => ' Teknik-Teknik Bertani Organik dan Contohnya',
            'desc_artikel' => 'Bertani organik adalah cara bertani yang berfokus pada penggunaan bahan-bahan organik dan penghindaran bahan kimia sintetis. Ada beberapa teknik bertani organik yang dapat diterapkan seperti kompos, tanaman berkelompok, rotasi tanaman, hama dan penyakit organik, pengendalian gulma organik, dan irigasi organik.
            Salah satu contoh teknik bertani organik adalah penggunaan kompos kotoran hewan sebagai pupuk organik. Selain itu, penggunaan predator alami seperti laba-laba dan lebah dapat membantu mengendalikan hama secara organik.            
            Penggunaan tanaman penutup tanah juga dapat membantu mengurangi erosi tanah dan mempertahankan kelembaban tanah. Teknik rotasi tanaman juga berguna untuk memperbaiki kesuburan tanah dan menghindari penyebaran hama dan penyakit.
            Dalam bertani organik, irigasi organik juga dapat diterapkan, misalnya dengan memanfaatkan air hujan dan pengelolaan air secara hemat. Dengan menerapkan teknik-teknik bertani organik, pertanian dapat menjadi lebih ramah lingkungan dan menghasilkan produk yang lebih sehat untuk dikonsumsi.',
        ]);

        Artikel::create([
            'id_artikel' => Uuid::uuid4()->toString() . "\n",
            'nama_artikel' => 'Dampak Perubahan Iklim pada Pertanian',
            'desc_artikel' => 'Perubahan iklim memiliki dampak yang signifikan pada sektor pertanian di seluruh dunia. Perubahan suhu yang tidak stabil, pola curah hujan yang berubah, serta cuaca ekstrem dapat mempengaruhi ketersediaan air dan kesuburan tanah yang dibutuhkan dalam pertanian.
            Pertanian adalah sektor yang paling rentan terhadap perubahan iklim karena kebanyakan petani masih bergantung pada cuaca yang stabil untuk memproduksi tanaman yang sehat dan berkualitas.            
            Perubahan iklim dapat mengurangi ketersediaan air untuk pertanian dan meningkatkan risiko kekeringan. Hal ini dapat mengakibatkan penurunan produksi tanaman, kekurangan pangan, dan meningkatkan harga pangan.
            Untuk mengatasi dampak perubahan iklim, teknologi dan inovasi dapat digunakan dalam pertanian, seperti penggunaan varietas tanaman yang tahan kekeringan dan pengembangan sistem irigasi yang lebih efisien.',
        ]);

        Artikel::create([
            'id_artikel' => Uuid::uuid4()->toString() . "\n",
            'nama_artikel' => 'Pentingnya Pemanfaatan Teknologi Digital dalam Pertanian',
            'desc_artikel' => 'Teknologi digital dapat membantu meningkatkan produktivitas dan efisiensi dalam sektor pertanian. Dalam era digital, banyak aplikasi pertanian yang tersedia untuk membantu petani dalam mengelola pertanian mereka.
            Salah satu contoh aplikasi pertanian adalah sistem informasi geografis (SIG) yang dapat membantu petani dalam memilih lokasi tanam, memantau cuaca, dan memperkirakan hasil panen. Selain itu, teknologi sensor dapat digunakan untuk memantau kelembaban tanah, suhu, dan tingkat nutrisi yang diperlukan oleh tanaman.
            Pemanfaatan teknologi digital dalam pertanian juga dapat membantu dalam pengelolaan risiko. Misalnya, teknologi prediksi cuaca dapat membantu petani dalam mengantisipasi cuaca buruk dan mempersiapkan langkah-langkah mitigasi.
            Selain itu, aplikasi pertanian juga dapat membantu petani dalam mengelola keuangan dan rantai pasokan. Aplikasi pertanian dapat membantu dalam memantau inventaris dan mengatur pengiriman hasil panen ke pasar dengan lebih efisien.',
        ]);

        Artikel::create([
            'id_artikel' => Uuid::uuid4()->toString() . "\n",
            'nama_artikel' => 'Pemanfaatan Pupuk Organik dalam Pertanian',
            'desc_artikel' => 'Pupuk organik merupakan salah satu jenis pupuk yang terbuat dari bahan-bahan alami seperti kompos, pupuk hijau, dan limbah pertanian. Pupuk organik memiliki banyak manfaat bagi tanaman dan lingkungan.
            Pemanfaatan pupuk organik dalam pertanian dapat membantu meningkatkan kesuburan tanah dan meningkatkan produktivitas tanaman. Pupuk organik juga lebih ramah lingkungan dibandingkan dengan pupuk kimia, karena tidak mengandung bahan kimia yang berbahaya.            
            Selain itu, pemanfaatan pupuk organik juga dapat membantu mengurangi dampak negatif dari limbah pertanian. Dalam proses pembuatan pupuk organik, limbah pertanian seperti jerami dan daun-daun tanaman dapat dimanfaatkan sebagai bahan baku, sehingga dapat mengurangi jumlah limbah yang dibuang.
            Pupuk organik juga membantu meningkatkan kualitas hasil pertanian, karena memberikan nutrisi yang lebih lengkap bagi tanaman dan menghasilkan tanaman yang lebih sehat dan tahan terhadap hama dan penyakit.',
        ]);

        Artikel::create([
            'id_artikel' => Uuid::uuid4()->toString() . "\n",
            'nama_artikel' => ' Budidaya Tanaman Hidroponik untuk Pangan Masa Depan',
            'desc_artikel' => 'Budidaya tanaman hidroponik menjadi solusi untuk meningkatkan produktivitas dan kualitas hasil pertanian. Tanaman hidroponik tumbuh tanpa tanah, namun menggunakan larutan nutrisi yang terkendali dan disuplai secara terus-menerus.
            Budidaya tanaman hidroponik dapat dilakukan di berbagai tempat, bahkan di dalam ruangan. Hal ini membuatnya cocok untuk diterapkan di perkotaan yang memiliki lahan terbatas dan tidak cocok untuk pertanian konvensional.
            Selain itu, budidaya tanaman hidroponik juga membutuhkan penggunaan air yang lebih sedikit dibandingkan dengan pertanian konvensional, karena air yang digunakan bisa didaur ulang. Hal ini dapat membantu mengurangi penggunaan air dan mengurangi dampak lingkungan dari pertanian.
            Tanaman hidroponik juga memiliki produksi yang lebih tinggi dan hasil yang lebih konsisten karena nutrisi yang terkendali dan lingkungan yang diatur secara optimal. Hal ini dapat membantu meningkatkan keamanan pangan dan mengurangi risiko kelangkaan pangan di masa depan.',
        ]);

    }
}
