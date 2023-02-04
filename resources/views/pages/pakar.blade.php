@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-3 px-5">
                <h2 class="text-center">Sistem Pakar Padi</h2>
                <div class="mb-3">
                    <label for="varietas" class="form-label">Varietas</label>
                    <select class="form-select" id="varietas" name="varietas">
                        @foreach ($datas as $data)
                            <option value="{{ $data->varietas }}">{{ $data->varietas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gejala" class="form-label">Gejala Penyakit</label>
                    <select class="form-select" id="gejala" name="gejala">
                        @foreach ($hamas as $hama)
                            <option value="{{ $hama }}">{{ $hama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="getData()">
                        Submit
                    </button>      
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sistem Pakar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center mb-3" id="judul"></h2>
                    <h5>Hama = <span id="hama"></span></h5>
                    <p id="pengertian"></p>
                    <p>Pengendalian dapat dilakukan dengan cara:</p>
                    <ol id="list"></ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('javascript')
{{-- Javascript --}}
<script>
    function getData() {
        varietas = document.querySelector('#varietas');
        gejala = document.querySelector('#gejala');
        judul = document.querySelector('#judul');
        hama = document.querySelector('#hama');
        pengertian = document.querySelector('#pengertian');
        list = document.querySelector('#list');

        output = varietas.options[varietas.selectedIndex].value;
        judul.innerHTML = 'Varietas ' + output;
        
        outputGejala = gejala.options[gejala.selectedIndex].value;
        if(outputGejala == 'Tanaman muda dimakan hingga habis sehingga banyak rumpun hilang'){
            hama.innerHTML = 'Keong Mas'
            pengertian.innerHTML = 'Keong mas merupakan salah satu hama utama tanaman padi. Stadia rentan padi yaitu: persemaian dan padi 10 HST. Mekanisme merusak: keong memarut jaringan tanaman dan memakannya. Gejala kerusakan: tanaman muda dimakan hingga habis sehingga banyak rumpun hilang, satu batang padi akan habis dimakan seekor keong selama 3-5 menit.'
            list.innerHTML = `
                <li>Pada saat awal tanaman yaitu umur padi 0-25 hari, lahan sawah perlu dikeringkan dalam keadaan macak-macak hingga keong tidak dapat merayap menuju rumpun padi yang akan diserang. Kalaupun diserang, persentase serangan di bawah ambang kerusakan.</li>
                <li>Pembuatan parit di sekeliling lahan pertanaman agar keong dapat berkumpul lalu dimusnahkan.</li>
                <li>Pembuatan parit di sekeliling lahan pertanaman agar keong dapat berkumpul lalu dimusnahkan.</li>
                <li>Induk keong dan kelompok telur yang tampak dilihat semuanya harus diambil dan dikumpulkan untuk dimusnahkan.</li>
                <li>Pasang saringan dari kawat di pintu air masuk ke lahan sawah sehingga keong dapat terjaring dan tertahan di kawat tersebut.</li>
                <li>Pasang ajir dari kayu untuk tempat meletakkan kelompok telur keong sehingga mudah diambil dan dibuang.</li>
                <li>Dalam parit yang dibuat diberi umpan perangkap berupa daun papaya atau kulit pisang sehingga keong tertarik dan berkumpul sehingga mudah diambil serta dimusnahkan.</li>
            `
        } else if ( outputGejala == 'Daun menguning, mengering, dan mati serta anakan kerdil' || outputGejala == 'Malai padi berwarna coklat dan kering, gabah hampa, serta batang dicabut mudah terlepas' ){
            hama.innerHTML = 'Penggerek batang'
            pengertian.innerHTML = 'Hama paling penting pada tanaman padi, sering menimbulkan kerusakan berat dan kehilangan hasil yang tinggi. Stadia tanaman yang rentan terhadap serangan penggerek batang adalah sejak pembibitan sampai pembentukan malai. Gejala kerusakan yang ditimbulkannya mengakibatkan anakan mati atau sering disebut sundep pada tanaman stadia vegetative dan beluk (malai hampa) pada tanaman stadia generative. Gejala sundep yaitu daun menguning, mengering, dan mati serta anakan kerdil. Sedangkan untuk gejala beluk yaitu malai padi berwarna coklat dan kering, gabah hampa, serta batang dicabut mudah terlepas.'
            list.innerHTML = `
                <li>Tanam serempak.</li>
                <li>Pengumpulan kelompok telur.</li>
                <li>Aplikasi pestisida secara tepat.</li>
                <li>Spot treatment pada tanaman bergejala.</li>
                <li>Aplikasi agen hayati parasitoid telur (Trichogramma sp.).</li>
            `
        } else if ( outputGejala == 'Keluarnya malai sampai matang susu'){
            hama.innerHTML = 'Walang Sangit'
            pengertian.innerHTML = 'Walang sangit merupakan hama yang umum merusak bulir padi pada fase pemasakan, fase penumbuhan tanaman padi yang rentan terhadap serangan walang sangit adalah dari keluarnya malai sampai matang susu. Kerusakan yang ditimbulkannya menyebabkan beras berubah warna dan mengapung, serta hampa. Ambang ekonomi walang sangit adalah lebih dari satu ekor walang sangit per dua rumpun pada masa keluar malai sampai fase pembungaan.'
            list.innerHTML = `
                <li>Kendalikan gulma di sawah dan di sekitar pertanaman.</li>
                <li>Pupuk lahan secara merata agar pertumbuhan tanaman seragam.</li>
                <li>Tangkap walang sangit dengan menggunakan jaring sebelum stadia pembungaan.</li>
                <li>Umpan walang sangit dengan menggunakan ikan yang sudah busuk, daging yang sudah rusak, atau dengan kotoran ayam.</li>
                <li>Apabila serangan sedang mencapai ambang ekonomi, lakukan penyemprotan insektisida.</li>
                <li>Lakukan penyemprotan pada pagi sekali atau sore hari ketika walang sangit berada di kanopi.</li>
            `
        } else if( outputGejala == 'Tepi daun, berwarna keabu-abuan dan lama-lama daun menjadi kering'){
            hama.innerHTML = 'HBD atau Kresek'
            pengertian.innerHTML = 'Penyakit HDB atau Kresek disebabkan oleh bakteri Xanthomonas campestris pv oryzae. Gejala kresek dimulai dari tepi daun, berwarna keabu-abuan dan lama-lama daun menjadi kering. Bagian yang kering ini akan semakin meluas ke arah tulang daun hingga seluruh daun akan tampak mengering. Bila serangan terjadi saat berbunga, proses pengisian gabah menjadi tidak sempurna, menyebabkan gabah tidak terisi penuh atau bahkan hampa. Pada kondisi seperti ini kehilangan hasil bisa mencapai 50-70 persen.'
            list.innerHTML = `
                <li>Penggunaan benih dan bibit sehat. </li>
                <li>Penggunaan agen hayati Corynebacterium atau Paenybacillus polymyxa pada benih umur 14, 28, dan 42 HST dengan dosis 5 cc per liter.</li>
                <li>Pemupukan berimbang, hindari pemupukan N berlebihan, sedangkan P dan K yang cukup.</li>
                <li>Hindari pemupukan saat tanaman memasuki fase bunting.</li>
                <li>Sanitasi lingkungan dan gulma inang.</li>
                <li>Pengairan berselang (satu hari digenangi, tiga hari dikeringkan).</li>
            `
        } else {
            hama.innerHTML = 'Blast'
            pengertian.innerHTML = 'Blast dapat menginfeksi tanaman padi pada semua stadia pertumbuhan. Gejala khas pada daun yaitu bercak berbentuk belah ketupat-lebar di tengah dan meruncing di kedua ujungnya. Ukuran bercak kira-kira 1-1,5-0,3-0,5 cm berkembang menjadi berwarna abu-abu pada bagian tengahnya. Bila infeksi terjadi pada ruas batang dan leher malai (neck black) akan merubah leher malai yang terinfeksi menjadi kehitam-hitaman dan patah, mirip gejala beluk oleh penggerek batang.'
            list.innerHTML = `
                <li>Gunakan varietas tahan blast secara bergantian.</li>
                <li>Gunakan pupuk nitrogen sesuai anjuran.</li>
                <li>Upayakan waktu tanam yang tepat, agar waktu awal pembungaan tidak banyak embun dan hujan terus-menerus.</li>
                <li>Gunakan fungisida yang berbahan aktif metil tiofanat atau fosdifen dan kaugamisin.</li>
            `
        }
    }
</script>
@endsection